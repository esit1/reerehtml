<?php

class User_action_list_6faacb3825511b350259ded8a0cc815311f16abc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'femanager' => 
  array (
    0 => 'In2code\\Femanager\\ViewHelpers',
  ),
));
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	<div class="femanager_list">
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
$arguments1['partial'] = 'Misc/FlashMessages';
$arguments1['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'User/Searchform';
$arguments4['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
				<ul class="media-list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
						<li class="media list-group-item">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['alt'] = NULL;
$arguments66['ismap'] = NULL;
$arguments66['longdesc'] = NULL;
$arguments66['usemap'] = NULL;
$arguments66['src'] = NULL;
$arguments66['treatIdAsReference'] = NULL;
$arguments66['image'] = NULL;
$arguments66['crop'] = NULL;
$arguments66['cropVariant'] = 'default';
$arguments66['width'] = NULL;
$arguments66['height'] = NULL;
$arguments66['minWidth'] = NULL;
$arguments66['minHeight'] = NULL;
$arguments66['maxWidth'] = NULL;
$arguments66['maxHeight'] = NULL;
$arguments66['absolute'] = false;
$array68 = array (
);$arguments66['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array68);
$arguments66['width'] = '80c';
$arguments66['height'] = '80c';
$arguments66['class'] = 'media-object';

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
								';
return $output65;
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['name'] = NULL;
$arguments61['rel'] = NULL;
$arguments61['rev'] = NULL;
$arguments61['target'] = NULL;
$arguments61['action'] = NULL;
$arguments61['controller'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['pluginName'] = NULL;
$arguments61['pageUid'] = NULL;
$arguments61['pageType'] = NULL;
$arguments61['noCache'] = NULL;
$arguments61['noCacheHash'] = NULL;
$arguments61['section'] = NULL;
$arguments61['format'] = NULL;
$arguments61['linkAccessRestrictedPages'] = NULL;
$arguments61['additionalParams'] = NULL;
$arguments61['absolute'] = NULL;
$arguments61['addQueryString'] = NULL;
$arguments61['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments61['addQueryStringMethod'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['action'] = 'show';
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array64);
$arguments61['arguments'] = $array63;
$arguments61['class'] = 'pull-left';

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
							';
return $output60;
};
$arguments57 = array();
$arguments57['each'] = NULL;
$arguments57['as'] = NULL;
$arguments57['key'] = NULL;
$arguments57['reverse'] = false;
$arguments57['iteration'] = NULL;
$array59 = array (
);$arguments57['each'] = $renderingContext->getVariableProvider()->getByPath('user.image', $array59);
$arguments57['as'] = 'image';

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
							<div class="media-body">
								<h4 class="media-heading">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
										';
$array74 = array (
);
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array74)]);

$output73 .= '
									';
return $output73;
};
$arguments69 = array();
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['class'] = NULL;
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$arguments69['name'] = NULL;
$arguments69['rel'] = NULL;
$arguments69['rev'] = NULL;
$arguments69['target'] = NULL;
$arguments69['action'] = NULL;
$arguments69['controller'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['pluginName'] = NULL;
$arguments69['pageUid'] = NULL;
$arguments69['pageType'] = NULL;
$arguments69['noCache'] = NULL;
$arguments69['noCacheHash'] = NULL;
$arguments69['section'] = NULL;
$arguments69['format'] = NULL;
$arguments69['linkAccessRestrictedPages'] = NULL;
$arguments69['additionalParams'] = NULL;
$arguments69['absolute'] = NULL;
$arguments69['addQueryString'] = NULL;
$arguments69['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments69['addQueryStringMethod'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['action'] = 'show';
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array72);
$arguments69['arguments'] = $array71;

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output56 .= '
								</h4>
								';
$array75 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array75)]);

$output56 .= ' ';
$array76 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array76)]);

$output56 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array85 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.email', $array85)]);
};
$arguments82 = array();
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['email'] = NULL;
$arguments82['class'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$arguments82['name'] = NULL;
$arguments82['rel'] = NULL;
$arguments82['rev'] = NULL;
$arguments82['target'] = NULL;
$array84 = array (
);$arguments82['email'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array84);
return TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array80);

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = $renderChildrenClosure78;

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output56 .= '
							</div>
						</li>
					';
return $output56;
};
$arguments53 = array();
$arguments53['each'] = NULL;
$arguments53['as'] = NULL;
$arguments53['key'] = NULL;
$arguments53['reverse'] = false;
$arguments53['iteration'] = NULL;
$array55 = array (
);$arguments53['each'] = $renderingContext->getVariableProvider()->getByPath('users', $array55);
$arguments53['as'] = 'user';

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
				</ul>
			';
return $output52;
};
$arguments50 = array();

$output49 .= '';

$output49 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
				<div class="femanager_note">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['key'] = NULL;
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['languageKey'] = NULL;
$arguments89['alternativeLanguageKeys'] = NULL;
$arguments89['key'] = 'noRecordsFound';

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output88 .= '
				</div>
			';
return $output88;
};
$arguments86 = array();
$arguments86['if'] = NULL;

$output49 .= '';

$output49 .= '
		';
return $output49;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('users', $array47);

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
				<ul class="media-list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
						<li class="media list-group-item">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['alt'] = NULL;
$arguments23['ismap'] = NULL;
$arguments23['longdesc'] = NULL;
$arguments23['usemap'] = NULL;
$arguments23['src'] = NULL;
$arguments23['treatIdAsReference'] = NULL;
$arguments23['image'] = NULL;
$arguments23['crop'] = NULL;
$arguments23['cropVariant'] = 'default';
$arguments23['width'] = NULL;
$arguments23['height'] = NULL;
$arguments23['minWidth'] = NULL;
$arguments23['minHeight'] = NULL;
$arguments23['maxWidth'] = NULL;
$arguments23['maxHeight'] = NULL;
$arguments23['absolute'] = false;
$array25 = array (
);$arguments23['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array25);
$arguments23['width'] = '80c';
$arguments23['height'] = '80c';
$arguments23['class'] = 'media-object';

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
								';
return $output22;
};
$arguments18 = array();
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['name'] = NULL;
$arguments18['rel'] = NULL;
$arguments18['rev'] = NULL;
$arguments18['target'] = NULL;
$arguments18['action'] = NULL;
$arguments18['controller'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['pluginName'] = NULL;
$arguments18['pageUid'] = NULL;
$arguments18['pageType'] = NULL;
$arguments18['noCache'] = NULL;
$arguments18['noCacheHash'] = NULL;
$arguments18['section'] = NULL;
$arguments18['format'] = NULL;
$arguments18['linkAccessRestrictedPages'] = NULL;
$arguments18['additionalParams'] = NULL;
$arguments18['absolute'] = NULL;
$arguments18['addQueryString'] = NULL;
$arguments18['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments18['addQueryStringMethod'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['action'] = 'show';
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array21);
$arguments18['arguments'] = $array20;
$arguments18['class'] = 'pull-left';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
							';
return $output17;
};
$arguments14 = array();
$arguments14['each'] = NULL;
$arguments14['as'] = NULL;
$arguments14['key'] = NULL;
$arguments14['reverse'] = false;
$arguments14['iteration'] = NULL;
$array16 = array (
);$arguments14['each'] = $renderingContext->getVariableProvider()->getByPath('user.image', $array16);
$arguments14['as'] = 'image';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
							<div class="media-body">
								<h4 class="media-heading">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
										';
$array31 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array31)]);

$output30 .= '
									';
return $output30;
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['name'] = NULL;
$arguments26['rel'] = NULL;
$arguments26['rev'] = NULL;
$arguments26['target'] = NULL;
$arguments26['action'] = NULL;
$arguments26['controller'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['pluginName'] = NULL;
$arguments26['pageUid'] = NULL;
$arguments26['pageType'] = NULL;
$arguments26['noCache'] = NULL;
$arguments26['noCacheHash'] = NULL;
$arguments26['section'] = NULL;
$arguments26['format'] = NULL;
$arguments26['linkAccessRestrictedPages'] = NULL;
$arguments26['additionalParams'] = NULL;
$arguments26['absolute'] = NULL;
$arguments26['addQueryString'] = NULL;
$arguments26['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments26['addQueryStringMethod'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['action'] = 'show';
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array29);
$arguments26['arguments'] = $array28;

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '
								</h4>
								';
$array32 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array32)]);

$output13 .= ' ';
$array33 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array33)]);

