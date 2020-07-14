<?php

class Export_action_list_66ac60623f715055ef402f322a9e4827a876ea5e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['renderable'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['debug'] = true;
$arguments1['partial'] = 'General/Tabs';
// Rendering Array
$array3 = array();
$array3['active'] = 'Preview';
$arguments1['arguments'] = $array3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="DTM-mask-1">
            <div class="form-section">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="extensionName" class="t3js-formengine-label">
                                Extension name
                            </label>
                            <div class="t3js-formengine-field-item">
                                <div class="form-control-wrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['property'] = NULL;
$arguments7['autofocus'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['maxlength'] = NULL;
$arguments7['readonly'] = NULL;
$arguments7['size'] = NULL;
$arguments7['placeholder'] = NULL;
$arguments7['pattern'] = NULL;
$arguments7['errorClass'] = 'f3-form-error';
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['required'] = false;
$arguments7['type'] = 'text';
$array9 = array (
);$arguments7['value'] = $renderingContext->getVariableProvider()->getByPath('extensionName', $array9);
$arguments7['name'] = 'extensionName';
$arguments7['id'] = 'extensionName';
$arguments7['title'] = 'Extension Name';
$arguments7['class'] = 'form-control';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-sm-4">
                            <label for="vendorName" class="t3js-formengine-label">
                                Vendor name
                            </label>
                            <div class="t3js-formengine-field-item">
                                <div class="form-control-wrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['property'] = NULL;
$arguments10['autofocus'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['maxlength'] = NULL;
$arguments10['readonly'] = NULL;
$arguments10['size'] = NULL;
$arguments10['placeholder'] = NULL;
$arguments10['pattern'] = NULL;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['required'] = false;
$arguments10['type'] = 'text';
$array12 = array (
);$arguments10['value'] = $renderingContext->getVariableProvider()->getByPath('vendorName', $array12);
$arguments10['name'] = 'vendorName';
$arguments10['id'] = 'vendorName';
$arguments10['title'] = 'Vendor Name';
$arguments10['class'] = 'form-control';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output6 .= '
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-sm-4">
                            <div class="t3js-formengine-field-item">
                                <div class="form-control-wrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['name'] = NULL;
$arguments13['value'] = NULL;
$arguments13['property'] = NULL;
$arguments13['disabled'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['name'] = 'submit';
$arguments13['value'] = 'Preview';
$arguments13['class'] = 'btn btn-success col-sm-3';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['name'] = NULL;
$arguments15['value'] = NULL;
$arguments15['property'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['name'] = 'submit';
$arguments15['value'] = '';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['name'] = NULL;
$arguments34['value'] = NULL;
$arguments34['property'] = NULL;
$arguments34['disabled'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['name'] = 'submit';
$arguments34['value'] = 'Write';
$arguments34['class'] = 'btn btn-default col-sm-3 t3js-modal-trigger';
// Rendering Array
$array36 = array();
$array36['data-href'] = 'javascript:$ = $ || jQuery;$(\'form input[type=submit].t3js-modal-trigger\').prev().val(\'install\');$(\'form\').trigger(\'submit\')';
$array36['data-severity'] = 'warning';
$array36['data-title'] = 'Write extension to file system?';
$array36['data-content'] = 'Are you sure you want to write the new extension files to your local file system? This action might overwrite extisting files.';
$array36['data-button-ok-text'] = 'Overwrite';
$arguments34['additionalAttributes'] = $array36;
$arguments34['style'] = 'margin-left: 9px;';

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
                                        ';
return $output33;
};
$arguments31 = array();

$output30 .= '';

$output30 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['name'] = NULL;
$arguments40['value'] = NULL;
$arguments40['property'] = NULL;
$arguments40['disabled'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['value'] = 'Install';
$arguments40['class'] = 'btn btn-default col-sm-3 t3js-modal-trigger';
// Rendering Array
$array42 = array();
$array42['data-href'] = 'javascript:$ = $ || jQuery;$(\'form input[type=submit].t3js-modal-trigger\').prev().val(\'install\');$(\'form\').trigger(\'submit\')';
$array42['data-severity'] = 'warning';
$array42['data-title'] = 'Write and install the extension?';
$array42['data-content'] = 'Are you sure you want to write the new extension files to your local file system and install it afterwards? This action might overwrite extisting files.';
$array42['data-button-ok-text'] = 'Overwrite';
$arguments40['additionalAttributes'] = $array42;
$arguments40['style'] = 'margin-left: 9px;';

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
                                        ';
return $output39;
};
$arguments37 = array();
$arguments37['if'] = NULL;

$output30 .= '';

$output30 .= '
                                    ';
return $output30;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('composerMode', $array28);
$array27['1'] = '}';

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['name'] = NULL;
$arguments20['value'] = NULL;
$arguments20['property'] = NULL;
$arguments20['disabled'] = NULL;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['name'] = 'submit';
$arguments20['value'] = 'Write';
$arguments20['class'] = 'btn btn-default col-sm-3 t3js-modal-trigger';
// Rendering Array
$array22 = array();
$array22['data-href'] = 'javascript:$ = $ || jQuery;$(\'form input[type=submit].t3js-modal-trigger\').prev().val(\'install\');$(\'form\').trigger(\'submit\')';
$array22['data-severity'] = 'warning';
$array22['data-title'] = 'Write extension to file system?';
$array22['data-content'] = 'Are you sure you want to write the new extension files to your local file system? This action might overwrite extisting files.';
$array22['data-button-ok-text'] = 'Overwrite';
$arguments20['additionalAttributes'] = $array22;
$arguments20['style'] = 'margin-left: 9px;';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                                        ';
return $output19;
};
$arguments17['__elseClosures'][] = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['name'] = NULL;
$arguments24['value'] = NULL;
$arguments24['property'] = NULL;
$arguments24['disabled'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['value'] = 'Install';
$arguments24['class'] = 'btn btn-default col-sm-3 t3js-modal-trigger';
// Rendering Array
$array26 = array();
$array26['data-href'] = 'javascript:$ = $ || jQuery;$(\'form input[type=submit].t3js-modal-trigger\').prev().val(\'install\');$(\'form\').trigger(\'submit\')';
$array26['data-severity'] = 'warning';
$array26['data-title'] = 'Write and install the extension?';
$array26['data-content'] = 'Are you sure you want to write the new extension files to your local file system and install it afterwards? This action might overwrite extisting files.';
$array26['data-button-ok-text'] = 'Overwrite';
$arguments24['additionalAttributes'] = $array26;
$arguments24['style'] = 'margin-left: 9px;';

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                                        ';
return $output23;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['name'] = NULL;
$arguments43['value'] = NULL;
$arguments43['property'] = NULL;
$arguments43['disabled'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['name'] = 'submit';
$arguments43['value'] = 'Download';
$arguments43['class'] = 'btn btn-default col-sm-3';
$arguments43['style'] = 'margin-left: 9px;';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output6 .= '
                                </div>
                            </div>
                        </div>
                    </div>
                ';
return $output6;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['action'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['controller'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['pluginName'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['object'] = NULL;
$arguments4['pageType'] = 0;
$arguments4['noCache'] = false;
$arguments4['noCacheHash'] = false;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['additionalParams'] = array (
);
$arguments4['absolute'] = false;
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['addQueryStringMethod'] = 'GET';
$arguments4['fieldNamePrefix'] = NULL;
$arguments4['actionUri'] = NULL;
$arguments4['objectName'] = NULL;
$arguments4['hiddenFieldClassName'] = NULL;
$arguments4['enctype'] = NULL;
$arguments4['method'] = NULL;
$arguments4['name'] = NULL;
$arguments4['onreset'] = NULL;
$arguments4['onsubmit'] = NULL;
$arguments4['target'] = NULL;
$arguments4['novalidate'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['action'] = 'save';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
                    <div class="panel panel-space panel-default">
                        <div class="panel-heading"><strong>';
$array49 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fileName', $array49)]);

$output48 .= '</strong></div>
                        <div data-state="expanded" id="recordlist-be_users" class="table-fit collapse in">
                            <pre><code>';
$array50 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fileContent', $array50)]);

$output48 .= '</code></pre>
                        </div>
                    </div>
                ';
return $output48;
};
$arguments45 = array();
$arguments45['each'] = NULL;
$arguments45['as'] = NULL;
$arguments45['key'] = NULL;
$arguments45['reverse'] = false;
$arguments45['iteration'] = NULL;
$array47 = array (
);$arguments45['each'] = $renderingContext->getVariableProvider()->getByPath('files', $array47);
$arguments45['as'] = 'fileContent';
$arguments45['key'] = 'fileName';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output0 .= '
            </div>
        </div>
    </div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output51 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['name'] = NULL;
$arguments52['name'] = 'Default';

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output51 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['section'] = NULL;
$arguments57['partial'] = NULL;
$arguments57['delegate'] = NULL;
$arguments57['renderable'] = NULL;
$arguments57['arguments'] = array (
);
$arguments57['optional'] = false;
$arguments57['default'] = NULL;
$arguments57['contentAs'] = NULL;
$arguments57['debug'] = true;
$arguments57['partial'] = 'General/Tabs';
// Rendering Array
$array59 = array();
$array59['active'] = 'Preview';
$arguments57['arguments'] = $array59;

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="DTM-mask-1">
            <div class="form-section">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="extensionName" class="t3js-formengine-label">
                                Extension name
                            </label>
                            <div class="t3js-formengine-field-item">
                                <div class="form-control-wrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['name'] = NULL;
$arguments63['value'] = NULL;
$arguments63['property'] = NULL;
$arguments63['autofocus'] = NULL;
$arguments63['disabled'] = NULL;
$arguments63['maxlength'] = NULL;
$arguments63['readonly'] = NULL;
$arguments63['size'] = NULL;
$arguments63['placeholder'] = NULL;
$arguments63['pattern'] = NULL;
$arguments63['errorClass'] = 'f3-form-error';
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['required'] = false;
$arguments63['type'] = 'text';
$array65 = array (
);$arguments63['value'] = $renderingContext->getVariableProvider()->getByPath('extensionName', $array65);
$arguments63['name'] = 'extensionName';
$arguments63['id'] = 'extensionName';
$arguments63['title'] = 'Extension Name';
$arguments63['class'] = 'form-control';

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-sm-4">
                            <label for="vendorName" class="t3js-formengine-label">
                                Vendor name
                            </label>
                            <div class="t3js-formengine-field-item">
                                <div class="form-control-wrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['name'] = NULL;
$arguments66['value'] = NULL;
$arguments66['property'] = NULL;
$arguments66['autofocus'] = NULL;
$arguments66['disabled'] = NULL;
$arguments66['maxlength'] = NULL;
$arguments66['readonly'] = NULL;
$arguments66['size'] = NULL;
$arguments66['placeholder'] = NULL;
$arguments66['pattern'] = NULL;
$arguments66['errorClass'] = 'f3-form-error';
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['required'] = false;
$arguments66['type'] = 'text';
$array68 = array (
);$arguments66['value'] = $renderingContext->getVariableProvider()->getByPath('vendorName', $array68);
$arguments66['name'] = 'vendorName';
$arguments66['id'] = 'vendorName';
$arguments66['title'] = 'Vendor Name';
$arguments66['class'] = 'form-control';

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output62 .= '
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-sm-4">
                            <div class="t3js-formengine-field-item">
                                <div class="form-control-wrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['name'] = NULL;
$arguments69['value'] = NULL;
$arguments69['property'] = NULL;
$arguments69['disabled'] = NULL;
$arguments69['class'] = NULL;
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$arguments69['name'] = 'submit';
$arguments69['value'] = 'Preview';
$arguments69['class'] = 'btn btn-success col-sm-3';

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output62 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['name'] = NULL;
$arguments71['value'] = NULL;
$arguments71['property'] = NULL;
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['name'] = 'submit';
$arguments71['value'] = '';

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output62 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['name'] = NULL;
$arguments90['value'] = NULL;
$arguments90['property'] = NULL;
$arguments90['disabled'] = NULL;
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['name'] = 'submit';
$arguments90['value'] = 'Write';
$arguments90['class'] = 'btn btn-default col-sm-3 t3js-modal-trigger';
// Rendering Array
$array92 = array();
$array92['data-href'] = 'javascript:$ = $ || jQuery;$(\'form input[type=submit].t3js-modal-trigger\').prev().val(\'install\');$(\'form\').trigger(\'submit\')';
$array92['data-severity'] = 'warning';
$array92['data-title'] = 'Write extension to file system?';
$array92['data-content'] = 'Are you sure you want to write the new extension files to your local file system? This action might overwrite extisting files.';
$array92['data-button-ok-text'] = 'Overwrite';
$arguments90['additionalAttributes'] = $array92;
$arguments90['style'] = 'margin-left: 9px;';

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
                                        ';
return $output89;
};
$arguments87 = array();

$output86 .= '';

$output86 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['additionalAttributes'] = NULL;
$arguments96['data'] = NULL;
$arguments96['name'] = NULL;
$arguments96['value'] = NULL;
$arguments96['property'] = NULL;
$arguments96['disabled'] = NULL;
$arguments96['class'] = NULL;
$arguments96['dir'] = NULL;
$arguments96['id'] = NULL;
$arguments96['lang'] = NULL;
$arguments96['style'] = NULL;
$arguments96['title'] = NULL;
$arguments96['accesskey'] = NULL;
$arguments96['tabindex'] = NULL;
$arguments96['onclick'] = NULL;
$arguments96['value'] = 'Install';
$arguments96['class'] = 'btn btn-default col-sm-3 t3js-modal-trigger';
// Rendering Array
$array98 = array();
$array98['data-href'] = 'javascript:$ = $ || jQuery;$(\'form input[type=submit].t3js-modal-trigger\').prev().val(\'install\');$(\'form\').trigger(\'submit\')';
$array98['data-severity'] = 'warning';
$array98['data-title'] = 'Write and install the extension?';
$array98['data-content'] = 'Are you sure you want to write the new extension files to your local file system and install it afterwards? This action might overwrite extisting files.';
$array98['data-button-ok-text'] = 'Overwrite';
$arguments96['additionalAttributes'] = $array98;
$arguments96['style'] = 'margin-left: 9px;';

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
                                        ';
return $output95;
};
$arguments93 = array();
$arguments93['if'] = NULL;

$output86 .= '';

$output86 .= '
                                    ';
return $output86;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('composerMode', $array84);
$array83['1'] = '}';

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['name'] = NULL;
$arguments76['value'] = NULL;
$arguments76['property'] = NULL;
$arguments76['disabled'] = NULL;
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['name'] = 'submit';
$arguments76['value'] = 'Write';
$arguments76['class'] = 'btn btn-default col-sm-3 t3js-modal-trigger';
// Rendering Array
$array78 = array();
$array78['data-href'] = 'javascript:$ = $ || jQuery;$(\'form input[type=submit].t3js-modal-trigger\').prev().val(\'install\');$(\'form\').trigger(\'submit\')';
$array78['data-severity'] = 'warning';
$array78['data-title'] = 'Write extension to file system?';
$array78['data-content'] = 'Are you sure you want to write the new extension files to your local file system? This action might overwrite extisting files.';
$array78['data-button-ok-text'] = 'Overwrite';
$arguments76['additionalAttributes'] = $array78;
$arguments76['style'] = 'margin-left: 9px;';

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
                                        ';
return $output75;
};
$arguments73['__elseClosures'][] = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['name'] = NULL;
$arguments80['value'] = NULL;
$arguments80['property'] = NULL;
$arguments80['disabled'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['value'] = 'Install';
$arguments80['class'] = 'btn btn-default col-sm-3 t3js-modal-trigger';
// Rendering Array
$array82 = array();
$array82['data-href'] = 'javascript:$ = $ || jQuery;$(\'form input[type=submit].t3js-modal-trigger\').prev().val(\'install\');$(\'form\').trigger(\'submit\')';
$array82['data-severity'] = 'warning';
$array82['data-title'] = 'Write and install the extension?';
$array82['data-content'] = 'Are you sure you want to write the new extension files to your local file system and install it afterwards? This action might overwrite extisting files.';
$array82['data-button-ok-text'] = 'Overwrite';
$arguments80['additionalAttributes'] = $array82;
$arguments80['style'] = 'margin-left: 9px;';

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
                                        ';
return $output79;
};

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output62 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['name'] = NULL;
$arguments99['value'] = NULL;
$arguments99['property'] = NULL;
$arguments99['disabled'] = NULL;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['name'] = 'submit';
$arguments99['value'] = 'Download';
$arguments99['class'] = 'btn btn-default col-sm-3';
$arguments99['style'] = 'margin-left: 9px;';

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output62 .= '
                                </div>
                            </div>
                        </div>
                    </div>
                ';
return $output62;
};
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['action'] = NULL;
$arguments60['arguments'] = array (
);
$arguments60['controller'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['pluginName'] = NULL;
$arguments60['pageUid'] = NULL;
$arguments60['object'] = NULL;
$arguments60['pageType'] = 0;
$arguments60['noCache'] = false;
$arguments60['noCacheHash'] = false;
$arguments60['section'] = '';
$arguments60['format'] = '';
$arguments60['additionalParams'] = array (
);
$arguments60['absolute'] = false;
$arguments60['addQueryString'] = false;
$arguments60['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments60['addQueryStringMethod'] = 'GET';
$arguments60['fieldNamePrefix'] = NULL;
$arguments60['actionUri'] = NULL;
$arguments60['objectName'] = NULL;
$arguments60['hiddenFieldClassName'] = NULL;
$arguments60['enctype'] = NULL;
$arguments60['method'] = NULL;
$arguments60['name'] = NULL;
$arguments60['onreset'] = NULL;
$arguments60['onsubmit'] = NULL;
$arguments60['target'] = NULL;
$arguments60['novalidate'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['action'] = 'save';

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output56 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                    <div class="panel panel-space panel-default">
                        <div class="panel-heading"><strong>';
$array105 = array (
);
$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fileName', $array105)]);

$output104 .= '</strong></div>
                        <div data-state="expanded" id="recordlist-be_users" class="table-fit collapse in">
                            <pre><code>';
$array106 = array (
);
$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fileContent', $array106)]);

$output104 .= '</code></pre>
                        </div>
                    </div>
                ';
return $output104;
};
$arguments101 = array();
$arguments101['each'] = NULL;
$arguments101['as'] = NULL;
$arguments101['key'] = NULL;
$arguments101['reverse'] = false;
$arguments101['iteration'] = NULL;
$array103 = array (
);$arguments101['each'] = $renderingContext->getVariableProvider()->getByPath('files', $array103);
$arguments101['as'] = 'fileContent';
$arguments101['key'] = 'fileName';

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output56 .= '
            </div>
        </div>
    </div>
';
return $output56;
};
$arguments54 = array();
$arguments54['name'] = NULL;
$arguments54['name'] = 'content';

$output51 .= NULL;

$output51 .= '
';

return $output51;
}


}
#