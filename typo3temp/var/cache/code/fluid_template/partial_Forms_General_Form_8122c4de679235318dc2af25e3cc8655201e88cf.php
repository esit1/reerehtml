<?php

class partial_Forms_General_Form_8122c4de679235318dc2af25e3cc8655201e88cf extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div data-type="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form', $array1)]);

$output0 .= '" class="tx_mask_field ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('editMode', $array5)]);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['then'] = 'edit_field';
$arguments2['else'] = 'new_field';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '">

	<!-- field header 3rd column: own/mask fields (eg. tx_mask_text) -->
	<div class="tx_mask_fieldheader">
		<div class="tx_mask_fieldheader_icon id_';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form', $array7)]);

$output0 .= '">
			';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['identifier'] = NULL;
$arguments8['size'] = 'small';
$arguments8['overlay'] = NULL;
$arguments8['state'] = 'default';
$arguments8['alternativeMarkupIdentifier'] = NULL;
$output10 = '';

$output10 .= 'mask-fieldtype-';
$array11 = array (
);
$output10 .= $renderingContext->getVariableProvider()->getByPath('form', $array11);
$arguments8['identifier'] = $output10;
$arguments8['size'] = 'default';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
		</div>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
			<div class="tx_mask_fieldheader_text" title="';
$array22 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('label', $array22)]);

$output21 .= '">
				<h1>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
						';
// Rendering ViewHelper MASK\Mask\ViewHelpers\TranslateLabelViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['key'] = NULL;
$arguments26['extensionName'] = NULL;
$array28 = array (
);$arguments26['key'] = $renderingContext->getVariableProvider()->getByPath('label', $array28);

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [MASK\Mask\ViewHelpers\TranslateLabelViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output25 .= '
					';
return $output25;
};
$arguments23 = array();
$arguments23['maxCharacters'] = NULL;
$arguments23['append'] = '&hellip;';
$arguments23['respectWordBoundaries'] = true;
$arguments23['respectHtml'] = true;
$arguments23['maxCharacters'] = 60;
$arguments23['append'] = '...';

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output21 .= '
				</h1>
				<p>';
$array29 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.key', $array29)]);

$output21 .= '</p>
			</div>
		';
return $output21;
};
$arguments12 = array();
$arguments12['map'] = NULL;
// Rendering Array
$array14 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['elementKey'] = NULL;
$arguments15['fieldKey'] = NULL;
$arguments15['field'] = NULL;
$arguments15['table'] = NULL;
$array17 = array (
);$arguments15['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array17);
$array18 = array (
);$arguments15['fieldKey'] = $renderingContext->getVariableProvider()->getByPath('key', $array18);
$array19 = array (
);$arguments15['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array19);
$array20 = array (
);$arguments15['table'] = $renderingContext->getVariableProvider()->getByPath('type', $array20);
$array14['label'] = MASK\Mask\ViewHelpers\LabelViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);
$arguments12['map'] = $array14;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
	</div>
	<div role="tabpanel">
		<ul class="nav nav-tabs t3js-tabs" role="tablist" id="tabs-';
$array30 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array30)]);

$output0 .= '" data-store-last-tab="1">
			<li role="presentation" class="t3js-tabmenu-item">
				<a href="#default_';
$array31 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array31)]);

$output0 .= '" title="" role="tab" data-toggle="tab" aria-expanded="true">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['key'] = NULL;
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['languageKey'] = NULL;
$arguments32['alternativeLanguageKeys'] = NULL;
$arguments32['key'] = 'tx_mask.tabs.default';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output0 .= '
				</a>
			</li>
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
$arguments34['partial'] = 'Forms/Tabs/Tabheaders';
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['type'] = $renderingContext->getVariableProvider()->getByPath('form', $array37);
$array38 = array (
);$array36['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array38);
$arguments34['arguments'] = $array36;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '
		</ul>
		<div class="tx_mask_fieldcontent tab-content">
			<div role="tabpanel" class="tab-pane" id="default_';
$array39 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array39)]);

$output0 .= '">
				<!-- only when create field (not edit), used in content and pages -->
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();

$output98 .= '';

$output98 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
						<!-- mask or TYPO3 field chooser -->
						<div class="row">
							<div class="form-group col-sm-6">
								<label class="t3js-formengine-label" for="form_choosefield">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['key'] = NULL;
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['languageKey'] = NULL;
$arguments104['alternativeLanguageKeys'] = NULL;
$arguments104['key'] = 'tx_mask.field.choosefield';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext)]);