$output13 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array42 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.email', $array42)]);
};
$arguments39 = array();
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['email'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['name'] = NULL;
$arguments39['rel'] = NULL;
$arguments39['rev'] = NULL;
$arguments39['target'] = NULL;
$array41 = array (
);$arguments39['email'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array41);
return TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array37);

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments34['__thenClosure'] = $renderChildrenClosure35;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output13 .= '
							</div>
						</li>
					';
return $output13;
};
$arguments10 = array();
$arguments10['each'] = NULL;
$arguments10['as'] = NULL;
$arguments10['key'] = NULL;
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
$array12 = array (
);$arguments10['each'] = $renderingContext->getVariableProvider()->getByPath('users', $array12);
$arguments10['as'] = 'user';

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
				</ul>
			';
return $output9;
};
$arguments7['__elseClosures'][] = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
				<div class="femanager_note">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$arguments44['key'] = 'noRecordsFound';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '
				</div>
			';
return $output43;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
	</div>
';

return $output0;
}
/**
 * section main_old
 */
public function section_850fa9a1008e4c6a0c2687bee1678f98dd870c87(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output91 = '';

$output91 .= '

	<div class="femanager_list">
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
$arguments92['partial'] = 'Misc/FlashMessages';
$arguments92['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
				<ul>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
						<li>
							<ul>
								<li>
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
$arguments186['key'] = 'tx_femanager_domain_model_user.username';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext)]);

$output185 .= ':
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$array192 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array192)]);
};
$arguments188 = array();
$arguments188['additionalAttributes'] = NULL;
$arguments188['data'] = NULL;
$arguments188['class'] = NULL;
$arguments188['dir'] = NULL;
$arguments188['id'] = NULL;
$arguments188['lang'] = NULL;
$arguments188['style'] = NULL;
$arguments188['title'] = NULL;
$arguments188['accesskey'] = NULL;
$arguments188['tabindex'] = NULL;
$arguments188['onclick'] = NULL;
$arguments188['name'] = NULL;
$arguments188['rel'] = NULL;
$arguments188['rev'] = NULL;
$arguments188['target'] = NULL;
$arguments188['action'] = NULL;
$arguments188['controller'] = NULL;
$arguments188['extensionName'] = NULL;
$arguments188['pluginName'] = NULL;
$arguments188['pageUid'] = NULL;
$arguments188['pageType'] = NULL;
$arguments188['noCache'] = NULL;
$arguments188['noCacheHash'] = NULL;
$arguments188['section'] = NULL;
$arguments188['format'] = NULL;
$arguments188['linkAccessRestrictedPages'] = NULL;
$arguments188['additionalParams'] = NULL;
$arguments188['absolute'] = NULL;
$arguments188['addQueryString'] = NULL;
$arguments188['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments188['addQueryStringMethod'] = NULL;
$arguments188['arguments'] = NULL;
$arguments188['action'] = 'show';
// Rendering Array
$array190 = array();
$array191 = array (
);$array190['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array191);
$arguments188['arguments'] = $array190;

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output185 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['key'] = NULL;
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['languageKey'] = NULL;
$arguments193['alternativeLanguageKeys'] = NULL;
$arguments193['key'] = 'tx_femanager_domain_model_user.usergroup';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output185 .= ':
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output198 = '';
$array199 = array (
);
$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('usergroup.title', $array199)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments205 = array();
$arguments205['if'] = NULL;
return '';
};
$arguments200 = array();
$arguments200['then'] = NULL;
$arguments200['else'] = NULL;
$arguments200['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['0'] = $renderingContext->getVariableProvider()->getByPath('i.isLast', $array203);

$expression204 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments200['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression204(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array202)
					),
					$renderingContext
				);
$arguments200['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output198 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);
return $output198;
};
$arguments195 = array();
$arguments195['each'] = NULL;
$arguments195['as'] = NULL;
$arguments195['key'] = NULL;
$arguments195['reverse'] = false;
$arguments195['iteration'] = NULL;
$array197 = array (
);$arguments195['each'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array197);
$arguments195['as'] = 'usergroup';
$arguments195['iteration'] = 'i';

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output185 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['key'] = NULL;
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$arguments207['languageKey'] = NULL;
$arguments207['alternativeLanguageKeys'] = NULL;
$arguments207['key'] = 'tx_femanager_domain_model_user.firstName';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output185 .= ':
									';
$array209 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array209)]);

$output185 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['key'] = NULL;
$arguments210['id'] = NULL;
$arguments210['default'] = NULL;
$arguments210['arguments'] = NULL;
$arguments210['extensionName'] = NULL;
$arguments210['languageKey'] = NULL;
$arguments210['alternativeLanguageKeys'] = NULL;
$arguments210['key'] = 'tx_femanager_domain_model_user.username';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output185 .= ':
									';
$array212 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array212)]);

$output185 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['key'] = NULL;
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$arguments213['languageKey'] = NULL;
$arguments213['alternativeLanguageKeys'] = NULL;
$arguments213['key'] = 'tx_femanager_domain_model_user.gender';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext)]);

$output185 .= ':
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['key'] = NULL;
$arguments230['id'] = NULL;
$arguments230['default'] = NULL;
$arguments230['arguments'] = NULL;
$arguments230['extensionName'] = NULL;
$arguments230['languageKey'] = NULL;
$arguments230['alternativeLanguageKeys'] = NULL;
$arguments230['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext)]);

$output229 .= '
										';
return $output229;
};
$arguments227 = array();

$output226 .= '';

$output226 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['key'] = NULL;
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$arguments235['languageKey'] = NULL;
$arguments235['alternativeLanguageKeys'] = NULL;
$arguments235['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output234 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext)]);

$output234 .= '
										';
return $output234;
};
$arguments232 = array();
$arguments232['if'] = NULL;

$output226 .= '';

$output226 .= '
									';
return $output226;
};
$arguments215 = array();
$arguments215['then'] = NULL;
$arguments215['else'] = NULL;
$arguments215['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array224 = array (
);$array223['0'] = $renderingContext->getVariableProvider()->getByPath('user.gender', $array224);
$array223['1'] = ' == 0';

$expression225 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments215['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);
$arguments215['__thenClosure'] = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['key'] = NULL;
$arguments218['id'] = NULL;
$arguments218['default'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['extensionName'] = NULL;
$arguments218['languageKey'] = NULL;
$arguments218['alternativeLanguageKeys'] = NULL;
$arguments218['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output217 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext)]);

$output217 .= '
										';
return $output217;
};
$arguments215['__elseClosures'][] = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['key'] = NULL;
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$arguments221['languageKey'] = NULL;
$arguments221['alternativeLanguageKeys'] = NULL;
$arguments221['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext)]);

$output220 .= '
										';
return $output220;
};

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output185 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['key'] = NULL;
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$arguments237['languageKey'] = NULL;
$arguments237['alternativeLanguageKeys'] = NULL;
$arguments237['key'] = 'tx_femanager_domain_model_user.dateOfBirth';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output185 .= ':
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$array243 = array (
);return $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array243);
};
$arguments239 = array();
$arguments239['date'] = NULL;
$arguments239['format'] = '';
$arguments239['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['key'] = NULL;
$arguments241['id'] = NULL;
$arguments241['default'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['extensionName'] = NULL;
$arguments241['languageKey'] = NULL;
$arguments241['alternativeLanguageKeys'] = NULL;
$arguments241['key'] = 'tx_femanager_domain_model_user.dateFormat';
$arguments239['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);
$renderChildrenClosure240 = ($arguments239['date'] !== null) ? function() use ($arguments239) { return $arguments239['date']; } : $renderChildrenClosure240;
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext)]);

$output185 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['key'] = NULL;
$arguments244['id'] = NULL;
$arguments244['default'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['extensionName'] = NULL;
$arguments244['languageKey'] = NULL;
$arguments244['alternativeLanguageKeys'] = NULL;
$arguments244['key'] = 'tx_femanager_domain_model_user.address';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext)]);

$output185 .= ':
									';
$array246 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.address', $array246)]);

$output185 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['key'] = NULL;
$arguments247['id'] = NULL;
$arguments247['default'] = NULL;
$arguments247['arguments'] = NULL;
$arguments247['extensionName'] = NULL;
$arguments247['languageKey'] = NULL;
$arguments247['alternativeLanguageKeys'] = NULL;
$arguments247['key'] = 'tx_femanager_domain_model_user.zip';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);

$output185 .= ':
									';
