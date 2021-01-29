# Symfony

## generate entities from database

`php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity/Export`

## generate generates getter/setter methods

`php bin/console make:entity --regenerate App`

source: https://symfony.com/doc/current/doctrine/reverse_engineering.html#generating-the-getters-setters-or-php-classes
