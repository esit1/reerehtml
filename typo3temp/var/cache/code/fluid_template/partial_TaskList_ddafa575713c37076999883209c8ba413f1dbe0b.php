<?php

class partial_TaskList_ddafa575713c37076999883209c8ba413f1dbe0b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['key'] = 'msg.invalidTaskClass.infobox.message';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
};
$arguments16 = array();
$arguments16['value'] = NULL;

$output15 .= isset($arguments16['value']) ? $arguments16['value'] : $renderChildrenClosure17();

$output15 .= '
		';
return $output15;
};
$arguments7 = array();
$arguments7['message'] = NULL;
$arguments7['title'] = NULL;
$arguments7['state'] = -2;
$arguments7['iconName'] = NULL;
$arguments7['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'msg.invalidTaskClass.infobox.title';
// Rendering Array
$array11 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$array14 = array (
);return $renderingContext->getVariableProvider()->getByPath('missingClasses', $array14);
};
$arguments12 = array();
$arguments12['subject'] = NULL;
$renderChildrenClosure13 = ($arguments12['subject'] !== null) ? function() use ($arguments12) { return $arguments12['subject']; } : $renderChildrenClosure13;$array11['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
$arguments9['arguments'] = $array11;
$arguments7['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);
$arguments7['state'] = 2;
$renderChildrenClosure8 = ($arguments7['message'] !== null) ? function() use ($arguments7) { return $arguments7['message']; } : $renderChildrenClosure8;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
	';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('missingClasses', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
			<div class="tx_scheduler_mod1_table">
				<div class="panel panel-space panel-default recordlist">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
								<div class="panel-heading taskGroup" data-task-group-id="';
$array82 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array82)]);

$output81 .= '">
									<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['key'] = NULL;
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['languageKey'] = NULL;
$arguments83['alternativeLanguageKeys'] = NULL;
$arguments83['key'] = 'label.group';

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);

$output81 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['key'] = NULL;
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['languageKey'] = NULL;
$arguments85['alternativeLanguageKeys'] = NULL;
$arguments85['id'] = 'label.noGroup';

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output81 .= '</span> (<span class="t3js-table-total-items" title="';
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
$arguments87['id'] = 'label.noGroup.taskCount';

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output81 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$array91 = array (
);return $renderingContext->getVariableProvider()->getByPath('taskGroup.tasks', $array91);
};
$arguments89 = array();
$arguments89['subject'] = NULL;
$renderChildrenClosure90 = ($arguments89['subject'] !== null) ? function() use ($arguments89) { return $arguments89['subject']; } : $renderChildrenClosure90;
$output81 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output81 .= '</span>)
									<a href="#" class="pull-right t3js-toggle-recordlist" data-table="task-group-';
$array92 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array92)]);

$output81 .= '" data-toggle="collapse" data-target="#recordlist-task-group-';
$array93 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array93)]);

$output81 .= '">
										<span class="caret"></span>
									</a>
								</div>
							';
return $output81;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$array79 = array (
);return $renderingContext->getVariableProvider()->getByPath('tasks', $array79);
};
$arguments77 = array();
$arguments77['subject'] = NULL;
$renderChildrenClosure78 = ($arguments77['subject'] !== null) ? function() use ($arguments77) { return $arguments77['subject']; } : $renderChildrenClosure78;$array76['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);
$array76['1'] = '>1';

$expression80 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = $renderChildrenClosure75;

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
						';
return $output73;
};
$arguments71 = array();

$output70 .= '';

$output70 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
							<div class="panel-heading taskGroup" data-task-group-id="';
$array97 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array97)]);

$output96 .= '">
								<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['key'] = NULL;
$arguments98['id'] = NULL;
$arguments98['default'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['extensionName'] = NULL;
$arguments98['languageKey'] = NULL;
$arguments98['alternativeLanguageKeys'] = NULL;
$arguments98['key'] = 'label.group';

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext)]);

$output96 .= '">';
$array100 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskGroup.groupName', $array100)]);

$output96 .= '</span> (<span class="t3js-table-total-items" title="';
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
$arguments101['id'] = 'label.group.taskCount';

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output96 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$array105 = array (
);return $renderingContext->getVariableProvider()->getByPath('taskGroup.tasks', $array105);
};
$arguments103 = array();
$arguments103['subject'] = NULL;
$renderChildrenClosure104 = ($arguments103['subject'] !== null) ? function() use ($arguments103) { return $arguments103['subject']; } : $renderChildrenClosure104;
$output96 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output96 .= '</span>)
									<a href="#" class="pull-right t3js-toggle-recordlist" data-table="task-group-';
$array106 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array106)]);

$output96 .= '" data-toggle="collapse" data-target="#recordlist-task-group-';
$array107 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array107)]);

$output96 .= '">
										<span class="caret"></span>
									</a>
							</div>
						';
return $output96;
};
$arguments94 = array();
$arguments94['if'] = NULL;

$output70 .= '';

$output70 .= '
					';
return $output70;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('taskGroup.groupName', $array68);
$array67['1'] = ' == \'\'';

