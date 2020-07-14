<?php

class User_action_show_e57750d2ad507b051b1e6fe5f2ec783676d57a2e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

	<div class="femanager_show">
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
				<ul>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
						<li>
							';
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
$arguments165['key'] = 'tx_femanager_domain_model_user.username';

$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext)]);

$output164 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$array171 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array171)]);
};
$arguments167 = array();
$arguments167['additionalAttributes'] = NULL;
$arguments167['data'] = NULL;
$arguments167['class'] = NULL;
$arguments167['dir'] = NULL;
$arguments167['id'] = NULL;
$arguments167['lang'] = NULL;
$arguments167['style'] = NULL;
$arguments167['title'] = NULL;
$arguments167['accesskey'] = NULL;
$arguments167['tabindex'] = NULL;
$arguments167['onclick'] = NULL;
$arguments167['name'] = NULL;
$arguments167['rel'] = NULL;
$arguments167['rev'] = NULL;
$arguments167['target'] = NULL;
$arguments167['action'] = NULL;
$arguments167['controller'] = NULL;
$arguments167['extensionName'] = NULL;
$arguments167['pluginName'] = NULL;
$arguments167['pageUid'] = NULL;
$arguments167['pageType'] = NULL;
$arguments167['noCache'] = NULL;
$arguments167['noCacheHash'] = NULL;
$arguments167['section'] = NULL;
$arguments167['format'] = NULL;
$arguments167['linkAccessRestrictedPages'] = NULL;
$arguments167['additionalParams'] = NULL;
$arguments167['absolute'] = NULL;
$arguments167['addQueryString'] = NULL;
$arguments167['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments167['addQueryStringMethod'] = NULL;
$arguments167['arguments'] = NULL;
$arguments167['action'] = 'show';
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array170);
$arguments167['arguments'] = $array169;

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output164 .= '
						</li>
					';
return $output164;
};
$arguments159 = array();
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('user.username', $array162);

$expression163 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments159['__thenClosure'] = $renderChildrenClosure160;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
						<li>
							';
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
$arguments178['key'] = 'tx_femanager_domain_model_user.usergroup';

$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext)]);

$output177 .= ':
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output183 = '';
$array184 = array (
);
$output183 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('usergroup.title', $array184)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments190 = array();
$arguments190['if'] = NULL;
return '';
};
$arguments185 = array();
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$arguments185['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['0'] = $renderingContext->getVariableProvider()->getByPath('i.isLast', $array188);

$expression189 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments185['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression189(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);
$arguments185['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output183 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);
return $output183;
};
$arguments180 = array();
$arguments180['each'] = NULL;
$arguments180['as'] = NULL;
$arguments180['key'] = NULL;
$arguments180['reverse'] = false;
$arguments180['iteration'] = NULL;
$array182 = array (
);$arguments180['each'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array182);
$arguments180['as'] = 'usergroup';
$arguments180['iteration'] = 'i';

$output177 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output177 .= '
						</li>
					';
return $output177;
};
$arguments172 = array();
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$arguments172['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array175);

$expression176 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments172['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments172['__thenClosure'] = $renderChildrenClosure173;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output158 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['key'] = NULL;
$arguments198['id'] = NULL;
$arguments198['default'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['extensionName'] = NULL;
$arguments198['languageKey'] = NULL;
$arguments198['alternativeLanguageKeys'] = NULL;
$arguments198['key'] = 'tx_femanager_domain_model_user.firstName';

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output197 .= ':
							';
$array200 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array200)]);

$output197 .= '
						</li>
					';
return $output197;
};
$arguments192 = array();
$arguments192['then'] = NULL;
$arguments192['else'] = NULL;
$arguments192['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array194 = array();
$array195 = array (
);$array194['0'] = $renderingContext->getVariableProvider()->getByPath('user.firstName', $array195);

$expression196 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments192['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression196(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array194)
					),
					$renderingContext
				);
$arguments192['__thenClosure'] = $renderChildrenClosure193;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output158 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
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
$arguments207['key'] = 'tx_femanager_domain_model_user.lastName';

$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output206 .= ':
							';
$array209 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array209)]);

$output206 .= '
						</li>
					';
return $output206;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('user.lastName', $array204);

$expression205 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = $renderChildrenClosure202;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output158 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
						<li>
							';
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
$arguments216['key'] = 'tx_femanager_domain_model_user.email';

$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext)]);

$output215 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['additionalAttributes'] = NULL;
$arguments218['data'] = NULL;
$arguments218['email'] = NULL;
$arguments218['class'] = NULL;
$arguments218['dir'] = NULL;
$arguments218['id'] = NULL;
$arguments218['lang'] = NULL;
$arguments218['style'] = NULL;
$arguments218['title'] = NULL;
$arguments218['accesskey'] = NULL;
$arguments218['tabindex'] = NULL;
$arguments218['onclick'] = NULL;
$arguments218['name'] = NULL;
$arguments218['rel'] = NULL;
$arguments218['rev'] = NULL;
$arguments218['target'] = NULL;
$array220 = array (
);$arguments218['email'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array220);

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output215 .= '
						</li>
					';
return $output215;
};
$arguments210 = array();
$arguments210['then'] = NULL;
$arguments210['else'] = NULL;
$arguments210['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array213);

$expression214 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments210['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments210['__thenClosure'] = $renderChildrenClosure211;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output158 .= '
					<li>
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
$arguments221['key'] = 'tx_femanager_domain_model_user.gender';

$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext)]);

$output158 .= ':
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['key'] = NULL;
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$arguments238['languageKey'] = NULL;
$arguments238['alternativeLanguageKeys'] = NULL;
$arguments238['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output237 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext)]);

$output237 .= '
							';
return $output237;
};
$arguments235 = array();

$output234 .= '';

$output234 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['key'] = NULL;
$arguments243['id'] = NULL;
$arguments243['default'] = NULL;
$arguments243['arguments'] = NULL;
$arguments243['extensionName'] = NULL;
$arguments243['languageKey'] = NULL;
$arguments243['alternativeLanguageKeys'] = NULL;
$arguments243['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output242 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext)]);

$output242 .= '
							';
return $output242;
};
$arguments240 = array();
$arguments240['if'] = NULL;

$output234 .= '';

$output234 .= '
						';
return $output234;
};
$arguments223 = array();
$arguments223['then'] = NULL;
$arguments223['else'] = NULL;
$arguments223['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array231 = array();
$array232 = array (
);$array231['0'] = $renderingContext->getVariableProvider()->getByPath('user.gender', $array232);
$array231['1'] = ' == 0';

$expression233 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments223['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression233(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array231)
					),
					$renderingContext
				);
$arguments223['__thenClosure'] = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['key'] = NULL;
$arguments226['id'] = NULL;
$arguments226['default'] = NULL;
$arguments226['arguments'] = NULL;
$arguments226['extensionName'] = NULL;
$arguments226['languageKey'] = NULL;
$arguments226['alternativeLanguageKeys'] = NULL;
$arguments226['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output225 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext)]);

$output225 .= '
							';
return $output225;
};
$arguments223['__elseClosures'][] = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['languageKey'] = NULL;
$arguments229['alternativeLanguageKeys'] = NULL;
$arguments229['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output228 .= '
							';
return $output228;
};

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output158 .= '
					</li>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['key'] = NULL;
