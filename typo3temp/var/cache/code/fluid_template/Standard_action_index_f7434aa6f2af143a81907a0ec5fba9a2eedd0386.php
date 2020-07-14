<?php

class Standard_action_index_f7434aa6f2af143a81907a0ec5fba9a2eedd0386 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * section additionalField
 */
public function section_a45c7a07855fa1e36950663a337cc667da38efbe(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <div class="form-section extraFields extra_fields_';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.htmlClassName', $array1)]);

$output0 .= '" ';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.additionalFieldsStyle', $array2)]);

$output0 .= ' id="';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.fieldID', $array3)]);

$output0 .= '_row">
        <div class="form-group">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['table'] = NULL;
$arguments4['field'] = '';
$arguments4['label'] = '';
$array6 = array (
);$arguments4['table'] = $renderingContext->getVariableProvider()->getByPath('field.cshKey', $array6);
$array7 = array (
);$arguments4['field'] = $renderingContext->getVariableProvider()->getByPath('field.cshLabel', $array7);
$array8 = array (
);$arguments4['label'] = $renderingContext->getVariableProvider()->getByPath('field.langLabel', $array8);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
            <div class="form-control-wrap">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$array11 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.code', $array11);
};
$arguments9 = array();
$arguments9['value'] = NULL;

$output0 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output0 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$array14 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.browseButton', $array14);
};
$arguments12 = array();
$arguments12['value'] = NULL;

$output0 .= isset($arguments12['value']) ? $arguments12['value'] : $renderChildrenClosure13();

$output0 .= '
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
$output15 = '';

$output15 .= '

<input type="hidden" name="tx_scheduler[uid]" value="';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('uid', $array16)]);

$output15 .= '" />
<input type="hidden" name="previousCMD" value="';
$array17 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cmd', $array17)]);

$output15 .= '" />

<div class="form-section" id="task_disable_row">
    <div class="form-group">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['table'] = NULL;
$arguments18['field'] = '';
$arguments18['label'] = '';
$array20 = array (
);$arguments18['table'] = $renderingContext->getVariableProvider()->getByPath('csh', $array20);
$arguments18['field'] = 'task_disable';
$array21 = array (
);$arguments18['label'] = $renderingContext->getVariableProvider()->getByPath('task_disable_label', $array21);

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output15 .= '
        <div class="form-control-wrap">
            <input type="hidden" name="tx_scheduler[disable]" value="0">
            <input class="checkbox" type="checkbox" name="tx_scheduler[disable]" value="1" id="task_disable" ';
$array22 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('task_disable', $array22)]);

$output15 .= '>
        </div>
    </div>
</div>
<div class="form-section" id="task_class_row">
    <div class="form-group">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['table'] = NULL;
$arguments23['field'] = '';
$arguments23['label'] = '';
$array25 = array (
);$arguments23['table'] = $renderingContext->getVariableProvider()->getByPath('csh', $array25);
$arguments23['field'] = 'task_class';
$output26 = '';
$array27 = array (
);
$output26 .= $renderingContext->getVariableProvider()->getByPath('lang', $array27);

$output26 .= 'label.class';
$arguments23['label'] = $output26;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output15 .= '
        <div class="form-control-wrap">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                    <div>';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('task_class_title', $array55)]);

$output54 .= ' (';
$array56 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('task_class_extension', $array56)]);

$output54 .= ')</div>
                    <input type="hidden" name="tx_scheduler[class]" id="task_class" value="';
$array57 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('task_class', $array57)]);

$output54 .= '">
                ';
return $output54;
};
$arguments52 = array();

$output51 .= '';

$output51 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                    <select name="tx_scheduler[class]" id="task_class" class="form-control">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
                            <optgroup label="';
$array65 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension', $array65)]);

$output64 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
                                    <option value="';
$array70 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array70)]);

$output69 .= '" title="';
$array71 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('classInfo.description', $array71)]);

$output69 .= '" ';
$array72 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('classInfo.selected', $array72)]);

$output69 .= '>';
$array73 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('classInfo.title', $array73)]);

$output69 .= '</option>
                                ';
