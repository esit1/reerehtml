<?php
return array (
  'ctrl' => 
  array (
    'title' => 'LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db.xlf:tx_dreiboxv1_zutat',
    'label' => NULL,
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'cruser_id' => 'cruser_id',
    'dividers2tabs' => true,
    'versioningWS' => true,
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    'delete' => 'deleted',
    'enablecolumns' => 
    array (
      'disabled' => 'hidden',
      'starttime' => 'starttime',
      'endtime' => 'endtime',
    ),
    'searchFields' => '',
    'dynamicConfigFile' => '',
    'iconfile' => 'EXT:dreibox_v1/Resources/Public/Icons/Extension.png',
    'hideTable' => true,
  ),
  'interface' => 
  array (
    'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ',
  ),
  'types' => 
  array (
    1 => 
    array (
      'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
    ),
  ),
  'palettes' => 
  array (
    1 => 
    array (
      'showitem' => '',
    ),
  ),
  'columns' => 
  array (
    'sys_language_uid' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
      'config' => 
      array (
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => 
        array (
          0 => 
          array (
            0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
            1 => -1,
            2 => 'flags-multiple',
          ),
        ),
        'special' => 'languages',
        'default' => 0,
      ),
    ),
    'l10n_parent' => 
    array (
      'displayCond' => 'FIELD:sys_language_uid:>:0',
      'exclude' => 1,
      'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
      'config' => 
      array (
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => 
        array (
          0 => 
          array (
            0 => '',
            1 => 0,
          ),
        ),
        'foreign_table' => 'tx_dreiboxv1_zutat',
        'foreign_table_where' => 'AND tx_dreiboxv1_zutat.pid=###CURRENT_PID### AND tx_dreiboxv1_zutat.sys_language_uid IN (-1,0)',
        'default' => 0,
      ),
    ),
    'l10n_diffsource' => 
    array (
      'config' => 
      array (
        'type' => 'passthrough',
      ),
    ),
    't3ver_label' => 
    array (
      'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
      'config' => 
      array (
        'type' => 'input',
        'size' => 30,
        'max' => 255,
      ),
    ),
    'hidden' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
      'config' => 
      array (
        'type' => 'check',
      ),
    ),
    'starttime' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
      'config' => 
      array (
        'behaviour' => 
        array (
          'allowLanguageSynchronization' => true,
        ),
        'renderType' => 'inputDateTime',
        'type' => 'input',
        'size' => 13,
        'eval' => 'datetime,int',
        'checkbox' => 0,
        'default' => 0,
      ),
    ),
    'endtime' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
      'config' => 
      array (
        'behaviour' => 
        array (
          'allowLanguageSynchronization' => true,
        ),
        'renderType' => 'inputDateTime',
        'type' => 'input',
        'size' => 13,
        'eval' => 'datetime,int',
        'checkbox' => 0,
        'default' => 0,
      ),
    ),
    'parentid' => 
    array (
      'config' => 
      array (
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => 
        array (
          0 => 
          array (
            0 => '',
            1 => 0,
          ),
        ),
        'foreign_table' => 'tx_dreiboxv1_zubereitung',
        'foreign_table_where' => 'AND tx_dreiboxv1_zubereitung.pid=###CURRENT_PID### AND tx_dreiboxv1_zubereitung.sys_language_uid IN (-1,###REC_FIELD_sys_language_uid###)',
      ),
    ),
    'parenttable' => 
    array (
      'config' => 
      array (
        'type' => 'passthrough',
      ),
    ),
    'sorting' => 
    array (
      'config' => 
      array (
        'type' => 'passthrough',
      ),
    ),
  ),
);