$array249 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.zip', $array249)]);

$output185 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['key'] = NULL;
$arguments250['id'] = NULL;
$arguments250['default'] = NULL;
$arguments250['arguments'] = NULL;
$arguments250['extensionName'] = NULL;
$arguments250['languageKey'] = NULL;
$arguments250['alternativeLanguageKeys'] = NULL;
$arguments250['key'] = 'tx_femanager_domain_model_user.city';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext)]);

$output185 .= ':
									';
$array252 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.city', $array252)]);

$output185 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['key'] = NULL;
$arguments253['id'] = NULL;
$arguments253['default'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['languageKey'] = NULL;
$arguments253['alternativeLanguageKeys'] = NULL;
$arguments253['key'] = 'tx_femanager_domain_model_user.country';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext)]);

$output185 .= ':
									';
$array255 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.country', $array255)]);

$output185 .= '
								</li>
							</ul>
						</li>
					';
return $output185;
};
$arguments182 = array();
$arguments182['each'] = NULL;
$arguments182['as'] = NULL;
$arguments182['key'] = NULL;
$arguments182['reverse'] = false;
$arguments182['iteration'] = NULL;
$array184 = array (
);$arguments182['each'] = $renderingContext->getVariableProvider()->getByPath('users', $array184);
$arguments182['as'] = 'user';

$output181 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
				</ul>
			';
return $output181;
};
$arguments179 = array();

$output178 .= '';

$output178 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
				<div class="femanager_note">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['key'] = NULL;
$arguments259['id'] = NULL;
$arguments259['default'] = NULL;
$arguments259['arguments'] = NULL;
$arguments259['extensionName'] = NULL;
$arguments259['languageKey'] = NULL;
$arguments259['alternativeLanguageKeys'] = NULL;
$arguments259['key'] = 'noRecordsFound';

$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output258 .= '
				</div>
			';
return $output258;
};
$arguments256 = array();
$arguments256['if'] = NULL;

$output178 .= '';

$output178 .= '
		';
return $output178;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array175 = array();
$array176 = array (
);$array175['0'] = $renderingContext->getVariableProvider()->getByPath('users', $array176);

$expression177 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
				<ul>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
						<li>
							<ul>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['languageKey'] = NULL;
$arguments102['alternativeLanguageKeys'] = NULL;
$arguments102['key'] = 'tx_femanager_domain_model_user.username';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output101 .= ':
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$array108 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array108)]);
};
$arguments104 = array();
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['name'] = NULL;
$arguments104['rel'] = NULL;
$arguments104['rev'] = NULL;
$arguments104['target'] = NULL;
$arguments104['action'] = NULL;
$arguments104['controller'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['pluginName'] = NULL;
$arguments104['pageUid'] = NULL;
$arguments104['pageType'] = NULL;
$arguments104['noCache'] = NULL;
$arguments104['noCacheHash'] = NULL;
$arguments104['section'] = NULL;
$arguments104['format'] = NULL;
$arguments104['linkAccessRestrictedPages'] = NULL;
$arguments104['additionalParams'] = NULL;
$arguments104['absolute'] = NULL;
$arguments104['addQueryString'] = NULL;
$arguments104['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments104['addQueryStringMethod'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['action'] = 'show';
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array107);
$arguments104['arguments'] = $array106;

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output101 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['key'] = NULL;
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['languageKey'] = NULL;
$arguments109['alternativeLanguageKeys'] = NULL;
$arguments109['key'] = 'tx_femanager_domain_model_user.usergroup';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output101 .= ':
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output114 = '';
$array115 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('usergroup.title', $array115)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments121 = array();
$arguments121['if'] = NULL;
return '';
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('i.isLast', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
return $output114;
};
$arguments111 = array();
$arguments111['each'] = NULL;
$arguments111['as'] = NULL;
$arguments111['key'] = NULL;
$arguments111['reverse'] = false;
$arguments111['iteration'] = NULL;
$array113 = array (
);$arguments111['each'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array113);
$arguments111['as'] = 'usergroup';
$arguments111['iteration'] = 'i';

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output101 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['key'] = NULL;
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['languageKey'] = NULL;
$arguments123['alternativeLanguageKeys'] = NULL;
$arguments123['key'] = 'tx_femanager_domain_model_user.firstName';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output101 .= ':
									';
$array125 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array125)]);

$output101 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['languageKey'] = NULL;
$arguments126['alternativeLanguageKeys'] = NULL;
$arguments126['key'] = 'tx_femanager_domain_model_user.username';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext)]);

$output101 .= ':
									';
$array128 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array128)]);

$output101 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['key'] = NULL;
$arguments129['id'] = NULL;
$arguments129['default'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['languageKey'] = NULL;
$arguments129['alternativeLanguageKeys'] = NULL;
$arguments129['key'] = 'tx_femanager_domain_model_user.gender';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output101 .= ':
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$arguments146['languageKey'] = NULL;
$arguments146['alternativeLanguageKeys'] = NULL;
$arguments146['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext)]);

$output145 .= '
										';
return $output145;
};
$arguments143 = array();

$output142 .= '';

$output142 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['key'] = NULL;
$arguments151['id'] = NULL;
$arguments151['default'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['languageKey'] = NULL;
$arguments151['alternativeLanguageKeys'] = NULL;
$arguments151['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output150 .= '
										';
return $output150;
};
$arguments148 = array();
$arguments148['if'] = NULL;

$output142 .= '';

$output142 .= '
									';
return $output142;
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('user.gender', $array140);
$array139['1'] = ' == 0';

$expression141 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
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
$arguments134['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext)]);

$output133 .= '
										';
return $output133;
};
$arguments131['__elseClosures'][] = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['languageKey'] = NULL;
$arguments137['alternativeLanguageKeys'] = NULL;
$arguments137['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output136 .= '
										';
return $output136;
};

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output101 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['key'] = NULL;
$arguments153['id'] = NULL;
$arguments153['default'] = NULL;
$arguments153['arguments'] = NULL;
$arguments153['extensionName'] = NULL;
$arguments153['languageKey'] = NULL;
$arguments153['alternativeLanguageKeys'] = NULL;
$arguments153['key'] = 'tx_femanager_domain_model_user.dateOfBirth';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext)]);

$output101 .= ':
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$array159 = array (
);return $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array159);
};
$arguments155 = array();
$arguments155['date'] = NULL;
$arguments155['format'] = '';
$arguments155['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['key'] = NULL;
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$arguments157['languageKey'] = NULL;
$arguments157['alternativeLanguageKeys'] = NULL;
$arguments157['key'] = 'tx_femanager_domain_model_user.dateFormat';
$arguments155['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);
$renderChildrenClosure156 = ($arguments155['date'] !== null) ? function() use ($arguments155) { return $arguments155['date']; } : $renderChildrenClosure156;
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output101 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['key'] = NULL;
$arguments160['id'] = NULL;
$arguments160['default'] = NULL;
$arguments160['arguments'] = NULL;
$arguments160['extensionName'] = NULL;
$arguments160['languageKey'] = NULL;
$arguments160['alternativeLanguageKeys'] = NULL;
$arguments160['key'] = 'tx_femanager_domain_model_user.address';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext)]);

$output101 .= ':
									';
$array162 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.address', $array162)]);

$output101 .= '
								</li>
								<li>
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
$arguments163['key'] = 'tx_femanager_domain_model_user.zip';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext)]);

$output101 .= ':
									';
$array165 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.zip', $array165)]);

$output101 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['key'] = NULL;
$arguments166['id'] = NULL;
$arguments166['default'] = NULL;
$arguments166['arguments'] = NULL;
$arguments166['extensionName'] = NULL;
$arguments166['languageKey'] = NULL;
$arguments166['alternativeLanguageKeys'] = NULL;
$arguments166['key'] = 'tx_femanager_domain_model_user.city';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext)]);

$output101 .= ':
									';
$array168 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.city', $array168)]);

$output101 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['key'] = NULL;
$arguments169['id'] = NULL;
$arguments169['default'] = NULL;
$arguments169['arguments'] = NULL;
$arguments169['extensionName'] = NULL;
$arguments169['languageKey'] = NULL;
$arguments169['alternativeLanguageKeys'] = NULL;
$arguments169['key'] = 'tx_femanager_domain_model_user.country';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext)]);

$output101 .= ':
									';
$array171 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.country', $array171)]);

$output101 .= '
								</li>
							</ul>
						</li>
					';
