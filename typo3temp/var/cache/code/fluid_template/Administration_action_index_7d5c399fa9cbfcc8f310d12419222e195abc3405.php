<?php

class Administration_action_index_7d5c399fa9cbfcc8f310d12419222e195abc3405 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Backend/Default';
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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * section categoryTree
 */
public function section_fca14bbaa23e55bf6615b2e4fdf213505b61af98(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<ul class="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array1)]);

$output0 .= '">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
			<li>
				<label title="';
$array6 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array6)]);

$output5 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.item.title', $array10);
};
$arguments7 = array();
$arguments7['value'] = NULL;
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output5 .= !is_string($value9) && !(is_object($value9) && method_exists($value9, '__toString')) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments7['encoding'], $arguments7['doubleEncode']);

$output5 .= '">
					<input type="checkbox" ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['id'] = NULL;
$arguments11['categories'] = array (
);
$array13 = array (
);$arguments11['id'] = $renderingContext->getVariableProvider()->getByPath('category.item.uid', $array13);
$array14 = array (
);$arguments11['categories'] = $renderingContext->getVariableProvider()->getByPath('demand.selectedCategories', $array14);

$output5 .= GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output5 .= ' name="tx_news_web_newstxnewsm2[demand][selectedCategories][]" value="';
$array15 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array15)]);

$output5 .= '" /> ';
$array16 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.title', $array16)]);

$output5 .= '
				</label>

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['section'] = NULL;
$arguments23['partial'] = NULL;
$arguments23['delegate'] = NULL;
$arguments23['renderable'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['optional'] = false;
$arguments23['default'] = NULL;
$arguments23['contentAs'] = NULL;
$arguments23['debug'] = true;
$arguments23['section'] = 'categoryTree';
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['categories'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array26);
$array27 = array (
);$array25['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array27);
$arguments23['arguments'] = $array25;

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
				';
return $output22;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output5 .= '
			</li>
		';
return $output5;
};
$arguments2 = array();
$arguments2['each'] = NULL;
$arguments2['as'] = NULL;
$arguments2['key'] = NULL;
$arguments2['reverse'] = false;
$arguments2['iteration'] = NULL;
$array4 = array (
);$arguments2['each'] = $renderingContext->getVariableProvider()->getByPath('categories', $array4);
$arguments2['as'] = 'category';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
	</ul>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output28 = '';

$output28 .= '
	<h1>
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
$arguments29['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.title';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '
	</h1>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
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
$arguments43['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.why.text';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '
			<br>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['identifier'] = NULL;
$arguments48['size'] = 'small';
$arguments48['overlay'] = NULL;
$arguments48['state'] = 'default';
$arguments48['alternativeMarkupIdentifier'] = NULL;
$arguments48['identifier'] = 'ext-news-donation';

$output47 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$arguments50['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.link';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output47 .= '
				';
return $output47;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['name'] = NULL;
$arguments45['rel'] = NULL;
$arguments45['rev'] = NULL;
$arguments45['target'] = NULL;
$arguments45['action'] = NULL;
$arguments45['controller'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['pluginName'] = NULL;
$arguments45['pageUid'] = NULL;
$arguments45['pageType'] = NULL;
$arguments45['noCache'] = NULL;
$arguments45['noCacheHash'] = NULL;
$arguments45['section'] = NULL;
$arguments45['format'] = NULL;
$arguments45['linkAccessRestrictedPages'] = NULL;
$arguments45['additionalParams'] = NULL;
$arguments45['absolute'] = NULL;
$arguments45['addQueryString'] = NULL;
$arguments45['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments45['addQueryStringMethod'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['action'] = 'donate';
$arguments45['class'] = 'btn btn-default';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '
		';
return $output42;
};
$arguments37 = array();
$arguments37['message'] = NULL;
$arguments37['title'] = NULL;
$arguments37['state'] = -2;
$arguments37['iconName'] = NULL;
$arguments37['disableIcon'] = false;
$output39 = '';

$output39 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$arguments40['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.support';

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);
$arguments37['title'] = $output39;
$arguments37['state'] = -1;
$renderChildrenClosure38 = ($arguments37['message'] !== null) ? function() use ($arguments37) { return $arguments37['message']; } : $renderChildrenClosure38;
$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
	';
return $output36;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('showSupportArea', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output28 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
		<div class="alert alert-info">
			<div class="message-body">
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
$arguments58['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nopageselected';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= '
			</div>
		</div>
	';
return $output57;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array55);
$array54['1'] = ' == 0';

$expression56 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments52['__thenClosure'] = $renderChildrenClosure53;

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output28 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
			<input type="hidden" name="formSubmitted" value="1">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
					<input type="hidden" name="route" value="/web/NewsTxNewsM2/">
					<input type="hidden" name="token" value="';
$array85 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array85)]);

$output84 .= '">
				';
return $output84;
};
$arguments82 = array();

$output81 .= '';

$output81 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
					<input type="hidden" name="M" value="web_NewsTxNewsM2">
					<input type="hidden" name="moduleToken" value="';
$array89 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array89)]);

$output88 .= '">
				';
return $output88;
};
$arguments86 = array();
$arguments86['if'] = NULL;

$output81 .= '';

$output81 .= '
			';
return $output81;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('is9up', $array79);

$expression80 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
					<input type="hidden" name="route" value="/web/NewsTxNewsM2/">
					<input type="hidden" name="token" value="';
$array75 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array75)]);

$output74 .= '">
				';
return $output74;
};
$arguments72['__elseClosures'][] = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
					<input type="hidden" name="M" value="web_NewsTxNewsM2">
					<input type="hidden" name="moduleToken" value="';
$array77 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array77)]);

$output76 .= '">
				';
return $output76;
};

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '

			<input type="hidden" name="id" value="';
$array90 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page', $array90)]);

$output71 .= '">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['name'] = NULL;
$arguments91['value'] = NULL;
$arguments91['property'] = NULL;
$arguments91['disabled'] = NULL;
$arguments91['errorClass'] = 'f3-form-error';
$arguments91['class'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$arguments91['checked'] = NULL;
$arguments91['multiple'] = false;
$arguments91['style'] = 'display:none';
$arguments91['property'] = 'selectedCategories';
$arguments91['value'] = 0;

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output71 .= '

			<div id="setting-container" style="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('hideForm', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['then'] = 'display:none';
$arguments93['else'] = '';

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output71 .= '">
				<div class="settings">
					<div class="row form-horizontal">
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
							<div class="form-group">
								<label for="searchWord" class="col-xs-4 control-label">
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
$arguments104['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.searchWord';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext)]);

$output103 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['additionalAttributes'] = NULL;
$arguments106['data'] = NULL;
$arguments106['name'] = NULL;
$arguments106['value'] = NULL;
$arguments106['property'] = NULL;
$arguments106['autofocus'] = NULL;
$arguments106['disabled'] = NULL;
$arguments106['maxlength'] = NULL;
$arguments106['readonly'] = NULL;
$arguments106['size'] = NULL;
$arguments106['placeholder'] = NULL;
$arguments106['pattern'] = NULL;
$arguments106['errorClass'] = 'f3-form-error';
$arguments106['class'] = NULL;
$arguments106['dir'] = NULL;
$arguments106['id'] = NULL;
$arguments106['lang'] = NULL;
$arguments106['style'] = NULL;
$arguments106['title'] = NULL;
$arguments106['accesskey'] = NULL;
$arguments106['tabindex'] = NULL;
$arguments106['onclick'] = NULL;
$arguments106['required'] = false;
$arguments106['type'] = 'text';
$arguments106['property'] = 'searchWord';
$arguments106['id'] = 'searchWord';
$arguments106['class'] = 'form-control t3js-clearable';

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output103 .= '
								</div>
							</div>
							';
