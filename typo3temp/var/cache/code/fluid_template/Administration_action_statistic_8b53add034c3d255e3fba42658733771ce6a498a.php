<?php

class Administration_action_statistic_8b53add034c3d255e3fba42658733771ce6a498a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Administration';
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
  'is' => 
  array (
    0 => 'TYPO3\\CMS\\IndexedSearch\\ViewHelpers',
  ),
));
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output433 = '';

$output433 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
$output436 = '';

$output436 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
$output441 = '';

$output441 .= '
				<div class="form-group">
					<div class="col-sm-12">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments442 = array();
$arguments442['additionalAttributes'] = NULL;
$arguments442['data'] = NULL;
$arguments442['name'] = NULL;
$arguments442['value'] = NULL;
$arguments442['property'] = NULL;
$arguments442['class'] = NULL;
$arguments442['dir'] = NULL;
$arguments442['id'] = NULL;
$arguments442['lang'] = NULL;
$arguments442['style'] = NULL;
$arguments442['title'] = NULL;
$arguments442['accesskey'] = NULL;
$arguments442['tabindex'] = NULL;
$arguments442['onclick'] = NULL;
$arguments442['size'] = NULL;
$arguments442['disabled'] = NULL;
$arguments442['options'] = NULL;
$arguments442['optionsAfterContent'] = false;
$arguments442['optionValueField'] = NULL;
$arguments442['optionLabelField'] = NULL;
$arguments442['sortByOptionLabel'] = false;
$arguments442['selectAllByDefault'] = false;
$arguments442['errorClass'] = 'f3-form-error';
$arguments442['prependOptionLabel'] = NULL;
$arguments442['prependOptionValue'] = NULL;
$arguments442['multiple'] = false;
$arguments442['required'] = false;
$arguments442['name'] = 'mode';
// Rendering Array
$array444 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments445 = array();
$arguments445['key'] = NULL;
$arguments445['id'] = NULL;
$arguments445['default'] = NULL;
$arguments445['arguments'] = NULL;
$arguments445['extensionName'] = NULL;
$arguments445['languageKey'] = NULL;
$arguments445['alternativeLanguageKeys'] = NULL;
$arguments445['key'] = 'administration.statistics.view.overview';
$array444['overview'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['key'] = NULL;
$arguments447['id'] = NULL;
$arguments447['default'] = NULL;
$arguments447['arguments'] = NULL;
$arguments447['extensionName'] = NULL;
$arguments447['languageKey'] = NULL;
$arguments447['alternativeLanguageKeys'] = NULL;
$arguments447['key'] = 'administration.statistics.view.content';
$array444['content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);
$arguments442['options'] = $array444;
$array449 = array (
);$arguments442['value'] = $renderingContext->getVariableProvider()->getByPath('mode', $array449);
// Rendering Array
$array450 = array();
$array450['onchange'] = 'this.form.submit();';
$arguments442['additionalAttributes'] = $array450;

$output441 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output441 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['additionalAttributes'] = NULL;
$arguments451['data'] = NULL;
$arguments451['name'] = NULL;
$arguments451['value'] = NULL;
$arguments451['property'] = NULL;
$arguments451['class'] = NULL;
$arguments451['dir'] = NULL;
$arguments451['id'] = NULL;
$arguments451['lang'] = NULL;
$arguments451['style'] = NULL;
$arguments451['title'] = NULL;
$arguments451['accesskey'] = NULL;
$arguments451['tabindex'] = NULL;
$arguments451['onclick'] = NULL;
$arguments451['size'] = NULL;
$arguments451['disabled'] = NULL;
$arguments451['options'] = NULL;
$arguments451['optionsAfterContent'] = false;
$arguments451['optionValueField'] = NULL;
$arguments451['optionLabelField'] = NULL;
$arguments451['sortByOptionLabel'] = false;
$arguments451['selectAllByDefault'] = false;
$arguments451['errorClass'] = 'f3-form-error';
$arguments451['prependOptionLabel'] = NULL;
$arguments451['prependOptionValue'] = NULL;
$arguments451['multiple'] = false;
$arguments451['required'] = false;
$arguments451['name'] = 'depth';
$array453 = array (
);$arguments451['options'] = $renderingContext->getVariableProvider()->getByPath('levelTranslations', $array453);
$array454 = array (
);$arguments451['value'] = $renderingContext->getVariableProvider()->getByPath('depth', $array454);
// Rendering Array
$array455 = array();
$array455['onchange'] = 'this.form.submit();';
$arguments451['additionalAttributes'] = $array455;

$output441 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);

$output441 .= '
					</div>
				</div>
			';
return $output441;
};
$arguments437 = array();
$arguments437['additionalAttributes'] = NULL;
$arguments437['data'] = NULL;
$arguments437['action'] = NULL;
$arguments437['arguments'] = array (
);
$arguments437['controller'] = NULL;
$arguments437['extensionName'] = NULL;
$arguments437['pluginName'] = NULL;
$arguments437['pageUid'] = NULL;
$arguments437['object'] = NULL;
$arguments437['pageType'] = 0;
$arguments437['noCache'] = false;
$arguments437['noCacheHash'] = false;
$arguments437['section'] = '';
$arguments437['format'] = '';
$arguments437['additionalParams'] = array (
);
$arguments437['absolute'] = false;
$arguments437['addQueryString'] = false;
$arguments437['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments437['addQueryStringMethod'] = 'GET';
$arguments437['fieldNamePrefix'] = NULL;
$arguments437['actionUri'] = NULL;
$arguments437['objectName'] = NULL;
$arguments437['hiddenFieldClassName'] = NULL;
$arguments437['enctype'] = NULL;
$arguments437['method'] = NULL;
$arguments437['name'] = NULL;
$arguments437['onreset'] = NULL;
$arguments437['onsubmit'] = NULL;
$arguments437['target'] = NULL;
$arguments437['novalidate'] = NULL;
$arguments437['class'] = NULL;
$arguments437['dir'] = NULL;
$arguments437['id'] = NULL;
$arguments437['lang'] = NULL;
$arguments437['style'] = NULL;
$arguments437['title'] = NULL;
$arguments437['accesskey'] = NULL;
$arguments437['tabindex'] = NULL;
$arguments437['onclick'] = NULL;
$arguments437['name'] = 'statistic';
$arguments437['action'] = 'statistic';
$arguments437['class'] = 'form-horizontal';
// Rendering Array
$array439 = array();
$array440 = array (
);$array439['id'] = $renderingContext->getVariableProvider()->getByPath('pageUid', $array440);
$arguments437['arguments'] = $array439;

$output436 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);

$output436 .= '
			<table class="table table-striped table-hover table-vertical-top">
				<thead>
					<tr>
						<th></th>
						<th>
							<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['action'] = NULL;
$arguments456['arguments'] = array (
);
$arguments456['controller'] = NULL;
$arguments456['extensionName'] = NULL;
$arguments456['pluginName'] = NULL;
$arguments456['pageUid'] = NULL;
$arguments456['pageType'] = 0;
$arguments456['noCache'] = false;
$arguments456['noCacheHash'] = false;
$arguments456['section'] = '';
$arguments456['format'] = '';
$arguments456['linkAccessRestrictedPages'] = false;
$arguments456['additionalParams'] = array (
);
$arguments456['absolute'] = false;
$arguments456['addQueryString'] = false;
$arguments456['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments456['addQueryStringMethod'] = NULL;
$arguments456['action'] = 'deleteIndexedItem';
// Rendering Array
$array458 = array();
$array458['id'] = 'ALL';
$array459 = array (
);$array458['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array459);
$array460 = array (
);$array458['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array460);
$arguments456['arguments'] = $array458;

$output436 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext)]);

$output436 .= '" title="';
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
$arguments461['key'] = 'administration.removeAllEntries';

$output436 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext)]);

$output436 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();
$arguments463['identifier'] = NULL;
$arguments463['size'] = 'small';
$arguments463['overlay'] = NULL;
$arguments463['state'] = 'default';
$arguments463['alternativeMarkupIdentifier'] = NULL;
$arguments463['identifier'] = 'actions-edit-delete';

$output436 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output436 .= '
							</a>
						</th>
						<th>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['key'] = NULL;
$arguments465['id'] = NULL;
$arguments465['default'] = NULL;
$arguments465['arguments'] = NULL;
$arguments465['extensionName'] = NULL;
$arguments465['languageKey'] = NULL;
$arguments465['alternativeLanguageKeys'] = NULL;
$arguments465['key'] = 'field.fileName';

$output436 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext)]);

$output436 .= '
						</th>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$output507 = '';

$output507 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output510 = '';

$output510 .= '
								<th>
									';
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
$arguments511['key'] = 'field.content';

$output510 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext)]);

$output510 .= '
								</th>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
$output518 = '';

$output518 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments519 = array();
$arguments519['key'] = NULL;
$arguments519['id'] = NULL;
$arguments519['default'] = NULL;
$arguments519['arguments'] = NULL;
$arguments519['extensionName'] = NULL;
$arguments519['languageKey'] = NULL;
$arguments519['alternativeLanguageKeys'] = NULL;
$arguments519['key'] = 'field.words';

$output518 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext)]);

$output518 .= '
									</th>
								';
return $output518;
};
$arguments513 = array();
$arguments513['then'] = NULL;
$arguments513['else'] = NULL;
$arguments513['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array515 = array();
$array516 = array (
);$array515['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array516);
$array515['1'] = ' == false';

$expression517 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments513['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression517(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array515)
					),
					$renderingContext
				);
$arguments513['__thenClosure'] = $renderChildrenClosure514;

$output510 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output510 .= '
							';
return $output510;
};
$arguments508 = array();
$arguments508['value'] = NULL;
$arguments508['value'] = 'content';

$output507 .= '';

$output507 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
$output523 = '';

$output523 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
$output529 = '';

$output529 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments530 = array();
$arguments530['key'] = NULL;
$arguments530['id'] = NULL;
$arguments530['default'] = NULL;
$arguments530['arguments'] = NULL;
$arguments530['extensionName'] = NULL;
$arguments530['languageKey'] = NULL;
$arguments530['alternativeLanguageKeys'] = NULL;
$arguments530['key'] = 'field.wordCount';

$output529 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext)]);

$output529 .= '
									</th>
								';
return $output529;
};
$arguments524 = array();
$arguments524['then'] = NULL;
$arguments524['else'] = NULL;
$arguments524['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array526 = array();
$array527 = array (
);$array526['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array527);
$array526['1'] = ' == false';

$expression528 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments524['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression528(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array526)
					),
					$renderingContext
				);
$arguments524['__thenClosure'] = $renderChildrenClosure525;

$output523 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output523 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments532 = array();
$arguments532['key'] = NULL;
$arguments532['id'] = NULL;
$arguments532['default'] = NULL;
$arguments532['arguments'] = NULL;
$arguments532['extensionName'] = NULL;
$arguments532['languageKey'] = NULL;
$arguments532['alternativeLanguageKeys'] = NULL;
$arguments532['key'] = 'field.fileSize';

$output523 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext)]);

$output523 .= '
								</th>
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments534 = array();
$arguments534['key'] = NULL;
$arguments534['id'] = NULL;
$arguments534['default'] = NULL;
$arguments534['arguments'] = NULL;
$arguments534['extensionName'] = NULL;
$arguments534['languageKey'] = NULL;
$arguments534['alternativeLanguageKeys'] = NULL;
$arguments534['key'] = 'field.indexed';

$output523 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext)]);

$output523 .= '
								</th>
							';
return $output523;
};
$arguments521 = array();

$output507 .= '';

$output507 .= '
						';
return $output507;
};
$arguments467 = array();
$arguments467['expression'] = NULL;
$array506 = array (
);$arguments467['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array506);

$output436 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
								<th>
									';
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
$arguments470['key'] = 'field.content';

$output469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext)]);

$output469 .= '
								</th>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
									<th>
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
$arguments478['key'] = 'field.words';

$output477 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext)]);

$output477 .= '
									</th>
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
);$array474['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array475);
$array474['1'] = ' == false';

$expression476 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments472['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression476(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array474)
					),
					$renderingContext
				);
$arguments472['__thenClosure'] = $renderChildrenClosure473;

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output469 .= '
							';
return $output469;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output493 = '';

$output493 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$output499 = '';

$output499 .= '
									<th>
										';
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
$arguments500['key'] = 'field.wordCount';

$output499 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext)]);

$output499 .= '
									</th>
								';
return $output499;
};
$arguments494 = array();
$arguments494['then'] = NULL;
$arguments494['else'] = NULL;
$arguments494['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array496 = array();
$array497 = array (
);$array496['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array497);
$array496['1'] = ' == false';

$expression498 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments494['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression498(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array496)
					),
					$renderingContext
				);
$arguments494['__thenClosure'] = $renderChildrenClosure495;

$output493 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);

$output493 .= '
								<th>
									';
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
$arguments502['key'] = 'field.fileSize';

$output493 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments502, $renderChildrenClosure503, $renderingContext)]);

$output493 .= '
								</th>
								<th>
									';
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
$arguments504['key'] = 'field.indexed';

$output493 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext)]);

$output493 .= '
								</th>
							';
return $output493;
});
}
}, array($arguments467));

$output436 .= '
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$output539 = '';

$output539 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
$output700 = '';

$output700 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
$output703 = '';

$output703 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure705 = function() use ($renderingContext, $self) {
$output707 = '';

$output707 .= '
									<tr>
										<td class="nowrap">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
$array710 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array710);
};
$arguments708 = array();
$arguments708['value'] = NULL;

$output707 .= isset($arguments708['value']) ? $arguments708['value'] : $renderChildrenClosure709();

$output707 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
$output716 = '';

$output716 .= ' ';
$array717 = array (
);
$output716 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array717)]);
return $output716;
};
$arguments711 = array();
$arguments711['then'] = NULL;
$arguments711['else'] = NULL;
$arguments711['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array713 = array();
$array714 = array (
);$array713['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array714);
$array713['1'] = ' == 0';

$expression715 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments711['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression715(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array713)
					),
					$renderingContext
				);
$arguments711['__thenClosure'] = $renderChildrenClosure712;

$output707 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext);

$output707 .= '
										</td>
										<td>
											<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments718 = array();
$arguments718['action'] = NULL;
$arguments718['arguments'] = array (
);
$arguments718['controller'] = NULL;
$arguments718['extensionName'] = NULL;
$arguments718['pluginName'] = NULL;
$arguments718['pageUid'] = NULL;
$arguments718['pageType'] = 0;
$arguments718['noCache'] = false;
$arguments718['noCacheHash'] = false;
$arguments718['section'] = '';
$arguments718['format'] = '';
$arguments718['linkAccessRestrictedPages'] = false;
$arguments718['additionalParams'] = array (
);
$arguments718['absolute'] = false;
$arguments718['addQueryString'] = false;
$arguments718['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments718['addQueryStringMethod'] = NULL;
$arguments718['action'] = 'deleteIndexedItem';
// Rendering Array
$array720 = array();
$array721 = array (
);$array720['id'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array721);
$array722 = array (
);$array720['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array722);
$array723 = array (
);$array720['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array723);
$arguments718['arguments'] = $array720;

$output707 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments718, $renderChildrenClosure719, $renderingContext)]);

$output707 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure725 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments724 = array();
$arguments724['key'] = NULL;
$arguments724['id'] = NULL;
$arguments724['default'] = NULL;
$arguments724['arguments'] = NULL;
$arguments724['extensionName'] = NULL;
$arguments724['languageKey'] = NULL;
$arguments724['alternativeLanguageKeys'] = NULL;
$arguments724['key'] = 'administration.removeEntry';

$output707 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments724, $renderChildrenClosure725, $renderingContext)]);

$output707 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments726 = array();
$arguments726['identifier'] = NULL;
$arguments726['size'] = 'small';
$arguments726['overlay'] = NULL;
$arguments726['state'] = 'default';
$arguments726['alternativeMarkupIdentifier'] = NULL;
$arguments726['identifier'] = 'actions-edit-delete';

$output707 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext);

$output707 .= '
											</a>
										</td>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments728 = array();
$arguments728['additionalAttributes'] = NULL;
$arguments728['data'] = NULL;
$arguments728['class'] = NULL;
$arguments728['dir'] = NULL;
$arguments728['id'] = NULL;
$arguments728['lang'] = NULL;
$arguments728['style'] = NULL;
$arguments728['title'] = NULL;
$arguments728['accesskey'] = NULL;
$arguments728['tabindex'] = NULL;
$arguments728['onclick'] = NULL;
$arguments728['alt'] = NULL;
$arguments728['ismap'] = NULL;
$arguments728['longdesc'] = NULL;
$arguments728['usemap'] = NULL;
$arguments728['src'] = NULL;
$arguments728['treatIdAsReference'] = NULL;
$arguments728['image'] = NULL;
$arguments728['crop'] = NULL;
$arguments728['cropVariant'] = 'default';
$arguments728['width'] = NULL;
$arguments728['height'] = NULL;
$arguments728['minWidth'] = NULL;
$arguments728['minHeight'] = NULL;
$arguments728['maxWidth'] = NULL;
$arguments728['maxHeight'] = NULL;
$arguments728['absolute'] = false;
$array730 = array (
);$arguments728['src'] = $renderingContext->getVariableProvider()->getByPath('l.icon', $array730);

$output707 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext);

$output707 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure732 = function() use ($renderingContext, $self) {
$array735 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.item_title', $array735)]);
};
$arguments731 = array();
$arguments731['additionalAttributes'] = NULL;
$arguments731['data'] = NULL;
$arguments731['class'] = NULL;
$arguments731['dir'] = NULL;
$arguments731['id'] = NULL;
$arguments731['lang'] = NULL;
$arguments731['style'] = NULL;
$arguments731['title'] = NULL;
$arguments731['accesskey'] = NULL;
$arguments731['tabindex'] = NULL;
$arguments731['onclick'] = NULL;
$arguments731['name'] = NULL;
$arguments731['rel'] = NULL;
$arguments731['rev'] = NULL;
$arguments731['target'] = NULL;
$arguments731['action'] = NULL;
$arguments731['controller'] = NULL;
$arguments731['extensionName'] = NULL;
$arguments731['pluginName'] = NULL;
$arguments731['pageUid'] = NULL;
$arguments731['pageType'] = NULL;
$arguments731['noCache'] = NULL;
$arguments731['noCacheHash'] = NULL;
$arguments731['section'] = NULL;
$arguments731['format'] = NULL;
$arguments731['linkAccessRestrictedPages'] = NULL;
$arguments731['additionalParams'] = NULL;
$arguments731['absolute'] = NULL;
$arguments731['addQueryString'] = NULL;
$arguments731['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments731['addQueryStringMethod'] = NULL;
$arguments731['arguments'] = NULL;
$arguments731['action'] = 'statisticDetails';
// Rendering Array
$array733 = array();
$array734 = array (
);$array733['pageHash'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array734);
$arguments731['arguments'] = $array733;

$output707 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments731, $renderChildrenClosure732, $renderingContext);

$output707 .= '
										</td>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure737 = function() use ($renderingContext, $self) {
$output791 = '';

$output791 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure793 = function() use ($renderingContext, $self) {
$output794 = '';

$output794 .= '
												<td>
													';
$array795 = array (
);
$output794 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array795)]);

$output794 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure797 = function() use ($renderingContext, $self) {
$output801 = '';

$output801 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure803 = function() use ($renderingContext, $self) {
$output805 = '';

$output805 .= '
															';
$array806 = array (
);
$output805 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array806)]);

$output805 .= '
														';
return $output805;
};
$arguments802 = array();
$arguments802['each'] = NULL;
$arguments802['as'] = NULL;
$arguments802['key'] = NULL;
$arguments802['reverse'] = false;
$arguments802['iteration'] = NULL;
$array804 = array (
);$arguments802['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array804);
$arguments802['as'] = 'w';

$output801 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments802, $renderChildrenClosure803, $renderingContext);

$output801 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure808 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments807 = array();
$arguments807['key'] = NULL;
$arguments807['id'] = NULL;
$arguments807['default'] = NULL;
$arguments807['arguments'] = NULL;
$arguments807['extensionName'] = NULL;
$arguments807['languageKey'] = NULL;
$arguments807['alternativeLanguageKeys'] = NULL;
$arguments807['key'] = 'administration.statistics.count';

$output801 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments807, $renderChildrenClosure808, $renderingContext)]);

$output801 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure810 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments809 = array();
$arguments809['subject'] = NULL;
$array811 = array (
);$arguments809['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array811);
$renderChildrenClosure810 = ($arguments809['subject'] !== null) ? function() use ($arguments809) { return $arguments809['subject']; } : $renderChildrenClosure810;
$output801 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments809, $renderChildrenClosure810, $renderingContext);

$output801 .= '</em>
													</td>
												';
return $output801;
};
$arguments796 = array();
$arguments796['then'] = NULL;
$arguments796['else'] = NULL;
$arguments796['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array798 = array();
$array799 = array (
);$array798['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array799);
$array798['1'] = ' == false';

$expression800 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments796['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression800(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array798)
					),
					$renderingContext
				);
$arguments796['__thenClosure'] = $renderChildrenClosure797;

$output794 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments796, $renderChildrenClosure797, $renderingContext);

$output794 .= '
											';
return $output794;
};
$arguments792 = array();
$arguments792['value'] = NULL;
$arguments792['value'] = 'content';

$output791 .= '';

$output791 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure813 = function() use ($renderingContext, $self) {
$output814 = '';

$output814 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure816 = function() use ($renderingContext, $self) {
$output820 = '';

$output820 .= '
													<td>';
$array821 = array (
);
$output820 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array821)]);

$output820 .= '</td>
												';
return $output820;
};
$arguments815 = array();
$arguments815['then'] = NULL;
$arguments815['else'] = NULL;
$arguments815['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array817 = array();
$array818 = array (
);$array817['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array818);
$array817['1'] = ' == false';

$expression819 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments815['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression819(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array817)
					),
					$renderingContext
				);
$arguments815['__thenClosure'] = $renderChildrenClosure816;

$output814 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments815, $renderChildrenClosure816, $renderingContext);

$output814 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure823 = function() use ($renderingContext, $self) {
$array824 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array824);
};
$arguments822 = array();
$arguments822['value'] = NULL;
$arguments822['decimals'] = 0;
$arguments822['decimalSeparator'] = '.';
$arguments822['thousandsSeparator'] = ',';
$arguments822['units'] = NULL;
$arguments822['decimals'] = 1;
$renderChildrenClosure823 = ($arguments822['value'] !== null) ? function() use ($arguments822) { return $arguments822['value']; } : $renderChildrenClosure823;
$output814 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments822, $renderChildrenClosure823, $renderingContext)]);

$output814 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure826 = function() use ($renderingContext, $self) {
$array827 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array827);
};
$arguments825 = array();

$output814 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments825, $renderChildrenClosure826, $renderingContext)]);

$output814 .= '
												</td>
											';
return $output814;
};
$arguments812 = array();

$output791 .= '';

$output791 .= '
										';
return $output791;
};
$arguments736 = array();
$arguments736['expression'] = NULL;
$array790 = array (
);$arguments736['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array790);

$output707 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output738 = '';

$output738 .= '
												<td>
													';
$array739 = array (
);
$output738 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array739)]);

$output738 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
$output745 = '';

$output745 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
$output749 = '';

$output749 .= '
															';
$array750 = array (
);
$output749 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array750)]);

$output749 .= '
														';
return $output749;
};
$arguments746 = array();
$arguments746['each'] = NULL;
$arguments746['as'] = NULL;
$arguments746['key'] = NULL;
$arguments746['reverse'] = false;
$arguments746['iteration'] = NULL;
$array748 = array (
);$arguments746['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array748);
$arguments746['as'] = 'w';

$output745 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments746, $renderChildrenClosure747, $renderingContext);

$output745 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure752 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments751 = array();
$arguments751['key'] = NULL;
$arguments751['id'] = NULL;
$arguments751['default'] = NULL;
$arguments751['arguments'] = NULL;
$arguments751['extensionName'] = NULL;
$arguments751['languageKey'] = NULL;
$arguments751['alternativeLanguageKeys'] = NULL;
$arguments751['key'] = 'administration.statistics.count';

$output745 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments751, $renderChildrenClosure752, $renderingContext)]);

$output745 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure754 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments753 = array();
$arguments753['subject'] = NULL;
$array755 = array (
);$arguments753['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array755);
$renderChildrenClosure754 = ($arguments753['subject'] !== null) ? function() use ($arguments753) { return $arguments753['subject']; } : $renderChildrenClosure754;
$output745 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments753, $renderChildrenClosure754, $renderingContext);

