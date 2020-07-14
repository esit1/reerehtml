<?php

class partial_Forms_Fields_Select_Tabs_93b89dcb78315eae9b790abcd4363a2bb8eb09f5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div role="tabpanel" class="tab-pane" id="database_';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array1)]);

$output0 .= '">
	<div class="row">
		<div class="form-group col-sm-6">
			<label class="t3js-formengine-label" for="select_foreigntable">
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
$arguments2['key'] = 'tx_mask.field.select.foreign_table';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext)]);

$output0 .= '
			</label>
			<div class="t3js-formengine-field-item">
				<div class="form-control-wrap" style="">
					<input id="select_foreigntable" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_table]"
								 type="text" class="form-control" title="foreign_table" placeholder="e.g.: pages"
								 value="';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.config.foreign_table', $array4)]);

$output0 .= '"/>
				</div>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="t3js-formengine-label" for="select_foreigntablewhere">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['languageKey'] = NULL;
$arguments5['alternativeLanguageKeys'] = NULL;
$arguments5['key'] = 'tx_mask.field.select.foreign_table_where';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '
			</label>
			<div class="t3js-formengine-field-item">
				<div class="form-control-wrap" style="">
					<input id="select_foreigntablewhere"
								 name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_table_where]" type="text"
								 class="form-control" title="foreign_table_where"
								 placeholder="e.g.: AND tt_content.pid=###CURRENT_PID###" value="';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.config.foreign_table_where', $array7)]);

$output0 .= '"/>
				</div>
			</div>
		</div>
	</div>
</div>
<div role="tabpanel" class="tab-pane" id="files_';
$array8 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array8)]);

$output0 .= '">
	<div class="row">
		<div class="form-group col-sm-6">
			<label class="t3js-formengine-label">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'tx_mask.field.select.file_folder';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '
			</label>
			<div class="t3js-formengine-field-item">
				<div class="form-control-wrap" style="">
					<input name="tx_mask_tools_maskmask[storage][tca][--index--][config][fileFolder]" type="text"
								 class="form-control" title="fileFolder" placeholder="e.g.: EXT:cms/tslib/media/flags/"
								 value="';
$array11 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.config.fileFolder', $array11)]);

$output0 .= '"/>
				</div>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="t3js-formengine-label">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['key'] = NULL;
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['languageKey'] = NULL;
$arguments12['alternativeLanguageKeys'] = NULL;
$arguments12['key'] = 'tx_mask.field.select.file_folder_ext_list';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output0 .= '
			</label>
			<div class="t3js-formengine-field-item">
				<div class="form-control-wrap" style="">
					<input name="tx_mask_tools_maskmask[storage][tca][--index--][config][fileFolder_extList]" type="text"
								 class="form-control" title="fileFolder_extList" placeholder="e.g.: png,jpg,jpeg,gif"
								 value="';
$array14 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.config.fileFolder_extList', $array14)]);

$output0 .= '"/>
				</div>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="t3js-formengine-label">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['languageKey'] = NULL;
$arguments15['alternativeLanguageKeys'] = NULL;
$arguments15['key'] = 'tx_mask.field.select.file_folder_recursions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '
			</label>
			<div class="t3js-formengine-field-item">
				<div class="form-control-wrap" style="">
					<input name="tx_mask_tools_maskmask[storage][tca][--index--][config][fileFolder_recursions]" type="number"
								 min="0" max="99" class="form-control" title="fileFolder_extList" placeholder="99"
								 value="';
$array17 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.config.fileFolder_recursions', $array17)]);

$output0 .= '"/>
				</div>
			</div>
		</div>
	</div>
</div>
<div role="tabpanel" class="tab-pane" id="localization_';
$array18 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array18)]);

$output0 .= '">
	<div class="row">
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['debug'] = true;
$arguments19['partial'] = 'Forms/Config/Behaviour/LocalizationMode';
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array22);
$array23 = array (
);$array21['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array23);
$array24 = array (
);$array21['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array24);
$array21['excludePrefixOption'] = 1;
$arguments19['arguments'] = $array21;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>
<div role="tabpanel" class="tab-pane" id="extended_';
$array25 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array25)]);

$output0 .= '">
	<div class="row">
		<div class="form-group col-sm-6">
			<label class="t3js-formengine-label" for="select_maxitems">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['key'] = NULL;
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['languageKey'] = NULL;
$arguments26['alternativeLanguageKeys'] = NULL;
$arguments26['key'] = 'tx_mask.field.select.maxitems';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output0 .= '
			</label>
			<div class="t3js-formengine-field-item">
				<div class="form-control-wrap" style="">
					<input name="tx_mask_tools_maskmask[storage][tca][--index--][config][maxitems]" type="number"
								 class="form-control" title="maxitems" min="1" value="';
$array28 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.config.maxitems', $array28)]);

$output0 .= '"
								 placeholder="maximum selected items"/>
				</div>
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="t3js-formengine-label" for="select_autosizemax">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'tx_mask.field.select.autosizemax';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output0 .= '
			</label>
			<div class="t3js-formengine-field-item">
				<div class="form-control-wrap" style="">
					<input id="select_autosizemax" name="tx_mask_tools_maskmask[storage][tca][--index--][config][autoSizeMax]"
								 type="number" class="form-control" title="autoSizeMax" placeholder="maximum size of selectbox" min="1"
								 value="';
$array31 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.config.autoSizeMax', $array31)]);

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