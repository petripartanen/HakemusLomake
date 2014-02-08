<?php
require_once __DIR__ . '/../vendor/autoload.php';
use \Doctrine\DBAL\Configuration;
use \Doctrine\DBAL\DriverManager;
use \Doctrine\DBAL\Schema\Schema;
use \My\Entity\ApplicationEntity;

$appConfigs = include_once __DIR__ . '/config.php';
$databaseOptions = $appConfigs['DoctrineServiceProvider']['db.options'];
$config = new Configuration();
$connection = DriverManager::getConnection($databaseOptions, $config);

$schemaManager = $connection->getSchemaManager();

foreach ($schemaManager->listTables() as $table) {
    $schemaManager->dropTable($table);
}

$applicationEntity = new ApplicationEntity();

$schema = new Schema();
$applications = $schema->createTable(ApplicationEntity::$TABLENAME);


foreach ($applicationEntity->getAttributes() as $key => $options) {
    $databaseConfigurations = $options['databaseConfigurations'];

    if (array_key_exists('column_options', $databaseConfigurations)) {
        $applications->addColumn($key, $databaseConfigurations['data_type'], $databaseConfigurations['column_options']);
    } else {
        $applications->addColumn($key, $databaseConfigurations['data_type']);
    }
    if (in_array(ApplicationEntity::$PRIMARYKEY, $databaseConfigurations) && !$applications->hasPrimaryKey()) {
        $applications->setPrimaryKey(array($key));
    }
    if (in_array(ApplicationEntity::$UNIQUEVALUE, $databaseConfigurations)) {
        $applications->addUniqueIndex(array($key));
    }
}

$queries = $schema->toSql(
    $connection->getDatabasePlatform()
);
foreach ($queries as $query) {
    $connection->executeQuery($query);
}

/* HOTFIT: Please fix, TODO: aseta somen tiedot nulleiksi */
$connection->executeQuery("ALTER TABLE `hakemus`.`".ApplicationEntity::$TABLENAME."`
    CHANGE COLUMN `linkedIn` `linkedIn` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL ,
    CHANGE COLUMN `facebook` `facebook` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL ,
    CHANGE COLUMN `twitter` `twitter` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL ,
    CHANGE COLUMN `bitbucket` `bitbucket` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL ,
    CHANGE COLUMN `github` `github` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL ,
    CHANGE COLUMN `stackOverflow` `stackOverflow` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL ;
    CHANGE COLUMN `id` `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ;
");

$createdTables = $schemaManager->listTables();
if (count($createdTables) > 0) {
    echo 'Kanta päivitys onnistui: ' . count($createdTables) . ' taulua ja ' . count($schemaManager->listTableColumns(ApplicationEntity::$TABLENAME)) . ' saraketta luotu.' . "\r\n";
}