$expression69 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == '');};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
								<div class="panel-heading taskGroup" data-task-group-id="';
$array43 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array43)]);

$output42 .= '">
									<span title="';
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
$arguments44['key'] = 'label.group';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output42 .= '">';
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
$arguments46['id'] = 'label.noGroup';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output42 .= '</span> (<span class="t3js-table-total-items" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['languageKey'] = NULL;
$arguments48['alternativeLanguageKeys'] = NULL;
$arguments48['id'] = 'label.noGroup.taskCount';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output42 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$array52 = array (
);return $renderingContext->getVariableProvider()->getByPath('taskGroup.tasks', $array52);
};
$arguments50 = array();
$arguments50['subject'] = NULL;
$renderChildrenClosure51 = ($arguments50['subject'] !== null) ? function() use ($arguments50) { return $arguments50['subject']; } : $renderChildrenClosure51;
$output42 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output42 .= '</span>)
									<a href="#" class="pull-right t3js-toggle-recordlist" data-table="task-group-';
$array53 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array53)]);

$output42 .= '" data-toggle="collapse" data-target="#recordlist-task-group-';
$array54 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array54)]);

$output42 .= '">
										<span class="caret"></span>
									</a>
								</div>
							';
return $output42;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$array40 = array (
);return $renderingContext->getVariableProvider()->getByPath('tasks', $array40);
};
$arguments38 = array();
$arguments38['subject'] = NULL;
$renderChildrenClosure39 = ($arguments38['subject'] !== null) ? function() use ($arguments38) { return $arguments38['subject']; } : $renderChildrenClosure39;$array37['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);
$array37['1'] = '>1';

$expression41 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = $renderChildrenClosure36;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
						';
return $output34;
};
$arguments32['__elseClosures'][] = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
							<div class="panel-heading taskGroup" data-task-group-id="';
$array56 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array56)]);

$output55 .= '">
								<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['languageKey'] = NULL;
$arguments57['alternativeLanguageKeys'] = NULL;
$arguments57['key'] = 'label.group';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output55 .= '">';
$array59 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskGroup.groupName', $array59)]);

$output55 .= '</span> (<span class="t3js-table-total-items" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['id'] = 'label.group.taskCount';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output55 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$array64 = array (
);return $renderingContext->getVariableProvider()->getByPath('taskGroup.tasks', $array64);
};
$arguments62 = array();
$arguments62['subject'] = NULL;
$renderChildrenClosure63 = ($arguments62['subject'] !== null) ? function() use ($arguments62) { return $arguments62['subject']; } : $renderChildrenClosure63;
$output55 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output55 .= '</span>)
									<a href="#" class="pull-right t3js-toggle-recordlist" data-table="task-group-';
$array65 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array65)]);

$output55 .= '" data-toggle="collapse" data-target="#recordlist-task-group-';
$array66 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array66)]);

$output55 .= '">
										<span class="caret"></span>
									</a>
							</div>
						';
return $output55;
};

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
					<div class="collapse in" data-state="expanded" id="recordlist-task-group-';
$array108 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array108)]);

$output31 .= '">
						<div class="table-fit">
							<table class="table table-striped table-hover taskGroup-table">
							<thead>
								<tr class="taskGroup_';
$array109 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array109)]);

$output31 .= '">
									<th><span class="t-span"><a class="btn btn-default checkall" href="#" id="checkall" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['key'] = NULL;
$arguments110['id'] = NULL;
$arguments110['default'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['extensionName'] = NULL;
$arguments110['languageKey'] = NULL;
$arguments110['alternativeLanguageKeys'] = NULL;
$arguments110['key'] = 'label.checkAll';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output31 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['identifier'] = NULL;
$arguments112['size'] = 'small';
$arguments112['overlay'] = NULL;
$arguments112['state'] = 'default';
$arguments112['alternativeMarkupIdentifier'] = NULL;
$arguments112['identifier'] = 'actions-document-select';

$output31 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output31 .= '</a></span></th>
									<th><span class="t-span">';
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
$arguments114['key'] = 'label.id';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output31 .= '</span></th>
									<th><span class="t-span">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['key'] = NULL;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['languageKey'] = NULL;
$arguments116['alternativeLanguageKeys'] = NULL;
$arguments116['key'] = 'task';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output31 .= '</span></th>
									<th><span class="t-span">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['languageKey'] = NULL;
$arguments118['alternativeLanguageKeys'] = NULL;
$arguments118['key'] = 'label.type';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext)]);

$output31 .= '</span></th>
									<th><span class="t-span">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['key'] = NULL;
$arguments120['id'] = NULL;
$arguments120['default'] = NULL;
$arguments120['arguments'] = NULL;
$arguments120['extensionName'] = NULL;
$arguments120['languageKey'] = NULL;
$arguments120['alternativeLanguageKeys'] = NULL;
$arguments120['key'] = 'label.frequency';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext)]);

$output31 .= '</span></th>
									<th><span class="t-span">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['key'] = NULL;
$arguments122['id'] = NULL;
$arguments122['default'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['extensionName'] = NULL;
$arguments122['languageKey'] = NULL;
$arguments122['alternativeLanguageKeys'] = NULL;
$arguments122['key'] = 'label.parallel';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext)]);

