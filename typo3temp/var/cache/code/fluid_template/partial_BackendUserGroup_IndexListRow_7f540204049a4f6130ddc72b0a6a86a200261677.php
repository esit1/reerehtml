<?php

class partial_BackendUserGroup_IndexListRow_7f540204049a4f6130ddc72b0a6a86a200261677 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'bu' => 
  array (
    0 => 'TYPO3\\CMS\\Beuser\\ViewHelpers',
  ),
));
}

/**
 * section list_row
 */
public function section_e490b8b1053373d1e4badbae4af5cf284c69881a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<tr>
	<td class="col-icon">
		<a href="#" class="t3js-contextmenutrigger" data-table="be_groups" data-uid="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array1)]);

$output0 .= '" title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.description', $array5)]);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$output7 = '';
$array8 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.description', $array8)]);

$output7 .= ' ';
$arguments2['then'] = $output7;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '(id=';
$array9 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array9)]);

$output0 .= ')">
			';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SpriteIconForRecordViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['table'] = NULL;
$arguments10['object'] = NULL;
$arguments10['table'] = 'be_groups';
$array12 = array (
);$arguments10['object'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroup', $array12);

$output0 .= TYPO3\CMS\Beuser\ViewHelpers\SpriteIconForRecordViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
		</a>
	</td>
	<td class="col-title">
		';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
			<b>';
$array17 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.title', $array17)]);

$output16 .= '</b><br />
			';
$array18 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array18)]);

$output16 .= '
		';
return $output16;
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['uid'] = NULL;
$arguments13['table'] = NULL;
$arguments13['returnUrl'] = '';
$arguments13['table'] = 'be_groups';
$array15 = array (
);$arguments13['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array15);
$arguments13['title'] = 'edit';

$output0 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
	</td>
	<td>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
				';
$array27 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subgroup.title', $array27)]);

$output26 .= '
			';
return $output26;
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
$arguments23['uid'] = NULL;
$arguments23['table'] = NULL;
$arguments23['returnUrl'] = '';
$arguments23['table'] = 'be_groups';
$array25 = array (
);$arguments23['uid'] = $renderingContext->getVariableProvider()->getByPath('subgroup.uid', $array25);
$arguments23['title'] = 'edit';

$output22 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments33 = array();
$arguments33['if'] = NULL;
return '';
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('subGroupIterator.isLast', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output22 .= '
		';
return $output22;
};
$arguments19 = array();
$arguments19['each'] = NULL;
$arguments19['as'] = NULL;
$arguments19['key'] = NULL;
$arguments19['reverse'] = false;
$arguments19['iteration'] = NULL;
$array21 = array (
);$arguments19['each'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroup.subgroups', $array21);
$arguments19['as'] = 'subgroup';
$arguments19['iteration'] = 'subGroupIterator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
	</td>
	<td class="col-control">
		<div class="btn-group" role="group">
			';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['identifier'] = NULL;
$arguments39['size'] = 'small';
$arguments39['overlay'] = NULL;
$arguments39['state'] = 'default';
$arguments39['alternativeMarkupIdentifier'] = NULL;
$arguments39['identifier'] = 'actions-open';

$output38 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
			';
return $output38;
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['uid'] = NULL;
$arguments35['table'] = NULL;
$arguments35['returnUrl'] = '';
$arguments35['class'] = 'btn btn-default';
$arguments35['table'] = 'be_groups';
$array37 = array (
);$arguments35['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array37);
$arguments35['title'] = 'edit';

$output0 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output0 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['parameters'] = NULL;
$arguments70['redirectUrl'] = '';
$output72 = '';

$output72 .= 'data[be_groups][';
$array73 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array73)]);

$output72 .= '][hidden]=0';
$arguments70['parameters'] = $output72;
$array74 = array (
);$arguments70['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array74);

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output69 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['key'] = NULL;
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['languageKey'] = NULL;
$arguments75['alternativeLanguageKeys'] = NULL;
$arguments75['key'] = 'visibility.unhide';

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output69 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['identifier'] = NULL;
$arguments77['size'] = 'small';
$arguments77['overlay'] = NULL;
$arguments77['state'] = 'default';
$arguments77['alternativeMarkupIdentifier'] = NULL;
$arguments77['identifier'] = 'actions-edit-unhide';

$output69 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output69 .= '</a>
				';
return $output69;
};
$arguments67 = array();