$arguments251['id'] = NULL;
$arguments251['default'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['languageKey'] = NULL;
$arguments251['alternativeLanguageKeys'] = NULL;
$arguments251['key'] = 'tx_femanager_domain_model_user.dateOfBirth';

$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext)]);

$output250 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$array257 = array (
);return $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array257);
};
$arguments253 = array();
$arguments253['date'] = NULL;
$arguments253['format'] = '';
$arguments253['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['key'] = NULL;
$arguments255['id'] = NULL;
$arguments255['default'] = NULL;
$arguments255['arguments'] = NULL;
$arguments255['extensionName'] = NULL;
$arguments255['languageKey'] = NULL;
$arguments255['alternativeLanguageKeys'] = NULL;
$arguments255['key'] = 'tx_femanager_domain_model_user.dateFormat';
$arguments253['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);
$renderChildrenClosure254 = ($arguments253['date'] !== null) ? function() use ($arguments253) { return $arguments253['date']; } : $renderChildrenClosure254;
$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext)]);

$output250 .= '
						</li>
					';
return $output250;
};
$arguments245 = array();
$arguments245['then'] = NULL;
$arguments245['else'] = NULL;
$arguments245['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array247 = array();
$array248 = array (
);$array247['0'] = $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array248);

$expression249 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments245['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression249(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array247)
					),
					$renderingContext
				);
$arguments245['__thenClosure'] = $renderChildrenClosure246;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output158 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['key'] = NULL;
$arguments264['id'] = NULL;
$arguments264['default'] = NULL;
$arguments264['arguments'] = NULL;
$arguments264['extensionName'] = NULL;
$arguments264['languageKey'] = NULL;
$arguments264['alternativeLanguageKeys'] = NULL;
$arguments264['key'] = 'tx_femanager_domain_model_user.address';

$output263 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext)]);

$output263 .= ':
							';
$array266 = array (
);
$output263 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.address', $array266)]);

$output263 .= '
						</li>
					';
return $output263;
};
$arguments258 = array();
$arguments258['then'] = NULL;
$arguments258['else'] = NULL;
$arguments258['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = $renderingContext->getVariableProvider()->getByPath('user.address', $array261);

$expression262 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments258['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments258['__thenClosure'] = $renderChildrenClosure259;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output158 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['key'] = NULL;
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$arguments273['languageKey'] = NULL;
$arguments273['alternativeLanguageKeys'] = NULL;
$arguments273['key'] = 'tx_femanager_domain_model_user.zip';

$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext)]);

$output272 .= ':
							';
$array275 = array (
);
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.zip', $array275)]);

$output272 .= '
						</li>
					';
return $output272;
};
$arguments267 = array();
$arguments267['then'] = NULL;
$arguments267['else'] = NULL;
$arguments267['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array269 = array();
$array270 = array (
);$array269['0'] = $renderingContext->getVariableProvider()->getByPath('user.zip', $array270);

$expression271 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments267['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression271(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array269)
					),
					$renderingContext
				);
$arguments267['__thenClosure'] = $renderChildrenClosure268;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output158 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['key'] = NULL;
$arguments282['id'] = NULL;
$arguments282['default'] = NULL;
$arguments282['arguments'] = NULL;
$arguments282['extensionName'] = NULL;
$arguments282['languageKey'] = NULL;
$arguments282['alternativeLanguageKeys'] = NULL;
$arguments282['key'] = 'tx_femanager_domain_model_user.city';

$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);

$output281 .= ':
							';
$array284 = array (
);
$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.city', $array284)]);

$output281 .= '
						</li>
					';
return $output281;
};
$arguments276 = array();
$arguments276['then'] = NULL;
$arguments276['else'] = NULL;
$arguments276['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array278 = array();
$array279 = array (
);$array278['0'] = $renderingContext->getVariableProvider()->getByPath('user.city', $array279);

$expression280 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments276['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression280(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array278)
					),
					$renderingContext
				);
$arguments276['__thenClosure'] = $renderChildrenClosure277;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output158 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
						<li>
							';
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
$arguments291['key'] = 'tx_femanager_domain_model_user.country';

$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext)]);

$output290 .= ':
							';
$array293 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.country', $array293)]);

$output290 .= '
						</li>
					';
return $output290;
};
$arguments285 = array();
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$arguments285['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['0'] = $renderingContext->getVariableProvider()->getByPath('user.country', $array288);

$expression289 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments285['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
$arguments285['__thenClosure'] = $renderChildrenClosure286;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output158 .= '
				</ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments298['alt'] = NULL;
$arguments298['ismap'] = NULL;
$arguments298['longdesc'] = NULL;
$arguments298['usemap'] = NULL;
$arguments298['src'] = NULL;
$arguments298['treatIdAsReference'] = NULL;
$arguments298['image'] = NULL;
$arguments298['crop'] = NULL;
$arguments298['cropVariant'] = 'default';
$arguments298['width'] = NULL;
$arguments298['height'] = NULL;
$arguments298['minWidth'] = NULL;
$arguments298['minHeight'] = NULL;
$arguments298['maxWidth'] = NULL;
$arguments298['maxHeight'] = NULL;
$arguments298['absolute'] = false;
$array300 = array (
);$arguments298['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array300);
$arguments298['width'] = 250;

$output297 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output297 .= '
				';
return $output297;
};
$arguments294 = array();
$arguments294['each'] = NULL;
$arguments294['as'] = NULL;
$arguments294['key'] = NULL;
$arguments294['reverse'] = false;
$arguments294['iteration'] = NULL;
$array296 = array (
);$arguments294['each'] = $renderingContext->getVariableProvider()->getByPath('user.image', $array296);
$arguments294['as'] = 'image';

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output158 .= '
			';
return $output158;
};
$arguments156 = array();

$output155 .= '';

$output155 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$output303 = '';

$output303 .= '
				<div class="femanager_note">
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
$arguments304['key'] = 'noRecordFoundShow';

$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);

$output303 .= '
				</div>
			';
return $output303;
};
$arguments301 = array();
$arguments301['if'] = NULL;

$output155 .= '';

$output155 .= '
		';
return $output155;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['0'] = $renderingContext->getVariableProvider()->getByPath('user', $array153);

$expression154 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
				<ul>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'tx_femanager_domain_model_user.username';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output12 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array19 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array19)]);
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
$arguments15['action'] = 'show';
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array18);
$arguments15['arguments'] = $array17;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output12 .= '
						</li>
					';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('user.username', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
						<li>
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
$arguments26['key'] = 'tx_femanager_domain_model_user.usergroup';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output25 .= ':
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output31 = '';
$array32 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('usergroup.title', $array32)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments38 = array();
$arguments38['if'] = NULL;
return '';
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('i.isLast', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);
return $output31;
};
$arguments28 = array();
$arguments28['each'] = NULL;
$arguments28['as'] = NULL;
$arguments28['key'] = NULL;
$arguments28['reverse'] = false;
$arguments28['iteration'] = NULL;
$array30 = array (
);$arguments28['each'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array30);
$arguments28['as'] = 'usergroup';
$arguments28['iteration'] = 'i';

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output25 .= '
						</li>
					';