$output745 .= '</em>
													</td>
												';
return $output745;
};
$arguments740 = array();
$arguments740['then'] = NULL;
$arguments740['else'] = NULL;
$arguments740['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array742 = array();
$array743 = array (
);$array742['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array743);
$array742['1'] = ' == false';

$expression744 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments740['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression744(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array742)
					),
					$renderingContext
				);
$arguments740['__thenClosure'] = $renderChildrenClosure741;

$output738 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments740, $renderChildrenClosure741, $renderingContext);

$output738 .= '
											';
return $output738;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output776 = '';

$output776 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure778 = function() use ($renderingContext, $self) {
$output782 = '';

$output782 .= '
													<td>';
$array783 = array (
);
$output782 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array783)]);

$output782 .= '</td>
												';
return $output782;
};
$arguments777 = array();
$arguments777['then'] = NULL;
$arguments777['else'] = NULL;
$arguments777['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array779 = array();
$array780 = array (
);$array779['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array780);
$array779['1'] = ' == false';

$expression781 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments777['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression781(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array779)
					),
					$renderingContext
				);
$arguments777['__thenClosure'] = $renderChildrenClosure778;

$output776 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments777, $renderChildrenClosure778, $renderingContext);

$output776 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure785 = function() use ($renderingContext, $self) {
$array786 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array786);
};
$arguments784 = array();
$arguments784['value'] = NULL;
$arguments784['decimals'] = 0;
$arguments784['decimalSeparator'] = '.';
$arguments784['thousandsSeparator'] = ',';
$arguments784['units'] = NULL;
$arguments784['decimals'] = 1;
$renderChildrenClosure785 = ($arguments784['value'] !== null) ? function() use ($arguments784) { return $arguments784['value']; } : $renderChildrenClosure785;
$output776 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments784, $renderChildrenClosure785, $renderingContext)]);

$output776 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure788 = function() use ($renderingContext, $self) {
$array789 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array789);
};
$arguments787 = array();

$output776 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments787, $renderChildrenClosure788, $renderingContext)]);

$output776 .= '
												</td>
											';
return $output776;
});
}
}, array($arguments736));

$output707 .= '
									</tr>
								';
return $output707;
};
$arguments704 = array();
$arguments704['each'] = NULL;
$arguments704['as'] = NULL;
$arguments704['key'] = NULL;
$arguments704['reverse'] = false;
$arguments704['iteration'] = NULL;
$array706 = array (
);$arguments704['each'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array706);
$arguments704['as'] = 'l';
$arguments704['iteration'] = 'i';

$output703 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments704, $renderChildrenClosure705, $renderingContext);

$output703 .= '
							';
return $output703;
};
$arguments701 = array();

$output700 .= '';

$output700 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure829 = function() use ($renderingContext, $self) {
$output830 = '';

$output830 .= '
								<tr>
									<td class="nowrap">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure832 = function() use ($renderingContext, $self) {
$array833 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array833);
};
$arguments831 = array();
$arguments831['value'] = NULL;

$output830 .= isset($arguments831['value']) ? $arguments831['value'] : $renderChildrenClosure832();

$output830 .= ' ';
$array834 = array (
);
$output830 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array834)]);

$output830 .= '</td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure836 = function() use ($renderingContext, $self) {
$output849 = '';

$output849 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure851 = function() use ($renderingContext, $self) {
$output852 = '';

$output852 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure854 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments853 = array();
$arguments853['key'] = NULL;
$arguments853['id'] = NULL;
$arguments853['default'] = NULL;
$arguments853['arguments'] = NULL;
$arguments853['extensionName'] = NULL;
$arguments853['languageKey'] = NULL;
$arguments853['alternativeLanguageKeys'] = NULL;
$arguments853['key'] = 'administration.notIndexed';

$output852 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments853, $renderChildrenClosure854, $renderingContext)]);

$output852 .= '
											</td>
										';
return $output852;
};
$arguments850 = array();
$arguments850['value'] = NULL;
$arguments850['value'] = 'content';

$output849 .= '';

$output849 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure856 = function() use ($renderingContext, $self) {
$output857 = '';

$output857 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure859 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments858 = array();
$arguments858['key'] = NULL;
$arguments858['id'] = NULL;
$arguments858['default'] = NULL;
$arguments858['arguments'] = NULL;
$arguments858['extensionName'] = NULL;
$arguments858['languageKey'] = NULL;
$arguments858['alternativeLanguageKeys'] = NULL;
$arguments858['key'] = 'administration.notIndexed';

$output857 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments858, $renderChildrenClosure859, $renderingContext)]);

$output857 .= '
											</td>
										';
return $output857;
};
$arguments855 = array();

$output849 .= '';

$output849 .= '
									';
return $output849;
};
$arguments835 = array();
$arguments835['expression'] = NULL;
$array848 = array (
);$arguments835['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array848);

$output830 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output837 = '';

$output837 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure839 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments838 = array();
$arguments838['key'] = NULL;
$arguments838['id'] = NULL;
$arguments838['default'] = NULL;
$arguments838['arguments'] = NULL;
$arguments838['extensionName'] = NULL;
$arguments838['languageKey'] = NULL;
$arguments838['alternativeLanguageKeys'] = NULL;
$arguments838['key'] = 'administration.notIndexed';

$output837 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments838, $renderChildrenClosure839, $renderingContext)]);

$output837 .= '
											</td>
										';
return $output837;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output845 = '';

$output845 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure847 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments846 = array();
$arguments846['key'] = NULL;
$arguments846['id'] = NULL;
$arguments846['default'] = NULL;
$arguments846['arguments'] = NULL;
$arguments846['extensionName'] = NULL;
$arguments846['languageKey'] = NULL;
$arguments846['alternativeLanguageKeys'] = NULL;
$arguments846['key'] = 'administration.notIndexed';

$output845 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments846, $renderChildrenClosure847, $renderingContext)]);

$output845 .= '
											</td>
										';
return $output845;
});
}
}, array($arguments835));

$output830 .= '
								</tr>
							';
return $output830;
};
$arguments828 = array();
$arguments828['if'] = NULL;

$output700 .= '';

$output700 .= '
						';
return $output700;
};
$arguments540 = array();
$arguments540['then'] = NULL;
$arguments540['else'] = NULL;
$arguments540['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array697 = array();
$array698 = array (
);$array697['0'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array698);

$expression699 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments540['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression699(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array697)
					),
					$renderingContext
				);
$arguments540['__thenClosure'] = function() use ($renderingContext, $self) {
$output542 = '';

$output542 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure544 = function() use ($renderingContext, $self) {
$output546 = '';

$output546 .= '
									<tr>
										<td class="nowrap">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
$array549 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array549);
};
$arguments547 = array();
$arguments547['value'] = NULL;

$output546 .= isset($arguments547['value']) ? $arguments547['value'] : $renderChildrenClosure548();

$output546 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
$output555 = '';

$output555 .= ' ';
$array556 = array (
);
$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array556)]);
return $output555;
};
$arguments550 = array();
$arguments550['then'] = NULL;
$arguments550['else'] = NULL;
$arguments550['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array552 = array();
$array553 = array (
);$array552['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array553);
$array552['1'] = ' == 0';

$expression554 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments550['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression554(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array552)
					),
					$renderingContext
				);
$arguments550['__thenClosure'] = $renderChildrenClosure551;

$output546 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);

$output546 .= '
										</td>
										<td>
											<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure558 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments557 = array();
$arguments557['action'] = NULL;
$arguments557['arguments'] = array (
);
$arguments557['controller'] = NULL;
$arguments557['extensionName'] = NULL;
$arguments557['pluginName'] = NULL;
$arguments557['pageUid'] = NULL;
$arguments557['pageType'] = 0;
$arguments557['noCache'] = false;
$arguments557['noCacheHash'] = false;
$arguments557['section'] = '';
$arguments557['format'] = '';
$arguments557['linkAccessRestrictedPages'] = false;
$arguments557['additionalParams'] = array (
);
$arguments557['absolute'] = false;
$arguments557['addQueryString'] = false;
$arguments557['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments557['addQueryStringMethod'] = NULL;
$arguments557['action'] = 'deleteIndexedItem';
// Rendering Array
$array559 = array();
$array560 = array (
);$array559['id'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array560);
$array561 = array (
);$array559['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array561);
$array562 = array (
);$array559['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array562);
$arguments557['arguments'] = $array559;

$output546 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments557, $renderChildrenClosure558, $renderingContext)]);

$output546 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments563 = array();
$arguments563['key'] = NULL;
$arguments563['id'] = NULL;
$arguments563['default'] = NULL;
$arguments563['arguments'] = NULL;
$arguments563['extensionName'] = NULL;
$arguments563['languageKey'] = NULL;
$arguments563['alternativeLanguageKeys'] = NULL;
$arguments563['key'] = 'administration.removeEntry';

$output546 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext)]);

$output546 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments565 = array();
$arguments565['identifier'] = NULL;
$arguments565['size'] = 'small';
$arguments565['overlay'] = NULL;
$arguments565['state'] = 'default';
$arguments565['alternativeMarkupIdentifier'] = NULL;
$arguments565['identifier'] = 'actions-edit-delete';

$output546 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output546 .= '
											</a>
										</td>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments567 = array();
$arguments567['additionalAttributes'] = NULL;
$arguments567['data'] = NULL;
$arguments567['class'] = NULL;
$arguments567['dir'] = NULL;
$arguments567['id'] = NULL;
$arguments567['lang'] = NULL;
$arguments567['style'] = NULL;
$arguments567['title'] = NULL;
$arguments567['accesskey'] = NULL;
$arguments567['tabindex'] = NULL;
$arguments567['onclick'] = NULL;
$arguments567['alt'] = NULL;
$arguments567['ismap'] = NULL;
$arguments567['longdesc'] = NULL;
$arguments567['usemap'] = NULL;
$arguments567['src'] = NULL;
$arguments567['treatIdAsReference'] = NULL;
$arguments567['image'] = NULL;
$arguments567['crop'] = NULL;
$arguments567['cropVariant'] = 'default';
$arguments567['width'] = NULL;
$arguments567['height'] = NULL;
$arguments567['minWidth'] = NULL;
$arguments567['minHeight'] = NULL;
$arguments567['maxWidth'] = NULL;
$arguments567['maxHeight'] = NULL;
$arguments567['absolute'] = false;
$array569 = array (
);$arguments567['src'] = $renderingContext->getVariableProvider()->getByPath('l.icon', $array569);

$output546 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments567, $renderChildrenClosure568, $renderingContext);

$output546 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
$array574 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.item_title', $array574)]);
};
$arguments570 = array();
$arguments570['additionalAttributes'] = NULL;
$arguments570['data'] = NULL;
$arguments570['class'] = NULL;
$arguments570['dir'] = NULL;
$arguments570['id'] = NULL;
$arguments570['lang'] = NULL;
$arguments570['style'] = NULL;
$arguments570['title'] = NULL;
$arguments570['accesskey'] = NULL;
$arguments570['tabindex'] = NULL;
$arguments570['onclick'] = NULL;
$arguments570['name'] = NULL;
$arguments570['rel'] = NULL;
$arguments570['rev'] = NULL;
$arguments570['target'] = NULL;
$arguments570['action'] = NULL;
$arguments570['controller'] = NULL;
$arguments570['extensionName'] = NULL;
$arguments570['pluginName'] = NULL;
$arguments570['pageUid'] = NULL;
$arguments570['pageType'] = NULL;
$arguments570['noCache'] = NULL;
$arguments570['noCacheHash'] = NULL;
$arguments570['section'] = NULL;
$arguments570['format'] = NULL;
$arguments570['linkAccessRestrictedPages'] = NULL;
$arguments570['additionalParams'] = NULL;
$arguments570['absolute'] = NULL;
$arguments570['addQueryString'] = NULL;
$arguments570['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments570['addQueryStringMethod'] = NULL;
$arguments570['arguments'] = NULL;
$arguments570['action'] = 'statisticDetails';
// Rendering Array
$array572 = array();
$array573 = array (
);$array572['pageHash'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array573);
$arguments570['arguments'] = $array572;

$output546 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output546 .= '
										</td>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
$output630 = '';

$output630 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure632 = function() use ($renderingContext, $self) {
$output633 = '';

$output633 .= '
												<td>
													';
$array634 = array (
);
$output633 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array634)]);

$output633 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure636 = function() use ($renderingContext, $self) {
$output640 = '';

$output640 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure642 = function() use ($renderingContext, $self) {
$output644 = '';

$output644 .= '
															';
$array645 = array (
);
$output644 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array645)]);

$output644 .= '
														';
return $output644;
};
$arguments641 = array();
$arguments641['each'] = NULL;
$arguments641['as'] = NULL;
$arguments641['key'] = NULL;
$arguments641['reverse'] = false;
$arguments641['iteration'] = NULL;
$array643 = array (
);$arguments641['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array643);
$arguments641['as'] = 'w';

$output640 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments641, $renderChildrenClosure642, $renderingContext);

$output640 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments646 = array();
$arguments646['key'] = NULL;
$arguments646['id'] = NULL;
$arguments646['default'] = NULL;
$arguments646['arguments'] = NULL;
$arguments646['extensionName'] = NULL;
$arguments646['languageKey'] = NULL;
$arguments646['alternativeLanguageKeys'] = NULL;
$arguments646['key'] = 'administration.statistics.count';

$output640 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext)]);

$output640 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments648 = array();
$arguments648['subject'] = NULL;
$array650 = array (
);$arguments648['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array650);
$renderChildrenClosure649 = ($arguments648['subject'] !== null) ? function() use ($arguments648) { return $arguments648['subject']; } : $renderChildrenClosure649;
$output640 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);

$output640 .= '</em>
													</td>
												';
return $output640;
};
$arguments635 = array();
$arguments635['then'] = NULL;
$arguments635['else'] = NULL;
$arguments635['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array637 = array();
$array638 = array (
);$array637['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array638);
$array637['1'] = ' == false';

$expression639 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments635['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression639(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array637)
					),
					$renderingContext
				);
$arguments635['__thenClosure'] = $renderChildrenClosure636;

$output633 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments635, $renderChildrenClosure636, $renderingContext);

$output633 .= '
											';
return $output633;
};
$arguments631 = array();
$arguments631['value'] = NULL;
$arguments631['value'] = 'content';

$output630 .= '';

$output630 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
$output653 = '';

$output653 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$output659 = '';

$output659 .= '
													<td>';
$array660 = array (
);
$output659 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array660)]);

$output659 .= '</td>
												';
return $output659;
};
$arguments654 = array();
$arguments654['then'] = NULL;
$arguments654['else'] = NULL;
$arguments654['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array656 = array();
$array657 = array (
);$array656['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array657);
$array656['1'] = ' == false';

$expression658 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments654['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression658(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array656)
					),
					$renderingContext
				);
$arguments654['__thenClosure'] = $renderChildrenClosure655;

$output653 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);

$output653 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure662 = function() use ($renderingContext, $self) {
$array663 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array663);
};
$arguments661 = array();
$arguments661['value'] = NULL;
$arguments661['decimals'] = 0;
$arguments661['decimalSeparator'] = '.';
$arguments661['thousandsSeparator'] = ',';
$arguments661['units'] = NULL;
$arguments661['decimals'] = 1;
$renderChildrenClosure662 = ($arguments661['value'] !== null) ? function() use ($arguments661) { return $arguments661['value']; } : $renderChildrenClosure662;
$output653 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments661, $renderChildrenClosure662, $renderingContext)]);

$output653 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
$array666 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array666);
};
$arguments664 = array();

$output653 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments664, $renderChildrenClosure665, $renderingContext)]);

$output653 .= '
												</td>
											';
return $output653;
};
$arguments651 = array();

$output630 .= '';

$output630 .= '
										';
return $output630;
};
$arguments575 = array();
$arguments575['expression'] = NULL;
$array629 = array (
);$arguments575['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array629);

$output546 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output577 = '';

$output577 .= '
												<td>
													';
$array578 = array (
);
$output577 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array578)]);

$output577 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
$output584 = '';

$output584 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure586 = function() use ($renderingContext, $self) {
$output588 = '';

$output588 .= '
															';
$array589 = array (
);
$output588 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array589)]);

$output588 .= '
														';
return $output588;
};
$arguments585 = array();
$arguments585['each'] = NULL;
$arguments585['as'] = NULL;
$arguments585['key'] = NULL;
$arguments585['reverse'] = false;
$arguments585['iteration'] = NULL;
$array587 = array (
);$arguments585['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array587);
$arguments585['as'] = 'w';

$output584 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments585, $renderChildrenClosure586, $renderingContext);

$output584 .= '
														<br><br>
														<em>';
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
$arguments590['key'] = 'administration.statistics.count';

$output584 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext)]);

$output584 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['subject'] = NULL;
$array594 = array (
);$arguments592['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array594);
$renderChildrenClosure593 = ($arguments592['subject'] !== null) ? function() use ($arguments592) { return $arguments592['subject']; } : $renderChildrenClosure593;
$output584 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output584 .= '</em>
													</td>
												';
return $output584;
};
$arguments579 = array();
$arguments579['then'] = NULL;
$arguments579['else'] = NULL;
$arguments579['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array581 = array();
$array582 = array (
);$array581['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array582);
$array581['1'] = ' == false';

$expression583 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments579['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression583(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array581)
					),
					$renderingContext
				);
$arguments579['__thenClosure'] = $renderChildrenClosure580;

$output577 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments579, $renderChildrenClosure580, $renderingContext);

$output577 .= '
											';
return $output577;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output615 = '';

$output615 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
$output621 = '';

$output621 .= '
													<td>';
$array622 = array (
);
$output621 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array622)]);

$output621 .= '</td>
												';
return $output621;
};
$arguments616 = array();
$arguments616['then'] = NULL;
$arguments616['else'] = NULL;
$arguments616['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array618 = array();
$array619 = array (
);$array618['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array619);
$array618['1'] = ' == false';

$expression620 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments616['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression620(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array618)
					),
					$renderingContext
				);
$arguments616['__thenClosure'] = $renderChildrenClosure617;

$output615 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments616, $renderChildrenClosure617, $renderingContext);

$output615 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure624 = function() use ($renderingContext, $self) {
$array625 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array625);
};
$arguments623 = array();
$arguments623['value'] = NULL;
$arguments623['decimals'] = 0;
$arguments623['decimalSeparator'] = '.';
$arguments623['thousandsSeparator'] = ',';
$arguments623['units'] = NULL;
$arguments623['decimals'] = 1;
$renderChildrenClosure624 = ($arguments623['value'] !== null) ? function() use ($arguments623) { return $arguments623['value']; } : $renderChildrenClosure624;
$output615 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments623, $renderChildrenClosure624, $renderingContext)]);

$output615 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
$array628 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array628);
};
$arguments626 = array();

$output615 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments626, $renderChildrenClosure627, $renderingContext)]);

$output615 .= '
												</td>
											';
return $output615;
});
}
}, array($arguments575));

$output546 .= '
									</tr>
								';
return $output546;
};
$arguments543 = array();
$arguments543['each'] = NULL;
$arguments543['as'] = NULL;
$arguments543['key'] = NULL;
$arguments543['reverse'] = false;
$arguments543['iteration'] = NULL;
$array545 = array (
);$arguments543['each'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array545);
$arguments543['as'] = 'l';
$arguments543['iteration'] = 'i';

$output542 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments543, $renderChildrenClosure544, $renderingContext);

$output542 .= '
							';
return $output542;
};
$arguments540['__elseClosures'][] = function() use ($renderingContext, $self) {
$output667 = '';

$output667 .= '
								<tr>
									<td class="nowrap">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
$array670 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array670);
};
$arguments668 = array();
$arguments668['value'] = NULL;

$output667 .= isset($arguments668['value']) ? $arguments668['value'] : $renderChildrenClosure669();

$output667 .= ' ';
$array671 = array (
);
$output667 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array671)]);

$output667 .= '</td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure673 = function() use ($renderingContext, $self) {
$output686 = '';

$output686 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
$output689 = '';

$output689 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure691 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments690 = array();
$arguments690['key'] = NULL;
$arguments690['id'] = NULL;
$arguments690['default'] = NULL;
$arguments690['arguments'] = NULL;
$arguments690['extensionName'] = NULL;
$arguments690['languageKey'] = NULL;
$arguments690['alternativeLanguageKeys'] = NULL;
$arguments690['key'] = 'administration.notIndexed';

$output689 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments690, $renderChildrenClosure691, $renderingContext)]);

$output689 .= '
											</td>
										';
return $output689;
};
$arguments687 = array();
$arguments687['value'] = NULL;
$arguments687['value'] = 'content';

$output686 .= '';

$output686 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
$output694 = '';

$output694 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure696 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments695 = array();
$arguments695['key'] = NULL;
$arguments695['id'] = NULL;
$arguments695['default'] = NULL;
$arguments695['arguments'] = NULL;
$arguments695['extensionName'] = NULL;
$arguments695['languageKey'] = NULL;
$arguments695['alternativeLanguageKeys'] = NULL;
$arguments695['key'] = 'administration.notIndexed';

$output694 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext)]);

$output694 .= '
											</td>
										';
return $output694;
};
$arguments692 = array();

$output686 .= '';

$output686 .= '
									';
return $output686;
};
$arguments672 = array();
$arguments672['expression'] = NULL;
$array685 = array (
);$arguments672['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array685);

$output667 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output674 = '';

$output674 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure676 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments675 = array();
$arguments675['key'] = NULL;
$arguments675['id'] = NULL;
$arguments675['default'] = NULL;
$arguments675['arguments'] = NULL;
$arguments675['extensionName'] = NULL;
$arguments675['languageKey'] = NULL;
$arguments675['alternativeLanguageKeys'] = NULL;
$arguments675['key'] = 'administration.notIndexed';

$output674 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments675, $renderChildrenClosure676, $renderingContext)]);

$output674 .= '
											</td>
										';
return $output674;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output682 = '';

$output682 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments683 = array();
$arguments683['key'] = NULL;
$arguments683['id'] = NULL;
$arguments683['default'] = NULL;
$arguments683['arguments'] = NULL;
$arguments683['extensionName'] = NULL;
$arguments683['languageKey'] = NULL;
$arguments683['alternativeLanguageKeys'] = NULL;
$arguments683['key'] = 'administration.notIndexed';

$output682 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments683, $renderChildrenClosure684, $renderingContext)]);

$output682 .= '
											</td>
										';
return $output682;
});
}
}, array($arguments672));

$output667 .= '
								</tr>
							';
return $output667;
};

$output539 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);

$output539 .= '
					';
return $output539;
};
$arguments536 = array();
$arguments536['each'] = NULL;
$arguments536['as'] = NULL;
$arguments536['key'] = NULL;
$arguments536['reverse'] = false;
$arguments536['iteration'] = NULL;
$array538 = array (
);$arguments536['each'] = $renderingContext->getVariableProvider()->getByPath('tree', $array538);
$arguments536['as'] = 'line';

$output436 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output436 .= '
					</tbody>
			</table>
		';
return $output436;
};
$arguments434 = array();

$output433 .= '';

$output433 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure861 = function() use ($renderingContext, $self) {
$output862 = '';

$output862 .= '
			<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure864 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments863 = array();
$arguments863['key'] = NULL;
$arguments863['id'] = NULL;
$arguments863['default'] = NULL;
$arguments863['arguments'] = NULL;
$arguments863['extensionName'] = NULL;
$arguments863['languageKey'] = NULL;
$arguments863['alternativeLanguageKeys'] = NULL;
$arguments863['key'] = 'administration.noPageSelected';

$output862 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments863, $renderChildrenClosure864, $renderingContext)]);

$output862 .= '</h2>
		';
return $output862;
};
$arguments860 = array();
$arguments860['if'] = NULL;

$output433 .= '';

$output433 .= '
	';
return $output433;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array430 = array();
$array431 = array (
);$array430['0'] = $renderingContext->getVariableProvider()->getByPath('tree', $array431);

$expression432 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression432(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array430)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
				<div class="form-group">
					<div class="col-sm-12">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['name'] = NULL;
