<?php

class partial_Forms_Fields_Inline_Tabs_ab2fc0520b976f55accc5400470b6ff5c41ec071 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments14['partial'] = 'Forms/Config/Appearance/NewRecordLinkTitle';
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
$arguments20['partial'] = 'Forms/Config/Appearance/LevelLinksPosition';
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
	<div class="row">
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['section'] = NULL;
$arguments26['partial'] = NULL;
$arguments26['delegate'] = NULL;
$arguments26['renderable'] = NULL;
$arguments26['arguments'] = array (
);
$arguments26['optional'] = false;
$arguments26['default'] = NULL;
$arguments26['contentAs'] = NULL;
$arguments26['debug'] = true;
$arguments26['partial'] = 'Forms/Config/Appearance/UseSortable';
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array29);
$array30 = array (
);$array28['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array30);
$array31 = array (
);$array28['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array31);
$arguments26['arguments'] = $array28;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '
		</div>
		<div class="form-group col-sm-6">
			<!--';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['section'] = NULL;
$arguments32['partial'] = NULL;
$arguments32['delegate'] = NULL;
$arguments32['renderable'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['optional'] = false;
$arguments32['default'] = NULL;
$arguments32['contentAs'] = NULL;
$arguments32['debug'] = true;
$arguments32['partial'] = 'Forms/Config/Appearance/UseSortable';
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array35);
$array36 = array (
);$array34['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array36);
$array37 = array (
);$array34['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array37);
$arguments32['arguments'] = $array34;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output0 .= '-->
		</div>
	</div>
</div>
<div role="tabpanel" class="tab-pane" id="validation_';
$array38 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array38)]);

$output0 .= '">
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
$arguments39['partial'] = 'Forms/Config/MinItems';
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
$arguments45['partial'] = 'Forms/Config/MaxItems';
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
		<div class="col-sm-12">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['languageKey'] = NULL;
$arguments67['alternativeLanguageKeys'] = NULL;
$arguments67['key'] = 'tx_mask.content.multiuse.validation';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output66 .= '
					<b>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
							';
$array76 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.label', $array76)]);

$output75 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return ',';
};
$arguments83 = array();
$arguments83['if'] = NULL;

$output82 .= '';

$output82 .= '
							';
return $output82;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('iteration.isLast', $array80);

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['__elseClosures'][] = function() use ($renderingContext, $self) {
return ',';
};

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output75 .= '
						';
return $output75;
};
$arguments69 = array();
$arguments69['each'] = NULL;
$arguments69['as'] = NULL;
$arguments69['key'] = NULL;
$arguments69['reverse'] = false;
$arguments69['iteration'] = NULL;
// Rendering ViewHelper MASK\Mask\ViewHelpers\MultiuseViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['elementKey'] = NULL;
$array73 = array (
);$arguments71['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array73);
$array74 = array (
);$arguments71['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array74);
$arguments69['each'] = MASK\Mask\ViewHelpers\MultiuseViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);
$arguments69['as'] = 'element';
$arguments69['iteration'] = 'iteration';

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output66 .= '
					</b>
				';
return $output66;
};
$arguments62 = array();
$arguments62['message'] = NULL;
$arguments62['title'] = NULL;
$arguments62['state'] = -2;
$arguments62['iconName'] = NULL;
$arguments62['disableIcon'] = false;
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
$arguments64['key'] = 'tx_mask.content.multiuse.validation.title';
$arguments62['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
$arguments62['state'] = 1;
$renderChildrenClosure63 = ($arguments62['message'] !== null) ? function() use ($arguments62) { return $arguments62['message']; } : $renderChildrenClosure63;
$output61 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
			';
return $output61;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
// Rendering ViewHelper MASK\Mask\ViewHelpers\MultiuseViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['elementKey'] = NULL;
$array58 = array (
);$arguments56['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array58);
$array59 = array (
);$arguments56['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array59);
return MASK\Mask\ViewHelpers\MultiuseViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);
};
$arguments54 = array();
$arguments54['subject'] = NULL;
$renderChildrenClosure55 = ($arguments54['subject'] !== null) ? function() use ($arguments54) { return $arguments54['subject']; } : $renderChildrenClosure55;$array53['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);
$array53['1'] = ' > 1';

$expression60 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = $renderChildrenClosure52;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>
<div role="tabpanel" class="tab-pane" id="localization_';
$array85 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array85)]);

$output0 .= '">
	<div class="row">
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['section'] = NULL;
$arguments86['partial'] = NULL;
$arguments86['delegate'] = NULL;
$arguments86['renderable'] = NULL;
$arguments86['arguments'] = array (
);
$arguments86['optional'] = false;
$arguments86['default'] = NULL;
$arguments86['contentAs'] = NULL;
$arguments86['debug'] = true;
$arguments86['partial'] = 'Forms/Config/Appearance/ShowSynchronizationLink';
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array89);
$array90 = array (
);$array88['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array90);
$array91 = array (
);$array88['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array91);
$arguments86['arguments'] = $array88;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output0 .= '
		</div>
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['section'] = NULL;
$arguments92['partial'] = NULL;
$arguments92['delegate'] = NULL;
$arguments92['renderable'] = NULL;
$arguments92['arguments'] = array (
);
$arguments92['optional'] = false;
$arguments92['default'] = NULL;
$arguments92['contentAs'] = NULL;
$arguments92['debug'] = true;
$arguments92['partial'] = 'Forms/Config/Appearance/ShowPossibleLocalizationRecords';
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array95);
$array96 = array (
);$array94['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array96);
$array97 = array (
);$array94['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array97);
$arguments92['arguments'] = $array94;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output0 .= '
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['section'] = NULL;
$arguments98['partial'] = NULL;
$arguments98['delegate'] = NULL;
$arguments98['renderable'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['optional'] = false;
$arguments98['default'] = NULL;
$arguments98['contentAs'] = NULL;
$arguments98['debug'] = true;
$arguments98['partial'] = 'Forms/Config/Appearance/ShowAllLocalizationLink';
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array101);
$array102 = array (
);$array100['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array102);
$array103 = array (
);$array100['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array103);
$arguments98['arguments'] = $array100;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output0 .= '
		</div>
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['section'] = NULL;
$arguments104['partial'] = NULL;
$arguments104['delegate'] = NULL;
$arguments104['renderable'] = NULL;
$arguments104['arguments'] = array (
);
$arguments104['optional'] = false;
$arguments104['default'] = NULL;
$arguments104['contentAs'] = NULL;
$arguments104['debug'] = true;
$arguments104['partial'] = 'Forms/Config/Appearance/ShowRemovedLocalizationRecords';
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array107);
$array108 = array (
);$array106['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array108);
$array109 = array (
);$array106['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array109);
$arguments104['arguments'] = $array106;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output0 .= '
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['section'] = NULL;
$arguments110['partial'] = NULL;
$arguments110['delegate'] = NULL;
$arguments110['renderable'] = NULL;
$arguments110['arguments'] = array (
);
$arguments110['optional'] = false;
$arguments110['default'] = NULL;
$arguments110['contentAs'] = NULL;
$arguments110['debug'] = true;
$arguments110['partial'] = 'Forms/Config/Behaviour/LocalizationMode';
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array113);
$array114 = array (
);$array112['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array114);
$array115 = array (
);$array112['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array115);
$arguments110['arguments'] = $array112;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>
';

return $output0;
}


}
#