return $output101;
};
$arguments98 = array();
$arguments98['each'] = NULL;
$arguments98['as'] = NULL;
$arguments98['key'] = NULL;
$arguments98['reverse'] = false;
$arguments98['iteration'] = NULL;
$array100 = array (
);$arguments98['each'] = $renderingContext->getVariableProvider()->getByPath('users', $array100);
$arguments98['as'] = 'user';

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
				</ul>
			';
return $output97;
};
$arguments95['__elseClosures'][] = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
				<div class="femanager_note">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['key'] = NULL;
$arguments173['id'] = NULL;
$arguments173['default'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['extensionName'] = NULL;
$arguments173['languageKey'] = NULL;
$arguments173['alternativeLanguageKeys'] = NULL;
$arguments173['key'] = 'noRecordsFound';

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output172 .= '
				</div>
			';
return $output172;
};

$output91 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output91 .= '
	</div>
';

return $output91;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output261 = '';

$output261 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['name'] = NULL;
$arguments262['name'] = 'Default';

$output261 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output261 .= '

	User / List

	This Template is responsible for the femanager list view

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '

	<div class="femanager_list">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['section'] = NULL;
$arguments267['partial'] = NULL;
$arguments267['delegate'] = NULL;
$arguments267['renderable'] = NULL;
$arguments267['arguments'] = array (
);
$arguments267['optional'] = false;
$arguments267['default'] = NULL;
$arguments267['contentAs'] = NULL;
$arguments267['debug'] = true;
$arguments267['partial'] = 'Misc/FlashMessages';
$arguments267['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output266 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output266 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['section'] = NULL;
$arguments270['partial'] = NULL;
$arguments270['delegate'] = NULL;
$arguments270['renderable'] = NULL;
$arguments270['arguments'] = array (
);
$arguments270['optional'] = false;
$arguments270['default'] = NULL;
$arguments270['contentAs'] = NULL;
$arguments270['debug'] = true;
$arguments270['partial'] = 'User/Searchform';
$arguments270['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output266 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output266 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
				<ul class="media-list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
						<li class="media list-group-item">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['additionalAttributes'] = NULL;
$arguments332['data'] = NULL;
$arguments332['class'] = NULL;
$arguments332['dir'] = NULL;
$arguments332['id'] = NULL;
$arguments332['lang'] = NULL;
$arguments332['style'] = NULL;
$arguments332['title'] = NULL;
$arguments332['accesskey'] = NULL;
$arguments332['tabindex'] = NULL;
$arguments332['onclick'] = NULL;
$arguments332['alt'] = NULL;
$arguments332['ismap'] = NULL;
$arguments332['longdesc'] = NULL;
$arguments332['usemap'] = NULL;
$arguments332['src'] = NULL;
$arguments332['treatIdAsReference'] = NULL;
$arguments332['image'] = NULL;
$arguments332['crop'] = NULL;
$arguments332['cropVariant'] = 'default';
$arguments332['width'] = NULL;
$arguments332['height'] = NULL;
$arguments332['minWidth'] = NULL;
$arguments332['minHeight'] = NULL;
$arguments332['maxWidth'] = NULL;
$arguments332['maxHeight'] = NULL;
$arguments332['absolute'] = false;
$array334 = array (
);$arguments332['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array334);
$arguments332['width'] = '80c';
$arguments332['height'] = '80c';
$arguments332['class'] = 'media-object';

$output331 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '
								';
return $output331;
};
$arguments327 = array();
$arguments327['additionalAttributes'] = NULL;
$arguments327['data'] = NULL;
$arguments327['class'] = NULL;
$arguments327['dir'] = NULL;
$arguments327['id'] = NULL;
$arguments327['lang'] = NULL;
$arguments327['style'] = NULL;
$arguments327['title'] = NULL;
$arguments327['accesskey'] = NULL;
$arguments327['tabindex'] = NULL;
$arguments327['onclick'] = NULL;
$arguments327['name'] = NULL;
$arguments327['rel'] = NULL;
$arguments327['rev'] = NULL;
$arguments327['target'] = NULL;
$arguments327['action'] = NULL;
$arguments327['controller'] = NULL;
$arguments327['extensionName'] = NULL;
$arguments327['pluginName'] = NULL;
$arguments327['pageUid'] = NULL;
$arguments327['pageType'] = NULL;
$arguments327['noCache'] = NULL;
$arguments327['noCacheHash'] = NULL;
$arguments327['section'] = NULL;
$arguments327['format'] = NULL;
$arguments327['linkAccessRestrictedPages'] = NULL;
$arguments327['additionalParams'] = NULL;
$arguments327['absolute'] = NULL;
$arguments327['addQueryString'] = NULL;
$arguments327['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments327['addQueryStringMethod'] = NULL;
$arguments327['arguments'] = NULL;
$arguments327['action'] = 'show';
// Rendering Array
$array329 = array();
$array330 = array (
);$array329['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array330);
$arguments327['arguments'] = $array329;
$arguments327['class'] = 'pull-left';

$output326 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output326 .= '
							';
return $output326;
};
$arguments323 = array();
$arguments323['each'] = NULL;
$arguments323['as'] = NULL;
$arguments323['key'] = NULL;
$arguments323['reverse'] = false;
$arguments323['iteration'] = NULL;
$array325 = array (
);$arguments323['each'] = $renderingContext->getVariableProvider()->getByPath('user.image', $array325);
$arguments323['as'] = 'image';

$output322 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output322 .= '
							<div class="media-body">
								<h4 class="media-heading">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$output339 = '';

$output339 .= '
										';
$array340 = array (
);
$output339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array340)]);

$output339 .= '
									';
return $output339;
};
$arguments335 = array();
$arguments335['additionalAttributes'] = NULL;
$arguments335['data'] = NULL;
$arguments335['class'] = NULL;
$arguments335['dir'] = NULL;
$arguments335['id'] = NULL;
$arguments335['lang'] = NULL;
$arguments335['style'] = NULL;
$arguments335['title'] = NULL;
$arguments335['accesskey'] = NULL;
$arguments335['tabindex'] = NULL;
$arguments335['onclick'] = NULL;
$arguments335['name'] = NULL;
$arguments335['rel'] = NULL;
$arguments335['rev'] = NULL;
$arguments335['target'] = NULL;
$arguments335['action'] = NULL;
$arguments335['controller'] = NULL;
$arguments335['extensionName'] = NULL;
$arguments335['pluginName'] = NULL;
$arguments335['pageUid'] = NULL;
$arguments335['pageType'] = NULL;
$arguments335['noCache'] = NULL;
$arguments335['noCacheHash'] = NULL;
$arguments335['section'] = NULL;
$arguments335['format'] = NULL;
$arguments335['linkAccessRestrictedPages'] = NULL;
$arguments335['additionalParams'] = NULL;
$arguments335['absolute'] = NULL;
$arguments335['addQueryString'] = NULL;
$arguments335['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments335['addQueryStringMethod'] = NULL;
$arguments335['arguments'] = NULL;
$arguments335['action'] = 'show';
// Rendering Array
$array337 = array();
$array338 = array (
);$array337['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array338);
$arguments335['arguments'] = $array337;

$output322 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output322 .= '
								</h4>
								';
$array341 = array (
);
$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array341)]);

$output322 .= ' ';
$array342 = array (
);
$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array342)]);

$output322 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$array351 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.email', $array351)]);
};
$arguments348 = array();
$arguments348['additionalAttributes'] = NULL;
$arguments348['data'] = NULL;
$arguments348['email'] = NULL;
$arguments348['class'] = NULL;
$arguments348['dir'] = NULL;
$arguments348['id'] = NULL;
$arguments348['lang'] = NULL;
$arguments348['style'] = NULL;
$arguments348['title'] = NULL;
$arguments348['accesskey'] = NULL;
$arguments348['tabindex'] = NULL;
$arguments348['onclick'] = NULL;
$arguments348['name'] = NULL;
$arguments348['rel'] = NULL;
$arguments348['rev'] = NULL;
$arguments348['target'] = NULL;
$array350 = array (
);$arguments348['email'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array350);
return TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);
};
$arguments343 = array();
$arguments343['then'] = NULL;
$arguments343['else'] = NULL;
$arguments343['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array345 = array();
$array346 = array (
);$array345['0'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array346);

$expression347 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments343['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression347(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array345)
					),
					$renderingContext
				);
$arguments343['__thenClosure'] = $renderChildrenClosure344;

$output322 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output322 .= '
							</div>
						</li>
					';