return $output103;
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('filters.searchWord', $array101);

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$arguments98['__thenClosure'] = $renderChildrenClosure99;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['languageKey'] = NULL;
$arguments114['alternativeLanguageKeys'] = NULL;
$arguments114['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.timeRange';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output113 .= '
								</label>

								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['name'] = NULL;
$arguments116['value'] = NULL;
$arguments116['property'] = NULL;
$arguments116['autofocus'] = NULL;
$arguments116['disabled'] = NULL;
$arguments116['maxlength'] = NULL;
$arguments116['readonly'] = NULL;
$arguments116['size'] = NULL;
$arguments116['placeholder'] = NULL;
$arguments116['pattern'] = NULL;
$arguments116['errorClass'] = 'f3-form-error';
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['required'] = false;
$arguments116['type'] = 'text';
$arguments116['type'] = 'datetime';
$arguments116['property'] = 'timeRestriction';
$arguments116['id'] = 'timeRestriction';
$arguments116['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array118 = array();
$array118['date-type'] = 'datetime';
$array118['date-offset'] = 0;
$arguments116['data'] = $array118;

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output113 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestriction">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
									-
								</label>
								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['name'] = NULL;
$arguments119['value'] = NULL;
$arguments119['property'] = NULL;
$arguments119['autofocus'] = NULL;
$arguments119['disabled'] = NULL;
$arguments119['maxlength'] = NULL;
$arguments119['readonly'] = NULL;
$arguments119['size'] = NULL;
$arguments119['placeholder'] = NULL;
$arguments119['pattern'] = NULL;
$arguments119['errorClass'] = 'f3-form-error';
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['required'] = false;
$arguments119['type'] = 'text';
$arguments119['type'] = 'datetime';
$arguments119['property'] = 'timeRestrictionHigh';
$arguments119['id'] = 'timeRestrictionHigh';
$arguments119['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array121 = array();
$array121['date-type'] = 'datetime';
$array121['date-offset'] = 0;
$arguments119['data'] = $array121;

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output113 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestrictionHigh">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							';
return $output113;
};
$arguments108 = array();
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$arguments108['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['0'] = $renderingContext->getVariableProvider()->getByPath('filters.timeRestriction', $array111);

$expression112 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments108['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);
$arguments108['__thenClosure'] = $renderChildrenClosure109;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
							<div class="form-group">
								<label for="topNewsRestriction" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['languageKey'] = NULL;
$arguments128['alternativeLanguageKeys'] = NULL;
$arguments128['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction';

$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output127 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['name'] = NULL;
$arguments130['value'] = NULL;
$arguments130['property'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['size'] = NULL;
$arguments130['disabled'] = NULL;
$arguments130['options'] = NULL;
$arguments130['optionsAfterContent'] = false;
$arguments130['optionValueField'] = NULL;
$arguments130['optionLabelField'] = NULL;
$arguments130['sortByOptionLabel'] = false;
$arguments130['selectAllByDefault'] = false;
$arguments130['errorClass'] = 'f3-form-error';
$arguments130['prependOptionLabel'] = NULL;
$arguments130['prependOptionValue'] = NULL;
$arguments130['multiple'] = false;
$arguments130['required'] = false;
$arguments130['property'] = 'topNewsRestriction';
$arguments130['class'] = 'form-control';
// Rendering Array
$array132 = array();
$array132['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['key'] = NULL;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['languageKey'] = NULL;
$arguments133['alternativeLanguageKeys'] = NULL;
$arguments133['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.1';
$array132['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['key'] = NULL;
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$arguments135['languageKey'] = NULL;
$arguments135['alternativeLanguageKeys'] = NULL;
$arguments135['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.2';
$array132['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);
$arguments130['options'] = $array132;
$arguments130['id'] = 'topNewsRestriction';

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output127 .= '
								</div>
							</div>
							';
return $output127;
};
$arguments122 = array();
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['0'] = $renderingContext->getVariableProvider()->getByPath('filters.topNewsRestriction', $array125);

$expression126 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments122['__thenClosure'] = $renderChildrenClosure123;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
							<div class="form-group">
								<label for="hidden" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['key'] = NULL;
$arguments143['id'] = NULL;
$arguments143['default'] = NULL;
$arguments143['arguments'] = NULL;
$arguments143['extensionName'] = NULL;
$arguments143['languageKey'] = NULL;
$arguments143['alternativeLanguageKeys'] = NULL;
$arguments143['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden';

$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output142 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['additionalAttributes'] = NULL;
$arguments145['data'] = NULL;
$arguments145['name'] = NULL;
$arguments145['value'] = NULL;
$arguments145['property'] = NULL;
$arguments145['class'] = NULL;
$arguments145['dir'] = NULL;
$arguments145['id'] = NULL;
$arguments145['lang'] = NULL;
$arguments145['style'] = NULL;
$arguments145['title'] = NULL;
$arguments145['accesskey'] = NULL;
$arguments145['tabindex'] = NULL;
$arguments145['onclick'] = NULL;
$arguments145['size'] = NULL;
$arguments145['disabled'] = NULL;
$arguments145['options'] = NULL;
$arguments145['optionsAfterContent'] = false;
$arguments145['optionValueField'] = NULL;
$arguments145['optionLabelField'] = NULL;
$arguments145['sortByOptionLabel'] = false;
$arguments145['selectAllByDefault'] = false;
$arguments145['errorClass'] = 'f3-form-error';
$arguments145['prependOptionLabel'] = NULL;
$arguments145['prependOptionValue'] = NULL;
$arguments145['multiple'] = false;
$arguments145['required'] = false;
$arguments145['property'] = 'hidden';
$arguments145['class'] = 'form-control';
// Rendering Array
$array147 = array();
$array147['0'] = '';
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
$arguments148['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.hidden';
$array147['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);
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
$arguments150['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.nonHidden';
$array147['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);
$arguments145['options'] = $array147;
$arguments145['id'] = 'hidden';

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output142 .= '
								</div>
							</div>
							';
return $output142;
};
$arguments137 = array();
$arguments137['then'] = NULL;
$arguments137['else'] = NULL;
$arguments137['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('filters.hidden', $array140);

$expression141 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments137['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$arguments137['__thenClosure'] = $renderChildrenClosure138;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
							<div class="form-group">
								<label for="archived" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$arguments158['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction';

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext)]);

$output157 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['additionalAttributes'] = NULL;
$arguments160['data'] = NULL;
$arguments160['name'] = NULL;
$arguments160['value'] = NULL;
$arguments160['property'] = NULL;
$arguments160['class'] = NULL;
$arguments160['dir'] = NULL;
$arguments160['id'] = NULL;
$arguments160['lang'] = NULL;
$arguments160['style'] = NULL;
$arguments160['title'] = NULL;
$arguments160['accesskey'] = NULL;
$arguments160['tabindex'] = NULL;
$arguments160['onclick'] = NULL;
$arguments160['size'] = NULL;
$arguments160['disabled'] = NULL;
$arguments160['options'] = NULL;
$arguments160['optionsAfterContent'] = false;
$arguments160['optionValueField'] = NULL;
$arguments160['optionLabelField'] = NULL;
$arguments160['sortByOptionLabel'] = false;
$arguments160['selectAllByDefault'] = false;
$arguments160['errorClass'] = 'f3-form-error';
$arguments160['prependOptionLabel'] = NULL;
$arguments160['prependOptionValue'] = NULL;
$arguments160['multiple'] = false;
$arguments160['required'] = false;
$arguments160['property'] = 'archived';
$arguments160['class'] = 'form-control';
// Rendering Array
$array162 = array();
$array162['0'] = '';
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
$arguments163['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.active';
$array162['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);
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
$arguments165['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.archived';
$array162['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);
$arguments160['options'] = $array162;
$arguments160['id'] = 'archived';

$output157 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output157 .= '
								</div>
							</div>
							';
return $output157;
};
$arguments152 = array();
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$arguments152['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('filters.archived', $array155);

$expression156 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments152['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments152['__thenClosure'] = $renderChildrenClosure153;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
							<div class="form-group">
								<label for="sortingField" class="col-xs-4 control-label">
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
$arguments173['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy';

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output172 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['name'] = NULL;
$arguments175['value'] = NULL;
$arguments175['property'] = NULL;
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$arguments175['size'] = NULL;
$arguments175['disabled'] = NULL;
$arguments175['options'] = NULL;
$arguments175['optionsAfterContent'] = false;
$arguments175['optionValueField'] = NULL;
$arguments175['optionLabelField'] = NULL;
$arguments175['sortByOptionLabel'] = false;
$arguments175['selectAllByDefault'] = false;
$arguments175['errorClass'] = 'f3-form-error';
$arguments175['prependOptionLabel'] = NULL;
$arguments175['prependOptionValue'] = NULL;
$arguments175['multiple'] = false;
$arguments175['required'] = false;
$arguments175['class'] = 'form-control';
$arguments175['property'] = 'sortingField';
// Rendering Array
$array177 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['key'] = NULL;
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$arguments178['languageKey'] = NULL;
$arguments178['alternativeLanguageKeys'] = NULL;
$arguments178['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.title';
$array177['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);
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
$arguments180['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.datetime';
$array177['datetime'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);
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
$arguments182['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.tstamp';
$array177['tstamp'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['key'] = NULL;
$arguments184['id'] = NULL;
$arguments184['default'] = NULL;
$arguments184['arguments'] = NULL;
$arguments184['extensionName'] = NULL;
$arguments184['languageKey'] = NULL;
$arguments184['alternativeLanguageKeys'] = NULL;
$arguments184['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.archive';
$array177['archive'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);
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
$arguments186['key'] = 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel';
$array177['author'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);
$arguments175['options'] = $array177;
$arguments175['id'] = 'sortingField';

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output172 .= '
								</div>
								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['additionalAttributes'] = NULL;
$arguments188['data'] = NULL;
$arguments188['name'] = NULL;
$arguments188['value'] = NULL;
$arguments188['property'] = NULL;
$arguments188['class'] = NULL;
$arguments188['dir'] = NULL;
$arguments188['id'] = NULL;
$arguments188['lang'] = NULL;
$arguments188['style'] = NULL;
$arguments188['title'] = NULL;
$arguments188['accesskey'] = NULL;
$arguments188['tabindex'] = NULL;
$arguments188['onclick'] = NULL;
$arguments188['size'] = NULL;
$arguments188['disabled'] = NULL;
$arguments188['options'] = NULL;
$arguments188['optionsAfterContent'] = false;
$arguments188['optionValueField'] = NULL;
$arguments188['optionLabelField'] = NULL;
$arguments188['sortByOptionLabel'] = false;
$arguments188['selectAllByDefault'] = false;
$arguments188['errorClass'] = 'f3-form-error';
$arguments188['prependOptionLabel'] = NULL;
$arguments188['prependOptionValue'] = NULL;
$arguments188['multiple'] = false;
$arguments188['required'] = false;
$arguments188['class'] = 'form-control';
$arguments188['property'] = 'sortingDirection';
// Rendering Array
$array190 = array();
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
$arguments191['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.asc';
$array190['asc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);
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
$arguments193['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.desc';
$array190['desc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);
$arguments188['options'] = $array190;
$arguments188['id'] = 'sortingDirection';

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output172 .= '
								</div>
							</div>
							';
return $output172;
};
$arguments167 = array();
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$arguments167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['0'] = $renderingContext->getVariableProvider()->getByPath('filters.sortingField', $array170);

$expression171 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);
$arguments167['__thenClosure'] = $renderChildrenClosure168;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
							<div class="form-group">
								<label for="recursive" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['key'] = NULL;
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$arguments201['languageKey'] = NULL;
$arguments201['alternativeLanguageKeys'] = NULL;
$arguments201['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.recursive';

$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);

$output200 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['additionalAttributes'] = NULL;
$arguments203['data'] = NULL;
$arguments203['name'] = NULL;
$arguments203['value'] = NULL;
$arguments203['property'] = NULL;
$arguments203['autofocus'] = NULL;
$arguments203['disabled'] = NULL;
$arguments203['maxlength'] = NULL;
$arguments203['readonly'] = NULL;
$arguments203['size'] = NULL;
$arguments203['placeholder'] = NULL;
$arguments203['pattern'] = NULL;
$arguments203['errorClass'] = 'f3-form-error';
$arguments203['class'] = NULL;
$arguments203['dir'] = NULL;
$arguments203['id'] = NULL;
$arguments203['lang'] = NULL;
$arguments203['style'] = NULL;
$arguments203['title'] = NULL;
$arguments203['accesskey'] = NULL;
$arguments203['tabindex'] = NULL;
$arguments203['onclick'] = NULL;
$arguments203['required'] = false;
$arguments203['type'] = 'text';
$arguments203['type'] = 'number';
// Rendering Array
$array205 = array();
$array205['min'] = 0;
$arguments203['additionalAttributes'] = $array205;
$arguments203['property'] = 'recursive';
$arguments203['id'] = 'recursive';
$arguments203['class'] = 'form-control';

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output200 .= '
								</div>
							</div>
							';
return $output200;
};
$arguments195 = array();
$arguments195['then'] = NULL;
$arguments195['else'] = NULL;
$arguments195['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array198 = array (
);$array197['0'] = $renderingContext->getVariableProvider()->getByPath('filters.number', $array198);

$expression199 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments195['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);
$arguments195['__thenClosure'] = $renderChildrenClosure196;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output71 .= '
							<div class="form-group">
								<div class="col-xs-offset-4 col-xs-8">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['additionalAttributes'] = NULL;
$arguments225['data'] = NULL;
$arguments225['name'] = NULL;
$arguments225['value'] = NULL;
$arguments225['property'] = NULL;
$arguments225['disabled'] = NULL;
$arguments225['class'] = NULL;
$arguments225['dir'] = NULL;
$arguments225['id'] = NULL;
$arguments225['lang'] = NULL;
$arguments225['style'] = NULL;
$arguments225['title'] = NULL;
$arguments225['accesskey'] = NULL;
$arguments225['tabindex'] = NULL;
$arguments225['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['key'] = NULL;
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['languageKey'] = NULL;
$arguments227['alternativeLanguageKeys'] = NULL;
$arguments227['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';
$arguments225['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);
$arguments225['class'] = 'btn btn-primary';

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output224 .= '
										';
return $output224;
};
$arguments222 = array();

$output221 .= '';

$output221 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['additionalAttributes'] = NULL;
$arguments232['data'] = NULL;
$arguments232['name'] = NULL;
$arguments232['value'] = NULL;
$arguments232['property'] = NULL;
$arguments232['disabled'] = NULL;
$arguments232['class'] = NULL;
$arguments232['dir'] = NULL;
$arguments232['id'] = NULL;
$arguments232['lang'] = NULL;
$arguments232['style'] = NULL;
$arguments232['title'] = NULL;
$arguments232['accesskey'] = NULL;
$arguments232['tabindex'] = NULL;
$arguments232['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['key'] = NULL;
$arguments234['id'] = NULL;
$arguments234['default'] = NULL;
$arguments234['arguments'] = NULL;
$arguments234['extensionName'] = NULL;
$arguments234['languageKey'] = NULL;
$arguments234['alternativeLanguageKeys'] = NULL;
$arguments234['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:search';
$arguments232['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);
$arguments232['class'] = 'btn btn-primary';

$output231 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
										';
return $output231;
};
$arguments229 = array();
$arguments229['if'] = NULL;

$output221 .= '';

$output221 .= '
									';
return $output221;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array218 = array();
$array219 = array (
);$array218['0'] = $renderingContext->getVariableProvider()->getByPath('is9up', $array219);

$expression220 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression220(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array218)
					),
					$renderingContext
				);
$arguments206['__thenClosure'] = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['additionalAttributes'] = NULL;
$arguments209['data'] = NULL;
$arguments209['name'] = NULL;
$arguments209['value'] = NULL;
$arguments209['property'] = NULL;
$arguments209['disabled'] = NULL;
$arguments209['class'] = NULL;
$arguments209['dir'] = NULL;
$arguments209['id'] = NULL;
$arguments209['lang'] = NULL;
$arguments209['style'] = NULL;
$arguments209['title'] = NULL;
$arguments209['accesskey'] = NULL;
$arguments209['tabindex'] = NULL;
$arguments209['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['key'] = NULL;
$arguments211['id'] = NULL;
$arguments211['default'] = NULL;
$arguments211['arguments'] = NULL;
$arguments211['extensionName'] = NULL;
$arguments211['languageKey'] = NULL;
$arguments211['alternativeLanguageKeys'] = NULL;
$arguments211['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';
$arguments209['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);
$arguments209['class'] = 'btn btn-primary';

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output208 .= '
										';
return $output208;
};
$arguments206['__elseClosures'][] = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['additionalAttributes'] = NULL;
$arguments214['data'] = NULL;
$arguments214['name'] = NULL;
$arguments214['value'] = NULL;
$arguments214['property'] = NULL;
$arguments214['disabled'] = NULL;
$arguments214['class'] = NULL;
$arguments214['dir'] = NULL;
$arguments214['id'] = NULL;
$arguments214['lang'] = NULL;
$arguments214['style'] = NULL;
$arguments214['title'] = NULL;
$arguments214['accesskey'] = NULL;
$arguments214['tabindex'] = NULL;
$arguments214['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['key'] = NULL;
$arguments216['id'] = NULL;
$arguments216['default'] = NULL;
$arguments216['arguments'] = NULL;
$arguments216['extensionName'] = NULL;
$arguments216['languageKey'] = NULL;
$arguments216['alternativeLanguageKeys'] = NULL;
$arguments216['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:search';
$arguments214['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);
$arguments214['class'] = 'btn btn-primary';

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '
										';
return $output213;
};

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output71 .= '
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
							<div class="category-tree">
								<div class="form-group">
									<div class="tree-wrapper">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['section'] = NULL;
$arguments242['partial'] = NULL;
$arguments242['delegate'] = NULL;
$arguments242['renderable'] = NULL;
$arguments242['arguments'] = array (
);
$arguments242['optional'] = false;
$arguments242['default'] = NULL;
$arguments242['contentAs'] = NULL;
$arguments242['debug'] = true;
$arguments242['section'] = 'categoryTree';
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array245);
$array246 = array (
);$array244['categories'] = $renderingContext->getVariableProvider()->getByPath('categories', $array246);
$array244['class'] = 'list-tree';
$arguments242['arguments'] = $array244;

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output241 .= '
									</div>
								</div>

								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
									<div class="form-group">
										<label for="categoryConjunction" class="col-xs-4 control-label">
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
$arguments259['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.categoryConjunction';

$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output258 .= '
										</label>

										<div class="col-xs-4">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['additionalAttributes'] = NULL;
$arguments261['data'] = NULL;
$arguments261['name'] = NULL;
$arguments261['value'] = NULL;
$arguments261['property'] = NULL;
$arguments261['class'] = NULL;
$arguments261['dir'] = NULL;
$arguments261['id'] = NULL;
$arguments261['lang'] = NULL;
$arguments261['style'] = NULL;
$arguments261['title'] = NULL;
$arguments261['accesskey'] = NULL;
$arguments261['tabindex'] = NULL;
$arguments261['onclick'] = NULL;
$arguments261['size'] = NULL;
$arguments261['disabled'] = NULL;
$arguments261['options'] = NULL;
$arguments261['optionsAfterContent'] = false;
$arguments261['optionValueField'] = NULL;
$arguments261['optionLabelField'] = NULL;
$arguments261['sortByOptionLabel'] = false;
$arguments261['selectAllByDefault'] = false;
$arguments261['errorClass'] = 'f3-form-error';
$arguments261['prependOptionLabel'] = NULL;
$arguments261['prependOptionValue'] = NULL;
$arguments261['multiple'] = false;
$arguments261['required'] = false;
$arguments261['class'] = 'form-control';
$arguments261['property'] = 'categoryConjunction';
$arguments261['id'] = 'categoryConjunction';
// Rendering Array
$array263 = array();
$array263['AND'] = 'AND';
$array263['OR'] = 'OR';
$array263['notor'] = 'notor';
$array263['notand'] = 'notand';
$arguments261['options'] = $array263;

$output258 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output258 .= '
										</div>
									</div>
									';
return $output258;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categoryConjunction', $array256);

$expression257 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);
$arguments253['__thenClosure'] = $renderChildrenClosure254;

$output252 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output252 .= '

									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
									<div class="form-group">
										<label for="includeSubCategories" class="col-xs-4 control-label">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['key'] = NULL;
$arguments270['id'] = NULL;
$arguments270['default'] = NULL;
$arguments270['arguments'] = NULL;
$arguments270['extensionName'] = NULL;
$arguments270['languageKey'] = NULL;
$arguments270['alternativeLanguageKeys'] = NULL;
$arguments270['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.includeSubCategories';

$output269 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);

$output269 .= '
										</label>

										<div class="col-xs-8">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['additionalAttributes'] = NULL;
$arguments272['data'] = NULL;
$arguments272['name'] = NULL;
$arguments272['value'] = NULL;
$arguments272['property'] = NULL;
$arguments272['disabled'] = NULL;
$arguments272['errorClass'] = 'f3-form-error';
$arguments272['class'] = NULL;
$arguments272['dir'] = NULL;
$arguments272['id'] = NULL;
$arguments272['lang'] = NULL;
$arguments272['style'] = NULL;
$arguments272['title'] = NULL;
$arguments272['accesskey'] = NULL;
$arguments272['tabindex'] = NULL;
$arguments272['onclick'] = NULL;
$arguments272['checked'] = NULL;
$arguments272['multiple'] = false;
$arguments272['class'] = 'checkbox';
$arguments272['property'] = 'includeSubCategories';
$arguments272['value'] = 1;
$arguments272['id'] = 'includeSubCategories';

$output269 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output269 .= '
										</div>
									</div>
									';
return $output269;
};
$arguments264 = array();
$arguments264['then'] = NULL;
$arguments264['else'] = NULL;
$arguments264['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array266 = array();
$array267 = array (
);$array266['0'] = $renderingContext->getVariableProvider()->getByPath('filters.includeSubCategories', $array267);

$expression268 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments264['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression268(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array266)
					),
					$renderingContext
				);
$arguments264['__thenClosure'] = $renderChildrenClosure265;

$output252 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output252 .= '
								';
return $output252;
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['0'] = $renderingContext->getVariableProvider()->getByPath('categories', $array250);

$expression251 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);
$arguments247['__thenClosure'] = $renderChildrenClosure248;

$output241 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output241 .= '
							</div>
							';
return $output241;
};
$arguments236 = array();
$arguments236['then'] = NULL;
$arguments236['else'] = NULL;
$arguments236['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array238 = array();
$array239 = array (
);$array238['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categories', $array239);

$expression240 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments236['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression240(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array238)
					),
					$renderingContext
				);
$arguments236['__thenClosure'] = $renderChildrenClosure237;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output71 .= '
						</div>
					</div>
				</div>
			</div>
		';
return $output71;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['action'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['controller'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['pluginName'] = NULL;
$arguments66['pageUid'] = NULL;
$arguments66['object'] = NULL;
$arguments66['pageType'] = 0;
$arguments66['noCache'] = false;
$arguments66['noCacheHash'] = false;
$arguments66['section'] = '';
$arguments66['format'] = '';
$arguments66['additionalParams'] = array (
);
$arguments66['absolute'] = false;
$arguments66['addQueryString'] = false;
$arguments66['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments66['addQueryStringMethod'] = 'GET';
$arguments66['fieldNamePrefix'] = NULL;
$arguments66['actionUri'] = NULL;
$arguments66['objectName'] = NULL;
$arguments66['hiddenFieldClassName'] = NULL;
$arguments66['enctype'] = NULL;
$arguments66['method'] = NULL;
$arguments66['name'] = NULL;
$arguments66['onreset'] = NULL;
$arguments66['onsubmit'] = NULL;
$arguments66['target'] = NULL;
$arguments66['novalidate'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['id'] = 'administrationForm';
$arguments66['name'] = 'demand';
$array68 = array (
);$arguments66['object'] = $renderingContext->getVariableProvider()->getByPath('demand', $array68);
$arguments66['method'] = 'get';
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['autoSubmitForm'] = $renderingContext->getVariableProvider()->getByPath('autoSubmitForm', $array70);
$arguments66['data'] = $array69;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
	';
return $output65;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('showSearchForm', $array63);

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments60['__thenClosure'] = $renderChildrenClosure61;

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output28 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$array298 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array298);
};
$arguments296 = array();
$arguments296['value'] = NULL;

$output295 .= isset($arguments296['value']) ? $arguments296['value'] : $renderChildrenClosure297();

$output295 .= '
			</div>
		';
return $output295;
};
$arguments293 = array();

$output292 .= '';

$output292 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['key'] = NULL;
$arguments302['id'] = NULL;
$arguments302['default'] = NULL;
$arguments302['arguments'] = NULL;
$arguments302['extensionName'] = NULL;
$arguments302['languageKey'] = NULL;
$arguments302['alternativeLanguageKeys'] = NULL;
$arguments302['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output301 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext)]);

$output301 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['key'] = NULL;
$arguments304['id'] = NULL;
$arguments304['default'] = NULL;
$arguments304['arguments'] = NULL;
$arguments304['extensionName'] = NULL;
$arguments304['languageKey'] = NULL;
$arguments304['alternativeLanguageKeys'] = NULL;
$arguments304['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output301 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);

$output301 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['key'] = NULL;
$arguments308['id'] = NULL;
$arguments308['default'] = NULL;
$arguments308['arguments'] = NULL;
$arguments308['extensionName'] = NULL;
$arguments308['languageKey'] = NULL;
$arguments308['alternativeLanguageKeys'] = NULL;
$arguments308['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext)]);
};
$arguments306 = array();
$arguments306['additionalAttributes'] = NULL;
$arguments306['data'] = NULL;
$arguments306['class'] = NULL;
$arguments306['dir'] = NULL;
$arguments306['id'] = NULL;
$arguments306['lang'] = NULL;
$arguments306['style'] = NULL;
$arguments306['title'] = NULL;
$arguments306['accesskey'] = NULL;
$arguments306['tabindex'] = NULL;
$arguments306['onclick'] = NULL;
$arguments306['name'] = NULL;
$arguments306['rel'] = NULL;
$arguments306['rev'] = NULL;
$arguments306['target'] = NULL;
$arguments306['action'] = NULL;
$arguments306['controller'] = NULL;
$arguments306['extensionName'] = NULL;
$arguments306['pluginName'] = NULL;
$arguments306['pageUid'] = NULL;
$arguments306['pageType'] = NULL;
$arguments306['noCache'] = NULL;
$arguments306['noCacheHash'] = NULL;
$arguments306['section'] = NULL;
$arguments306['format'] = NULL;
$arguments306['linkAccessRestrictedPages'] = NULL;
$arguments306['additionalParams'] = NULL;
$arguments306['absolute'] = NULL;
$arguments306['addQueryString'] = NULL;
$arguments306['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments306['addQueryStringMethod'] = NULL;
$arguments306['arguments'] = NULL;
$arguments306['action'] = 'newsPidListing';
$arguments306['class'] = 'btn btn-info';

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output301 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output301;
};
$arguments299 = array();
$arguments299['if'] = NULL;

$output292 .= '';

$output292 .= '
	';
return $output292;
};
$arguments274 = array();
$arguments274['then'] = NULL;
$arguments274['else'] = NULL;
$arguments274['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('newsCount', $array290);

$expression291 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments274['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression291(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments274['__thenClosure'] = function() use ($renderingContext, $self) {
$output276 = '';

$output276 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$array279 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array279);
};
$arguments277 = array();
$arguments277['value'] = NULL;

$output276 .= isset($arguments277['value']) ? $arguments277['value'] : $renderChildrenClosure278();

$output276 .= '
			</div>
		';
return $output276;
};
$arguments274['__elseClosures'][] = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['key'] = NULL;
$arguments281['id'] = NULL;
$arguments281['default'] = NULL;
$arguments281['arguments'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['languageKey'] = NULL;
$arguments281['alternativeLanguageKeys'] = NULL;
$arguments281['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext)]);

$output280 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['key'] = NULL;
$arguments283['id'] = NULL;
$arguments283['default'] = NULL;
$arguments283['arguments'] = NULL;
$arguments283['extensionName'] = NULL;
$arguments283['languageKey'] = NULL;
$arguments283['alternativeLanguageKeys'] = NULL;
$arguments283['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext)]);

$output280 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['key'] = NULL;
$arguments287['id'] = NULL;
$arguments287['default'] = NULL;
$arguments287['arguments'] = NULL;
$arguments287['extensionName'] = NULL;
$arguments287['languageKey'] = NULL;
$arguments287['alternativeLanguageKeys'] = NULL;
$arguments287['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext)]);
};
$arguments285 = array();
$arguments285['additionalAttributes'] = NULL;
$arguments285['data'] = NULL;
$arguments285['class'] = NULL;
$arguments285['dir'] = NULL;
$arguments285['id'] = NULL;
$arguments285['lang'] = NULL;
$arguments285['style'] = NULL;
$arguments285['title'] = NULL;
$arguments285['accesskey'] = NULL;
$arguments285['tabindex'] = NULL;
$arguments285['onclick'] = NULL;
$arguments285['name'] = NULL;
$arguments285['rel'] = NULL;
$arguments285['rev'] = NULL;
$arguments285['target'] = NULL;
$arguments285['action'] = NULL;
$arguments285['controller'] = NULL;
$arguments285['extensionName'] = NULL;
$arguments285['pluginName'] = NULL;
$arguments285['pageUid'] = NULL;
$arguments285['pageType'] = NULL;
$arguments285['noCache'] = NULL;
$arguments285['noCacheHash'] = NULL;
$arguments285['section'] = NULL;
$arguments285['format'] = NULL;
$arguments285['linkAccessRestrictedPages'] = NULL;
$arguments285['additionalParams'] = NULL;
$arguments285['absolute'] = NULL;
$arguments285['addQueryString'] = NULL;
$arguments285['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments285['addQueryStringMethod'] = NULL;
$arguments285['arguments'] = NULL;
$arguments285['action'] = 'newsPidListing';
$arguments285['class'] = 'btn btn-info';

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output280 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output280;
};

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output28 .= '
	<script type="text/javascript">
		T3_THIS_LOCATION = ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$array312 = array (
);return $renderingContext->getVariableProvider()->getByPath('requestUri', $array312);
};
$arguments310 = array();
$arguments310['value'] = NULL;

$output28 .= isset($arguments310['value']) ? $arguments310['value'] : $renderChildrenClosure311();

$output28 .= ';

        function jumpToUrl(URL) {
            window.location.href = URL;
            return false;
        }
        function jumpExt(URL,anchor) {	//
            var anc = anchor?anchor:"";
            window.location.href = URL+(T3_THIS_LOCATION?"&returnUrl="+T3_THIS_LOCATION:"")+anc;
            return false;
        }
        function jumpSelf(URL) {	//
            window.location.href = URL+(T3_RETURN_URL?"&returnUrl="+T3_RETURN_URL:"");
            return false;
        }
	</script>
';

return $output28;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output313 = '';

$output313 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['name'] = NULL;
$arguments314['name'] = 'Backend/Default';

$output313 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output313 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
	<ul class="';
$array319 = array (
);
$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array319)]);

$output318 .= '">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
			<li>
				<label title="';
$array324 = array (
);
$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array324)]);

$output323 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$array328 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.item.title', $array328);
};
$arguments325 = array();
$arguments325['value'] = NULL;
$arguments325['keepQuotes'] = false;
$arguments325['encoding'] = 'UTF-8';
$arguments325['doubleEncode'] = true;
$value327 = ($arguments325['value'] !== NULL ? $arguments325['value'] : $renderChildrenClosure326());

$output323 .= !is_string($value327) && !(is_object($value327) && method_exists($value327, '__toString')) ? $value327 : htmlspecialchars($value327, ($arguments325['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments325['encoding'], $arguments325['doubleEncode']);

$output323 .= '">
					<input type="checkbox" ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['id'] = NULL;
$arguments329['categories'] = array (
);
$array331 = array (
);$arguments329['id'] = $renderingContext->getVariableProvider()->getByPath('category.item.uid', $array331);
$array332 = array (
);$arguments329['categories'] = $renderingContext->getVariableProvider()->getByPath('demand.selectedCategories', $array332);

$output323 .= GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output323 .= ' name="tx_news_web_newstxnewsm2[demand][selectedCategories][]" value="';
$array333 = array (
);
$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array333)]);

$output323 .= '" /> ';
$array334 = array (
);
$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.title', $array334)]);

$output323 .= '
				</label>

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['section'] = NULL;
$arguments341['partial'] = NULL;
$arguments341['delegate'] = NULL;
$arguments341['renderable'] = NULL;
$arguments341['arguments'] = array (
);
$arguments341['optional'] = false;
$arguments341['default'] = NULL;
$arguments341['contentAs'] = NULL;
$arguments341['debug'] = true;
$arguments341['section'] = 'categoryTree';
// Rendering Array
$array343 = array();
$array344 = array (
);$array343['categories'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array344);
$array345 = array (
);$array343['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array345);
$arguments341['arguments'] = $array343;

$output340 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output340 .= '
				';
return $output340;
};
$arguments335 = array();
$arguments335['then'] = NULL;
$arguments335['else'] = NULL;
$arguments335['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array337 = array();
$array338 = array (
);$array337['0'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array338);

$expression339 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments335['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array337)
					),
					$renderingContext
				);
$arguments335['__thenClosure'] = $renderChildrenClosure336;

$output323 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output323 .= '
			</li>
		';
return $output323;
};
$arguments320 = array();
$arguments320['each'] = NULL;
$arguments320['as'] = NULL;
$arguments320['key'] = NULL;
$arguments320['reverse'] = false;
$arguments320['iteration'] = NULL;
$array322 = array (
);$arguments320['each'] = $renderingContext->getVariableProvider()->getByPath('categories', $array322);
$arguments320['as'] = 'category';

$output318 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output318 .= '
	</ul>
';
return $output318;
};
$arguments316 = array();
$arguments316['name'] = NULL;
$arguments316['name'] = 'categoryTree';

$output313 .= NULL;

$output313 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['key'] = NULL;
$arguments349['id'] = NULL;
$arguments349['default'] = NULL;
$arguments349['arguments'] = NULL;
$arguments349['extensionName'] = NULL;
$arguments349['languageKey'] = NULL;
$arguments349['alternativeLanguageKeys'] = NULL;
$arguments349['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.title';

$output348 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext)]);

$output348 .= '
	</h1>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output362 = '';

$output362 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments363 = array();
$arguments363['key'] = NULL;
$arguments363['id'] = NULL;
$arguments363['default'] = NULL;
$arguments363['arguments'] = NULL;
$arguments363['extensionName'] = NULL;
$arguments363['languageKey'] = NULL;
$arguments363['alternativeLanguageKeys'] = NULL;
$arguments363['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.why.text';

$output362 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext)]);

$output362 .= '
			<br>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments368 = array();
$arguments368['identifier'] = NULL;
$arguments368['size'] = 'small';
$arguments368['overlay'] = NULL;
$arguments368['state'] = 'default';
$arguments368['alternativeMarkupIdentifier'] = NULL;
$arguments368['identifier'] = 'ext-news-donation';

$output367 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output367 .= '
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
$arguments370['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.link';

$output367 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext)]);

$output367 .= '
				';
return $output367;
};
$arguments365 = array();
$arguments365['additionalAttributes'] = NULL;
$arguments365['data'] = NULL;
$arguments365['class'] = NULL;
$arguments365['dir'] = NULL;
$arguments365['id'] = NULL;
$arguments365['lang'] = NULL;
$arguments365['style'] = NULL;
$arguments365['title'] = NULL;
$arguments365['accesskey'] = NULL;
$arguments365['tabindex'] = NULL;
$arguments365['onclick'] = NULL;
$arguments365['name'] = NULL;
$arguments365['rel'] = NULL;
$arguments365['rev'] = NULL;
$arguments365['target'] = NULL;
$arguments365['action'] = NULL;
$arguments365['controller'] = NULL;
$arguments365['extensionName'] = NULL;
$arguments365['pluginName'] = NULL;
$arguments365['pageUid'] = NULL;
$arguments365['pageType'] = NULL;
$arguments365['noCache'] = NULL;
$arguments365['noCacheHash'] = NULL;
$arguments365['section'] = NULL;
$arguments365['format'] = NULL;
$arguments365['linkAccessRestrictedPages'] = NULL;
$arguments365['additionalParams'] = NULL;
$arguments365['absolute'] = NULL;
$arguments365['addQueryString'] = NULL;
$arguments365['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments365['addQueryStringMethod'] = NULL;
$arguments365['arguments'] = NULL;
$arguments365['action'] = 'donate';
$arguments365['class'] = 'btn btn-default';

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output362 .= '
		';
return $output362;
};
$arguments357 = array();
$arguments357['message'] = NULL;
$arguments357['title'] = NULL;
$arguments357['state'] = -2;
$arguments357['iconName'] = NULL;
$arguments357['disableIcon'] = false;
$output359 = '';

$output359 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['key'] = NULL;
$arguments360['id'] = NULL;
$arguments360['default'] = NULL;
$arguments360['arguments'] = NULL;
$arguments360['extensionName'] = NULL;
$arguments360['languageKey'] = NULL;
$arguments360['alternativeLanguageKeys'] = NULL;
$arguments360['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.support';

$output359 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);
$arguments357['title'] = $output359;
$arguments357['state'] = -1;
$renderChildrenClosure358 = ($arguments357['message'] !== null) ? function() use ($arguments357) { return $arguments357['message']; } : $renderChildrenClosure358;
$output356 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output356 .= '
	';
return $output356;
};
$arguments351 = array();
$arguments351['then'] = NULL;
$arguments351['else'] = NULL;
$arguments351['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array353 = array();
$array354 = array (
);$array353['0'] = $renderingContext->getVariableProvider()->getByPath('showSupportArea', $array354);

$expression355 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments351['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression355(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array353)
					),
					$renderingContext
				);
$arguments351['__thenClosure'] = $renderChildrenClosure352;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output348 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$output377 = '';

$output377 .= '
		<div class="alert alert-info">
			<div class="message-body">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments378 = array();
$arguments378['key'] = NULL;
$arguments378['id'] = NULL;
$arguments378['default'] = NULL;
$arguments378['arguments'] = NULL;
$arguments378['extensionName'] = NULL;
$arguments378['languageKey'] = NULL;
$arguments378['alternativeLanguageKeys'] = NULL;
$arguments378['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nopageselected';

$output377 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext)]);

$output377 .= '
			</div>
		</div>
	';
return $output377;
};
$arguments372 = array();
$arguments372['then'] = NULL;
$arguments372['else'] = NULL;
$arguments372['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array374 = array();
$array375 = array (
);$array374['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array375);
$array374['1'] = ' == 0';

$expression376 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments372['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression376(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array374)
					),
					$renderingContext
				);
$arguments372['__thenClosure'] = $renderChildrenClosure373;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output348 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
$output385 = '';

$output385 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
$output391 = '';

$output391 .= '
			<input type="hidden" name="formSubmitted" value="1">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
					<input type="hidden" name="route" value="/web/NewsTxNewsM2/">
					<input type="hidden" name="token" value="';
$array405 = array (
);
$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array405)]);

$output404 .= '">
				';
return $output404;
};
$arguments402 = array();

$output401 .= '';

$output401 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
					<input type="hidden" name="M" value="web_NewsTxNewsM2">
					<input type="hidden" name="moduleToken" value="';
$array409 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array409)]);

$output408 .= '">
				';
return $output408;
};
$arguments406 = array();
$arguments406['if'] = NULL;

$output401 .= '';

$output401 .= '
			';
return $output401;
};
$arguments392 = array();
$arguments392['then'] = NULL;
$arguments392['else'] = NULL;
$arguments392['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array398 = array();
$array399 = array (
);$array398['0'] = $renderingContext->getVariableProvider()->getByPath('is9up', $array399);

$expression400 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments392['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression400(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array398)
					),
					$renderingContext
				);
$arguments392['__thenClosure'] = function() use ($renderingContext, $self) {
$output394 = '';

$output394 .= '
					<input type="hidden" name="route" value="/web/NewsTxNewsM2/">
					<input type="hidden" name="token" value="';
$array395 = array (
);
$output394 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array395)]);

$output394 .= '">
				';
return $output394;
};
$arguments392['__elseClosures'][] = function() use ($renderingContext, $self) {
$output396 = '';

$output396 .= '
					<input type="hidden" name="M" value="web_NewsTxNewsM2">
					<input type="hidden" name="moduleToken" value="';
$array397 = array (
);
$output396 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array397)]);