return $output69;
};
$arguments66 = array();
$arguments66['each'] = NULL;
$arguments66['as'] = NULL;
$arguments66['key'] = NULL;
$arguments66['reverse'] = false;
$arguments66['iteration'] = NULL;
$array68 = array (
);$arguments66['each'] = $renderingContext->getVariableProvider()->getByPath('classGroup', $array68);
$arguments66['as'] = 'classInfo';
$arguments66['key'] = 'class';

$output64 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output64 .= '
                            </optgroup>
                        ';
return $output64;
};
$arguments61 = array();
$arguments61['each'] = NULL;
$arguments61['as'] = NULL;
$arguments61['key'] = NULL;
$arguments61['reverse'] = false;
$arguments61['iteration'] = NULL;
$array63 = array (
);$arguments61['each'] = $renderingContext->getVariableProvider()->getByPath('groupedClasses', $array63);
$arguments61['as'] = 'classGroup';
$arguments61['key'] = 'extension';

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                    </select>
                ';
return $output60;
};
$arguments58 = array();
$arguments58['if'] = NULL;

$output51 .= '';

$output51 .= '
            ';
return $output51;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('task_class', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                    <div>';
$array31 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('task_class_title', $array31)]);

$output30 .= ' (';
$array32 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('task_class_extension', $array32)]);

$output30 .= ')</div>
                    <input type="hidden" name="tx_scheduler[class]" id="task_class" value="';
$array33 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('task_class', $array33)]);

$output30 .= '">
                ';
return $output30;
};
$arguments28['__elseClosures'][] = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                    <select name="tx_scheduler[class]" id="task_class" class="form-control">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                            <optgroup label="';
$array39 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension', $array39)]);

$output38 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                                    <option value="';
$array44 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array44)]);

$output43 .= '" title="';
$array45 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('classInfo.description', $array45)]);

$output43 .= '" ';
$array46 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('classInfo.selected', $array46)]);

$output43 .= '>';
$array47 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('classInfo.title', $array47)]);

$output43 .= '</option>
                                ';
return $output43;
};
$arguments40 = array();
$arguments40['each'] = NULL;
$arguments40['as'] = NULL;
$arguments40['key'] = NULL;
$arguments40['reverse'] = false;
$arguments40['iteration'] = NULL;
$array42 = array (
);$arguments40['each'] = $renderingContext->getVariableProvider()->getByPath('classGroup', $array42);
$arguments40['as'] = 'classInfo';
$arguments40['key'] = 'class';

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output38 .= '
                            </optgroup>
                        ';
return $output38;
};
$arguments35 = array();
$arguments35['each'] = NULL;
$arguments35['as'] = NULL;
$arguments35['key'] = NULL;
$arguments35['reverse'] = false;
$arguments35['iteration'] = NULL;
$array37 = array (
);$arguments35['each'] = $renderingContext->getVariableProvider()->getByPath('groupedClasses', $array37);
$arguments35['as'] = 'classGroup';
$arguments35['key'] = 'extension';

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                    </select>
                ';
return $output34;
};

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output15 .= '
        </div>
    </div>
</div>
<div class="form-section" id="task_type_row">
    <div class="form-group">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['table'] = NULL;
$arguments74['field'] = '';
$arguments74['label'] = '';
$array76 = array (
);$arguments74['table'] = $renderingContext->getVariableProvider()->getByPath('csh', $array76);
$arguments74['field'] = 'task_type';
$output77 = '';
$array78 = array (
);
$output77 .= $renderingContext->getVariableProvider()->getByPath('lang', $array78);

$output77 .= 'label.type';
$arguments74['label'] = $output77;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output15 .= '
        <div class="form-control-wrap">
            <select name="tx_scheduler[type]" id="task_type" class="form-control">
                <option value="1" ';
$array79 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('task_type_selected_1', $array79)]);

$output15 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['key'] = NULL;
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['languageKey'] = NULL;
$arguments80['alternativeLanguageKeys'] = NULL;
$output82 = '';
$array83 = array (
);
$output82 .= $renderingContext->getVariableProvider()->getByPath('lang', $array83);

$output82 .= 'label.type.single';
$arguments80['key'] = $output82;

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output15 .= '</option>
                <option value="2" ';
$array84 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('task_type_selected_2', $array84)]);