return $output322;
};
$arguments319 = array();
$arguments319['each'] = NULL;
$arguments319['as'] = NULL;
$arguments319['key'] = NULL;
$arguments319['reverse'] = false;
$arguments319['iteration'] = NULL;
$array321 = array (
);$arguments319['each'] = $renderingContext->getVariableProvider()->getByPath('users', $array321);
$arguments319['as'] = 'user';

$output318 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output318 .= '
				</ul>
			';
return $output318;
};
$arguments316 = array();

$output315 .= '';

$output315 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$output354 = '';

$output354 .= '
				<div class="femanager_note">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['key'] = NULL;
$arguments355['id'] = NULL;
$arguments355['default'] = NULL;
$arguments355['arguments'] = NULL;
$arguments355['extensionName'] = NULL;
$arguments355['languageKey'] = NULL;
$arguments355['alternativeLanguageKeys'] = NULL;
$arguments355['key'] = 'noRecordsFound';

$output354 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext)]);

$output354 .= '
				</div>
			';
return $output354;
};
$arguments352 = array();
$arguments352['if'] = NULL;

$output315 .= '';

$output315 .= '
		';
return $output315;
};
$arguments273 = array();
$arguments273['then'] = NULL;
$arguments273['else'] = NULL;
$arguments273['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array312 = array();
$array313 = array (
);$array312['0'] = $renderingContext->getVariableProvider()->getByPath('users', $array313);

$expression314 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments273['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression314(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array312)
					),
					$renderingContext
				);
$arguments273['__thenClosure'] = function() use ($renderingContext, $self) {
$output275 = '';

$output275 .= '
				<ul class="media-list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
						<li class="media list-group-item">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['additionalAttributes'] = NULL;
$arguments289['data'] = NULL;
$arguments289['class'] = NULL;
$arguments289['dir'] = NULL;
$arguments289['id'] = NULL;
$arguments289['lang'] = NULL;
$arguments289['style'] = NULL;
$arguments289['title'] = NULL;
$arguments289['accesskey'] = NULL;
$arguments289['tabindex'] = NULL;
$arguments289['onclick'] = NULL;
$arguments289['alt'] = NULL;
$arguments289['ismap'] = NULL;
$arguments289['longdesc'] = NULL;
$arguments289['usemap'] = NULL;
$arguments289['src'] = NULL;
$arguments289['treatIdAsReference'] = NULL;
$arguments289['image'] = NULL;
$arguments289['crop'] = NULL;
$arguments289['cropVariant'] = 'default';
$arguments289['width'] = NULL;
$arguments289['height'] = NULL;
$arguments289['minWidth'] = NULL;
$arguments289['minHeight'] = NULL;
$arguments289['maxWidth'] = NULL;
$arguments289['maxHeight'] = NULL;
$arguments289['absolute'] = false;
$array291 = array (
);$arguments289['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array291);
$arguments289['width'] = '80c';
$arguments289['height'] = '80c';
$arguments289['class'] = 'media-object';

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output288 .= '
								';
return $output288;
};
$arguments284 = array();
$arguments284['additionalAttributes'] = NULL;
$arguments284['data'] = NULL;
$arguments284['class'] = NULL;
$arguments284['dir'] = NULL;
$arguments284['id'] = NULL;
$arguments284['lang'] = NULL;
$arguments284['style'] = NULL;
$arguments284['title'] = NULL;
$arguments284['accesskey'] = NULL;
$arguments284['tabindex'] = NULL;
$arguments284['onclick'] = NULL;
$arguments284['name'] = NULL;
$arguments284['rel'] = NULL;
$arguments284['rev'] = NULL;
$arguments284['target'] = NULL;
$arguments284['action'] = NULL;
$arguments284['controller'] = NULL;
$arguments284['extensionName'] = NULL;
$arguments284['pluginName'] = NULL;
$arguments284['pageUid'] = NULL;
$arguments284['pageType'] = NULL;
$arguments284['noCache'] = NULL;
$arguments284['noCacheHash'] = NULL;
$arguments284['section'] = NULL;
$arguments284['format'] = NULL;
$arguments284['linkAccessRestrictedPages'] = NULL;
$arguments284['additionalParams'] = NULL;
$arguments284['absolute'] = NULL;
$arguments284['addQueryString'] = NULL;
$arguments284['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments284['addQueryStringMethod'] = NULL;
$arguments284['arguments'] = NULL;
$arguments284['action'] = 'show';
// Rendering Array
$array286 = array();
$array287 = array (
);$array286['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array287);
$arguments284['arguments'] = $array286;
$arguments284['class'] = 'pull-left';

$output283 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output283 .= '
							';
return $output283;
};
$arguments280 = array();
$arguments280['each'] = NULL;
$arguments280['as'] = NULL;
$arguments280['key'] = NULL;
$arguments280['reverse'] = false;
$arguments280['iteration'] = NULL;
$array282 = array (
);$arguments280['each'] = $renderingContext->getVariableProvider()->getByPath('user.image', $array282);
$arguments280['as'] = 'image';

$output279 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output279 .= '
							<div class="media-body">
								<h4 class="media-heading">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
										';
$array297 = array (
);
$output296 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array297)]);

$output296 .= '
									';
return $output296;
};
$arguments292 = array();
$arguments292['additionalAttributes'] = NULL;
$arguments292['data'] = NULL;
$arguments292['class'] = NULL;
$arguments292['dir'] = NULL;
$arguments292['id'] = NULL;
$arguments292['lang'] = NULL;
$arguments292['style'] = NULL;
$arguments292['title'] = NULL;
$arguments292['accesskey'] = NULL;
$arguments292['tabindex'] = NULL;
$arguments292['onclick'] = NULL;
$arguments292['name'] = NULL;
$arguments292['rel'] = NULL;
$arguments292['rev'] = NULL;
$arguments292['target'] = NULL;
$arguments292['action'] = NULL;
$arguments292['controller'] = NULL;
$arguments292['extensionName'] = NULL;
$arguments292['pluginName'] = NULL;
$arguments292['pageUid'] = NULL;
$arguments292['pageType'] = NULL;
$arguments292['noCache'] = NULL;
$arguments292['noCacheHash'] = NULL;
$arguments292['section'] = NULL;
$arguments292['format'] = NULL;
$arguments292['linkAccessRestrictedPages'] = NULL;
$arguments292['additionalParams'] = NULL;
$arguments292['absolute'] = NULL;
$arguments292['addQueryString'] = NULL;
$arguments292['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments292['addQueryStringMethod'] = NULL;
$arguments292['arguments'] = NULL;
$arguments292['action'] = 'show';
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array295);
$arguments292['arguments'] = $array294;

$output279 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output279 .= '
								</h4>
								';
$array298 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array298)]);

$output279 .= ' ';
$array299 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array299)]);

$output279 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$array308 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.email', $array308)]);
};
$arguments305 = array();
$arguments305['additionalAttributes'] = NULL;
$arguments305['data'] = NULL;
$arguments305['email'] = NULL;
$arguments305['class'] = NULL;
$arguments305['dir'] = NULL;
$arguments305['id'] = NULL;
$arguments305['lang'] = NULL;
$arguments305['style'] = NULL;
$arguments305['title'] = NULL;
$arguments305['accesskey'] = NULL;
$arguments305['tabindex'] = NULL;
$arguments305['onclick'] = NULL;
$arguments305['name'] = NULL;
$arguments305['rel'] = NULL;
$arguments305['rev'] = NULL;
$arguments305['target'] = NULL;
$array307 = array (
);$arguments305['email'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array307);
return TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);
};
$arguments300 = array();
$arguments300['then'] = NULL;
$arguments300['else'] = NULL;
$arguments300['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array302 = array();
$array303 = array (
);$array302['0'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array303);

$expression304 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments300['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression304(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array302)
					),
					$renderingContext
				);
$arguments300['__thenClosure'] = $renderChildrenClosure301;

$output279 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output279 .= '
							</div>
						</li>
					';
return $output279;
};
$arguments276 = array();
$arguments276['each'] = NULL;
$arguments276['as'] = NULL;
$arguments276['key'] = NULL;
$arguments276['reverse'] = false;
$arguments276['iteration'] = NULL;
$array278 = array (
);$arguments276['each'] = $renderingContext->getVariableProvider()->getByPath('users', $array278);
$arguments276['as'] = 'user';

$output275 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output275 .= '
				</ul>
			';
