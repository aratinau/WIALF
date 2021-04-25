Entity.php

```php
<?php

namespace AppBundle\Entity;

class Entity
{
    public function getExpertScientists()
    {
        // This 3 blocks of code do the same thing

        /*
        $criteria = Criteria::create()
            ->andWhere(Criteria::expr()->gt('yearsStudied', 20))
            ->orderBy(['yearsStudied' => 'DESC'])
        ;
        return $this->getGenusScientists()->matching($criteria);*/

        // OR by using repository and static method
        return $this->getGenusScientists()->matching(
            GenusScientistRepository::createExpertCriteria()
        );

        /*
        This function return the same process of the criteria system
        return $this->getGenusScientists()->filter(function(GenusScientist $genusScientist) {
            return $genusScientist->getYearsStudied() > 20;
        });*/
    }
}
```

Repository.php
```php
<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Genus;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityRepository;

class Repository extends EntityRepository
{
    static public function createExpertCriteria()
    {
        return Criteria::create()
            ->andWhere(Criteria::expr()->gt('yearsStudied', 20))
            ->orderBy(['yearsStudied' => 'DESC'])
        ;
    }
}
```
