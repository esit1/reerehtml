<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('rezeptev1_export, tx_rezeptev1_mengeundnamederzutat, tx_rezeptev1_mengeundzutat, tx_rezeptev1_zubereitung, tx_rezeptev1_zutat');

});