$output103 .= '
								</label>
								<div class="t3js-formengine-field-item">
									<div class="form-control-wrap">
										<select id="form_choosefield" name="tx_mask_tools_maskmask[storage][elements][columns][--index--]"
														class="form-control tx_mask_fieldcontent_type">
											<optgroup class="c-divider" label="New">
												<option value="-1">
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['key'] = NULL;
$arguments106['id'] = NULL;
$arguments106['default'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['extensionName'] = NULL;
$arguments106['languageKey'] = NULL;
$arguments106['alternativeLanguageKeys'] = NULL;
$arguments106['key'] = 'tx_mask.field.newfield';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext)]);

$output103 .= '
												</option>
											</optgroup>
											<optgroup class="c-divider" label="Existing">
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
															<option value="';
$array133 = array (
);
$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array133)]);

$output132 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['key'] = NULL;
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['languageKey'] = NULL;
$arguments134['alternativeLanguageKeys'] = NULL;
$array136 = array (
);$arguments134['key'] = $renderingContext->getVariableProvider()->getByPath('item.label', $array136);

$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext)]);

$output132 .= '
																(';
$array137 = array (
);
$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array137)]);

$output132 .= ')
															</option>
														';
return $output132;
};
$arguments130 = array();

$output129 .= '';

$output129 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
															<option value="';
$array141 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array141)]);

$output140 .= '">';
$array142 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array142)]);

$output140 .= '</option>
														';
return $output140;
};
$arguments138 = array();
$arguments138['if'] = NULL;

$output129 .= '';

$output129 .= '
													';
return $output129;
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('item.label', $array127);

$expression128 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments115['__thenClosure'] = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
															<option value="';
$array118 = array (
);
$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array118)]);

$output117 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['key'] = NULL;
$arguments119['id'] = NULL;
$arguments119['default'] = NULL;
$arguments119['arguments'] = NULL;
$arguments119['extensionName'] = NULL;
$arguments119['languageKey'] = NULL;
$arguments119['alternativeLanguageKeys'] = NULL;
$array121 = array (
);$arguments119['key'] = $renderingContext->getVariableProvider()->getByPath('item.label', $array121);

$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output117 .= '
																(';
$array122 = array (
);
$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array122)]);

$output117 .= ')
															</option>
														';
return $output117;
};
$arguments115['__elseClosures'][] = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
															<option value="';
$array124 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array124)]);

$output123 .= '">';
$array125 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array125)]);

$output123 .= '</option>
														';
return $output123;
};

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
												';
return $output114;
};
$arguments108 = array();
$arguments108['each'] = NULL;
$arguments108['as'] = NULL;
$arguments108['key'] = NULL;
$arguments108['reverse'] = false;
$arguments108['iteration'] = NULL;
// Rendering ViewHelper MASK\Mask\ViewHelpers\TcaViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['type'] = NULL;
$arguments110['table'] = NULL;
$array112 = array (
);$arguments110['type'] = $renderingContext->getVariableProvider()->getByPath('form', $array112);
$array113 = array (
);$arguments110['table'] = $renderingContext->getVariableProvider()->getByPath('type', $array113);
$arguments108['each'] = MASK\Mask\ViewHelpers\TcaViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);
$arguments108['as'] = 'item';

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output103 .= '
											</optgroup>
										</select>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return '
											<input type="hidden" name="tx_mask_tools_maskmask[storage][elements][options][--index--]"
														 value="rte"/>
										';
};
$arguments143 = array();
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$arguments143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array146 = array (
);$array145['0'] = $renderingContext->getVariableProvider()->getByPath('form', $array146);
$array145['1'] = ' == \'Richtext\'';

$expression147 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Richtext');};
$arguments143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);
$arguments143['__thenClosure'] = $renderChildrenClosure144;

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output103 .= '
									</div>
								</div>
							</div>
						</div>

						<!-- TYPO3 field overwrite label -->
						<div class="row tx_mask_fieldcontent_existing">
							<div class="form-group col-sm-12">
								<label class="t3js-formengine-label" for="form_overwritelabel">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['key'] = NULL;
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$arguments148['languageKey'] = NULL;
$arguments148['alternativeLanguageKeys'] = NULL;
$arguments148['key'] = 'tx_mask.field.overwritelabel';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext)]);

$output103 .= '
								</label>
								<div class="t3js-formengine-field-item">
									<div class="form-control-wrap">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['additionalAttributes'] = NULL;
