<?php

/*
Usage:
* @Groups({"author:write"})
*/

/*
App\Normalizer\AddAuthorGroupsNormalizer:
    bind:
        $decorated: '@api_platform.serializer.normalizer.item'
*/

namespace App\Normalizer;

use App\Entity\Discussion;
use App\Entity\DragonTreasure;
use App\Entity\User;
use Symfony\Component\DependencyInjection\Attribute\AsDecorator;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\Normalizer\ContextAwareDenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class AddAuthorGroupsNormalizer implements ContextAwareDenormalizerInterface
{
    protected $denormalizer;

    private $decorated;
    private $security;

    public function __construct(DenormalizerInterface $decorated, Security $security) {
        $this->security = $security;
        $this->decorated = $decorated;
    }

    public function denormalize($data, string $type, string $format = null, array $context = [])
    {
        if ($this->userIsAuthor($context['object_to_populate']->getAuthor())) {
            $context['groups'][] = 'author:write';
        }

        return $this->decorated->denormalize($data, $type, $format, $context);
    }

    public function supportsDenormalization($data, string $type, string $format = null, array $context = [])
    {
        return $this->decorated->supportsDenormalization($data, $type, $format)
            && $type === Discussion::class;
    }

    private function userIsAuthor(User $user): bool
    {
        /** @var User|null $authenticatedUser */
        $authenticatedUser = $this->security->getUser();

        if (!$authenticatedUser) {
            return false;
        }

        return $authenticatedUser->getId() === $user->getId();
    }
}
