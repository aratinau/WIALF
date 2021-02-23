# codeception

## debug 

    codecept_debug($myVar);

then run with

    codecept run --debug
    
## run one test

    php vendor/bin/codecept run --debug api tests/api/requests/RequestCest:tryToGetRequestsById