return $output25;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array23);

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output6 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['key'] = NULL;
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['languageKey'] = NULL;
$arguments46['alternativeLanguageKeys'] = NULL;
$arguments46['key'] = 'tx_femanager_domain_model_user.firstName';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output45 .= ':
							';
$array48 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array48)]);

$output45 .= '
						</li>
					';
return $output45;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['0'] = $renderingContext->getVariableProvider()->getByPath('user.firstName', $array43);

$expression44 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression44(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = $renderChildrenClosure41;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output6 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['key'] = NULL;
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['languageKey'] = NULL;
$arguments55['alternativeLanguageKeys'] = NULL;
$arguments55['key'] = 'tx_femanager_domain_model_user.lastName';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output54 .= ':
							';
$array57 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array57)]);

$output54 .= '
						</li>
					';
return $output54;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('user.lastName', $array52);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['__thenClosure'] = $renderChildrenClosure50;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output6 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
						<li>
							';
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
$arguments64['key'] = 'tx_femanager_domain_model_user.email';

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output63 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['email'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['name'] = NULL;
$arguments66['rel'] = NULL;
$arguments66['rev'] = NULL;
$arguments66['target'] = NULL;
$array68 = array (
);$arguments66['email'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array68);

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output63 .= '
						</li>
					';
return $output63;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments58['__thenClosure'] = $renderChildrenClosure59;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output6 .= '
					<li>
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
$arguments69['key'] = 'tx_femanager_domain_model_user.gender';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output6 .= ':
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
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
$arguments86['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output85 .= '
							';
return $output85;
};
$arguments83 = array();

$output82 .= '';

$output82 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
								';
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
$arguments91['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output90 .= '
							';
return $output90;
};
$arguments88 = array();
$arguments88['if'] = NULL;

$output82 .= '';

$output82 .= '
						';
return $output82;
};
$arguments71 = array();
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('user.gender', $array80);
$array79['1'] = ' == 0';

$expression81 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments71['__thenClosure'] = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['key'] = NULL;
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['languageKey'] = NULL;
$arguments74['alternativeLanguageKeys'] = NULL;
$arguments74['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output73 .= '
							';
return $output73;
};
$arguments71['__elseClosures'][] = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['languageKey'] = NULL;
$arguments77['alternativeLanguageKeys'] = NULL;
$arguments77['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output76 .= '
							';
return $output76;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output6 .= '
					</li>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
						<li>
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
$arguments99['key'] = 'tx_femanager_domain_model_user.dateOfBirth';

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output98 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array105 = array (
);return $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array105);
};
$arguments101 = array();
$arguments101['date'] = NULL;
$arguments101['format'] = '';
$arguments101['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['key'] = NULL;
$arguments103['id'] = NULL;
$arguments103['default'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['extensionName'] = NULL;
$arguments103['languageKey'] = NULL;
$arguments103['alternativeLanguageKeys'] = NULL;
$arguments103['key'] = 'tx_femanager_domain_model_user.dateFormat';
$arguments101['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);
$renderChildrenClosure102 = ($arguments101['date'] !== null) ? function() use ($arguments101) { return $arguments101['date']; } : $renderChildrenClosure102;
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output98 .= '
						</li>
					';
return $output98;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output6 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['key'] = NULL;
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$arguments112['languageKey'] = NULL;
$arguments112['alternativeLanguageKeys'] = NULL;
$arguments112['key'] = 'tx_femanager_domain_model_user.address';

$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext)]);

$output111 .= ':
							';
$array114 = array (
);
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.address', $array114)]);

$output111 .= '
						</li>
					';
return $output111;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('user.address', $array109);

$expression110 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments106['__thenClosure'] = $renderChildrenClosure107;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output6 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['key'] = NULL;
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$arguments121['languageKey'] = NULL;
$arguments121['alternativeLanguageKeys'] = NULL;
$arguments121['key'] = 'tx_femanager_domain_model_user.zip';

$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext)]);

$output120 .= ':
							';
$array123 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.zip', $array123)]);

$output120 .= '
						</li>
					';
return $output120;
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('user.zip', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$arguments115['__thenClosure'] = $renderChildrenClosure116;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output6 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
						<li>
							';
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
$arguments130['key'] = 'tx_femanager_domain_model_user.city';

$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext)]);

$output129 .= ':
							';
$array132 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.city', $array132)]);

$output129 .= '
						</li>
					';
return $output129;
};
$arguments124 = array();
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('user.city', $array127);

$expression128 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments124['__thenClosure'] = $renderChildrenClosure125;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output6 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['key'] = NULL;
$arguments139['id'] = NULL;
$arguments139['default'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['extensionName'] = NULL;
$arguments139['languageKey'] = NULL;
$arguments139['alternativeLanguageKeys'] = NULL;
$arguments139['key'] = 'tx_femanager_domain_model_user.country';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext)]);

$output138 .= ':
							';
$array141 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.country', $array141)]);

$output138 .= '
						</li>
					';
return $output138;
};
$arguments133 = array();
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$arguments133['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['0'] = $renderingContext->getVariableProvider()->getByPath('user.country', $array136);

$expression137 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments133['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
$arguments133['__thenClosure'] = $renderChildrenClosure134;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output6 .= '
				</ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['additionalAttributes'] = NULL;
$arguments146['data'] = NULL;
$arguments146['class'] = NULL;
$arguments146['dir'] = NULL;
$arguments146['id'] = NULL;
$arguments146['lang'] = NULL;
$arguments146['style'] = NULL;
$arguments146['title'] = NULL;
$arguments146['accesskey'] = NULL;
$arguments146['tabindex'] = NULL;
$arguments146['onclick'] = NULL;
$arguments146['alt'] = NULL;
$arguments146['ismap'] = NULL;
$arguments146['longdesc'] = NULL;
$arguments146['usemap'] = NULL;
$arguments146['src'] = NULL;
$arguments146['treatIdAsReference'] = NULL;
$arguments146['image'] = NULL;
$arguments146['crop'] = NULL;
$arguments146['cropVariant'] = 'default';
$arguments146['width'] = NULL;
$arguments146['height'] = NULL;
$arguments146['minWidth'] = NULL;
$arguments146['minHeight'] = NULL;
$arguments146['maxWidth'] = NULL;
$arguments146['maxHeight'] = NULL;
$arguments146['absolute'] = false;
$array148 = array (
);$arguments146['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array148);
$arguments146['width'] = 250;

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
				';
return $output145;
};
$arguments142 = array();
$arguments142['each'] = NULL;
$arguments142['as'] = NULL;
$arguments142['key'] = NULL;
$arguments142['reverse'] = false;
$arguments142['iteration'] = NULL;
$array144 = array (
);$arguments142['each'] = $renderingContext->getVariableProvider()->getByPath('user.image', $array144);
$arguments142['as'] = 'image';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output6 .= '
			';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
				<div class="femanager_note">
					';
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
$arguments150['key'] = 'noRecordFoundShow';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext)]);

$output149 .= '
				</div>
			';
return $output149;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output306 = '';

$output306 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['name'] = NULL;
$arguments307['name'] = 'Default';