$output31 .= '</span></th>
									<th><span class="t-span">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['key'] = NULL;
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$arguments124['languageKey'] = NULL;
$arguments124['alternativeLanguageKeys'] = NULL;
$arguments124['key'] = 'label.lastExecution';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext)]);

$output31 .= '</span></th>
									<th><span class="t-span">';
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
$arguments126['key'] = 'label.nextExecution';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext)]);

$output31 .= '</span></th>
									<th><span class="t-span"></span></th>
								</tr>
							</thead>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
									<tr class="';
$array138 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.showAsDisabled', $array138)]);

$output137 .= ' taskGroup_';
$array139 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupIterator.index', $array139)]);

$output137 .= '">
										<td><span class="t-span"><label class="btn btn-default btn-checkbox"><input type="checkbox" name="tx_scheduler[execute][]" value="';
$array140 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array140)]);

$output137 .= '" id="task_';
$array141 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array141)]);

$output137 .= '"><span class="t3-icon fa"></span></label></span></td>
										<td class="right"><span class="t-span">';
$array142 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array142)]);

$output137 .= '</span></td>
										<td class="nowrap-disabled">
											<span class="t-span">
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
														<span class="label label-';
$array153 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('label.class', $array153)]);

$output152 .= ' pull-right" title="';
$array154 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('label.desciption', $array154)]);

$output152 .= '">';
$array155 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('label.text', $array155)]);

$output152 .= '</span>
													';
return $output152;
};
$arguments147 = array();
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$arguments147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('taskRecord.validClass', $array150);

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments147['__thenClosure'] = $renderChildrenClosure148;

$output146 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
												';
return $output146;
};
$arguments143 = array();
$arguments143['each'] = NULL;
$arguments143['as'] = NULL;
$arguments143['key'] = NULL;
$arguments143['reverse'] = false;
$arguments143['iteration'] = NULL;
$array145 = array (
);$arguments143['each'] = $renderingContext->getVariableProvider()->getByPath('taskRecord.labels', $array145);
$arguments143['as'] = 'label';

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output137 .= '
												<span class="name">
													<a href="';
$array156 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array156)]);

$output137 .= '&CMD=edit&tx_scheduler[uid]=';
$array157 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array157)]);

$output137 .= '">
														';
$array158 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.classTitle', $array158)]);

$output137 .= ' (';
$array159 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.classExtension', $array159)]);

$output137 .= ')
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
															<div class="progress">
																<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="';
$array166 = array (
);
$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.progress', $array166)]);

$output165 .= '" aria-valuemin="0" aria-valuemax="100" style="width: ';
$array167 = array (
);
$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.progress', $array167)]);

$output165 .= '%;">';
$array168 = array (
);
$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.progress', $array168)]);

$output165 .= '%</div>
															</div>
														';
return $output165;
};
$arguments160 = array();
$arguments160['then'] = NULL;
$arguments160['else'] = NULL;
$arguments160['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['0'] = $renderingContext->getVariableProvider()->getByPath('taskRecord.progress', $array163);

$expression164 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments160['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array162)
					),
					$renderingContext
				);
$arguments160['__thenClosure'] = $renderChildrenClosure161;

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output137 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
															<div class="additional-information">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$array177 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.additionalInformation', $array177)]);
};
$arguments175 = array();
$arguments175['value'] = NULL;
$renderChildrenClosure176 = ($arguments175['value'] !== null) ? function() use ($arguments175) { return $arguments175['value']; } : $renderChildrenClosure176;
$output174 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '</div>
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
);$array171['0'] = $renderingContext->getVariableProvider()->getByPath('taskRecord.additionalInformation', $array172);

$expression173 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments169['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression173(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array171)
					),
					$renderingContext
				);
$arguments169['__thenClosure'] = $renderChildrenClosure170;

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output137 .= '
													</a>
												</span>
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
													<span class="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$array186 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.description', $array186)]);
};
$arguments184 = array();
$arguments184['value'] = NULL;
$renderChildrenClosure185 = ($arguments184['value'] !== null) ? function() use ($arguments184) { return $arguments184['value']; } : $renderChildrenClosure185;
$output183 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '</span>
												';
return $output183;
};
$arguments178 = array();
$arguments178['then'] = NULL;
$arguments178['else'] = NULL;
$arguments178['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array180 = array();
$array181 = array (
);$array180['0'] = $renderingContext->getVariableProvider()->getByPath('taskRecord.description', $array181);
$array180['1'] = ' != \'\'';

$expression182 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments178['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array180)
					),
					$renderingContext
				);
$arguments178['__thenClosure'] = $renderChildrenClosure179;

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output137 .= '
											</span>
										</td>
										<td><span class="t-span">';
$array187 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.execType', $array187)]);

$output137 .= '</span></td>
										<td><span class="t-span">';
$array188 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.frequency', $array188)]);

$output137 .= '</span></td>
										<td><span class="t-span">';
$array189 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.multiple', $array189)]);

$output137 .= '</span></td>
										<td><span class="t-span">';
