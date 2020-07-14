<?php

class partial_ImageUpload_cb957fef714269abe3cab5bdff34c12be13b53b4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\Form\UploadedResourceViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
				<div id="';
$array27 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array27)]);

$output26 .= '-preview">
					<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['src'] = NULL;
$arguments28['treatIdAsReference'] = false;
$arguments28['image'] = NULL;
$arguments28['crop'] = NULL;
$arguments28['cropVariant'] = 'default';
$arguments28['width'] = NULL;
$arguments28['height'] = NULL;
$arguments28['minWidth'] = NULL;
$arguments28['minHeight'] = NULL;
$arguments28['maxWidth'] = NULL;
$arguments28['maxHeight'] = NULL;
$arguments28['absolute'] = false;
$array30 = array (
);$arguments28['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array30);
$array31 = array (
);$arguments28['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('element.properties.imageLinkMaxWidth', $array31);

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output26 .= '" class="';
$array32 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array32)]);

$output26 .= '">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['alt'] = NULL;
$arguments33['ismap'] = NULL;
$arguments33['longdesc'] = NULL;
$arguments33['usemap'] = NULL;
$arguments33['src'] = NULL;
$arguments33['treatIdAsReference'] = NULL;
$arguments33['image'] = NULL;
$arguments33['crop'] = NULL;
$arguments33['cropVariant'] = 'default';
$arguments33['width'] = NULL;
$arguments33['height'] = NULL;
$arguments33['minWidth'] = NULL;
$arguments33['minHeight'] = NULL;
$arguments33['maxWidth'] = NULL;
$arguments33['maxHeight'] = NULL;
$arguments33['absolute'] = false;
$array35 = array (
);$arguments33['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array35);
$array36 = array (
);$arguments33['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('element.properties.imageMaxWidth', $array36);
$array37 = array (
);$arguments33['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('element.properties.imageMaxHeight', $array37);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['element'] = NULL;
$arguments38['property'] = NULL;
$arguments38['renderingOptionProperty'] = NULL;
$array40 = array (
);$arguments38['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array40);
$arguments38['property'] = 'altText';
$arguments33['alt'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output26 .= '
					</a>
				</div>
			';
return $output26;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('image', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
		';
return $output20;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['property'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['multiple'] = NULL;
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
$arguments10['as'] = NULL;
$arguments10['accept'] = array (
);
$array12 = array (
);$arguments10['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array12);
$arguments10['as'] = 'image';
$array13 = array (
);$arguments10['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array13);
$array14 = array (
);$arguments10['class'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array14);
$array15 = array (
);$arguments10['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array15);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['element'] = NULL;
$arguments16['property'] = NULL;
$arguments16['renderingOptionProperty'] = NULL;
$array18 = array (
);$arguments16['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array18);
$arguments16['property'] = 'fluidAdditionalAttributes';
$arguments10['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);
$array19 = array (
);$arguments10['accept'] = $renderingContext->getVariableProvider()->getByPath('element.properties.allowedMimeTypes', $array19);

$output9 .= TYPO3\CMS\Form\ViewHelpers\Form\UploadedResourceViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
	';
return $output9;
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
$arguments5['partial'] = 'Field/Field';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array8);
$arguments5['arguments'] = $array7;
$arguments5['contentAs'] = 'elementContent';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
';
return $output4;
};
$arguments1 = array();
$arguments1['renderable'] = NULL;
$array3 = array (
);$arguments1['renderable'] = $renderingContext->getVariableProvider()->getByPath('element', $array3);

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#