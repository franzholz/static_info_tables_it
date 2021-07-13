<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (it)',
    'description' => 'Italian (it) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '6.7.4',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'author' => 'Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-10.99.99',
            'static_info_tables' => '6.7.3-6.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];

