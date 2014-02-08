<?php return array(
    'App' => array(
        'debug' => true
    ),
    'Translations' => array(
        'fi' => __DIR__ . '/../src/My/Resources/locales/messages.fi.yml'
    ),
    'TranslationServiceProvider' => array(
        'locale_fallbacks' => array('fi'),
    ),
    'TwigServiceProvider' => array(
        'twig.path' => __DIR__ . '/../src/My/Resources/views'
    ),
    'DoctrineServiceProvider' => array(
        'db.options' => array(
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'dbname' => 'hakemus',
            'user' => 'hakemus',
            'password' => 'hakemus',
            'charset' => 'utf8',
        )
    )
);