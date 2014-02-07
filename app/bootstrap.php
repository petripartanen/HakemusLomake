<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Provider\FormServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\TwigServiceProvider;

$configs = require_once __DIR__ . '/config.php';


$app = new Silex\Application();
$app->register(new FormServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new TranslationServiceProvider(), $configs['TranslationServiceProvider']);
$app->register(new TwigServiceProvider(), $configs['TwigServiceProvider']);

foreach ($configs['App'] as $configuration => $value) {
    $app[$configuration] = $value;
}