$arguments9['value'] = NULL;
$arguments9['property'] = NULL;
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['size'] = NULL;
$arguments9['disabled'] = NULL;
$arguments9['options'] = NULL;
$arguments9['optionsAfterContent'] = false;
$arguments9['optionValueField'] = NULL;
$arguments9['optionLabelField'] = NULL;
$arguments9['sortByOptionLabel'] = false;
$arguments9['selectAllByDefault'] = false;
$arguments9['errorClass'] = 'f3-form-error';
$arguments9['prependOptionLabel'] = NULL;
$arguments9['prependOptionValue'] = NULL;
$arguments9['multiple'] = false;
$arguments9['required'] = false;
$arguments9['name'] = 'mode';
// Rendering Array
$array11 = array();
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
$arguments12['key'] = 'administration.statistics.view.overview';
$array11['overview'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['languageKey'] = NULL;
$arguments14['alternativeLanguageKeys'] = NULL;
$arguments14['key'] = 'administration.statistics.view.content';
$array11['content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
$arguments9['options'] = $array11;
$array16 = array (
);$arguments9['value'] = $renderingContext->getVariableProvider()->getByPath('mode', $array16);
// Rendering Array
$array17 = array();
$array17['onchange'] = 'this.form.submit();';
$arguments9['additionalAttributes'] = $array17;

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
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
$arguments18['size'] = NULL;
$arguments18['disabled'] = NULL;
$arguments18['options'] = NULL;
$arguments18['optionsAfterContent'] = false;
$arguments18['optionValueField'] = NULL;
$arguments18['optionLabelField'] = NULL;
$arguments18['sortByOptionLabel'] = false;
$arguments18['selectAllByDefault'] = false;
$arguments18['errorClass'] = 'f3-form-error';
$arguments18['prependOptionLabel'] = NULL;
$arguments18['prependOptionValue'] = NULL;
$arguments18['multiple'] = false;
$arguments18['required'] = false;
$arguments18['name'] = 'depth';
$array20 = array (
);$arguments18['options'] = $renderingContext->getVariableProvider()->getByPath('levelTranslations', $array20);
$array21 = array (
);$arguments18['value'] = $renderingContext->getVariableProvider()->getByPath('depth', $array21);
// Rendering Array
$array22 = array();
$array22['onchange'] = 'this.form.submit();';
$arguments18['additionalAttributes'] = $array22;

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output8 .= '
					</div>
				</div>
			';
return $output8;
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
$arguments4['name'] = 'statistic';
$arguments4['action'] = 'statistic';
$arguments4['class'] = 'form-horizontal';
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['id'] = $renderingContext->getVariableProvider()->getByPath('pageUid', $array7);
$arguments4['arguments'] = $array6;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
			<table class="table table-striped table-hover table-vertical-top">
				<thead>
					<tr>
						<th></th>
						<th>
							<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['action'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['controller'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['pluginName'] = NULL;
$arguments23['pageUid'] = NULL;
$arguments23['pageType'] = 0;
$arguments23['noCache'] = false;
$arguments23['noCacheHash'] = false;
$arguments23['section'] = '';
$arguments23['format'] = '';
$arguments23['linkAccessRestrictedPages'] = false;
$arguments23['additionalParams'] = array (
);
$arguments23['absolute'] = false;
$arguments23['addQueryString'] = false;
$arguments23['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments23['addQueryStringMethod'] = NULL;
$arguments23['action'] = 'deleteIndexedItem';
// Rendering Array
$array25 = array();
$array25['id'] = 'ALL';
$array26 = array (
);$array25['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array26);
$array27 = array (
);$array25['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array27);
$arguments23['arguments'] = $array25;

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output3 .= '" title="';
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
$arguments28['key'] = 'administration.removeAllEntries';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output3 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['identifier'] = NULL;
$arguments30['size'] = 'small';
$arguments30['overlay'] = NULL;
$arguments30['state'] = 'default';
$arguments30['alternativeMarkupIdentifier'] = NULL;
$arguments30['identifier'] = 'actions-edit-delete';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output3 .= '
							</a>
						</th>
						<th>
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
$arguments32['key'] = 'field.fileName';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output3 .= '
						</th>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['key'] = NULL;
$arguments78['id'] = NULL;
$arguments78['default'] = NULL;
$arguments78['arguments'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['languageKey'] = NULL;
$arguments78['alternativeLanguageKeys'] = NULL;
$arguments78['key'] = 'field.content';

$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output77 .= '
								</th>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['key'] = NULL;
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['languageKey'] = NULL;
$arguments86['alternativeLanguageKeys'] = NULL;
$arguments86['key'] = 'field.words';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output85 .= '
									</th>
								';
return $output85;
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array83);
$array82['1'] = ' == false';

$expression84 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
$arguments80['__thenClosure'] = $renderChildrenClosure81;

$output77 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output77 .= '
							';
return $output77;
};
$arguments75 = array();
$arguments75['value'] = NULL;
$arguments75['value'] = 'content';

$output74 .= '';

$output74 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['key'] = NULL;
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$arguments97['languageKey'] = NULL;
$arguments97['alternativeLanguageKeys'] = NULL;
$arguments97['key'] = 'field.wordCount';

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output96 .= '
									</th>
								';
return $output96;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array94);
$array93['1'] = ' == false';

$expression95 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['key'] = NULL;
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['languageKey'] = NULL;
$arguments99['alternativeLanguageKeys'] = NULL;
$arguments99['key'] = 'field.fileSize';

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output90 .= '
								</th>
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['key'] = NULL;
$arguments101['id'] = NULL;
$arguments101['default'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['languageKey'] = NULL;
$arguments101['alternativeLanguageKeys'] = NULL;
$arguments101['key'] = 'field.indexed';

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output90 .= '
								</th>
							';
return $output90;
};
$arguments88 = array();

$output74 .= '';

$output74 .= '
						';
return $output74;
};
$arguments34 = array();
$arguments34['expression'] = NULL;
$array73 = array (
);$arguments34['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array73);

$output3 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['key'] = NULL;
$arguments37['id'] = NULL;
$arguments37['default'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['languageKey'] = NULL;
$arguments37['alternativeLanguageKeys'] = NULL;
$arguments37['key'] = 'field.content';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output36 .= '
								</th>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
									<th>
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
$arguments45['key'] = 'field.words';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= '
									</th>
								';
return $output44;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array42);
$array41['1'] = ' == false';

$expression43 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['__thenClosure'] = $renderChildrenClosure40;

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output36 .= '
							';
return $output36;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
									<th>
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
$arguments67['key'] = 'field.wordCount';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output66 .= '
									</th>
								';
return $output66;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array64);
$array63['1'] = ' == false';

$expression65 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = $renderChildrenClosure62;

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$arguments69['key'] = 'field.fileSize';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output60 .= '
								</th>
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['languageKey'] = NULL;
$arguments71['alternativeLanguageKeys'] = NULL;
$arguments71['key'] = 'field.indexed';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output60 .= '
								</th>
							';
return $output60;
});
}
}, array($arguments34));

$output3 .= '
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
									<tr>
										<td class="nowrap">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$array277 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array277);
};
$arguments275 = array();
$arguments275['value'] = NULL;

$output274 .= isset($arguments275['value']) ? $arguments275['value'] : $renderChildrenClosure276();

$output274 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= ' ';
$array284 = array (
);
$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array284)]);
return $output283;
};
$arguments278 = array();
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$arguments278['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array280 = array();
$array281 = array (
);$array280['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array281);
$array280['1'] = ' == 0';

$expression282 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments278['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression282(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array280)
					),
					$renderingContext
				);
$arguments278['__thenClosure'] = $renderChildrenClosure279;

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output274 .= '
										</td>
										<td>
											<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['action'] = NULL;
$arguments285['arguments'] = array (
);
$arguments285['controller'] = NULL;
$arguments285['extensionName'] = NULL;
$arguments285['pluginName'] = NULL;
$arguments285['pageUid'] = NULL;
$arguments285['pageType'] = 0;
$arguments285['noCache'] = false;
$arguments285['noCacheHash'] = false;
$arguments285['section'] = '';
$arguments285['format'] = '';
$arguments285['linkAccessRestrictedPages'] = false;
$arguments285['additionalParams'] = array (
);
$arguments285['absolute'] = false;
$arguments285['addQueryString'] = false;
$arguments285['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments285['addQueryStringMethod'] = NULL;
$arguments285['action'] = 'deleteIndexedItem';
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['id'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array288);
$array289 = array (
);$array287['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array289);
$array290 = array (
);$array287['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array290);
$arguments285['arguments'] = $array287;

$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext)]);

$output274 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments291 = array();
$arguments291['key'] = NULL;
$arguments291['id'] = NULL;
$arguments291['default'] = NULL;
$arguments291['arguments'] = NULL;
$arguments291['extensionName'] = NULL;
$arguments291['languageKey'] = NULL;
$arguments291['alternativeLanguageKeys'] = NULL;
$arguments291['key'] = 'administration.removeEntry';

$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext)]);

$output274 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['identifier'] = NULL;
$arguments293['size'] = 'small';
$arguments293['overlay'] = NULL;
$arguments293['state'] = 'default';
$arguments293['alternativeMarkupIdentifier'] = NULL;
$arguments293['identifier'] = 'actions-edit-delete';

$output274 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output274 .= '
											</a>
										</td>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['additionalAttributes'] = NULL;
$arguments295['data'] = NULL;
$arguments295['class'] = NULL;
$arguments295['dir'] = NULL;
$arguments295['id'] = NULL;
$arguments295['lang'] = NULL;
$arguments295['style'] = NULL;
$arguments295['title'] = NULL;
$arguments295['accesskey'] = NULL;
$arguments295['tabindex'] = NULL;
$arguments295['onclick'] = NULL;
$arguments295['alt'] = NULL;
$arguments295['ismap'] = NULL;
$arguments295['longdesc'] = NULL;
$arguments295['usemap'] = NULL;
$arguments295['src'] = NULL;
$arguments295['treatIdAsReference'] = NULL;
$arguments295['image'] = NULL;
$arguments295['crop'] = NULL;
$arguments295['cropVariant'] = 'default';
$arguments295['width'] = NULL;
$arguments295['height'] = NULL;
$arguments295['minWidth'] = NULL;
$arguments295['minHeight'] = NULL;
$arguments295['maxWidth'] = NULL;
$arguments295['maxHeight'] = NULL;
$arguments295['absolute'] = false;
$array297 = array (
);$arguments295['src'] = $renderingContext->getVariableProvider()->getByPath('l.icon', $array297);

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output274 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$array302 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.item_title', $array302)]);
};
$arguments298 = array();
$arguments298['additionalAttributes'] = NULL;
$arguments298['data'] = NULL;
$arguments298['class'] = NULL;
$arguments298['dir'] = NULL;
$arguments298['id'] = NULL;
$arguments298['lang'] = NULL;
$arguments298['style'] = NULL;
$arguments298['title'] = NULL;
$arguments298['accesskey'] = NULL;
$arguments298['tabindex'] = NULL;
$arguments298['onclick'] = NULL;
$arguments298['name'] = NULL;
$arguments298['rel'] = NULL;
$arguments298['rev'] = NULL;
$arguments298['target'] = NULL;
$arguments298['action'] = NULL;
$arguments298['controller'] = NULL;
$arguments298['extensionName'] = NULL;
$arguments298['pluginName'] = NULL;
$arguments298['pageUid'] = NULL;
$arguments298['pageType'] = NULL;
$arguments298['noCache'] = NULL;
$arguments298['noCacheHash'] = NULL;
$arguments298['section'] = NULL;
$arguments298['format'] = NULL;
$arguments298['linkAccessRestrictedPages'] = NULL;
$arguments298['additionalParams'] = NULL;
$arguments298['absolute'] = NULL;
$arguments298['addQueryString'] = NULL;
$arguments298['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments298['addQueryStringMethod'] = NULL;
$arguments298['arguments'] = NULL;
$arguments298['action'] = 'statisticDetails';
// Rendering Array
$array300 = array();
$array301 = array (
);$array300['pageHash'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array301);
$arguments298['arguments'] = $array300;

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output274 .= '
										</td>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
												<td>
													';
$array362 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array362)]);

$output361 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
															';
$array373 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array373)]);

$output372 .= '
														';
return $output372;
};
$arguments369 = array();
$arguments369['each'] = NULL;
$arguments369['as'] = NULL;
$arguments369['key'] = NULL;
$arguments369['reverse'] = false;
$arguments369['iteration'] = NULL;
$array371 = array (
);$arguments369['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array371);
$arguments369['as'] = 'w';

$output368 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output368 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments374 = array();
$arguments374['key'] = NULL;
$arguments374['id'] = NULL;
$arguments374['default'] = NULL;
$arguments374['arguments'] = NULL;
$arguments374['extensionName'] = NULL;
$arguments374['languageKey'] = NULL;
$arguments374['alternativeLanguageKeys'] = NULL;
$arguments374['key'] = 'administration.statistics.count';

$output368 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext)]);

$output368 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['subject'] = NULL;
$array378 = array (
);$arguments376['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array378);
$renderChildrenClosure377 = ($arguments376['subject'] !== null) ? function() use ($arguments376) { return $arguments376['subject']; } : $renderChildrenClosure377;
$output368 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output368 .= '</em>
													</td>
												';
return $output368;
};
$arguments363 = array();
$arguments363['then'] = NULL;
$arguments363['else'] = NULL;
$arguments363['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array365 = array();
$array366 = array (
);$array365['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array366);
$array365['1'] = ' == false';

$expression367 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments363['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression367(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array365)
					),
					$renderingContext
				);
$arguments363['__thenClosure'] = $renderChildrenClosure364;

$output361 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);

$output361 .= '
											';
return $output361;
};
$arguments359 = array();
$arguments359['value'] = NULL;
$arguments359['value'] = 'content';

$output358 .= '';

$output358 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
													<td>';
$array388 = array (
);
$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array388)]);

$output387 .= '</td>
												';
return $output387;
};
$arguments382 = array();
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$arguments382['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array384 = array();
$array385 = array (
);$array384['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array385);
$array384['1'] = ' == false';

$expression386 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments382['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression386(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array384)
					),
					$renderingContext
				);
$arguments382['__thenClosure'] = $renderChildrenClosure383;

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$array391 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array391);
};
$arguments389 = array();
$arguments389['value'] = NULL;
$arguments389['decimals'] = 0;
$arguments389['decimalSeparator'] = '.';
$arguments389['thousandsSeparator'] = ',';
$arguments389['units'] = NULL;
$arguments389['decimals'] = 1;
$renderChildrenClosure390 = ($arguments389['value'] !== null) ? function() use ($arguments389) { return $arguments389['value']; } : $renderChildrenClosure390;
$output381 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext)]);

$output381 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
$array394 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array394);
};
$arguments392 = array();

$output381 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext)]);

$output381 .= '
												</td>
											';
return $output381;
};
$arguments379 = array();

$output358 .= '';

$output358 .= '
										';
return $output358;
};
$arguments303 = array();
$arguments303['expression'] = NULL;
$array357 = array (
);$arguments303['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array357);

$output274 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
												<td>
													';
$array306 = array (
);
$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array306)]);

$output305 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '
															';
$array317 = array (
);
$output316 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array317)]);

$output316 .= '
														';
return $output316;
};
$arguments313 = array();
$arguments313['each'] = NULL;
$arguments313['as'] = NULL;
$arguments313['key'] = NULL;
$arguments313['reverse'] = false;
$arguments313['iteration'] = NULL;
$array315 = array (
);$arguments313['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array315);
$arguments313['as'] = 'w';

$output312 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['key'] = NULL;
$arguments318['id'] = NULL;
$arguments318['default'] = NULL;
$arguments318['arguments'] = NULL;
$arguments318['extensionName'] = NULL;
$arguments318['languageKey'] = NULL;
$arguments318['alternativeLanguageKeys'] = NULL;
$arguments318['key'] = 'administration.statistics.count';

$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext)]);

$output312 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['subject'] = NULL;
$array322 = array (
);$arguments320['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array322);
$renderChildrenClosure321 = ($arguments320['subject'] !== null) ? function() use ($arguments320) { return $arguments320['subject']; } : $renderChildrenClosure321;
$output312 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output312 .= '</em>
													</td>
												';
return $output312;
};
$arguments307 = array();
$arguments307['then'] = NULL;
$arguments307['else'] = NULL;
$arguments307['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array309 = array();
$array310 = array (
);$array309['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array310);
$array309['1'] = ' == false';

$expression311 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments307['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression311(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array309)
					),
					$renderingContext
				);
$arguments307['__thenClosure'] = $renderChildrenClosure308;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output305 .= '
											';
return $output305;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$output349 = '';

$output349 .= '
													<td>';
$array350 = array (
);
$output349 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array350)]);

$output349 .= '</td>
												';
return $output349;
};
$arguments344 = array();
$arguments344['then'] = NULL;
$arguments344['else'] = NULL;
$arguments344['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array346 = array();
$array347 = array (
);$array346['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array347);
$array346['1'] = ' == false';

$expression348 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments344['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression348(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array346)
					),
					$renderingContext
				);
$arguments344['__thenClosure'] = $renderChildrenClosure345;

$output343 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output343 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$array353 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array353);
};
$arguments351 = array();
$arguments351['value'] = NULL;
$arguments351['decimals'] = 0;
$arguments351['decimalSeparator'] = '.';
$arguments351['thousandsSeparator'] = ',';
$arguments351['units'] = NULL;
$arguments351['decimals'] = 1;
$renderChildrenClosure352 = ($arguments351['value'] !== null) ? function() use ($arguments351) { return $arguments351['value']; } : $renderChildrenClosure352;
$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext)]);

$output343 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$array356 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array356);
};
$arguments354 = array();

$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext)]);

$output343 .= '
												</td>
											';
return $output343;
});
}
}, array($arguments303));

$output274 .= '
									</tr>
								';
return $output274;
};
$arguments271 = array();
$arguments271['each'] = NULL;
$arguments271['as'] = NULL;
$arguments271['key'] = NULL;
$arguments271['reverse'] = false;
$arguments271['iteration'] = NULL;
$array273 = array (
);$arguments271['each'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array273);
$arguments271['as'] = 'l';
$arguments271['iteration'] = 'i';

$output270 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output270 .= '
							';
return $output270;
};
$arguments268 = array();

$output267 .= '';

$output267 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
$output397 = '';

$output397 .= '
								<tr>
									<td class="nowrap">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
$array400 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array400);
};
$arguments398 = array();
$arguments398['value'] = NULL;

$output397 .= isset($arguments398['value']) ? $arguments398['value'] : $renderChildrenClosure399();

$output397 .= ' ';
$array401 = array (
);
$output397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array401)]);

$output397 .= '</td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output416 = '';

$output416 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
$output419 = '';

$output419 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments420 = array();
$arguments420['key'] = NULL;
$arguments420['id'] = NULL;
$arguments420['default'] = NULL;
$arguments420['arguments'] = NULL;
$arguments420['extensionName'] = NULL;
$arguments420['languageKey'] = NULL;
$arguments420['alternativeLanguageKeys'] = NULL;
$arguments420['key'] = 'administration.notIndexed';

$output419 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext)]);

$output419 .= '
											</td>
										';
return $output419;
};
$arguments417 = array();
$arguments417['value'] = NULL;
$arguments417['value'] = 'content';

$output416 .= '';

$output416 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
											<td colspan="5">
												';
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
$arguments425['key'] = 'administration.notIndexed';

$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext)]);

$output424 .= '
											</td>
										';
return $output424;
};
$arguments422 = array();

$output416 .= '';

$output416 .= '
									';
return $output416;
};
$arguments402 = array();
$arguments402['expression'] = NULL;
$array415 = array (
);$arguments402['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array415);

$output397 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
											<td colspan="5">
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
$arguments405['key'] = 'administration.notIndexed';

$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext)]);

$output404 .= '
											</td>
										';
return $output404;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments413 = array();
$arguments413['key'] = NULL;
$arguments413['id'] = NULL;
$arguments413['default'] = NULL;
$arguments413['arguments'] = NULL;
$arguments413['extensionName'] = NULL;
$arguments413['languageKey'] = NULL;
$arguments413['alternativeLanguageKeys'] = NULL;
$arguments413['key'] = 'administration.notIndexed';

$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext)]);

$output412 .= '
											</td>
										';
return $output412;
});
}
}, array($arguments402));

$output397 .= '
								</tr>
							';
return $output397;
};
$arguments395 = array();
$arguments395['if'] = NULL;

$output267 .= '';

$output267 .= '
						';
return $output267;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array264 = array();
$array265 = array (
);$array264['0'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array265);

$expression266 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression266(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array264)
					),
					$renderingContext
				);
$arguments107['__thenClosure'] = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
									<tr>
										<td class="nowrap">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$array116 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array116);
};
$arguments114 = array();
$arguments114['value'] = NULL;

$output113 .= isset($arguments114['value']) ? $arguments114['value'] : $renderChildrenClosure115();

$output113 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= ' ';
$array123 = array (
);
$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array123)]);
return $output122;
};
$arguments117 = array();
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array120);
$array119['1'] = ' == 0';

$expression121 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments117['__thenClosure'] = $renderChildrenClosure118;

$output113 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output113 .= '
										</td>
										<td>
											<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['action'] = NULL;
$arguments124['arguments'] = array (
);
$arguments124['controller'] = NULL;
$arguments124['extensionName'] = NULL;
$arguments124['pluginName'] = NULL;
$arguments124['pageUid'] = NULL;
$arguments124['pageType'] = 0;
$arguments124['noCache'] = false;
$arguments124['noCacheHash'] = false;
$arguments124['section'] = '';
$arguments124['format'] = '';
$arguments124['linkAccessRestrictedPages'] = false;
$arguments124['additionalParams'] = array (
);
$arguments124['absolute'] = false;
$arguments124['addQueryString'] = false;
$arguments124['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments124['addQueryStringMethod'] = NULL;
$arguments124['action'] = 'deleteIndexedItem';
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['id'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array127);
$array128 = array (
);$array126['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array128);
$array129 = array (
);$array126['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array129);
$arguments124['arguments'] = $array126;

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext)]);

$output113 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['key'] = NULL;
$arguments130['id'] = NULL;
$arguments130['default'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['extensionName'] = NULL;
$arguments130['languageKey'] = NULL;
$arguments130['alternativeLanguageKeys'] = NULL;
$arguments130['key'] = 'administration.removeEntry';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext)]);

$output113 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['identifier'] = NULL;
$arguments132['size'] = 'small';
$arguments132['overlay'] = NULL;
$arguments132['state'] = 'default';
$arguments132['alternativeMarkupIdentifier'] = NULL;
$arguments132['identifier'] = 'actions-edit-delete';

$output113 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output113 .= '
											</a>
										</td>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['class'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$arguments134['alt'] = NULL;
$arguments134['ismap'] = NULL;
$arguments134['longdesc'] = NULL;
$arguments134['usemap'] = NULL;
$arguments134['src'] = NULL;
$arguments134['treatIdAsReference'] = NULL;
$arguments134['image'] = NULL;
$arguments134['crop'] = NULL;
$arguments134['cropVariant'] = 'default';
$arguments134['width'] = NULL;
$arguments134['height'] = NULL;
$arguments134['minWidth'] = NULL;
$arguments134['minHeight'] = NULL;
$arguments134['maxWidth'] = NULL;
$arguments134['maxHeight'] = NULL;
$arguments134['absolute'] = false;
$array136 = array (
);$arguments134['src'] = $renderingContext->getVariableProvider()->getByPath('l.icon', $array136);

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output113 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$array141 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.item_title', $array141)]);
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
$arguments137['action'] = 'statisticDetails';
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['pageHash'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array140);
$arguments137['arguments'] = $array139;

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output113 .= '
										</td>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
												<td>
													';
$array201 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array201)]);

$output200 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
															';
$array212 = array (
);
$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array212)]);

$output211 .= '
														';
return $output211;
};
$arguments208 = array();
$arguments208['each'] = NULL;
$arguments208['as'] = NULL;
$arguments208['key'] = NULL;
$arguments208['reverse'] = false;
$arguments208['iteration'] = NULL;
$array210 = array (
);$arguments208['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array210);
$arguments208['as'] = 'w';

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
														<br><br>
														<em>';
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
$arguments213['key'] = 'administration.statistics.count';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext)]);

$output207 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['subject'] = NULL;
$array217 = array (
);$arguments215['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array217);
$renderChildrenClosure216 = ($arguments215['subject'] !== null) ? function() use ($arguments215) { return $arguments215['subject']; } : $renderChildrenClosure216;
$output207 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output207 .= '</em>
													</td>
												';
return $output207;
};
$arguments202 = array();
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array205 = array (
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array205);
$array204['1'] = ' == false';