$output306 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output306 .= '

	User / Show

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '

	<div class="femanager_show">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['section'] = NULL;
$arguments312['partial'] = NULL;
$arguments312['delegate'] = NULL;
$arguments312['renderable'] = NULL;
$arguments312['arguments'] = array (
);
$arguments312['optional'] = false;
$arguments312['default'] = NULL;
$arguments312['contentAs'] = NULL;
$arguments312['debug'] = true;
$arguments312['partial'] = 'Misc/FlashMessages';
$arguments312['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output466 = '';

$output466 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
				<ul>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$output475 = '';

$output475 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments476 = array();
$arguments476['key'] = NULL;
$arguments476['id'] = NULL;
$arguments476['default'] = NULL;
$arguments476['arguments'] = NULL;
$arguments476['extensionName'] = NULL;
$arguments476['languageKey'] = NULL;
$arguments476['alternativeLanguageKeys'] = NULL;
$arguments476['key'] = 'tx_femanager_domain_model_user.username';

$output475 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext)]);

$output475 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$array482 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array482)]);
};
$arguments478 = array();
$arguments478['additionalAttributes'] = NULL;
$arguments478['data'] = NULL;
$arguments478['class'] = NULL;
$arguments478['dir'] = NULL;
$arguments478['id'] = NULL;
$arguments478['lang'] = NULL;
$arguments478['style'] = NULL;
$arguments478['title'] = NULL;
$arguments478['accesskey'] = NULL;
$arguments478['tabindex'] = NULL;
$arguments478['onclick'] = NULL;
$arguments478['name'] = NULL;
$arguments478['rel'] = NULL;
$arguments478['rev'] = NULL;
$arguments478['target'] = NULL;
$arguments478['action'] = NULL;
$arguments478['controller'] = NULL;
$arguments478['extensionName'] = NULL;
$arguments478['pluginName'] = NULL;
$arguments478['pageUid'] = NULL;
$arguments478['pageType'] = NULL;
$arguments478['noCache'] = NULL;
$arguments478['noCacheHash'] = NULL;
$arguments478['section'] = NULL;
$arguments478['format'] = NULL;
$arguments478['linkAccessRestrictedPages'] = NULL;
$arguments478['additionalParams'] = NULL;
$arguments478['absolute'] = NULL;
$arguments478['addQueryString'] = NULL;
$arguments478['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments478['addQueryStringMethod'] = NULL;
$arguments478['arguments'] = NULL;
$arguments478['action'] = 'show';
// Rendering Array
$array480 = array();
$array481 = array (
);$array480['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array481);
$arguments478['arguments'] = $array480;

$output475 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output475 .= '
						</li>
					';
return $output475;
};
$arguments470 = array();
$arguments470['then'] = NULL;
$arguments470['else'] = NULL;
$arguments470['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array472 = array();
$array473 = array (
);$array472['0'] = $renderingContext->getVariableProvider()->getByPath('user.username', $array473);

$expression474 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments470['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression474(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array472)
					),
					$renderingContext
				);
$arguments470['__thenClosure'] = $renderChildrenClosure471;

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
$output488 = '';

$output488 .= '
						<li>
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
$arguments489['key'] = 'tx_femanager_domain_model_user.usergroup';

$output488 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext)]);

$output488 .= ':
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
$output494 = '';
$array495 = array (
);
$output494 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('usergroup.title', $array495)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments501 = array();
$arguments501['if'] = NULL;
return '';
};
$arguments496 = array();
$arguments496['then'] = NULL;
$arguments496['else'] = NULL;
$arguments496['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array498 = array();
$array499 = array (
);$array498['0'] = $renderingContext->getVariableProvider()->getByPath('i.isLast', $array499);

$expression500 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments496['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression500(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array498)
					),
					$renderingContext
				);
$arguments496['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output494 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);
return $output494;
};
$arguments491 = array();
$arguments491['each'] = NULL;
$arguments491['as'] = NULL;
$arguments491['key'] = NULL;
$arguments491['reverse'] = false;
$arguments491['iteration'] = NULL;
$array493 = array (
);$arguments491['each'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array493);
$arguments491['as'] = 'usergroup';
$arguments491['iteration'] = 'i';

$output488 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext);

$output488 .= '
						</li>
					';
return $output488;
};
$arguments483 = array();
$arguments483['then'] = NULL;
$arguments483['else'] = NULL;
$arguments483['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array485 = array();
$array486 = array (
);$array485['0'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array486);

$expression487 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments483['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression487(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array485)
					),
					$renderingContext
				);
$arguments483['__thenClosure'] = $renderChildrenClosure484;

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);

$output469 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
$output508 = '';

$output508 .= '
						<li>
							';
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
$arguments509['key'] = 'tx_femanager_domain_model_user.firstName';

$output508 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext)]);

$output508 .= ':
							';
$array511 = array (
);
$output508 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array511)]);

$output508 .= '
						</li>
					';
return $output508;
};
$arguments503 = array();
$arguments503['then'] = NULL;
$arguments503['else'] = NULL;
$arguments503['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array505 = array();
$array506 = array (
);$array505['0'] = $renderingContext->getVariableProvider()->getByPath('user.firstName', $array506);

$expression507 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments503['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression507(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array505)
					),
					$renderingContext
				);
$arguments503['__thenClosure'] = $renderChildrenClosure504;

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output469 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
$output517 = '';

$output517 .= '
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
$arguments518['key'] = 'tx_femanager_domain_model_user.lastName';

$output517 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext)]);

$output517 .= ':
							';
$array520 = array (
);
$output517 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array520)]);

$output517 .= '
						</li>
					';
return $output517;
};
$arguments512 = array();
$arguments512['then'] = NULL;
$arguments512['else'] = NULL;
$arguments512['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array514 = array();
$array515 = array (
);$array514['0'] = $renderingContext->getVariableProvider()->getByPath('user.lastName', $array515);

$expression516 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments512['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression516(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array514)
					),
					$renderingContext
				);
$arguments512['__thenClosure'] = $renderChildrenClosure513;

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output469 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
$output526 = '';

$output526 .= '
						<li>
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
$arguments527['key'] = 'tx_femanager_domain_model_user.email';

$output526 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext)]);

$output526 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments529 = array();
$arguments529['additionalAttributes'] = NULL;
$arguments529['data'] = NULL;
$arguments529['email'] = NULL;
$arguments529['class'] = NULL;
$arguments529['dir'] = NULL;
$arguments529['id'] = NULL;
$arguments529['lang'] = NULL;
$arguments529['style'] = NULL;
$arguments529['title'] = NULL;
$arguments529['accesskey'] = NULL;
$arguments529['tabindex'] = NULL;
$arguments529['onclick'] = NULL;
$arguments529['name'] = NULL;
$arguments529['rel'] = NULL;
$arguments529['rev'] = NULL;
$arguments529['target'] = NULL;
$array531 = array (
);$arguments529['email'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array531);

$output526 .= TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output526 .= '
						</li>
					';
return $output526;
};
$arguments521 = array();
$arguments521['then'] = NULL;
$arguments521['else'] = NULL;
$arguments521['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array523 = array();
$array524 = array (
);$array523['0'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array524);

$expression525 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments521['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression525(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array523)
					),
					$renderingContext
				);
