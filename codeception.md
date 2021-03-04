# codeception

## debug 

    codecept_debug($myVar);

then run with

    codecept run --debug

## clean

    php vendor/bin/codecept clean

## run one test

    php vendor/bin/codecept run --debug api tests/api/requests/RequestCest:tryToGetRequestsById

## generate

    php vendor/bin/codecept generate:cest api File
