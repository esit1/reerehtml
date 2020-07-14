<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dreiboxv1_3boxenmitbild'] = 'tx_dreiboxv1_3boxenmitbild';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dreiboxv1_rezepte'] = 'tx_dreiboxv1_rezepte';
$tempColumns = array (
  'tx_dreiboxv1_bildbox1' => 
  array (
    'exclude' => '1',
    'config' => 
    array (
      'type' => 'inline',
      'foreign_table' => 'sys_file_reference',
      'foreign_field' => 'uid_foreign',
      'foreign_sortby' => 'sorting_foreign',
      'foreign_table_field' => 'tablenames',
      'foreign_match_fields' => 
      array (
        'fieldname' => 'tx_dreiboxv1_bildbox1',
      ),
      'foreign_label' => 'uid_local',
      'foreign_selector' => 'uid_local',
      'overrideChildTca' => 
      array (
        'columns' => 
        array (
          'uid_local' => 
          array (
            'config' => 
            array (
              'appearance' => 
              array (
                'elementBrowserType' => 'file',
                'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
              ),
            ),
          ),
        ),
        'types' => 
        array (
          0 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          1 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          2 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          3 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          4 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          5 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
        ),
      ),
      'filter' => 
      array (
        0 => 
        array (
          'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
        ),
      ),
      'appearance' => 
      array (
        'useSortable' => 'tx_dreiboxv1_bildbox1',
        'headerThumbnail' => 
        array (
          'field' => 'uid_local',
          'width' => '45',
          'height' => '45c',
        ),
        'enabledControls' => 
        array (
          'info' => 'tx_dreiboxv1_bildbox1',
          'new' => false,
          'dragdrop' => 'tx_dreiboxv1_bildbox1',
          'sort' => false,
          'hide' => 'tx_dreiboxv1_bildbox1',
          'delete' => 'tx_dreiboxv1_bildbox1',
        ),
        'fileUploadAllowed' => false,
      ),
    ),
    'label' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_dreiboxv1_bildbox1',
  ),
  'tx_dreiboxv1_bildbox2' => 
  array (
    'exclude' => '1',
    'config' => 
    array (
      'type' => 'inline',
      'foreign_table' => 'sys_file_reference',
      'foreign_field' => 'uid_foreign',
      'foreign_sortby' => 'sorting_foreign',
      'foreign_table_field' => 'tablenames',
      'foreign_match_fields' => 
      array (
        'fieldname' => 'tx_dreiboxv1_bildbox2',
      ),
      'foreign_label' => 'uid_local',
      'foreign_selector' => 'uid_local',
      'overrideChildTca' => 
      array (
        'columns' => 
        array (
          'uid_local' => 
          array (
            'config' => 
            array (
              'appearance' => 
              array (
                'elementBrowserType' => 'file',
                'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
              ),
            ),
          ),
        ),
        'types' => 
        array (
          0 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          1 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          2 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          3 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          4 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          5 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
        ),
      ),
      'filter' => 
      array (
        0 => 
        array (
          'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
        ),
      ),
      'appearance' => 
      array (
        'useSortable' => 'tx_dreiboxv1_bildbox2',
        'headerThumbnail' => 
        array (
          'field' => 'uid_local',
          'width' => '45',
          'height' => '45c',
        ),
        'enabledControls' => 
        array (
          'info' => 'tx_dreiboxv1_bildbox2',
          'new' => false,
          'dragdrop' => 'tx_dreiboxv1_bildbox2',
          'sort' => false,
          'hide' => 'tx_dreiboxv1_bildbox2',
          'delete' => 'tx_dreiboxv1_bildbox2',
        ),
        'fileUploadAllowed' => false,
      ),
    ),
    'label' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_dreiboxv1_bildbox2',
  ),
  'tx_dreiboxv1_bildbox3' => 
  array (
    'exclude' => '1',
    'config' => 
    array (
      'type' => 'inline',
      'foreign_table' => 'sys_file_reference',
      'foreign_field' => 'uid_foreign',
      'foreign_sortby' => 'sorting_foreign',
      'foreign_table_field' => 'tablenames',
      'foreign_match_fields' => 
      array (
        'fieldname' => 'tx_dreiboxv1_bildbox3',
      ),
      'foreign_label' => 'uid_local',
      'foreign_selector' => 'uid_local',
      'overrideChildTca' => 
      array (
        'columns' => 
        array (
          'uid_local' => 
          array (
            'config' => 
            array (
              'appearance' => 
              array (
                'elementBrowserType' => 'file',
                'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
              ),
            ),
          ),
        ),
        'types' => 
        array (
          0 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          1 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          2 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          3 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          4 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
          5 => 
          array (
            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
          ),
        ),
      ),
      'filter' => 
      array (
        0 => 
        array (
          'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
        ),
      ),
      'appearance' => 
      array (
        'useSortable' => 'tx_dreiboxv1_bildbox3',
        'headerThumbnail' => 
        array (
          'field' => 'uid_local',
          'width' => '45',
          'height' => '45c',
        ),
        'enabledControls' => 
        array (
          'info' => 'tx_dreiboxv1_bildbox3',
          'new' => false,
          'dragdrop' => 'tx_dreiboxv1_bildbox3',
          'sort' => false,
          'hide' => 'tx_dreiboxv1_bildbox3',
          'delete' => 'tx_dreiboxv1_bildbox3',
        ),
        'fileUploadAllowed' => false,
      ),
    ),
    'label' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_dreiboxv1_bildbox3',
  ),
  'tx_dreiboxv1_linkbox1' => 
  array (
    'config' => 
    array (
      'fieldControl' => 
      array (
        'linkPopup' => 
        array (
          'options' => 
          array (
            'title' => 'Link',
            'windowOpenParameters' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
          ),
        ),
      ),
      'renderType' => 'inputLink',
      'softref' => 'typolink',
      'type' => 'input',
      'wizards' => 
      array (
        'link' => 
        array (
          'icon' => 'actions-wizard-link',
        ),
      ),
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_dreiboxv1_linkbox1',
  ),
  'tx_dreiboxv1_linkbox2' => 
  array (
    'config' => 
    array (
      'fieldControl' => 
      array (
        'linkPopup' => 
        array (
          'options' => 
          array (
            'title' => 'Link',
            'windowOpenParameters' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
          ),
        ),
      ),
      'renderType' => 'inputLink',
      'softref' => 'typolink',
      'type' => 'input',
      'wizards' => 
      array (
        'link' => 
        array (
          'icon' => 'actions-wizard-link',
        ),
      ),
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_dreiboxv1_linkbox2',
  ),
  'tx_dreiboxv1_linkbox3' => 
  array (
    'config' => 
    array (
      'fieldControl' => 
      array (
        'linkPopup' => 
        array (
          'options' => 
          array (
            'title' => 'Link',
            'windowOpenParameters' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
          ),
        ),
      ),
      'renderType' => 'inputLink',
      'softref' => 'typolink',
      'type' => 'input',
      'wizards' => 
      array (
        'link' => 
        array (
          'icon' => 'actions-wizard-link',
        ),
      ),
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_dreiboxv1_linkbox3',
  ),
  'tx_dreiboxv1_mengeundnamederzutat' => 
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
      'foreign_table' => 'tx_dreiboxv1_mengeundnamederzutat',
      'foreign_table_field' => 'parenttable',
      'minitems' => '1',
      'type' => 'inline',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_dreiboxv1_mengeundnamederzutat',
  ),
  'tx_dreiboxv1_textbox1' => 
  array (
    'config' => 
    array (
      'enableRichtext' => '1',
      'eval' => 'required,trim',
      'richtextConfiguration' => 'default',
      'type' => 'text',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_dreiboxv1_textbox1',
  ),
  'tx_dreiboxv1_textbox2' => 
  array (
    'config' => 
    array (
      'enableRichtext' => '1',
      'eval' => 'required',
      'richtextConfiguration' => 'default',
      'type' => 'text',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_dreiboxv1_textbox2',
  ),
  'tx_dreiboxv1_textbox3' => 
  array (
    'config' => 
    array (
      'enableRichtext' => '1',
      'richtextConfiguration' => 'default',
      'type' => 'text',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_dreiboxv1_textbox3',
  ),
  'tx_dreiboxv1_zubereitung' => 
  array (
    'config' => 
    array (
      'eval' => 'required,trim',
      'type' => 'text',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_dreiboxv1_zubereitung',
  ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._dreiboxv1_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.CType.dreiboxv1_3boxenmitbild',
    'dreiboxv1_3boxenmitbild',
    'tx_dreiboxv1_3boxenmitbild',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.CType.dreiboxv1_rezepte',
    'dreiboxv1_rezepte',
    'tx_dreiboxv1_rezepte',
];
$tempTypes = array (
  'dreiboxv1_3boxenmitbild' => 
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
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_dreiboxv1_bildbox1,tx_dreiboxv1_textbox1,tx_dreiboxv1_linkbox1,tx_dreiboxv1_bildbox2,tx_dreiboxv1_textbox2,tx_dreiboxv1_linkbox2,tx_dreiboxv1_bildbox3,tx_dreiboxv1_textbox3,tx_dreiboxv1_linkbox3,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
  ),
  'dreiboxv1_rezepte' => 
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
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_dreiboxv1_mengeundnamederzutat,tx_dreiboxv1_zubereitung,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
  ),
);
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'dreibox_v1',
    'Configuration/TypoScript/',
    'dreibox_v1'
);

});

