<?php

class WizardContent_action_list_db0fb60f7a6f87eaf48cfa08a8b0cf9f6e96fa96 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'mask' => 
  array (
    0 => 'MASK\\Mask\\ViewHelpers',
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
$array3['active'] = 'WizardContent';
$arguments1['arguments'] = $array3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="DTM-mask-1">
			<div class="form-section">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['queueIdentifier'] = NULL;
$arguments4['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['name'] = NULL;
$arguments15['value'] = NULL;
$arguments15['property'] = NULL;
$arguments15['disabled'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'tx_mask.all.createmissingfolders';
$arguments15['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
$arguments15['class'] = 'btn btn-primary';

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
					';
return $output14;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['action'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['controller'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['pluginName'] = NULL;
$arguments12['pageUid'] = NULL;
$arguments12['object'] = NULL;
$arguments12['pageType'] = 0;
$arguments12['noCache'] = false;
$arguments12['noCacheHash'] = false;
$arguments12['section'] = '';
$arguments12['format'] = '';
$arguments12['additionalParams'] = array (
);
$arguments12['absolute'] = false;
$arguments12['addQueryString'] = false;
$arguments12['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments12['addQueryStringMethod'] = 'GET';
$arguments12['fieldNamePrefix'] = NULL;
$arguments12['actionUri'] = NULL;
$arguments12['objectName'] = NULL;
$arguments12['hiddenFieldClassName'] = NULL;
$arguments12['enctype'] = NULL;
$arguments12['method'] = NULL;
$arguments12['name'] = NULL;
$arguments12['onreset'] = NULL;
$arguments12['onsubmit'] = NULL;
$arguments12['target'] = NULL;
$arguments12['novalidate'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['action'] = 'createMissingFolders';
$arguments12['controller'] = 'WizardContent';

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
				';
return $output11;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['0'] = $renderingContext->getVariableProvider()->getByPath('missingFolders', $array9);

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = $renderChildrenClosure7;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '

				<div class="panel panel-space panel-default">
					<div class="panel-heading">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'tx_mask.all.contentelements';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output0 .= '
					</div>


					<div class="table-fit collapse in" id="recordlist-be_users" data-state="expanded">
						<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-hover">
							<thead>
							<tr>
								<th class="text-nowrap col-icon">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['identifier'] = NULL;
$arguments24['size'] = 'small';
$arguments24['overlay'] = NULL;
$arguments24['state'] = 'default';
$arguments24['alternativeMarkupIdentifier'] = NULL;
$arguments24['identifier'] = 'actions-document-new';

$output23 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
									';
return $output23;
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
$arguments21['action'] = 'new';
$arguments21['class'] = 'btn btn-default';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
								</th>
								<th class="text-nowrap">
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
$arguments26['key'] = 'tx_mask.content.image';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output0 .= '
								</th>
								<th class="text-nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['languageKey'] = NULL;
$arguments28['alternativeLanguageKeys'] = NULL;
$arguments28['key'] = 'tx_mask.content.titlekey';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output0 .= '
								</th>
								<th class="text-nowrap col-title">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['languageKey'] = NULL;
$arguments30['alternativeLanguageKeys'] = NULL;
$arguments30['key'] = 'tx_mask.content.description';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output0 .= '
								</th>
								<th class="text-nowrap">
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
$arguments32['key'] = 'tx_mask.content.count';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output0 .= '
								</th>
								<th class="text-nowrap col-control">&nbsp;
								</td>
							</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
								<tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
$arguments38['then'] = 'element-hidden';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '">
									<td></td>
									<td>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['identifier'] = NULL;
$arguments45['size'] = 'small';
$arguments45['overlay'] = NULL;
$arguments45['state'] = 'default';
$arguments45['alternativeMarkupIdentifier'] = NULL;
$output47 = '';

$output47 .= 'mask-ce-';
$array48 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('key', $array48);
$arguments45['identifier'] = $output47;
$arguments45['size'] = 'large';

$output44 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
										';
return $output44;
};
$arguments40 = array();
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['name'] = NULL;
$arguments40['rel'] = NULL;
$arguments40['rev'] = NULL;
$arguments40['target'] = NULL;
$arguments40['action'] = NULL;
$arguments40['controller'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['pluginName'] = NULL;
$arguments40['pageUid'] = NULL;
$arguments40['pageType'] = NULL;
$arguments40['noCache'] = NULL;
$arguments40['noCacheHash'] = NULL;
$arguments40['section'] = NULL;
$arguments40['format'] = NULL;
$arguments40['linkAccessRestrictedPages'] = NULL;
$arguments40['additionalParams'] = NULL;
$arguments40['absolute'] = NULL;
$arguments40['addQueryString'] = NULL;
$arguments40['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments40['addQueryStringMethod'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['action'] = 'edit';
// Rendering Array
$array42 = array();
$array42['type'] = 'tt_content';
$array43 = array (
);$array42['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array43);
$arguments40['arguments'] = $array42;

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output37 .= '
									</td>
									<td class="text-nowrap">
										<p><strong>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$array57 = array (
);return $renderingContext->getVariableProvider()->getByPath('storage.label', $array57);
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$array56 = array (
);$arguments54['key'] = $renderingContext->getVariableProvider()->getByPath('storage.label', $array56);

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output53 .= '
											';
return $output53;
};
$arguments49 = array();
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['rev'] = NULL;
$arguments49['target'] = NULL;
$arguments49['action'] = NULL;
$arguments49['controller'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['pluginName'] = NULL;
$arguments49['pageUid'] = NULL;
$arguments49['pageType'] = NULL;
$arguments49['noCache'] = NULL;
$arguments49['noCacheHash'] = NULL;
$arguments49['section'] = NULL;
$arguments49['format'] = NULL;
$arguments49['linkAccessRestrictedPages'] = NULL;
$arguments49['additionalParams'] = NULL;
$arguments49['absolute'] = NULL;
$arguments49['addQueryString'] = NULL;
$arguments49['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments49['addQueryStringMethod'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['action'] = 'edit';
// Rendering Array
$array51 = array();
$array51['type'] = 'tt_content';
$array52 = array (
);$array51['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array52);
$arguments49['arguments'] = $array51;

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output37 .= '
										</strong><br/>';
$array58 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array58)]);

$output37 .= '
										</p>
									</td>

									<td>
										<p>';
$array59 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('storage.description', $array59)]);

$output37 .= '</p>
										';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['data'] = NULL;
$array62 = array (
);$arguments60['data'] = $renderingContext->getVariableProvider()->getByPath('key', $array62);

$output37 .= MASK\Mask\ViewHelpers\LinkViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output37 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
												<i class="fa fa-plus-circle"></i>
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['key'] = NULL;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['languageKey'] = NULL;
$arguments76['alternativeLanguageKeys'] = NULL;
$arguments76['key'] = 'tx_mask.all.createmissingtemplate';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output75 .= '
											';
return $output75;
};
$arguments71 = array();
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['name'] = NULL;
$arguments71['rel'] = NULL;
$arguments71['rev'] = NULL;
$arguments71['target'] = NULL;
$arguments71['action'] = NULL;
$arguments71['controller'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['pluginName'] = NULL;
$arguments71['pageUid'] = NULL;
$arguments71['pageType'] = NULL;
$arguments71['noCache'] = NULL;
$arguments71['noCacheHash'] = NULL;
$arguments71['section'] = NULL;
$arguments71['format'] = NULL;
$arguments71['linkAccessRestrictedPages'] = NULL;
$arguments71['additionalParams'] = NULL;
$arguments71['absolute'] = NULL;
$arguments71['addQueryString'] = NULL;
$arguments71['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments71['addQueryStringMethod'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['action'] = 'createHtml';
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array74);
$arguments71['arguments'] = $array73;
$arguments71['class'] = 'btn btn-default';

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
										';
return $output70;
};
$arguments63 = array();
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['data'] = NULL;
$array68 = array (
);$arguments66['data'] = $renderingContext->getVariableProvider()->getByPath('key', $array68);
$array65['0'] = MASK\Mask\ViewHelpers\LinkViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments63['__thenClosure'] = $renderChildrenClosure64;

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output37 .= '
									</td>
									<td class="text-center text-muted">
										';
// Rendering ViewHelper MASK\Mask\ViewHelpers\ElementCountViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['key'] = NULL;
$array80 = array (
);$arguments78['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array80);

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [MASK\Mask\ViewHelpers\ElementCountViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output37 .= '
									</td>
									<td class="text-nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['identifier'] = NULL;
$arguments86['size'] = 'small';
$arguments86['overlay'] = NULL;
$arguments86['state'] = 'default';
$arguments86['alternativeMarkupIdentifier'] = NULL;
$arguments86['identifier'] = 'sysnote-type-2';

$output85 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
											';
return $output85;
};
$arguments81 = array();
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$arguments81['name'] = NULL;
$arguments81['rel'] = NULL;
$arguments81['rev'] = NULL;
$arguments81['target'] = NULL;
$arguments81['action'] = NULL;
$arguments81['controller'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['pluginName'] = NULL;
$arguments81['pageUid'] = NULL;
$arguments81['pageType'] = NULL;
$arguments81['noCache'] = NULL;
$arguments81['noCacheHash'] = NULL;
$arguments81['section'] = NULL;
$arguments81['format'] = NULL;
$arguments81['linkAccessRestrictedPages'] = NULL;
$arguments81['additionalParams'] = NULL;
$arguments81['absolute'] = NULL;
$arguments81['addQueryString'] = NULL;
$arguments81['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments81['addQueryStringMethod'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['action'] = 'showHtml';
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array84);
$array83['table'] = 'tt_content';
$arguments81['arguments'] = $array83;
$arguments81['onclick'] = 'window.open(this.href, \'HTML\', \'width=800,height=600,resizable=yes,scrollbars=yes\');
												return false;';
$arguments81['class'] = 'btn btn-default';

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output37 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['identifier'] = NULL;
$arguments93['size'] = 'small';
$arguments93['overlay'] = NULL;
$arguments93['state'] = 'default';
$arguments93['alternativeMarkupIdentifier'] = NULL;
$arguments93['identifier'] = 'actions-open';

$output92 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
											';
return $output92;
};
$arguments88 = array();
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['name'] = NULL;
$arguments88['rel'] = NULL;
$arguments88['rev'] = NULL;
$arguments88['target'] = NULL;
$arguments88['action'] = NULL;
$arguments88['controller'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['pluginName'] = NULL;
$arguments88['pageUid'] = NULL;
$arguments88['pageType'] = NULL;
$arguments88['noCache'] = NULL;
$arguments88['noCacheHash'] = NULL;
$arguments88['section'] = NULL;
$arguments88['format'] = NULL;
$arguments88['linkAccessRestrictedPages'] = NULL;
$arguments88['additionalParams'] = NULL;
$arguments88['absolute'] = NULL;
$arguments88['addQueryString'] = NULL;
$arguments88['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments88['addQueryStringMethod'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['action'] = 'edit';
// Rendering Array
$array90 = array();
$array90['type'] = 'tt_content';
$array91 = array (
);$array90['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array91);
$arguments88['arguments'] = $array90;
$arguments88['class'] = 'btn btn-default';

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output37 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['identifier'] = NULL;
$arguments125['size'] = 'small';
$arguments125['overlay'] = NULL;
$arguments125['state'] = 'default';
$arguments125['alternativeMarkupIdentifier'] = NULL;
$arguments125['identifier'] = 'actions-edit-unhide';

$output124 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= '
													';
return $output124;
};
$arguments120 = array();
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['class'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['title'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['name'] = NULL;
$arguments120['rel'] = NULL;
$arguments120['rev'] = NULL;
$arguments120['target'] = NULL;
$arguments120['action'] = NULL;
$arguments120['controller'] = NULL;
$arguments120['extensionName'] = NULL;
$arguments120['pluginName'] = NULL;
$arguments120['pageUid'] = NULL;
$arguments120['pageType'] = NULL;
$arguments120['noCache'] = NULL;
$arguments120['noCacheHash'] = NULL;
$arguments120['section'] = NULL;
$arguments120['format'] = NULL;
$arguments120['linkAccessRestrictedPages'] = NULL;
$arguments120['additionalParams'] = NULL;
$arguments120['absolute'] = NULL;
$arguments120['addQueryString'] = NULL;
$arguments120['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments120['addQueryStringMethod'] = NULL;
$arguments120['arguments'] = NULL;
$arguments120['action'] = 'activate';
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array123);
$arguments120['arguments'] = $array122;
$arguments120['class'] = 'btn btn-default';

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
												';
return $output119;
};
$arguments117 = array();

$output116 .= '';

$output116 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['identifier'] = NULL;
$arguments135['size'] = 'small';
$arguments135['overlay'] = NULL;
$arguments135['state'] = 'default';
$arguments135['alternativeMarkupIdentifier'] = NULL;
$arguments135['identifier'] = 'actions-edit-hide';

$output134 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
													';
return $output134;
};
$arguments130 = array();
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['name'] = NULL;
$arguments130['rel'] = NULL;
$arguments130['rev'] = NULL;
$arguments130['target'] = NULL;
$arguments130['action'] = NULL;
$arguments130['controller'] = NULL;
$arguments130['extensionName'] = NULL;
$arguments130['pluginName'] = NULL;
$arguments130['pageUid'] = NULL;
$arguments130['pageType'] = NULL;
$arguments130['noCache'] = NULL;
$arguments130['noCacheHash'] = NULL;
$arguments130['section'] = NULL;
$arguments130['format'] = NULL;
$arguments130['linkAccessRestrictedPages'] = NULL;
$arguments130['additionalParams'] = NULL;
$arguments130['absolute'] = NULL;
$arguments130['addQueryString'] = NULL;
$arguments130['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments130['addQueryStringMethod'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['action'] = 'hide';
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array133);
$arguments130['arguments'] = $array132;
$arguments130['class'] = 'btn btn-default';

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
												';
return $output129;
};
$arguments127 = array();
$arguments127['if'] = NULL;

$output116 .= '';

$output116 .= '
											';
return $output116;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('storage.hidden', $array114);

$expression115 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['identifier'] = NULL;
$arguments103['size'] = 'small';
$arguments103['overlay'] = NULL;
$arguments103['state'] = 'default';
$arguments103['alternativeMarkupIdentifier'] = NULL;
$arguments103['identifier'] = 'actions-edit-unhide';

$output102 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
													';
return $output102;
};
$arguments98 = array();
$arguments98['additionalAttributes'] = NULL;
$arguments98['data'] = NULL;
$arguments98['class'] = NULL;
$arguments98['dir'] = NULL;
$arguments98['id'] = NULL;
$arguments98['lang'] = NULL;
$arguments98['style'] = NULL;
$arguments98['title'] = NULL;
$arguments98['accesskey'] = NULL;
$arguments98['tabindex'] = NULL;
$arguments98['onclick'] = NULL;
$arguments98['name'] = NULL;
$arguments98['rel'] = NULL;
$arguments98['rev'] = NULL;
$arguments98['target'] = NULL;
$arguments98['action'] = NULL;
$arguments98['controller'] = NULL;
$arguments98['extensionName'] = NULL;
$arguments98['pluginName'] = NULL;
$arguments98['pageUid'] = NULL;
$arguments98['pageType'] = NULL;
$arguments98['noCache'] = NULL;
$arguments98['noCacheHash'] = NULL;
$arguments98['section'] = NULL;
$arguments98['format'] = NULL;
$arguments98['linkAccessRestrictedPages'] = NULL;
$arguments98['additionalParams'] = NULL;
$arguments98['absolute'] = NULL;
$arguments98['addQueryString'] = NULL;
$arguments98['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments98['addQueryStringMethod'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['action'] = 'activate';
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array101);
$arguments98['arguments'] = $array100;
$arguments98['class'] = 'btn btn-default';

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
												';
return $output97;
};
$arguments95['__elseClosures'][] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['identifier'] = NULL;
$arguments111['size'] = 'small';
$arguments111['overlay'] = NULL;
$arguments111['state'] = 'default';
$arguments111['alternativeMarkupIdentifier'] = NULL;
$arguments111['identifier'] = 'actions-edit-hide';

$output110 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
													';
return $output110;
};
$arguments106 = array();
$arguments106['additionalAttributes'] = NULL;
$arguments106['data'] = NULL;
$arguments106['class'] = NULL;
$arguments106['dir'] = NULL;
$arguments106['id'] = NULL;
$arguments106['lang'] = NULL;
$arguments106['style'] = NULL;
$arguments106['title'] = NULL;
$arguments106['accesskey'] = NULL;
$arguments106['tabindex'] = NULL;
$arguments106['onclick'] = NULL;
$arguments106['name'] = NULL;
$arguments106['rel'] = NULL;
$arguments106['rev'] = NULL;
$arguments106['target'] = NULL;
$arguments106['action'] = NULL;
$arguments106['controller'] = NULL;
$arguments106['extensionName'] = NULL;
$arguments106['pluginName'] = NULL;
$arguments106['pageUid'] = NULL;
$arguments106['pageType'] = NULL;
$arguments106['noCache'] = NULL;
$arguments106['noCacheHash'] = NULL;
$arguments106['section'] = NULL;
$arguments106['format'] = NULL;
$arguments106['linkAccessRestrictedPages'] = NULL;
$arguments106['additionalParams'] = NULL;
$arguments106['absolute'] = NULL;
$arguments106['addQueryString'] = NULL;
$arguments106['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments106['addQueryStringMethod'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['action'] = 'hide';
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array109);
$arguments106['arguments'] = $array108;
$arguments106['class'] = 'btn btn-default';

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
												';
return $output105;
};

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output37 .= '
											<!-- @formatter:off -->
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['identifier'] = NULL;
$arguments156['size'] = 'small';
$arguments156['overlay'] = NULL;
$arguments156['state'] = 'default';
$arguments156['alternativeMarkupIdentifier'] = NULL;
$arguments156['identifier'] = 'actions-edit-delete';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);
};
$arguments137 = array();
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['class'] = NULL;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$arguments137['name'] = NULL;
$arguments137['rel'] = NULL;
$arguments137['rev'] = NULL;
$arguments137['target'] = NULL;
$arguments137['action'] = NULL;
$arguments137['controller'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['pluginName'] = NULL;
$arguments137['pageUid'] = NULL;
$arguments137['pageType'] = NULL;
$arguments137['noCache'] = NULL;
$arguments137['noCacheHash'] = NULL;
$arguments137['section'] = NULL;
$arguments137['format'] = NULL;
$arguments137['linkAccessRestrictedPages'] = NULL;
$arguments137['additionalParams'] = NULL;
$arguments137['absolute'] = NULL;
$arguments137['addQueryString'] = NULL;
$arguments137['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments137['addQueryStringMethod'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['action'] = 'delete';
// Rendering Array
$array139 = array();
$array139['type'] = 'tt_content';
$array140 = array (
);$array139['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array140);
$arguments137['arguments'] = $array139;
$arguments137['class'] = 'deleteCe btn btn-default';
// Rendering Array
$array141 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['action'] = NULL;
$arguments142['arguments'] = array (
);
$arguments142['controller'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['pluginName'] = NULL;
$arguments142['pageUid'] = NULL;
$arguments142['pageType'] = 0;
$arguments142['noCache'] = false;
$arguments142['noCacheHash'] = false;
$arguments142['section'] = '';
$arguments142['format'] = '';
$arguments142['linkAccessRestrictedPages'] = false;
$arguments142['additionalParams'] = array (
);
$arguments142['absolute'] = false;
$arguments142['addQueryString'] = false;
$arguments142['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments142['addQueryStringMethod'] = NULL;
$arguments142['action'] = 'purge';
// Rendering Array
$array144 = array();
$array144['type'] = 'tt_content';
$array145 = array (
);$array144['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array145);
$arguments142['arguments'] = $array144;
$array141['data-purge-url'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);
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
$arguments146['key'] = 'tx_mask.field.titleDelete';
$array141['data-title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);
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
$arguments148['key'] = 'tx_mask.all.confirmdelete';
$array141['data-content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['key'] = NULL;
$arguments150['id'] = NULL;
$arguments150['default'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['extensionName'] = NULL;
$arguments150['languageKey'] = NULL;
$arguments150['alternativeLanguageKeys'] = NULL;
$arguments150['key'] = 'tx_mask.all.abort';
$array141['data-button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);
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
$arguments152['key'] = 'tx_mask.all.delete';
$array141['data-button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);
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
$arguments154['key'] = 'tx_mask.all.purge';
$array141['data-button-purge-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);
$arguments137['additionalAttributes'] = $array141;

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output37 .= '
											<!-- @formatter:on -->
										</div>
									</td>
								</tr>
							';
return $output37;
};
$arguments34 = array();
$arguments34['each'] = NULL;
$arguments34['as'] = NULL;
$arguments34['key'] = NULL;
$arguments34['reverse'] = false;
$arguments34['iteration'] = NULL;
$array36 = array (
);$arguments34['each'] = $renderingContext->getVariableProvider()->getByPath('storages.tt_content.elements', $array36);
$arguments34['as'] = 'storage';
$arguments34['key'] = 'key';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2 pull-right mask_footer_spacer_3 mask_footer_spacer_top">
			<a class="mask_footer_link" href="https://webprofil.at/" target="_blank"><span
				class="mask_footer_red">web</span><span class="mask_footer_blue">profil</span></a>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<a href="https://mask.webprofil.at/mask/sponsoring/" class="mask_footer_no_hover" target="_blank">
				<div class="form-section col-lg-5 mask_footer_spacer_2 mask_footer_spacer_top">
					<div class="mask_footer_container">
						<div class="mask_footer_img_container">
							<img class="mask_footer_img_0"
									 src="/typo3conf/ext/mask/Resources/Public/Images/Logo_WEBprofil_T3camp_druck.png" alt="webprofil">
						</div>
						<div class="mask_footer_mask">
							<h3 class="mask_footer_heading">You like Mask?</h3>
							<p class="mask_footer_text">You think, you might use it for further projects?<br>Help us to speed up and
								improve development!</p>
							<button class="mask_footer_btn">Become a sponsor of mask</button>
						</div>
					</div>
				</div>
			</a>
			<a href="https://tvconverter.webprofil.at/" class="mask_footer_no_hover" target="_blank">
				<div class="form-section col-lg-5 mask_footer_spacer_2 mask_footer_spacer_top">
					<div class="mask_footer_container">
						<div class="mask_footer_img_container">
							<img class="mask_footer_img_1" src="/typo3conf/ext/mask/Resources/Public/Images/Logo_TVconverter.png"
									 alt="TV-Converter"><br>
							<span class="mask_footer_tvc_text">by</span>
							<img class="mask_footer_img_2" alt="WEBprofil"
									 src="/typo3conf/ext/mask/Resources/Public/Images/Logo_WEBprofil_T3camp_druck_Kopie_2.png">
						</div>
						<div class="mask_footer_tvc">
							<h3 class="mask_footer_heading">TemplaVoila to Mask?</h3>
							<p class="mask_footer_text">Convert the entire content of your old project to Mask.<br>Support Mask with
								our Service!</p>
							<button class="mask_footer_btn">Read more</button>
						</div>
					</div>
				</div>
			</a>
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
$output158 = '';

$output158 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['name'] = NULL;
$arguments159['name'] = 'Default';

$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output158 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['section'] = NULL;
$arguments164['partial'] = NULL;
$arguments164['delegate'] = NULL;
$arguments164['renderable'] = NULL;
$arguments164['arguments'] = array (
);
$arguments164['optional'] = false;
$arguments164['default'] = NULL;
$arguments164['contentAs'] = NULL;
$arguments164['debug'] = true;
$arguments164['partial'] = 'General/Tabs';
// Rendering Array
$array166 = array();
$array166['active'] = 'WizardContent';
$arguments164['arguments'] = $array166;

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="DTM-mask-1">
			<div class="form-section">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['queueIdentifier'] = NULL;
$arguments167['as'] = NULL;

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output163 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['additionalAttributes'] = NULL;
$arguments178['data'] = NULL;
$arguments178['name'] = NULL;
$arguments178['value'] = NULL;
$arguments178['property'] = NULL;
$arguments178['disabled'] = NULL;
$arguments178['class'] = NULL;
$arguments178['dir'] = NULL;
$arguments178['id'] = NULL;
$arguments178['lang'] = NULL;
$arguments178['style'] = NULL;
$arguments178['title'] = NULL;
$arguments178['accesskey'] = NULL;
$arguments178['tabindex'] = NULL;
$arguments178['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['key'] = NULL;
$arguments180['id'] = NULL;
$arguments180['default'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['languageKey'] = NULL;
$arguments180['alternativeLanguageKeys'] = NULL;
$arguments180['key'] = 'tx_mask.all.createmissingfolders';
$arguments178['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);
$arguments178['class'] = 'btn btn-primary';

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output177 .= '
					';
return $output177;
};
$arguments175 = array();
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['action'] = NULL;
$arguments175['arguments'] = array (
);
$arguments175['controller'] = NULL;
$arguments175['extensionName'] = NULL;
$arguments175['pluginName'] = NULL;
$arguments175['pageUid'] = NULL;
$arguments175['object'] = NULL;
$arguments175['pageType'] = 0;
$arguments175['noCache'] = false;
$arguments175['noCacheHash'] = false;
$arguments175['section'] = '';
$arguments175['format'] = '';
$arguments175['additionalParams'] = array (
);
$arguments175['absolute'] = false;
$arguments175['addQueryString'] = false;
$arguments175['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments175['addQueryStringMethod'] = 'GET';
$arguments175['fieldNamePrefix'] = NULL;
$arguments175['actionUri'] = NULL;
$arguments175['objectName'] = NULL;
$arguments175['hiddenFieldClassName'] = NULL;
$arguments175['enctype'] = NULL;
$arguments175['method'] = NULL;
$arguments175['name'] = NULL;
$arguments175['onreset'] = NULL;
$arguments175['onsubmit'] = NULL;
$arguments175['target'] = NULL;
$arguments175['novalidate'] = NULL;
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$arguments175['action'] = 'createMissingFolders';
$arguments175['controller'] = 'WizardContent';

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '
				';
return $output174;
};
$arguments169 = array();
$arguments169['then'] = NULL;
$arguments169['else'] = NULL;
$arguments169['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array171 = array();
$array172 = array (
);$array171['0'] = $renderingContext->getVariableProvider()->getByPath('missingFolders', $array172);

$expression173 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments169['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression173(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array171)
					),
					$renderingContext
				);
$arguments169['__thenClosure'] = $renderChildrenClosure170;

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output163 .= '

				<div class="panel panel-space panel-default">
					<div class="panel-heading">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['languageKey'] = NULL;
$arguments182['alternativeLanguageKeys'] = NULL;
$arguments182['key'] = 'tx_mask.all.contentelements';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);

$output163 .= '
					</div>


					<div class="table-fit collapse in" id="recordlist-be_users" data-state="expanded">
						<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-hover">
							<thead>
							<tr>
								<th class="text-nowrap col-icon">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['identifier'] = NULL;
$arguments187['size'] = 'small';
$arguments187['overlay'] = NULL;
$arguments187['state'] = 'default';
$arguments187['alternativeMarkupIdentifier'] = NULL;
$arguments187['identifier'] = 'actions-document-new';

$output186 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '
									';
return $output186;
};
$arguments184 = array();
$arguments184['additionalAttributes'] = NULL;
$arguments184['data'] = NULL;
$arguments184['class'] = NULL;
$arguments184['dir'] = NULL;
$arguments184['id'] = NULL;
$arguments184['lang'] = NULL;
$arguments184['style'] = NULL;
$arguments184['title'] = NULL;
$arguments184['accesskey'] = NULL;
$arguments184['tabindex'] = NULL;
$arguments184['onclick'] = NULL;
$arguments184['name'] = NULL;
$arguments184['rel'] = NULL;
$arguments184['rev'] = NULL;
$arguments184['target'] = NULL;
$arguments184['action'] = NULL;
$arguments184['controller'] = NULL;
$arguments184['extensionName'] = NULL;
$arguments184['pluginName'] = NULL;
$arguments184['pageUid'] = NULL;
$arguments184['pageType'] = NULL;
$arguments184['noCache'] = NULL;
$arguments184['noCacheHash'] = NULL;
$arguments184['section'] = NULL;
$arguments184['format'] = NULL;
$arguments184['linkAccessRestrictedPages'] = NULL;
$arguments184['additionalParams'] = NULL;
$arguments184['absolute'] = NULL;
$arguments184['addQueryString'] = NULL;
$arguments184['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments184['addQueryStringMethod'] = NULL;
$arguments184['arguments'] = NULL;
$arguments184['action'] = 'new';
$arguments184['class'] = 'btn btn-default';

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output163 .= '
								</th>
								<th class="text-nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['key'] = NULL;
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['languageKey'] = NULL;
$arguments189['alternativeLanguageKeys'] = NULL;
$arguments189['key'] = 'tx_mask.content.image';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext)]);

$output163 .= '
								</th>
								<th class="text-nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['key'] = NULL;
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$arguments191['languageKey'] = NULL;
$arguments191['alternativeLanguageKeys'] = NULL;
$arguments191['key'] = 'tx_mask.content.titlekey';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext)]);

$output163 .= '
								</th>
								<th class="text-nowrap col-title">
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
$arguments193['key'] = 'tx_mask.content.description';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output163 .= '
								</th>
								<th class="text-nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['key'] = NULL;
$arguments195['id'] = NULL;
$arguments195['default'] = NULL;
$arguments195['arguments'] = NULL;
$arguments195['extensionName'] = NULL;
$arguments195['languageKey'] = NULL;
$arguments195['alternativeLanguageKeys'] = NULL;
$arguments195['key'] = 'tx_mask.content.count';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext)]);

$output163 .= '
								</th>
								<th class="text-nowrap col-control">&nbsp;
								</td>
							</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
								<tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
$arguments201['then'] = 'element-hidden';

$output200 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= '">
									<td></td>
									<td>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['identifier'] = NULL;
$arguments208['size'] = 'small';
$arguments208['overlay'] = NULL;
$arguments208['state'] = 'default';
$arguments208['alternativeMarkupIdentifier'] = NULL;
$output210 = '';

$output210 .= 'mask-ce-';
$array211 = array (
);
$output210 .= $renderingContext->getVariableProvider()->getByPath('key', $array211);
$arguments208['identifier'] = $output210;
$arguments208['size'] = 'large';

$output207 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
										';
return $output207;
};
$arguments203 = array();
$arguments203['additionalAttributes'] = NULL;
$arguments203['data'] = NULL;
$arguments203['class'] = NULL;
$arguments203['dir'] = NULL;
$arguments203['id'] = NULL;
$arguments203['lang'] = NULL;
$arguments203['style'] = NULL;
$arguments203['title'] = NULL;
$arguments203['accesskey'] = NULL;
$arguments203['tabindex'] = NULL;
$arguments203['onclick'] = NULL;
$arguments203['name'] = NULL;
$arguments203['rel'] = NULL;
$arguments203['rev'] = NULL;
$arguments203['target'] = NULL;
$arguments203['action'] = NULL;
$arguments203['controller'] = NULL;
$arguments203['extensionName'] = NULL;
$arguments203['pluginName'] = NULL;
$arguments203['pageUid'] = NULL;
$arguments203['pageType'] = NULL;
$arguments203['noCache'] = NULL;
$arguments203['noCacheHash'] = NULL;
$arguments203['section'] = NULL;
$arguments203['format'] = NULL;
$arguments203['linkAccessRestrictedPages'] = NULL;
$arguments203['additionalParams'] = NULL;
$arguments203['absolute'] = NULL;
$arguments203['addQueryString'] = NULL;
$arguments203['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments203['addQueryStringMethod'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['action'] = 'edit';
// Rendering Array
$array205 = array();
$array205['type'] = 'tt_content';
$array206 = array (
);$array205['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array206);
$arguments203['arguments'] = $array205;

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output200 .= '
									</td>
									<td class="text-nowrap">
										<p><strong>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$array220 = array (
);return $renderingContext->getVariableProvider()->getByPath('storage.label', $array220);
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['languageKey'] = NULL;
$arguments217['alternativeLanguageKeys'] = NULL;
$array219 = array (
);$arguments217['key'] = $renderingContext->getVariableProvider()->getByPath('storage.label', $array219);

$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output216 .= '
											';
return $output216;
};
$arguments212 = array();
$arguments212['additionalAttributes'] = NULL;
$arguments212['data'] = NULL;
$arguments212['class'] = NULL;
$arguments212['dir'] = NULL;
$arguments212['id'] = NULL;
$arguments212['lang'] = NULL;
$arguments212['style'] = NULL;
$arguments212['title'] = NULL;
$arguments212['accesskey'] = NULL;
$arguments212['tabindex'] = NULL;
$arguments212['onclick'] = NULL;
$arguments212['name'] = NULL;
$arguments212['rel'] = NULL;
$arguments212['rev'] = NULL;
$arguments212['target'] = NULL;
$arguments212['action'] = NULL;
$arguments212['controller'] = NULL;
$arguments212['extensionName'] = NULL;
$arguments212['pluginName'] = NULL;
$arguments212['pageUid'] = NULL;
$arguments212['pageType'] = NULL;
$arguments212['noCache'] = NULL;
$arguments212['noCacheHash'] = NULL;
$arguments212['section'] = NULL;
$arguments212['format'] = NULL;
$arguments212['linkAccessRestrictedPages'] = NULL;
$arguments212['additionalParams'] = NULL;
$arguments212['absolute'] = NULL;
$arguments212['addQueryString'] = NULL;
$arguments212['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments212['addQueryStringMethod'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['action'] = 'edit';
// Rendering Array
$array214 = array();
$array214['type'] = 'tt_content';
$array215 = array (
);$array214['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array215);
$arguments212['arguments'] = $array214;

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output200 .= '
										</strong><br/>';
$array221 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array221)]);

$output200 .= '
										</p>
									</td>

									<td>
										<p>';
$array222 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('storage.description', $array222)]);

$output200 .= '</p>
										';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['data'] = NULL;
$array225 = array (
);$arguments223['data'] = $renderingContext->getVariableProvider()->getByPath('key', $array225);

$output200 .= MASK\Mask\ViewHelpers\LinkViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output200 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
												<i class="fa fa-plus-circle"></i>
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['key'] = NULL;
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$arguments239['languageKey'] = NULL;
$arguments239['alternativeLanguageKeys'] = NULL;
$arguments239['key'] = 'tx_mask.all.createmissingtemplate';

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext)]);

