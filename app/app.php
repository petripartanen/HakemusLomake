<?php
use Symfony\Component\HttpFoundation\Request;
use My\Provider\FormProvider;

/* defines $app variable as silex application */
require_once __DIR__ . '/bootstrap.php';

$app->get('/', function () use ($app) {

    $formProvider = new FormProvider();
    $applicationForm = $formProvider->getApplicationForm($app['form.factory']);
    return $app['twig']->render('home/index.html.twig', array(
        'applicationForm' => $applicationForm->createView()
    ));
});

$app->post('/submit/', function (Request $request) use ($app) {
    $formProvider = new FormProvider();
    $applicationForm = $formProvider->getApplicationForm($app['form.factory']);
    $applicationForm->handleRequest($request);

    if ($applicationForm->isValid()) {
        $data = $applicationForm->getData();

        return $app->redirect('/success/');
    } else {
        var_dump($applicationForm->isValid());

    }
    exit;
    return $app['twig']->render('create/success.html.twig');
});

$app->get('/success/', function () use ($app) {
    return $app['twig']->render('submitted/success.html.twig');
});

return $app;