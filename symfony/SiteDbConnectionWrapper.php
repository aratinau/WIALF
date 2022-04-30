<?php

declare(strict_types=1);

namespace App\DBAL;

use Doctrine\Common\EventManager;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\Exception;

/**
 * Class SiteDbConnectionWrapper
 * @package App\DBAL
 */
class SiteDbConnectionWrapper extends Connection
{
    /**
     * @var array
     */
    private array $params;

    /**
     * SiteDbConnectionWrapper constructor.
     * @param array $params
     * @param Driver $driver
     * @param Configuration|null $config
     * @param EventManager|null $eventManager
     * @throws Exception
     */
    public function __construct(
        array $params,
        Driver $driver,
        ?Configuration $config = null,
        ?EventManager $eventManager = null
    ) {
        $this->params = $params;
        parent::__construct($params, $driver, $config, $eventManager);
    }

    /**
     * @param string $dbName
     * @throws Exception
     */
    public function selectDatabase(string $dbName)
    {
        if ($this->isConnected()) {
            $this->close();
        }
        unset($this->params['url']);
        $this->params['dbname'] = $dbName;

        parent::__construct(
            $this->params,
            $this->_driver,
            $this->_config,
            $this->_eventManager
        );
    }
}