$expression206 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = $renderChildrenClosure203;

$output200 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output200 .= '
											';
return $output200;
};
$arguments198 = array();
$arguments198['value'] = NULL;
$arguments198['value'] = 'content';

$output197 .= '';

$output197 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
													<td>';
$array227 = array (
);
$output226 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array227)]);

$output226 .= '</td>
												';
return $output226;
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array224 = array (
);$array223['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array224);
$array223['1'] = ' == false';

$expression225 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);
$arguments221['__thenClosure'] = $renderChildrenClosure222;

$output220 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$array230 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array230);
};
$arguments228 = array();
$arguments228['value'] = NULL;
$arguments228['decimals'] = 0;
$arguments228['decimalSeparator'] = '.';
$arguments228['thousandsSeparator'] = ',';
$arguments228['units'] = NULL;
$arguments228['decimals'] = 1;
$renderChildrenClosure229 = ($arguments228['value'] !== null) ? function() use ($arguments228) { return $arguments228['value']; } : $renderChildrenClosure229;
$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext)]);

$output220 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$array233 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array233);
};
$arguments231 = array();

$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext)]);

$output220 .= '
												</td>
											';
return $output220;
};
$arguments218 = array();

$output197 .= '';

$output197 .= '
										';
return $output197;
};
$arguments142 = array();
$arguments142['expression'] = NULL;
$array196 = array (
);$arguments142['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array196);

$output113 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
												<td>
													';
$array145 = array (
);
$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array145)]);

$output144 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
															';
$array156 = array (
);
$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array156)]);

$output155 .= '
														';
return $output155;
};
$arguments152 = array();
$arguments152['each'] = NULL;
$arguments152['as'] = NULL;
$arguments152['key'] = NULL;
$arguments152['reverse'] = false;
$arguments152['iteration'] = NULL;
$array154 = array (
);$arguments152['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array154);
$arguments152['as'] = 'w';

$output151 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output151 .= '
														<br><br>
														<em>';
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
$arguments157['key'] = 'administration.statistics.count';

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output151 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['subject'] = NULL;
$array161 = array (
);$arguments159['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array161);
$renderChildrenClosure160 = ($arguments159['subject'] !== null) ? function() use ($arguments159) { return $arguments159['subject']; } : $renderChildrenClosure160;
$output151 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output151 .= '</em>
													</td>
												';
return $output151;
};
$arguments146 = array();
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$arguments146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array149 = array (
);$array148['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array149);
$array148['1'] = ' == false';

$expression150 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)
					),
					$renderingContext
				);
$arguments146['__thenClosure'] = $renderChildrenClosure147;

$output144 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output144 .= '
											';
return $output144;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
													<td>';
$array189 = array (
);
$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array189)]);

$output188 .= '</td>
												';
return $output188;
};
$arguments183 = array();
$arguments183['then'] = NULL;
$arguments183['else'] = NULL;
$arguments183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array186);
$array185['1'] = ' == false';

$expression187 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);
$arguments183['__thenClosure'] = $renderChildrenClosure184;

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output182 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$array192 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array192);
};
$arguments190 = array();
$arguments190['value'] = NULL;
$arguments190['decimals'] = 0;
$arguments190['decimalSeparator'] = '.';
$arguments190['thousandsSeparator'] = ',';
$arguments190['units'] = NULL;
$arguments190['decimals'] = 1;
$renderChildrenClosure191 = ($arguments190['value'] !== null) ? function() use ($arguments190) { return $arguments190['value']; } : $renderChildrenClosure191;
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output182 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$array195 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array195);
};
$arguments193 = array();

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output182 .= '
												</td>
											';
return $output182;
});
}
}, array($arguments142));

$output113 .= '
									</tr>
								';
return $output113;
};
$arguments110 = array();
$arguments110['each'] = NULL;
$arguments110['as'] = NULL;
$arguments110['key'] = NULL;
$arguments110['reverse'] = false;
$arguments110['iteration'] = NULL;
$array112 = array (
);$arguments110['each'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array112);
$arguments110['as'] = 'l';
$arguments110['iteration'] = 'i';

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
							';
return $output109;
};
$arguments107['__elseClosures'][] = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
								<tr>
									<td class="nowrap">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$array237 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array237);
};
$arguments235 = array();
$arguments235['value'] = NULL;

$output234 .= isset($arguments235['value']) ? $arguments235['value'] : $renderChildrenClosure236();

$output234 .= ' ';
$array238 = array (
);
$output234 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array238)]);

$output234 .= '</td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output253 = '';

$output253 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments257 = array();
$arguments257['key'] = NULL;
$arguments257['id'] = NULL;
$arguments257['default'] = NULL;
$arguments257['arguments'] = NULL;
$arguments257['extensionName'] = NULL;
$arguments257['languageKey'] = NULL;
$arguments257['alternativeLanguageKeys'] = NULL;
$arguments257['key'] = 'administration.notIndexed';

$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext)]);

$output256 .= '
											</td>
										';
return $output256;
};
$arguments254 = array();
$arguments254['value'] = NULL;
$arguments254['value'] = 'content';

$output253 .= '';

$output253 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output261 = '';

$output261 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['key'] = NULL;
$arguments262['id'] = NULL;
$arguments262['default'] = NULL;
$arguments262['arguments'] = NULL;
$arguments262['extensionName'] = NULL;
$arguments262['languageKey'] = NULL;
$arguments262['alternativeLanguageKeys'] = NULL;
$arguments262['key'] = 'administration.notIndexed';

$output261 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext)]);

$output261 .= '
											</td>
										';
return $output261;
};
$arguments259 = array();

$output253 .= '';

$output253 .= '
									';
return $output253;
};
$arguments239 = array();
$arguments239['expression'] = NULL;
$array252 = array (
);$arguments239['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array252);

$output234 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['key'] = NULL;
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$arguments242['languageKey'] = NULL;
$arguments242['alternativeLanguageKeys'] = NULL;
$arguments242['key'] = 'administration.notIndexed';

$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext)]);

$output241 .= '
											</td>
										';
return $output241;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
											<td colspan="5">
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
$arguments250['key'] = 'administration.notIndexed';

$output249 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext)]);

$output249 .= '
											</td>
										';
return $output249;
});
}
}, array($arguments239));

$output234 .= '
								</tr>
							';
return $output234;
};

$output106 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
					';
return $output106;
};
$arguments103 = array();
$arguments103['each'] = NULL;
$arguments103['as'] = NULL;
$arguments103['key'] = NULL;
$arguments103['reverse'] = false;
$arguments103['iteration'] = NULL;
$array105 = array (
);$arguments103['each'] = $renderingContext->getVariableProvider()->getByPath('tree', $array105);
$arguments103['as'] = 'line';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output3 .= '
					</tbody>
			</table>
		';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '
			<h2>';
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
$arguments428['key'] = 'administration.noPageSelected';

$output427 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext)]);

$output427 .= '</h2>
		';
return $output427;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output865 = '';

$output865 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure867 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments866 = array();
$arguments866['name'] = NULL;
$arguments866['name'] = 'Administration';

$output865 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output865 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure869 = function() use ($renderingContext, $self) {
$output870 = '';

$output870 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure872 = function() use ($renderingContext, $self) {
$output1303 = '';

$output1303 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1305 = function() use ($renderingContext, $self) {
$output1306 = '';

$output1306 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure1308 = function() use ($renderingContext, $self) {
$output1311 = '';

$output1311 .= '
				<div class="form-group">
					<div class="col-sm-12">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure1313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1312 = array();
$arguments1312['additionalAttributes'] = NULL;
$arguments1312['data'] = NULL;
$arguments1312['name'] = NULL;
$arguments1312['value'] = NULL;
$arguments1312['property'] = NULL;
$arguments1312['class'] = NULL;
$arguments1312['dir'] = NULL;
$arguments1312['id'] = NULL;
$arguments1312['lang'] = NULL;
$arguments1312['style'] = NULL;
$arguments1312['title'] = NULL;
$arguments1312['accesskey'] = NULL;
$arguments1312['tabindex'] = NULL;
$arguments1312['onclick'] = NULL;
$arguments1312['size'] = NULL;
$arguments1312['disabled'] = NULL;
$arguments1312['options'] = NULL;
$arguments1312['optionsAfterContent'] = false;
$arguments1312['optionValueField'] = NULL;
$arguments1312['optionLabelField'] = NULL;
$arguments1312['sortByOptionLabel'] = false;
$arguments1312['selectAllByDefault'] = false;
$arguments1312['errorClass'] = 'f3-form-error';
$arguments1312['prependOptionLabel'] = NULL;
$arguments1312['prependOptionValue'] = NULL;
$arguments1312['multiple'] = false;
$arguments1312['required'] = false;
$arguments1312['name'] = 'mode';
// Rendering Array
$array1314 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1315 = array();
$arguments1315['key'] = NULL;
$arguments1315['id'] = NULL;
$arguments1315['default'] = NULL;
$arguments1315['arguments'] = NULL;
$arguments1315['extensionName'] = NULL;
$arguments1315['languageKey'] = NULL;
$arguments1315['alternativeLanguageKeys'] = NULL;
$arguments1315['key'] = 'administration.statistics.view.overview';
$array1314['overview'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1315, $renderChildrenClosure1316, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1317 = array();
$arguments1317['key'] = NULL;
$arguments1317['id'] = NULL;
$arguments1317['default'] = NULL;
$arguments1317['arguments'] = NULL;
$arguments1317['extensionName'] = NULL;
$arguments1317['languageKey'] = NULL;
$arguments1317['alternativeLanguageKeys'] = NULL;
$arguments1317['key'] = 'administration.statistics.view.content';
$array1314['content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1317, $renderChildrenClosure1318, $renderingContext);
$arguments1312['options'] = $array1314;
$array1319 = array (
);$arguments1312['value'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1319);
// Rendering Array
$array1320 = array();
$array1320['onchange'] = 'this.form.submit();';
$arguments1312['additionalAttributes'] = $array1320;

$output1311 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments1312, $renderChildrenClosure1313, $renderingContext);

$output1311 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure1322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1321 = array();
$arguments1321['additionalAttributes'] = NULL;
$arguments1321['data'] = NULL;
$arguments1321['name'] = NULL;
$arguments1321['value'] = NULL;
$arguments1321['property'] = NULL;
$arguments1321['class'] = NULL;
$arguments1321['dir'] = NULL;
$arguments1321['id'] = NULL;
$arguments1321['lang'] = NULL;
$arguments1321['style'] = NULL;
$arguments1321['title'] = NULL;
$arguments1321['accesskey'] = NULL;
$arguments1321['tabindex'] = NULL;
$arguments1321['onclick'] = NULL;
$arguments1321['size'] = NULL;
$arguments1321['disabled'] = NULL;
$arguments1321['options'] = NULL;
$arguments1321['optionsAfterContent'] = false;
$arguments1321['optionValueField'] = NULL;
$arguments1321['optionLabelField'] = NULL;
$arguments1321['sortByOptionLabel'] = false;
$arguments1321['selectAllByDefault'] = false;
$arguments1321['errorClass'] = 'f3-form-error';
$arguments1321['prependOptionLabel'] = NULL;
$arguments1321['prependOptionValue'] = NULL;
$arguments1321['multiple'] = false;
$arguments1321['required'] = false;
$arguments1321['name'] = 'depth';
$array1323 = array (
);$arguments1321['options'] = $renderingContext->getVariableProvider()->getByPath('levelTranslations', $array1323);
$array1324 = array (
);$arguments1321['value'] = $renderingContext->getVariableProvider()->getByPath('depth', $array1324);
// Rendering Array
$array1325 = array();
$array1325['onchange'] = 'this.form.submit();';
$arguments1321['additionalAttributes'] = $array1325;

$output1311 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments1321, $renderChildrenClosure1322, $renderingContext);

$output1311 .= '
					</div>
				</div>
			';
return $output1311;
};
$arguments1307 = array();
$arguments1307['additionalAttributes'] = NULL;
$arguments1307['data'] = NULL;
$arguments1307['action'] = NULL;
$arguments1307['arguments'] = array (
);
$arguments1307['controller'] = NULL;
$arguments1307['extensionName'] = NULL;
$arguments1307['pluginName'] = NULL;
$arguments1307['pageUid'] = NULL;
$arguments1307['object'] = NULL;
$arguments1307['pageType'] = 0;
$arguments1307['noCache'] = false;
$arguments1307['noCacheHash'] = false;
$arguments1307['section'] = '';
$arguments1307['format'] = '';
$arguments1307['additionalParams'] = array (
);
$arguments1307['absolute'] = false;
$arguments1307['addQueryString'] = false;
$arguments1307['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1307['addQueryStringMethod'] = 'GET';
$arguments1307['fieldNamePrefix'] = NULL;
$arguments1307['actionUri'] = NULL;
$arguments1307['objectName'] = NULL;
$arguments1307['hiddenFieldClassName'] = NULL;
$arguments1307['enctype'] = NULL;
$arguments1307['method'] = NULL;
$arguments1307['name'] = NULL;
$arguments1307['onreset'] = NULL;
$arguments1307['onsubmit'] = NULL;
$arguments1307['target'] = NULL;
$arguments1307['novalidate'] = NULL;
$arguments1307['class'] = NULL;
$arguments1307['dir'] = NULL;
$arguments1307['id'] = NULL;
$arguments1307['lang'] = NULL;
$arguments1307['style'] = NULL;
$arguments1307['title'] = NULL;
$arguments1307['accesskey'] = NULL;
$arguments1307['tabindex'] = NULL;
$arguments1307['onclick'] = NULL;
$arguments1307['name'] = 'statistic';
$arguments1307['action'] = 'statistic';
$arguments1307['class'] = 'form-horizontal';
// Rendering Array
$array1309 = array();
$array1310 = array (
);$array1309['id'] = $renderingContext->getVariableProvider()->getByPath('pageUid', $array1310);
$arguments1307['arguments'] = $array1309;

$output1306 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments1307, $renderChildrenClosure1308, $renderingContext);

$output1306 .= '
			<table class="table table-striped table-hover table-vertical-top">
				<thead>
					<tr>
						<th></th>
						<th>
							<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure1327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1326 = array();
$arguments1326['action'] = NULL;
$arguments1326['arguments'] = array (
);
$arguments1326['controller'] = NULL;
$arguments1326['extensionName'] = NULL;
$arguments1326['pluginName'] = NULL;
$arguments1326['pageUid'] = NULL;
$arguments1326['pageType'] = 0;
$arguments1326['noCache'] = false;
$arguments1326['noCacheHash'] = false;
$arguments1326['section'] = '';
$arguments1326['format'] = '';
$arguments1326['linkAccessRestrictedPages'] = false;
$arguments1326['additionalParams'] = array (
);
$arguments1326['absolute'] = false;
$arguments1326['addQueryString'] = false;
$arguments1326['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1326['addQueryStringMethod'] = NULL;
$arguments1326['action'] = 'deleteIndexedItem';
// Rendering Array
$array1328 = array();
$array1328['id'] = 'ALL';
$array1329 = array (
);$array1328['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array1329);
$array1330 = array (
);$array1328['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1330);
$arguments1326['arguments'] = $array1328;

$output1306 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1326, $renderChildrenClosure1327, $renderingContext)]);

$output1306 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1332 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1331 = array();
$arguments1331['key'] = NULL;
$arguments1331['id'] = NULL;
$arguments1331['default'] = NULL;
$arguments1331['arguments'] = NULL;
$arguments1331['extensionName'] = NULL;
$arguments1331['languageKey'] = NULL;
$arguments1331['alternativeLanguageKeys'] = NULL;
$arguments1331['key'] = 'administration.removeAllEntries';

$output1306 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1331, $renderChildrenClosure1332, $renderingContext)]);

$output1306 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1334 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1333 = array();
$arguments1333['identifier'] = NULL;
$arguments1333['size'] = 'small';
$arguments1333['overlay'] = NULL;
$arguments1333['state'] = 'default';
$arguments1333['alternativeMarkupIdentifier'] = NULL;
$arguments1333['identifier'] = 'actions-edit-delete';

$output1306 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1333, $renderChildrenClosure1334, $renderingContext);

$output1306 .= '
							</a>
						</th>
						<th>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1335 = array();
$arguments1335['key'] = NULL;
$arguments1335['id'] = NULL;
$arguments1335['default'] = NULL;
$arguments1335['arguments'] = NULL;
$arguments1335['extensionName'] = NULL;
$arguments1335['languageKey'] = NULL;
$arguments1335['alternativeLanguageKeys'] = NULL;
$arguments1335['key'] = 'field.fileName';

$output1306 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1335, $renderChildrenClosure1336, $renderingContext)]);

$output1306 .= '
						</th>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure1338 = function() use ($renderingContext, $self) {
$output1377 = '';

$output1377 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure1379 = function() use ($renderingContext, $self) {
$output1380 = '';

$output1380 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1382 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1381 = array();
$arguments1381['key'] = NULL;
$arguments1381['id'] = NULL;
$arguments1381['default'] = NULL;
$arguments1381['arguments'] = NULL;
$arguments1381['extensionName'] = NULL;
$arguments1381['languageKey'] = NULL;
$arguments1381['alternativeLanguageKeys'] = NULL;
$arguments1381['key'] = 'field.content';

$output1380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1381, $renderChildrenClosure1382, $renderingContext)]);

$output1380 .= '
								</th>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1384 = function() use ($renderingContext, $self) {
$output1388 = '';

$output1388 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1390 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1389 = array();
$arguments1389['key'] = NULL;
$arguments1389['id'] = NULL;
$arguments1389['default'] = NULL;
$arguments1389['arguments'] = NULL;
$arguments1389['extensionName'] = NULL;
$arguments1389['languageKey'] = NULL;
$arguments1389['alternativeLanguageKeys'] = NULL;
$arguments1389['key'] = 'field.words';

$output1388 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1389, $renderChildrenClosure1390, $renderingContext)]);

$output1388 .= '
									</th>
								';
return $output1388;
};
$arguments1383 = array();
$arguments1383['then'] = NULL;
$arguments1383['else'] = NULL;
$arguments1383['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1385 = array();
$array1386 = array (
);$array1385['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1386);
$array1385['1'] = ' == false';

$expression1387 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1383['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1387(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1385)
					),
					$renderingContext
				);
$arguments1383['__thenClosure'] = $renderChildrenClosure1384;

$output1380 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1383, $renderChildrenClosure1384, $renderingContext);

$output1380 .= '
							';
return $output1380;
};
$arguments1378 = array();
$arguments1378['value'] = NULL;
$arguments1378['value'] = 'content';

$output1377 .= '';

$output1377 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure1392 = function() use ($renderingContext, $self) {
$output1393 = '';

$output1393 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1395 = function() use ($renderingContext, $self) {
$output1399 = '';

$output1399 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1401 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1400 = array();
$arguments1400['key'] = NULL;
$arguments1400['id'] = NULL;
$arguments1400['default'] = NULL;
$arguments1400['arguments'] = NULL;
$arguments1400['extensionName'] = NULL;
$arguments1400['languageKey'] = NULL;
$arguments1400['alternativeLanguageKeys'] = NULL;
$arguments1400['key'] = 'field.wordCount';

$output1399 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1400, $renderChildrenClosure1401, $renderingContext)]);

$output1399 .= '
									</th>
								';
return $output1399;
};
$arguments1394 = array();
$arguments1394['then'] = NULL;
$arguments1394['else'] = NULL;
$arguments1394['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1396 = array();
$array1397 = array (
);$array1396['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1397);
$array1396['1'] = ' == false';

$expression1398 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1394['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1398(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1396)
					),
					$renderingContext
				);
$arguments1394['__thenClosure'] = $renderChildrenClosure1395;

$output1393 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1394, $renderChildrenClosure1395, $renderingContext);

$output1393 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1402 = array();
$arguments1402['key'] = NULL;
$arguments1402['id'] = NULL;
$arguments1402['default'] = NULL;
$arguments1402['arguments'] = NULL;
$arguments1402['extensionName'] = NULL;
$arguments1402['languageKey'] = NULL;
$arguments1402['alternativeLanguageKeys'] = NULL;
$arguments1402['key'] = 'field.fileSize';

$output1393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1402, $renderChildrenClosure1403, $renderingContext)]);

$output1393 .= '
								</th>
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1404 = array();
$arguments1404['key'] = NULL;
$arguments1404['id'] = NULL;
$arguments1404['default'] = NULL;
$arguments1404['arguments'] = NULL;
$arguments1404['extensionName'] = NULL;
$arguments1404['languageKey'] = NULL;
$arguments1404['alternativeLanguageKeys'] = NULL;
$arguments1404['key'] = 'field.indexed';

$output1393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1404, $renderChildrenClosure1405, $renderingContext)]);

$output1393 .= '
								</th>
							';
return $output1393;
};
$arguments1391 = array();

$output1377 .= '';

$output1377 .= '
						';
return $output1377;
};
$arguments1337 = array();
$arguments1337['expression'] = NULL;
$array1376 = array (
);$arguments1337['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1376);

$output1306 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output1339 = '';

$output1339 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1341 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1340 = array();
$arguments1340['key'] = NULL;
$arguments1340['id'] = NULL;
$arguments1340['default'] = NULL;
$arguments1340['arguments'] = NULL;
$arguments1340['extensionName'] = NULL;
$arguments1340['languageKey'] = NULL;
$arguments1340['alternativeLanguageKeys'] = NULL;
$arguments1340['key'] = 'field.content';

$output1339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1340, $renderChildrenClosure1341, $renderingContext)]);

$output1339 .= '
								</th>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1343 = function() use ($renderingContext, $self) {
$output1347 = '';

$output1347 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1349 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1348 = array();
$arguments1348['key'] = NULL;
$arguments1348['id'] = NULL;
$arguments1348['default'] = NULL;
$arguments1348['arguments'] = NULL;
$arguments1348['extensionName'] = NULL;
$arguments1348['languageKey'] = NULL;
$arguments1348['alternativeLanguageKeys'] = NULL;
$arguments1348['key'] = 'field.words';

$output1347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1348, $renderChildrenClosure1349, $renderingContext)]);

$output1347 .= '
									</th>
								';
return $output1347;
};
$arguments1342 = array();
$arguments1342['then'] = NULL;
$arguments1342['else'] = NULL;
$arguments1342['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1344 = array();
$array1345 = array (
);$array1344['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1345);
$array1344['1'] = ' == false';

$expression1346 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1342['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1346(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1344)
					),
					$renderingContext
				);
$arguments1342['__thenClosure'] = $renderChildrenClosure1343;

$output1339 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1342, $renderChildrenClosure1343, $renderingContext);

$output1339 .= '
							';
return $output1339;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output1363 = '';

$output1363 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1365 = function() use ($renderingContext, $self) {
$output1369 = '';

$output1369 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1371 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1370 = array();
$arguments1370['key'] = NULL;
$arguments1370['id'] = NULL;
$arguments1370['default'] = NULL;
$arguments1370['arguments'] = NULL;
$arguments1370['extensionName'] = NULL;
$arguments1370['languageKey'] = NULL;
$arguments1370['alternativeLanguageKeys'] = NULL;
$arguments1370['key'] = 'field.wordCount';

$output1369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1370, $renderChildrenClosure1371, $renderingContext)]);

$output1369 .= '
									</th>
								';
return $output1369;
};
$arguments1364 = array();
$arguments1364['then'] = NULL;
$arguments1364['else'] = NULL;
$arguments1364['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1366 = array();
$array1367 = array (
);$array1366['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1367);
$array1366['1'] = ' == false';

$expression1368 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1364['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1368(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1366)
					),
					$renderingContext
				);
$arguments1364['__thenClosure'] = $renderChildrenClosure1365;

$output1363 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1364, $renderChildrenClosure1365, $renderingContext);

$output1363 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1373 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1372 = array();
$arguments1372['key'] = NULL;
$arguments1372['id'] = NULL;
$arguments1372['default'] = NULL;
$arguments1372['arguments'] = NULL;
$arguments1372['extensionName'] = NULL;
$arguments1372['languageKey'] = NULL;
$arguments1372['alternativeLanguageKeys'] = NULL;
$arguments1372['key'] = 'field.fileSize';

$output1363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1372, $renderChildrenClosure1373, $renderingContext)]);

$output1363 .= '
								</th>
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1374 = array();
$arguments1374['key'] = NULL;
$arguments1374['id'] = NULL;
$arguments1374['default'] = NULL;
$arguments1374['arguments'] = NULL;
$arguments1374['extensionName'] = NULL;
$arguments1374['languageKey'] = NULL;
$arguments1374['alternativeLanguageKeys'] = NULL;
$arguments1374['key'] = 'field.indexed';

