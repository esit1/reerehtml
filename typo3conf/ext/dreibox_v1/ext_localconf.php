<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

// Register content element icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'tx_dreiboxv1_3boxenmitbild',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    [
        'source' => 'EXT:dreibox_v1/Resources/Public/Icons/Content/3boxenmitbild.png',
    ]
);
$iconRegistry->registerIcon(
    'tx_dreiboxv1_rezepte',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    [
        'source' => 'EXT:dreibox_v1/Resources/Public/Icons/Content/rezepte.png',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:dreibox_v1/Configuration/PageTSconfig/NewContentElementWizard.ts">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:dreibox_v1/Configuration/PageTSconfig/BackendPreview.ts">'
);
// Add backend preview hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['dreibox_v1'] = 
    DreiboxV1\DreiboxV1\Hooks\PageLayoutViewDrawItem::class;

});

