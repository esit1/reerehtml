<?php

class partial_Forms_Fields_String_Default_df7d90a9822a4b1a6de8da2652b701d5032b07d2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][eval]" value=""
			 class="tx_mask_fieldcontent_evalresult"/>

<div class="row">
	<div class="form-group col-sm-6">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['section'] = NULL;
$arguments2['partial'] = NULL;
$arguments2['delegate'] = NULL;
$arguments2['renderable'] = NULL;
$arguments2['arguments'] = array (
);
$arguments2['optional'] = false;
$arguments2['default'] = NULL;
$arguments2['contentAs'] = NULL;
$arguments2['debug'] = true;
$arguments2['partial'] = 'Forms/Config/Default';
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array5);
$array6 = array (
);$array4['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array6);
$array7 = array (
);$array4['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array7);
$arguments2['arguments'] = $array4;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
	</div>
	<div class="form-group col-sm-6">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['section'] = NULL;
$arguments8['partial'] = NULL;
$arguments8['delegate'] = NULL;
$arguments8['renderable'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['optional'] = false;
$arguments8['default'] = NULL;
$arguments8['contentAs'] = NULL;
$arguments8['debug'] = true;
$arguments8['partial'] = 'Forms/Config/Placeholder';
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array11);
$array12 = array (
);$array10['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array12);
$array13 = array (
);$array10['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array13);
$arguments8['arguments'] = $array10;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
	</div>
</div>
<div class="row">
	<div class="form-group col-sm-6">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['section'] = NULL;
$arguments14['partial'] = NULL;
$arguments14['delegate'] = NULL;
$arguments14['renderable'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['optional'] = false;
$arguments14['default'] = NULL;
$arguments14['contentAs'] = NULL;
$arguments14['debug'] = true;
$arguments14['partial'] = 'Forms/Config/Size';
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array17);
$array18 = array (
);$array16['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array18);
$array19 = array (
);$array16['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array19);
$arguments14['arguments'] = $array16;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
	</div>
</div>
';

return $output0;
}


}
#