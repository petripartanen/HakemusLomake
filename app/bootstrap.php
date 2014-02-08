<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Provider\FormServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Symfony\Component\Translation\Loader\YamlFileLoader;


$configs = require_once __DIR__ . '/config.php';


$app = new Silex\Application();
$app->register(new FormServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new TranslationServiceProvider(), $configs['TranslationServiceProvider']);
$app->register(new TwigServiceProvider(), $configs['TwigServiceProvider']);
$app->register(new DoctrineServiceProvider(), $configs['DoctrineServiceProvider']);

$app['translator'] = $app->share($app->extend('translator', function ($translator) use ($configs) {
    $translator->addLoader('yaml', new YamlFileLoader());
    $translator->addResource('yaml', __DIR__ .'/../src/My/Resources/locales/messages.fi.yml', 'fi', 'messages');
    $translator->addResource('yaml', __DIR__.'/../src/My/Resources/locales/validators.fi.yml', 'fi', 'validators');

    return $translator;
}));

foreach ($configs['App'] as $configuration => $value) {
    $app[$configuration] = $value;
}