$arguments150['data'] = NULL;
$arguments150['name'] = NULL;
$arguments150['value'] = NULL;
$arguments150['property'] = NULL;
$arguments150['autofocus'] = NULL;
$arguments150['disabled'] = NULL;
$arguments150['maxlength'] = NULL;
$arguments150['readonly'] = NULL;
$arguments150['size'] = NULL;
$arguments150['placeholder'] = NULL;
$arguments150['pattern'] = NULL;
$arguments150['errorClass'] = 'f3-form-error';
$arguments150['class'] = NULL;
$arguments150['dir'] = NULL;
$arguments150['id'] = NULL;
$arguments150['lang'] = NULL;
$arguments150['style'] = NULL;
$arguments150['title'] = NULL;
$arguments150['accesskey'] = NULL;
$arguments150['tabindex'] = NULL;
$arguments150['onclick'] = NULL;
$arguments150['required'] = false;
$arguments150['type'] = 'text';
$arguments150['class'] = 'form-control';
$arguments150['id'] = 'form_overwritelabel';
$arguments150['name'] = 'tx_mask_tools_maskmask[storage][elements][labels][--index--]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['key'] = NULL;
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$arguments152['languageKey'] = NULL;
$arguments152['alternativeLanguageKeys'] = NULL;
$arguments152['key'] = 'tx_mask.all.label';
$arguments150['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['key'] = NULL;
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$arguments154['languageKey'] = NULL;
$arguments154['alternativeLanguageKeys'] = NULL;
$arguments154['key'] = 'tx_mask.all.label';
$arguments150['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output103 .= '
									</div>
								</div>
							</div>
						</div>

					';
return $output103;
};
$arguments101 = array();
$arguments101['if'] = NULL;

$output98 .= '';

$output98 .= '
				';
return $output98;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('editMode', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40['__elseClosures'][] = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
						<!-- mask or TYPO3 field chooser -->
						<div class="row">
							<div class="form-group col-sm-6">
								<label class="t3js-formengine-label" for="form_choosefield">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['key'] = NULL;
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['languageKey'] = NULL;
$arguments43['alternativeLanguageKeys'] = NULL;
$arguments43['key'] = 'tx_mask.field.choosefield';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '
								</label>
								<div class="t3js-formengine-field-item">
									<div class="form-control-wrap">
										<select id="form_choosefield" name="tx_mask_tools_maskmask[storage][elements][columns][--index--]"
														class="form-control tx_mask_fieldcontent_type">
											<optgroup class="c-divider" label="New">
												<option value="-1">
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['key'] = NULL;
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['languageKey'] = NULL;
$arguments45['alternativeLanguageKeys'] = NULL;
$arguments45['key'] = 'tx_mask.field.newfield';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output42 .= '
												</option>
											</optgroup>
											<optgroup class="c-divider" label="Existing">
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
															<option value="';
$array72 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array72)]);

$output71 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['key'] = NULL;
$arguments73['id'] = NULL;
$arguments73['default'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['languageKey'] = NULL;
$arguments73['alternativeLanguageKeys'] = NULL;
$array75 = array (
);$arguments73['key'] = $renderingContext->getVariableProvider()->getByPath('item.label', $array75);

$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output71 .= '
																(';
$array76 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array76)]);

$output71 .= ')
															</option>
														';
return $output71;
};
$arguments69 = array();

$output68 .= '';

$output68 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
															<option value="';
$array80 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array80)]);

$output79 .= '">';
$array81 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array81)]);

$output79 .= '</option>
														';
return $output79;
};
$arguments77 = array();
$arguments77['if'] = NULL;

$output68 .= '';

$output68 .= '
													';
return $output68;
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['0'] = $renderingContext->getVariableProvider()->getByPath('item.label', $array66);

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments54['__thenClosure'] = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
															<option value="';
$array57 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array57)]);

$output56 .= '">
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
$array60 = array (
);$arguments58['key'] = $renderingContext->getVariableProvider()->getByPath('item.label', $array60);

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output56 .= '
																(';
$array61 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array61)]);

$output56 .= ')
															</option>
														';
return $output56;
};
$arguments54['__elseClosures'][] = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
															<option value="';
$array63 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array63)]);

$output62 .= '">';
$array64 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.field', $array64)]);

$output62 .= '</option>
														';
return $output62;
};

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
												';