$array190 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.lastExecution', $array190)]);

$output137 .= '</span></td>
										<td><span class="t-span ';
$array191 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.labels.nextexecution.class', $array191)]);

$output137 .= '">';
$array192 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.nextDate', $array192)]);

$output137 .= '</span></td>
										<td class="nowrap">
											<span class="t-span">
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$output273 = '';

$output273 .= '
														<div class="btn-group" role="group">
															<a data-toggle="tooltip" data-container="body" class="btn btn-default t3js-modal-trigger" href="';
$array274 = array (
);
$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array274)]);

$output273 .= '&CMD=stop&tx_scheduler[uid]=';
$array275 = array (
);
$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array275)]);

$output273 .= '" data-severity="warning" data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['key'] = NULL;
$arguments276['id'] = NULL;
$arguments276['default'] = NULL;
$arguments276['arguments'] = NULL;
$arguments276['extensionName'] = NULL;
$arguments276['languageKey'] = NULL;
$arguments276['alternativeLanguageKeys'] = NULL;
$arguments276['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext)]);

$output273 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['key'] = NULL;
$arguments278['id'] = NULL;
$arguments278['default'] = NULL;
$arguments278['arguments'] = NULL;
$arguments278['extensionName'] = NULL;
$arguments278['languageKey'] = NULL;
$arguments278['alternativeLanguageKeys'] = NULL;
$arguments278['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext)]);

$output273 .= '" data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['key'] = NULL;
$arguments280['id'] = NULL;
$arguments280['default'] = NULL;
$arguments280['arguments'] = NULL;
$arguments280['extensionName'] = NULL;
$arguments280['languageKey'] = NULL;
$arguments280['alternativeLanguageKeys'] = NULL;
$arguments280['key'] = 'msg.stop';

$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext)]);

$output273 .= '" title="';
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
$arguments282['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);

$output273 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments284 = array();
$arguments284['identifier'] = NULL;
$arguments284['size'] = 'small';
$arguments284['overlay'] = NULL;
$arguments284['state'] = 'default';
$arguments284['alternativeMarkupIdentifier'] = NULL;
$arguments284['identifier'] = 'actions-close';

$output273 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output273 .= '
															</a>
														</div>
													';
return $output273;
};
$arguments271 = array();

$output270 .= '';

$output270 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
														<div class="btn-group" role="group">
															<a data-toggle="tooltip" data-container="body" class="btn btn-default" href="';
$array289 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array289)]);

$output288 .= '&CMD=edit&tx_scheduler[uid]=';
$array290 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array290)]);

$output288 .= '" title="';
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
$arguments291['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';

$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext)]);

$output288 .= '">
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
$arguments293['identifier'] = 'actions-open';

$output288 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output288 .= '
															</a>
															<a data-toggle="tooltip" data-container="body" class="btn btn-default" href="';
$array295 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array295)]);

$output288 .= '&CMD=toggleHidden&tx_scheduler[uid]=';
$array296 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array296)]);

$output288 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['key'] = NULL;
$arguments297['id'] = NULL;
$arguments297['default'] = NULL;
$arguments297['arguments'] = NULL;
$arguments297['extensionName'] = NULL;
$arguments297['languageKey'] = NULL;
$arguments297['alternativeLanguageKeys'] = NULL;
$output299 = '';

$output299 .= 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:';
$array300 = array (
);
$output299 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.translationKey', $array300)]);
$arguments297['key'] = $output299;

$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext)]);

$output288 .= '">
																';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
																		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['identifier'] = NULL;
$arguments316['size'] = 'small';
$arguments316['overlay'] = NULL;
$arguments316['state'] = 'default';
$arguments316['alternativeMarkupIdentifier'] = NULL;
$arguments316['identifier'] = 'actions-edit-unhide';

$output315 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '
																	';
return $output315;
};
$arguments313 = array();

$output312 .= '';

$output312 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
																		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['identifier'] = NULL;
$arguments321['size'] = 'small';
$arguments321['overlay'] = NULL;
$arguments321['state'] = 'default';
$arguments321['alternativeMarkupIdentifier'] = NULL;
$arguments321['identifier'] = 'actions-edit-hide';

$output320 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output320 .= '
																	';
return $output320;
};
$arguments318 = array();
$arguments318['if'] = NULL;

$output312 .= '';

$output312 .= '
																';
return $output312;
};
$arguments301 = array();
$arguments301['then'] = NULL;
$arguments301['else'] = NULL;
$arguments301['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array309 = array();
$array310 = array (
);$array309['0'] = $renderingContext->getVariableProvider()->getByPath('taskRecord.translationKey', $array310);
$array309['1'] = ' == \'enable\'';

$expression311 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'enable');};
$arguments301['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression311(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array309)
					),
					$renderingContext
				);
