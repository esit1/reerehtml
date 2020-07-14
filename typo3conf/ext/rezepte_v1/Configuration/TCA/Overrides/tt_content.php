<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['rezeptev1_rezepte'] = 'tx_rezeptev1_rezepte';
$tempColumns = array (
  'tx_rezeptev1_mengeundnamederzutat' => 
  array (
    'config' => 
    array (
      'appearance' => 
      array (
        'enabledControls' => 
        array (
          'dragdrop' => '1',
        ),
        'levelLinksPosition' => 'bottom',
        'newRecordLinkTitle' => 'Neue Zutat',
        'useSortable' => '1',
      ),
      'foreign_field' => 'parentid',
      'foreign_sortby' => 'sorting',
      'foreign_table' => 'tx_rezeptev1_mengeundnamederzutat',
      'foreign_table_field' => 'parenttable',
      'minitems' => '1',
      'type' => 'inline',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:rezepte_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_rezeptev1_mengeundnamederzutat',
  ),
  'tx_rezeptev1_zubereitung' => 
  array (
    'config' => 
    array (
      'eval' => 'required,trim',
      'type' => 'text',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:rezepte_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_rezeptev1_zubereitung',
  ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:rezepte_v1/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._rezeptev1_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:rezepte_v1/Resources/Private/Language/locallang_db.xlf:tt_content.CType.rezeptev1_rezepte',
    'rezeptev1_rezepte',
    'tx_rezeptev1_rezepte',
];
$tempTypes = array (
  'rezeptev1_rezepte' => 
  array (
    'columnsOverrides' => 
    array (
      'bodytext' => 
      array (
        'config' => 
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_rezeptev1_mengeundnamederzutat,tx_rezeptev1_zubereitung,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
  ),
);
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'rezepte_v1',
    'Configuration/TypoScript/',
    'rezepte_v1'
);

});