$output396 .= '">
				';
return $output396;
};

$output391 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output391 .= '

			<input type="hidden" name="id" value="';
$array410 = array (
);
$output391 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page', $array410)]);

$output391 .= '">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments411 = array();
$arguments411['additionalAttributes'] = NULL;
$arguments411['data'] = NULL;
$arguments411['name'] = NULL;
$arguments411['value'] = NULL;
$arguments411['property'] = NULL;
$arguments411['disabled'] = NULL;
$arguments411['errorClass'] = 'f3-form-error';
$arguments411['class'] = NULL;
$arguments411['dir'] = NULL;
$arguments411['id'] = NULL;
$arguments411['lang'] = NULL;
$arguments411['style'] = NULL;
$arguments411['title'] = NULL;
$arguments411['accesskey'] = NULL;
$arguments411['tabindex'] = NULL;
$arguments411['onclick'] = NULL;
$arguments411['checked'] = NULL;
$arguments411['multiple'] = false;
$arguments411['style'] = 'display:none';
$arguments411['property'] = 'selectedCategories';
$arguments411['value'] = 0;

$output391 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext);

$output391 .= '

			<div id="setting-container" style="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments413 = array();
$arguments413['then'] = NULL;
$arguments413['else'] = NULL;
$arguments413['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array415 = array();
$array416 = array (
);$array415['0'] = $renderingContext->getVariableProvider()->getByPath('hideForm', $array416);

$expression417 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments413['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression417(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array415)
					),
					$renderingContext
				);
