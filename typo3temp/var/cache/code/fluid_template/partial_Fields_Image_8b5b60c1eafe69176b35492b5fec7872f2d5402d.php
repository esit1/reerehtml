<?php

class partial_Fields_Image_8b5b60c1eafe69176b35492b5fec7872f2d5402d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'femanager' => 
  array (
    0 => 'In2code\\Femanager\\ViewHelpers',
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
<div class="femanager_fieldset femanager_image form-group">
	<label for="femanager_field_image" class="col-sm-2 control-label">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'tx_femanager_domain_model_user.image';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return '
			<span>*</span>
		';
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['fieldName'] = NULL;
$arguments6['fieldName'] = 'image';
$array5['0'] = In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
	</label>
	<div class="col-sm-10">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['name'] = NULL;
$arguments32['value'] = NULL;
$arguments32['property'] = NULL;
$arguments32['disabled'] = NULL;
$arguments32['multiple'] = NULL;
$arguments32['errorClass'] = 'f3-form-error';
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['id'] = 'femanager_field_image';
$arguments32['property'] = 'image.0';
$arguments32['class'] = 'custom-file-input';

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
			';
return $output31;
};
$arguments29 = array();
$arguments29['if'] = NULL;

$output28 .= '';

$output28 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
				<div>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['alt'] = NULL;
$arguments37['ismap'] = NULL;
$arguments37['longdesc'] = NULL;
$arguments37['usemap'] = NULL;
$arguments37['src'] = NULL;
$arguments37['treatIdAsReference'] = NULL;
$arguments37['image'] = NULL;
$arguments37['crop'] = NULL;
$arguments37['cropVariant'] = 'default';
$arguments37['width'] = NULL;
$arguments37['height'] = NULL;
$arguments37['minWidth'] = NULL;
$arguments37['minHeight'] = NULL;
$arguments37['maxWidth'] = NULL;
$arguments37['maxHeight'] = NULL;
$arguments37['absolute'] = false;
$array39 = array (
);$arguments37['image'] = $renderingContext->getVariableProvider()->getByPath('user.firstImage', $array39);
$arguments37['maxWidth'] = 800;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '</div>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['name'] = NULL;
$arguments40['value'] = NULL;
$arguments40['property'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['property'] = 'image.0';
$array42 = array (
);$arguments40['value'] = $renderingContext->getVariableProvider()->getByPath('user.firstImage', $array42);

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output36 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return 'Delete image';
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['name'] = NULL;
$arguments43['rel'] = NULL;
$arguments43['rev'] = NULL;
$arguments43['target'] = NULL;
$arguments43['action'] = NULL;
$arguments43['controller'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['pluginName'] = NULL;
$arguments43['pageUid'] = NULL;
$arguments43['pageType'] = NULL;
$arguments43['noCache'] = NULL;
$arguments43['noCacheHash'] = NULL;
$arguments43['section'] = NULL;
$arguments43['format'] = NULL;
$arguments43['linkAccessRestrictedPages'] = NULL;
$arguments43['additionalParams'] = NULL;
$arguments43['absolute'] = NULL;
$arguments43['addQueryString'] = NULL;
$arguments43['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments43['addQueryStringMethod'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['class'] = 'btn btn-danger';
$arguments43['action'] = 'imageDelete';
$arguments43['controller'] = 'User';
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array46);
$arguments43['arguments'] = $array45;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output36 .= '
			';
return $output36;
};
$arguments34 = array();

$output28 .= '';

$output28 .= '
		';
return $output28;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('user.image', $array26);

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments9['__elseClosures'][] = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['name'] = NULL;
$arguments12['value'] = NULL;
$arguments12['property'] = NULL;
$arguments12['disabled'] = NULL;
$arguments12['multiple'] = NULL;
$arguments12['errorClass'] = 'f3-form-error';
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['id'] = 'femanager_field_image';
$arguments12['property'] = 'image.0';
$arguments12['class'] = 'custom-file-input';

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
			';
return $output11;
};
$arguments9['__thenClosure'] = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
				<div>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['alt'] = NULL;
$arguments15['ismap'] = NULL;
$arguments15['longdesc'] = NULL;
$arguments15['usemap'] = NULL;
$arguments15['src'] = NULL;
$arguments15['treatIdAsReference'] = NULL;
$arguments15['image'] = NULL;
$arguments15['crop'] = NULL;
$arguments15['cropVariant'] = 'default';
$arguments15['width'] = NULL;
$arguments15['height'] = NULL;
$arguments15['minWidth'] = NULL;
$arguments15['minHeight'] = NULL;
$arguments15['maxWidth'] = NULL;
$arguments15['maxHeight'] = NULL;
$arguments15['absolute'] = false;
$array17 = array (
);$arguments15['image'] = $renderingContext->getVariableProvider()->getByPath('user.firstImage', $array17);
$arguments15['maxWidth'] = 800;

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '</div>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['name'] = NULL;
$arguments18['value'] = NULL;
$arguments18['property'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['property'] = 'image.0';
$array20 = array (
);$arguments18['value'] = $renderingContext->getVariableProvider()->getByPath('user.firstImage', $array20);

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output14 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return 'Delete image';
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['name'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['rev'] = NULL;
$arguments21['target'] = NULL;
$arguments21['action'] = NULL;
$arguments21['controller'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['pluginName'] = NULL;
$arguments21['pageUid'] = NULL;
$arguments21['pageType'] = NULL;
$arguments21['noCache'] = NULL;
$arguments21['noCacheHash'] = NULL;
$arguments21['section'] = NULL;
$arguments21['format'] = NULL;
$arguments21['linkAccessRestrictedPages'] = NULL;
$arguments21['additionalParams'] = NULL;
$arguments21['absolute'] = NULL;
$arguments21['addQueryString'] = NULL;
$arguments21['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments21['addQueryStringMethod'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['class'] = 'btn btn-danger';
$arguments21['action'] = 'imageDelete';
$arguments21['controller'] = 'User';
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array24);
$arguments21['arguments'] = $array23;

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output14 .= '
			';
return $output14;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
	</div>
</div>
';

return $output0;
}


}
#