$output1363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1374, $renderChildrenClosure1375, $renderingContext)]);

$output1363 .= '
								</th>
							';
return $output1363;
});
}
}, array($arguments1337));

$output1306 .= '
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1407 = function() use ($renderingContext, $self) {
$output1409 = '';

$output1409 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1411 = function() use ($renderingContext, $self) {
$output1570 = '';

$output1570 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1572 = function() use ($renderingContext, $self) {
$output1573 = '';

$output1573 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1575 = function() use ($renderingContext, $self) {
$output1577 = '';

$output1577 .= '
									<tr>
										<td class="nowrap">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1579 = function() use ($renderingContext, $self) {
$array1580 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array1580);
};
$arguments1578 = array();
$arguments1578['value'] = NULL;

$output1577 .= isset($arguments1578['value']) ? $arguments1578['value'] : $renderChildrenClosure1579();

$output1577 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1582 = function() use ($renderingContext, $self) {
$output1586 = '';

$output1586 .= ' ';
$array1587 = array (
);
$output1586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array1587)]);
return $output1586;
};
$arguments1581 = array();
$arguments1581['then'] = NULL;
$arguments1581['else'] = NULL;
$arguments1581['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1583 = array();
$array1584 = array (
);$array1583['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array1584);
$array1583['1'] = ' == 0';

$expression1585 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments1581['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1585(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1583)
					),
					$renderingContext
				);
$arguments1581['__thenClosure'] = $renderChildrenClosure1582;

$output1577 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1581, $renderChildrenClosure1582, $renderingContext);

$output1577 .= '
										</td>
										<td>
											<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure1589 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1588 = array();
$arguments1588['action'] = NULL;
$arguments1588['arguments'] = array (
);
$arguments1588['controller'] = NULL;
$arguments1588['extensionName'] = NULL;
$arguments1588['pluginName'] = NULL;
$arguments1588['pageUid'] = NULL;
$arguments1588['pageType'] = 0;
$arguments1588['noCache'] = false;
$arguments1588['noCacheHash'] = false;
$arguments1588['section'] = '';
$arguments1588['format'] = '';
$arguments1588['linkAccessRestrictedPages'] = false;
$arguments1588['additionalParams'] = array (
);
$arguments1588['absolute'] = false;
$arguments1588['addQueryString'] = false;
$arguments1588['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1588['addQueryStringMethod'] = NULL;
$arguments1588['action'] = 'deleteIndexedItem';
// Rendering Array
$array1590 = array();
$array1591 = array (
);$array1590['id'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array1591);
$array1592 = array (
);$array1590['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array1592);
$array1593 = array (
);$array1590['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1593);
$arguments1588['arguments'] = $array1590;

$output1577 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1588, $renderChildrenClosure1589, $renderingContext)]);

$output1577 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1595 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1594 = array();
$arguments1594['key'] = NULL;
$arguments1594['id'] = NULL;
$arguments1594['default'] = NULL;
$arguments1594['arguments'] = NULL;
$arguments1594['extensionName'] = NULL;
$arguments1594['languageKey'] = NULL;
$arguments1594['alternativeLanguageKeys'] = NULL;
$arguments1594['key'] = 'administration.removeEntry';

$output1577 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1594, $renderChildrenClosure1595, $renderingContext)]);

$output1577 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1597 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1596 = array();
$arguments1596['identifier'] = NULL;
$arguments1596['size'] = 'small';
$arguments1596['overlay'] = NULL;
$arguments1596['state'] = 'default';
$arguments1596['alternativeMarkupIdentifier'] = NULL;
$arguments1596['identifier'] = 'actions-edit-delete';

$output1577 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1596, $renderChildrenClosure1597, $renderingContext);

$output1577 .= '
											</a>
										</td>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1598 = array();
$arguments1598['additionalAttributes'] = NULL;
$arguments1598['data'] = NULL;
$arguments1598['class'] = NULL;
$arguments1598['dir'] = NULL;
$arguments1598['id'] = NULL;
$arguments1598['lang'] = NULL;
$arguments1598['style'] = NULL;
$arguments1598['title'] = NULL;
$arguments1598['accesskey'] = NULL;
$arguments1598['tabindex'] = NULL;
$arguments1598['onclick'] = NULL;
$arguments1598['alt'] = NULL;
$arguments1598['ismap'] = NULL;
$arguments1598['longdesc'] = NULL;
$arguments1598['usemap'] = NULL;
$arguments1598['src'] = NULL;
$arguments1598['treatIdAsReference'] = NULL;
$arguments1598['image'] = NULL;
$arguments1598['crop'] = NULL;
$arguments1598['cropVariant'] = 'default';
$arguments1598['width'] = NULL;
$arguments1598['height'] = NULL;
$arguments1598['minWidth'] = NULL;
$arguments1598['minHeight'] = NULL;
$arguments1598['maxWidth'] = NULL;
$arguments1598['maxHeight'] = NULL;
$arguments1598['absolute'] = false;
$array1600 = array (
);$arguments1598['src'] = $renderingContext->getVariableProvider()->getByPath('l.icon', $array1600);

$output1577 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1598, $renderChildrenClosure1599, $renderingContext);

$output1577 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1602 = function() use ($renderingContext, $self) {
$array1605 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.item_title', $array1605)]);
};
$arguments1601 = array();
$arguments1601['additionalAttributes'] = NULL;
$arguments1601['data'] = NULL;
$arguments1601['class'] = NULL;
$arguments1601['dir'] = NULL;
$arguments1601['id'] = NULL;
$arguments1601['lang'] = NULL;
$arguments1601['style'] = NULL;
$arguments1601['title'] = NULL;
$arguments1601['accesskey'] = NULL;
$arguments1601['tabindex'] = NULL;
$arguments1601['onclick'] = NULL;
$arguments1601['name'] = NULL;
$arguments1601['rel'] = NULL;
$arguments1601['rev'] = NULL;
$arguments1601['target'] = NULL;
$arguments1601['action'] = NULL;
$arguments1601['controller'] = NULL;
$arguments1601['extensionName'] = NULL;
$arguments1601['pluginName'] = NULL;
$arguments1601['pageUid'] = NULL;
$arguments1601['pageType'] = NULL;
$arguments1601['noCache'] = NULL;
$arguments1601['noCacheHash'] = NULL;
$arguments1601['section'] = NULL;
$arguments1601['format'] = NULL;
$arguments1601['linkAccessRestrictedPages'] = NULL;
$arguments1601['additionalParams'] = NULL;
$arguments1601['absolute'] = NULL;
$arguments1601['addQueryString'] = NULL;
$arguments1601['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1601['addQueryStringMethod'] = NULL;
$arguments1601['arguments'] = NULL;
$arguments1601['action'] = 'statisticDetails';
// Rendering Array
$array1603 = array();
$array1604 = array (
);$array1603['pageHash'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array1604);
$arguments1601['arguments'] = $array1603;

$output1577 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1601, $renderChildrenClosure1602, $renderingContext);

$output1577 .= '
										</td>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure1607 = function() use ($renderingContext, $self) {
$output1661 = '';

$output1661 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure1663 = function() use ($renderingContext, $self) {
$output1664 = '';

$output1664 .= '
												<td>
													';
$array1665 = array (
);
$output1664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array1665)]);

$output1664 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1667 = function() use ($renderingContext, $self) {
$output1671 = '';

$output1671 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1673 = function() use ($renderingContext, $self) {
$output1675 = '';

$output1675 .= '
															';
$array1676 = array (
);
$output1675 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array1676)]);

$output1675 .= '
														';
return $output1675;
};
$arguments1672 = array();
$arguments1672['each'] = NULL;
$arguments1672['as'] = NULL;
$arguments1672['key'] = NULL;
$arguments1672['reverse'] = false;
$arguments1672['iteration'] = NULL;
$array1674 = array (
);$arguments1672['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1674);
$arguments1672['as'] = 'w';

$output1671 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1672, $renderChildrenClosure1673, $renderingContext);

$output1671 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1678 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1677 = array();
$arguments1677['key'] = NULL;
$arguments1677['id'] = NULL;
$arguments1677['default'] = NULL;
$arguments1677['arguments'] = NULL;
$arguments1677['extensionName'] = NULL;
$arguments1677['languageKey'] = NULL;
$arguments1677['alternativeLanguageKeys'] = NULL;
$arguments1677['key'] = 'administration.statistics.count';

$output1671 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1677, $renderChildrenClosure1678, $renderingContext)]);

$output1671 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1680 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1679 = array();
$arguments1679['subject'] = NULL;
$array1681 = array (
);$arguments1679['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1681);
$renderChildrenClosure1680 = ($arguments1679['subject'] !== null) ? function() use ($arguments1679) { return $arguments1679['subject']; } : $renderChildrenClosure1680;
$output1671 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1679, $renderChildrenClosure1680, $renderingContext);

$output1671 .= '</em>
													</td>
												';
return $output1671;
};
$arguments1666 = array();
$arguments1666['then'] = NULL;
$arguments1666['else'] = NULL;
$arguments1666['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1668 = array();
$array1669 = array (
);$array1668['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1669);
$array1668['1'] = ' == false';

$expression1670 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1666['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1670(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1668)
					),
					$renderingContext
				);
$arguments1666['__thenClosure'] = $renderChildrenClosure1667;

$output1664 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1666, $renderChildrenClosure1667, $renderingContext);

$output1664 .= '
											';
return $output1664;
};
$arguments1662 = array();
$arguments1662['value'] = NULL;
$arguments1662['value'] = 'content';

$output1661 .= '';

$output1661 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure1683 = function() use ($renderingContext, $self) {
$output1684 = '';

$output1684 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1686 = function() use ($renderingContext, $self) {
$output1690 = '';

$output1690 .= '
													<td>';
$array1691 = array (
);
$output1690 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array1691)]);

$output1690 .= '</td>
												';
return $output1690;
};
$arguments1685 = array();
$arguments1685['then'] = NULL;
$arguments1685['else'] = NULL;
$arguments1685['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1687 = array();
$array1688 = array (
);$array1687['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1688);
$array1687['1'] = ' == false';

$expression1689 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1685['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1689(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1687)
					),
					$renderingContext
				);
$arguments1685['__thenClosure'] = $renderChildrenClosure1686;

$output1684 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1685, $renderChildrenClosure1686, $renderingContext);

$output1684 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure1693 = function() use ($renderingContext, $self) {
$array1694 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array1694);
};
$arguments1692 = array();
$arguments1692['value'] = NULL;
$arguments1692['decimals'] = 0;
$arguments1692['decimalSeparator'] = '.';
$arguments1692['thousandsSeparator'] = ',';
$arguments1692['units'] = NULL;
$arguments1692['decimals'] = 1;
$renderChildrenClosure1693 = ($arguments1692['value'] !== null) ? function() use ($arguments1692) { return $arguments1692['value']; } : $renderChildrenClosure1693;
$output1684 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments1692, $renderChildrenClosure1693, $renderingContext)]);

$output1684 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure1696 = function() use ($renderingContext, $self) {
$array1697 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array1697);
};
$arguments1695 = array();

$output1684 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments1695, $renderChildrenClosure1696, $renderingContext)]);

$output1684 .= '
												</td>
											';
return $output1684;
};
$arguments1682 = array();

$output1661 .= '';

$output1661 .= '
										';
return $output1661;
};
$arguments1606 = array();
$arguments1606['expression'] = NULL;
$array1660 = array (
);$arguments1606['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1660);

$output1577 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output1608 = '';

$output1608 .= '
												<td>
													';
$array1609 = array (
);
$output1608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array1609)]);

$output1608 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1611 = function() use ($renderingContext, $self) {
$output1615 = '';

$output1615 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1617 = function() use ($renderingContext, $self) {
$output1619 = '';

$output1619 .= '
															';
$array1620 = array (
);
$output1619 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array1620)]);

$output1619 .= '
														';
return $output1619;
};
$arguments1616 = array();
$arguments1616['each'] = NULL;
$arguments1616['as'] = NULL;
$arguments1616['key'] = NULL;
$arguments1616['reverse'] = false;
$arguments1616['iteration'] = NULL;
$array1618 = array (
);$arguments1616['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1618);
$arguments1616['as'] = 'w';

$output1615 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1616, $renderChildrenClosure1617, $renderingContext);

$output1615 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1622 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1621 = array();
$arguments1621['key'] = NULL;
$arguments1621['id'] = NULL;
$arguments1621['default'] = NULL;
$arguments1621['arguments'] = NULL;
$arguments1621['extensionName'] = NULL;
$arguments1621['languageKey'] = NULL;
$arguments1621['alternativeLanguageKeys'] = NULL;
$arguments1621['key'] = 'administration.statistics.count';

$output1615 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1621, $renderChildrenClosure1622, $renderingContext)]);

$output1615 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1624 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1623 = array();
$arguments1623['subject'] = NULL;
$array1625 = array (
);$arguments1623['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1625);
$renderChildrenClosure1624 = ($arguments1623['subject'] !== null) ? function() use ($arguments1623) { return $arguments1623['subject']; } : $renderChildrenClosure1624;
$output1615 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1623, $renderChildrenClosure1624, $renderingContext);

$output1615 .= '</em>
													</td>
												';
return $output1615;
};
$arguments1610 = array();
$arguments1610['then'] = NULL;
$arguments1610['else'] = NULL;
$arguments1610['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1612 = array();
$array1613 = array (
);$array1612['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1613);
$array1612['1'] = ' == false';

$expression1614 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1610['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1614(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1612)
					),
					$renderingContext
				);
$arguments1610['__thenClosure'] = $renderChildrenClosure1611;

$output1608 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1610, $renderChildrenClosure1611, $renderingContext);

$output1608 .= '
											';
return $output1608;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output1646 = '';

$output1646 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1648 = function() use ($renderingContext, $self) {
$output1652 = '';

$output1652 .= '
													<td>';
$array1653 = array (
);
$output1652 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array1653)]);

$output1652 .= '</td>
												';
return $output1652;
};
$arguments1647 = array();
$arguments1647['then'] = NULL;
$arguments1647['else'] = NULL;
$arguments1647['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1649 = array();
$array1650 = array (
);$array1649['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1650);
$array1649['1'] = ' == false';

$expression1651 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1647['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1651(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1649)
					),
					$renderingContext
				);
$arguments1647['__thenClosure'] = $renderChildrenClosure1648;

$output1646 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1647, $renderChildrenClosure1648, $renderingContext);

$output1646 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure1655 = function() use ($renderingContext, $self) {
$array1656 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array1656);
};
$arguments1654 = array();
$arguments1654['value'] = NULL;
$arguments1654['decimals'] = 0;
$arguments1654['decimalSeparator'] = '.';
$arguments1654['thousandsSeparator'] = ',';
$arguments1654['units'] = NULL;
$arguments1654['decimals'] = 1;
$renderChildrenClosure1655 = ($arguments1654['value'] !== null) ? function() use ($arguments1654) { return $arguments1654['value']; } : $renderChildrenClosure1655;
$output1646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments1654, $renderChildrenClosure1655, $renderingContext)]);

$output1646 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure1658 = function() use ($renderingContext, $self) {
$array1659 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array1659);
};
$arguments1657 = array();

$output1646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments1657, $renderChildrenClosure1658, $renderingContext)]);

$output1646 .= '
												</td>
											';
return $output1646;
});
}
}, array($arguments1606));

$output1577 .= '
									</tr>
								';
return $output1577;
};
$arguments1574 = array();
$arguments1574['each'] = NULL;
$arguments1574['as'] = NULL;
$arguments1574['key'] = NULL;
$arguments1574['reverse'] = false;
$arguments1574['iteration'] = NULL;
$array1576 = array (
);$arguments1574['each'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array1576);
$arguments1574['as'] = 'l';
$arguments1574['iteration'] = 'i';

$output1573 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1574, $renderChildrenClosure1575, $renderingContext);

$output1573 .= '
							';
return $output1573;
};
$arguments1571 = array();

$output1570 .= '';

$output1570 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1699 = function() use ($renderingContext, $self) {
$output1700 = '';

$output1700 .= '
								<tr>
									<td class="nowrap">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1702 = function() use ($renderingContext, $self) {
$array1703 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array1703);
};
$arguments1701 = array();
$arguments1701['value'] = NULL;

$output1700 .= isset($arguments1701['value']) ? $arguments1701['value'] : $renderChildrenClosure1702();

$output1700 .= ' ';
$array1704 = array (
);
$output1700 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array1704)]);

$output1700 .= '</td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure1706 = function() use ($renderingContext, $self) {
$output1719 = '';

$output1719 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure1721 = function() use ($renderingContext, $self) {
$output1722 = '';

$output1722 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1724 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1723 = array();
$arguments1723['key'] = NULL;
$arguments1723['id'] = NULL;
$arguments1723['default'] = NULL;
$arguments1723['arguments'] = NULL;
$arguments1723['extensionName'] = NULL;
$arguments1723['languageKey'] = NULL;
$arguments1723['alternativeLanguageKeys'] = NULL;
$arguments1723['key'] = 'administration.notIndexed';

$output1722 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1723, $renderChildrenClosure1724, $renderingContext)]);

$output1722 .= '
											</td>
										';
return $output1722;
};
$arguments1720 = array();
$arguments1720['value'] = NULL;
$arguments1720['value'] = 'content';

$output1719 .= '';

$output1719 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure1726 = function() use ($renderingContext, $self) {
$output1727 = '';

$output1727 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1729 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1728 = array();
$arguments1728['key'] = NULL;
$arguments1728['id'] = NULL;
$arguments1728['default'] = NULL;
$arguments1728['arguments'] = NULL;
$arguments1728['extensionName'] = NULL;
$arguments1728['languageKey'] = NULL;
$arguments1728['alternativeLanguageKeys'] = NULL;
$arguments1728['key'] = 'administration.notIndexed';

$output1727 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1728, $renderChildrenClosure1729, $renderingContext)]);

$output1727 .= '
											</td>
										';
return $output1727;
};
$arguments1725 = array();

$output1719 .= '';

$output1719 .= '
									';
return $output1719;
};
$arguments1705 = array();
$arguments1705['expression'] = NULL;
$array1718 = array (
);$arguments1705['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1718);

$output1700 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output1707 = '';

$output1707 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1709 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1708 = array();
$arguments1708['key'] = NULL;
$arguments1708['id'] = NULL;
$arguments1708['default'] = NULL;
$arguments1708['arguments'] = NULL;
$arguments1708['extensionName'] = NULL;
$arguments1708['languageKey'] = NULL;
$arguments1708['alternativeLanguageKeys'] = NULL;
$arguments1708['key'] = 'administration.notIndexed';

$output1707 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1708, $renderChildrenClosure1709, $renderingContext)]);

$output1707 .= '
											</td>
										';
return $output1707;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output1715 = '';

$output1715 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1717 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1716 = array();
$arguments1716['key'] = NULL;
$arguments1716['id'] = NULL;
$arguments1716['default'] = NULL;
$arguments1716['arguments'] = NULL;
$arguments1716['extensionName'] = NULL;
$arguments1716['languageKey'] = NULL;
$arguments1716['alternativeLanguageKeys'] = NULL;
$arguments1716['key'] = 'administration.notIndexed';

$output1715 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1716, $renderChildrenClosure1717, $renderingContext)]);

$output1715 .= '
											</td>
										';
return $output1715;
});
}
}, array($arguments1705));

$output1700 .= '
								</tr>
							';
return $output1700;
};
$arguments1698 = array();
$arguments1698['if'] = NULL;

$output1570 .= '';

$output1570 .= '
						';
return $output1570;
};
$arguments1410 = array();
$arguments1410['then'] = NULL;
$arguments1410['else'] = NULL;
$arguments1410['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1567 = array();
$array1568 = array (
);$array1567['0'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array1568);

$expression1569 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1410['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1569(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1567)
					),
					$renderingContext
				);
$arguments1410['__thenClosure'] = function() use ($renderingContext, $self) {
$output1412 = '';

$output1412 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1414 = function() use ($renderingContext, $self) {
$output1416 = '';

$output1416 .= '
									<tr>
										<td class="nowrap">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1418 = function() use ($renderingContext, $self) {
$array1419 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array1419);
};
$arguments1417 = array();
$arguments1417['value'] = NULL;

$output1416 .= isset($arguments1417['value']) ? $arguments1417['value'] : $renderChildrenClosure1418();

$output1416 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1421 = function() use ($renderingContext, $self) {
$output1425 = '';

$output1425 .= ' ';
$array1426 = array (
);
$output1425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array1426)]);
return $output1425;
};
$arguments1420 = array();
$arguments1420['then'] = NULL;
$arguments1420['else'] = NULL;
$arguments1420['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1422 = array();
$array1423 = array (
);$array1422['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array1423);
$array1422['1'] = ' == 0';

$expression1424 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments1420['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1424(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1422)
					),
					$renderingContext
				);
$arguments1420['__thenClosure'] = $renderChildrenClosure1421;

$output1416 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1420, $renderChildrenClosure1421, $renderingContext);

$output1416 .= '
										</td>
										<td>
											<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure1428 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1427 = array();
$arguments1427['action'] = NULL;
$arguments1427['arguments'] = array (
);
$arguments1427['controller'] = NULL;
$arguments1427['extensionName'] = NULL;
$arguments1427['pluginName'] = NULL;
$arguments1427['pageUid'] = NULL;
$arguments1427['pageType'] = 0;
$arguments1427['noCache'] = false;
$arguments1427['noCacheHash'] = false;
$arguments1427['section'] = '';
$arguments1427['format'] = '';
$arguments1427['linkAccessRestrictedPages'] = false;
$arguments1427['additionalParams'] = array (
);
$arguments1427['absolute'] = false;
$arguments1427['addQueryString'] = false;
$arguments1427['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1427['addQueryStringMethod'] = NULL;
$arguments1427['action'] = 'deleteIndexedItem';
// Rendering Array
$array1429 = array();
$array1430 = array (
);$array1429['id'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array1430);
$array1431 = array (
);$array1429['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array1431);
$array1432 = array (
);$array1429['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1432);
$arguments1427['arguments'] = $array1429;

$output1416 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1427, $renderChildrenClosure1428, $renderingContext)]);

$output1416 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1434 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1433 = array();
$arguments1433['key'] = NULL;
$arguments1433['id'] = NULL;
$arguments1433['default'] = NULL;
$arguments1433['arguments'] = NULL;
$arguments1433['extensionName'] = NULL;
$arguments1433['languageKey'] = NULL;
$arguments1433['alternativeLanguageKeys'] = NULL;
$arguments1433['key'] = 'administration.removeEntry';

$output1416 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1433, $renderChildrenClosure1434, $renderingContext)]);

$output1416 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1436 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1435 = array();
$arguments1435['identifier'] = NULL;
$arguments1435['size'] = 'small';
$arguments1435['overlay'] = NULL;
$arguments1435['state'] = 'default';
$arguments1435['alternativeMarkupIdentifier'] = NULL;
$arguments1435['identifier'] = 'actions-edit-delete';

$output1416 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1435, $renderChildrenClosure1436, $renderingContext);

$output1416 .= '
											</a>
										</td>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1438 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1437 = array();
$arguments1437['additionalAttributes'] = NULL;
$arguments1437['data'] = NULL;
$arguments1437['class'] = NULL;
$arguments1437['dir'] = NULL;
$arguments1437['id'] = NULL;
$arguments1437['lang'] = NULL;
$arguments1437['style'] = NULL;
$arguments1437['title'] = NULL;
$arguments1437['accesskey'] = NULL;
$arguments1437['tabindex'] = NULL;
$arguments1437['onclick'] = NULL;
$arguments1437['alt'] = NULL;
$arguments1437['ismap'] = NULL;
$arguments1437['longdesc'] = NULL;
$arguments1437['usemap'] = NULL;
$arguments1437['src'] = NULL;
$arguments1437['treatIdAsReference'] = NULL;
$arguments1437['image'] = NULL;
$arguments1437['crop'] = NULL;
$arguments1437['cropVariant'] = 'default';
$arguments1437['width'] = NULL;
$arguments1437['height'] = NULL;
$arguments1437['minWidth'] = NULL;
$arguments1437['minHeight'] = NULL;
$arguments1437['maxWidth'] = NULL;
$arguments1437['maxHeight'] = NULL;
$arguments1437['absolute'] = false;
$array1439 = array (
);$arguments1437['src'] = $renderingContext->getVariableProvider()->getByPath('l.icon', $array1439);

$output1416 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1437, $renderChildrenClosure1438, $renderingContext);

