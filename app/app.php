<?php
use Symfony\Component\HttpFoundation\Request;
use My\Provider\FormProvider;

/* defines $app variable as silex application */
require_once __DIR__ . '/bootstrap.php';

$app->get('/', 'My\controller\HomeController::home');

$app->match('/fill/', 'My\controller\HomeController::fill');

$app->get('/success/', function () use ($app) {
    return $app['twig']->render('fill/success.html.twig');
});

return $app;