<?php

class partial_Forms_Fields_File_Tabs_f5b44fbdf6627fac5892dd601beb1b35ed4e7549 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div role="tabpanel" class="tab-pane" id="appearance_';
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
$arguments2['partial'] = 'Forms/Config/Appearance/CollapseAll';
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
$arguments8['partial'] = 'Forms/Config/Appearance/ExpandSingle';
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
$arguments14['partial'] = 'Forms/Config/Appearance/UseSortable';
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
$arguments20['partial'] = 'Forms/Config/Appearance/FileUploadAllowed';
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
$arguments27['partial'] = 'Forms/Config/Appearance/ShowSynchronizationLink';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array30);
$array31 = array (
);$array29['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array31);
$array32 = array (
);$array29['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array32);
$arguments27['arguments'] = $array29;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '
		</div>
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['renderable'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['debug'] = true;
$arguments33['partial'] = 'Forms/Config/Appearance/ShowPossibleLocalizationRecords';
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array36);
$array37 = array (
);$array35['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array37);
$array38 = array (
);$array35['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array38);
$arguments33['arguments'] = $array35;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['section'] = NULL;
$arguments39['partial'] = NULL;
$arguments39['delegate'] = NULL;
$arguments39['renderable'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['optional'] = false;
$arguments39['default'] = NULL;
$arguments39['contentAs'] = NULL;
$arguments39['debug'] = true;
$arguments39['partial'] = 'Forms/Config/Appearance/ShowAllLocalizationLink';
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array42);
$array43 = array (
);$array41['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array43);
$array44 = array (
);$array41['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array44);
$arguments39['arguments'] = $array41;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output0 .= '
		</div>
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['section'] = NULL;
$arguments45['partial'] = NULL;
$arguments45['delegate'] = NULL;
$arguments45['renderable'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['optional'] = false;
$arguments45['default'] = NULL;
$arguments45['contentAs'] = NULL;
$arguments45['debug'] = true;
$arguments45['partial'] = 'Forms/Config/Appearance/ShowRemovedLocalizationRecords';
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array48);
$array49 = array (
);$array47['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array49);
$array50 = array (
);$array47['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array50);
$arguments45['arguments'] = $array47;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output0 .= '
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['section'] = NULL;
$arguments51['partial'] = NULL;
$arguments51['delegate'] = NULL;
$arguments51['renderable'] = NULL;
$arguments51['arguments'] = array (
);
$arguments51['optional'] = false;
$arguments51['default'] = NULL;
$arguments51['contentAs'] = NULL;
$arguments51['debug'] = true;
$arguments51['partial'] = 'Forms/Config/Behaviour/LocalizationMode';
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array54);
$array55 = array (
);$array53['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array55);
$array56 = array (
);$array53['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array56);
$arguments51['arguments'] = $array53;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>
<div role="tabpanel" class="tab-pane" id="validation_';
$array57 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array57)]);

$output0 .= '">
	<div class="row">
		<div class="form-group col-sm-6">
			<label class="t3js-formengine-label" for="minitems">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'tx_mask.field.inline.minitems';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output0 .= '
			</label>
			<div class="t3js-formengine-field-item">
				<div class="form-control-wrap" style="">
					<input id="minitems" name="tx_mask_tools_maskmask[storage][tca][--index--][config][minitems]" type="number"
								 class="form-control" min="0" value="';
$array60 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.config.minitems', $array60)]);

$output0 .= '"/>
				</div>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="t3js-formengine-label" for="maxitems">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['key'] = NULL;
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['languageKey'] = NULL;
$arguments61['alternativeLanguageKeys'] = NULL;
$arguments61['key'] = 'tx_mask.field.inline.maxitems';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output0 .= '
			</label>
			<div class="t3js-formengine-field-item">
				<div class="form-control-wrap" style="">
					<input id="maxitems" name="tx_mask_tools_maskmask[storage][tca][--index--][config][maxitems]" type="number"
								 class="form-control" min="1" value="';
$array63 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.config.maxitems', $array63)]);

$output0 .= '"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-6">
			<label class="t3js-formengine-label">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$arguments64['key'] = 'tx_mask.field.inline.allowed_file_extensions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output0 .= '
			</label>
			<div class="t3js-formengine-field-item">
				<div class="form-control-wrap">
					<input
						name="tx_mask_tools_maskmask[storage][tca][--index--][config][filter][0][parameters][allowedFileExtensions]"
						type="text" class="form-control" placeholder="comma seperated list, [GFX][imagefile_ext] if empty"
						value="';
$array66 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.config.filter.0.parameters.allowedFileExtensions', $array66)]);

$output0 .= '"/>
				</div>
			</div>
		</div>
	</div>
</div>
';

return $output0;
}


}
#