$output1416 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1441 = function() use ($renderingContext, $self) {
$array1444 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.item_title', $array1444)]);
};
$arguments1440 = array();
$arguments1440['additionalAttributes'] = NULL;
$arguments1440['data'] = NULL;
$arguments1440['class'] = NULL;
$arguments1440['dir'] = NULL;
$arguments1440['id'] = NULL;
$arguments1440['lang'] = NULL;
$arguments1440['style'] = NULL;
$arguments1440['title'] = NULL;
$arguments1440['accesskey'] = NULL;
$arguments1440['tabindex'] = NULL;
$arguments1440['onclick'] = NULL;
$arguments1440['name'] = NULL;
$arguments1440['rel'] = NULL;
$arguments1440['rev'] = NULL;
$arguments1440['target'] = NULL;
$arguments1440['action'] = NULL;
$arguments1440['controller'] = NULL;
$arguments1440['extensionName'] = NULL;
$arguments1440['pluginName'] = NULL;
$arguments1440['pageUid'] = NULL;
$arguments1440['pageType'] = NULL;
$arguments1440['noCache'] = NULL;
$arguments1440['noCacheHash'] = NULL;
$arguments1440['section'] = NULL;
$arguments1440['format'] = NULL;
$arguments1440['linkAccessRestrictedPages'] = NULL;
$arguments1440['additionalParams'] = NULL;
$arguments1440['absolute'] = NULL;
$arguments1440['addQueryString'] = NULL;
$arguments1440['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1440['addQueryStringMethod'] = NULL;
$arguments1440['arguments'] = NULL;
$arguments1440['action'] = 'statisticDetails';
// Rendering Array
$array1442 = array();
$array1443 = array (
);$array1442['pageHash'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array1443);
$arguments1440['arguments'] = $array1442;

$output1416 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1440, $renderChildrenClosure1441, $renderingContext);

$output1416 .= '
										</td>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure1446 = function() use ($renderingContext, $self) {
$output1500 = '';

$output1500 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure1502 = function() use ($renderingContext, $self) {
$output1503 = '';

$output1503 .= '
												<td>
													';
$array1504 = array (
);
$output1503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array1504)]);

$output1503 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1506 = function() use ($renderingContext, $self) {
$output1510 = '';

$output1510 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1512 = function() use ($renderingContext, $self) {
$output1514 = '';

$output1514 .= '
															';
$array1515 = array (
);
$output1514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array1515)]);

$output1514 .= '
														';
return $output1514;
};
$arguments1511 = array();
$arguments1511['each'] = NULL;
$arguments1511['as'] = NULL;
$arguments1511['key'] = NULL;
$arguments1511['reverse'] = false;
$arguments1511['iteration'] = NULL;
$array1513 = array (
);$arguments1511['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1513);
$arguments1511['as'] = 'w';

$output1510 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1511, $renderChildrenClosure1512, $renderingContext);

$output1510 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1517 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1516 = array();
$arguments1516['key'] = NULL;
$arguments1516['id'] = NULL;
$arguments1516['default'] = NULL;
$arguments1516['arguments'] = NULL;
$arguments1516['extensionName'] = NULL;
$arguments1516['languageKey'] = NULL;
$arguments1516['alternativeLanguageKeys'] = NULL;
$arguments1516['key'] = 'administration.statistics.count';

$output1510 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1516, $renderChildrenClosure1517, $renderingContext)]);

$output1510 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1519 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1518 = array();
$arguments1518['subject'] = NULL;
$array1520 = array (
);$arguments1518['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1520);
$renderChildrenClosure1519 = ($arguments1518['subject'] !== null) ? function() use ($arguments1518) { return $arguments1518['subject']; } : $renderChildrenClosure1519;
$output1510 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1518, $renderChildrenClosure1519, $renderingContext);

$output1510 .= '</em>
													</td>
												';
return $output1510;
};
$arguments1505 = array();
$arguments1505['then'] = NULL;
$arguments1505['else'] = NULL;
$arguments1505['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1507 = array();
$array1508 = array (
);$array1507['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1508);
$array1507['1'] = ' == false';

$expression1509 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1505['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1509(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1507)
					),
					$renderingContext
				);
$arguments1505['__thenClosure'] = $renderChildrenClosure1506;

$output1503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1505, $renderChildrenClosure1506, $renderingContext);

$output1503 .= '
											';
return $output1503;
};
$arguments1501 = array();
$arguments1501['value'] = NULL;
$arguments1501['value'] = 'content';

$output1500 .= '';

$output1500 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure1522 = function() use ($renderingContext, $self) {
$output1523 = '';

$output1523 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1525 = function() use ($renderingContext, $self) {
$output1529 = '';

$output1529 .= '
													<td>';
$array1530 = array (
);
$output1529 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array1530)]);

$output1529 .= '</td>
												';
return $output1529;
};
$arguments1524 = array();
$arguments1524['then'] = NULL;
$arguments1524['else'] = NULL;
$arguments1524['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1526 = array();
$array1527 = array (
);$array1526['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1527);
$array1526['1'] = ' == false';

$expression1528 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1524['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1528(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1526)
					),
					$renderingContext
				);
$arguments1524['__thenClosure'] = $renderChildrenClosure1525;

$output1523 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1524, $renderChildrenClosure1525, $renderingContext);

$output1523 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure1532 = function() use ($renderingContext, $self) {
$array1533 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array1533);
};
$arguments1531 = array();
$arguments1531['value'] = NULL;
$arguments1531['decimals'] = 0;
$arguments1531['decimalSeparator'] = '.';
$arguments1531['thousandsSeparator'] = ',';
$arguments1531['units'] = NULL;
$arguments1531['decimals'] = 1;
$renderChildrenClosure1532 = ($arguments1531['value'] !== null) ? function() use ($arguments1531) { return $arguments1531['value']; } : $renderChildrenClosure1532;
$output1523 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments1531, $renderChildrenClosure1532, $renderingContext)]);

$output1523 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure1535 = function() use ($renderingContext, $self) {
$array1536 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array1536);
};
$arguments1534 = array();

$output1523 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments1534, $renderChildrenClosure1535, $renderingContext)]);

$output1523 .= '
												</td>
											';
return $output1523;
};
$arguments1521 = array();

$output1500 .= '';

$output1500 .= '
										';
return $output1500;
};
$arguments1445 = array();
$arguments1445['expression'] = NULL;
$array1499 = array (
);$arguments1445['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1499);

$output1416 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output1447 = '';

$output1447 .= '
												<td>
													';
$array1448 = array (
);
$output1447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array1448)]);

$output1447 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1450 = function() use ($renderingContext, $self) {
$output1454 = '';

$output1454 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1456 = function() use ($renderingContext, $self) {
$output1458 = '';

$output1458 .= '
															';
$array1459 = array (
);
$output1458 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array1459)]);

$output1458 .= '
														';
return $output1458;
};
$arguments1455 = array();
$arguments1455['each'] = NULL;
$arguments1455['as'] = NULL;
$arguments1455['key'] = NULL;
$arguments1455['reverse'] = false;
$arguments1455['iteration'] = NULL;
$array1457 = array (
);$arguments1455['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1457);
$arguments1455['as'] = 'w';

$output1454 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1455, $renderChildrenClosure1456, $renderingContext);

$output1454 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1460 = array();
$arguments1460['key'] = NULL;
$arguments1460['id'] = NULL;
$arguments1460['default'] = NULL;
$arguments1460['arguments'] = NULL;
$arguments1460['extensionName'] = NULL;
$arguments1460['languageKey'] = NULL;
$arguments1460['alternativeLanguageKeys'] = NULL;
$arguments1460['key'] = 'administration.statistics.count';

$output1454 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1460, $renderChildrenClosure1461, $renderingContext)]);

$output1454 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1462 = array();
$arguments1462['subject'] = NULL;
$array1464 = array (
);$arguments1462['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1464);
$renderChildrenClosure1463 = ($arguments1462['subject'] !== null) ? function() use ($arguments1462) { return $arguments1462['subject']; } : $renderChildrenClosure1463;
$output1454 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1462, $renderChildrenClosure1463, $renderingContext);

$output1454 .= '</em>
													</td>
												';
return $output1454;
};
$arguments1449 = array();
$arguments1449['then'] = NULL;
$arguments1449['else'] = NULL;
$arguments1449['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1451 = array();
$array1452 = array (
);$array1451['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1452);
$array1451['1'] = ' == false';

$expression1453 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1449['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1453(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1451)
					),
					$renderingContext
				);
$arguments1449['__thenClosure'] = $renderChildrenClosure1450;

$output1447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1449, $renderChildrenClosure1450, $renderingContext);

$output1447 .= '
											';
return $output1447;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output1485 = '';

$output1485 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1487 = function() use ($renderingContext, $self) {
$output1491 = '';

$output1491 .= '
													<td>';
$array1492 = array (
);
$output1491 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array1492)]);

$output1491 .= '</td>
												';
return $output1491;
};
$arguments1486 = array();
$arguments1486['then'] = NULL;
$arguments1486['else'] = NULL;
$arguments1486['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1488 = array();
$array1489 = array (
);$array1488['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1489);
$array1488['1'] = ' == false';

$expression1490 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1486['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1490(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1488)
					),
					$renderingContext
				);
$arguments1486['__thenClosure'] = $renderChildrenClosure1487;

$output1485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1486, $renderChildrenClosure1487, $renderingContext);

$output1485 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure1494 = function() use ($renderingContext, $self) {
$array1495 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array1495);
};
$arguments1493 = array();
$arguments1493['value'] = NULL;
$arguments1493['decimals'] = 0;
$arguments1493['decimalSeparator'] = '.';
$arguments1493['thousandsSeparator'] = ',';
$arguments1493['units'] = NULL;
$arguments1493['decimals'] = 1;
$renderChildrenClosure1494 = ($arguments1493['value'] !== null) ? function() use ($arguments1493) { return $arguments1493['value']; } : $renderChildrenClosure1494;
$output1485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments1493, $renderChildrenClosure1494, $renderingContext)]);

$output1485 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure1497 = function() use ($renderingContext, $self) {
$array1498 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array1498);
};
$arguments1496 = array();

$output1485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments1496, $renderChildrenClosure1497, $renderingContext)]);

$output1485 .= '
												</td>
											';
return $output1485;
});
}
}, array($arguments1445));

$output1416 .= '
									</tr>
								';
return $output1416;
};
$arguments1413 = array();
$arguments1413['each'] = NULL;
$arguments1413['as'] = NULL;
$arguments1413['key'] = NULL;
$arguments1413['reverse'] = false;
$arguments1413['iteration'] = NULL;
$array1415 = array (
);$arguments1413['each'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array1415);
$arguments1413['as'] = 'l';
$arguments1413['iteration'] = 'i';

$output1412 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1413, $renderChildrenClosure1414, $renderingContext);

$output1412 .= '
							';
return $output1412;
};
$arguments1410['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1537 = '';

$output1537 .= '
								<tr>
									<td class="nowrap">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1539 = function() use ($renderingContext, $self) {
$array1540 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array1540);
};
$arguments1538 = array();
$arguments1538['value'] = NULL;

$output1537 .= isset($arguments1538['value']) ? $arguments1538['value'] : $renderChildrenClosure1539();

$output1537 .= ' ';
$array1541 = array (
);
$output1537 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array1541)]);

$output1537 .= '</td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure1543 = function() use ($renderingContext, $self) {
$output1556 = '';

$output1556 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure1558 = function() use ($renderingContext, $self) {
$output1559 = '';

$output1559 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1561 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1560 = array();
$arguments1560['key'] = NULL;
$arguments1560['id'] = NULL;
$arguments1560['default'] = NULL;
$arguments1560['arguments'] = NULL;
$arguments1560['extensionName'] = NULL;
$arguments1560['languageKey'] = NULL;
$arguments1560['alternativeLanguageKeys'] = NULL;
$arguments1560['key'] = 'administration.notIndexed';

$output1559 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1560, $renderChildrenClosure1561, $renderingContext)]);

$output1559 .= '
											</td>
										';
return $output1559;
};
$arguments1557 = array();
$arguments1557['value'] = NULL;
$arguments1557['value'] = 'content';

$output1556 .= '';

$output1556 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure1563 = function() use ($renderingContext, $self) {
$output1564 = '';

$output1564 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1566 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1565 = array();
$arguments1565['key'] = NULL;
$arguments1565['id'] = NULL;
$arguments1565['default'] = NULL;
$arguments1565['arguments'] = NULL;
$arguments1565['extensionName'] = NULL;
$arguments1565['languageKey'] = NULL;
$arguments1565['alternativeLanguageKeys'] = NULL;
$arguments1565['key'] = 'administration.notIndexed';

$output1564 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1565, $renderChildrenClosure1566, $renderingContext)]);

$output1564 .= '
											</td>
										';
return $output1564;
};
$arguments1562 = array();

$output1556 .= '';

$output1556 .= '
									';
return $output1556;
};
$arguments1542 = array();
$arguments1542['expression'] = NULL;
$array1555 = array (
);$arguments1542['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1555);

$output1537 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output1544 = '';

$output1544 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1546 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1545 = array();
$arguments1545['key'] = NULL;
$arguments1545['id'] = NULL;
$arguments1545['default'] = NULL;
$arguments1545['arguments'] = NULL;
$arguments1545['extensionName'] = NULL;
$arguments1545['languageKey'] = NULL;
$arguments1545['alternativeLanguageKeys'] = NULL;
$arguments1545['key'] = 'administration.notIndexed';

$output1544 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1545, $renderChildrenClosure1546, $renderingContext)]);

$output1544 .= '
											</td>
										';
return $output1544;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output1552 = '';

$output1552 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1554 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1553 = array();
$arguments1553['key'] = NULL;
$arguments1553['id'] = NULL;
$arguments1553['default'] = NULL;
$arguments1553['arguments'] = NULL;
$arguments1553['extensionName'] = NULL;
$arguments1553['languageKey'] = NULL;
$arguments1553['alternativeLanguageKeys'] = NULL;
$arguments1553['key'] = 'administration.notIndexed';

$output1552 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1553, $renderChildrenClosure1554, $renderingContext)]);

$output1552 .= '
											</td>
										';
return $output1552;
});
}
}, array($arguments1542));

$output1537 .= '
								</tr>
							';
return $output1537;
};

$output1409 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1410, $renderChildrenClosure1411, $renderingContext);

$output1409 .= '
					';
return $output1409;
};
$arguments1406 = array();
$arguments1406['each'] = NULL;
$arguments1406['as'] = NULL;
$arguments1406['key'] = NULL;
$arguments1406['reverse'] = false;
$arguments1406['iteration'] = NULL;
$array1408 = array (
);$arguments1406['each'] = $renderingContext->getVariableProvider()->getByPath('tree', $array1408);
$arguments1406['as'] = 'line';

$output1306 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1406, $renderChildrenClosure1407, $renderingContext);

$output1306 .= '
					</tbody>
			</table>
		';
return $output1306;
};
$arguments1304 = array();

$output1303 .= '';

$output1303 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1731 = function() use ($renderingContext, $self) {
$output1732 = '';

$output1732 .= '
			<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1734 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1733 = array();
$arguments1733['key'] = NULL;
$arguments1733['id'] = NULL;
$arguments1733['default'] = NULL;
$arguments1733['arguments'] = NULL;
$arguments1733['extensionName'] = NULL;
$arguments1733['languageKey'] = NULL;
$arguments1733['alternativeLanguageKeys'] = NULL;
$arguments1733['key'] = 'administration.noPageSelected';

$output1732 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1733, $renderChildrenClosure1734, $renderingContext)]);

$output1732 .= '</h2>
		';
return $output1732;
};
$arguments1730 = array();
$arguments1730['if'] = NULL;

$output1303 .= '';

$output1303 .= '
	';
return $output1303;
};
$arguments871 = array();
$arguments871['then'] = NULL;
$arguments871['else'] = NULL;
$arguments871['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1300 = array();
$array1301 = array (
);$array1300['0'] = $renderingContext->getVariableProvider()->getByPath('tree', $array1301);

$expression1302 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments871['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1302(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1300)
					),
					$renderingContext
				);
$arguments871['__thenClosure'] = function() use ($renderingContext, $self) {
$output873 = '';

$output873 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure875 = function() use ($renderingContext, $self) {
$output878 = '';

$output878 .= '
				<div class="form-group">
					<div class="col-sm-12">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure880 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments879 = array();
$arguments879['additionalAttributes'] = NULL;
$arguments879['data'] = NULL;
$arguments879['name'] = NULL;
$arguments879['value'] = NULL;
$arguments879['property'] = NULL;
$arguments879['class'] = NULL;
$arguments879['dir'] = NULL;
$arguments879['id'] = NULL;
$arguments879['lang'] = NULL;
$arguments879['style'] = NULL;
$arguments879['title'] = NULL;
$arguments879['accesskey'] = NULL;
$arguments879['tabindex'] = NULL;
$arguments879['onclick'] = NULL;
$arguments879['size'] = NULL;
$arguments879['disabled'] = NULL;
$arguments879['options'] = NULL;
$arguments879['optionsAfterContent'] = false;
$arguments879['optionValueField'] = NULL;
$arguments879['optionLabelField'] = NULL;
$arguments879['sortByOptionLabel'] = false;
$arguments879['selectAllByDefault'] = false;
$arguments879['errorClass'] = 'f3-form-error';
$arguments879['prependOptionLabel'] = NULL;
$arguments879['prependOptionValue'] = NULL;
$arguments879['multiple'] = false;
$arguments879['required'] = false;
$arguments879['name'] = 'mode';
// Rendering Array
$array881 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure883 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments882 = array();
$arguments882['key'] = NULL;
$arguments882['id'] = NULL;
$arguments882['default'] = NULL;
$arguments882['arguments'] = NULL;
$arguments882['extensionName'] = NULL;
$arguments882['languageKey'] = NULL;
$arguments882['alternativeLanguageKeys'] = NULL;
$arguments882['key'] = 'administration.statistics.view.overview';
$array881['overview'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments882, $renderChildrenClosure883, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure885 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments884 = array();
$arguments884['key'] = NULL;
$arguments884['id'] = NULL;
$arguments884['default'] = NULL;
$arguments884['arguments'] = NULL;
$arguments884['extensionName'] = NULL;
$arguments884['languageKey'] = NULL;
$arguments884['alternativeLanguageKeys'] = NULL;
$arguments884['key'] = 'administration.statistics.view.content';
$array881['content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments884, $renderChildrenClosure885, $renderingContext);
$arguments879['options'] = $array881;
$array886 = array (
);$arguments879['value'] = $renderingContext->getVariableProvider()->getByPath('mode', $array886);
// Rendering Array
$array887 = array();
$array887['onchange'] = 'this.form.submit();';
$arguments879['additionalAttributes'] = $array887;

$output878 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments879, $renderChildrenClosure880, $renderingContext);

$output878 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure889 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments888 = array();
$arguments888['additionalAttributes'] = NULL;
$arguments888['data'] = NULL;
$arguments888['name'] = NULL;
$arguments888['value'] = NULL;
$arguments888['property'] = NULL;
$arguments888['class'] = NULL;
$arguments888['dir'] = NULL;
$arguments888['id'] = NULL;
$arguments888['lang'] = NULL;
$arguments888['style'] = NULL;
$arguments888['title'] = NULL;
$arguments888['accesskey'] = NULL;
$arguments888['tabindex'] = NULL;
$arguments888['onclick'] = NULL;
$arguments888['size'] = NULL;
$arguments888['disabled'] = NULL;
$arguments888['options'] = NULL;
$arguments888['optionsAfterContent'] = false;
$arguments888['optionValueField'] = NULL;
$arguments888['optionLabelField'] = NULL;
$arguments888['sortByOptionLabel'] = false;
$arguments888['selectAllByDefault'] = false;
$arguments888['errorClass'] = 'f3-form-error';
$arguments888['prependOptionLabel'] = NULL;
$arguments888['prependOptionValue'] = NULL;
$arguments888['multiple'] = false;
$arguments888['required'] = false;
$arguments888['name'] = 'depth';
$array890 = array (
);$arguments888['options'] = $renderingContext->getVariableProvider()->getByPath('levelTranslations', $array890);
$array891 = array (
);$arguments888['value'] = $renderingContext->getVariableProvider()->getByPath('depth', $array891);
// Rendering Array
$array892 = array();
$array892['onchange'] = 'this.form.submit();';
$arguments888['additionalAttributes'] = $array892;

$output878 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments888, $renderChildrenClosure889, $renderingContext);

$output878 .= '
					</div>
				</div>
			';
return $output878;
};
$arguments874 = array();
$arguments874['additionalAttributes'] = NULL;
$arguments874['data'] = NULL;
$arguments874['action'] = NULL;
$arguments874['arguments'] = array (
);
$arguments874['controller'] = NULL;
$arguments874['extensionName'] = NULL;
$arguments874['pluginName'] = NULL;
$arguments874['pageUid'] = NULL;
$arguments874['object'] = NULL;
$arguments874['pageType'] = 0;
$arguments874['noCache'] = false;
$arguments874['noCacheHash'] = false;
$arguments874['section'] = '';
$arguments874['format'] = '';
$arguments874['additionalParams'] = array (
);
$arguments874['absolute'] = false;
$arguments874['addQueryString'] = false;
$arguments874['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments874['addQueryStringMethod'] = 'GET';
$arguments874['fieldNamePrefix'] = NULL;
$arguments874['actionUri'] = NULL;
$arguments874['objectName'] = NULL;
$arguments874['hiddenFieldClassName'] = NULL;
$arguments874['enctype'] = NULL;
$arguments874['method'] = NULL;
$arguments874['name'] = NULL;
$arguments874['onreset'] = NULL;
$arguments874['onsubmit'] = NULL;
$arguments874['target'] = NULL;
$arguments874['novalidate'] = NULL;
$arguments874['class'] = NULL;
$arguments874['dir'] = NULL;
$arguments874['id'] = NULL;
$arguments874['lang'] = NULL;
$arguments874['style'] = NULL;
$arguments874['title'] = NULL;
$arguments874['accesskey'] = NULL;
$arguments874['tabindex'] = NULL;
$arguments874['onclick'] = NULL;
$arguments874['name'] = 'statistic';
$arguments874['action'] = 'statistic';
$arguments874['class'] = 'form-horizontal';
// Rendering Array
$array876 = array();
$array877 = array (
);$array876['id'] = $renderingContext->getVariableProvider()->getByPath('pageUid', $array877);
$arguments874['arguments'] = $array876;

$output873 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments874, $renderChildrenClosure875, $renderingContext);

$output873 .= '
			<table class="table table-striped table-hover table-vertical-top">
				<thead>
					<tr>
						<th></th>
						<th>
							<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure894 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments893 = array();
$arguments893['action'] = NULL;
$arguments893['arguments'] = array (
);
$arguments893['controller'] = NULL;
$arguments893['extensionName'] = NULL;
$arguments893['pluginName'] = NULL;
$arguments893['pageUid'] = NULL;
$arguments893['pageType'] = 0;
$arguments893['noCache'] = false;
$arguments893['noCacheHash'] = false;
$arguments893['section'] = '';
$arguments893['format'] = '';
$arguments893['linkAccessRestrictedPages'] = false;
$arguments893['additionalParams'] = array (
);
$arguments893['absolute'] = false;
$arguments893['addQueryString'] = false;
$arguments893['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments893['addQueryStringMethod'] = NULL;
$arguments893['action'] = 'deleteIndexedItem';
// Rendering Array
$array895 = array();
$array895['id'] = 'ALL';
$array896 = array (
);$array895['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array896);
$array897 = array (
);$array895['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array897);
$arguments893['arguments'] = $array895;

$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments893, $renderChildrenClosure894, $renderingContext)]);

$output873 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure899 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments898 = array();
$arguments898['key'] = NULL;
$arguments898['id'] = NULL;
$arguments898['default'] = NULL;
$arguments898['arguments'] = NULL;
$arguments898['extensionName'] = NULL;
$arguments898['languageKey'] = NULL;
$arguments898['alternativeLanguageKeys'] = NULL;
$arguments898['key'] = 'administration.removeAllEntries';

$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments898, $renderChildrenClosure899, $renderingContext)]);

$output873 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure901 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments900 = array();
$arguments900['identifier'] = NULL;
$arguments900['size'] = 'small';
$arguments900['overlay'] = NULL;
$arguments900['state'] = 'default';
$arguments900['alternativeMarkupIdentifier'] = NULL;
$arguments900['identifier'] = 'actions-edit-delete';