$output66 .= '';

$output66 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['parameters'] = NULL;
$arguments82['redirectUrl'] = '';
$output84 = '';

$output84 .= 'data[be_groups][';
$array85 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array85)]);

$output84 .= '][hidden]=1';
$arguments82['parameters'] = $output84;
$array86 = array (
);$arguments82['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array86);

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output81 .= '" title="';
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
$arguments87['key'] = 'visibility.hide';

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output81 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['identifier'] = NULL;
$arguments89['size'] = 'small';
$arguments89['overlay'] = NULL;
$arguments89['state'] = 'default';
$arguments89['alternativeMarkupIdentifier'] = NULL;
$arguments89['identifier'] = 'actions-edit-hide';

$output81 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output81 .= '</a>
				';
return $output81;
};
$arguments79 = array();
$arguments79['if'] = NULL;

$output66 .= '';

$output66 .= '
			';
return $output66;
};
$arguments41 = array();
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$arguments41['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroup.hidden', $array64);

$expression65 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments41['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments41['__thenClosure'] = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['parameters'] = NULL;
$arguments44['redirectUrl'] = '';
$output46 = '';

$output46 .= 'data[be_groups][';
$array47 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array47)]);

$output46 .= '][hidden]=0';
$arguments44['parameters'] = $output46;
$array48 = array (
);$arguments44['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array48);

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['languageKey'] = NULL;
$arguments49['alternativeLanguageKeys'] = NULL;
$arguments49['key'] = 'visibility.unhide';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output43 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['identifier'] = NULL;
$arguments51['size'] = 'small';
$arguments51['overlay'] = NULL;
$arguments51['state'] = 'default';
$arguments51['alternativeMarkupIdentifier'] = NULL;
$arguments51['identifier'] = 'actions-edit-unhide';

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output43 .= '</a>
				';
return $output43;
};
$arguments41['__elseClosures'][] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['parameters'] = NULL;
$arguments54['redirectUrl'] = '';
$output56 = '';

$output56 .= 'data[be_groups][';
$array57 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array57)]);

$output56 .= '][hidden]=1';
$arguments54['parameters'] = $output56;
$array58 = array (
);$arguments54['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array58);

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output53 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['key'] = NULL;
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['languageKey'] = NULL;
$arguments59['alternativeLanguageKeys'] = NULL;
$arguments59['key'] = 'visibility.hide';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output53 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['identifier'] = NULL;
$arguments61['size'] = 'small';
$arguments61['overlay'] = NULL;
$arguments61['state'] = 'default';
$arguments61['alternativeMarkupIdentifier'] = NULL;
$arguments61['identifier'] = 'actions-edit-hide';

$output53 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output53 .= '</a>
				';
return $output53;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output0 .= '
		</div>
		<div class="btn-group" role="group">
			<a class="btn btn-default" href="#" onclick="top.TYPO3.InfoWindow.showItem(\'be_groups\', \'';
$array91 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array91)]);

$output0 .= '\'); return false;">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['identifier'] = NULL;
$arguments92['size'] = 'small';
$arguments92['overlay'] = NULL;
$arguments92['state'] = 'default';
$arguments92['alternativeMarkupIdentifier'] = NULL;
$arguments92['identifier'] = 'actions-document-info';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output0 .= '</a>
		</div>
	</td>
</tr>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output94 = '';

$output94 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
	  xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers"
	  xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers"
	  xmlns:bu="http://typo3.org/ns/TYPO3/CMS/Beuser/ViewHelpers">

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
<tr>
	<td class="col-icon">
		<a href="#" class="t3js-contextmenutrigger" data-table="be_groups" data-uid="';
$array98 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array98)]);

$output97 .= '" title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.description', $array102)]);

$expression103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);
$output104 = '';
$array105 = array (
);
$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.description', $array105)]);

$output104 .= ' ';
$arguments99['then'] = $output104;

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output97 .= '(id=';
$array106 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array106)]);