$arguments521['__thenClosure'] = $renderChildrenClosure522;

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext);

$output469 .= '
					<li>
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
$arguments532['key'] = 'tx_femanager_domain_model_user.gender';

$output469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext)]);

$output469 .= ':
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
$output545 = '';

$output545 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output548 = '';

$output548 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['key'] = NULL;
$arguments549['id'] = NULL;
$arguments549['default'] = NULL;
$arguments549['arguments'] = NULL;
$arguments549['extensionName'] = NULL;
$arguments549['languageKey'] = NULL;
$arguments549['alternativeLanguageKeys'] = NULL;
$arguments549['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext)]);

$output548 .= '
							';
return $output548;
};
$arguments546 = array();

$output545 .= '';

$output545 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
$output553 = '';

$output553 .= '
								';
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
$arguments554['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output553 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext)]);

$output553 .= '
							';
return $output553;
};
$arguments551 = array();
$arguments551['if'] = NULL;

$output545 .= '';

$output545 .= '
						';
return $output545;
};
$arguments534 = array();
$arguments534['then'] = NULL;
$arguments534['else'] = NULL;
$arguments534['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array542 = array();
$array543 = array (
);$array542['0'] = $renderingContext->getVariableProvider()->getByPath('user.gender', $array543);
$array542['1'] = ' == 0';

$expression544 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments534['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression544(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array542)
					),
					$renderingContext
				);
$arguments534['__thenClosure'] = function() use ($renderingContext, $self) {
$output536 = '';

$output536 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments537 = array();
$arguments537['key'] = NULL;
$arguments537['id'] = NULL;
$arguments537['default'] = NULL;
$arguments537['arguments'] = NULL;
$arguments537['extensionName'] = NULL;
$arguments537['languageKey'] = NULL;
$arguments537['alternativeLanguageKeys'] = NULL;
$arguments537['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output536 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments537, $renderChildrenClosure538, $renderingContext)]);

$output536 .= '
							';
return $output536;
};
$arguments534['__elseClosures'][] = function() use ($renderingContext, $self) {
$output539 = '';

$output539 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments540 = array();
$arguments540['key'] = NULL;
$arguments540['id'] = NULL;
$arguments540['default'] = NULL;
$arguments540['arguments'] = NULL;
$arguments540['extensionName'] = NULL;
$arguments540['languageKey'] = NULL;
$arguments540['alternativeLanguageKeys'] = NULL;
$arguments540['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext)]);

$output539 .= '
							';
return $output539;
};

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output469 .= '
					</li>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$output561 = '';

$output561 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments562 = array();
$arguments562['key'] = NULL;
$arguments562['id'] = NULL;
$arguments562['default'] = NULL;
$arguments562['arguments'] = NULL;
$arguments562['extensionName'] = NULL;
$arguments562['languageKey'] = NULL;
$arguments562['alternativeLanguageKeys'] = NULL;
$arguments562['key'] = 'tx_femanager_domain_model_user.dateOfBirth';

$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext)]);

$output561 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
$array568 = array (
);return $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array568);
};
$arguments564 = array();
$arguments564['date'] = NULL;
$arguments564['format'] = '';
$arguments564['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments566 = array();
$arguments566['key'] = NULL;
$arguments566['id'] = NULL;
$arguments566['default'] = NULL;
$arguments566['arguments'] = NULL;
$arguments566['extensionName'] = NULL;
$arguments566['languageKey'] = NULL;
$arguments566['alternativeLanguageKeys'] = NULL;
$arguments566['key'] = 'tx_femanager_domain_model_user.dateFormat';
$arguments564['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);
$renderChildrenClosure565 = ($arguments564['date'] !== null) ? function() use ($arguments564) { return $arguments564['date']; } : $renderChildrenClosure565;
$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext)]);

$output561 .= '
						</li>
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
);$array558['0'] = $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array559);

$expression560 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments556['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression560(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array558)
					),
					$renderingContext
				);
$arguments556['__thenClosure'] = $renderChildrenClosure557;

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext);

$output469 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
$output574 = '';

$output574 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments575 = array();
$arguments575['key'] = NULL;
$arguments575['id'] = NULL;
$arguments575['default'] = NULL;
$arguments575['arguments'] = NULL;
$arguments575['extensionName'] = NULL;
$arguments575['languageKey'] = NULL;
$arguments575['alternativeLanguageKeys'] = NULL;
$arguments575['key'] = 'tx_femanager_domain_model_user.address';

$output574 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext)]);

$output574 .= ':
							';
$array577 = array (
);
$output574 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.address', $array577)]);

$output574 .= '
						</li>
					';
return $output574;
};
$arguments569 = array();
$arguments569['then'] = NULL;
$arguments569['else'] = NULL;
$arguments569['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array571 = array();
$array572 = array (
);$array571['0'] = $renderingContext->getVariableProvider()->getByPath('user.address', $array572);

$expression573 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments569['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression573(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array571)
					),
					$renderingContext
				);
$arguments569['__thenClosure'] = $renderChildrenClosure570;

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$output469 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
$output583 = '';

$output583 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments584 = array();
$arguments584['key'] = NULL;
$arguments584['id'] = NULL;
$arguments584['default'] = NULL;
$arguments584['arguments'] = NULL;
$arguments584['extensionName'] = NULL;
$arguments584['languageKey'] = NULL;
$arguments584['alternativeLanguageKeys'] = NULL;
$arguments584['key'] = 'tx_femanager_domain_model_user.zip';

$output583 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext)]);

$output583 .= ':
							';
$array586 = array (
);
$output583 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.zip', $array586)]);

$output583 .= '
						</li>
					';
return $output583;
};
$arguments578 = array();
$arguments578['then'] = NULL;
$arguments578['else'] = NULL;
$arguments578['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array580 = array();
$array581 = array (
);$array580['0'] = $renderingContext->getVariableProvider()->getByPath('user.zip', $array581);

$expression582 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments578['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression582(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array580)
					),
					$renderingContext
				);
$arguments578['__thenClosure'] = $renderChildrenClosure579;

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext);

$output469 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
$output592 = '';

$output592 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments593 = array();
$arguments593['key'] = NULL;
$arguments593['id'] = NULL;
$arguments593['default'] = NULL;
$arguments593['arguments'] = NULL;
$arguments593['extensionName'] = NULL;
$arguments593['languageKey'] = NULL;
$arguments593['alternativeLanguageKeys'] = NULL;
$arguments593['key'] = 'tx_femanager_domain_model_user.city';

$output592 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext)]);

$output592 .= ':
							';
$array595 = array (
);
$output592 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.city', $array595)]);

$output592 .= '
						</li>
					';
return $output592;
};
$arguments587 = array();
$arguments587['then'] = NULL;
$arguments587['else'] = NULL;
$arguments587['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array589 = array();
$array590 = array (
);$array589['0'] = $renderingContext->getVariableProvider()->getByPath('user.city', $array590);

$expression591 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments587['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression591(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array589)
					),
					$renderingContext
				);
