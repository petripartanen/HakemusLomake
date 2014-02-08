<?php
namespace My\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Application
{
    public function getAttributes()
    {
        return array(
            'fullName' => array(
                'type' => 'text',
                'options' => array(
                    'label' => 'from.field.fullname.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'string',
                    'column_options' => array(
                        "length" => 64
                    )
                )
            ),
            'group' => array(
                'type' => 'text',
                'options' => array(
                    'label' => 'from.field.group.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'string',
                    'column_options' => array(
                        "length" => 32
                    )
                )
            ),
            'userid' => array(
                'type' => 'text',
                'options' => array(
                    'label' => 'from.field.userid.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'string'
                )
            ),
            'email' => array(
                'type' => 'email',
                'options' => array(
                    'label' => 'from.field.email.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        )),
                        new Assert\Email(array(
                            'message' => 'form.errors.email'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'string'
                )
            ),
            'studies' => array(
                'type' => 'textarea',
                'options' => array(
                    'label' => 'from.field.studies.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'text'
                )
            ),
            'experiences' => array(
                'type' => 'textarea',
                'options' => array(
                    'label' => 'from.field.experiences.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'text'
                )
            ),
            'alternativeExperiences' => array(
                'type' => 'textarea',
                'options' => array(
                    'label' => 'from.field.alternativeExperiences.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'text'
                )
            ),
            'programming' => array(
                'type' => 'textarea',
                'options' => array(
                    'label' => 'from.field.programming.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'text'
                )
            ),
            'meAsProgrammer' => array(
                'type' => 'textarea',
                'options' => array(
                    'label' => 'from.field.meAsProgrammer.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'text'
                )
            ),
            'skills' => array(
                'type' => 'textarea',
                'options' => array(
                    'label' => 'from.field.skills.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'text',
                    'column_options' => array()

                )
            ),
            'whyWorkHere' => array(
                'type' => 'textarea',
                'options' => array(
                    'label' => 'from.field.whyWorkHere.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'text'
                )
            ),
            'also' => array(
                'type' => 'textarea',
                'options' => array(
                    'label' => 'from.field.also.label',
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'form.errors.notBlank'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'text'
                )
            ),
            'linkedIn' => array(
                'type' => 'url',
                'options' => array(
                    'required' => false,
                    'label' => false,
                    'constraints' => array(
                        new Assert\Url(array(
                            'message' => 'form.errors.notBlank'
                        )),
                        new Assert\Regex(array(
                            'pattern' => '/\blinkedin.com\b/',
                            'message' => 'form.errors.regex'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'string',
                    'column_options' => array(
                        "nullable" => true
                    )
                )
            ),
            'facebook' => array(
                'type' => 'url',
                'options' => array(
                    'required' => false,
                    'label' => false,
                    'constraints' => array(
                        new Assert\Url(array(
                            'message' => 'form.errors.notBlank'
                        )),
                        new Assert\Regex(array(
                            'pattern' => '/\bfacebook.com\b/',
                            'message' => 'form.errors.regex'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'string',
                    'column_options' => array(
                        "nullable" => true
                    )
                )
            ),
            'twitter' => array(
                'type' => 'url',
                'options' => array(
                    'required' => false,
                    'label' => false,
                    'constraints' => array(
                        new Assert\Url(array(
                            'message' => 'form.errors.notBlank'
                        )),
                        new Assert\Regex(array(
                            'pattern' => '/\btwitter.com\b/',
                            'message' => 'form.errors.regex'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'string',
                    'column_options' => array(
                        "nullable" => true
                    )
                )
            ),
            'bitbucket' => array(
                'type' => 'url',
                'options' => array(
                    'required' => false,
                    'label' => false,
                    'constraints' => array(
                        new Assert\Url(array(
                            'message' => 'form.errors.notBlank'
                        )),
                        new Assert\Regex(array(
                            'pattern' => '/\bbitbucket.com\b/',
                            'message' => 'form.errors.regex'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'string',
                    'column_options' => array(
                        "nullable" => true
                    )
                )
            ),
            'github' => array(
                'type' => 'url',
                'options' => array(
                    'required' => false,
                    'label' => false,
                    'constraints' => array(
                        new Assert\Url(array(
                            'message' => 'form.errors.notBlank'
                        )),
                        new Assert\Regex(array(
                            'pattern' => '/\bgithub.com\b/',
                            'message' => 'form.errors.regex'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'string',
                    'column_options' => array(
                        "nullable" => true
                    )
                )
            ),
            'stackOverflow' => array(
                'type' => 'url',
                'options' => array(
                    'required' => false,
                    'label' => false,
                    'constraints' => array(
                        new Assert\Url(array(
                            'message' => 'form.errors.notBlank'
                        )),
                        new Assert\Regex(array(
                            'pattern' => '/\bstackoverflow.com\b/',
                            'message' => 'form.errors.regex'
                        ))
                    )
                ),
                'databaseConfigurations' => array(
                    'data_type' => 'string',
                    'column_options' => array(
                        "nullable" => true
                    )
                )
            )
        );
    }
}