$arguments301['__thenClosure'] = function() use ($renderingContext, $self) {
$output303 = '';

$output303 .= '
																		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['identifier'] = NULL;
$arguments304['size'] = 'small';
$arguments304['overlay'] = NULL;
$arguments304['state'] = 'default';
$arguments304['alternativeMarkupIdentifier'] = NULL;
$arguments304['identifier'] = 'actions-edit-unhide';

$output303 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output303 .= '
																	';
return $output303;
};
$arguments301['__elseClosures'][] = function() use ($renderingContext, $self) {
$output306 = '';

$output306 .= '
																		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['identifier'] = NULL;
$arguments307['size'] = 'small';
$arguments307['overlay'] = NULL;
$arguments307['state'] = 'default';
$arguments307['alternativeMarkupIdentifier'] = NULL;
$arguments307['identifier'] = 'actions-edit-hide';

$output306 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output306 .= '
																	';
return $output306;
};

$output288 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output288 .= '
															</a>
															<a data-toggle="tooltip" data-container="body" class="btn btn-default t3js-modal-trigger" href="';
$array323 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array323)]);

$output288 .= '&CMD=delete&tx_scheduler[uid]=';
$array324 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array324)]);

$output288 .= '" data-severity="warning" data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['key'] = NULL;
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$arguments325['languageKey'] = NULL;
$arguments325['alternativeLanguageKeys'] = NULL;
$arguments325['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';

$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext)]);

$output288 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments327 = array();
$arguments327['key'] = NULL;
$arguments327['id'] = NULL;
$arguments327['default'] = NULL;
$arguments327['arguments'] = NULL;
$arguments327['extensionName'] = NULL;
$arguments327['languageKey'] = NULL;
$arguments327['alternativeLanguageKeys'] = NULL;
$arguments327['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext)]);

$output288 .= '" data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['key'] = NULL;
$arguments329['id'] = NULL;
$arguments329['default'] = NULL;
$arguments329['arguments'] = NULL;
$arguments329['extensionName'] = NULL;
$arguments329['languageKey'] = NULL;
$arguments329['alternativeLanguageKeys'] = NULL;
$arguments329['key'] = 'msg.delete';

$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext)]);

$output288 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments331 = array();
$arguments331['key'] = NULL;
$arguments331['id'] = NULL;
$arguments331['default'] = NULL;
$arguments331['arguments'] = NULL;
$arguments331['extensionName'] = NULL;
$arguments331['languageKey'] = NULL;
$arguments331['alternativeLanguageKeys'] = NULL;
$arguments331['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';

$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext)]);

$output288 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments333 = array();
$arguments333['identifier'] = NULL;
$arguments333['size'] = 'small';
$arguments333['overlay'] = NULL;
$arguments333['state'] = 'default';
$arguments333['alternativeMarkupIdentifier'] = NULL;
$arguments333['identifier'] = 'actions-edit-delete';

$output288 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output288 .= '
															</a>
														</div>
														<div class="btn-group" role="group">
															<a class="btn btn-default" data-toggle="tooltip" data-container="body" href="';
$array335 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array335)]);

$output288 .= '&CMD=setNextExecutionTime&tx_scheduler[uid]=';
$array336 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array336)]);

$output288 .= '" title="';
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
$arguments337['key'] = 'action.run_task_cron';

$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext)]);

$output288 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments339 = array();
$arguments339['identifier'] = NULL;
$arguments339['size'] = 'small';
$arguments339['overlay'] = NULL;
$arguments339['state'] = 'default';
$arguments339['alternativeMarkupIdentifier'] = NULL;
$arguments339['identifier'] = 'actions-clock';

$output288 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output288 .= '
															</a>
															<a class="btn btn-default" data-toggle="tooltip" data-container="body" href="';
$array341 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array341)]);

$output288 .= '&tx_scheduler[execute][]=';
$array342 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array342)]);

$output288 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments343 = array();
$arguments343['key'] = NULL;
$arguments343['id'] = NULL;
$arguments343['default'] = NULL;
$arguments343['arguments'] = NULL;
$arguments343['extensionName'] = NULL;
$arguments343['languageKey'] = NULL;
$arguments343['alternativeLanguageKeys'] = NULL;
$arguments343['key'] = 'action.run_task';

$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext)]);

$output288 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments345 = array();
$arguments345['identifier'] = NULL;
$arguments345['size'] = 'small';
$arguments345['overlay'] = NULL;
$arguments345['state'] = 'default';
$arguments345['alternativeMarkupIdentifier'] = NULL;
$arguments345['identifier'] = 'actions-play';

$output288 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output288 .= '
															</a>
														</div>
													';
return $output288;
};
$arguments286 = array();
$arguments286['if'] = NULL;

$output270 .= '';

$output270 .= '
												';
return $output270;
};
$arguments193 = array();
$arguments193['then'] = NULL;
$arguments193['else'] = NULL;
$arguments193['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array267 = array();
$array268 = array (
);$array267['0'] = $renderingContext->getVariableProvider()->getByPath('taskRecord.isRunning', $array268);

$expression269 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments193['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression269(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array267)
					),
					$renderingContext
				);
$arguments193['__thenClosure'] = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
														<div class="btn-group" role="group">
															<a data-toggle="tooltip" data-container="body" class="btn btn-default t3js-modal-trigger" href="';
$array196 = array (
);
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array196)]);

