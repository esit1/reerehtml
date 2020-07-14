mod.wizards.newContentElement.wizardItems.common {
    elements {
            rezepte {
                iconIdentifier = tx_rezeptev1_rezepte
                title = LLL:EXT:rezepte_v1/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.rezepte_title
                description = LLL:EXT:rezepte_v1/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.rezepte_description
                tt_content_defValues {
                    CType = rezeptev1_rezepte
                }
            }
    }
    show := addToList(rezepte)
}
