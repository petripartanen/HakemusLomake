<?php
namespace My\Controller;

use My\Repository\ApplicationRepository;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use My\Provider\FormProvider;

class HomeController {

    public function home(Request $request, Application $app) {
        $formProvider = new FormProvider();
        $applicationForm = $formProvider->getApplicationForm($app['form.factory']);

        $applicationForm->handleRequest($request);

        return $app['twig']->render('home/index.html.twig', array(
            'applicationForm' => $applicationForm->createView()
        ));
    }

    public function fill(Request $request, Application $app) {
        $formProvider = new FormProvider();
        $applicationForm = $formProvider->getApplicationForm($app['form.factory']);

        $applicationForm->handleRequest($request);

        if ($applicationForm->isValid()) {
            $data = $applicationForm->getData();

            $data = $applicationForm->getData();
            $applicationRepository = new ApplicationRepository($app);

            $applicationRepository->flush($data);
            return $app->redirect('/success/');
        }
        else {
            return $app['twig']->render('fill/index.html.twig', array(
                'applicationForm' => $applicationForm->createView()
            ));
        }
    }
} 