return $output275;
};
$arguments273['__elseClosures'][] = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
				<div class="femanager_note">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['key'] = NULL;
$arguments310['id'] = NULL;
$arguments310['default'] = NULL;
$arguments310['arguments'] = NULL;
$arguments310['extensionName'] = NULL;
$arguments310['languageKey'] = NULL;
$arguments310['alternativeLanguageKeys'] = NULL;
$arguments310['key'] = 'noRecordsFound';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext)]);

$output309 .= '
				</div>
			';
return $output309;
};

$output266 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output266 .= '
	</div>
';
return $output266;
};
$arguments264 = array();
$arguments264['name'] = NULL;
$arguments264['name'] = 'main';

$output261 .= NULL;

$output261 .= '








';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '

	<div class="femanager_list">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['section'] = NULL;
$arguments360['partial'] = NULL;
$arguments360['delegate'] = NULL;
$arguments360['renderable'] = NULL;
$arguments360['arguments'] = array (
);
$arguments360['optional'] = false;
$arguments360['default'] = NULL;
$arguments360['contentAs'] = NULL;
$arguments360['debug'] = true;
$arguments360['partial'] = 'Misc/FlashMessages';
$arguments360['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output359 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output359 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
				<ul>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
						<li>
							<ul>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments454 = array();
$arguments454['key'] = NULL;
$arguments454['id'] = NULL;
$arguments454['default'] = NULL;
$arguments454['arguments'] = NULL;
$arguments454['extensionName'] = NULL;
$arguments454['languageKey'] = NULL;
$arguments454['alternativeLanguageKeys'] = NULL;
$arguments454['key'] = 'tx_femanager_domain_model_user.username';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext)]);

$output453 .= ':
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
$array460 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array460)]);
};
$arguments456 = array();
$arguments456['additionalAttributes'] = NULL;
$arguments456['data'] = NULL;
$arguments456['class'] = NULL;
$arguments456['dir'] = NULL;
$arguments456['id'] = NULL;
$arguments456['lang'] = NULL;
$arguments456['style'] = NULL;
$arguments456['title'] = NULL;
$arguments456['accesskey'] = NULL;
$arguments456['tabindex'] = NULL;
$arguments456['onclick'] = NULL;
$arguments456['name'] = NULL;
$arguments456['rel'] = NULL;
$arguments456['rev'] = NULL;
$arguments456['target'] = NULL;
$arguments456['action'] = NULL;
$arguments456['controller'] = NULL;
$arguments456['extensionName'] = NULL;
$arguments456['pluginName'] = NULL;
$arguments456['pageUid'] = NULL;
$arguments456['pageType'] = NULL;
$arguments456['noCache'] = NULL;
$arguments456['noCacheHash'] = NULL;
$arguments456['section'] = NULL;
$arguments456['format'] = NULL;
$arguments456['linkAccessRestrictedPages'] = NULL;
$arguments456['additionalParams'] = NULL;
$arguments456['absolute'] = NULL;
$arguments456['addQueryString'] = NULL;
$arguments456['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments456['addQueryStringMethod'] = NULL;
$arguments456['arguments'] = NULL;
$arguments456['action'] = 'show';
// Rendering Array
$array458 = array();
$array459 = array (
);$array458['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array459);
$arguments456['arguments'] = $array458;

$output453 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output453 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments461 = array();
$arguments461['key'] = NULL;
$arguments461['id'] = NULL;
$arguments461['default'] = NULL;
$arguments461['arguments'] = NULL;
$arguments461['extensionName'] = NULL;
$arguments461['languageKey'] = NULL;
$arguments461['alternativeLanguageKeys'] = NULL;
$arguments461['key'] = 'tx_femanager_domain_model_user.usergroup';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext)]);

$output453 .= ':
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
$output466 = '';
$array467 = array (
);
$output466 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('usergroup.title', $array467)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments473 = array();
$arguments473['if'] = NULL;
return '';
};
$arguments468 = array();
$arguments468['then'] = NULL;
$arguments468['else'] = NULL;
$arguments468['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array470 = array();
$array471 = array (
);$array470['0'] = $renderingContext->getVariableProvider()->getByPath('i.isLast', $array471);

$expression472 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments468['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression472(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array470)
					),
					$renderingContext
				);
$arguments468['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output466 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);
return $output466;
};
$arguments463 = array();
$arguments463['each'] = NULL;
$arguments463['as'] = NULL;
$arguments463['key'] = NULL;
$arguments463['reverse'] = false;
$arguments463['iteration'] = NULL;
$array465 = array (
);$arguments463['each'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array465);
$arguments463['as'] = 'usergroup';
$arguments463['iteration'] = 'i';

$output453 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output453 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments475 = array();
$arguments475['key'] = NULL;
$arguments475['id'] = NULL;
$arguments475['default'] = NULL;
$arguments475['arguments'] = NULL;
$arguments475['extensionName'] = NULL;
$arguments475['languageKey'] = NULL;
$arguments475['alternativeLanguageKeys'] = NULL;
$arguments475['key'] = 'tx_femanager_domain_model_user.firstName';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments475, $renderChildrenClosure476, $renderingContext)]);

$output453 .= ':
									';
$array477 = array (
);
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array477)]);

$output453 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['key'] = NULL;
$arguments478['id'] = NULL;
$arguments478['default'] = NULL;
$arguments478['arguments'] = NULL;
$arguments478['extensionName'] = NULL;
$arguments478['languageKey'] = NULL;
$arguments478['alternativeLanguageKeys'] = NULL;
$arguments478['key'] = 'tx_femanager_domain_model_user.username';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext)]);

$output453 .= ':
									';
$array480 = array (
);
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array480)]);

$output453 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments481 = array();
$arguments481['key'] = NULL;
$arguments481['id'] = NULL;
$arguments481['default'] = NULL;
$arguments481['arguments'] = NULL;
$arguments481['extensionName'] = NULL;
$arguments481['languageKey'] = NULL;
$arguments481['alternativeLanguageKeys'] = NULL;
$arguments481['key'] = 'tx_femanager_domain_model_user.gender';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext)]);

$output453 .= ':
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
$output494 = '';

$output494 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
$output497 = '';

$output497 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments498 = array();
$arguments498['key'] = NULL;
$arguments498['id'] = NULL;
$arguments498['default'] = NULL;
$arguments498['arguments'] = NULL;
$arguments498['extensionName'] = NULL;
$arguments498['languageKey'] = NULL;
$arguments498['alternativeLanguageKeys'] = NULL;
$arguments498['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext)]);

$output497 .= '
										';
return $output497;
};
$arguments495 = array();

$output494 .= '';

$output494 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$output502 = '';

$output502 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['key'] = NULL;
$arguments503['id'] = NULL;
$arguments503['default'] = NULL;
$arguments503['arguments'] = NULL;
$arguments503['extensionName'] = NULL;
$arguments503['languageKey'] = NULL;
$arguments503['alternativeLanguageKeys'] = NULL;
$arguments503['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output502 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext)]);

$output502 .= '
										';
return $output502;
};
$arguments500 = array();
$arguments500['if'] = NULL;

$output494 .= '';

$output494 .= '
									';
return $output494;
};
$arguments483 = array();
$arguments483['then'] = NULL;
$arguments483['else'] = NULL;
$arguments483['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array491 = array();
$array492 = array (
);$array491['0'] = $renderingContext->getVariableProvider()->getByPath('user.gender', $array492);
$array491['1'] = ' == 0';

$expression493 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments483['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression493(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array491)
					),
					$renderingContext
				);
$arguments483['__thenClosure'] = function() use ($renderingContext, $self) {
$output485 = '';

$output485 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['key'] = NULL;
$arguments486['id'] = NULL;
$arguments486['default'] = NULL;
$arguments486['arguments'] = NULL;
$arguments486['extensionName'] = NULL;
$arguments486['languageKey'] = NULL;
$arguments486['alternativeLanguageKeys'] = NULL;
$arguments486['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext)]);

$output485 .= '
										';
return $output485;
};
$arguments483['__elseClosures'][] = function() use ($renderingContext, $self) {
$output488 = '';

$output488 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments489 = array();
$arguments489['key'] = NULL;
$arguments489['id'] = NULL;
$arguments489['default'] = NULL;
$arguments489['arguments'] = NULL;
$arguments489['extensionName'] = NULL;
$arguments489['languageKey'] = NULL;
$arguments489['alternativeLanguageKeys'] = NULL;
$arguments489['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output488 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext)]);

$output488 .= '
										';
return $output488;
};

$output453 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);

$output453 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['key'] = NULL;
$arguments505['id'] = NULL;
$arguments505['default'] = NULL;
$arguments505['arguments'] = NULL;
$arguments505['extensionName'] = NULL;
$arguments505['languageKey'] = NULL;
$arguments505['alternativeLanguageKeys'] = NULL;
$arguments505['key'] = 'tx_femanager_domain_model_user.dateOfBirth';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext)]);