return $output53;
};
$arguments47 = array();
$arguments47['each'] = NULL;
$arguments47['as'] = NULL;
$arguments47['key'] = NULL;
$arguments47['reverse'] = false;
$arguments47['iteration'] = NULL;
// Rendering ViewHelper MASK\Mask\ViewHelpers\TcaViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['type'] = NULL;
$arguments49['table'] = NULL;
$array51 = array (
);$arguments49['type'] = $renderingContext->getVariableProvider()->getByPath('form', $array51);
$array52 = array (
);$arguments49['table'] = $renderingContext->getVariableProvider()->getByPath('type', $array52);
$arguments47['each'] = MASK\Mask\ViewHelpers\TcaViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);
$arguments47['as'] = 'item';

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output42 .= '
											</optgroup>
										</select>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return '
											<input type="hidden" name="tx_mask_tools_maskmask[storage][elements][options][--index--]"
														 value="rte"/>
										';
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('form', $array85);
$array84['1'] = ' == \'Richtext\'';

$expression86 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Richtext');};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output42 .= '
									</div>
								</div>
							</div>
						</div>

						<!-- TYPO3 field overwrite label -->
						<div class="row tx_mask_fieldcontent_existing">
							<div class="form-group col-sm-12">
								<label class="t3js-formengine-label" for="form_overwritelabel">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$arguments87['key'] = 'tx_mask.field.overwritelabel';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output42 .= '
								</label>
								<div class="t3js-formengine-field-item">
									<div class="form-control-wrap">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['name'] = NULL;
$arguments89['value'] = NULL;
$arguments89['property'] = NULL;
$arguments89['autofocus'] = NULL;
$arguments89['disabled'] = NULL;
$arguments89['maxlength'] = NULL;
$arguments89['readonly'] = NULL;
$arguments89['size'] = NULL;
$arguments89['placeholder'] = NULL;
$arguments89['pattern'] = NULL;
$arguments89['errorClass'] = 'f3-form-error';
$arguments89['class'] = NULL;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$arguments89['required'] = false;
$arguments89['type'] = 'text';
$arguments89['class'] = 'form-control';
$arguments89['id'] = 'form_overwritelabel';
$arguments89['name'] = 'tx_mask_tools_maskmask[storage][elements][labels][--index--]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['key'] = NULL;
$arguments91['id'] = NULL;
$arguments91['default'] = NULL;
$arguments91['arguments'] = NULL;
$arguments91['extensionName'] = NULL;
$arguments91['languageKey'] = NULL;
$arguments91['alternativeLanguageKeys'] = NULL;
$arguments91['key'] = 'tx_mask.all.label';
$arguments89['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['languageKey'] = NULL;
$arguments93['alternativeLanguageKeys'] = NULL;
$arguments93['key'] = 'tx_mask.all.label';
$arguments89['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output42 .= '
									</div>
								</div>
							</div>
						</div>

					';
return $output42;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
				<!-- mask field key and label -->
				<div class="tx_mask_fieldcontent_new">
					<div class="row">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
								<input name="tx_mask_tools_maskmask[storage][elements][columns][]" type="hidden"
											 class="tx_mask_newfieldname lowercase tceforms-textfield" required="required"
											 data-error="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['key'] = NULL;
$arguments175['id'] = NULL;
$arguments175['default'] = NULL;
$arguments175['arguments'] = NULL;
$arguments175['extensionName'] = NULL;
$arguments175['languageKey'] = NULL;
$arguments175['alternativeLanguageKeys'] = NULL;
$arguments175['key'] = 'tx_mask.all.error.key';

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext)]);

$output174 .= '" value="';
$array177 = array (
);
$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.key', $array177)]);

$output174 .= '"/>
							';
return $output174;
};
$arguments172 = array();

$output171 .= '';

$output171 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
								<div class="form-group col-sm-6">
									<label class="t3js-formengine-label" for="form_key">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['key'] = NULL;
$arguments181['id'] = NULL;
$arguments181['default'] = NULL;
$arguments181['arguments'] = NULL;
$arguments181['extensionName'] = NULL;
$arguments181['languageKey'] = NULL;
$arguments181['alternativeLanguageKeys'] = NULL;
$arguments181['key'] = 'tx_mask.field.fieldkey';

$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext)]);