$arguments413['then'] = 'display:none';
$arguments413['else'] = '';

$output391 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output391 .= '">
				<div class="settings">
					<div class="row form-horizontal">
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
$output423 = '';

$output423 .= '
							<div class="form-group">
								<label for="searchWord" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments424 = array();
$arguments424['key'] = NULL;
$arguments424['id'] = NULL;
$arguments424['default'] = NULL;
$arguments424['arguments'] = NULL;
$arguments424['extensionName'] = NULL;
$arguments424['languageKey'] = NULL;
$arguments424['alternativeLanguageKeys'] = NULL;
$arguments424['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.searchWord';

$output423 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext)]);

$output423 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments426 = array();
$arguments426['additionalAttributes'] = NULL;
$arguments426['data'] = NULL;
$arguments426['name'] = NULL;
$arguments426['value'] = NULL;
$arguments426['property'] = NULL;
$arguments426['autofocus'] = NULL;
$arguments426['disabled'] = NULL;
$arguments426['maxlength'] = NULL;
$arguments426['readonly'] = NULL;
$arguments426['size'] = NULL;
$arguments426['placeholder'] = NULL;
$arguments426['pattern'] = NULL;
$arguments426['errorClass'] = 'f3-form-error';
$arguments426['class'] = NULL;
$arguments426['dir'] = NULL;
$arguments426['id'] = NULL;
$arguments426['lang'] = NULL;
$arguments426['style'] = NULL;
$arguments426['title'] = NULL;
$arguments426['accesskey'] = NULL;
$arguments426['tabindex'] = NULL;
$arguments426['onclick'] = NULL;
$arguments426['required'] = false;
$arguments426['type'] = 'text';
$arguments426['property'] = 'searchWord';
$arguments426['id'] = 'searchWord';
$arguments426['class'] = 'form-control t3js-clearable';