$output97 .= ')">
			';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SpriteIconForRecordViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['table'] = NULL;
$arguments107['object'] = NULL;
$arguments107['table'] = 'be_groups';
$array109 = array (
);$arguments107['object'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroup', $array109);

$output97 .= TYPO3\CMS\Beuser\ViewHelpers\SpriteIconForRecordViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output97 .= '
		</a>
	</td>
	<td class="col-title">
		';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
			<b>';
$array114 = array (
);
$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.title', $array114)]);

$output113 .= '</b><br />
			';
$array115 = array (
);
$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array115)]);

$output113 .= '
		';
return $output113;
};
$arguments110 = array();
$arguments110['additionalAttributes'] = NULL;
$arguments110['data'] = NULL;
$arguments110['class'] = NULL;
$arguments110['dir'] = NULL;
$arguments110['id'] = NULL;
$arguments110['lang'] = NULL;
$arguments110['style'] = NULL;
$arguments110['title'] = NULL;
$arguments110['accesskey'] = NULL;
$arguments110['tabindex'] = NULL;
$arguments110['onclick'] = NULL;
$arguments110['uid'] = NULL;
$arguments110['table'] = NULL;
$arguments110['returnUrl'] = '';
$arguments110['table'] = 'be_groups';
$array112 = array (
);$arguments110['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array112);
$arguments110['title'] = 'edit';

$output97 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output97 .= '
	</td>
	<td>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
				';
$array124 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subgroup.title', $array124)]);

$output123 .= '
			';
return $output123;
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
$arguments120['uid'] = NULL;
$arguments120['table'] = NULL;
$arguments120['returnUrl'] = '';
$arguments120['table'] = 'be_groups';
$array122 = array (
);$arguments120['uid'] = $renderingContext->getVariableProvider()->getByPath('subgroup.uid', $array122);
$arguments120['title'] = 'edit';

$output119 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments130 = array();
$arguments130['if'] = NULL;
return '';
};
$arguments125 = array();
$arguments125['then'] = NULL;
$arguments125['else'] = NULL;
$arguments125['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['0'] = $renderingContext->getVariableProvider()->getByPath('subGroupIterator.isLast', $array128);

$expression129 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments125['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array127)
					),
					$renderingContext
				);
$arguments125['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output119 .= '
		';
return $output119;
};
$arguments116 = array();
$arguments116['each'] = NULL;
$arguments116['as'] = NULL;
$arguments116['key'] = NULL;
$arguments116['reverse'] = false;
$arguments116['iteration'] = NULL;
$array118 = array (
);$arguments116['each'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroup.subgroups', $array118);
$arguments116['as'] = 'subgroup';
$arguments116['iteration'] = 'subGroupIterator';

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output97 .= '
	</td>
	<td class="col-control">
		<div class="btn-group" role="group">
			';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['identifier'] = NULL;
$arguments136['size'] = 'small';
$arguments136['overlay'] = NULL;
$arguments136['state'] = 'default';
$arguments136['alternativeMarkupIdentifier'] = NULL;
$arguments136['identifier'] = 'actions-open';

$output135 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
			';
return $output135;
};
$arguments132 = array();
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['class'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$arguments132['uid'] = NULL;
$arguments132['table'] = NULL;
$arguments132['returnUrl'] = '';
$arguments132['class'] = 'btn btn-default';
$arguments132['table'] = 'be_groups';
$array134 = array (
);$arguments132['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array134);
$arguments132['title'] = 'edit';

$output97 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output97 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['parameters'] = NULL;
$arguments167['redirectUrl'] = '';
$output169 = '';

$output169 .= 'data[be_groups][';
$array170 = array (
);
$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array170)]);

$output169 .= '][hidden]=0';
$arguments167['parameters'] = $output169;
$array171 = array (
);$arguments167['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array171);

$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);

$output166 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['key'] = NULL;
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$arguments172['languageKey'] = NULL;
$arguments172['alternativeLanguageKeys'] = NULL;
$arguments172['key'] = 'visibility.unhide';

$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext)]);

