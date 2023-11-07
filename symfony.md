# Symfony

## migration specific version

`php bin/console doctrine:migrations:migrate 'DoctrineMigrations\Version20180605025653'`

## generate entities from database

`php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity/Export`

## generate generates getter/setter methods

`php bin/console make:entity --regenerate App\\Entity\\UserDiscussion`

source: https://symfony.com/doc/current/doctrine/reverse_engineering.html#generating-the-getters-setters-or-php-classes

## import from existing database symfony 6
```bash
/srv/app # php bin/console doctrine:mapping:import --help
Description:
  Imports mapping information from an existing database

Usage:
  doctrine:mapping:import [options] [--] <name> [<mapping-type>]

Arguments:
  name                  The bundle or namespace to import the mapping information to
  mapping-type          The mapping type to export the imported mapping information to

Options:
      --em[=EM]         The entity manager to use for this command
      --filter=FILTER   A string pattern used to match entities that should be mapped. (multiple values allowed)
      --force           Force to overwrite existing mapping files.
      --path=PATH       The path where the files would be generated (not used when a bundle is passed).
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -e, --env=ENV         The Environment name. [default: "dev"]
      --no-debug        Switch off debug mode.
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Help:
  The doctrine:mapping:import command imports mapping information
  from an existing database:

  Generate annotation mappings into the src/ directory using App as the namespace:
  php bin/console doctrine:mapping:import App\\Entity annotation --path=src/Entity

  Generate xml mappings into the config/doctrine/ directory using App as the namespace:
  php bin/console doctrine:mapping:import App\\Entity xml --path=config/doctrine

  Generate XML mappings into a bundle:
  php bin/console doctrine:mapping:import "MyCustomBundle" xml

  You can also optionally specify which entity manager to import from with the
  --em option:

  php bin/console doctrine:mapping:import "MyCustomBundle" xml --em=default

  If you don't want to map every entity that can be found in the database, use the
  --filter option. It will try to match the targeted mapped entity with the
  provided pattern string.

  php bin/console doctrine:mapping:import "MyCustomBundle" xml --filter=MyMatchedEntity

  Use the --force option, if you want to override existing mapping files:

  php bin/console doctrine:mapping:import "MyCustomBundle" xml --force

```

## le trait pour les createdAt et updatedAt

`composer require gedmo/doctrine-extensions`

```
Gedmo\Timestampable\Traits\TimestampableEntity;

use TimestampableEntity;
```

## fichier config complet

`php bin/console config:dump security`

## debug config file

`php bin/console debug:config api_platform`
