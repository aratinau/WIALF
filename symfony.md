# Symfony

## generate entities from database

`php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity/Export`

## generate generates getter/setter methods

`php bin/console make:entity --regenerate App\\Entity\\UserDiscussion`

source: https://symfony.com/doc/current/doctrine/reverse_engineering.html#generating-the-getters-setters-or-php-classes

## le trait pour les createdAt et updatedAt

`composer require gedmo/doctrine-extensions`

```
Gedmo\Timestampable\Traits\TimestampableEntity;

use TimestampableEntity;
```

## fichier config complet

`php bin/console config:dump security`