$output453 .= ':
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
$array511 = array (
);return $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array511);
};
$arguments507 = array();
$arguments507['date'] = NULL;
$arguments507['format'] = '';
$arguments507['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments509 = array();
$arguments509['key'] = NULL;
$arguments509['id'] = NULL;
$arguments509['default'] = NULL;
$arguments509['arguments'] = NULL;
$arguments509['extensionName'] = NULL;
$arguments509['languageKey'] = NULL;
$arguments509['alternativeLanguageKeys'] = NULL;
$arguments509['key'] = 'tx_femanager_domain_model_user.dateFormat';
$arguments507['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);
$renderChildrenClosure508 = ($arguments507['date'] !== null) ? function() use ($arguments507) { return $arguments507['date']; } : $renderChildrenClosure508;
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext)]);

$output453 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments512 = array();
$arguments512['key'] = NULL;
$arguments512['id'] = NULL;
$arguments512['default'] = NULL;
$arguments512['arguments'] = NULL;
$arguments512['extensionName'] = NULL;
$arguments512['languageKey'] = NULL;
$arguments512['alternativeLanguageKeys'] = NULL;
$arguments512['key'] = 'tx_femanager_domain_model_user.address';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext)]);

$output453 .= ':
									';
$array514 = array (
);
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.address', $array514)]);

$output453 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments515 = array();
$arguments515['key'] = NULL;
$arguments515['id'] = NULL;
$arguments515['default'] = NULL;
$arguments515['arguments'] = NULL;
$arguments515['extensionName'] = NULL;
$arguments515['languageKey'] = NULL;
$arguments515['alternativeLanguageKeys'] = NULL;
$arguments515['key'] = 'tx_femanager_domain_model_user.zip';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext)]);

$output453 .= ':
									';
$array517 = array (
);
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.zip', $array517)]);

$output453 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments518 = array();
$arguments518['key'] = NULL;
$arguments518['id'] = NULL;
$arguments518['default'] = NULL;
$arguments518['arguments'] = NULL;
$arguments518['extensionName'] = NULL;
$arguments518['languageKey'] = NULL;
$arguments518['alternativeLanguageKeys'] = NULL;
$arguments518['key'] = 'tx_femanager_domain_model_user.city';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext)]);

$output453 .= ':
									';
$array520 = array (
);
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.city', $array520)]);

$output453 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments521 = array();
$arguments521['key'] = NULL;
$arguments521['id'] = NULL;
$arguments521['default'] = NULL;
$arguments521['arguments'] = NULL;
$arguments521['extensionName'] = NULL;
$arguments521['languageKey'] = NULL;
$arguments521['alternativeLanguageKeys'] = NULL;
$arguments521['key'] = 'tx_femanager_domain_model_user.country';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext)]);

$output453 .= ':
									';
$array523 = array (
);
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.country', $array523)]);

$output453 .= '
								</li>
							</ul>
						</li>
					';
return $output453;
};
$arguments450 = array();
$arguments450['each'] = NULL;
$arguments450['as'] = NULL;
$arguments450['key'] = NULL;
$arguments450['reverse'] = false;
$arguments450['iteration'] = NULL;
$array452 = array (
);$arguments450['each'] = $renderingContext->getVariableProvider()->getByPath('users', $array452);
$arguments450['as'] = 'user';

$output449 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
				</ul>
			';
return $output449;
};
$arguments447 = array();

$output446 .= '';

$output446 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
$output526 = '';

$output526 .= '
				<div class="femanager_note">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure528 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments527 = array();
$arguments527['key'] = NULL;
$arguments527['id'] = NULL;
$arguments527['default'] = NULL;
$arguments527['arguments'] = NULL;
$arguments527['extensionName'] = NULL;
$arguments527['languageKey'] = NULL;
$arguments527['alternativeLanguageKeys'] = NULL;
$arguments527['key'] = 'noRecordsFound';

$output526 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext)]);

$output526 .= '
				</div>
			';
return $output526;
};
$arguments524 = array();
$arguments524['if'] = NULL;

$output446 .= '';

$output446 .= '
		';
return $output446;
};
$arguments363 = array();
$arguments363['then'] = NULL;
$arguments363['else'] = NULL;
$arguments363['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array443 = array();
$array444 = array (
);$array443['0'] = $renderingContext->getVariableProvider()->getByPath('users', $array444);

$expression445 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments363['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression445(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array443)
					),
					$renderingContext
				);
$arguments363['__thenClosure'] = function() use ($renderingContext, $self) {
$output365 = '';

$output365 .= '
				<ul>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
						<li>
							<ul>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments370 = array();
$arguments370['key'] = NULL;
$arguments370['id'] = NULL;
$arguments370['default'] = NULL;
$arguments370['arguments'] = NULL;
$arguments370['extensionName'] = NULL;
$arguments370['languageKey'] = NULL;
$arguments370['alternativeLanguageKeys'] = NULL;
$arguments370['key'] = 'tx_femanager_domain_model_user.username';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext)]);

$output369 .= ':
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$array376 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array376)]);
};
$arguments372 = array();
$arguments372['additionalAttributes'] = NULL;
$arguments372['data'] = NULL;
$arguments372['class'] = NULL;
$arguments372['dir'] = NULL;
$arguments372['id'] = NULL;
$arguments372['lang'] = NULL;
$arguments372['style'] = NULL;
$arguments372['title'] = NULL;
$arguments372['accesskey'] = NULL;
$arguments372['tabindex'] = NULL;
$arguments372['onclick'] = NULL;
$arguments372['name'] = NULL;
$arguments372['rel'] = NULL;
$arguments372['rev'] = NULL;
$arguments372['target'] = NULL;
$arguments372['action'] = NULL;
$arguments372['controller'] = NULL;
$arguments372['extensionName'] = NULL;
$arguments372['pluginName'] = NULL;
$arguments372['pageUid'] = NULL;
$arguments372['pageType'] = NULL;
$arguments372['noCache'] = NULL;
$arguments372['noCacheHash'] = NULL;
$arguments372['section'] = NULL;
$arguments372['format'] = NULL;
$arguments372['linkAccessRestrictedPages'] = NULL;
$arguments372['additionalParams'] = NULL;
$arguments372['absolute'] = NULL;
$arguments372['addQueryString'] = NULL;
$arguments372['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments372['addQueryStringMethod'] = NULL;
$arguments372['arguments'] = NULL;
$arguments372['action'] = 'show';
// Rendering Array
$array374 = array();
$array375 = array (
);$array374['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array375);
$arguments372['arguments'] = $array374;

$output369 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output369 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments377 = array();
$arguments377['key'] = NULL;
$arguments377['id'] = NULL;
$arguments377['default'] = NULL;
$arguments377['arguments'] = NULL;
$arguments377['extensionName'] = NULL;
$arguments377['languageKey'] = NULL;
$arguments377['alternativeLanguageKeys'] = NULL;
$arguments377['key'] = 'tx_femanager_domain_model_user.usergroup';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext)]);

$output369 .= ':
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output382 = '';
$array383 = array (
);
$output382 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('usergroup.title', $array383)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments389 = array();
$arguments389['if'] = NULL;
return '';
};
$arguments384 = array();
$arguments384['then'] = NULL;
$arguments384['else'] = NULL;
$arguments384['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array386 = array();
$array387 = array (
);$array386['0'] = $renderingContext->getVariableProvider()->getByPath('i.isLast', $array387);

$expression388 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments384['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression388(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array386)
					),
					$renderingContext
				);
$arguments384['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output382 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);
return $output382;
};
$arguments379 = array();
$arguments379['each'] = NULL;
$arguments379['as'] = NULL;
$arguments379['key'] = NULL;
$arguments379['reverse'] = false;
$arguments379['iteration'] = NULL;
$array381 = array (
);$arguments379['each'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array381);
$arguments379['as'] = 'usergroup';
$arguments379['iteration'] = 'i';

