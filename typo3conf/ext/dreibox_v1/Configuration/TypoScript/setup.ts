tt_content.dreiboxv1_3boxenmitbild = FLUIDTEMPLATE
tt_content.dreiboxv1_3boxenmitbild {
    layoutRootPaths.0 = EXT:dreibox_v1/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_dreiboxv1.view.layoutRootPath}
    partialRootPaths.0 = EXT:dreibox_v1/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_dreiboxv1.view.partialRootPath}
    templateRootPaths.0 = EXT:dreibox_v1/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_dreiboxv1.view.templateRootPath}
    templateName = 3boxenmitbild
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_dreiboxv1_bildbox1
        references {
            fieldName = tx_dreiboxv1_bildbox1
            table = tt_content
        }
        as = data_tx_dreiboxv1_bildbox1
    }
    dataProcessing.20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.20 {
        if.isTrue.field = tx_dreiboxv1_bildbox2
        references {
            fieldName = tx_dreiboxv1_bildbox2
            table = tt_content
        }
        as = data_tx_dreiboxv1_bildbox2
    }
    dataProcessing.30 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.30 {
        if.isTrue.field = tx_dreiboxv1_bildbox3
        references {
            fieldName = tx_dreiboxv1_bildbox3
            table = tt_content
        }
        as = data_tx_dreiboxv1_bildbox3
    }
}
tt_content.dreiboxv1_rezepte = FLUIDTEMPLATE
tt_content.dreiboxv1_rezepte {
    layoutRootPaths.0 = EXT:dreibox_v1/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_dreiboxv1.view.layoutRootPath}
    partialRootPaths.0 = EXT:dreibox_v1/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_dreiboxv1.view.partialRootPath}
    templateRootPaths.0 = EXT:dreibox_v1/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_dreiboxv1.view.templateRootPath}
    templateName = Rezepte
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_dreiboxv1_mengeundnamederzutat
        table = tx_dreiboxv1_mengeundnamederzutat
        pidInList.field = pid
        where = parentid=###uid### AND deleted=0 AND hidden=0
        orderBy = sorting
        markers.uid.field = uid
        as = data_tx_dreiboxv1_mengeundnamederzutat
    }
    dataProcessing.20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.20 {
        if.isTrue.field = image
        references {
            fieldName = image
            table = tt_content
        }
        as = data_image
    }
}
