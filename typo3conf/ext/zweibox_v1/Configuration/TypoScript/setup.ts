tt_content.zweiboxv1_2boxenmitbild = FLUIDTEMPLATE
tt_content.zweiboxv1_2boxenmitbild {
    layoutRootPaths.0 = EXT:zweibox_v1/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_zweiboxv1.view.layoutRootPath}
    partialRootPaths.0 = EXT:zweibox_v1/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_zweiboxv1.view.partialRootPath}
    templateRootPaths.0 = EXT:zweibox_v1/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_zweiboxv1.view.templateRootPath}
    templateName = 2boxenmitbild
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_zweiboxv1_bildbox1
        references {
            fieldName = tx_zweiboxv1_bildbox1
            table = tt_content
        }
        as = data_tx_zweiboxv1_bildbox1
    }
    dataProcessing.20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.20 {
        if.isTrue.field = tx_zweiboxv1_bildbox2
        references {
            fieldName = tx_zweiboxv1_bildbox2
            table = tt_content
        }
        as = data_tx_zweiboxv1_bildbox2
    }
}
