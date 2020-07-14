<?php

class partial_Forms_Fields_Float_Tabs_6d3f743371448f77c621c130e280da89cb36f1e3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div role="tabpanel" class="tab-pane" id="validation_';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array1)]);

$output0 .= '">
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
$arguments2['partial'] = 'Forms/Config/Max';
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
$arguments8['partial'] = 'Forms/Eval/Required';
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
$arguments14['partial'] = 'Forms/Config/RangeLower';
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
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['debug'] = true;
$arguments20['partial'] = 'Forms/Config/RangeUpper';
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array23);
$array24 = array (
);$array22['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array24);
$array25 = array (
);$array22['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array25);
$arguments20['arguments'] = $array22;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>
<div role="tabpanel" class="tab-pane" id="localization_';
$array26 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array26)]);

$output0 .= '">
	<div class="row">
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['section'] = NULL;
$arguments27['partial'] = NULL;
$arguments27['delegate'] = NULL;
$arguments27['renderable'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['optional'] = false;
$arguments27['default'] = NULL;
$arguments27['contentAs'] = NULL;
$arguments27['debug'] = true;
$arguments27['partial'] = 'Forms/Config/Behaviour/LocalizationMode';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array30);
$array31 = array (
);$array29['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array31);
$array32 = array (
);$array29['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array32);
$array29['excludePrefixOption'] = 1;
$arguments27['arguments'] = $array29;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>
<div role="tabpanel" class="tab-pane" id="extended_';
$array33 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array33)]);

$output0 .= '">
	<div class="row">
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['section'] = NULL;
$arguments34['partial'] = NULL;
$arguments34['delegate'] = NULL;
$arguments34['renderable'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['optional'] = false;
$arguments34['default'] = NULL;
$arguments34['contentAs'] = NULL;
$arguments34['debug'] = true;
$arguments34['partial'] = 'Forms/Config/Mode';
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array37);
$array38 = array (
);$array36['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array38);
$array39 = array (
);$array36['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array39);
$arguments34['arguments'] = $array36;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '
		</div>
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['section'] = NULL;
$arguments40['partial'] = NULL;
$arguments40['delegate'] = NULL;
$arguments40['renderable'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['optional'] = false;
$arguments40['default'] = NULL;
$arguments40['contentAs'] = NULL;
$arguments40['debug'] = true;
$arguments40['partial'] = 'Forms/Config/RenderType';
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array43);
$array44 = array (
);$array42['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array44);
$array45 = array (
);$array42['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array45);
$arguments40['arguments'] = $array42;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['section'] = NULL;
$arguments46['partial'] = NULL;
$arguments46['delegate'] = NULL;
$arguments46['renderable'] = NULL;
$arguments46['arguments'] = array (
);
$arguments46['optional'] = false;
$arguments46['default'] = NULL;
$arguments46['contentAs'] = NULL;
$arguments46['debug'] = true;
$arguments46['partial'] = 'Forms/Config/Autocomplete';
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array49);
$array50 = array (
);$array48['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array50);
$array51 = array (
);$array48['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array51);
$arguments46['arguments'] = $array48;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>
';

return $output0;
}


}
#