<?php return array(
    'App' => array(
        'debug' => true
    ),
    'TranslationServiceProvider' => array(
        'locale_fallbacks' => array('fi'),
    ),
    'TwigServiceProvider' => array(
        'twig.path' => __DIR__ . '/../src/My/resources/views',
    )
);