$output423 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output423 .= '
								</div>
							</div>
							';
return $output423;
};
$arguments418 = array();
$arguments418['then'] = NULL;
$arguments418['else'] = NULL;
$arguments418['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array420 = array();
$array421 = array (
);$array420['0'] = $renderingContext->getVariableProvider()->getByPath('filters.searchWord', $array421);

$expression422 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments418['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression422(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array420)
					),
					$renderingContext
				);
$arguments418['__thenClosure'] = $renderChildrenClosure419;

$output391 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);

$output391 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
$output433 = '';

$output433 .= '
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
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
$arguments434['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.timeRange';

$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext)]);

$output433 .= '
								</label>

								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['additionalAttributes'] = NULL;
$arguments436['data'] = NULL;
$arguments436['name'] = NULL;
$arguments436['value'] = NULL;
$arguments436['property'] = NULL;
$arguments436['autofocus'] = NULL;
$arguments436['disabled'] = NULL;
$arguments436['maxlength'] = NULL;
$arguments436['readonly'] = NULL;
$arguments436['size'] = NULL;
$arguments436['placeholder'] = NULL;
$arguments436['pattern'] = NULL;
$arguments436['errorClass'] = 'f3-form-error';
$arguments436['class'] = NULL;
$arguments436['dir'] = NULL;
$arguments436['id'] = NULL;
$arguments436['lang'] = NULL;
$arguments436['style'] = NULL;
$arguments436['title'] = NULL;
$arguments436['accesskey'] = NULL;
$arguments436['tabindex'] = NULL;
$arguments436['onclick'] = NULL;
$arguments436['required'] = false;
$arguments436['type'] = 'text';
$arguments436['type'] = 'datetime';
$arguments436['property'] = 'timeRestriction';
$arguments436['id'] = 'timeRestriction';
$arguments436['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array438 = array();
$array438['date-type'] = 'datetime';
$array438['date-offset'] = 0;
$arguments436['data'] = $array438;

$output433 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output433 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestriction">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
									-
								</label>
								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['additionalAttributes'] = NULL;
$arguments439['data'] = NULL;
$arguments439['name'] = NULL;
$arguments439['value'] = NULL;
$arguments439['property'] = NULL;
$arguments439['autofocus'] = NULL;
$arguments439['disabled'] = NULL;
$arguments439['maxlength'] = NULL;
$arguments439['readonly'] = NULL;
$arguments439['size'] = NULL;
$arguments439['placeholder'] = NULL;
$arguments439['pattern'] = NULL;
$arguments439['errorClass'] = 'f3-form-error';
$arguments439['class'] = NULL;
$arguments439['dir'] = NULL;
$arguments439['id'] = NULL;
$arguments439['lang'] = NULL;
$arguments439['style'] = NULL;
$arguments439['title'] = NULL;
$arguments439['accesskey'] = NULL;
$arguments439['tabindex'] = NULL;
$arguments439['onclick'] = NULL;
$arguments439['required'] = false;
$arguments439['type'] = 'text';
$arguments439['type'] = 'datetime';
$arguments439['property'] = 'timeRestrictionHigh';
$arguments439['id'] = 'timeRestrictionHigh';
$arguments439['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array441 = array();
$array441['date-type'] = 'datetime';
$array441['date-offset'] = 0;
$arguments439['data'] = $array441;

$output433 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output433 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestrictionHigh">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							';
return $output433;
};
$arguments428 = array();
$arguments428['then'] = NULL;
$arguments428['else'] = NULL;
$arguments428['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array430 = array();
$array431 = array (
);$array430['0'] = $renderingContext->getVariableProvider()->getByPath('filters.timeRestriction', $array431);

$expression432 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments428['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression432(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array430)
					),
					$renderingContext
				);
$arguments428['__thenClosure'] = $renderChildrenClosure429;

$output391 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext);

$output391 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$output447 = '';

$output447 .= '
							<div class="form-group">
								<label for="topNewsRestriction" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['key'] = NULL;
$arguments448['id'] = NULL;
$arguments448['default'] = NULL;
$arguments448['arguments'] = NULL;
$arguments448['extensionName'] = NULL;
$arguments448['languageKey'] = NULL;
$arguments448['alternativeLanguageKeys'] = NULL;
$arguments448['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction';

$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext)]);