$arguments587['__thenClosure'] = $renderChildrenClosure588;

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output469 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
$output601 = '';

$output601 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments602 = array();
$arguments602['key'] = NULL;
$arguments602['id'] = NULL;
$arguments602['default'] = NULL;
$arguments602['arguments'] = NULL;
$arguments602['extensionName'] = NULL;
$arguments602['languageKey'] = NULL;
$arguments602['alternativeLanguageKeys'] = NULL;
$arguments602['key'] = 'tx_femanager_domain_model_user.country';

$output601 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext)]);

$output601 .= ':
							';
$array604 = array (
);
$output601 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.country', $array604)]);

$output601 .= '
						</li>
					';
return $output601;
};
$arguments596 = array();
$arguments596['then'] = NULL;
$arguments596['else'] = NULL;
$arguments596['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array598 = array();
$array599 = array (
);$array598['0'] = $renderingContext->getVariableProvider()->getByPath('user.country', $array599);

$expression600 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments596['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression600(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array598)
					),
					$renderingContext
				);
$arguments596['__thenClosure'] = $renderChildrenClosure597;

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext);

$output469 .= '
				</ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
$output608 = '';

$output608 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments609 = array();
$arguments609['additionalAttributes'] = NULL;
$arguments609['data'] = NULL;
$arguments609['class'] = NULL;
$arguments609['dir'] = NULL;
$arguments609['id'] = NULL;
$arguments609['lang'] = NULL;
$arguments609['style'] = NULL;
$arguments609['title'] = NULL;
$arguments609['accesskey'] = NULL;
$arguments609['tabindex'] = NULL;
$arguments609['onclick'] = NULL;
$arguments609['alt'] = NULL;
$arguments609['ismap'] = NULL;
$arguments609['longdesc'] = NULL;
$arguments609['usemap'] = NULL;
$arguments609['src'] = NULL;
$arguments609['treatIdAsReference'] = NULL;
$arguments609['image'] = NULL;
$arguments609['crop'] = NULL;
$arguments609['cropVariant'] = 'default';
$arguments609['width'] = NULL;
$arguments609['height'] = NULL;
$arguments609['minWidth'] = NULL;
$arguments609['minHeight'] = NULL;
$arguments609['maxWidth'] = NULL;
$arguments609['maxHeight'] = NULL;
$arguments609['absolute'] = false;
$array611 = array (
);$arguments609['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array611);
$arguments609['width'] = 250;

$output608 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output608 .= '
				';
return $output608;
};
$arguments605 = array();
$arguments605['each'] = NULL;
$arguments605['as'] = NULL;
$arguments605['key'] = NULL;
$arguments605['reverse'] = false;
$arguments605['iteration'] = NULL;
$array607 = array (
);$arguments605['each'] = $renderingContext->getVariableProvider()->getByPath('user.image', $array607);
$arguments605['as'] = 'image';

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments605, $renderChildrenClosure606, $renderingContext);

$output469 .= '
			';
return $output469;
};
$arguments467 = array();

$output466 .= '';

$output466 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
$output614 = '';

$output614 .= '
				<div class="femanager_note">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments615 = array();
$arguments615['key'] = NULL;
$arguments615['id'] = NULL;
$arguments615['default'] = NULL;
$arguments615['arguments'] = NULL;
$arguments615['extensionName'] = NULL;
$arguments615['languageKey'] = NULL;
$arguments615['alternativeLanguageKeys'] = NULL;
$arguments615['key'] = 'noRecordFoundShow';

$output614 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext)]);

$output614 .= '
				</div>
			';
return $output614;
};
$arguments612 = array();
$arguments612['if'] = NULL;

$output466 .= '';

$output466 .= '
		';
return $output466;
};
$arguments315 = array();
$arguments315['then'] = NULL;
$arguments315['else'] = NULL;
$arguments315['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array463 = array();
$array464 = array (
);$array463['0'] = $renderingContext->getVariableProvider()->getByPath('user', $array464);

$expression465 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments315['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression465(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array463)
					),
					$renderingContext
				);
$arguments315['__thenClosure'] = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
				<ul>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['key'] = NULL;
$arguments324['id'] = NULL;
$arguments324['default'] = NULL;
$arguments324['arguments'] = NULL;
$arguments324['extensionName'] = NULL;
$arguments324['languageKey'] = NULL;
$arguments324['alternativeLanguageKeys'] = NULL;
$arguments324['key'] = 'tx_femanager_domain_model_user.username';

$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext)]);

$output323 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$array330 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array330)]);
};
$arguments326 = array();
$arguments326['additionalAttributes'] = NULL;
$arguments326['data'] = NULL;
$arguments326['class'] = NULL;
$arguments326['dir'] = NULL;
$arguments326['id'] = NULL;
$arguments326['lang'] = NULL;
$arguments326['style'] = NULL;
$arguments326['title'] = NULL;
$arguments326['accesskey'] = NULL;
$arguments326['tabindex'] = NULL;
$arguments326['onclick'] = NULL;
$arguments326['name'] = NULL;
$arguments326['rel'] = NULL;
$arguments326['rev'] = NULL;
$arguments326['target'] = NULL;
$arguments326['action'] = NULL;
$arguments326['controller'] = NULL;
$arguments326['extensionName'] = NULL;
$arguments326['pluginName'] = NULL;
$arguments326['pageUid'] = NULL;
$arguments326['pageType'] = NULL;
$arguments326['noCache'] = NULL;
$arguments326['noCacheHash'] = NULL;
$arguments326['section'] = NULL;
$arguments326['format'] = NULL;
$arguments326['linkAccessRestrictedPages'] = NULL;
$arguments326['additionalParams'] = NULL;
$arguments326['absolute'] = NULL;
$arguments326['addQueryString'] = NULL;
$arguments326['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments326['addQueryStringMethod'] = NULL;
$arguments326['arguments'] = NULL;
$arguments326['action'] = 'show';
// Rendering Array
$array328 = array();
$array329 = array (
);$array328['user'] = $renderingContext->getVariableProvider()->getByPath('user', $array329);
$arguments326['arguments'] = $array328;

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output323 .= '
						</li>
					';
return $output323;
};
$arguments318 = array();
$arguments318['then'] = NULL;
$arguments318['else'] = NULL;
$arguments318['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array320 = array();
$array321 = array (
);$array320['0'] = $renderingContext->getVariableProvider()->getByPath('user.username', $array321);

$expression322 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments318['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression322(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array320)
					),
					$renderingContext
				);
$arguments318['__thenClosure'] = $renderChildrenClosure319;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output317 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$output336 = '';

$output336 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments337 = array();
$arguments337['key'] = NULL;
$arguments337['id'] = NULL;
$arguments337['default'] = NULL;
$arguments337['arguments'] = NULL;
$arguments337['extensionName'] = NULL;
$arguments337['languageKey'] = NULL;
$arguments337['alternativeLanguageKeys'] = NULL;
$arguments337['key'] = 'tx_femanager_domain_model_user.usergroup';

$output336 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext)]);

