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
                'label' => false,
                'constraints' => array(
                    new Assert\Url(),
                    new Assert\Regex(array(
                        'pattern' => '/\blinkedin.com\b/',
                    ))
                )
            ))
            ->add('facebook', 'text', array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new Assert\Url(),
                    new Assert\Regex(array(
                        'pattern' => '/\bfacebook.com\b/',
                    ))
                )
            ))
            ->add('twitter', 'text', array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new Assert\Url(),
                    new Assert\Regex(array(
                        'pattern' => '/\btwitter.com\b/',
                    ))
                )
            ))
            ->add('bitbucket', 'text', array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new Assert\Url(),
                    new Assert\Regex(array(
                        'pattern' => '/\bbitbucket.com\b/',
                    ))
                )
            ))
            ->add('github', 'text', array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new Assert\Url(),
                    new Assert\Regex(array(
                        'pattern' => '/\bgithub.com\b/',
                    ))
                )
            ))
            ->add('stackOverflow', 'text', array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new Assert\Url(),
                    new Assert\Regex(array(
                        'pattern' => '/\bstackoverflow.com\b/',
                    ))
                )
            ))
            ->getForm();
    }
} 