<?php

namespace App\Serializer\Normalizer;

use App\Entity\Offer;
use App\Repository\WorkDaysRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Serializer\Normalizer\ContextAwareDenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;

class Denormalizer implements ContextAwareDenormalizerInterface, DenormalizerAwareInterface//, DenormalizerInterface
{
    use DenormalizerAwareTrait;

    private const ALREADY_CALLED = 'OFFER_DENORMALIZER_ALREADY_CALLED';

    public function __construct(
        private RequestStack $request,
        private WorkDaysRepository $workDaysRepository
    ) {
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = [])
    {
        $context[self::ALREADY_CALLED] = true;

        $currentRequest = $this->request->getCurrentRequest();
        $contentRequest = json_decode($currentRequest->getContent(), true);
        $workDaysMultiple = $contentRequest["workDaysMultiple"];

        /** @var Offer $offer */
        $offer = $this->denormalizer->denormalize($data, $type, $format, $context);

        foreach ($workDaysMultiple as $item) {
            $workDays = $this->workDaysRepository->findOneBy(['workDays' => $item]);
            $offer->addWorkDaysMultiple($workDays);
        }

        return $offer;
    }

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        if (isset($context[self::ALREADY_CALLED])) {
            return false;
        }

        return $type === Offer::class;
    }


}