$output180 .= '
									</label>
									<div class="t3js-formengine-field-item">
										<div class="form-control-wrap">
											<input name="tx_mask_tools_maskmask[storage][elements][columns][]" id="form_key" type="text"
														 class="form-control tx_mask_newfieldname lowercase tceforms-textfield" required="required"
														 data-error="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['key'] = NULL;
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['languageKey'] = NULL;
$arguments183['alternativeLanguageKeys'] = NULL;
$arguments183['key'] = 'tx_mask.all.error.key';

$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);

$output180 .= '" value="';
$array185 = array (
);
$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.key', $array185)]);

$output180 .= '"
														 placeholder="no blanks, no dashes"/>
										</div>
									</div>
								</div>
							';
return $output180;
};
$arguments178 = array();
$arguments178['if'] = NULL;

$output171 .= '';

$output171 .= '
						';
return $output171;
};
$arguments156 = array();
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$arguments156['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array168 = array();
$array169 = array (
);$array168['0'] = $renderingContext->getVariableProvider()->getByPath('editMode', $array169);

$expression170 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments156['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$arguments156['__thenClosure'] = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
								<input name="tx_mask_tools_maskmask[storage][elements][columns][]" type="hidden"
											 class="tx_mask_newfieldname lowercase tceforms-textfield" required="required"
											 data-error="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['key'] = NULL;
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['languageKey'] = NULL;
$arguments159['alternativeLanguageKeys'] = NULL;
$arguments159['key'] = 'tx_mask.all.error.key';

$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output158 .= '" value="';
$array161 = array (
);
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.key', $array161)]);

$output158 .= '"/>
							';
return $output158;
};
$arguments156['__elseClosures'][] = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
								<div class="form-group col-sm-6">
									<label class="t3js-formengine-label" for="form_key">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['key'] = NULL;
$arguments163['id'] = NULL;
$arguments163['default'] = NULL;
$arguments163['arguments'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['languageKey'] = NULL;
$arguments163['alternativeLanguageKeys'] = NULL;
$arguments163['key'] = 'tx_mask.field.fieldkey';

$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext)]);

$output162 .= '
									</label>
									<div class="t3js-formengine-field-item">
										<div class="form-control-wrap">
											<input name="tx_mask_tools_maskmask[storage][elements][columns][]" id="form_key" type="text"
														 class="form-control tx_mask_newfieldname lowercase tceforms-textfield" required="required"
														 data-error="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['key'] = NULL;
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$arguments165['languageKey'] = NULL;
$arguments165['alternativeLanguageKeys'] = NULL;
$arguments165['key'] = 'tx_mask.all.error.key';

$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext)]);

$output162 .= '" value="';
$array167 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.key', $array167)]);

$output162 .= '"
														 placeholder="no blanks, no dashes"/>
										</div>
									</div>
								</div>
							';
return $output162;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output0 .= '
						<div class="form-group col-sm-6">
							<label class="t3js-formengine-label" for="form_label">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['languageKey'] = NULL;
$arguments186['alternativeLanguageKeys'] = NULL;
$arguments186['key'] = 'tx_mask.field.label';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext)]);

$output0 .= '
							</label>
							<div class="t3js-formengine-field-item">
								<div class="form-control-wrap">
									<input name="tx_mask_tools_maskmask[storage][elements][labels][--index--]" id="form_label" type="text"
												 class="form-control" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['key'] = NULL;
$arguments188['id'] = NULL;
$arguments188['default'] = NULL;
$arguments188['arguments'] = NULL;
$arguments188['extensionName'] = NULL;
$arguments188['languageKey'] = NULL;
$arguments188['alternativeLanguageKeys'] = NULL;
$arguments188['key'] = 'tx_mask.content.label';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext)]);

$output0 .= '"
												 placeholder="name of field"
												 value="';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['elementKey'] = NULL;