$output873 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments900, $renderChildrenClosure901, $renderingContext);

$output873 .= '
							</a>
						</th>
						<th>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure903 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments902 = array();
$arguments902['key'] = NULL;
$arguments902['id'] = NULL;
$arguments902['default'] = NULL;
$arguments902['arguments'] = NULL;
$arguments902['extensionName'] = NULL;
$arguments902['languageKey'] = NULL;
$arguments902['alternativeLanguageKeys'] = NULL;
$arguments902['key'] = 'field.fileName';

$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments902, $renderChildrenClosure903, $renderingContext)]);

$output873 .= '
						</th>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure905 = function() use ($renderingContext, $self) {
$output944 = '';

$output944 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure946 = function() use ($renderingContext, $self) {
$output947 = '';

$output947 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure949 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments948 = array();
$arguments948['key'] = NULL;
$arguments948['id'] = NULL;
$arguments948['default'] = NULL;
$arguments948['arguments'] = NULL;
$arguments948['extensionName'] = NULL;
$arguments948['languageKey'] = NULL;
$arguments948['alternativeLanguageKeys'] = NULL;
$arguments948['key'] = 'field.content';

$output947 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments948, $renderChildrenClosure949, $renderingContext)]);

$output947 .= '
								</th>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure951 = function() use ($renderingContext, $self) {
$output955 = '';

$output955 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure957 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments956 = array();
$arguments956['key'] = NULL;
$arguments956['id'] = NULL;
$arguments956['default'] = NULL;
$arguments956['arguments'] = NULL;
$arguments956['extensionName'] = NULL;
$arguments956['languageKey'] = NULL;
$arguments956['alternativeLanguageKeys'] = NULL;
$arguments956['key'] = 'field.words';

$output955 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments956, $renderChildrenClosure957, $renderingContext)]);

$output955 .= '
									</th>
								';
return $output955;
};
$arguments950 = array();
$arguments950['then'] = NULL;
$arguments950['else'] = NULL;
$arguments950['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array952 = array();
$array953 = array (
);$array952['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array953);
$array952['1'] = ' == false';

$expression954 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments950['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression954(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array952)
					),
					$renderingContext
				);
$arguments950['__thenClosure'] = $renderChildrenClosure951;

$output947 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments950, $renderChildrenClosure951, $renderingContext);

$output947 .= '
							';
return $output947;
};
$arguments945 = array();
$arguments945['value'] = NULL;
$arguments945['value'] = 'content';

$output944 .= '';

$output944 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure959 = function() use ($renderingContext, $self) {
$output960 = '';

$output960 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure962 = function() use ($renderingContext, $self) {
$output966 = '';

$output966 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure968 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments967 = array();
$arguments967['key'] = NULL;
$arguments967['id'] = NULL;
$arguments967['default'] = NULL;
$arguments967['arguments'] = NULL;
$arguments967['extensionName'] = NULL;
$arguments967['languageKey'] = NULL;
$arguments967['alternativeLanguageKeys'] = NULL;
$arguments967['key'] = 'field.wordCount';

$output966 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments967, $renderChildrenClosure968, $renderingContext)]);

$output966 .= '
									</th>
								';
return $output966;
};
$arguments961 = array();
$arguments961['then'] = NULL;
$arguments961['else'] = NULL;
$arguments961['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array963 = array();
$array964 = array (
);$array963['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array964);
$array963['1'] = ' == false';

$expression965 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments961['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression965(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array963)
					),
					$renderingContext
				);
$arguments961['__thenClosure'] = $renderChildrenClosure962;

$output960 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments961, $renderChildrenClosure962, $renderingContext);

$output960 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure970 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments969 = array();
$arguments969['key'] = NULL;
$arguments969['id'] = NULL;
$arguments969['default'] = NULL;
$arguments969['arguments'] = NULL;
$arguments969['extensionName'] = NULL;
$arguments969['languageKey'] = NULL;
$arguments969['alternativeLanguageKeys'] = NULL;
$arguments969['key'] = 'field.fileSize';

$output960 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments969, $renderChildrenClosure970, $renderingContext)]);

$output960 .= '
								</th>
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure972 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments971 = array();
$arguments971['key'] = NULL;
$arguments971['id'] = NULL;
$arguments971['default'] = NULL;
$arguments971['arguments'] = NULL;
$arguments971['extensionName'] = NULL;
$arguments971['languageKey'] = NULL;
$arguments971['alternativeLanguageKeys'] = NULL;
$arguments971['key'] = 'field.indexed';

$output960 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments971, $renderChildrenClosure972, $renderingContext)]);

$output960 .= '
								</th>
							';
return $output960;
};
$arguments958 = array();

$output944 .= '';

$output944 .= '
						';
return $output944;
};
$arguments904 = array();
$arguments904['expression'] = NULL;
$array943 = array (
);$arguments904['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array943);

$output873 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output906 = '';

$output906 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure908 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments907 = array();
$arguments907['key'] = NULL;
$arguments907['id'] = NULL;
$arguments907['default'] = NULL;
$arguments907['arguments'] = NULL;
$arguments907['extensionName'] = NULL;
$arguments907['languageKey'] = NULL;
$arguments907['alternativeLanguageKeys'] = NULL;
$arguments907['key'] = 'field.content';

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments907, $renderChildrenClosure908, $renderingContext)]);

$output906 .= '
								</th>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure910 = function() use ($renderingContext, $self) {
$output914 = '';

$output914 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure916 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments915 = array();
$arguments915['key'] = NULL;
$arguments915['id'] = NULL;
$arguments915['default'] = NULL;
$arguments915['arguments'] = NULL;
$arguments915['extensionName'] = NULL;
$arguments915['languageKey'] = NULL;
$arguments915['alternativeLanguageKeys'] = NULL;
$arguments915['key'] = 'field.words';

$output914 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments915, $renderChildrenClosure916, $renderingContext)]);

$output914 .= '
									</th>
								';
return $output914;
};
$arguments909 = array();
$arguments909['then'] = NULL;
$arguments909['else'] = NULL;
$arguments909['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array911 = array();
$array912 = array (
);$array911['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array912);
$array911['1'] = ' == false';

$expression913 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments909['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression913(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array911)
					),
					$renderingContext
				);
$arguments909['__thenClosure'] = $renderChildrenClosure910;

$output906 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments909, $renderChildrenClosure910, $renderingContext);

$output906 .= '
							';
return $output906;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output930 = '';

$output930 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure932 = function() use ($renderingContext, $self) {
$output936 = '';

$output936 .= '
									<th>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure938 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments937 = array();
$arguments937['key'] = NULL;
$arguments937['id'] = NULL;
$arguments937['default'] = NULL;
$arguments937['arguments'] = NULL;
$arguments937['extensionName'] = NULL;
$arguments937['languageKey'] = NULL;
$arguments937['alternativeLanguageKeys'] = NULL;
$arguments937['key'] = 'field.wordCount';

$output936 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments937, $renderChildrenClosure938, $renderingContext)]);

$output936 .= '
									</th>
								';
return $output936;
};
$arguments931 = array();
$arguments931['then'] = NULL;
$arguments931['else'] = NULL;
$arguments931['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array933 = array();
$array934 = array (
);$array933['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array934);
$array933['1'] = ' == false';

$expression935 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments931['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression935(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array933)
					),
					$renderingContext
				);
$arguments931['__thenClosure'] = $renderChildrenClosure932;

$output930 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments931, $renderChildrenClosure932, $renderingContext);

$output930 .= '
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure940 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments939 = array();
$arguments939['key'] = NULL;
$arguments939['id'] = NULL;
$arguments939['default'] = NULL;
$arguments939['arguments'] = NULL;
$arguments939['extensionName'] = NULL;
$arguments939['languageKey'] = NULL;
$arguments939['alternativeLanguageKeys'] = NULL;
$arguments939['key'] = 'field.fileSize';

$output930 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments939, $renderChildrenClosure940, $renderingContext)]);

$output930 .= '
								</th>
								<th>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure942 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments941 = array();
$arguments941['key'] = NULL;
$arguments941['id'] = NULL;
$arguments941['default'] = NULL;
$arguments941['arguments'] = NULL;
$arguments941['extensionName'] = NULL;
$arguments941['languageKey'] = NULL;
$arguments941['alternativeLanguageKeys'] = NULL;
$arguments941['key'] = 'field.indexed';

$output930 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments941, $renderChildrenClosure942, $renderingContext)]);

$output930 .= '
								</th>
							';
return $output930;
});
}
}, array($arguments904));

$output873 .= '
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure974 = function() use ($renderingContext, $self) {
$output976 = '';

$output976 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure978 = function() use ($renderingContext, $self) {
$output1137 = '';

$output1137 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1139 = function() use ($renderingContext, $self) {
$output1140 = '';

$output1140 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1142 = function() use ($renderingContext, $self) {
$output1144 = '';

$output1144 .= '
									<tr>
										<td class="nowrap">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1146 = function() use ($renderingContext, $self) {
$array1147 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array1147);
};
$arguments1145 = array();
$arguments1145['value'] = NULL;

$output1144 .= isset($arguments1145['value']) ? $arguments1145['value'] : $renderChildrenClosure1146();

$output1144 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1149 = function() use ($renderingContext, $self) {
$output1153 = '';

$output1153 .= ' ';
$array1154 = array (
);
$output1153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array1154)]);
return $output1153;
};
$arguments1148 = array();
$arguments1148['then'] = NULL;
$arguments1148['else'] = NULL;
$arguments1148['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1150 = array();
$array1151 = array (
);$array1150['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array1151);
$array1150['1'] = ' == 0';

$expression1152 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments1148['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1152(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1150)
					),
					$renderingContext
				);
$arguments1148['__thenClosure'] = $renderChildrenClosure1149;

$output1144 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1148, $renderChildrenClosure1149, $renderingContext);

$output1144 .= '
										</td>
										<td>
											<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure1156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1155 = array();
$arguments1155['action'] = NULL;
$arguments1155['arguments'] = array (
);
$arguments1155['controller'] = NULL;
$arguments1155['extensionName'] = NULL;
$arguments1155['pluginName'] = NULL;
$arguments1155['pageUid'] = NULL;
$arguments1155['pageType'] = 0;
$arguments1155['noCache'] = false;
$arguments1155['noCacheHash'] = false;
$arguments1155['section'] = '';
$arguments1155['format'] = '';
$arguments1155['linkAccessRestrictedPages'] = false;
$arguments1155['additionalParams'] = array (
);
$arguments1155['absolute'] = false;
$arguments1155['addQueryString'] = false;
$arguments1155['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1155['addQueryStringMethod'] = NULL;
$arguments1155['action'] = 'deleteIndexedItem';
// Rendering Array
$array1157 = array();
$array1158 = array (
);$array1157['id'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array1158);
$array1159 = array (
);$array1157['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array1159);
$array1160 = array (
);$array1157['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1160);
$arguments1155['arguments'] = $array1157;

$output1144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1155, $renderChildrenClosure1156, $renderingContext)]);

$output1144 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1161 = array();
$arguments1161['key'] = NULL;
$arguments1161['id'] = NULL;
$arguments1161['default'] = NULL;
$arguments1161['arguments'] = NULL;
$arguments1161['extensionName'] = NULL;
$arguments1161['languageKey'] = NULL;
$arguments1161['alternativeLanguageKeys'] = NULL;
$arguments1161['key'] = 'administration.removeEntry';

$output1144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1161, $renderChildrenClosure1162, $renderingContext)]);

$output1144 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1163 = array();
$arguments1163['identifier'] = NULL;
$arguments1163['size'] = 'small';
$arguments1163['overlay'] = NULL;
$arguments1163['state'] = 'default';
$arguments1163['alternativeMarkupIdentifier'] = NULL;
$arguments1163['identifier'] = 'actions-edit-delete';

$output1144 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1163, $renderChildrenClosure1164, $renderingContext);

$output1144 .= '
											</a>
										</td>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1165 = array();
$arguments1165['additionalAttributes'] = NULL;
$arguments1165['data'] = NULL;
$arguments1165['class'] = NULL;
$arguments1165['dir'] = NULL;
$arguments1165['id'] = NULL;
$arguments1165['lang'] = NULL;
$arguments1165['style'] = NULL;
$arguments1165['title'] = NULL;
$arguments1165['accesskey'] = NULL;
$arguments1165['tabindex'] = NULL;
$arguments1165['onclick'] = NULL;
$arguments1165['alt'] = NULL;
$arguments1165['ismap'] = NULL;
$arguments1165['longdesc'] = NULL;
$arguments1165['usemap'] = NULL;
$arguments1165['src'] = NULL;
$arguments1165['treatIdAsReference'] = NULL;
$arguments1165['image'] = NULL;
$arguments1165['crop'] = NULL;
$arguments1165['cropVariant'] = 'default';
$arguments1165['width'] = NULL;
$arguments1165['height'] = NULL;
$arguments1165['minWidth'] = NULL;
$arguments1165['minHeight'] = NULL;
$arguments1165['maxWidth'] = NULL;
$arguments1165['maxHeight'] = NULL;
$arguments1165['absolute'] = false;
$array1167 = array (
);$arguments1165['src'] = $renderingContext->getVariableProvider()->getByPath('l.icon', $array1167);

$output1144 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1165, $renderChildrenClosure1166, $renderingContext);

$output1144 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1169 = function() use ($renderingContext, $self) {
$array1172 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.item_title', $array1172)]);
};
$arguments1168 = array();
$arguments1168['additionalAttributes'] = NULL;
$arguments1168['data'] = NULL;
$arguments1168['class'] = NULL;
$arguments1168['dir'] = NULL;
$arguments1168['id'] = NULL;
$arguments1168['lang'] = NULL;
$arguments1168['style'] = NULL;
$arguments1168['title'] = NULL;
$arguments1168['accesskey'] = NULL;
$arguments1168['tabindex'] = NULL;
$arguments1168['onclick'] = NULL;
$arguments1168['name'] = NULL;
$arguments1168['rel'] = NULL;
$arguments1168['rev'] = NULL;
$arguments1168['target'] = NULL;
$arguments1168['action'] = NULL;
$arguments1168['controller'] = NULL;
$arguments1168['extensionName'] = NULL;
$arguments1168['pluginName'] = NULL;
$arguments1168['pageUid'] = NULL;
$arguments1168['pageType'] = NULL;
$arguments1168['noCache'] = NULL;
$arguments1168['noCacheHash'] = NULL;
$arguments1168['section'] = NULL;
$arguments1168['format'] = NULL;
$arguments1168['linkAccessRestrictedPages'] = NULL;
$arguments1168['additionalParams'] = NULL;
$arguments1168['absolute'] = NULL;
$arguments1168['addQueryString'] = NULL;
$arguments1168['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1168['addQueryStringMethod'] = NULL;
$arguments1168['arguments'] = NULL;
$arguments1168['action'] = 'statisticDetails';
// Rendering Array
$array1170 = array();
$array1171 = array (
);$array1170['pageHash'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array1171);
$arguments1168['arguments'] = $array1170;

$output1144 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1168, $renderChildrenClosure1169, $renderingContext);

$output1144 .= '
										</td>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure1174 = function() use ($renderingContext, $self) {
$output1228 = '';

$output1228 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure1230 = function() use ($renderingContext, $self) {
$output1231 = '';

$output1231 .= '
												<td>
													';
$array1232 = array (
);
$output1231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array1232)]);

$output1231 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1234 = function() use ($renderingContext, $self) {
$output1238 = '';

$output1238 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1240 = function() use ($renderingContext, $self) {
$output1242 = '';

$output1242 .= '
															';
$array1243 = array (
);
$output1242 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array1243)]);

$output1242 .= '
														';
return $output1242;
};
$arguments1239 = array();
$arguments1239['each'] = NULL;
$arguments1239['as'] = NULL;
$arguments1239['key'] = NULL;
$arguments1239['reverse'] = false;
$arguments1239['iteration'] = NULL;
$array1241 = array (
);$arguments1239['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1241);
$arguments1239['as'] = 'w';

$output1238 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1239, $renderChildrenClosure1240, $renderingContext);

$output1238 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1244 = array();
$arguments1244['key'] = NULL;
$arguments1244['id'] = NULL;
$arguments1244['default'] = NULL;
$arguments1244['arguments'] = NULL;
$arguments1244['extensionName'] = NULL;
$arguments1244['languageKey'] = NULL;
$arguments1244['alternativeLanguageKeys'] = NULL;
$arguments1244['key'] = 'administration.statistics.count';

$output1238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1244, $renderChildrenClosure1245, $renderingContext)]);

$output1238 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1246 = array();
$arguments1246['subject'] = NULL;
$array1248 = array (
);$arguments1246['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1248);
$renderChildrenClosure1247 = ($arguments1246['subject'] !== null) ? function() use ($arguments1246) { return $arguments1246['subject']; } : $renderChildrenClosure1247;
$output1238 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1246, $renderChildrenClosure1247, $renderingContext);

$output1238 .= '</em>
													</td>
												';
return $output1238;
};
$arguments1233 = array();
$arguments1233['then'] = NULL;
$arguments1233['else'] = NULL;
$arguments1233['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1235 = array();
$array1236 = array (
);$array1235['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1236);
$array1235['1'] = ' == false';

$expression1237 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1233['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1235)
					),
					$renderingContext
				);
$arguments1233['__thenClosure'] = $renderChildrenClosure1234;

$output1231 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1233, $renderChildrenClosure1234, $renderingContext);

$output1231 .= '
											';
return $output1231;
};
$arguments1229 = array();
$arguments1229['value'] = NULL;
$arguments1229['value'] = 'content';

$output1228 .= '';

$output1228 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure1250 = function() use ($renderingContext, $self) {
$output1251 = '';

$output1251 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1253 = function() use ($renderingContext, $self) {
$output1257 = '';

$output1257 .= '
													<td>';
$array1258 = array (
);
$output1257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array1258)]);

$output1257 .= '</td>
												';
return $output1257;
};
$arguments1252 = array();
$arguments1252['then'] = NULL;
$arguments1252['else'] = NULL;
$arguments1252['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1254 = array();
$array1255 = array (
);$array1254['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1255);
$array1254['1'] = ' == false';

$expression1256 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1252['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1256(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1254)
					),
					$renderingContext
				);
$arguments1252['__thenClosure'] = $renderChildrenClosure1253;

$output1251 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1252, $renderChildrenClosure1253, $renderingContext);

$output1251 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure1260 = function() use ($renderingContext, $self) {
$array1261 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array1261);
};
$arguments1259 = array();
$arguments1259['value'] = NULL;
$arguments1259['decimals'] = 0;
$arguments1259['decimalSeparator'] = '.';
$arguments1259['thousandsSeparator'] = ',';
$arguments1259['units'] = NULL;
$arguments1259['decimals'] = 1;
$renderChildrenClosure1260 = ($arguments1259['value'] !== null) ? function() use ($arguments1259) { return $arguments1259['value']; } : $renderChildrenClosure1260;
$output1251 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments1259, $renderChildrenClosure1260, $renderingContext)]);

$output1251 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure1263 = function() use ($renderingContext, $self) {
$array1264 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array1264);
};
$arguments1262 = array();

$output1251 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments1262, $renderChildrenClosure1263, $renderingContext)]);

$output1251 .= '
												</td>
											';
return $output1251;
};
$arguments1249 = array();

$output1228 .= '';

$output1228 .= '
										';
return $output1228;
};
$arguments1173 = array();
$arguments1173['expression'] = NULL;
$array1227 = array (
);$arguments1173['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1227);

$output1144 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output1175 = '';

$output1175 .= '
												<td>
													';
$array1176 = array (
);
$output1175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array1176)]);

$output1175 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1178 = function() use ($renderingContext, $self) {
$output1182 = '';

$output1182 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1184 = function() use ($renderingContext, $self) {
$output1186 = '';

$output1186 .= '
															';
$array1187 = array (
);
$output1186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array1187)]);

$output1186 .= '
														';
return $output1186;
};
$arguments1183 = array();
$arguments1183['each'] = NULL;
$arguments1183['as'] = NULL;
$arguments1183['key'] = NULL;
$arguments1183['reverse'] = false;
$arguments1183['iteration'] = NULL;
$array1185 = array (
);$arguments1183['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1185);
$arguments1183['as'] = 'w';

$output1182 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1183, $renderChildrenClosure1184, $renderingContext);

$output1182 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1188 = array();
$arguments1188['key'] = NULL;
$arguments1188['id'] = NULL;
$arguments1188['default'] = NULL;
$arguments1188['arguments'] = NULL;
$arguments1188['extensionName'] = NULL;
$arguments1188['languageKey'] = NULL;
$arguments1188['alternativeLanguageKeys'] = NULL;
$arguments1188['key'] = 'administration.statistics.count';

$output1182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1188, $renderChildrenClosure1189, $renderingContext)]);

$output1182 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1190 = array();
$arguments1190['subject'] = NULL;
$array1192 = array (
);$arguments1190['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1192);
$renderChildrenClosure1191 = ($arguments1190['subject'] !== null) ? function() use ($arguments1190) { return $arguments1190['subject']; } : $renderChildrenClosure1191;
$output1182 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1190, $renderChildrenClosure1191, $renderingContext);

$output1182 .= '</em>
													</td>
												';
return $output1182;
};
$arguments1177 = array();
$arguments1177['then'] = NULL;
$arguments1177['else'] = NULL;
$arguments1177['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1179 = array();
$array1180 = array (
);$array1179['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1180);
$array1179['1'] = ' == false';

$expression1181 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1177['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1181(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1179)
					),
					$renderingContext
				);
$arguments1177['__thenClosure'] = $renderChildrenClosure1178;

$output1175 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1177, $renderChildrenClosure1178, $renderingContext);

$output1175 .= '
											';
return $output1175;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output1213 = '';

$output1213 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1215 = function() use ($renderingContext, $self) {
$output1219 = '';

$output1219 .= '
													<td>';
$array1220 = array (
);
$output1219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array1220)]);

$output1219 .= '</td>
												';
return $output1219;
};
$arguments1214 = array();
$arguments1214['then'] = NULL;
$arguments1214['else'] = NULL;
$arguments1214['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1216 = array();
$array1217 = array (
);$array1216['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1217);
$array1216['1'] = ' == false';

$expression1218 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1214['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1216)
					),
					$renderingContext
				);
$arguments1214['__thenClosure'] = $renderChildrenClosure1215;

$output1213 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1214, $renderChildrenClosure1215, $renderingContext);

$output1213 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure1222 = function() use ($renderingContext, $self) {
$array1223 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array1223);
};
$arguments1221 = array();
$arguments1221['value'] = NULL;
$arguments1221['decimals'] = 0;
$arguments1221['decimalSeparator'] = '.';
$arguments1221['thousandsSeparator'] = ',';
$arguments1221['units'] = NULL;
$arguments1221['decimals'] = 1;
$renderChildrenClosure1222 = ($arguments1221['value'] !== null) ? function() use ($arguments1221) { return $arguments1221['value']; } : $renderChildrenClosure1222;
$output1213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments1221, $renderChildrenClosure1222, $renderingContext)]);

$output1213 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure1225 = function() use ($renderingContext, $self) {
$array1226 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array1226);
};
$arguments1224 = array();

$output1213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments1224, $renderChildrenClosure1225, $renderingContext)]);

$output1213 .= '
												</td>
											';
return $output1213;
});
}
}, array($arguments1173));

$output1144 .= '
									</tr>
								';
return $output1144;
};
$arguments1141 = array();
$arguments1141['each'] = NULL;
$arguments1141['as'] = NULL;
$arguments1141['key'] = NULL;
$arguments1141['reverse'] = false;
$arguments1141['iteration'] = NULL;
$array1143 = array (
);$arguments1141['each'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array1143);
$arguments1141['as'] = 'l';
$arguments1141['iteration'] = 'i';

$output1140 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1141, $renderChildrenClosure1142, $renderingContext);

$output1140 .= '
							';
return $output1140;
};
$arguments1138 = array();

$output1137 .= '';

$output1137 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1266 = function() use ($renderingContext, $self) {
$output1267 = '';

$output1267 .= '
								<tr>
									<td class="nowrap">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1269 = function() use ($renderingContext, $self) {
$array1270 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array1270);
};
$arguments1268 = array();
$arguments1268['value'] = NULL;

$output1267 .= isset($arguments1268['value']) ? $arguments1268['value'] : $renderChildrenClosure1269();

$output1267 .= ' ';
$array1271 = array (
);
$output1267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array1271)]);

