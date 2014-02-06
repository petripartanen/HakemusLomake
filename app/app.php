<?php
require_once __DIR__ . '/bootstrap.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../src/My/resources/views',
));

$app->get('/', function () use ($app) {
    return $app['twig']->render('layout.html.twig');
});

return $app;