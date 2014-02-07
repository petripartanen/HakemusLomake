<?php
use Symfony\Component\HttpFoundation\Request;
use My\Provider\FormProvider;

/* defines $app variable as silex application */
require_once __DIR__ . '/bootstrap.php';

$app->get('/', function (Request $request) use ($app) {

    $formProvider = new FormProvider();
    $applicationForm = $formProvider->getApplicationForm($app['form.factory']);

    $applicationForm->handleRequest($request);

    if ($applicationForm->isValid()) {
        $data = $applicationForm->getData();

        return $app->redirect('/success/');
    }
    else {
        return $app['twig']->render('home/index.html.twig', array(
            'applicationForm' => $applicationForm->createView()
        ));
    }
});

$app->match('/fill/', function (Request $request) use ($app) {

    $formProvider = new FormProvider();
    $applicationForm = $formProvider->getApplicationForm($app['form.factory']);

    $applicationForm->handleRequest($request);

    if ($applicationForm->isValid()) {
        $data = $applicationForm->getData();

        return $app->redirect('/success/');
    }
    else {
        return $app['twig']->render('fill/index.html.twig', array(
            'applicationForm' => $applicationForm->createView()
        ));
    }
});

$app->get('/success/', function () use ($app) {
    return $app['twig']->render('fill/success.html.twig');
});

return $app;