$output238 .= '
											';
return $output238;
};
$arguments234 = array();
$arguments234['additionalAttributes'] = NULL;
$arguments234['data'] = NULL;
$arguments234['class'] = NULL;
$arguments234['dir'] = NULL;
$arguments234['id'] = NULL;
$arguments234['lang'] = NULL;
$arguments234['style'] = NULL;
$arguments234['title'] = NULL;
$arguments234['accesskey'] = NULL;
$arguments234['tabindex'] = NULL;
$arguments234['onclick'] = NULL;
$arguments234['name'] = NULL;
$arguments234['rel'] = NULL;
$arguments234['rev'] = NULL;
$arguments234['target'] = NULL;
$arguments234['action'] = NULL;
$arguments234['controller'] = NULL;
$arguments234['extensionName'] = NULL;
$arguments234['pluginName'] = NULL;
$arguments234['pageUid'] = NULL;
$arguments234['pageType'] = NULL;
$arguments234['noCache'] = NULL;
$arguments234['noCacheHash'] = NULL;
$arguments234['section'] = NULL;
$arguments234['format'] = NULL;
$arguments234['linkAccessRestrictedPages'] = NULL;
$arguments234['additionalParams'] = NULL;
$arguments234['absolute'] = NULL;
$arguments234['addQueryString'] = NULL;
$arguments234['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments234['addQueryStringMethod'] = NULL;
$arguments234['arguments'] = NULL;
$arguments234['action'] = 'createHtml';
// Rendering Array
$array236 = array();
$array237 = array (
);$array236['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array237);
$arguments234['arguments'] = $array236;
$arguments234['class'] = 'btn btn-default';

$output233 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output233 .= '
										';
return $output233;
};
$arguments226 = array();
$arguments226['then'] = NULL;
$arguments226['else'] = NULL;
$arguments226['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array228 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['data'] = NULL;
$array231 = array (
);$arguments229['data'] = $renderingContext->getVariableProvider()->getByPath('key', $array231);
$array228['0'] = MASK\Mask\ViewHelpers\LinkViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$expression232 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments226['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression232(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);
$arguments226['__thenClosure'] = $renderChildrenClosure227;

$output200 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output200 .= '
									</td>
									<td class="text-center text-muted">
										';
// Rendering ViewHelper MASK\Mask\ViewHelpers\ElementCountViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['key'] = NULL;
$array243 = array (
);$arguments241['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array243);

$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [MASK\Mask\ViewHelpers\ElementCountViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext)]);

$output200 .= '
									</td>
									<td class="text-nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['identifier'] = NULL;
$arguments249['size'] = 'small';
$arguments249['overlay'] = NULL;
$arguments249['state'] = 'default';
$arguments249['alternativeMarkupIdentifier'] = NULL;
$arguments249['identifier'] = 'sysnote-type-2';

$output248 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output248 .= '
											';
return $output248;
};
$arguments244 = array();
$arguments244['additionalAttributes'] = NULL;
$arguments244['data'] = NULL;
$arguments244['class'] = NULL;
$arguments244['dir'] = NULL;
$arguments244['id'] = NULL;
$arguments244['lang'] = NULL;
$arguments244['style'] = NULL;
$arguments244['title'] = NULL;
$arguments244['accesskey'] = NULL;
$arguments244['tabindex'] = NULL;
$arguments244['onclick'] = NULL;
$arguments244['name'] = NULL;
$arguments244['rel'] = NULL;
$arguments244['rev'] = NULL;
$arguments244['target'] = NULL;
$arguments244['action'] = NULL;
$arguments244['controller'] = NULL;
$arguments244['extensionName'] = NULL;
$arguments244['pluginName'] = NULL;
$arguments244['pageUid'] = NULL;
$arguments244['pageType'] = NULL;
$arguments244['noCache'] = NULL;
$arguments244['noCacheHash'] = NULL;
$arguments244['section'] = NULL;
$arguments244['format'] = NULL;
$arguments244['linkAccessRestrictedPages'] = NULL;
$arguments244['additionalParams'] = NULL;
$arguments244['absolute'] = NULL;
$arguments244['addQueryString'] = NULL;
$arguments244['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments244['addQueryStringMethod'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['action'] = 'showHtml';
// Rendering Array
$array246 = array();
$array247 = array (
);$array246['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array247);
$array246['table'] = 'tt_content';
$arguments244['arguments'] = $array246;
$arguments244['onclick'] = 'window.open(this.href, \'HTML\', \'width=800,height=600,resizable=yes,scrollbars=yes\');
												return false;';
$arguments244['class'] = 'btn btn-default';

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output200 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['identifier'] = NULL;
$arguments256['size'] = 'small';
$arguments256['overlay'] = NULL;
$arguments256['state'] = 'default';
$arguments256['alternativeMarkupIdentifier'] = NULL;
$arguments256['identifier'] = 'actions-open';

$output255 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output255 .= '
											';
return $output255;
};
$arguments251 = array();
$arguments251['additionalAttributes'] = NULL;
$arguments251['data'] = NULL;
$arguments251['class'] = NULL;
$arguments251['dir'] = NULL;
$arguments251['id'] = NULL;
$arguments251['lang'] = NULL;
$arguments251['style'] = NULL;
$arguments251['title'] = NULL;
$arguments251['accesskey'] = NULL;
$arguments251['tabindex'] = NULL;
$arguments251['onclick'] = NULL;
$arguments251['name'] = NULL;
$arguments251['rel'] = NULL;
$arguments251['rev'] = NULL;
$arguments251['target'] = NULL;
$arguments251['action'] = NULL;
$arguments251['controller'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['pluginName'] = NULL;
$arguments251['pageUid'] = NULL;
$arguments251['pageType'] = NULL;
$arguments251['noCache'] = NULL;
$arguments251['noCacheHash'] = NULL;
$arguments251['section'] = NULL;
$arguments251['format'] = NULL;
$arguments251['linkAccessRestrictedPages'] = NULL;
$arguments251['additionalParams'] = NULL;
$arguments251['absolute'] = NULL;
$arguments251['addQueryString'] = NULL;
$arguments251['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments251['addQueryStringMethod'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['action'] = 'edit';
// Rendering Array
$array253 = array();
$array253['type'] = 'tt_content';
$array254 = array (
);$array253['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array254);
$arguments251['arguments'] = $array253;
$arguments251['class'] = 'btn btn-default';

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output200 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['identifier'] = NULL;
$arguments288['size'] = 'small';
$arguments288['overlay'] = NULL;
$arguments288['state'] = 'default';
$arguments288['alternativeMarkupIdentifier'] = NULL;
$arguments288['identifier'] = 'actions-edit-unhide';

$output287 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
													';
return $output287;
};
$arguments283 = array();
$arguments283['additionalAttributes'] = NULL;
$arguments283['data'] = NULL;
$arguments283['class'] = NULL;
$arguments283['dir'] = NULL;
$arguments283['id'] = NULL;
$arguments283['lang'] = NULL;
$arguments283['style'] = NULL;
$arguments283['title'] = NULL;
$arguments283['accesskey'] = NULL;
$arguments283['tabindex'] = NULL;
$arguments283['onclick'] = NULL;
$arguments283['name'] = NULL;
$arguments283['rel'] = NULL;
$arguments283['rev'] = NULL;
$arguments283['target'] = NULL;
$arguments283['action'] = NULL;
$arguments283['controller'] = NULL;
$arguments283['extensionName'] = NULL;
$arguments283['pluginName'] = NULL;
$arguments283['pageUid'] = NULL;
$arguments283['pageType'] = NULL;
$arguments283['noCache'] = NULL;
$arguments283['noCacheHash'] = NULL;
$arguments283['section'] = NULL;
$arguments283['format'] = NULL;
$arguments283['linkAccessRestrictedPages'] = NULL;
$arguments283['additionalParams'] = NULL;
$arguments283['absolute'] = NULL;
$arguments283['addQueryString'] = NULL;
$arguments283['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments283['addQueryStringMethod'] = NULL;
$arguments283['arguments'] = NULL;
$arguments283['action'] = 'activate';
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array286);
$arguments283['arguments'] = $array285;
$arguments283['class'] = 'btn btn-default';

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output282 .= '
												';
return $output282;
};
$arguments280 = array();

$output279 .= '';

$output279 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['identifier'] = NULL;
$arguments298['size'] = 'small';
$arguments298['overlay'] = NULL;
$arguments298['state'] = 'default';
$arguments298['alternativeMarkupIdentifier'] = NULL;
$arguments298['identifier'] = 'actions-edit-hide';

$output297 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output297 .= '
													';
return $output297;
};
$arguments293 = array();
$arguments293['additionalAttributes'] = NULL;
$arguments293['data'] = NULL;
$arguments293['class'] = NULL;
$arguments293['dir'] = NULL;
$arguments293['id'] = NULL;
$arguments293['lang'] = NULL;
$arguments293['style'] = NULL;
$arguments293['title'] = NULL;
$arguments293['accesskey'] = NULL;
$arguments293['tabindex'] = NULL;
$arguments293['onclick'] = NULL;
$arguments293['name'] = NULL;
$arguments293['rel'] = NULL;
$arguments293['rev'] = NULL;
$arguments293['target'] = NULL;
$arguments293['action'] = NULL;
$arguments293['controller'] = NULL;
$arguments293['extensionName'] = NULL;
$arguments293['pluginName'] = NULL;
$arguments293['pageUid'] = NULL;
$arguments293['pageType'] = NULL;
$arguments293['noCache'] = NULL;
$arguments293['noCacheHash'] = NULL;
$arguments293['section'] = NULL;
$arguments293['format'] = NULL;
$arguments293['linkAccessRestrictedPages'] = NULL;
$arguments293['additionalParams'] = NULL;
$arguments293['absolute'] = NULL;
$arguments293['addQueryString'] = NULL;
$arguments293['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments293['addQueryStringMethod'] = NULL;
$arguments293['arguments'] = NULL;
$arguments293['action'] = 'hide';
// Rendering Array
$array295 = array();
$array296 = array (
);$array295['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array296);
$arguments293['arguments'] = $array295;
$arguments293['class'] = 'btn btn-default';

$output292 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output292 .= '
												';
return $output292;
};
$arguments290 = array();
$arguments290['if'] = NULL;

$output279 .= '';

$output279 .= '
											';
return $output279;
};
$arguments258 = array();
$arguments258['then'] = NULL;
$arguments258['else'] = NULL;
$arguments258['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array276 = array();
$array277 = array (
);$array276['0'] = $renderingContext->getVariableProvider()->getByPath('storage.hidden', $array277);

$expression278 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments258['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression278(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array276)
					),
					$renderingContext
				);
$arguments258['__thenClosure'] = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['identifier'] = NULL;
$arguments266['size'] = 'small';
$arguments266['overlay'] = NULL;
$arguments266['state'] = 'default';
$arguments266['alternativeMarkupIdentifier'] = NULL;
$arguments266['identifier'] = 'actions-edit-unhide';

$output265 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output265 .= '
													';
return $output265;
};
$arguments261 = array();
$arguments261['additionalAttributes'] = NULL;
$arguments261['data'] = NULL;
$arguments261['class'] = NULL;
$arguments261['dir'] = NULL;
$arguments261['id'] = NULL;
$arguments261['lang'] = NULL;
$arguments261['style'] = NULL;
$arguments261['title'] = NULL;
$arguments261['accesskey'] = NULL;
$arguments261['tabindex'] = NULL;
$arguments261['onclick'] = NULL;
$arguments261['name'] = NULL;
$arguments261['rel'] = NULL;
$arguments261['rev'] = NULL;
$arguments261['target'] = NULL;
$arguments261['action'] = NULL;
$arguments261['controller'] = NULL;
$arguments261['extensionName'] = NULL;
$arguments261['pluginName'] = NULL;
$arguments261['pageUid'] = NULL;
$arguments261['pageType'] = NULL;
$arguments261['noCache'] = NULL;
$arguments261['noCacheHash'] = NULL;
$arguments261['section'] = NULL;
$arguments261['format'] = NULL;
$arguments261['linkAccessRestrictedPages'] = NULL;
$arguments261['additionalParams'] = NULL;
$arguments261['absolute'] = NULL;
$arguments261['addQueryString'] = NULL;
$arguments261['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments261['addQueryStringMethod'] = NULL;
$arguments261['arguments'] = NULL;
$arguments261['action'] = 'activate';
// Rendering Array
$array263 = array();
$array264 = array (
);$array263['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array264);
$arguments261['arguments'] = $array263;
$arguments261['class'] = 'btn btn-default';

$output260 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
												';
return $output260;
};
$arguments258['__elseClosures'][] = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output273 = '';

$output273 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['identifier'] = NULL;
$arguments274['size'] = 'small';
$arguments274['overlay'] = NULL;
$arguments274['state'] = 'default';
$arguments274['alternativeMarkupIdentifier'] = NULL;
$arguments274['identifier'] = 'actions-edit-hide';

$output273 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output273 .= '
													';
return $output273;
};
$arguments269 = array();
$arguments269['additionalAttributes'] = NULL;
$arguments269['data'] = NULL;
$arguments269['class'] = NULL;
$arguments269['dir'] = NULL;
$arguments269['id'] = NULL;
$arguments269['lang'] = NULL;
$arguments269['style'] = NULL;
$arguments269['title'] = NULL;
$arguments269['accesskey'] = NULL;
$arguments269['tabindex'] = NULL;
$arguments269['onclick'] = NULL;
$arguments269['name'] = NULL;
$arguments269['rel'] = NULL;
$arguments269['rev'] = NULL;
$arguments269['target'] = NULL;
$arguments269['action'] = NULL;
$arguments269['controller'] = NULL;
$arguments269['extensionName'] = NULL;
$arguments269['pluginName'] = NULL;
$arguments269['pageUid'] = NULL;
$arguments269['pageType'] = NULL;
$arguments269['noCache'] = NULL;
$arguments269['noCacheHash'] = NULL;
$arguments269['section'] = NULL;
$arguments269['format'] = NULL;
$arguments269['linkAccessRestrictedPages'] = NULL;
$arguments269['additionalParams'] = NULL;
$arguments269['absolute'] = NULL;
$arguments269['addQueryString'] = NULL;
$arguments269['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments269['addQueryStringMethod'] = NULL;
$arguments269['arguments'] = NULL;
$arguments269['action'] = 'hide';
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array272);
$arguments269['arguments'] = $array271;
$arguments269['class'] = 'btn btn-default';

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '
												';
return $output268;
};

