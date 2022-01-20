<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (it)',
    'description' => 'Italian (it) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '6.7.6',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'author' => 'Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
			'php' => '7.3.0-7.4.99',
            'typo3' => '8.7.0-11.5.99',
            'static_info_tables' => '6.7.3-11.5.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];

