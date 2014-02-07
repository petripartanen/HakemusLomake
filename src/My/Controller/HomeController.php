<?php
namespace My\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use My\Provider\FormProvider;

class HomeController {

    public function home(Request $request, Application $app) {
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
    }

    public function fill(Request $request, Application $app) {
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
    }
} 