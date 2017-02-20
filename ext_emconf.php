<?php
########################################################################
# Extension Manager/Repository config file for ext: "static_info_tables_it"
#
# Auto generated 20-07-2005 12:06
#
# Manual updates:
# Only the data in the array - anything else is removed by next write
########################################################################
$EM_CONF[$_EXTKEY] = Array (
	'title' => 'Static Info Tables (it)',
	'description' => 'Italian (it) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '6.4.0-dev',
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
			'typo3' => '6.2.0-8.99.99',
			'static_info_tables' => '6.2.1-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => '',
);