$output336 .= ':
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output342 = '';
$array343 = array (
);
$output342 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('usergroup.title', $array343)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments349 = array();
$arguments349['if'] = NULL;
return '';
};
$arguments344 = array();
$arguments344['then'] = NULL;
$arguments344['else'] = NULL;
$arguments344['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array346 = array();
$array347 = array (
);$array346['0'] = $renderingContext->getVariableProvider()->getByPath('i.isLast', $array347);

$expression348 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments344['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression348(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array346)
					),
					$renderingContext
				);
$arguments344['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output342 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);
return $output342;
};
$arguments339 = array();
$arguments339['each'] = NULL;
$arguments339['as'] = NULL;
$arguments339['key'] = NULL;
$arguments339['reverse'] = false;
$arguments339['iteration'] = NULL;
$array341 = array (
);$arguments339['each'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array341);
$arguments339['as'] = 'usergroup';
$arguments339['iteration'] = 'i';

$output336 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output336 .= '
						</li>
					';
return $output336;
};
$arguments331 = array();
$arguments331['then'] = NULL;
$arguments331['else'] = NULL;
$arguments331['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array333 = array();
$array334 = array (
);$array333['0'] = $renderingContext->getVariableProvider()->getByPath('user.usergroup', $array334);

$expression335 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments331['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression335(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array333)
					),
					$renderingContext
				);
$arguments331['__thenClosure'] = $renderChildrenClosure332;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output317 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments357 = array();
$arguments357['key'] = NULL;
$arguments357['id'] = NULL;
$arguments357['default'] = NULL;
$arguments357['arguments'] = NULL;
$arguments357['extensionName'] = NULL;
$arguments357['languageKey'] = NULL;
$arguments357['alternativeLanguageKeys'] = NULL;
$arguments357['key'] = 'tx_femanager_domain_model_user.firstName';

$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext)]);

$output356 .= ':
							';
$array359 = array (
);
$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.firstName', $array359)]);

$output356 .= '
						</li>
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
);$array353['0'] = $renderingContext->getVariableProvider()->getByPath('user.firstName', $array354);

$expression355 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments351['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression355(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array353)
					),
					$renderingContext
				);
$arguments351['__thenClosure'] = $renderChildrenClosure352;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output317 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
$output365 = '';

$output365 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments366 = array();
$arguments366['key'] = NULL;
$arguments366['id'] = NULL;
$arguments366['default'] = NULL;
$arguments366['arguments'] = NULL;
$arguments366['extensionName'] = NULL;
$arguments366['languageKey'] = NULL;
$arguments366['alternativeLanguageKeys'] = NULL;
$arguments366['key'] = 'tx_femanager_domain_model_user.lastName';

$output365 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext)]);

$output365 .= ':
							';
$array368 = array (
);
$output365 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.lastName', $array368)]);

$output365 .= '
						</li>
					';
return $output365;
};
$arguments360 = array();
$arguments360['then'] = NULL;
$arguments360['else'] = NULL;
$arguments360['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array362 = array();
$array363 = array (
);$array362['0'] = $renderingContext->getVariableProvider()->getByPath('user.lastName', $array363);

$expression364 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments360['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression364(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array362)
					),
					$renderingContext
				);
$arguments360['__thenClosure'] = $renderChildrenClosure361;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output317 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$output374 = '';

$output374 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments375 = array();
$arguments375['key'] = NULL;
$arguments375['id'] = NULL;
$arguments375['default'] = NULL;
$arguments375['arguments'] = NULL;
$arguments375['extensionName'] = NULL;
$arguments375['languageKey'] = NULL;
$arguments375['alternativeLanguageKeys'] = NULL;
$arguments375['key'] = 'tx_femanager_domain_model_user.email';

$output374 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext)]);

$output374 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments377 = array();
$arguments377['additionalAttributes'] = NULL;
$arguments377['data'] = NULL;
$arguments377['email'] = NULL;
$arguments377['class'] = NULL;
$arguments377['dir'] = NULL;
$arguments377['id'] = NULL;
$arguments377['lang'] = NULL;
$arguments377['style'] = NULL;
$arguments377['title'] = NULL;
$arguments377['accesskey'] = NULL;
$arguments377['tabindex'] = NULL;
$arguments377['onclick'] = NULL;
$arguments377['name'] = NULL;
$arguments377['rel'] = NULL;
$arguments377['rev'] = NULL;
$arguments377['target'] = NULL;
$array379 = array (
);$arguments377['email'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array379);

$output374 .= TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output374 .= '
						</li>
					';
return $output374;
};
$arguments369 = array();
$arguments369['then'] = NULL;
$arguments369['else'] = NULL;
$arguments369['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array371 = array();
$array372 = array (
);$array371['0'] = $renderingContext->getVariableProvider()->getByPath('user.email', $array372);

$expression373 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments369['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression373(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array371)
					),
					$renderingContext
				);
$arguments369['__thenClosure'] = $renderChildrenClosure370;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output317 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments380 = array();
$arguments380['key'] = NULL;
$arguments380['id'] = NULL;
$arguments380['default'] = NULL;
$arguments380['arguments'] = NULL;
$arguments380['extensionName'] = NULL;
$arguments380['languageKey'] = NULL;
$arguments380['alternativeLanguageKeys'] = NULL;
$arguments380['key'] = 'tx_femanager_domain_model_user.gender';

$output317 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext)]);

$output317 .= ':
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$output396 = '';

$output396 .= '
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
$arguments397['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output396 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext)]);

$output396 .= '
							';
return $output396;
};
$arguments394 = array();

$output393 .= '';

$output393 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
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
$arguments402['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output401 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext)]);

$output401 .= '
							';
return $output401;
};
$arguments399 = array();
$arguments399['if'] = NULL;

$output393 .= '';

$output393 .= '
						';
return $output393;
};
$arguments382 = array();
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$arguments382['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array390 = array();
$array391 = array (
);$array390['0'] = $renderingContext->getVariableProvider()->getByPath('user.gender', $array391);
$array390['1'] = ' == 0';

$expression392 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments382['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression392(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array390)
					),
					$renderingContext
				);
$arguments382['__thenClosure'] = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['key'] = NULL;
$arguments385['id'] = NULL;
$arguments385['default'] = NULL;
$arguments385['arguments'] = NULL;
$arguments385['extensionName'] = NULL;
$arguments385['languageKey'] = NULL;
$arguments385['alternativeLanguageKeys'] = NULL;
$arguments385['key'] = 'tx_femanager_domain_model_user.gender.item0';

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext)]);

$output384 .= '
							';
return $output384;
};
$arguments382['__elseClosures'][] = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments388 = array();
$arguments388['key'] = NULL;
$arguments388['id'] = NULL;
$arguments388['default'] = NULL;
$arguments388['arguments'] = NULL;
$arguments388['extensionName'] = NULL;
$arguments388['languageKey'] = NULL;
$arguments388['alternativeLanguageKeys'] = NULL;
$arguments388['key'] = 'tx_femanager_domain_model_user.gender.item1';

$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext)]);

$output387 .= '
							';
return $output387;
};

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output317 .= '
					</li>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$output409 = '';

$output409 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['key'] = NULL;
$arguments410['id'] = NULL;
$arguments410['default'] = NULL;
$arguments410['arguments'] = NULL;
$arguments410['extensionName'] = NULL;
$arguments410['languageKey'] = NULL;
$arguments410['alternativeLanguageKeys'] = NULL;
$arguments410['key'] = 'tx_femanager_domain_model_user.dateOfBirth';

