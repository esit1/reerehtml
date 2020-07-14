tt_content.rezeptev1_rezepte = FLUIDTEMPLATE
tt_content.rezeptev1_rezepte {
    layoutRootPaths.0 = EXT:rezepte_v1/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_rezeptev1.view.layoutRootPath}
    partialRootPaths.0 = EXT:rezepte_v1/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_rezeptev1.view.partialRootPath}
    templateRootPaths.0 = EXT:rezepte_v1/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_rezeptev1.view.templateRootPath}
    templateName = Rezepte
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_rezeptev1_mengeundnamederzutat
        table = tx_rezeptev1_mengeundnamederzutat
        pidInList.field = pid
        where = parentid=###uid### AND deleted=0 AND hidden=0
        orderBy = sorting
        markers.uid.field = uid
        as = data_tx_rezeptev1_mengeundnamederzutat
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
