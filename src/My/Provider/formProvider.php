<?php
namespace My\Provider;

use Symfony\Component\Validator\Constraints as Assert;

class FormProvider {
    public function getApplicationForm($factory) {
        return $factory->createBuilder('form')
            ->add('fullName', 'text', array(
                'label' => 'Koko nimi',
                'constraints' => array(
                    new Assert\NotBlank()
                )
            ))
            ->add('group', 'text', array(
                'label' => 'Ryhmätunnus',
                'constraints' => array(
                    new Assert\NotBlank()
                )
            ))
            ->add('userid', 'text', array(
                'label' => 'Tuubitunnus',
                'constraints' => array(
                    new Assert\NotBlank()
                )
            ))
            ->add('email','email', array(
                'label' => 'Sähköpostiosoite',
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Email()
                )
            ))
            ->add('studies', 'textarea', array(
                'label' => 'Opinnot',
                'constraints' => array(
                    new Assert\NotBlank()
                )
            ))
            ->add('experiences', 'textarea', array(
                'label' => 'Web-ohjelmointi kokemukset',
                'constraints' => array(
                    new Assert\NotBlank()
                )
            ))
            ->add('alternativeExperiences', 'textarea', array(
                'label' => 'Muu työkokemus & projektiosaaminen',
                'constraints' => array(
                    new Assert\NotBlank()
                )
            ))
            ->add('programming', 'textarea', array(
                'label' => 'Mitä on ohjelmointi?',
                'constraints' => array(
                    new Assert\NotBlank()
                )
            ))
            ->add('meAsProgrammer', 'textarea', array(
                'label' => 'Millaisena sovelluskehittäjänä näet itsesi?',
                'constraints' => array(
                    new Assert\NotBlank()
                )
            ))
            ->add('skills', 'textarea', array(
                'label' => 'Muu osaaminen ja taidot',
                'constraints' => array(
                    new Assert\NotBlank()
                )
            ))
            ->add('whyWorkHere', 'textarea', array(
                'label' => 'Miksi haluat Metropolialle töihin?',
                'constraints' => array(
                    new Assert\NotBlank()
                )
            ))
            ->add('also', 'textarea', array(
                'label' => 'Mitä halaisit vielä kertoa tai sanoa?',
                'constraints' => array(
                    new Assert\NotBlank()
                )
            ))
            ->add('linkedIn', 'text', array(
                'required' => false,
                'constraints' => array(
                    new Assert\Url()
                )
            ))
            ->add('facebook', 'text', array(
                'required' => false,
                'constraints' => array(
                    new Assert\Url()
                )
            ))
            ->add('twitter', 'text', array(
                'required' => false,
                'constraints' => array(
                    new Assert\Url()
                )
            ))
            ->add('bitbucket', 'text', array(
                'required' => false,
                'constraints' => array(
                    new Assert\Url()
                )
            ))
            ->add('github', 'text', array(
                'required' => false,
                'constraints' => array(
                    new Assert\Url()
                )
            ))
            ->add('stackOverflow', 'text', array(
                'required' => false,
                'constraints' => array(
                    new Assert\Url()
                )
            ))
            ->getForm();
    }
} 