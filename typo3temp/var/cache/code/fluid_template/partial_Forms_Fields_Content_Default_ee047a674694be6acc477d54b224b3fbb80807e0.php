<?php

class partial_Forms_Fields_Content_Default_ee047a674694be6acc477d54b224b3fbb80807e0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
  'mask' => 
  array (
    0 => 'MASK\\Mask\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][type]" value="inline"/>
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][exclude]" value="1"/>
<input type="hidden" name="tx_mask_tools_maskmask[storage][sql][';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array1)]);

$output0 .= '][--index--]"
			 value="int(11) unsigned DEFAULT \'0\' NOT NULL"/>

<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_table]" value="tt_content"/>
<input type="hidden"
			 name="tx_mask_tools_maskmask[storage][tca][--index--][config][overrideChildTca][columns][colPos][config][default]"
			 value="999"/>
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_sortby]" value="sorting"/>

<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][collapseAll]" value="1"/>
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][levelLinksPosition]"
			 value="top"/>
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][showSynchronizationLink]"
			 value="1"/>
<input type="hidden"
			 name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][showPossibleLocalizationRecords]"
			 value="1"/>
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][showAllLocalizationLink]"
			 value="1"/>
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][useSortable]" value="1"/>
<input type="hidden"
			 name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][enabledControls][dragdrop]" value="1"/>

<div class="row">
	<div class="form-group col-sm-12">
		<label class="t3js-formengine-label">
			Allowed content elements
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['additionalAttributes'] = NULL;
$arguments2['data'] = NULL;
$arguments2['name'] = NULL;
$arguments2['value'] = NULL;
$arguments2['property'] = NULL;
$arguments2['class'] = NULL;
$arguments2['dir'] = NULL;
$arguments2['id'] = NULL;
$arguments2['lang'] = NULL;
$arguments2['style'] = NULL;
$arguments2['title'] = NULL;
$arguments2['accesskey'] = NULL;
$arguments2['tabindex'] = NULL;
$arguments2['onclick'] = NULL;
$arguments2['size'] = NULL;
$arguments2['disabled'] = NULL;
$arguments2['options'] = NULL;
$arguments2['optionsAfterContent'] = false;
$arguments2['optionValueField'] = NULL;
$arguments2['optionLabelField'] = NULL;
$arguments2['sortByOptionLabel'] = false;
$arguments2['selectAllByDefault'] = false;
$arguments2['errorClass'] = 'f3-form-error';
$arguments2['prependOptionLabel'] = NULL;
$arguments2['prependOptionValue'] = NULL;
$arguments2['multiple'] = false;
$arguments2['required'] = false;
$arguments2['name'] = 'storage[tca][--index--][cTypes]';
// Rendering ViewHelper MASK\Mask\ViewHelpers\CTypesViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments2['options'] = MASK\Mask\ViewHelpers\CTypesViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
$array6 = array (
);$arguments2['value'] = $renderingContext->getVariableProvider()->getByPath('field.cTypes', $array6);
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array7['0'] = 1;

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['multiple'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments2['size'] = 10;
$arguments2['class'] = 'form-control';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
			</div>
		</div>
	</div>
</div>
';

return $output0;
}


}
#