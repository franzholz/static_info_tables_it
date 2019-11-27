<?php

$EM_CONF[$_EXTKEY] = Array (
	'title' => 'Static Info Tables (it)',
	'description' => 'Italian (it) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '6.7.1',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'static_countries,static_languages,static_currencies,static_territories',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Franz Holzinger',
	'author_email' => 'franz@ttproducts.de',
	'author_company' => 'jambage.com',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array (
		'depends' => array(
            'typo3' => '8.7.0-10.99.99',
            'static_info_tables' => '6.7.3-6.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