$output15 .= '>';
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
$output87 = '';
$array88 = array (
);
$output87 .= $renderingContext->getVariableProvider()->getByPath('lang', $array88);

$output87 .= 'label.type.recurring';
$arguments85['key'] = $output87;

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output15 .= '</option>
            </select>
        </div>
    </div>
</div>
<div class="form-section" id="task_group_row">
    <div class="form-group">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['table'] = NULL;
$arguments89['field'] = '';
$arguments89['label'] = '';
$array91 = array (
);$arguments89['table'] = $renderingContext->getVariableProvider()->getByPath('csh', $array91);
$arguments89['field'] = 'task_group';
$output92 = '';
$array93 = array (
);
$output92 .= $renderingContext->getVariableProvider()->getByPath('lang', $array93);

$output92 .= 'label.group';
$arguments89['label'] = $output92;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output15 .= '
        <div class="form-control-wrap">
            <div class="input-group">
                <select name="tx_scheduler[task_group]" id="task_class" class="form-control">
                    <option value="0" title=""></option>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
                        <option value="';
$array98 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('registeredTaskGroup.uid', $array98)]);

$output97 .= '" title="';
$array99 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('registeredTaskGroup.groupName', $array99)]);

$output97 .= '" ';
$array100 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('registeredTaskGroup.selected', $array100)]);

$output97 .= '>
                        ';
$array101 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('registeredTaskGroup.groupName', $array101)]);

$output97 .= '
                        </option>
                    ';
return $output97;
};
$arguments94 = array();
$arguments94['each'] = NULL;
$arguments94['as'] = NULL;
$arguments94['key'] = NULL;
$arguments94['reverse'] = false;
$arguments94['iteration'] = NULL;
$array96 = array (
);$arguments94['each'] = $renderingContext->getVariableProvider()->getByPath('registeredTaskGroups', $array96);
$arguments94['as'] = 'registeredTaskGroup';

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output15 .= '
                </select>
                <div class="input-group-btn" role="group">
                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['identifier'] = NULL;
$arguments106['size'] = 'small';
$arguments106['overlay'] = NULL;
$arguments106['state'] = 'default';
$arguments106['alternativeMarkupIdentifier'] = NULL;
$arguments106['identifier'] = 'actions-add';

$output105 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
                    ';
return $output105;
};
$arguments102 = array();
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['uid'] = NULL;
$arguments102['pid'] = NULL;
$arguments102['table'] = NULL;
$arguments102['returnUrl'] = '';
$arguments102['class'] = 'btn btn-default';
$arguments102['table'] = 'tx_scheduler_task_group';
$array104 = array (
);$arguments102['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array104);

$output15 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output15 .= '
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-section">
    <div class="row">
        <div class="form-group col-sm-6" id="task_start_col">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['table'] = NULL;
$arguments108['field'] = '';
$arguments108['label'] = '';
$array110 = array (
);$arguments108['table'] = $renderingContext->getVariableProvider()->getByPath('csh', $array110);
$arguments108['field'] = 'task_start';
$output111 = '';
$array112 = array (
);
$output111 .= $renderingContext->getVariableProvider()->getByPath('lang', $array112);

$output111 .= 'label.start';
$arguments108['label'] = $output111;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output15 .= '
            <div class="form-control-wrap">
                <div class="input-group" id="tceforms-datetimefield-task_start_row-wrapper">
                    <input name="tx_scheduler[start]_hr" value="';
$array113 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('start_value_hr', $array113)]);

$output15 .= '" class="form-control t3js-datetimepicker t3js-clearable" data-date-type="datetime" data-date-offset="0" type="text" id="tceforms-datetimefield-task_start_row">
                    <input name="tx_scheduler[start]" value="';
$array114 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('start_value', $array114)]);

$output15 .= '" type="hidden">
                    <span class="input-group-btn"><label class="btn btn-default" for="tceforms-datetimefield-task_start_row">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['identifier'] = NULL;
$arguments115['size'] = 'small';
$arguments115['overlay'] = NULL;
$arguments115['state'] = 'default';
$arguments115['alternativeMarkupIdentifier'] = NULL;
$arguments115['identifier'] = 'actions-edit-pick-date';

