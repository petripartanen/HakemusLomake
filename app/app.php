<?php
require_once __DIR__ . '/bootstrap.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../src/My/resources/views',
));
$app['debug'] = true;

$app->get('/', function () use ($app) {
    return $app['twig']->render('home/index.html.twig');
});

$app->post('/submit/', function () use ($app) {
    return $app['twig']->render('create/success.html.twig');
});

$app->get('/success/', function () use ($app) {
    return $app['twig']->render('create/success.html.twig');
});

return $app;