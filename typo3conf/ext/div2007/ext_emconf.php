<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "div2007".
 *
 * Auto generated 02-02-2020 15:19
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Static Methods since 2007',
  'description' => 'This library offers classes and functions to other TYPO3 extensions. It provides a modified t3lib_div of TYPO3 4.7.10. Replacement for tslib_pibase methods and t3skin images.',
  'category' => 'misc',
  'version' => '1.10.27',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearcacheonload' => false,
  'author' => 'Franz Holzinger',
  'author_email' => 'franz@ttproducts.de',
  'author_company' => 'jambage.com',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '5.5.0-7.3.99',
      'typo3' => '6.2.0-9.5.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
      'migration_core' => '0.0.1-0.99.99',
    ),
  ),
);

