<?php
namespace My\Provider;

use Symfony\Component\Validator\Constraints as Assert;

class FormProvider {
    public function getApplicationForm($factory) {
        return $factory->createBuilder('form')
            ->add('fullName', 'text', array(
                'label' => 'Koko nimi'
            ))
            ->add('group', 'text', array(
                'label' => 'Ryhmätunnus'
            ))
            ->add('userid', 'text', array(
                'label' => 'Tuubitunnus'
            ))
            ->add('email','email', array(
                'label' => 'Sähköpostiosoite',
                'constraints' => new Assert\Email()
            ))
            ->add('studies', 'textarea', array(
                'label' => 'Opinnot'
            ))
            ->add('experiences', 'textarea', array(
                'label' => 'Web-ohjelmointi kokemukset'
            ))
            ->add('alternativeExperiences', 'textarea', array(
                'label' => 'Muu työkokemus & projektiosaaminen'
            ))
            ->add('programming', 'textarea', array(
                'label' => 'Mitä on ohjelmointi?'
            ))
            ->add('meAsProgrammer', 'textarea', array(
                'label' => 'Millaisena sovelluskehittäjänä näet itsesi?'
            ))
            ->add('skills', 'textarea', array(
                'label' => 'Muu osaaminen ja taidot'
            ))
            ->add('whyWorkHere', 'textarea', array(
                'label' => 'Miksi haluat Metropolialle töihin?'
            ))
            ->add('also', 'textarea', array(
                'label' => 'Mitä halaisit vielä kertoa tai sanoa?'
            ))
            ->add('linkedIn', 'text', array(
                'required' => false
            ))
            ->add('facebook', 'text', array(
                'required' => false
            ))
            ->add('twitter', 'text', array(
                'required' => false
            ))
            ->add('bitbucket', 'text', array(
                'required' => false
            ))
            ->add('github', 'text', array(
                'required' => false
            ))
            ->add('stackOverflow', 'text', array(
                'required' => false
            ))
            ->getForm();
    }
} 