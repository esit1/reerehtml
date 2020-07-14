mod.wizards.newContentElement.wizardItems.common {
    elements {
            3boxenmitbild {
                iconIdentifier = tx_dreiboxv1_3boxenmitbild
                title = LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.3boxenmitbild_title
                description = LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.3boxenmitbild_description
                tt_content_defValues {
                    CType = dreiboxv1_3boxenmitbild
                }
            }
            rezepte {
                iconIdentifier = tx_dreiboxv1_rezepte
                title = LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.rezepte_title
                description = LLL:EXT:dreibox_v1/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.rezepte_description
                tt_content_defValues {
                    CType = dreiboxv1_rezepte
                }
            }
    }
    show := addToList(3boxenmitbild, rezepte)
}