$output447 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['additionalAttributes'] = NULL;
$arguments450['data'] = NULL;
$arguments450['name'] = NULL;
$arguments450['value'] = NULL;
$arguments450['property'] = NULL;
$arguments450['class'] = NULL;
$arguments450['dir'] = NULL;
$arguments450['id'] = NULL;
$arguments450['lang'] = NULL;
$arguments450['style'] = NULL;
$arguments450['title'] = NULL;
$arguments450['accesskey'] = NULL;
$arguments450['tabindex'] = NULL;
$arguments450['onclick'] = NULL;
$arguments450['size'] = NULL;
$arguments450['disabled'] = NULL;
$arguments450['options'] = NULL;
$arguments450['optionsAfterContent'] = false;
$arguments450['optionValueField'] = NULL;
$arguments450['optionLabelField'] = NULL;
$arguments450['sortByOptionLabel'] = false;
$arguments450['selectAllByDefault'] = false;
$arguments450['errorClass'] = 'f3-form-error';
$arguments450['prependOptionLabel'] = NULL;
$arguments450['prependOptionValue'] = NULL;
$arguments450['multiple'] = false;
$arguments450['required'] = false;
$arguments450['property'] = 'topNewsRestriction';
$arguments450['class'] = 'form-control';
// Rendering Array
$array452 = array();
$array452['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['key'] = NULL;
$arguments453['id'] = NULL;
$arguments453['default'] = NULL;
$arguments453['arguments'] = NULL;
$arguments453['extensionName'] = NULL;
$arguments453['languageKey'] = NULL;
$arguments453['alternativeLanguageKeys'] = NULL;
$arguments453['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.1';
$array452['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments455 = array();
$arguments455['key'] = NULL;
$arguments455['id'] = NULL;
$arguments455['default'] = NULL;
$arguments455['arguments'] = NULL;
$arguments455['extensionName'] = NULL;
$arguments455['languageKey'] = NULL;
$arguments455['alternativeLanguageKeys'] = NULL;
$arguments455['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.2';
$array452['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);
$arguments450['options'] = $array452;
$arguments450['id'] = 'topNewsRestriction';

$output447 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output447 .= '
								</div>
							</div>
							';
return $output447;
};
$arguments442 = array();
$arguments442['then'] = NULL;
$arguments442['else'] = NULL;
$arguments442['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array444 = array();
$array445 = array (
);$array444['0'] = $renderingContext->getVariableProvider()->getByPath('filters.topNewsRestriction', $array445);

$expression446 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments442['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression446(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array444)
					),
					$renderingContext
				);
$arguments442['__thenClosure'] = $renderChildrenClosure443;

$output391 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output391 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$output462 = '';

$output462 .= '
							<div class="form-group">
								<label for="hidden" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();
$arguments463['key'] = NULL;
$arguments463['id'] = NULL;
$arguments463['default'] = NULL;
$arguments463['arguments'] = NULL;
$arguments463['extensionName'] = NULL;
$arguments463['languageKey'] = NULL;
$arguments463['alternativeLanguageKeys'] = NULL;
$arguments463['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden';

$output462 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext)]);

$output462 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['additionalAttributes'] = NULL;
$arguments465['data'] = NULL;
$arguments465['name'] = NULL;
$arguments465['value'] = NULL;
$arguments465['property'] = NULL;
$arguments465['class'] = NULL;
$arguments465['dir'] = NULL;
$arguments465['id'] = NULL;
$arguments465['lang'] = NULL;
$arguments465['style'] = NULL;
$arguments465['title'] = NULL;
$arguments465['accesskey'] = NULL;
$arguments465['tabindex'] = NULL;
$arguments465['onclick'] = NULL;
$arguments465['size'] = NULL;
$arguments465['disabled'] = NULL;
$arguments465['options'] = NULL;
$arguments465['optionsAfterContent'] = false;
$arguments465['optionValueField'] = NULL;
$arguments465['optionLabelField'] = NULL;
$arguments465['sortByOptionLabel'] = false;
$arguments465['selectAllByDefault'] = false;
$arguments465['errorClass'] = 'f3-form-error';
$arguments465['prependOptionLabel'] = NULL;
$arguments465['prependOptionValue'] = NULL;
$arguments465['multiple'] = false;
$arguments465['required'] = false;
$arguments465['property'] = 'hidden';
$arguments465['class'] = 'form-control';
// Rendering Array
$array467 = array();
$array467['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['key'] = NULL;
$arguments468['id'] = NULL;
$arguments468['default'] = NULL;
$arguments468['arguments'] = NULL;
$arguments468['extensionName'] = NULL;
$arguments468['languageKey'] = NULL;
$arguments468['alternativeLanguageKeys'] = NULL;
$arguments468['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.hidden';
$array467['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['key'] = NULL;
$arguments470['id'] = NULL;
$arguments470['default'] = NULL;
$arguments470['arguments'] = NULL;
$arguments470['extensionName'] = NULL;
$arguments470['languageKey'] = NULL;
$arguments470['alternativeLanguageKeys'] = NULL;
$arguments470['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.nonHidden';
$array467['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);
$arguments465['options'] = $array467;
$arguments465['id'] = 'hidden';

$output462 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);

$output462 .= '
								</div>
							</div>
							';
return $output462;
};
$arguments457 = array();
$arguments457['then'] = NULL;
$arguments457['else'] = NULL;
$arguments457['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array459 = array();
$array460 = array (
);$array459['0'] = $renderingContext->getVariableProvider()->getByPath('filters.hidden', $array460);

$expression461 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments457['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression461(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array459)
					),
					$renderingContext
				);
$arguments457['__thenClosure'] = $renderChildrenClosure458;

$output391 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output391 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
							<div class="form-group">
								<label for="archived" class="col-xs-4 control-label">
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
$arguments478['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction';

$output477 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext)]);

$output477 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['additionalAttributes'] = NULL;
$arguments480['data'] = NULL;
$arguments480['name'] = NULL;
$arguments480['value'] = NULL;
$arguments480['property'] = NULL;
$arguments480['class'] = NULL;
$arguments480['dir'] = NULL;
$arguments480['id'] = NULL;
$arguments480['lang'] = NULL;
$arguments480['style'] = NULL;
$arguments480['title'] = NULL;
$arguments480['accesskey'] = NULL;
$arguments480['tabindex'] = NULL;
$arguments480['onclick'] = NULL;
$arguments480['size'] = NULL;
$arguments480['disabled'] = NULL;
$arguments480['options'] = NULL;
$arguments480['optionsAfterContent'] = false;
$arguments480['optionValueField'] = NULL;
$arguments480['optionLabelField'] = NULL;
$arguments480['sortByOptionLabel'] = false;
$arguments480['selectAllByDefault'] = false;
$arguments480['errorClass'] = 'f3-form-error';
$arguments480['prependOptionLabel'] = NULL;
$arguments480['prependOptionValue'] = NULL;
$arguments480['multiple'] = false;
$arguments480['required'] = false;
$arguments480['property'] = 'archived';
$arguments480['class'] = 'form-control';
// Rendering Array
$array482 = array();
$array482['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments483 = array();
$arguments483['key'] = NULL;
$arguments483['id'] = NULL;
$arguments483['default'] = NULL;
$arguments483['arguments'] = NULL;
$arguments483['extensionName'] = NULL;
$arguments483['languageKey'] = NULL;
$arguments483['alternativeLanguageKeys'] = NULL;
$arguments483['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.active';
$array482['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['key'] = NULL;
$arguments485['id'] = NULL;
$arguments485['default'] = NULL;
$arguments485['arguments'] = NULL;
$arguments485['extensionName'] = NULL;
$arguments485['languageKey'] = NULL;
$arguments485['alternativeLanguageKeys'] = NULL;
$arguments485['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.archived';
$array482['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);
$arguments480['options'] = $array482;
$arguments480['id'] = 'archived';

$output477 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output477 .= '
								</div>
							</div>
							';
return $output477;
};
$arguments472 = array();
$arguments472['then'] = NULL;
$arguments472['else'] = NULL;
$arguments472['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array474 = array();
$array475 = array (
);$array474['0'] = $renderingContext->getVariableProvider()->getByPath('filters.archived', $array475);

$expression476 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments472['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression476(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array474)
					),
					$renderingContext
				);
$arguments472['__thenClosure'] = $renderChildrenClosure473;

$output391 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output391 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$output492 = '';

$output492 .= '
							<div class="form-group">
								<label for="sortingField" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments493 = array();
$arguments493['key'] = NULL;
$arguments493['id'] = NULL;
$arguments493['default'] = NULL;
$arguments493['arguments'] = NULL;
$arguments493['extensionName'] = NULL;
$arguments493['languageKey'] = NULL;
$arguments493['alternativeLanguageKeys'] = NULL;
$arguments493['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy';

$output492 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext)]);

$output492 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments495 = array();
$arguments495['additionalAttributes'] = NULL;
$arguments495['data'] = NULL;
$arguments495['name'] = NULL;
$arguments495['value'] = NULL;
$arguments495['property'] = NULL;
$arguments495['class'] = NULL;
$arguments495['dir'] = NULL;
$arguments495['id'] = NULL;
$arguments495['lang'] = NULL;
$arguments495['style'] = NULL;
$arguments495['title'] = NULL;
$arguments495['accesskey'] = NULL;
$arguments495['tabindex'] = NULL;
$arguments495['onclick'] = NULL;
$arguments495['size'] = NULL;
$arguments495['disabled'] = NULL;
$arguments495['options'] = NULL;
$arguments495['optionsAfterContent'] = false;
$arguments495['optionValueField'] = NULL;
$arguments495['optionLabelField'] = NULL;
$arguments495['sortByOptionLabel'] = false;
$arguments495['selectAllByDefault'] = false;
$arguments495['errorClass'] = 'f3-form-error';
$arguments495['prependOptionLabel'] = NULL;
$arguments495['prependOptionValue'] = NULL;
$arguments495['multiple'] = false;
$arguments495['required'] = false;
$arguments495['class'] = 'form-control';
$arguments495['property'] = 'sortingField';
// Rendering Array
$array497 = array();
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
$arguments498['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.title';
$array497['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments500 = array();
$arguments500['key'] = NULL;
$arguments500['id'] = NULL;
$arguments500['default'] = NULL;
$arguments500['arguments'] = NULL;
$arguments500['extensionName'] = NULL;
$arguments500['languageKey'] = NULL;
$arguments500['alternativeLanguageKeys'] = NULL;
$arguments500['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.datetime';
$array497['datetime'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments502 = array();
$arguments502['key'] = NULL;
$arguments502['id'] = NULL;
$arguments502['default'] = NULL;
$arguments502['arguments'] = NULL;
$arguments502['extensionName'] = NULL;
$arguments502['languageKey'] = NULL;
$arguments502['alternativeLanguageKeys'] = NULL;
$arguments502['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.tstamp';
$array497['tstamp'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments502, $renderChildrenClosure503, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments504 = array();
$arguments504['key'] = NULL;
$arguments504['id'] = NULL;
$arguments504['default'] = NULL;
$arguments504['arguments'] = NULL;
$arguments504['extensionName'] = NULL;
$arguments504['languageKey'] = NULL;
$arguments504['alternativeLanguageKeys'] = NULL;
$arguments504['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.archive';
$array497['archive'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments506 = array();
$arguments506['key'] = NULL;
$arguments506['id'] = NULL;
$arguments506['default'] = NULL;
$arguments506['arguments'] = NULL;
$arguments506['extensionName'] = NULL;
$arguments506['languageKey'] = NULL;
$arguments506['alternativeLanguageKeys'] = NULL;
$arguments506['key'] = 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel';
$array497['author'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);
$arguments495['options'] = $array497;
$arguments495['id'] = 'sortingField';

$output492 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext);

$output492 .= '
								</div>
								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments508 = array();
$arguments508['additionalAttributes'] = NULL;
$arguments508['data'] = NULL;
$arguments508['name'] = NULL;
$arguments508['value'] = NULL;
$arguments508['property'] = NULL;
$arguments508['class'] = NULL;
$arguments508['dir'] = NULL;
$arguments508['id'] = NULL;
$arguments508['lang'] = NULL;
$arguments508['style'] = NULL;
$arguments508['title'] = NULL;
$arguments508['accesskey'] = NULL;
$arguments508['tabindex'] = NULL;
$arguments508['onclick'] = NULL;
$arguments508['size'] = NULL;
$arguments508['disabled'] = NULL;
$arguments508['options'] = NULL;
$arguments508['optionsAfterContent'] = false;
$arguments508['optionValueField'] = NULL;
$arguments508['optionLabelField'] = NULL;
$arguments508['sortByOptionLabel'] = false;
$arguments508['selectAllByDefault'] = false;
$arguments508['errorClass'] = 'f3-form-error';
$arguments508['prependOptionLabel'] = NULL;
$arguments508['prependOptionValue'] = NULL;
$arguments508['multiple'] = false;
$arguments508['required'] = false;
$arguments508['class'] = 'form-control';
$arguments508['property'] = 'sortingDirection';
// Rendering Array
$array510 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments511 = array();
$arguments511['key'] = NULL;
$arguments511['id'] = NULL;
$arguments511['default'] = NULL;
$arguments511['arguments'] = NULL;
$arguments511['extensionName'] = NULL;
$arguments511['languageKey'] = NULL;
$arguments511['alternativeLanguageKeys'] = NULL;
$arguments511['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.asc';
$array510['asc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments513 = array();
$arguments513['key'] = NULL;
$arguments513['id'] = NULL;
$arguments513['default'] = NULL;
$arguments513['arguments'] = NULL;
$arguments513['extensionName'] = NULL;
$arguments513['languageKey'] = NULL;
$arguments513['alternativeLanguageKeys'] = NULL;
$arguments513['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.desc';
$array510['desc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);
$arguments508['options'] = $array510;
$arguments508['id'] = 'sortingDirection';

$output492 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output492 .= '
								</div>
							</div>
							';
return $output492;
};
$arguments487 = array();
$arguments487['then'] = NULL;
$arguments487['else'] = NULL;
$arguments487['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array489 = array();
$array490 = array (
);$array489['0'] = $renderingContext->getVariableProvider()->getByPath('filters.sortingField', $array490);

$expression491 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments487['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression491(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array489)
					),
					$renderingContext
				);
$arguments487['__thenClosure'] = $renderChildrenClosure488;

$output391 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output391 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
							<div class="form-group">
								<label for="recursive" class="col-xs-4 control-label">
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
$arguments521['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.recursive';

$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext)]);

$output520 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments523 = array();
$arguments523['additionalAttributes'] = NULL;
$arguments523['data'] = NULL;
$arguments523['name'] = NULL;
$arguments523['value'] = NULL;
$arguments523['property'] = NULL;
$arguments523['autofocus'] = NULL;
$arguments523['disabled'] = NULL;
$arguments523['maxlength'] = NULL;
$arguments523['readonly'] = NULL;
$arguments523['size'] = NULL;
$arguments523['placeholder'] = NULL;
$arguments523['pattern'] = NULL;
$arguments523['errorClass'] = 'f3-form-error';
$arguments523['class'] = NULL;
$arguments523['dir'] = NULL;
$arguments523['id'] = NULL;
$arguments523['lang'] = NULL;
$arguments523['style'] = NULL;
$arguments523['title'] = NULL;
$arguments523['accesskey'] = NULL;
$arguments523['tabindex'] = NULL;
$arguments523['onclick'] = NULL;
$arguments523['required'] = false;
$arguments523['type'] = 'text';
$arguments523['type'] = 'number';
// Rendering Array
$array525 = array();
$array525['min'] = 0;
$arguments523['additionalAttributes'] = $array525;
$arguments523['property'] = 'recursive';
$arguments523['id'] = 'recursive';
$arguments523['class'] = 'form-control';

$output520 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext);

$output520 .= '
								</div>
							</div>
							';
return $output520;
};
$arguments515 = array();
$arguments515['then'] = NULL;
$arguments515['else'] = NULL;
$arguments515['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array517 = array();
$array518 = array (
);$array517['0'] = $renderingContext->getVariableProvider()->getByPath('filters.number', $array518);

$expression519 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments515['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression519(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array517)
					),
					$renderingContext
				);
$arguments515['__thenClosure'] = $renderChildrenClosure516;

$output391 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext);

$output391 .= '
							<div class="form-group">
								<div class="col-xs-offset-4 col-xs-8">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$output541 = '';

$output541 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
$output544 = '';

$output544 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments545 = array();
$arguments545['additionalAttributes'] = NULL;
$arguments545['data'] = NULL;
$arguments545['name'] = NULL;
$arguments545['value'] = NULL;
$arguments545['property'] = NULL;
$arguments545['disabled'] = NULL;
$arguments545['class'] = NULL;
$arguments545['dir'] = NULL;
$arguments545['id'] = NULL;
$arguments545['lang'] = NULL;
$arguments545['style'] = NULL;
$arguments545['title'] = NULL;
$arguments545['accesskey'] = NULL;
$arguments545['tabindex'] = NULL;
$arguments545['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments547 = array();
$arguments547['key'] = NULL;
$arguments547['id'] = NULL;
$arguments547['default'] = NULL;
$arguments547['arguments'] = NULL;
$arguments547['extensionName'] = NULL;
$arguments547['languageKey'] = NULL;
$arguments547['alternativeLanguageKeys'] = NULL;
$arguments547['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';
$arguments545['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);
$arguments545['class'] = 'btn btn-primary';

$output544 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);

$output544 .= '
										';
return $output544;
};
$arguments542 = array();

$output541 .= '';

$output541 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
$output551 = '';

$output551 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments552 = array();
$arguments552['additionalAttributes'] = NULL;
$arguments552['data'] = NULL;
$arguments552['name'] = NULL;
$arguments552['value'] = NULL;
$arguments552['property'] = NULL;
$arguments552['disabled'] = NULL;
$arguments552['class'] = NULL;
$arguments552['dir'] = NULL;
$arguments552['id'] = NULL;
$arguments552['lang'] = NULL;
$arguments552['style'] = NULL;
$arguments552['title'] = NULL;
$arguments552['accesskey'] = NULL;
$arguments552['tabindex'] = NULL;
$arguments552['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments554 = array();
$arguments554['key'] = NULL;
$arguments554['id'] = NULL;
$arguments554['default'] = NULL;
$arguments554['arguments'] = NULL;
$arguments554['extensionName'] = NULL;
$arguments554['languageKey'] = NULL;
$arguments554['alternativeLanguageKeys'] = NULL;
$arguments554['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:search';
$arguments552['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext);
$arguments552['class'] = 'btn btn-primary';

$output551 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments552, $renderChildrenClosure553, $renderingContext);

$output551 .= '
										';
return $output551;
};
$arguments549 = array();
$arguments549['if'] = NULL;

$output541 .= '';

$output541 .= '
									';
return $output541;
};
$arguments526 = array();
$arguments526['then'] = NULL;
$arguments526['else'] = NULL;
$arguments526['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array538 = array();
$array539 = array (
);$array538['0'] = $renderingContext->getVariableProvider()->getByPath('is9up', $array539);

$expression540 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments526['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression540(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array538)
					),
					$renderingContext
				);
$arguments526['__thenClosure'] = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments529 = array();
$arguments529['additionalAttributes'] = NULL;
$arguments529['data'] = NULL;
$arguments529['name'] = NULL;
$arguments529['value'] = NULL;
$arguments529['property'] = NULL;
$arguments529['disabled'] = NULL;
$arguments529['class'] = NULL;
$arguments529['dir'] = NULL;
$arguments529['id'] = NULL;
$arguments529['lang'] = NULL;
$arguments529['style'] = NULL;
$arguments529['title'] = NULL;
$arguments529['accesskey'] = NULL;
$arguments529['tabindex'] = NULL;
$arguments529['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments531 = array();
$arguments531['key'] = NULL;
$arguments531['id'] = NULL;
$arguments531['default'] = NULL;
$arguments531['arguments'] = NULL;
$arguments531['extensionName'] = NULL;
$arguments531['languageKey'] = NULL;
$arguments531['alternativeLanguageKeys'] = NULL;
$arguments531['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';
$arguments529['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments531, $renderChildrenClosure532, $renderingContext);
$arguments529['class'] = 'btn btn-primary';

$output528 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output528 .= '
										';
return $output528;
};
$arguments526['__elseClosures'][] = function() use ($renderingContext, $self) {
$output533 = '';

$output533 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments534 = array();
$arguments534['additionalAttributes'] = NULL;
$arguments534['data'] = NULL;
$arguments534['name'] = NULL;
$arguments534['value'] = NULL;
$arguments534['property'] = NULL;
$arguments534['disabled'] = NULL;
$arguments534['class'] = NULL;
$arguments534['dir'] = NULL;
$arguments534['id'] = NULL;
$arguments534['lang'] = NULL;
$arguments534['style'] = NULL;
$arguments534['title'] = NULL;
$arguments534['accesskey'] = NULL;
$arguments534['tabindex'] = NULL;
$arguments534['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments536 = array();
$arguments536['key'] = NULL;
$arguments536['id'] = NULL;
$arguments536['default'] = NULL;
$arguments536['arguments'] = NULL;
$arguments536['extensionName'] = NULL;
$arguments536['languageKey'] = NULL;
$arguments536['alternativeLanguageKeys'] = NULL;
$arguments536['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:search';
$arguments534['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);
$arguments534['class'] = 'btn btn-primary';

$output533 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output533 .= '
										';
return $output533;
};

$output391 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output391 .= '
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$output561 = '';

$output561 .= '
							<div class="category-tree">
								<div class="form-group">
									<div class="tree-wrapper">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments562 = array();
$arguments562['section'] = NULL;
$arguments562['partial'] = NULL;
$arguments562['delegate'] = NULL;
$arguments562['renderable'] = NULL;
$arguments562['arguments'] = array (
);
$arguments562['optional'] = false;
$arguments562['default'] = NULL;
$arguments562['contentAs'] = NULL;
$arguments562['debug'] = true;
$arguments562['section'] = 'categoryTree';
// Rendering Array
$array564 = array();
$array565 = array (
);$array564['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array565);
$array566 = array (
);$array564['categories'] = $renderingContext->getVariableProvider()->getByPath('categories', $array566);
$array564['class'] = 'list-tree';
$arguments562['arguments'] = $array564;

$output561 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output561 .= '
									</div>
								</div>

								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
$output572 = '';

$output572 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure574 = function() use ($renderingContext, $self) {
$output578 = '';

$output578 .= '
									<div class="form-group">
										<label for="categoryConjunction" class="col-xs-4 control-label">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments579 = array();
$arguments579['key'] = NULL;
$arguments579['id'] = NULL;
$arguments579['default'] = NULL;
$arguments579['arguments'] = NULL;
$arguments579['extensionName'] = NULL;
$arguments579['languageKey'] = NULL;
$arguments579['alternativeLanguageKeys'] = NULL;
$arguments579['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.categoryConjunction';

$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments579, $renderChildrenClosure580, $renderingContext)]);

$output578 .= '
										</label>

										<div class="col-xs-4">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments581 = array();
$arguments581['additionalAttributes'] = NULL;
$arguments581['data'] = NULL;
$arguments581['name'] = NULL;
$arguments581['value'] = NULL;
$arguments581['property'] = NULL;
$arguments581['class'] = NULL;
$arguments581['dir'] = NULL;
$arguments581['id'] = NULL;
$arguments581['lang'] = NULL;
$arguments581['style'] = NULL;
$arguments581['title'] = NULL;
$arguments581['accesskey'] = NULL;
$arguments581['tabindex'] = NULL;
$arguments581['onclick'] = NULL;
$arguments581['size'] = NULL;
$arguments581['disabled'] = NULL;
$arguments581['options'] = NULL;
$arguments581['optionsAfterContent'] = false;
$arguments581['optionValueField'] = NULL;
$arguments581['optionLabelField'] = NULL;
$arguments581['sortByOptionLabel'] = false;
$arguments581['selectAllByDefault'] = false;
$arguments581['errorClass'] = 'f3-form-error';
$arguments581['prependOptionLabel'] = NULL;
$arguments581['prependOptionValue'] = NULL;
$arguments581['multiple'] = false;
$arguments581['required'] = false;
$arguments581['class'] = 'form-control';
$arguments581['property'] = 'categoryConjunction';
$arguments581['id'] = 'categoryConjunction';
// Rendering Array
$array583 = array();
$array583['AND'] = 'AND';
$array583['OR'] = 'OR';
$array583['notor'] = 'notor';
$array583['notand'] = 'notand';
$arguments581['options'] = $array583;

$output578 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext);

$output578 .= '
										</div>
									</div>
									';
return $output578;
};
$arguments573 = array();
$arguments573['then'] = NULL;
$arguments573['else'] = NULL;
$arguments573['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array575 = array();
$array576 = array (
);$array575['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categoryConjunction', $array576);

$expression577 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments573['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression577(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array575)
					),
					$renderingContext
				);
$arguments573['__thenClosure'] = $renderChildrenClosure574;

$output572 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments573, $renderChildrenClosure574, $renderingContext);

$output572 .= '

									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output589 = '';

$output589 .= '
									<div class="form-group">
										<label for="includeSubCategories" class="col-xs-4 control-label">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments590 = array();
$arguments590['key'] = NULL;
$arguments590['id'] = NULL;
$arguments590['default'] = NULL;
$arguments590['arguments'] = NULL;
$arguments590['extensionName'] = NULL;
$arguments590['languageKey'] = NULL;
$arguments590['alternativeLanguageKeys'] = NULL;
$arguments590['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.includeSubCategories';

$output589 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext)]);

$output589 .= '
										</label>

										<div class="col-xs-8">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['additionalAttributes'] = NULL;
$arguments592['data'] = NULL;
$arguments592['name'] = NULL;
$arguments592['value'] = NULL;
$arguments592['property'] = NULL;
$arguments592['disabled'] = NULL;
$arguments592['errorClass'] = 'f3-form-error';
$arguments592['class'] = NULL;
$arguments592['dir'] = NULL;
$arguments592['id'] = NULL;
$arguments592['lang'] = NULL;
$arguments592['style'] = NULL;
$arguments592['title'] = NULL;
$arguments592['accesskey'] = NULL;
$arguments592['tabindex'] = NULL;
$arguments592['onclick'] = NULL;
$arguments592['checked'] = NULL;
$arguments592['multiple'] = false;
$arguments592['class'] = 'checkbox';
$arguments592['property'] = 'includeSubCategories';
$arguments592['value'] = 1;
$arguments592['id'] = 'includeSubCategories';

$output589 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output589 .= '
										</div>
									</div>
									';
return $output589;
};
$arguments584 = array();
$arguments584['then'] = NULL;
$arguments584['else'] = NULL;
$arguments584['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array586 = array();
$array587 = array (
);$array586['0'] = $renderingContext->getVariableProvider()->getByPath('filters.includeSubCategories', $array587);

$expression588 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments584['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression588(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array586)
					),
					$renderingContext
				);
$arguments584['__thenClosure'] = $renderChildrenClosure585;

$output572 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output572 .= '
								';
return $output572;
};
$arguments567 = array();
$arguments567['then'] = NULL;
$arguments567['else'] = NULL;
$arguments567['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array569 = array();
$array570 = array (
);$array569['0'] = $renderingContext->getVariableProvider()->getByPath('categories', $array570);

$expression571 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments567['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression571(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array569)
					),
					$renderingContext
				);
$arguments567['__thenClosure'] = $renderChildrenClosure568;

$output561 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments567, $renderChildrenClosure568, $renderingContext);

$output561 .= '
							</div>
							';
return $output561;
};
$arguments556 = array();
$arguments556['then'] = NULL;
$arguments556['else'] = NULL;
$arguments556['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array558 = array();
$array559 = array (
);$array558['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categories', $array559);

$expression560 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments556['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression560(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array558)
					),
					$renderingContext
				);
$arguments556['__thenClosure'] = $renderChildrenClosure557;

$output391 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext);

$output391 .= '
						</div>
					</div>
				</div>
			</div>
		';
return $output391;
};
$arguments386 = array();
$arguments386['additionalAttributes'] = NULL;
$arguments386['data'] = NULL;
$arguments386['action'] = NULL;
$arguments386['arguments'] = array (
);
$arguments386['controller'] = NULL;
$arguments386['extensionName'] = NULL;
$arguments386['pluginName'] = NULL;
$arguments386['pageUid'] = NULL;
$arguments386['object'] = NULL;
$arguments386['pageType'] = 0;
$arguments386['noCache'] = false;
$arguments386['noCacheHash'] = false;
$arguments386['section'] = '';
$arguments386['format'] = '';
$arguments386['additionalParams'] = array (
);
$arguments386['absolute'] = false;
$arguments386['addQueryString'] = false;
$arguments386['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments386['addQueryStringMethod'] = 'GET';
$arguments386['fieldNamePrefix'] = NULL;
$arguments386['actionUri'] = NULL;
$arguments386['objectName'] = NULL;
$arguments386['hiddenFieldClassName'] = NULL;
$arguments386['enctype'] = NULL;
$arguments386['method'] = NULL;
$arguments386['name'] = NULL;
$arguments386['onreset'] = NULL;
$arguments386['onsubmit'] = NULL;
$arguments386['target'] = NULL;
$arguments386['novalidate'] = NULL;
$arguments386['class'] = NULL;
$arguments386['dir'] = NULL;
$arguments386['id'] = NULL;
$arguments386['lang'] = NULL;
$arguments386['style'] = NULL;
$arguments386['title'] = NULL;
$arguments386['accesskey'] = NULL;
$arguments386['tabindex'] = NULL;
$arguments386['onclick'] = NULL;
$arguments386['id'] = 'administrationForm';
$arguments386['name'] = 'demand';
$array388 = array (
);$arguments386['object'] = $renderingContext->getVariableProvider()->getByPath('demand', $array388);
$arguments386['method'] = 'get';
// Rendering Array
$array389 = array();
$array390 = array (
);$array389['autoSubmitForm'] = $renderingContext->getVariableProvider()->getByPath('autoSubmitForm', $array390);
$arguments386['data'] = $array389;

$output385 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);

$output385 .= '
	';
return $output385;
};
$arguments380 = array();
$arguments380['then'] = NULL;
$arguments380['else'] = NULL;
$arguments380['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array382 = array();
$array383 = array (
);$array382['0'] = $renderingContext->getVariableProvider()->getByPath('showSearchForm', $array383);

$expression384 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments380['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression384(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array382)
					),
					$renderingContext
				);
$arguments380['__thenClosure'] = $renderChildrenClosure381;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output348 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
$output612 = '';

$output612 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
$output615 = '';

$output615 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
$array618 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array618);
};
$arguments616 = array();
$arguments616['value'] = NULL;

$output615 .= isset($arguments616['value']) ? $arguments616['value'] : $renderChildrenClosure617();

$output615 .= '
			</div>
		';
return $output615;
};
$arguments613 = array();

$output612 .= '';

$output612 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure620 = function() use ($renderingContext, $self) {
$output621 = '';

$output621 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments622 = array();
$arguments622['key'] = NULL;
$arguments622['id'] = NULL;
$arguments622['default'] = NULL;
$arguments622['arguments'] = NULL;
$arguments622['extensionName'] = NULL;
$arguments622['languageKey'] = NULL;
$arguments622['alternativeLanguageKeys'] = NULL;
$arguments622['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output621 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext)]);

$output621 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments624 = array();
$arguments624['key'] = NULL;
$arguments624['id'] = NULL;
$arguments624['default'] = NULL;
$arguments624['arguments'] = NULL;
$arguments624['extensionName'] = NULL;
$arguments624['languageKey'] = NULL;
$arguments624['alternativeLanguageKeys'] = NULL;
$arguments624['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output621 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext)]);

$output621 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments628 = array();
$arguments628['key'] = NULL;
$arguments628['id'] = NULL;
$arguments628['default'] = NULL;
$arguments628['arguments'] = NULL;
$arguments628['extensionName'] = NULL;
$arguments628['languageKey'] = NULL;
$arguments628['alternativeLanguageKeys'] = NULL;
$arguments628['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments628, $renderChildrenClosure629, $renderingContext)]);
};
$arguments626 = array();
$arguments626['additionalAttributes'] = NULL;
$arguments626['data'] = NULL;
$arguments626['class'] = NULL;
$arguments626['dir'] = NULL;
$arguments626['id'] = NULL;
$arguments626['lang'] = NULL;
$arguments626['style'] = NULL;
$arguments626['title'] = NULL;
$arguments626['accesskey'] = NULL;
$arguments626['tabindex'] = NULL;
$arguments626['onclick'] = NULL;
$arguments626['name'] = NULL;
$arguments626['rel'] = NULL;
$arguments626['rev'] = NULL;
$arguments626['target'] = NULL;
$arguments626['action'] = NULL;
$arguments626['controller'] = NULL;
$arguments626['extensionName'] = NULL;
$arguments626['pluginName'] = NULL;
$arguments626['pageUid'] = NULL;
$arguments626['pageType'] = NULL;
$arguments626['noCache'] = NULL;
$arguments626['noCacheHash'] = NULL;
$arguments626['section'] = NULL;
$arguments626['format'] = NULL;
$arguments626['linkAccessRestrictedPages'] = NULL;
$arguments626['additionalParams'] = NULL;
$arguments626['absolute'] = NULL;
$arguments626['addQueryString'] = NULL;
$arguments626['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments626['addQueryStringMethod'] = NULL;
$arguments626['arguments'] = NULL;
$arguments626['action'] = 'newsPidListing';
$arguments626['class'] = 'btn btn-info';

$output621 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments626, $renderChildrenClosure627, $renderingContext);

$output621 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output621;
};
$arguments619 = array();
$arguments619['if'] = NULL;

$output612 .= '';

$output612 .= '
	';
return $output612;
};
$arguments594 = array();
$arguments594['then'] = NULL;
$arguments594['else'] = NULL;
$arguments594['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array609 = array();
$array610 = array (
);$array609['0'] = $renderingContext->getVariableProvider()->getByPath('newsCount', $array610);

$expression611 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments594['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression611(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array609)
					),
					$renderingContext
				);
$arguments594['__thenClosure'] = function() use ($renderingContext, $self) {
$output596 = '';

$output596 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
$array599 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array599);
};
$arguments597 = array();
$arguments597['value'] = NULL;

$output596 .= isset($arguments597['value']) ? $arguments597['value'] : $renderChildrenClosure598();

$output596 .= '
			</div>
		';
return $output596;
};
$arguments594['__elseClosures'][] = function() use ($renderingContext, $self) {
$output600 = '';

$output600 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure602 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments601 = array();
$arguments601['key'] = NULL;
$arguments601['id'] = NULL;
$arguments601['default'] = NULL;
$arguments601['arguments'] = NULL;
$arguments601['extensionName'] = NULL;
$arguments601['languageKey'] = NULL;
$arguments601['alternativeLanguageKeys'] = NULL;
$arguments601['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output600 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments601, $renderChildrenClosure602, $renderingContext)]);

$output600 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments603 = array();
$arguments603['key'] = NULL;
$arguments603['id'] = NULL;
$arguments603['default'] = NULL;
$arguments603['arguments'] = NULL;
$arguments603['extensionName'] = NULL;
$arguments603['languageKey'] = NULL;
$arguments603['alternativeLanguageKeys'] = NULL;
$arguments603['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output600 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments603, $renderChildrenClosure604, $renderingContext)]);

$output600 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure608 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments607 = array();
$arguments607['key'] = NULL;
$arguments607['id'] = NULL;
$arguments607['default'] = NULL;
$arguments607['arguments'] = NULL;
$arguments607['extensionName'] = NULL;
$arguments607['languageKey'] = NULL;
$arguments607['alternativeLanguageKeys'] = NULL;
$arguments607['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments607, $renderChildrenClosure608, $renderingContext)]);
};
$arguments605 = array();
$arguments605['additionalAttributes'] = NULL;
$arguments605['data'] = NULL;
$arguments605['class'] = NULL;
$arguments605['dir'] = NULL;
$arguments605['id'] = NULL;
$arguments605['lang'] = NULL;
$arguments605['style'] = NULL;
$arguments605['title'] = NULL;
$arguments605['accesskey'] = NULL;
$arguments605['tabindex'] = NULL;
$arguments605['onclick'] = NULL;
$arguments605['name'] = NULL;
$arguments605['rel'] = NULL;
$arguments605['rev'] = NULL;
$arguments605['target'] = NULL;
$arguments605['action'] = NULL;
$arguments605['controller'] = NULL;
$arguments605['extensionName'] = NULL;
$arguments605['pluginName'] = NULL;
$arguments605['pageUid'] = NULL;
$arguments605['pageType'] = NULL;
$arguments605['noCache'] = NULL;
$arguments605['noCacheHash'] = NULL;
$arguments605['section'] = NULL;
$arguments605['format'] = NULL;
$arguments605['linkAccessRestrictedPages'] = NULL;
$arguments605['additionalParams'] = NULL;
$arguments605['absolute'] = NULL;
$arguments605['addQueryString'] = NULL;
$arguments605['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments605['addQueryStringMethod'] = NULL;
$arguments605['arguments'] = NULL;
$arguments605['action'] = 'newsPidListing';
$arguments605['class'] = 'btn btn-info';

$output600 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments605, $renderChildrenClosure606, $renderingContext);

$output600 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output600;
};

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext);

$output348 .= '
	<script type="text/javascript">
		T3_THIS_LOCATION = ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
$array632 = array (
);return $renderingContext->getVariableProvider()->getByPath('requestUri', $array632);
};
$arguments630 = array();
$arguments630['value'] = NULL;

$output348 .= isset($arguments630['value']) ? $arguments630['value'] : $renderChildrenClosure631();

$output348 .= ';

        function jumpToUrl(URL) {
            window.location.href = URL;
            return false;
        }
        function jumpExt(URL,anchor) {	//
            var anc = anchor?anchor:"";
            window.location.href = URL+(T3_THIS_LOCATION?"&returnUrl="+T3_THIS_LOCATION:"")+anc;
            return false;
        }
        function jumpSelf(URL) {	//
            window.location.href = URL+(T3_RETURN_URL?"&returnUrl="+T3_RETURN_URL:"");
            return false;
        }
	</script>
';
return $output348;
};
$arguments346 = array();
$arguments346['name'] = NULL;
$arguments346['name'] = 'content';

$output313 .= NULL;

$output313 .= '

';

return $output313;
}


}
#