<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['zweiboxv1_2boxenmitbild'] = 'tx_zweiboxv1_2boxenmitbild';
$tempColumns = array (
  'tx_zweiboxv1_bildbox1' => 
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
        'fieldname' => 'tx_zweiboxv1_bildbox1',
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
        'useSortable' => 'tx_zweiboxv1_bildbox1',
        'headerThumbnail' => 
        array (
          'field' => 'uid_local',
          'width' => '45',
          'height' => '45c',
        ),
        'enabledControls' => 
        array (
          'info' => 'tx_zweiboxv1_bildbox1',
          'new' => false,
          'dragdrop' => 'tx_zweiboxv1_bildbox1',
          'sort' => false,
          'hide' => 'tx_zweiboxv1_bildbox1',
          'delete' => 'tx_zweiboxv1_bildbox1',
        ),
        'fileUploadAllowed' => false,
      ),
    ),
    'label' => 'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_zweiboxv1_bildbox1',
  ),
  'tx_zweiboxv1_bildbox2' => 
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
        'fieldname' => 'tx_zweiboxv1_bildbox2',
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
        'useSortable' => 'tx_zweiboxv1_bildbox2',
        'headerThumbnail' => 
        array (
          'field' => 'uid_local',
          'width' => '45',
          'height' => '45c',
        ),
        'enabledControls' => 
        array (
          'info' => 'tx_zweiboxv1_bildbox2',
          'new' => false,
          'dragdrop' => 'tx_zweiboxv1_bildbox2',
          'sort' => false,
          'hide' => 'tx_zweiboxv1_bildbox2',
          'delete' => 'tx_zweiboxv1_bildbox2',
        ),
        'fileUploadAllowed' => false,
      ),
    ),
    'label' => 'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_zweiboxv1_bildbox2',
  ),
  'tx_zweiboxv1_bildbox3' => 
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
        'fieldname' => 'tx_zweiboxv1_bildbox3',
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
        'useSortable' => 'tx_zweiboxv1_bildbox3',
        'headerThumbnail' => 
        array (
          'field' => 'uid_local',
          'width' => '45',
          'height' => '45c',
        ),
        'enabledControls' => 
        array (
          'info' => 'tx_zweiboxv1_bildbox3',
          'new' => false,
          'dragdrop' => 'tx_zweiboxv1_bildbox3',
          'sort' => false,
          'hide' => 'tx_zweiboxv1_bildbox3',
          'delete' => 'tx_zweiboxv1_bildbox3',
        ),
        'fileUploadAllowed' => false,
      ),
    ),
    'label' => 'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_zweiboxv1_bildbox3',
  ),
  'tx_zweiboxv1_linkbox1' => 
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
    'label' => 'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_zweiboxv1_linkbox1',
  ),
  'tx_zweiboxv1_linkbox2' => 
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
    'label' => 'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_zweiboxv1_linkbox2',
  ),
  'tx_zweiboxv1_linkbox3' => 
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
    'label' => 'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_zweiboxv1_linkbox3',
  ),
  'tx_zweiboxv1_mengeundnamederzutat' => 
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
      'foreign_table' => 'tx_zweiboxv1_mengeundnamederzutat',
      'foreign_table_field' => 'parenttable',
      'minitems' => '1',
      'type' => 'inline',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_zweiboxv1_mengeundnamederzutat',
  ),
  'tx_zweiboxv1_textbox1' => 
  array (
    'config' => 
    array (
      'enableRichtext' => '1',
      'richtextConfiguration' => 'default',
      'type' => 'text',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_zweiboxv1_textbox1',
  ),
  'tx_zweiboxv1_textbox2' => 
  array (
    'config' => 
    array (
      'enableRichtext' => '1',
      'richtextConfiguration' => 'default',
      'type' => 'text',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_zweiboxv1_textbox2',
  ),
  'tx_zweiboxv1_textbox3' => 
  array (
    'config' => 
    array (
      'enableRichtext' => '1',
      'richtextConfiguration' => 'default',
      'type' => 'text',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_zweiboxv1_textbox3',
  ),
  'tx_zweiboxv1_zubereitung' => 
  array (
    'config' => 
    array (
      'eval' => 'required,trim',
      'type' => 'text',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.tx_zweiboxv1_zubereitung',
  ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._zweiboxv1_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:zweibox_v1/Resources/Private/Language/locallang_db.xlf:tt_content.CType.zweiboxv1_2boxenmitbild',
    'zweiboxv1_2boxenmitbild',
    'tx_zweiboxv1_2boxenmitbild',
];
$tempTypes = array (
  'zweiboxv1_2boxenmitbild' => 
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
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_zweiboxv1_bildbox1,tx_zweiboxv1_textbox1,tx_zweiboxv1_linkbox1,tx_zweiboxv1_bildbox2,tx_zweiboxv1_textbox2,tx_zweiboxv1_linkbox2,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
  ),
);
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'zweibox_v1',
    'Configuration/TypoScript/',
    'zweibox_v1'
);

});

