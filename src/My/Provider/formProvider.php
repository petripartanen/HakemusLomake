<?php
namespace My\Provider;

use Symfony\Component\Validator\Constraints as Assert;
use My\Entity\ApplicationEntity;

class FormProvider {
    public function getApplicationForm($factory) {
        $form = $factory->createBuilder('form');
        $applicationEntity = new ApplicationEntity();
        foreach ($applicationEntity->getAttributes() as $id => $options) {
            if (array_key_exists('type', $options)) {
                $form->add($id, $options['type'], $options['options']);
            }
        }
        return $form->getForm();
    }
} 