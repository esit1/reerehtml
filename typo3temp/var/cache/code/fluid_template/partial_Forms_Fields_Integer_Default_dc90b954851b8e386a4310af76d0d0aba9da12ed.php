<?php

class partial_Forms_Fields_Integer_Default_dc90b954851b8e386a4310af76d0d0aba9da12ed extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][type]" value="input"/>
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][exclude]" value="1"/>
<input type="hidden" name="tx_mask_tools_maskmask[storage][sql][';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array1)]);

$output0 .= '][--index--]" value="tinytext"/>
<input type="hidden" name="tx_mask_tools_maskmask[dummy][--index--][int]" value="int"
			 class="tx_mask_fieldcontent_eval"/>
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][eval]" value="int"
			 class="tx_mask_fieldcontent_evalresult"/>

<div class="row">
	<div class="form-group col-sm-6">
		<label class="t3js-formengine-label" for="integer_default">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['key'] = NULL;
$arguments2['id'] = NULL;
$arguments2['default'] = NULL;
$arguments2['arguments'] = NULL;
$arguments2['extensionName'] = NULL;
$arguments2['languageKey'] = NULL;
$arguments2['alternativeLanguageKeys'] = NULL;
$arguments2['key'] = 'tx_mask.field.integer.default';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext)]);

$output0 .= '
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap" style="">
				<input id="integer_default" name="tx_mask_tools_maskmask[storage][tca][--index--][config][default]"
							 type="number" class="form-control" value="';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.config.default', $array4)]);

$output0 .= '"/>
			</div>
		</div>
	</div>
	<div class="form-group col-sm-6">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['section'] = NULL;
$arguments5['partial'] = NULL;
$arguments5['delegate'] = NULL;
$arguments5['renderable'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['optional'] = false;
$arguments5['default'] = NULL;
$arguments5['contentAs'] = NULL;
$arguments5['debug'] = true;
$arguments5['partial'] = 'Forms/Config/Placeholder';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array8);
$array9 = array (
);$array7['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array9);
$array10 = array (
);$array7['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array10);
$arguments5['arguments'] = $array7;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
	</div>
</div>
<div class="row">
	<div class="form-group col-sm-6">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['section'] = NULL;
$arguments11['partial'] = NULL;
$arguments11['delegate'] = NULL;
$arguments11['renderable'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['optional'] = false;
$arguments11['default'] = NULL;
$arguments11['contentAs'] = NULL;
$arguments11['debug'] = true;
$arguments11['partial'] = 'Forms/Config/Size';
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array14);
$array15 = array (
);$array13['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array15);
$array16 = array (
);$array13['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array16);
$arguments11['arguments'] = $array13;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
	</div>
</div>
';

return $output0;
}


}
#