$output195 .= '&CMD=stop&tx_scheduler[uid]=';
$array197 = array (
);
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array197)]);

$output195 .= '" data-severity="warning" data-title="';
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
$arguments198['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output195 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['key'] = NULL;
$arguments200['id'] = NULL;
$arguments200['default'] = NULL;
$arguments200['arguments'] = NULL;
$arguments200['extensionName'] = NULL;
$arguments200['languageKey'] = NULL;
$arguments200['alternativeLanguageKeys'] = NULL;
$arguments200['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext)]);

$output195 .= '" data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['key'] = NULL;
$arguments202['id'] = NULL;
$arguments202['default'] = NULL;
$arguments202['arguments'] = NULL;
$arguments202['extensionName'] = NULL;
$arguments202['languageKey'] = NULL;
$arguments202['alternativeLanguageKeys'] = NULL;
$arguments202['key'] = 'msg.stop';

$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext)]);

$output195 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['key'] = NULL;
$arguments204['id'] = NULL;
$arguments204['default'] = NULL;
$arguments204['arguments'] = NULL;
$arguments204['extensionName'] = NULL;
$arguments204['languageKey'] = NULL;
$arguments204['alternativeLanguageKeys'] = NULL;
$arguments204['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext)]);

$output195 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['identifier'] = NULL;
$arguments206['size'] = 'small';
$arguments206['overlay'] = NULL;
$arguments206['state'] = 'default';
$arguments206['alternativeMarkupIdentifier'] = NULL;
$arguments206['identifier'] = 'actions-close';

$output195 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output195 .= '
															</a>
														</div>
													';
return $output195;
};
$arguments193['__elseClosures'][] = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
														<div class="btn-group" role="group">
															<a data-toggle="tooltip" data-container="body" class="btn btn-default" href="';
$array209 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array209)]);

$output208 .= '&CMD=edit&tx_scheduler[uid]=';
$array210 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array210)]);

$output208 .= '" title="';
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
$arguments211['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';

$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext)]);

$output208 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['identifier'] = NULL;
$arguments213['size'] = 'small';
$arguments213['overlay'] = NULL;
$arguments213['state'] = 'default';
$arguments213['alternativeMarkupIdentifier'] = NULL;
$arguments213['identifier'] = 'actions-open';

$output208 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output208 .= '
															</a>
															<a data-toggle="tooltip" data-container="body" class="btn btn-default" href="';
$array215 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array215)]);

$output208 .= '&CMD=toggleHidden&tx_scheduler[uid]=';
$array216 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array216)]);

$output208 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['languageKey'] = NULL;
$arguments217['alternativeLanguageKeys'] = NULL;
$output219 = '';

$output219 .= 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:';
$array220 = array (
);
$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.translationKey', $array220)]);
$arguments217['key'] = $output219;

$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output208 .= '">
																';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
																		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['identifier'] = NULL;
$arguments236['size'] = 'small';
$arguments236['overlay'] = NULL;
$arguments236['state'] = 'default';
$arguments236['alternativeMarkupIdentifier'] = NULL;
$arguments236['identifier'] = 'actions-edit-unhide';

$output235 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output235 .= '
																	';
return $output235;
};
$arguments233 = array();

$output232 .= '';

$output232 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
																		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['identifier'] = NULL;
$arguments241['size'] = 'small';
$arguments241['overlay'] = NULL;
$arguments241['state'] = 'default';
$arguments241['alternativeMarkupIdentifier'] = NULL;
$arguments241['identifier'] = 'actions-edit-hide';

$output240 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
																	';
return $output240;
};
$arguments238 = array();
$arguments238['if'] = NULL;

$output232 .= '';

$output232 .= '
																';
return $output232;
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array230 = array (
);$array229['0'] = $renderingContext->getVariableProvider()->getByPath('taskRecord.translationKey', $array230);
$array229['1'] = ' == \'enable\'';

$expression231 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'enable');};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);
$arguments221['__thenClosure'] = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
																		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['identifier'] = NULL;
$arguments224['size'] = 'small';
$arguments224['overlay'] = NULL;
$arguments224['state'] = 'default';
$arguments224['alternativeMarkupIdentifier'] = NULL;
$arguments224['identifier'] = 'actions-edit-unhide';

$output223 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '
																	';
return $output223;
};
$arguments221['__elseClosures'][] = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
																		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['identifier'] = NULL;
$arguments227['size'] = 'small';
$arguments227['overlay'] = NULL;
$arguments227['state'] = 'default';
$arguments227['alternativeMarkupIdentifier'] = NULL;
$arguments227['identifier'] = 'actions-edit-hide';

$output226 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
																	';
return $output226;
};

$output208 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output208 .= '
															</a>
															<a data-toggle="tooltip" data-container="body" class="btn btn-default t3js-modal-trigger" href="';
$array243 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array243)]);

$output208 .= '&CMD=delete&tx_scheduler[uid]=';
$array244 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array244)]);

