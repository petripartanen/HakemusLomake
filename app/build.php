<?php
require_once __DIR__ . '/../vendor/autoload.php';
use \Doctrine\DBAL\Configuration;
use \Doctrine\DBAL\DriverManager;
use \Doctrine\DBAL\Schema\Schema;
use \My\Entity\Application;

$appConfigs = include_once __DIR__ . '/config.php';
$databaseOptions = $appConfigs['DoctrineServiceProvider']['dbs.options'];
$config = new Configuration();
$connection = DriverManager::getConnection($databaseOptions, $config);

$schemaManager = $connection->getSchemaManager();

foreach ($schemaManager->listTables() as $table) {
    $schemaManager->dropTable($table);
}

$applicationEntity = new Application();

$schema = new Schema();
$applications = $schema->createTable("Applications");


$applications->addColumn("id", "integer", array("unsigned" => true));


foreach ($applicationEntity->getAttributes() as $key => $options) {
    $databaseConfigurations = $options['databaseConfigurations'];

    if (array_key_exists('column_options', $databaseConfigurations)) {
        $applications->addColumn($key, $databaseConfigurations['data_type'], $databaseConfigurations['column_options']);
    } else {
        $applications->addColumn($key, $databaseConfigurations['data_type']);
    }
}

$applications->setPrimaryKey(array("id"));

$queries = $schema->toSql(
    $connection->getDatabasePlatform()
);
foreach ($queries as $query) {
    $connection->executeQuery($query);
}
echo 'Kanta päivitetty:' . count($schemaManager->listTableColumns('Applications')) . 'saraketta luotu.' . "\r\n";