$output15 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output15 .= '</label></span>
                </div>
            </div>
        </div>
        <div class="form-group col-sm-6" id="task_end_col">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['table'] = NULL;
$arguments117['field'] = '';
$arguments117['label'] = '';
$array119 = array (
);$arguments117['table'] = $renderingContext->getVariableProvider()->getByPath('csh', $array119);
$arguments117['field'] = 'task_end';
$output120 = '';
$array121 = array (
);
$output120 .= $renderingContext->getVariableProvider()->getByPath('lang', $array121);

$output120 .= 'label.end';
$arguments117['label'] = $output120;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output15 .= '
            <div class="form-control-wrap">
                <div class="input-group" id="tceforms-datetimefield-task_end_row-wrapper">
                    <input name="tx_scheduler[end]_hr" value="';
$array122 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('end_value_hr', $array122)]);

$output15 .= '" class="form-control  t3js-datetimepicker t3js-clearable" data-date-type="datetime" data-date-offset="0" type="text" id="tceforms-datetimefield-task_end_row">
                    <input name="tx_scheduler[end]" value="';
$array123 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('end_value', $array123)]);

$output15 .= '" type="hidden">
                    <span class="input-group-btn"><label class="btn btn-default" for="tceforms-datetimefield-task_end_row">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['identifier'] = NULL;
$arguments124['size'] = 'small';
$arguments124['overlay'] = NULL;
$arguments124['state'] = 'default';
$arguments124['alternativeMarkupIdentifier'] = NULL;
$arguments124['identifier'] = 'actions-edit-pick-date';

$output15 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output15 .= '</label></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-section" id="task_frequency_row">
    <div class="form-group">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['table'] = NULL;
$arguments126['field'] = '';
$arguments126['label'] = '';
$array128 = array (
);$arguments126['table'] = $renderingContext->getVariableProvider()->getByPath('csh', $array128);
$arguments126['field'] = 'task_frequency';
$output129 = '';
$array130 = array (
);
$output129 .= $renderingContext->getVariableProvider()->getByPath('lang', $array130);

$output129 .= 'label.frequency.long';
$arguments126['label'] = $output129;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output15 .= '
        <div class="form-control-wrap">
          <div class="form-wizards-wrap">
            <div class="form-wizards-element">
              <input type="text" name="tx_scheduler[frequency]" class="form-control" id="task_frequency" value="';
$array131 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frequency', $array131)]);

$output15 .= '">
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
              <div class="form-wizards-items-aside">
                <div class="btn-group">
                  <select
                    class="form-control tceforms-select tceforms-wizardselect"
                    onchange="document.getElementById(\'task_frequency\').value=this.options[this.selectedIndex].value;this.blur();this.selectedIndex=0;">
                    <option></option>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
                      <option value="';
$array142 = array (
);
$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('command', $array142)]);

$output141 .= '">';
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
$array145 = array (
);$arguments143['key'] = $renderingContext->getVariableProvider()->getByPath('label', $array145);
$array146 = array (
);$arguments143['default'] = $renderingContext->getVariableProvider()->getByPath('label', $array146);

$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output141 .= ' (';
$array147 = array (
);
$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('command', $array147)]);

$output141 .= ')</option>
                    ';
return $output141;
};
$arguments138 = array();
$arguments138['each'] = NULL;
$arguments138['as'] = NULL;
$arguments138['key'] = NULL;
$arguments138['reverse'] = false;
$arguments138['iteration'] = NULL;
$array140 = array (
);$arguments138['each'] = $renderingContext->getVariableProvider()->getByPath('frequencyOptions', $array140);
$arguments138['as'] = 'label';
$arguments138['key'] = 'command';

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
                  </select>
                </div>
              </div>
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
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('frequencyOptions', $array135);

$expression136 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments132['__thenClosure'] = $renderChildrenClosure133;

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output15 .= '
          </div>
        </div>
    </div>
</div>
<div class="form-section" id="task_multiple_row">
    <div class="form-group">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['table'] = NULL;
$arguments148['field'] = '';
$arguments148['label'] = '';
$array150 = array (
);$arguments148['table'] = $renderingContext->getVariableProvider()->getByPath('csh', $array150);
$arguments148['field'] = 'task_multiple';
$output151 = '';
$array152 = array (
);
$output151 .= $renderingContext->getVariableProvider()->getByPath('lang', $array152);