$output208 .= '" data-severity="warning" data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['key'] = NULL;
$arguments245['id'] = NULL;
$arguments245['default'] = NULL;
$arguments245['arguments'] = NULL;
$arguments245['extensionName'] = NULL;
$arguments245['languageKey'] = NULL;
$arguments245['alternativeLanguageKeys'] = NULL;
$arguments245['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';

$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext)]);

$output208 .= '" data-button-close-text="';
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
$arguments247['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);

$output208 .= '" data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['key'] = NULL;
$arguments249['id'] = NULL;
$arguments249['default'] = NULL;
$arguments249['arguments'] = NULL;
$arguments249['extensionName'] = NULL;
$arguments249['languageKey'] = NULL;
$arguments249['alternativeLanguageKeys'] = NULL;
$arguments249['key'] = 'msg.delete';

$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext)]);

$output208 .= '" title="';
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
$arguments251['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';

$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext)]);

$output208 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['identifier'] = NULL;
$arguments253['size'] = 'small';
$arguments253['overlay'] = NULL;
$arguments253['state'] = 'default';
$arguments253['alternativeMarkupIdentifier'] = NULL;
$arguments253['identifier'] = 'actions-edit-delete';

$output208 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output208 .= '
															</a>
														</div>
														<div class="btn-group" role="group">
															<a class="btn btn-default" data-toggle="tooltip" data-container="body" href="';
$array255 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array255)]);

$output208 .= '&CMD=setNextExecutionTime&tx_scheduler[uid]=';
$array256 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array256)]);

$output208 .= '" title="';
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
$arguments257['key'] = 'action.run_task_cron';

$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext)]);

$output208 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['identifier'] = NULL;
$arguments259['size'] = 'small';
$arguments259['overlay'] = NULL;
$arguments259['state'] = 'default';
$arguments259['alternativeMarkupIdentifier'] = NULL;
$arguments259['identifier'] = 'actions-clock';

$output208 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output208 .= '
															</a>
															<a class="btn btn-default" data-toggle="tooltip" data-container="body" href="';
$array261 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array261)]);

$output208 .= '&tx_scheduler[execute][]=';
$array262 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('taskRecord.uid', $array262)]);

$output208 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['key'] = NULL;
$arguments263['id'] = NULL;
$arguments263['default'] = NULL;
$arguments263['arguments'] = NULL;
$arguments263['extensionName'] = NULL;
$arguments263['languageKey'] = NULL;
$arguments263['alternativeLanguageKeys'] = NULL;
$arguments263['key'] = 'action.run_task';

$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext)]);

$output208 .= '">
																';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['identifier'] = NULL;
$arguments265['size'] = 'small';
$arguments265['overlay'] = NULL;
$arguments265['state'] = 'default';
$arguments265['alternativeMarkupIdentifier'] = NULL;
$arguments265['identifier'] = 'actions-play';

$output208 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output208 .= '
															</a>
														</div>
													';
return $output208;
};

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output137 .= '
											</span>
										</td>
									</tr>
								';
return $output137;
};
$arguments132 = array();
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('taskRecord.validClass', $array135);

$expression136 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments132['__thenClosure'] = $renderChildrenClosure133;

$output131 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
							';
return $output131;
};
$arguments128 = array();
$arguments128['each'] = NULL;
$arguments128['as'] = NULL;
$arguments128['key'] = NULL;
$arguments128['reverse'] = false;
$arguments128['iteration'] = NULL;
$array130 = array (
);$arguments128['each'] = $renderingContext->getVariableProvider()->getByPath('taskGroup.tasks', $array130);
$arguments128['as'] = 'taskRecord';
$arguments128['iteration'] = 'taskIterator';

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output31 .= '
						</table>
					</div>
				</div>
			</div>
		</div>
	';
return $output31;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$array29 = array (
);return $renderingContext->getVariableProvider()->getByPath('taskGroup.tasks', $array29);
};
$arguments27 = array();
$arguments27['subject'] = NULL;
$renderChildrenClosure28 = ($arguments27['subject'] !== null) ? function() use ($arguments27) { return $arguments27['subject']; } : $renderChildrenClosure28;$array26['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
';
return $output23;
};
$arguments20 = array();
$arguments20['each'] = NULL;
$arguments20['as'] = NULL;
$arguments20['key'] = NULL;
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
$array22 = array (
);$arguments20['each'] = $renderingContext->getVariableProvider()->getByPath('tasks', $array22);
$arguments20['as'] = 'taskGroup';
$arguments20['iteration'] = 'groupIterator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$output352 = '';

$output352 .= '
	<div class="tx_scheduler_mod1_table">
		<div class="panel panel-space panel-default recordlist">
			<div class="panel-heading taskGroup" data-task-group-id="missing">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['key'] = NULL;
$arguments353['id'] = NULL;
$arguments353['default'] = NULL;
$arguments353['arguments'] = NULL;
$arguments353['extensionName'] = NULL;
$arguments353['languageKey'] = NULL;
$arguments353['alternativeLanguageKeys'] = NULL;
$arguments353['key'] = 'label.noClass';

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext)]);

$output352 .= '
				(<span class="t3js-table-total-items" title="';
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
$arguments355['key'] = 'label.noClass.taskCount';

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext)]);

