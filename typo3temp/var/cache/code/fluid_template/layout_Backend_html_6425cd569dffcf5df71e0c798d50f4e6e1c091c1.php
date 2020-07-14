<?php

class layout_Backend_html_6425cd569dffcf5df71e0c798d50f4e6e1c091c1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
	<div class="module">
		<div class="module-docheader">
			<div class="typo3-docheader-functions">
				<div class="module-docheader-bar module-docheader-bar-navigation">
					<div class="module-docheader-bar-column-left">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
							<div class="btn-group btn-group-xs" role="group">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return 'List';
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'BackendSelectionList';

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output20 .= '
								';
return $output20;
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
$arguments15['name'] = NULL;
$arguments15['rel'] = NULL;
$arguments15['rev'] = NULL;
$arguments15['target'] = NULL;
$arguments15['action'] = NULL;
$arguments15['controller'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['pluginName'] = NULL;
$arguments15['pageUid'] = NULL;
$arguments15['pageType'] = NULL;
$arguments15['noCache'] = NULL;
$arguments15['noCacheHash'] = NULL;
$arguments15['section'] = NULL;
$arguments15['format'] = NULL;
$arguments15['linkAccessRestrictedPages'] = NULL;
$arguments15['additionalParams'] = NULL;
$arguments15['absolute'] = NULL;
$arguments15['addQueryString'] = NULL;
$arguments15['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments15['addQueryStringMethod'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['action'] = 'list';
$output17 = '';

$output17 .= 'btn btn-default';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Be\GetClassNameOnActionViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['actionName'] = NULL;
$arguments18['className'] = ' btn-info';
$arguments18['fallbackClassName'] = '';
$arguments18['actionName'] = 'list';

$output17 .= In2code\Femanager\ViewHelpers\Be\GetClassNameOnActionViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
$arguments15['class'] = $output17;

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return 'Admin Confirmation';
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'BackendSelectionList';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '
								';
return $output28;
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
$arguments23['name'] = NULL;
$arguments23['rel'] = NULL;
$arguments23['rev'] = NULL;
$arguments23['target'] = NULL;
$arguments23['action'] = NULL;
$arguments23['controller'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['pluginName'] = NULL;
$arguments23['pageUid'] = NULL;
$arguments23['pageType'] = NULL;
$arguments23['noCache'] = NULL;
$arguments23['noCacheHash'] = NULL;
$arguments23['section'] = NULL;
$arguments23['format'] = NULL;
$arguments23['linkAccessRestrictedPages'] = NULL;
$arguments23['additionalParams'] = NULL;
$arguments23['absolute'] = NULL;
$arguments23['addQueryString'] = NULL;
$arguments23['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments23['addQueryStringMethod'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['action'] = 'confirmation';
$output25 = '';

$output25 .= 'btn btn-default';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Be\GetClassNameOnActionViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['actionName'] = NULL;
$arguments26['className'] = ' btn-info';
$arguments26['fallbackClassName'] = '';
$arguments26['actionName'] = 'confirmation';

$output25 .= In2code\Femanager\ViewHelpers\Be\GetClassNameOnActionViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);
$arguments23['class'] = $output25;

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return 'Open User Confirmtions';
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$arguments44['key'] = 'BackendSelectionList';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '
									';
return $output43;
};
$arguments38 = array();
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['name'] = NULL;
$arguments38['rel'] = NULL;
$arguments38['rev'] = NULL;
$arguments38['target'] = NULL;
$arguments38['action'] = NULL;
$arguments38['controller'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['pluginName'] = NULL;
$arguments38['pageUid'] = NULL;
$arguments38['pageType'] = NULL;
$arguments38['noCache'] = NULL;
$arguments38['noCacheHash'] = NULL;
$arguments38['section'] = NULL;
$arguments38['format'] = NULL;
$arguments38['linkAccessRestrictedPages'] = NULL;
$arguments38['additionalParams'] = NULL;
$arguments38['absolute'] = NULL;
$arguments38['addQueryString'] = NULL;
$arguments38['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments38['addQueryStringMethod'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['action'] = 'listOpenUserConfirmations';
$output40 = '';

$output40 .= 'btn btn-default';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Be\GetClassNameOnActionViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['actionName'] = NULL;
$arguments41['className'] = ' btn-info';
$arguments41['fallbackClassName'] = '';
$arguments41['actionName'] = 'listOpenUserConfirmations';

$output40 .= In2code\Femanager\ViewHelpers\Be\GetClassNameOnActionViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
$arguments38['class'] = $output40;

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
								';
return $output37;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Be\IsResendUserConfirmationRequestActivatedViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$array33['0'] = In2code\Femanager\ViewHelpers\Be\IsResendUserConfirmationRequestActivatedViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output14 .= '
							</div>
						';
return $output14;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Be\IsConfirmationModuleActivatedViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$array10['0'] = In2code\Femanager\ViewHelpers\Be\IsConfirmationModuleActivatedViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = $renderChildrenClosure9;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
					</div>
					<div class="module-docheader-bar-column-right">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output7 .= '
					</div>
				</div>
			</div>
			<div class="module-docheader-bar module-docheader-bar-buttons">
				<div class="module-docheader-bar-column-left">
					&nbsp;
				</div>
				<div class="module-docheader-bar-column-right">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['getVars'] = array (
);
$arguments48['setVars'] = array (
);

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output7 .= '
				</div>
			</div>
		</div>
		<div class="module-body femanager-backend">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
				<div class="alert alert-warning">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
						<div class="message-body">';
$array57 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('flashMessage.message', $array57)]);

$output56 .= '</div>
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
);$arguments53['each'] = $renderingContext->getVariableProvider()->getByPath('flashMessages', $array55);
$arguments53['as'] = 'flashMessage';

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
				</div>
			';
return $output52;
};
$arguments50 = array();
$arguments50['queueIdentifier'] = NULL;
$arguments50['as'] = NULL;
$arguments50['as'] = 'flashMessages';

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output7 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['section'] = NULL;
$arguments58['partial'] = NULL;
$arguments58['delegate'] = NULL;
$arguments58['renderable'] = NULL;
$arguments58['arguments'] = array (
);
$arguments58['optional'] = false;
$arguments58['default'] = NULL;
$arguments58['contentAs'] = NULL;
$arguments58['debug'] = true;
$arguments58['section'] = 'main';

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output7 .= '
		</div>
	</div>
';
return $output7;
};
$arguments1 = array();
$arguments1['pageTitle'] = '';
$arguments1['includeCssFiles'] = NULL;
$arguments1['includeJsFiles'] = NULL;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
// Rendering Array
$array3 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['path'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['absolute'] = false;
$arguments4['path'] = 'Css/Backend.min.css';
$array3['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
$arguments1['includeCssFiles'] = $array3;
// Rendering Array
$array6 = array();
$array6['0'] = 'TYPO3/CMS/Femanager/Backend.min';
$arguments1['includeRequireJsModules'] = $array6;
$arguments1['pageTitle'] = 'femanager';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#