$output166 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['identifier'] = NULL;
$arguments174['size'] = 'small';
$arguments174['overlay'] = NULL;
$arguments174['state'] = 'default';
$arguments174['alternativeMarkupIdentifier'] = NULL;
$arguments174['identifier'] = 'actions-edit-unhide';

$output166 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output166 .= '</a>
				';
return $output166;
};
$arguments164 = array();

$output163 .= '';

$output163 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['parameters'] = NULL;
$arguments179['redirectUrl'] = '';
$output181 = '';

$output181 .= 'data[be_groups][';
$array182 = array (
);
$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array182)]);

$output181 .= '][hidden]=1';
$arguments179['parameters'] = $output181;
$array183 = array (
);$arguments179['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array183);

$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext)]);

$output178 .= '" title="';
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
$arguments184['key'] = 'visibility.hide';

$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext)]);

$output178 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['identifier'] = NULL;
$arguments186['size'] = 'small';
$arguments186['overlay'] = NULL;
$arguments186['state'] = 'default';
$arguments186['alternativeMarkupIdentifier'] = NULL;
$arguments186['identifier'] = 'actions-edit-hide';

$output178 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output178 .= '</a>
				';
return $output178;
};
$arguments176 = array();
$arguments176['if'] = NULL;

$output163 .= '';

$output163 .= '
			';
return $output163;
};
$arguments138 = array();
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$arguments138['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array160 = array();
$array161 = array (
);$array160['0'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroup.hidden', $array161);

$expression162 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments138['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression162(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)
					),
					$renderingContext
				);
$arguments138['__thenClosure'] = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['parameters'] = NULL;
$arguments141['redirectUrl'] = '';
$output143 = '';

$output143 .= 'data[be_groups][';
$array144 = array (
);
$output143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array144)]);

$output143 .= '][hidden]=0';
$arguments141['parameters'] = $output143;
$array145 = array (
);$arguments141['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array145);

$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output140 .= '" title="';
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
$arguments146['key'] = 'visibility.unhide';

$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext)]);

$output140 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['identifier'] = NULL;
$arguments148['size'] = 'small';
$arguments148['overlay'] = NULL;
$arguments148['state'] = 'default';
$arguments148['alternativeMarkupIdentifier'] = NULL;
$arguments148['identifier'] = 'actions-edit-unhide';

$output140 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output140 .= '</a>
				';
return $output140;
};
$arguments138['__elseClosures'][] = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['parameters'] = NULL;
$arguments151['redirectUrl'] = '';
$output153 = '';

$output153 .= 'data[be_groups][';
$array154 = array (
);
$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array154)]);

$output153 .= '][hidden]=1';
$arguments151['parameters'] = $output153;
$array155 = array (
);$arguments151['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array155);

$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output150 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['key'] = NULL;
$arguments156['id'] = NULL;
$arguments156['default'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extensionName'] = NULL;
$arguments156['languageKey'] = NULL;
$arguments156['alternativeLanguageKeys'] = NULL;
$arguments156['key'] = 'visibility.hide';

$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output150 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['identifier'] = NULL;
$arguments158['size'] = 'small';
$arguments158['overlay'] = NULL;
$arguments158['state'] = 'default';
$arguments158['alternativeMarkupIdentifier'] = NULL;
$arguments158['identifier'] = 'actions-edit-hide';

$output150 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output150 .= '</a>
				';
return $output150;
};

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output97 .= '
		</div>
		<div class="btn-group" role="group">
			<a class="btn btn-default" href="#" onclick="top.TYPO3.InfoWindow.showItem(\'be_groups\', \'';
$array188 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid', $array188)]);

$output97 .= '\'); return false;">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['identifier'] = NULL;
$arguments189['size'] = 'small';
$arguments189['overlay'] = NULL;
$arguments189['state'] = 'default';
$arguments189['alternativeMarkupIdentifier'] = NULL;
$arguments189['identifier'] = 'actions-document-info';

$output97 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output97 .= '</a>
		</div>
	</td>
</tr>
';
return $output97;
};
$arguments95 = array();
$arguments95['name'] = NULL;
$arguments95['name'] = 'list_row';

$output94 .= NULL;

$output94 .= '
</html>
';

return $output94;
}


}
#