$output409 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext)]);

$output409 .= ':
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$array416 = array (
);return $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array416);
};
$arguments412 = array();
$arguments412['date'] = NULL;
$arguments412['format'] = '';
$arguments412['base'] = NULL;
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
$arguments414['key'] = 'tx_femanager_domain_model_user.dateFormat';
$arguments412['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);
$renderChildrenClosure413 = ($arguments412['date'] !== null) ? function() use ($arguments412) { return $arguments412['date']; } : $renderChildrenClosure413;
$output409 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext)]);

$output409 .= '
						</li>
					';
return $output409;
};
$arguments404 = array();
$arguments404['then'] = NULL;
$arguments404['else'] = NULL;
$arguments404['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array406 = array();
$array407 = array (
);$array406['0'] = $renderingContext->getVariableProvider()->getByPath('user.dateOfBirth', $array407);

$expression408 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments404['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression408(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array406)
					),
					$renderingContext
				);
$arguments404['__thenClosure'] = $renderChildrenClosure405;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output317 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
$output422 = '';

$output422 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments423 = array();
$arguments423['key'] = NULL;
$arguments423['id'] = NULL;
$arguments423['default'] = NULL;
$arguments423['arguments'] = NULL;
$arguments423['extensionName'] = NULL;
$arguments423['languageKey'] = NULL;
$arguments423['alternativeLanguageKeys'] = NULL;
$arguments423['key'] = 'tx_femanager_domain_model_user.address';

$output422 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext)]);

$output422 .= ':
							';
$array425 = array (
);
$output422 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.address', $array425)]);

$output422 .= '
						</li>
					';
return $output422;
};
$arguments417 = array();
$arguments417['then'] = NULL;
$arguments417['else'] = NULL;
$arguments417['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array419 = array();
$array420 = array (
);$array419['0'] = $renderingContext->getVariableProvider()->getByPath('user.address', $array420);

$expression421 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments417['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression421(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array419)
					),
					$renderingContext
				);
$arguments417['__thenClosure'] = $renderChildrenClosure418;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output317 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$output431 = '';

$output431 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['key'] = NULL;
$arguments432['id'] = NULL;
$arguments432['default'] = NULL;
$arguments432['arguments'] = NULL;
$arguments432['extensionName'] = NULL;
$arguments432['languageKey'] = NULL;
$arguments432['alternativeLanguageKeys'] = NULL;
$arguments432['key'] = 'tx_femanager_domain_model_user.zip';

$output431 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext)]);

$output431 .= ':
							';
$array434 = array (
);
$output431 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.zip', $array434)]);

$output431 .= '
						</li>
					';
return $output431;
};
$arguments426 = array();
$arguments426['then'] = NULL;
$arguments426['else'] = NULL;
$arguments426['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array428 = array();
$array429 = array (
);$array428['0'] = $renderingContext->getVariableProvider()->getByPath('user.zip', $array429);

$expression430 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments426['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression430(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array428)
					),
					$renderingContext
				);
$arguments426['__thenClosure'] = $renderChildrenClosure427;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output317 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$output440 = '';

$output440 .= '
						<li>
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
$arguments441['key'] = 'tx_femanager_domain_model_user.city';

$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext)]);

$output440 .= ':
							';
$array443 = array (
);
$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.city', $array443)]);

$output440 .= '
						</li>
					';
return $output440;
};
$arguments435 = array();
$arguments435['then'] = NULL;
$arguments435['else'] = NULL;
$arguments435['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array437 = array();
$array438 = array (
);$array437['0'] = $renderingContext->getVariableProvider()->getByPath('user.city', $array438);

$expression439 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments435['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression439(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array437)
					),
					$renderingContext
				);
$arguments435['__thenClosure'] = $renderChildrenClosure436;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output317 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['key'] = NULL;
$arguments450['id'] = NULL;
$arguments450['default'] = NULL;
$arguments450['arguments'] = NULL;
$arguments450['extensionName'] = NULL;
$arguments450['languageKey'] = NULL;
$arguments450['alternativeLanguageKeys'] = NULL;
$arguments450['key'] = 'tx_femanager_domain_model_user.country';

$output449 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext)]);

$output449 .= ':
							';
$array452 = array (
);
$output449 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.country', $array452)]);

$output449 .= '
						</li>
					';
return $output449;
};
$arguments444 = array();
$arguments444['then'] = NULL;
$arguments444['else'] = NULL;
$arguments444['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array446 = array();
$array447 = array (
);$array446['0'] = $renderingContext->getVariableProvider()->getByPath('user.country', $array447);

$expression448 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments444['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression448(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array446)
					),
					$renderingContext
				);
$arguments444['__thenClosure'] = $renderChildrenClosure445;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output317 .= '
				</ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$output456 = '';

$output456 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments457 = array();
$arguments457['additionalAttributes'] = NULL;
$arguments457['data'] = NULL;
$arguments457['class'] = NULL;
$arguments457['dir'] = NULL;
$arguments457['id'] = NULL;
$arguments457['lang'] = NULL;
$arguments457['style'] = NULL;
$arguments457['title'] = NULL;
$arguments457['accesskey'] = NULL;
$arguments457['tabindex'] = NULL;
$arguments457['onclick'] = NULL;
$arguments457['alt'] = NULL;
$arguments457['ismap'] = NULL;
$arguments457['longdesc'] = NULL;
$arguments457['usemap'] = NULL;
$arguments457['src'] = NULL;
$arguments457['treatIdAsReference'] = NULL;
$arguments457['image'] = NULL;
$arguments457['crop'] = NULL;
$arguments457['cropVariant'] = 'default';
$arguments457['width'] = NULL;
$arguments457['height'] = NULL;
$arguments457['minWidth'] = NULL;
$arguments457['minHeight'] = NULL;
$arguments457['maxWidth'] = NULL;
$arguments457['maxHeight'] = NULL;
$arguments457['absolute'] = false;
$array459 = array (
);$arguments457['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array459);
$arguments457['width'] = 250;

$output456 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output456 .= '
				';
return $output456;
};
$arguments453 = array();
$arguments453['each'] = NULL;
$arguments453['as'] = NULL;
$arguments453['key'] = NULL;
$arguments453['reverse'] = false;
$arguments453['iteration'] = NULL;
$array455 = array (
);$arguments453['each'] = $renderingContext->getVariableProvider()->getByPath('user.image', $array455);
$arguments453['as'] = 'image';

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output317 .= '
			';
return $output317;
};
$arguments315['__elseClosures'][] = function() use ($renderingContext, $self) {
$output460 = '';

$output460 .= '
				<div class="femanager_note">
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
$arguments461['key'] = 'noRecordFoundShow';

$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext)]);

$output460 .= '
				</div>
			';
return $output460;
};

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output311 .= '
	</div>
';
return $output311;
};
$arguments309 = array();
$arguments309['name'] = NULL;
$arguments309['name'] = 'main';

$output306 .= NULL;

$output306 .= '
';

return $output306;
}


}
#