$output369 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output369 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments391 = array();
$arguments391['key'] = NULL;
$arguments391['id'] = NULL;
$arguments391['default'] = NULL;
$arguments391['arguments'] = NULL;
$arguments391['extensionName'] = NULL;
$arguments391['languageKey'] = NULL;
$arguments391['alternativeLanguageKeys'] = NULL;
$arguments391['key'] = 'tx_femanager_domain_model_user.firstName';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext)]);

$output369 .= ':
									';
$array393 = array (
);
$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array393)]);

$output369 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['key'] = NULL;
$arguments394['id'] = NULL;
$arguments394['default'] = NULL;
$arguments394['arguments'] = NULL;
$arguments394['extensionName'] = NULL;
$arguments394['languageKey'] = NULL;
$arguments394['alternativeLanguageKeys'] = NULL;
$arguments394['key'] = 'tx_femanager_domain_model_user.username';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext)]);

$output369 .= ':
									';
$array396 = array (
);
$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array396)]);

$output369 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments397 = array();
$arguments397['key'] = NULL;
$arguments397['id'] = NULL;
$arguments397['default'] = NULL;
$arguments397['arguments'] = NULL;
$arguments397['extensionName'] = NULL;
$arguments397['languageKey'] = NULL;
$arguments397['alternativeLanguageKeys'] = NULL;
$arguments397['key'] = 'tx_femanager_domain_model_user.gender';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext)]);

$output369 .= ':
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$output410 = '';

$output410 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
$output413 = '';

$output413 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments414 = array();
$arguments414['key'] = NULL;
$arguments414['id'] = NULL;
$arguments414['default'] = NULL;
$arguments414['arguments'] = NULL;
$arguments414['extensionName'] = NULL;
$arguments414['languageKey'] = NULL;
$arguments414['alternativeLanguageKeys'] = NULL;
$arguments414['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output413 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext)]);

$output413 .= '
										';
return $output413;
};
$arguments411 = array();

$output410 .= '';

$output410 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
$output418 = '';

$output418 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments419 = array();
$arguments419['key'] = NULL;
$arguments419['id'] = NULL;
$arguments419['default'] = NULL;
$arguments419['arguments'] = NULL;
$arguments419['extensionName'] = NULL;
$arguments419['languageKey'] = NULL;
$arguments419['alternativeLanguageKeys'] = NULL;
$arguments419['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output418 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext)]);

$output418 .= '
										';
return $output418;
};
$arguments416 = array();
$arguments416['if'] = NULL;

$output410 .= '';

$output410 .= '
									';
return $output410;
};
$arguments399 = array();
$arguments399['then'] = NULL;
$arguments399['else'] = NULL;
$arguments399['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array407 = array();
$array408 = array (
);$array407['0'] = $renderingContext->getVariableProvider()->getByPath('user.gender', $array408);
$array407['1'] = ' == 0';

$expression409 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments399['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression409(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array407)
					),
					$renderingContext
				);
$arguments399['__thenClosure'] = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments402 = array();
$arguments402['key'] = NULL;
$arguments402['id'] = NULL;
$arguments402['default'] = NULL;
$arguments402['arguments'] = NULL;
$arguments402['extensionName'] = NULL;
$arguments402['languageKey'] = NULL;
$arguments402['alternativeLanguageKeys'] = NULL;
$arguments402['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output401 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext)]);

$output401 .= '
										';
return $output401;
};
$arguments399['__elseClosures'][] = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments405 = array();
$arguments405['key'] = NULL;
$arguments405['id'] = NULL;
$arguments405['default'] = NULL;
$arguments405['arguments'] = NULL;
$arguments405['extensionName'] = NULL;
$arguments405['languageKey'] = NULL;
$arguments405['alternativeLanguageKeys'] = NULL;
$arguments405['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext)]);

$output404 .= '
										';
return $output404;
};

$output369 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output369 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments421 = array();
$arguments421['key'] = NULL;
$arguments421['id'] = NULL;
$arguments421['default'] = NULL;
$arguments421['arguments'] = NULL;
$arguments421['extensionName'] = NULL;
$arguments421['languageKey'] = NULL;
$arguments421['alternativeLanguageKeys'] = NULL;
$arguments421['key'] = 'tx_femanager_domain_model_user.dateOfBirth';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext)]);

$output369 .= ':
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$array427 = array (
);return $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array427);
};
$arguments423 = array();
$arguments423['date'] = NULL;
$arguments423['format'] = '';
$arguments423['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['key'] = NULL;
$arguments425['id'] = NULL;
$arguments425['default'] = NULL;
$arguments425['arguments'] = NULL;
$arguments425['extensionName'] = NULL;
$arguments425['languageKey'] = NULL;
$arguments425['alternativeLanguageKeys'] = NULL;
$arguments425['key'] = 'tx_femanager_domain_model_user.dateFormat';
$arguments423['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);
$renderChildrenClosure424 = ($arguments423['date'] !== null) ? function() use ($arguments423) { return $arguments423['date']; } : $renderChildrenClosure424;
$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext)]);

$output369 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments428 = array();
$arguments428['key'] = NULL;
$arguments428['id'] = NULL;
$arguments428['default'] = NULL;
$arguments428['arguments'] = NULL;
$arguments428['extensionName'] = NULL;
$arguments428['languageKey'] = NULL;
$arguments428['alternativeLanguageKeys'] = NULL;
$arguments428['key'] = 'tx_femanager_domain_model_user.address';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext)]);

$output369 .= ':
									';
$array430 = array (
);
$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.address', $array430)]);

$output369 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['key'] = NULL;
$arguments431['id'] = NULL;
$arguments431['default'] = NULL;
$arguments431['arguments'] = NULL;
$arguments431['extensionName'] = NULL;
$arguments431['languageKey'] = NULL;
$arguments431['alternativeLanguageKeys'] = NULL;
$arguments431['key'] = 'tx_femanager_domain_model_user.zip';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext)]);

$output369 .= ':
									';
$array433 = array (
);
$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.zip', $array433)]);

$output369 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments434 = array();
$arguments434['key'] = NULL;
$arguments434['id'] = NULL;
$arguments434['default'] = NULL;
$arguments434['arguments'] = NULL;
$arguments434['extensionName'] = NULL;
$arguments434['languageKey'] = NULL;
$arguments434['alternativeLanguageKeys'] = NULL;
$arguments434['key'] = 'tx_femanager_domain_model_user.city';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext)]);

$output369 .= ':
									';
$array436 = array (
);
$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.city', $array436)]);

$output369 .= '
								</li>
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments437 = array();
$arguments437['key'] = NULL;
$arguments437['id'] = NULL;
$arguments437['default'] = NULL;
$arguments437['arguments'] = NULL;
$arguments437['extensionName'] = NULL;
$arguments437['languageKey'] = NULL;
$arguments437['alternativeLanguageKeys'] = NULL;
$arguments437['key'] = 'tx_femanager_domain_model_user.country';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext)]);

$output369 .= ':
									';
$array439 = array (
);
$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.country', $array439)]);

$output369 .= '
								</li>
							</ul>
						</li>
					';
return $output369;
};
$arguments366 = array();
$arguments366['each'] = NULL;
$arguments366['as'] = NULL;
$arguments366['key'] = NULL;
$arguments366['reverse'] = false;
$arguments366['iteration'] = NULL;
$array368 = array (
);$arguments366['each'] = $renderingContext->getVariableProvider()->getByPath('users', $array368);
$arguments366['as'] = 'user';

$output365 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output365 .= '
				</ul>
			';
return $output365;
};
$arguments363['__elseClosures'][] = function() use ($renderingContext, $self) {
$output440 = '';

$output440 .= '
				<div class="femanager_note">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments441 = array();
$arguments441['key'] = NULL;
$arguments441['id'] = NULL;
$arguments441['default'] = NULL;
$arguments441['arguments'] = NULL;
$arguments441['extensionName'] = NULL;
$arguments441['languageKey'] = NULL;
$arguments441['alternativeLanguageKeys'] = NULL;
$arguments441['key'] = 'noRecordsFound';

$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext)]);

$output440 .= '
				</div>
			';
return $output440;
};

$output359 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);

$output359 .= '
	</div>
';
return $output359;
};
$arguments357 = array();
$arguments357['name'] = NULL;
$arguments357['name'] = 'main_old';

$output261 .= NULL;

$output261 .= '
';

return $output261;
}


}
#