$arguments190['fieldKey'] = NULL;
$arguments190['field'] = NULL;
$arguments190['table'] = NULL;
$array192 = array (
);$arguments190['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array192);
$array193 = array (
);$arguments190['fieldKey'] = $renderingContext->getVariableProvider()->getByPath('key', $array193);
$array194 = array (
);$arguments190['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array194);
$array195 = array (
);$arguments190['table'] = $renderingContext->getVariableProvider()->getByPath('type', $array195);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [MASK\Mask\ViewHelpers\LabelViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output0 .= '"/>
								</div>
							</div>
						</div>
					</div>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['section'] = NULL;
$arguments196['partial'] = NULL;
$arguments196['delegate'] = NULL;
$arguments196['renderable'] = NULL;
$arguments196['arguments'] = array (
);
$arguments196['optional'] = false;
$arguments196['default'] = NULL;
$arguments196['contentAs'] = NULL;
$arguments196['debug'] = true;
$output198 = '';

$output198 .= 'Forms/Fields/';
$array199 = array (
);
$output198 .= $renderingContext->getVariableProvider()->getByPath('form', $array199);

$output198 .= '/Default';
$arguments196['partial'] = $output198;
// Rendering Array
$array200 = array();
$array201 = array (
);$array200['storage'] = $renderingContext->getVariableProvider()->getByPath('storage', $array201);
$array202 = array (
);$array200['editMode'] = $renderingContext->getVariableProvider()->getByPath('editMode', $array202);
$array203 = array (
);$array200['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array203);
$array204 = array (
);$array200['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array204);
$array205 = array (
);$array200['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array205);
$array206 = array (
);$array200['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array206);
$arguments196['arguments'] = $array200;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output0 .= '
				</div>
			</div>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['section'] = NULL;
$arguments207['partial'] = NULL;
$arguments207['delegate'] = NULL;
$arguments207['renderable'] = NULL;
$arguments207['arguments'] = array (
);
$arguments207['optional'] = false;
$arguments207['default'] = NULL;
$arguments207['contentAs'] = NULL;
$arguments207['debug'] = true;
$output209 = '';

$output209 .= 'Forms/Fields/';
$array210 = array (
);
$output209 .= $renderingContext->getVariableProvider()->getByPath('form', $array210);

$output209 .= '/Tabs';
$arguments207['partial'] = $output209;
// Rendering Array
$array211 = array();
$array212 = array (
);$array211['storage'] = $renderingContext->getVariableProvider()->getByPath('storage', $array212);
$array213 = array (
);$array211['editMode'] = $renderingContext->getVariableProvider()->getByPath('editMode', $array213);
$array214 = array (
);$array211['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array214);
$array215 = array (
);$array211['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array215);
$array216 = array (
);$array211['elementKey'] = $renderingContext->getVariableProvider()->getByPath('storage.key', $array216);
$array217 = array (
);$array211['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array217);
$arguments207['arguments'] = $array211;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output0 .= '
		</div>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();

$output230 .= '';

$output230 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['section'] = NULL;
$arguments236['partial'] = NULL;
$arguments236['delegate'] = NULL;
$arguments236['renderable'] = NULL;
$arguments236['arguments'] = array (
);
$arguments236['optional'] = false;
$arguments236['default'] = NULL;
$arguments236['contentAs'] = NULL;
$arguments236['debug'] = true;
$arguments236['partial'] = 'WizardContent/Warnings';
// Rendering Array
$array238 = array();
$array239 = array (
);$array238['storage'] = $renderingContext->getVariableProvider()->getByPath('storage', $array239);
$array240 = array (
);$array238['editMode'] = $renderingContext->getVariableProvider()->getByPath('editMode', $array240);
$array241 = array (
);$array238['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array241);
$arguments236['arguments'] = $array238;

$output235 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output235 .= '
			';
return $output235;
};
$arguments233 = array();
$arguments233['if'] = NULL;

$output230 .= '';

$output230 .= '
		';
return $output230;
};
$arguments218 = array();
$arguments218['then'] = NULL;
$arguments218['else'] = NULL;
$arguments218['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array227 = array();
$array228 = array (
);$array227['0'] = $renderingContext->getVariableProvider()->getByPath('isInlineField', $array228);

$expression229 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments218['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression229(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array227)
					),
					$renderingContext
				);
$arguments218['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218['__elseClosures'][] = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['section'] = NULL;
$arguments221['partial'] = NULL;
$arguments221['delegate'] = NULL;
$arguments221['renderable'] = NULL;
$arguments221['arguments'] = array (
);
$arguments221['optional'] = false;
$arguments221['default'] = NULL;
$arguments221['contentAs'] = NULL;
$arguments221['debug'] = true;
$arguments221['partial'] = 'WizardContent/Warnings';
// Rendering Array
$array223 = array();
$array224 = array (
);$array223['storage'] = $renderingContext->getVariableProvider()->getByPath('storage', $array224);
$array225 = array (
);$array223['editMode'] = $renderingContext->getVariableProvider()->getByPath('editMode', $array225);
$array226 = array (
);$array223['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array226);
$arguments221['arguments'] = $array223;

$output220 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= '
			';
return $output220;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output0 .= '
	</div>
</div>
';

return $output0;
}


}
#