$output1267 .= '</td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure1273 = function() use ($renderingContext, $self) {
$output1286 = '';

$output1286 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure1288 = function() use ($renderingContext, $self) {
$output1289 = '';

$output1289 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1290 = array();
$arguments1290['key'] = NULL;
$arguments1290['id'] = NULL;
$arguments1290['default'] = NULL;
$arguments1290['arguments'] = NULL;
$arguments1290['extensionName'] = NULL;
$arguments1290['languageKey'] = NULL;
$arguments1290['alternativeLanguageKeys'] = NULL;
$arguments1290['key'] = 'administration.notIndexed';

$output1289 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1290, $renderChildrenClosure1291, $renderingContext)]);

$output1289 .= '
											</td>
										';
return $output1289;
};
$arguments1287 = array();
$arguments1287['value'] = NULL;
$arguments1287['value'] = 'content';

$output1286 .= '';

$output1286 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure1293 = function() use ($renderingContext, $self) {
$output1294 = '';

$output1294 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1295 = array();
$arguments1295['key'] = NULL;
$arguments1295['id'] = NULL;
$arguments1295['default'] = NULL;
$arguments1295['arguments'] = NULL;
$arguments1295['extensionName'] = NULL;
$arguments1295['languageKey'] = NULL;
$arguments1295['alternativeLanguageKeys'] = NULL;
$arguments1295['key'] = 'administration.notIndexed';

$output1294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1295, $renderChildrenClosure1296, $renderingContext)]);

$output1294 .= '
											</td>
										';
return $output1294;
};
$arguments1292 = array();

$output1286 .= '';

$output1286 .= '
									';
return $output1286;
};
$arguments1272 = array();
$arguments1272['expression'] = NULL;
$array1285 = array (
);$arguments1272['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1285);

$output1267 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output1274 = '';

$output1274 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1275 = array();
$arguments1275['key'] = NULL;
$arguments1275['id'] = NULL;
$arguments1275['default'] = NULL;
$arguments1275['arguments'] = NULL;
$arguments1275['extensionName'] = NULL;
$arguments1275['languageKey'] = NULL;
$arguments1275['alternativeLanguageKeys'] = NULL;
$arguments1275['key'] = 'administration.notIndexed';

$output1274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1275, $renderChildrenClosure1276, $renderingContext)]);

$output1274 .= '
											</td>
										';
return $output1274;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output1282 = '';

$output1282 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1283 = array();
$arguments1283['key'] = NULL;
$arguments1283['id'] = NULL;
$arguments1283['default'] = NULL;
$arguments1283['arguments'] = NULL;
$arguments1283['extensionName'] = NULL;
$arguments1283['languageKey'] = NULL;
$arguments1283['alternativeLanguageKeys'] = NULL;
$arguments1283['key'] = 'administration.notIndexed';

$output1282 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1283, $renderChildrenClosure1284, $renderingContext)]);

$output1282 .= '
											</td>
										';
return $output1282;
});
}
}, array($arguments1272));

$output1267 .= '
								</tr>
							';
return $output1267;
};
$arguments1265 = array();
$arguments1265['if'] = NULL;

$output1137 .= '';

$output1137 .= '
						';
return $output1137;
};
$arguments977 = array();
$arguments977['then'] = NULL;
$arguments977['else'] = NULL;
$arguments977['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1134 = array();
$array1135 = array (
);$array1134['0'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array1135);

$expression1136 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments977['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1134)
					),
					$renderingContext
				);
$arguments977['__thenClosure'] = function() use ($renderingContext, $self) {
$output979 = '';

$output979 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure981 = function() use ($renderingContext, $self) {
$output983 = '';

$output983 .= '
									<tr>
										<td class="nowrap">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure985 = function() use ($renderingContext, $self) {
$array986 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array986);
};
$arguments984 = array();
$arguments984['value'] = NULL;

$output983 .= isset($arguments984['value']) ? $arguments984['value'] : $renderChildrenClosure985();

$output983 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure988 = function() use ($renderingContext, $self) {
$output992 = '';

$output992 .= ' ';
$array993 = array (
);
$output992 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array993)]);
return $output992;
};
$arguments987 = array();
$arguments987['then'] = NULL;
$arguments987['else'] = NULL;
$arguments987['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array989 = array();
$array990 = array (
);$array989['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array990);
$array989['1'] = ' == 0';

$expression991 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments987['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression991(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array989)
					),
					$renderingContext
				);
$arguments987['__thenClosure'] = $renderChildrenClosure988;

$output983 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments987, $renderChildrenClosure988, $renderingContext);

$output983 .= '
										</td>
										<td>
											<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure995 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments994 = array();
$arguments994['action'] = NULL;
$arguments994['arguments'] = array (
);
$arguments994['controller'] = NULL;
$arguments994['extensionName'] = NULL;
$arguments994['pluginName'] = NULL;
$arguments994['pageUid'] = NULL;
$arguments994['pageType'] = 0;
$arguments994['noCache'] = false;
$arguments994['noCacheHash'] = false;
$arguments994['section'] = '';
$arguments994['format'] = '';
$arguments994['linkAccessRestrictedPages'] = false;
$arguments994['additionalParams'] = array (
);
$arguments994['absolute'] = false;
$arguments994['addQueryString'] = false;
$arguments994['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments994['addQueryStringMethod'] = NULL;
$arguments994['action'] = 'deleteIndexedItem';
// Rendering Array
$array996 = array();
$array997 = array (
);$array996['id'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array997);
$array998 = array (
);$array996['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array998);
$array999 = array (
);$array996['mode'] = $renderingContext->getVariableProvider()->getByPath('mode', $array999);
$arguments994['arguments'] = $array996;

$output983 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments994, $renderChildrenClosure995, $renderingContext)]);

$output983 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1001 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1000 = array();
$arguments1000['key'] = NULL;
$arguments1000['id'] = NULL;
$arguments1000['default'] = NULL;
$arguments1000['arguments'] = NULL;
$arguments1000['extensionName'] = NULL;
$arguments1000['languageKey'] = NULL;
$arguments1000['alternativeLanguageKeys'] = NULL;
$arguments1000['key'] = 'administration.removeEntry';

$output983 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1000, $renderChildrenClosure1001, $renderingContext)]);

$output983 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1003 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1002 = array();
$arguments1002['identifier'] = NULL;
$arguments1002['size'] = 'small';
$arguments1002['overlay'] = NULL;
$arguments1002['state'] = 'default';
$arguments1002['alternativeMarkupIdentifier'] = NULL;
$arguments1002['identifier'] = 'actions-edit-delete';

$output983 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1002, $renderChildrenClosure1003, $renderingContext);

$output983 .= '
											</a>
										</td>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1005 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1004 = array();
$arguments1004['additionalAttributes'] = NULL;
$arguments1004['data'] = NULL;
$arguments1004['class'] = NULL;
$arguments1004['dir'] = NULL;
$arguments1004['id'] = NULL;
$arguments1004['lang'] = NULL;
$arguments1004['style'] = NULL;
$arguments1004['title'] = NULL;
$arguments1004['accesskey'] = NULL;
$arguments1004['tabindex'] = NULL;
$arguments1004['onclick'] = NULL;
$arguments1004['alt'] = NULL;
$arguments1004['ismap'] = NULL;
$arguments1004['longdesc'] = NULL;
$arguments1004['usemap'] = NULL;
$arguments1004['src'] = NULL;
$arguments1004['treatIdAsReference'] = NULL;
$arguments1004['image'] = NULL;
$arguments1004['crop'] = NULL;
$arguments1004['cropVariant'] = 'default';
$arguments1004['width'] = NULL;
$arguments1004['height'] = NULL;
$arguments1004['minWidth'] = NULL;
$arguments1004['minHeight'] = NULL;
$arguments1004['maxWidth'] = NULL;
$arguments1004['maxHeight'] = NULL;
$arguments1004['absolute'] = false;
$array1006 = array (
);$arguments1004['src'] = $renderingContext->getVariableProvider()->getByPath('l.icon', $array1006);

$output983 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1004, $renderChildrenClosure1005, $renderingContext);

$output983 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1008 = function() use ($renderingContext, $self) {
$array1011 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.item_title', $array1011)]);
};
$arguments1007 = array();
$arguments1007['additionalAttributes'] = NULL;
$arguments1007['data'] = NULL;
$arguments1007['class'] = NULL;
$arguments1007['dir'] = NULL;
$arguments1007['id'] = NULL;
$arguments1007['lang'] = NULL;
$arguments1007['style'] = NULL;
$arguments1007['title'] = NULL;
$arguments1007['accesskey'] = NULL;
$arguments1007['tabindex'] = NULL;
$arguments1007['onclick'] = NULL;
$arguments1007['name'] = NULL;
$arguments1007['rel'] = NULL;
$arguments1007['rev'] = NULL;
$arguments1007['target'] = NULL;
$arguments1007['action'] = NULL;
$arguments1007['controller'] = NULL;
$arguments1007['extensionName'] = NULL;
$arguments1007['pluginName'] = NULL;
$arguments1007['pageUid'] = NULL;
$arguments1007['pageType'] = NULL;
$arguments1007['noCache'] = NULL;
$arguments1007['noCacheHash'] = NULL;
$arguments1007['section'] = NULL;
$arguments1007['format'] = NULL;
$arguments1007['linkAccessRestrictedPages'] = NULL;
$arguments1007['additionalParams'] = NULL;
$arguments1007['absolute'] = NULL;
$arguments1007['addQueryString'] = NULL;
$arguments1007['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1007['addQueryStringMethod'] = NULL;
$arguments1007['arguments'] = NULL;
$arguments1007['action'] = 'statisticDetails';
// Rendering Array
$array1009 = array();
$array1010 = array (
);$array1009['pageHash'] = $renderingContext->getVariableProvider()->getByPath('l.phash', $array1010);
$arguments1007['arguments'] = $array1009;

$output983 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1007, $renderChildrenClosure1008, $renderingContext);

$output983 .= '
										</td>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure1013 = function() use ($renderingContext, $self) {
$output1067 = '';

$output1067 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure1069 = function() use ($renderingContext, $self) {
$output1070 = '';

$output1070 .= '
												<td>
													';
$array1071 = array (
);
$output1070 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array1071)]);

$output1070 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1073 = function() use ($renderingContext, $self) {
$output1077 = '';

$output1077 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1079 = function() use ($renderingContext, $self) {
$output1081 = '';

$output1081 .= '
															';
$array1082 = array (
);
$output1081 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array1082)]);

$output1081 .= '
														';
return $output1081;
};
$arguments1078 = array();
$arguments1078['each'] = NULL;
$arguments1078['as'] = NULL;
$arguments1078['key'] = NULL;
$arguments1078['reverse'] = false;
$arguments1078['iteration'] = NULL;
$array1080 = array (
);$arguments1078['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1080);
$arguments1078['as'] = 'w';

$output1077 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1078, $renderChildrenClosure1079, $renderingContext);

$output1077 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1084 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1083 = array();
$arguments1083['key'] = NULL;
$arguments1083['id'] = NULL;
$arguments1083['default'] = NULL;
$arguments1083['arguments'] = NULL;
$arguments1083['extensionName'] = NULL;
$arguments1083['languageKey'] = NULL;
$arguments1083['alternativeLanguageKeys'] = NULL;
$arguments1083['key'] = 'administration.statistics.count';

$output1077 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1083, $renderChildrenClosure1084, $renderingContext)]);

$output1077 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1086 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1085 = array();
$arguments1085['subject'] = NULL;
$array1087 = array (
);$arguments1085['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1087);
$renderChildrenClosure1086 = ($arguments1085['subject'] !== null) ? function() use ($arguments1085) { return $arguments1085['subject']; } : $renderChildrenClosure1086;
$output1077 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1085, $renderChildrenClosure1086, $renderingContext);

$output1077 .= '</em>
													</td>
												';
return $output1077;
};
$arguments1072 = array();
$arguments1072['then'] = NULL;
$arguments1072['else'] = NULL;
$arguments1072['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1074 = array();
$array1075 = array (
);$array1074['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1075);
$array1074['1'] = ' == false';

$expression1076 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1072['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1076(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1074)
					),
					$renderingContext
				);
$arguments1072['__thenClosure'] = $renderChildrenClosure1073;

$output1070 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1072, $renderChildrenClosure1073, $renderingContext);

$output1070 .= '
											';
return $output1070;
};
$arguments1068 = array();
$arguments1068['value'] = NULL;
$arguments1068['value'] = 'content';

$output1067 .= '';

$output1067 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure1089 = function() use ($renderingContext, $self) {
$output1090 = '';

$output1090 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1092 = function() use ($renderingContext, $self) {
$output1096 = '';

$output1096 .= '
													<td>';
$array1097 = array (
);
$output1096 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array1097)]);

$output1096 .= '</td>
												';
return $output1096;
};
$arguments1091 = array();
$arguments1091['then'] = NULL;
$arguments1091['else'] = NULL;
$arguments1091['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1093 = array();
$array1094 = array (
);$array1093['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1094);
$array1093['1'] = ' == false';

$expression1095 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1091['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1095(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1093)
					),
					$renderingContext
				);
$arguments1091['__thenClosure'] = $renderChildrenClosure1092;

$output1090 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1091, $renderChildrenClosure1092, $renderingContext);

$output1090 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure1099 = function() use ($renderingContext, $self) {
$array1100 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array1100);
};
$arguments1098 = array();
$arguments1098['value'] = NULL;
$arguments1098['decimals'] = 0;
$arguments1098['decimalSeparator'] = '.';
$arguments1098['thousandsSeparator'] = ',';
$arguments1098['units'] = NULL;
$arguments1098['decimals'] = 1;
$renderChildrenClosure1099 = ($arguments1098['value'] !== null) ? function() use ($arguments1098) { return $arguments1098['value']; } : $renderChildrenClosure1099;
$output1090 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments1098, $renderChildrenClosure1099, $renderingContext)]);

$output1090 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure1102 = function() use ($renderingContext, $self) {
$array1103 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array1103);
};
$arguments1101 = array();

$output1090 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments1101, $renderChildrenClosure1102, $renderingContext)]);

$output1090 .= '
												</td>
											';
return $output1090;
};
$arguments1088 = array();

$output1067 .= '';

$output1067 .= '
										';
return $output1067;
};
$arguments1012 = array();
$arguments1012['expression'] = NULL;
$array1066 = array (
);$arguments1012['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1066);

$output983 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output1014 = '';

$output1014 .= '
												<td>
													';
$array1015 = array (
);
$output1014 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.fulltextData.fulltextdata', $array1015)]);

$output1014 .= '
												</td>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1017 = function() use ($renderingContext, $self) {
$output1021 = '';

$output1021 .= '
													<td>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1023 = function() use ($renderingContext, $self) {
$output1025 = '';

$output1025 .= '
															';
$array1026 = array (
);
$output1025 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('w', $array1026)]);

$output1025 .= '
														';
return $output1025;
};
$arguments1022 = array();
$arguments1022['each'] = NULL;
$arguments1022['as'] = NULL;
$arguments1022['key'] = NULL;
$arguments1022['reverse'] = false;
$arguments1022['iteration'] = NULL;
$array1024 = array (
);$arguments1022['each'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1024);
$arguments1022['as'] = 'w';

$output1021 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1022, $renderChildrenClosure1023, $renderingContext);

$output1021 .= '
														<br><br>
														<em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1028 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1027 = array();
$arguments1027['key'] = NULL;
$arguments1027['id'] = NULL;
$arguments1027['default'] = NULL;
$arguments1027['arguments'] = NULL;
$arguments1027['extensionName'] = NULL;
$arguments1027['languageKey'] = NULL;
$arguments1027['alternativeLanguageKeys'] = NULL;
$arguments1027['key'] = 'administration.statistics.count';

$output1021 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1027, $renderChildrenClosure1028, $renderingContext)]);

$output1021 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1030 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1029 = array();
$arguments1029['subject'] = NULL;
$array1031 = array (
);$arguments1029['subject'] = $renderingContext->getVariableProvider()->getByPath('l.allWords', $array1031);
$renderChildrenClosure1030 = ($arguments1029['subject'] !== null) ? function() use ($arguments1029) { return $arguments1029['subject']; } : $renderChildrenClosure1030;
$output1021 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1029, $renderChildrenClosure1030, $renderingContext);

$output1021 .= '</em>
													</td>
												';
return $output1021;
};
$arguments1016 = array();
$arguments1016['then'] = NULL;
$arguments1016['else'] = NULL;
$arguments1016['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1018 = array();
$array1019 = array (
);$array1018['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1019);
$array1018['1'] = ' == false';

$expression1020 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1016['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1020(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1018)
					),
					$renderingContext
				);
$arguments1016['__thenClosure'] = $renderChildrenClosure1017;

$output1014 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1016, $renderChildrenClosure1017, $renderingContext);

$output1014 .= '
											';
return $output1014;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output1052 = '';

$output1052 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1054 = function() use ($renderingContext, $self) {
$output1058 = '';

$output1058 .= '
													<td>';
$array1059 = array (
);
$output1058 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('l.wordCount', $array1059)]);

$output1058 .= '</td>
												';
return $output1058;
};
$arguments1053 = array();
$arguments1053['then'] = NULL;
$arguments1053['else'] = NULL;
$arguments1053['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1055 = array();
$array1056 = array (
);$array1055['0'] = $renderingContext->getVariableProvider()->getByPath('extensionConfiguration.useMysqlFulltext', $array1056);
$array1055['1'] = ' == false';

$expression1057 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == FALSE);};
$arguments1053['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1057(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1055)
					),
					$renderingContext
				);
$arguments1053['__thenClosure'] = $renderChildrenClosure1054;

$output1052 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1053, $renderChildrenClosure1054, $renderingContext);

$output1052 .= '
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure1061 = function() use ($renderingContext, $self) {
$array1062 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.item_size', $array1062);
};
$arguments1060 = array();
$arguments1060['value'] = NULL;
$arguments1060['decimals'] = 0;
$arguments1060['decimalSeparator'] = '.';
$arguments1060['thousandsSeparator'] = ',';
$arguments1060['units'] = NULL;
$arguments1060['decimals'] = 1;
$renderChildrenClosure1061 = ($arguments1060['value'] !== null) ? function() use ($arguments1060) { return $arguments1060['value']; } : $renderChildrenClosure1061;
$output1052 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments1060, $renderChildrenClosure1061, $renderingContext)]);

$output1052 .= '
												</td>
												<td>
													';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper
$renderChildrenClosure1064 = function() use ($renderingContext, $self) {
$array1065 = array (
);return $renderingContext->getVariableProvider()->getByPath('l.tstamp', $array1065);
};
$arguments1063 = array();

$output1052 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\IndexedSearch\ViewHelpers\Format\DateTimeViewHelper::renderStatic($arguments1063, $renderChildrenClosure1064, $renderingContext)]);

$output1052 .= '
												</td>
											';
return $output1052;
});
}
}, array($arguments1012));

$output983 .= '
									</tr>
								';
return $output983;
};
$arguments980 = array();
$arguments980['each'] = NULL;
$arguments980['as'] = NULL;
$arguments980['key'] = NULL;
$arguments980['reverse'] = false;
$arguments980['iteration'] = NULL;
$array982 = array (
);$arguments980['each'] = $renderingContext->getVariableProvider()->getByPath('line.lines', $array982);
$arguments980['as'] = 'l';
$arguments980['iteration'] = 'i';

$output979 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments980, $renderChildrenClosure981, $renderingContext);

$output979 .= '
							';
return $output979;
};
$arguments977['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1104 = '';

$output1104 .= '
								<tr>
									<td class="nowrap">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1106 = function() use ($renderingContext, $self) {
$array1107 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.HTML', $array1107);
};
$arguments1105 = array();
$arguments1105['value'] = NULL;

$output1104 .= isset($arguments1105['value']) ? $arguments1105['value'] : $renderChildrenClosure1106();

$output1104 .= ' ';
$array1108 = array (
);
$output1104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array1108)]);

$output1104 .= '</td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure1110 = function() use ($renderingContext, $self) {
$output1123 = '';

$output1123 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure1125 = function() use ($renderingContext, $self) {
$output1126 = '';

$output1126 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1127 = array();
$arguments1127['key'] = NULL;
$arguments1127['id'] = NULL;
$arguments1127['default'] = NULL;
$arguments1127['arguments'] = NULL;
$arguments1127['extensionName'] = NULL;
$arguments1127['languageKey'] = NULL;
$arguments1127['alternativeLanguageKeys'] = NULL;
$arguments1127['key'] = 'administration.notIndexed';

$output1126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1127, $renderChildrenClosure1128, $renderingContext)]);

$output1126 .= '
											</td>
										';
return $output1126;
};
$arguments1124 = array();
$arguments1124['value'] = NULL;
$arguments1124['value'] = 'content';

$output1123 .= '';

$output1123 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure1130 = function() use ($renderingContext, $self) {
$output1131 = '';

$output1131 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1132 = array();
$arguments1132['key'] = NULL;
$arguments1132['id'] = NULL;
$arguments1132['default'] = NULL;
$arguments1132['arguments'] = NULL;
$arguments1132['extensionName'] = NULL;
$arguments1132['languageKey'] = NULL;
$arguments1132['alternativeLanguageKeys'] = NULL;
$arguments1132['key'] = 'administration.notIndexed';

$output1131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1132, $renderChildrenClosure1133, $renderingContext)]);

$output1131 .= '
											</td>
										';
return $output1131;
};
$arguments1129 = array();

$output1123 .= '';

$output1123 .= '
									';
return $output1123;
};
$arguments1109 = array();
$arguments1109['expression'] = NULL;
$array1122 = array (
);$arguments1109['expression'] = $renderingContext->getVariableProvider()->getByPath('mode', $array1122);

$output1104 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'content';
}): return call_user_func(function() use ($renderingContext, $self) {
$output1111 = '';

$output1111 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1112 = array();
$arguments1112['key'] = NULL;
$arguments1112['id'] = NULL;
$arguments1112['default'] = NULL;
$arguments1112['arguments'] = NULL;
$arguments1112['extensionName'] = NULL;
$arguments1112['languageKey'] = NULL;
$arguments1112['alternativeLanguageKeys'] = NULL;
$arguments1112['key'] = 'administration.notIndexed';

$output1111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1112, $renderChildrenClosure1113, $renderingContext)]);

$output1111 .= '
											</td>
										';
return $output1111;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output1119 = '';

$output1119 .= '
											<td colspan="5">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1120 = array();
$arguments1120['key'] = NULL;
$arguments1120['id'] = NULL;
$arguments1120['default'] = NULL;
$arguments1120['arguments'] = NULL;
$arguments1120['extensionName'] = NULL;
$arguments1120['languageKey'] = NULL;
$arguments1120['alternativeLanguageKeys'] = NULL;
$arguments1120['key'] = 'administration.notIndexed';

$output1119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1120, $renderChildrenClosure1121, $renderingContext)]);

$output1119 .= '
											</td>
										';
return $output1119;
});
}
}, array($arguments1109));

$output1104 .= '
								</tr>
							';
return $output1104;
};

$output976 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments977, $renderChildrenClosure978, $renderingContext);

$output976 .= '
					';
return $output976;
};
$arguments973 = array();
$arguments973['each'] = NULL;
$arguments973['as'] = NULL;
$arguments973['key'] = NULL;
$arguments973['reverse'] = false;
$arguments973['iteration'] = NULL;
$array975 = array (
);$arguments973['each'] = $renderingContext->getVariableProvider()->getByPath('tree', $array975);
$arguments973['as'] = 'line';

$output873 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments973, $renderChildrenClosure974, $renderingContext);

$output873 .= '
					</tbody>
			</table>
		';
return $output873;
};
$arguments871['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1297 = '';

$output1297 .= '
			<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1298 = array();
$arguments1298['key'] = NULL;
$arguments1298['id'] = NULL;
$arguments1298['default'] = NULL;
$arguments1298['arguments'] = NULL;
$arguments1298['extensionName'] = NULL;
$arguments1298['languageKey'] = NULL;
$arguments1298['alternativeLanguageKeys'] = NULL;
$arguments1298['key'] = 'administration.noPageSelected';

$output1297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1298, $renderChildrenClosure1299, $renderingContext)]);

$output1297 .= '</h2>
		';
return $output1297;
};

$output870 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments871, $renderChildrenClosure872, $renderingContext);

$output870 .= '

';
return $output870;
};
$arguments868 = array();
$arguments868['name'] = NULL;
$arguments868['name'] = 'Content';

$output865 .= NULL;

$output865 .= '

';

return $output865;
}


}
#