$output151 .= 'label.parallel.long';
$arguments148['label'] = $output151;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output15 .= '
        <div class="form-control-wrap">
            <input type="hidden" name="tx_scheduler[multiple]" value="0">
            <input class="checkbox" type="checkbox" name="tx_scheduler[multiple]" value="1" id="task_multiple" ';
$array153 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('multiple', $array153)]);

$output15 .= '>
        </div>
    </div>
</div>
<div class="form-section" id="task_description_row">
    <div class="form-group">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['table'] = NULL;
$arguments154['field'] = '';
$arguments154['label'] = '';
$array156 = array (
);$arguments154['table'] = $renderingContext->getVariableProvider()->getByPath('csh', $array156);
$arguments154['field'] = 'task_description';
$output157 = '';
$array158 = array (
);
$output157 .= $renderingContext->getVariableProvider()->getByPath('lang', $array158);

$output157 .= 'label.description';
$arguments154['label'] = $output157;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output15 .= '
        <div class="form-control-wrap">
            <textarea class="form-control" name="tx_scheduler[description]">';
$array159 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('description', $array159)]);

$output15 .= '</textarea>
        </div>
    </div>
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
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
$arguments164['section'] = 'additionalField';
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array167);
$arguments164['arguments'] = $array166;

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
';
return $output163;
};
$arguments160 = array();
$arguments160['each'] = NULL;
$arguments160['as'] = NULL;
$arguments160['key'] = NULL;
$arguments160['reverse'] = false;
$arguments160['iteration'] = NULL;
$array162 = array (
);$arguments160['each'] = $renderingContext->getVariableProvider()->getByPath('additionalFields', $array162);
$arguments160['as'] = 'field';

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output15 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$array170 = array (
);return $renderingContext->getVariableProvider()->getByPath('table', $array170);
};
$arguments168 = array();
$arguments168['value'] = NULL;

$output15 .= isset($arguments168['value']) ? $arguments168['value'] : $renderChildrenClosure169();

$output15 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['section'] = NULL;
$arguments171['partial'] = NULL;
$arguments171['delegate'] = NULL;
$arguments171['renderable'] = NULL;
$arguments171['arguments'] = array (
);
$arguments171['optional'] = false;
$arguments171['default'] = NULL;
$arguments171['contentAs'] = NULL;
$arguments171['debug'] = true;
$arguments171['partial'] = 'ServerTime';
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['now'] = $renderingContext->getVariableProvider()->getByPath('now', $array174);
$arguments171['arguments'] = $array173;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output15 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
    <div class="form-section extraFields extra_fields_';
$array178 = array (
);
$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.htmlClassName', $array178)]);

$output177 .= '" ';
$array179 = array (
);
$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.additionalFieldsStyle', $array179)]);

$output177 .= ' id="';
$array180 = array (
);
$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.fieldID', $array180)]);

$output177 .= '_row">
        <div class="form-group">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['table'] = NULL;
$arguments181['field'] = '';
$arguments181['label'] = '';
$array183 = array (
);$arguments181['table'] = $renderingContext->getVariableProvider()->getByPath('field.cshKey', $array183);
$array184 = array (
);$arguments181['field'] = $renderingContext->getVariableProvider()->getByPath('field.cshLabel', $array184);
$array185 = array (
);$arguments181['label'] = $renderingContext->getVariableProvider()->getByPath('field.langLabel', $array185);

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output177 .= '
            <div class="form-control-wrap">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$array188 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.code', $array188);
};
$arguments186 = array();
$arguments186['value'] = NULL;

$output177 .= isset($arguments186['value']) ? $arguments186['value'] : $renderChildrenClosure187();

$output177 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$array191 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.browseButton', $array191);
};
$arguments189 = array();
$arguments189['value'] = NULL;

$output177 .= isset($arguments189['value']) ? $arguments189['value'] : $renderChildrenClosure190();

$output177 .= '
        </div>
    </div>
';
return $output177;
};
$arguments175 = array();
$arguments175['name'] = NULL;
$arguments175['name'] = 'additionalField';

$output15 .= NULL;

$output15 .= '
';

return $output15;
}


}
#