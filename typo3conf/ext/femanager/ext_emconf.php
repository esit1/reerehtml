<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "femanager".
 *
 * Auto generated 29-01-2020 11:43
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'femanager',
  'description' => 'TYPO3 Frontend User Registration and Management based on
        Extbase and Fluid and on TYPO3 8 and the possibility to extend it.
        Extension basicly works like sr_feuser_register',
  'category' => 'plugin',
  'author' => 'Alexander Kellner, Stefan Busemann',
  'author_email' => 'info@in2code.de',
  'author_company' => 'in2code.de - Wir leben TYPO3',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '5.2.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '8.7.0-9.5.99',
      'php' => '7.0.0-7.3.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
      'sr_freecap' => '2.3.0-2.99.99',
      'static_info_tables' => '6.0.0-7.99.99',
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'In2code\\Femanager\\' => 'Classes',
    ),
  ),
  'clearcacheonload' => false,
);

