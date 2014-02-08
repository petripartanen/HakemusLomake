<?php
namespace My\Provider;

use Symfony\Component\Validator\Constraints as Assert;
use My\Entity\Application;

class FormProvider {
    public function getApplicationForm($factory) {
        $form = $factory->createBuilder('form');
        $applicationEntity = new Application();
        foreach ($applicationEntity->getAttributes() as $id => $options) {
            $form->add($id, $options['type'], $options['options']);
        }
        return $form->getForm();
    }
} 