$output352 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$array359 = array (
);return $renderingContext->getVariableProvider()->getByPath('missingClasses', $array359);
};
$arguments357 = array();
$arguments357['subject'] = NULL;
$renderChildrenClosure358 = ($arguments357['subject'] !== null) ? function() use ($arguments357) { return $arguments357['subject']; } : $renderChildrenClosure358;
$output352 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output352 .= '</span>)
				<a href="#" class="pull-right t3js-toggle-recordlist"
					data-table="task-group-missing" data-toggle="collapse" data-target="#recordlist-task-group-missing">
					<span class="caret"></span>
				</a>
			</div>
			<div class="collapse in" data-state="expanded" id="recordlist-task-group-missing">
				<div class="table-fit">
					<table class="table table-striped table-hover">
						<tr class="taskGroup" data-task-group-id="0">
							<td class="nowrap-disabled"><span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments362 = array();
$arguments362['key'] = NULL;
$arguments362['id'] = NULL;
$arguments362['default'] = NULL;
$arguments362['arguments'] = NULL;
$arguments362['extensionName'] = NULL;
$arguments362['languageKey'] = NULL;
$arguments362['alternativeLanguageKeys'] = NULL;
$arguments362['key'] = 'msg.invalidTaskClass';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);
};
$arguments360 = array();
$arguments360['value'] = NULL;

$output352 .= isset($arguments360['value']) ? $arguments360['value'] : $renderChildrenClosure361();

$output352 .= '</span></td>
						</tr>
					</table>
					<table class="table table-striped table-hover taskGroup-table">
						<thead>
						<tr>
							<th><span class="t-span">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['key'] = NULL;
$arguments364['id'] = NULL;
$arguments364['default'] = NULL;
$arguments364['arguments'] = NULL;
$arguments364['extensionName'] = NULL;
$arguments364['languageKey'] = NULL;
$arguments364['alternativeLanguageKeys'] = NULL;
$arguments364['key'] = 'label.id';

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext)]);

$output352 .= '</span></th>
							<th><span class="t-span">';
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
$arguments366['key'] = 'task';

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext)]);

$output352 .= '</span></th>
							<th><span class="t-span"></span></th>
						</tr>
						</thead>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '
							<tr>
								<td class="right">';
$array372 = array (
);
$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('missingClass.uid', $array372)]);

$output371 .= '</td>
								<td><span class="label label-danger">';
$array373 = array (
);
$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('missingClass.class', $array373)]);

$output371 .= '</span></td>
								<td class="nowrap">
									<div class="btn-group" role="group">
										<a data-toggle="tooltip" data-container="body" class="btn btn-default t3js-modal-trigger" href="';
$array374 = array (
);
$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUri', $array374)]);

$output371 .= '&CMD=delete&tx_scheduler[uid]=';
$array375 = array (
);
$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('missingClass.uid', $array375)]);

$output371 .= '" data-severity="warning" data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['key'] = NULL;
$arguments376['id'] = NULL;
$arguments376['default'] = NULL;
$arguments376['arguments'] = NULL;
$arguments376['extensionName'] = NULL;
$arguments376['languageKey'] = NULL;
$arguments376['alternativeLanguageKeys'] = NULL;
$arguments376['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext)]);

$output371 .= '" data-button-close-text="';
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
$arguments378['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext)]);

$output371 .= '" data-content="';
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
$arguments380['key'] = 'msg.delete';

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext)]);

$output371 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['key'] = NULL;
$arguments382['id'] = NULL;
$arguments382['default'] = NULL;
$arguments382['arguments'] = NULL;
$arguments382['extensionName'] = NULL;
$arguments382['languageKey'] = NULL;
$arguments382['alternativeLanguageKeys'] = NULL;
$arguments382['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext)]);

$output371 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments384 = array();
$arguments384['identifier'] = NULL;
$arguments384['size'] = 'small';
$arguments384['overlay'] = NULL;
$arguments384['state'] = 'default';
$arguments384['alternativeMarkupIdentifier'] = NULL;
$arguments384['identifier'] = 'actions-edit-delete';

$output371 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output371 .= '
										</a>
									</div>
								</td>
							</tr>
						';
return $output371;
};
$arguments368 = array();
$arguments368['each'] = NULL;
$arguments368['as'] = NULL;
$arguments368['key'] = NULL;
$arguments368['reverse'] = false;
$arguments368['iteration'] = NULL;
$array370 = array (
);$arguments368['each'] = $renderingContext->getVariableProvider()->getByPath('missingClasses', $array370);
$arguments368['as'] = 'missingClass';

$output352 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output352 .= '
					</table>
				</div>
			</div>
		</div>
	</div>
';
return $output352;
};
$arguments347 = array();
$arguments347['then'] = NULL;
$arguments347['else'] = NULL;
$arguments347['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array349 = array();
$array350 = array (
);$array349['0'] = $renderingContext->getVariableProvider()->getByPath('missingClasses', $array350);

$expression351 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments347['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression351(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array349)
					),
					$renderingContext
				);
$arguments347['__thenClosure'] = $renderChildrenClosure348;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#