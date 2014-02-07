<?php return array(
    'App' => array(
        'debug' => true
    ),
    'Translations' => array(
        'fi' => __DIR__ . '/../src/My/Resources/locales/validators.fi.yml'
    ),
    'TranslationServiceProvider' => array(
        'locale_fallbacks' => array('fi'),
    ),
    'TwigServiceProvider' => array(
        'twig.path' => __DIR__ . '/../src/My/Resources/views'
    )
);