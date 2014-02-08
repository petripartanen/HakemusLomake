<?php

namespace My\Repository;


use Silex\Application;
use My\Entity\ApplicationEntity;

class ApplicationRepository {
    private $databaseManager;

    public function __construct(Application $app) {
        $this->databaseManager = $app['db'];
    }

    public function flush($data) {
        $this->databaseManager->insert(ApplicationEntity::$tableName, $data);
    }
} 