$output200 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output200 .= '
											<!-- @formatter:off -->
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['identifier'] = NULL;
$arguments319['size'] = 'small';
$arguments319['overlay'] = NULL;
$arguments319['state'] = 'default';
$arguments319['alternativeMarkupIdentifier'] = NULL;
$arguments319['identifier'] = 'actions-edit-delete';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);
};
$arguments300 = array();
$arguments300['additionalAttributes'] = NULL;
$arguments300['data'] = NULL;
$arguments300['class'] = NULL;
$arguments300['dir'] = NULL;
$arguments300['id'] = NULL;
$arguments300['lang'] = NULL;
$arguments300['style'] = NULL;
$arguments300['title'] = NULL;
$arguments300['accesskey'] = NULL;
$arguments300['tabindex'] = NULL;
$arguments300['onclick'] = NULL;
$arguments300['name'] = NULL;
$arguments300['rel'] = NULL;
$arguments300['rev'] = NULL;
$arguments300['target'] = NULL;
$arguments300['action'] = NULL;
$arguments300['controller'] = NULL;
$arguments300['extensionName'] = NULL;
$arguments300['pluginName'] = NULL;
$arguments300['pageUid'] = NULL;
$arguments300['pageType'] = NULL;
$arguments300['noCache'] = NULL;
$arguments300['noCacheHash'] = NULL;
$arguments300['section'] = NULL;
$arguments300['format'] = NULL;
$arguments300['linkAccessRestrictedPages'] = NULL;
$arguments300['additionalParams'] = NULL;
$arguments300['absolute'] = NULL;
$arguments300['addQueryString'] = NULL;
$arguments300['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments300['addQueryStringMethod'] = NULL;
$arguments300['arguments'] = NULL;
$arguments300['action'] = 'delete';
// Rendering Array
$array302 = array();
$array302['type'] = 'tt_content';
$array303 = array (
);$array302['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array303);
$arguments300['arguments'] = $array302;
$arguments300['class'] = 'deleteCe btn btn-default';
// Rendering Array
$array304 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['action'] = NULL;
$arguments305['arguments'] = array (
);
$arguments305['controller'] = NULL;
$arguments305['extensionName'] = NULL;
$arguments305['pluginName'] = NULL;
$arguments305['pageUid'] = NULL;
$arguments305['pageType'] = 0;
$arguments305['noCache'] = false;
$arguments305['noCacheHash'] = false;
$arguments305['section'] = '';
$arguments305['format'] = '';
$arguments305['linkAccessRestrictedPages'] = false;
$arguments305['additionalParams'] = array (
);
$arguments305['absolute'] = false;
$arguments305['addQueryString'] = false;
$arguments305['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments305['addQueryStringMethod'] = NULL;
$arguments305['action'] = 'purge';
// Rendering Array
$array307 = array();
$array307['type'] = 'tt_content';
$array308 = array (
);$array307['key'] = $renderingContext->getVariableProvider()->getByPath('key', $array308);
$arguments305['arguments'] = $array307;
$array304['data-purge-url'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments309 = array();
$arguments309['key'] = NULL;
$arguments309['id'] = NULL;
$arguments309['default'] = NULL;
$arguments309['arguments'] = NULL;
$arguments309['extensionName'] = NULL;
$arguments309['languageKey'] = NULL;
$arguments309['alternativeLanguageKeys'] = NULL;
$arguments309['key'] = 'tx_mask.field.titleDelete';
$array304['data-title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['key'] = NULL;
$arguments311['id'] = NULL;
$arguments311['default'] = NULL;
$arguments311['arguments'] = NULL;
$arguments311['extensionName'] = NULL;
$arguments311['languageKey'] = NULL;
$arguments311['alternativeLanguageKeys'] = NULL;
$arguments311['key'] = 'tx_mask.all.confirmdelete';
$array304['data-content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['key'] = NULL;
$arguments313['id'] = NULL;
$arguments313['default'] = NULL;
$arguments313['arguments'] = NULL;
$arguments313['extensionName'] = NULL;
$arguments313['languageKey'] = NULL;
$arguments313['alternativeLanguageKeys'] = NULL;
$arguments313['key'] = 'tx_mask.all.abort';
$array304['data-button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['key'] = NULL;
$arguments315['id'] = NULL;
$arguments315['default'] = NULL;
$arguments315['arguments'] = NULL;
$arguments315['extensionName'] = NULL;
$arguments315['languageKey'] = NULL;
$arguments315['alternativeLanguageKeys'] = NULL;
$arguments315['key'] = 'tx_mask.all.delete';
$array304['data-button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['key'] = NULL;
$arguments317['id'] = NULL;
$arguments317['default'] = NULL;
$arguments317['arguments'] = NULL;
$arguments317['extensionName'] = NULL;
$arguments317['languageKey'] = NULL;
$arguments317['alternativeLanguageKeys'] = NULL;
$arguments317['key'] = 'tx_mask.all.purge';
$array304['data-button-purge-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);
$arguments300['additionalAttributes'] = $array304;

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output200 .= '
											<!-- @formatter:on -->
										</div>
									</td>
								</tr>
							';
return $output200;
};
$arguments197 = array();
$arguments197['each'] = NULL;
$arguments197['as'] = NULL;
$arguments197['key'] = NULL;
$arguments197['reverse'] = false;
$arguments197['iteration'] = NULL;
$array199 = array (
);$arguments197['each'] = $renderingContext->getVariableProvider()->getByPath('storages.tt_content.elements', $array199);
$arguments197['as'] = 'storage';
$arguments197['key'] = 'key';

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output163 .= '
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2 pull-right mask_footer_spacer_3 mask_footer_spacer_top">
			<a class="mask_footer_link" href="https://webprofil.at/" target="_blank"><span
				class="mask_footer_red">web</span><span class="mask_footer_blue">profil</span></a>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<a href="https://mask.webprofil.at/mask/sponsoring/" class="mask_footer_no_hover" target="_blank">
				<div class="form-section col-lg-5 mask_footer_spacer_2 mask_footer_spacer_top">
					<div class="mask_footer_container">
						<div class="mask_footer_img_container">
							<img class="mask_footer_img_0"
									 src="/typo3conf/ext/mask/Resources/Public/Images/Logo_WEBprofil_T3camp_druck.png" alt="webprofil">
						</div>
						<div class="mask_footer_mask">
							<h3 class="mask_footer_heading">You like Mask?</h3>
							<p class="mask_footer_text">You think, you might use it for further projects?<br>Help us to speed up and
								improve development!</p>
							<button class="mask_footer_btn">Become a sponsor of mask</button>
						</div>
					</div>
				</div>
			</a>
			<a href="https://tvconverter.webprofil.at/" class="mask_footer_no_hover" target="_blank">
				<div class="form-section col-lg-5 mask_footer_spacer_2 mask_footer_spacer_top">
					<div class="mask_footer_container">
						<div class="mask_footer_img_container">
							<img class="mask_footer_img_1" src="/typo3conf/ext/mask/Resources/Public/Images/Logo_TVconverter.png"
									 alt="TV-Converter"><br>
							<span class="mask_footer_tvc_text">by</span>
							<img class="mask_footer_img_2" alt="WEBprofil"
									 src="/typo3conf/ext/mask/Resources/Public/Images/Logo_WEBprofil_T3camp_druck_Kopie_2.png">
						</div>
						<div class="mask_footer_tvc">
							<h3 class="mask_footer_heading">TemplaVoila to Mask?</h3>
							<p class="mask_footer_text">Convert the entire content of your old project to Mask.<br>Support Mask with
								our Service!</p>
							<button class="mask_footer_btn">Read more</button>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>

';
return $output163;
};
$arguments161 = array();
$arguments161['name'] = NULL;
$arguments161['name'] = 'content';

$output158 .= NULL;

$output158 .= '
';

return $output158;
}


}
#