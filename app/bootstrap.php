<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Provider\FormServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Symfony\Component\Translation\Loader\YamlFileLoader;


$configs = require_once __DIR__ . '/config.php';


$app = new Silex\Application();
$app->register(new FormServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new TranslationServiceProvider(), $configs['TranslationServiceProvider']);
$app->register(new TwigServiceProvider(), $configs['TwigServiceProvider']);

$app['translator'] = $app->share($app->extend('translator', function($translator, $app) use ($configs) {
    $translator->addLoader('yaml', new YamlFileLoader());

    foreach ($configs['Translations'] as $language => $fileLocation) {
        $translator->addResource('yaml', $fileLocation, $language);
    }

    return $translator;
}));

foreach ($configs['App'] as $configuration => $value) {
    $app[$configuration] = $value;
}