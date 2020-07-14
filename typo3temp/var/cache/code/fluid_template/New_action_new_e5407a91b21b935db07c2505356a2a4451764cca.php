<?php

class New_action_new_e5407a91b21b935db07c2505356a2a4451764cca extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments4['partial'] = 'Misc/FormErrors';
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['object'] = $renderingContext->getVariableProvider()->getByPath('User', $array7);
$arguments4['arguments'] = $array6;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['section'] = NULL;
$arguments8['partial'] = NULL;
$arguments8['delegate'] = NULL;
$arguments8['renderable'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['optional'] = false;
$arguments8['default'] = NULL;
$arguments8['contentAs'] = NULL;
$arguments8['debug'] = true;
$arguments8['partial'] = 'Misc/ResendConfirmation';
$arguments8['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
	<div class="femanager_new">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
			<fieldset>
				<legend>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'titleCreateProfile';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '
				</legend>

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return '
							If some fields are selected in the flexform
						';
};
$arguments135 = array();

$output134 .= NULL;

$output134 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['section'] = NULL;
$arguments143['partial'] = NULL;
$arguments143['delegate'] = NULL;
$arguments143['renderable'] = NULL;
$arguments143['arguments'] = array (
);
$arguments143['optional'] = false;
$arguments143['default'] = NULL;
$arguments143['contentAs'] = NULL;
$arguments143['debug'] = true;
$output145 = '';

$output145 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['string'] = NULL;
$array148 = array (
);$arguments146['string'] = $renderingContext->getVariableProvider()->getByPath('field', $array148);

$output145 .= In2code\Femanager\ViewHelpers\Misc\UpperViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);
$arguments143['partial'] = $output145;
$arguments143['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output142 .= '
						';
return $output142;
};
$arguments137 = array();
$arguments137['each'] = NULL;
$arguments137['as'] = NULL;
$arguments137['key'] = NULL;
$arguments137['reverse'] = false;
$arguments137['iteration'] = NULL;
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['string'] = NULL;
$arguments139['seperator'] = ',';
$arguments139['trim'] = true;
$array141 = array (
);$arguments139['string'] = $renderingContext->getVariableProvider()->getByPath('settings.new.fields', $array141);
$arguments137['each'] = In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);
$arguments137['as'] = 'field';

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output134 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['section'] = NULL;
$arguments150['partial'] = NULL;
$arguments150['delegate'] = NULL;
$arguments150['renderable'] = NULL;
$arguments150['arguments'] = array (
);
$arguments150['optional'] = false;
$arguments150['default'] = NULL;
$arguments150['contentAs'] = NULL;
$arguments150['debug'] = true;
$arguments150['partial'] = 'Fields/SubmitCreate';
$arguments150['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output134 .= '
					';
return $output134;
};
$arguments132 = array();

$output131 .= '';

$output131 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return '
							If no fields are selected in the flexform => show all
						';
};
$arguments156 = array();

$output155 .= NULL;

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['section'] = NULL;
$arguments158['partial'] = NULL;
$arguments158['delegate'] = NULL;
$arguments158['renderable'] = NULL;
$arguments158['arguments'] = array (
);
$arguments158['optional'] = false;
$arguments158['default'] = NULL;
$arguments158['contentAs'] = NULL;
$arguments158['debug'] = true;
$arguments158['partial'] = 'Fields/Username';
$arguments158['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['section'] = NULL;
$arguments161['partial'] = NULL;
$arguments161['delegate'] = NULL;
$arguments161['renderable'] = NULL;
$arguments161['arguments'] = array (
);
$arguments161['optional'] = false;
$arguments161['default'] = NULL;
$arguments161['contentAs'] = NULL;
$arguments161['debug'] = true;
$arguments161['partial'] = 'Fields/Password';
$arguments161['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output155 .= '
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
$arguments164['partial'] = 'Fields/Title';
$arguments164['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['section'] = NULL;
$arguments167['partial'] = NULL;
$arguments167['delegate'] = NULL;
$arguments167['renderable'] = NULL;
$arguments167['arguments'] = array (
);
$arguments167['optional'] = false;
$arguments167['default'] = NULL;
$arguments167['contentAs'] = NULL;
$arguments167['debug'] = true;
$arguments167['partial'] = 'Fields/Name';
$arguments167['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['section'] = NULL;
$arguments170['partial'] = NULL;
$arguments170['delegate'] = NULL;
$arguments170['renderable'] = NULL;
$arguments170['arguments'] = array (
);
$arguments170['optional'] = false;
$arguments170['default'] = NULL;
$arguments170['contentAs'] = NULL;
$arguments170['debug'] = true;
$arguments170['partial'] = 'Fields/FirstName';
$arguments170['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['section'] = NULL;
$arguments173['partial'] = NULL;
$arguments173['delegate'] = NULL;
$arguments173['renderable'] = NULL;
$arguments173['arguments'] = array (
);
$arguments173['optional'] = false;
$arguments173['default'] = NULL;
$arguments173['contentAs'] = NULL;
$arguments173['debug'] = true;
$arguments173['partial'] = 'Fields/MiddleName';
$arguments173['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['section'] = NULL;
$arguments176['partial'] = NULL;
$arguments176['delegate'] = NULL;
$arguments176['renderable'] = NULL;
$arguments176['arguments'] = array (
);
$arguments176['optional'] = false;
$arguments176['default'] = NULL;
$arguments176['contentAs'] = NULL;
$arguments176['debug'] = true;
$arguments176['partial'] = 'Fields/LastName';
$arguments176['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['section'] = NULL;
$arguments179['partial'] = NULL;
$arguments179['delegate'] = NULL;
$arguments179['renderable'] = NULL;
$arguments179['arguments'] = array (
);
$arguments179['optional'] = false;
$arguments179['default'] = NULL;
$arguments179['contentAs'] = NULL;
$arguments179['debug'] = true;
$arguments179['partial'] = 'Fields/Gender';
$arguments179['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['section'] = NULL;
$arguments182['partial'] = NULL;
$arguments182['delegate'] = NULL;
$arguments182['renderable'] = NULL;
$arguments182['arguments'] = array (
);
$arguments182['optional'] = false;
$arguments182['default'] = NULL;
$arguments182['contentAs'] = NULL;
$arguments182['debug'] = true;
$arguments182['partial'] = 'Fields/DateOfBirth';
$arguments182['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['section'] = NULL;
$arguments185['partial'] = NULL;
$arguments185['delegate'] = NULL;
$arguments185['renderable'] = NULL;
$arguments185['arguments'] = array (
);
$arguments185['optional'] = false;
$arguments185['default'] = NULL;
$arguments185['contentAs'] = NULL;
$arguments185['debug'] = true;
$arguments185['partial'] = 'Fields/Company';
$arguments185['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['section'] = NULL;
$arguments188['partial'] = NULL;
$arguments188['delegate'] = NULL;
$arguments188['renderable'] = NULL;
$arguments188['arguments'] = array (
);
$arguments188['optional'] = false;
$arguments188['default'] = NULL;
$arguments188['contentAs'] = NULL;
$arguments188['debug'] = true;
$arguments188['partial'] = 'Fields/Www';
$arguments188['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['section'] = NULL;
$arguments191['partial'] = NULL;
$arguments191['delegate'] = NULL;
$arguments191['renderable'] = NULL;
$arguments191['arguments'] = array (
);
$arguments191['optional'] = false;
$arguments191['default'] = NULL;
$arguments191['contentAs'] = NULL;
$arguments191['debug'] = true;
$arguments191['partial'] = 'Fields/Email';
$arguments191['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['section'] = NULL;
$arguments194['partial'] = NULL;
$arguments194['delegate'] = NULL;
$arguments194['renderable'] = NULL;
$arguments194['arguments'] = array (
);
$arguments194['optional'] = false;
$arguments194['default'] = NULL;
$arguments194['contentAs'] = NULL;
$arguments194['debug'] = true;
$arguments194['partial'] = 'Fields/Telephone';
$arguments194['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['section'] = NULL;
$arguments197['partial'] = NULL;
$arguments197['delegate'] = NULL;
$arguments197['renderable'] = NULL;
$arguments197['arguments'] = array (
);
$arguments197['optional'] = false;
$arguments197['default'] = NULL;
$arguments197['contentAs'] = NULL;
$arguments197['debug'] = true;
$arguments197['partial'] = 'Fields/Fax';
$arguments197['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['section'] = NULL;
$arguments200['partial'] = NULL;
$arguments200['delegate'] = NULL;
$arguments200['renderable'] = NULL;
$arguments200['arguments'] = array (
);
$arguments200['optional'] = false;
$arguments200['default'] = NULL;
$arguments200['contentAs'] = NULL;
$arguments200['debug'] = true;
$arguments200['partial'] = 'Fields/Address';
$arguments200['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['section'] = NULL;
$arguments203['partial'] = NULL;
$arguments203['delegate'] = NULL;
$arguments203['renderable'] = NULL;
$arguments203['arguments'] = array (
);
$arguments203['optional'] = false;
$arguments203['default'] = NULL;
$arguments203['contentAs'] = NULL;
$arguments203['debug'] = true;
$arguments203['partial'] = 'Fields/Zip';
$arguments203['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['section'] = NULL;
$arguments206['partial'] = NULL;
$arguments206['delegate'] = NULL;
$arguments206['renderable'] = NULL;
$arguments206['arguments'] = array (
);
$arguments206['optional'] = false;
$arguments206['default'] = NULL;
$arguments206['contentAs'] = NULL;
$arguments206['debug'] = true;
$arguments206['partial'] = 'Fields/City';
$arguments206['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['section'] = NULL;
$arguments209['partial'] = NULL;
$arguments209['delegate'] = NULL;
$arguments209['renderable'] = NULL;
$arguments209['arguments'] = array (
);
$arguments209['optional'] = false;
$arguments209['default'] = NULL;
$arguments209['contentAs'] = NULL;
$arguments209['debug'] = true;
$arguments209['partial'] = 'Fields/Country';
$arguments209['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['section'] = NULL;
$arguments212['partial'] = NULL;
$arguments212['delegate'] = NULL;
$arguments212['renderable'] = NULL;
$arguments212['arguments'] = array (
);
$arguments212['optional'] = false;
$arguments212['default'] = NULL;
$arguments212['contentAs'] = NULL;
$arguments212['debug'] = true;
$arguments212['partial'] = 'Fields/Image';
$arguments212['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['section'] = NULL;
$arguments215['partial'] = NULL;
$arguments215['delegate'] = NULL;
$arguments215['renderable'] = NULL;
$arguments215['arguments'] = array (
);
$arguments215['optional'] = false;
$arguments215['default'] = NULL;
$arguments215['contentAs'] = NULL;
$arguments215['debug'] = true;
$arguments215['partial'] = 'Fields/Usergroup';
$arguments215['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['section'] = NULL;
$arguments218['partial'] = NULL;
$arguments218['delegate'] = NULL;
$arguments218['renderable'] = NULL;
$arguments218['arguments'] = array (
);
$arguments218['optional'] = false;
$arguments218['default'] = NULL;
$arguments218['contentAs'] = NULL;
$arguments218['debug'] = true;
$arguments218['partial'] = 'Fields/Terms';
$arguments218['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['section'] = NULL;
$arguments231['partial'] = NULL;
$arguments231['delegate'] = NULL;
$arguments231['renderable'] = NULL;
$arguments231['arguments'] = array (
);
$arguments231['optional'] = false;
$arguments231['default'] = NULL;
$arguments231['contentAs'] = NULL;
$arguments231['debug'] = true;
$arguments231['partial'] = 'Fields/Captcha';
$arguments231['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output230 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '
						';
return $output230;
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array223 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['settings'] = NULL;
// Rendering Boolean node
// Rendering Array
$array226 = array();
$array227 = array (
);$array226['0'] = $renderingContext->getVariableProvider()->getByPath('settings', $array227);

$expression228 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments224['settings'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression228(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);
$array223['0'] = In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$expression229 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression229(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);
$arguments221['__thenClosure'] = $renderChildrenClosure222;

$output155 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output155 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['section'] = NULL;
$arguments234['partial'] = NULL;
$arguments234['delegate'] = NULL;
$arguments234['renderable'] = NULL;
$arguments234['arguments'] = array (
);
$arguments234['optional'] = false;
$arguments234['default'] = NULL;
$arguments234['contentAs'] = NULL;
$arguments234['debug'] = true;
$arguments234['partial'] = 'Fields/SubmitCreate';
$arguments234['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output155 .= '
					';
return $output155;
};
$arguments153 = array();
$arguments153['if'] = NULL;

$output131 .= '';

$output131 .= '

				';
return $output131;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['0'] = $renderingContext->getVariableProvider()->getByPath('settings.new.fields', $array129);

$expression130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return '
							If some fields are selected in the flexform
						';
};
$arguments28 = array();

$output27 .= NULL;

$output27 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['section'] = NULL;
$arguments36['partial'] = NULL;
$arguments36['delegate'] = NULL;
$arguments36['renderable'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['optional'] = false;
$arguments36['default'] = NULL;
$arguments36['contentAs'] = NULL;
$arguments36['debug'] = true;
$output38 = '';

$output38 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['string'] = NULL;
$array41 = array (
);$arguments39['string'] = $renderingContext->getVariableProvider()->getByPath('field', $array41);

$output38 .= In2code\Femanager\ViewHelpers\Misc\UpperViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
$arguments36['partial'] = $output38;
$arguments36['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
						';
return $output35;
};
$arguments30 = array();
$arguments30['each'] = NULL;
$arguments30['as'] = NULL;
$arguments30['key'] = NULL;
$arguments30['reverse'] = false;
$arguments30['iteration'] = NULL;
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['string'] = NULL;
$arguments32['seperator'] = ',';
$arguments32['trim'] = true;
$array34 = array (
);$arguments32['string'] = $renderingContext->getVariableProvider()->getByPath('settings.new.fields', $array34);
$arguments30['each'] = In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);
$arguments30['as'] = 'field';

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output27 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['section'] = NULL;
$arguments43['partial'] = NULL;
$arguments43['delegate'] = NULL;
$arguments43['renderable'] = NULL;
$arguments43['arguments'] = array (
);
$arguments43['optional'] = false;
$arguments43['default'] = NULL;
$arguments43['contentAs'] = NULL;
$arguments43['debug'] = true;
$arguments43['partial'] = 'Fields/SubmitCreate';
$arguments43['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output27 .= '
					';
return $output27;
};
$arguments25['__elseClosures'][] = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return '
							If no fields are selected in the flexform => show all
						';
};
$arguments47 = array();

$output46 .= NULL;

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['section'] = NULL;
$arguments49['partial'] = NULL;
$arguments49['delegate'] = NULL;
$arguments49['renderable'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['optional'] = false;
$arguments49['default'] = NULL;
$arguments49['contentAs'] = NULL;
$arguments49['debug'] = true;
$arguments49['partial'] = 'Fields/Username';
$arguments49['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['section'] = NULL;
$arguments52['partial'] = NULL;
$arguments52['delegate'] = NULL;
$arguments52['renderable'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['optional'] = false;
$arguments52['default'] = NULL;
$arguments52['contentAs'] = NULL;
$arguments52['debug'] = true;
$arguments52['partial'] = 'Fields/Password';
$arguments52['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['section'] = NULL;
$arguments55['partial'] = NULL;
$arguments55['delegate'] = NULL;
$arguments55['renderable'] = NULL;
$arguments55['arguments'] = array (
);
$arguments55['optional'] = false;
$arguments55['default'] = NULL;
$arguments55['contentAs'] = NULL;
$arguments55['debug'] = true;
$arguments55['partial'] = 'Fields/Title';
$arguments55['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output46 .= '
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
$arguments58['partial'] = 'Fields/Name';
$arguments58['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['section'] = NULL;
$arguments61['partial'] = NULL;
$arguments61['delegate'] = NULL;
$arguments61['renderable'] = NULL;
$arguments61['arguments'] = array (
);
$arguments61['optional'] = false;
$arguments61['default'] = NULL;
$arguments61['contentAs'] = NULL;
$arguments61['debug'] = true;
$arguments61['partial'] = 'Fields/FirstName';
$arguments61['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['section'] = NULL;
$arguments64['partial'] = NULL;
$arguments64['delegate'] = NULL;
$arguments64['renderable'] = NULL;
$arguments64['arguments'] = array (
);
$arguments64['optional'] = false;
$arguments64['default'] = NULL;
$arguments64['contentAs'] = NULL;
$arguments64['debug'] = true;
$arguments64['partial'] = 'Fields/MiddleName';
$arguments64['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['section'] = NULL;
$arguments67['partial'] = NULL;
$arguments67['delegate'] = NULL;
$arguments67['renderable'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['optional'] = false;
$arguments67['default'] = NULL;
$arguments67['contentAs'] = NULL;
$arguments67['debug'] = true;
$arguments67['partial'] = 'Fields/LastName';
$arguments67['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['section'] = NULL;
$arguments70['partial'] = NULL;
$arguments70['delegate'] = NULL;
$arguments70['renderable'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['optional'] = false;
$arguments70['default'] = NULL;
$arguments70['contentAs'] = NULL;
$arguments70['debug'] = true;
$arguments70['partial'] = 'Fields/Gender';
$arguments70['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['section'] = NULL;
$arguments73['partial'] = NULL;
$arguments73['delegate'] = NULL;
$arguments73['renderable'] = NULL;
$arguments73['arguments'] = array (
);
$arguments73['optional'] = false;
$arguments73['default'] = NULL;
$arguments73['contentAs'] = NULL;
$arguments73['debug'] = true;
$arguments73['partial'] = 'Fields/DateOfBirth';
$arguments73['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['section'] = NULL;
$arguments76['partial'] = NULL;
$arguments76['delegate'] = NULL;
$arguments76['renderable'] = NULL;
$arguments76['arguments'] = array (
);
$arguments76['optional'] = false;
$arguments76['default'] = NULL;
$arguments76['contentAs'] = NULL;
$arguments76['debug'] = true;
$arguments76['partial'] = 'Fields/Company';
$arguments76['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['section'] = NULL;
$arguments79['partial'] = NULL;
$arguments79['delegate'] = NULL;
$arguments79['renderable'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['optional'] = false;
$arguments79['default'] = NULL;
$arguments79['contentAs'] = NULL;
$arguments79['debug'] = true;
$arguments79['partial'] = 'Fields/Www';
$arguments79['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['section'] = NULL;
$arguments82['partial'] = NULL;
$arguments82['delegate'] = NULL;
$arguments82['renderable'] = NULL;
$arguments82['arguments'] = array (
);
$arguments82['optional'] = false;
$arguments82['default'] = NULL;
$arguments82['contentAs'] = NULL;
$arguments82['debug'] = true;
$arguments82['partial'] = 'Fields/Email';
$arguments82['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['section'] = NULL;
$arguments85['partial'] = NULL;
$arguments85['delegate'] = NULL;
$arguments85['renderable'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['optional'] = false;
$arguments85['default'] = NULL;
$arguments85['contentAs'] = NULL;
$arguments85['debug'] = true;
$arguments85['partial'] = 'Fields/Telephone';
$arguments85['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['section'] = NULL;
$arguments88['partial'] = NULL;
$arguments88['delegate'] = NULL;
$arguments88['renderable'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['optional'] = false;
$arguments88['default'] = NULL;
$arguments88['contentAs'] = NULL;
$arguments88['debug'] = true;
$arguments88['partial'] = 'Fields/Fax';
$arguments88['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['section'] = NULL;
$arguments91['partial'] = NULL;
$arguments91['delegate'] = NULL;
$arguments91['renderable'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['optional'] = false;
$arguments91['default'] = NULL;
$arguments91['contentAs'] = NULL;
$arguments91['debug'] = true;
$arguments91['partial'] = 'Fields/Address';
$arguments91['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['section'] = NULL;
$arguments94['partial'] = NULL;
$arguments94['delegate'] = NULL;
$arguments94['renderable'] = NULL;
$arguments94['arguments'] = array (
);
$arguments94['optional'] = false;
$arguments94['default'] = NULL;
$arguments94['contentAs'] = NULL;
$arguments94['debug'] = true;
$arguments94['partial'] = 'Fields/Zip';
$arguments94['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['section'] = NULL;
$arguments97['partial'] = NULL;
$arguments97['delegate'] = NULL;
$arguments97['renderable'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$arguments97['default'] = NULL;
$arguments97['contentAs'] = NULL;
$arguments97['debug'] = true;
$arguments97['partial'] = 'Fields/City';
$arguments97['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['section'] = NULL;
$arguments100['partial'] = NULL;
$arguments100['delegate'] = NULL;
$arguments100['renderable'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['optional'] = false;
$arguments100['default'] = NULL;
$arguments100['contentAs'] = NULL;
$arguments100['debug'] = true;
$arguments100['partial'] = 'Fields/Country';
$arguments100['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['section'] = NULL;
$arguments103['partial'] = NULL;
$arguments103['delegate'] = NULL;
$arguments103['renderable'] = NULL;
$arguments103['arguments'] = array (
);
$arguments103['optional'] = false;
$arguments103['default'] = NULL;
$arguments103['contentAs'] = NULL;
$arguments103['debug'] = true;
$arguments103['partial'] = 'Fields/Image';
$arguments103['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['section'] = NULL;
$arguments106['partial'] = NULL;
$arguments106['delegate'] = NULL;
$arguments106['renderable'] = NULL;
$arguments106['arguments'] = array (
);
$arguments106['optional'] = false;
$arguments106['default'] = NULL;
$arguments106['contentAs'] = NULL;
$arguments106['debug'] = true;
$arguments106['partial'] = 'Fields/Usergroup';
$arguments106['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['section'] = NULL;
$arguments109['partial'] = NULL;
$arguments109['delegate'] = NULL;
$arguments109['renderable'] = NULL;
$arguments109['arguments'] = array (
);
$arguments109['optional'] = false;
$arguments109['default'] = NULL;
$arguments109['contentAs'] = NULL;
$arguments109['debug'] = true;
$arguments109['partial'] = 'Fields/Terms';
$arguments109['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['section'] = NULL;
$arguments122['partial'] = NULL;
$arguments122['delegate'] = NULL;
$arguments122['renderable'] = NULL;
$arguments122['arguments'] = array (
);
$arguments122['optional'] = false;
$arguments122['default'] = NULL;
$arguments122['contentAs'] = NULL;
$arguments122['debug'] = true;
$arguments122['partial'] = 'Fields/Captcha';
$arguments122['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
						';
return $output121;
};
$arguments112 = array();
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$arguments112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['settings'] = NULL;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('settings', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['settings'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$array114['0'] = In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments112['__thenClosure'] = $renderChildrenClosure113;

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output46 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['section'] = NULL;
$arguments125['partial'] = NULL;
$arguments125['delegate'] = NULL;
$arguments125['renderable'] = NULL;
$arguments125['arguments'] = array (
);
$arguments125['optional'] = false;
$arguments125['default'] = NULL;
$arguments125['contentAs'] = NULL;
$arguments125['debug'] = true;
$arguments125['partial'] = 'Fields/SubmitCreate';
$arguments125['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output46 .= '
					';
return $output46;
};

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output22 .= '
			</fieldset>
		';
return $output22;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['action'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['controller'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['pluginName'] = NULL;
$arguments11['pageUid'] = NULL;
$arguments11['object'] = NULL;
$arguments11['pageType'] = 0;
$arguments11['noCache'] = false;
$arguments11['noCacheHash'] = false;
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['additionalParams'] = array (
);
$arguments11['absolute'] = false;
$arguments11['addQueryString'] = false;
$arguments11['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments11['addQueryStringMethod'] = 'GET';
$arguments11['fieldNamePrefix'] = NULL;
$arguments11['actionUri'] = NULL;
$arguments11['objectName'] = NULL;
$arguments11['hiddenFieldClassName'] = NULL;
$arguments11['enctype'] = NULL;
$arguments11['method'] = NULL;
$arguments11['name'] = NULL;
$arguments11['onreset'] = NULL;
$arguments11['onsubmit'] = NULL;
$arguments11['target'] = NULL;
$arguments11['novalidate'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['name'] = 'user';
$array13 = array (
);$arguments11['object'] = $renderingContext->getVariableProvider()->getByPath('user', $array13);
$arguments11['action'] = 'create';
$arguments11['enctype'] = 'multipart/form-data';
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['data-femanager-plugin'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array15);
$arguments11['additionalAttributes'] = $array14;
$output16 = '';

$output16 .= 'form-horizontal ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('settings.new.validation._enable.client', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['then'] = 'feManagerValidation';
$arguments17['else'] = '';

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
$arguments11['class'] = $output16;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

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
$output237 = '';

$output237 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['name'] = NULL;
$arguments238['name'] = 'Default';

$output237 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output237 .= '

	User / New
		Available variables:
			';
$array240 = array (
);
$output237 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user', $array240)]);

$output237 .= '
			';
$array241 = array (
);
$output237 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('allUserGroups', $array241)]);

$output237 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['section'] = NULL;
$arguments245['partial'] = NULL;
$arguments245['delegate'] = NULL;
$arguments245['renderable'] = NULL;
$arguments245['arguments'] = array (
);
$arguments245['optional'] = false;
$arguments245['default'] = NULL;
$arguments245['contentAs'] = NULL;
$arguments245['debug'] = true;
$arguments245['partial'] = 'Misc/FlashMessages';
$arguments245['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output244 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output244 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['section'] = NULL;
$arguments248['partial'] = NULL;
$arguments248['delegate'] = NULL;
$arguments248['renderable'] = NULL;
$arguments248['arguments'] = array (
);
$arguments248['optional'] = false;
$arguments248['default'] = NULL;
$arguments248['contentAs'] = NULL;
$arguments248['debug'] = true;
$arguments248['partial'] = 'Misc/FormErrors';
// Rendering Array
$array250 = array();
$array251 = array (
);$array250['object'] = $renderingContext->getVariableProvider()->getByPath('User', $array251);
$arguments248['arguments'] = $array250;

$output244 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output244 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['section'] = NULL;
$arguments252['partial'] = NULL;
$arguments252['delegate'] = NULL;
$arguments252['renderable'] = NULL;
$arguments252['arguments'] = array (
);
$arguments252['optional'] = false;
$arguments252['default'] = NULL;
$arguments252['contentAs'] = NULL;
$arguments252['debug'] = true;
$arguments252['partial'] = 'Misc/ResendConfirmation';
$arguments252['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output244 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output244 .= '
	<div class="femanager_new">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
			<fieldset>
				<legend>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['key'] = NULL;
$arguments267['id'] = NULL;
$arguments267['default'] = NULL;
$arguments267['arguments'] = NULL;
$arguments267['extensionName'] = NULL;
$arguments267['languageKey'] = NULL;
$arguments267['alternativeLanguageKeys'] = NULL;
$arguments267['key'] = 'titleCreateProfile';

$output266 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext)]);

$output266 .= '
				</legend>

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
return '
							If some fields are selected in the flexform
						';
};
$arguments379 = array();

$output378 .= NULL;

$output378 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments387 = array();
$arguments387['section'] = NULL;
$arguments387['partial'] = NULL;
$arguments387['delegate'] = NULL;
$arguments387['renderable'] = NULL;
$arguments387['arguments'] = array (
);
$arguments387['optional'] = false;
$arguments387['default'] = NULL;
$arguments387['contentAs'] = NULL;
$arguments387['debug'] = true;
$output389 = '';

$output389 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['string'] = NULL;
$array392 = array (
);$arguments390['string'] = $renderingContext->getVariableProvider()->getByPath('field', $array392);

$output389 .= In2code\Femanager\ViewHelpers\Misc\UpperViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);
$arguments387['partial'] = $output389;
$arguments387['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output386 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext);

$output386 .= '
						';
return $output386;
};
$arguments381 = array();
$arguments381['each'] = NULL;
$arguments381['as'] = NULL;
$arguments381['key'] = NULL;
$arguments381['reverse'] = false;
$arguments381['iteration'] = NULL;
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments383 = array();
$arguments383['string'] = NULL;
$arguments383['seperator'] = ',';
$arguments383['trim'] = true;
$array385 = array (
);$arguments383['string'] = $renderingContext->getVariableProvider()->getByPath('settings.new.fields', $array385);
$arguments381['each'] = In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);
$arguments381['as'] = 'field';

$output378 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext);

$output378 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['section'] = NULL;
$arguments394['partial'] = NULL;
$arguments394['delegate'] = NULL;
$arguments394['renderable'] = NULL;
$arguments394['arguments'] = array (
);
$arguments394['optional'] = false;
$arguments394['default'] = NULL;
$arguments394['contentAs'] = NULL;
$arguments394['debug'] = true;
$arguments394['partial'] = 'Fields/SubmitCreate';
$arguments394['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output378 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output378 .= '
					';
return $output378;
};
$arguments376 = array();

$output375 .= '';

$output375 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$output399 = '';

$output399 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return '
							If no fields are selected in the flexform => show all
						';
};
$arguments400 = array();

$output399 .= NULL;

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments402 = array();
$arguments402['section'] = NULL;
$arguments402['partial'] = NULL;
$arguments402['delegate'] = NULL;
$arguments402['renderable'] = NULL;
$arguments402['arguments'] = array (
);
$arguments402['optional'] = false;
$arguments402['default'] = NULL;
$arguments402['contentAs'] = NULL;
$arguments402['debug'] = true;
$arguments402['partial'] = 'Fields/Username';
$arguments402['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments405 = array();
$arguments405['section'] = NULL;
$arguments405['partial'] = NULL;
$arguments405['delegate'] = NULL;
$arguments405['renderable'] = NULL;
$arguments405['arguments'] = array (
);
$arguments405['optional'] = false;
$arguments405['default'] = NULL;
$arguments405['contentAs'] = NULL;
$arguments405['debug'] = true;
$arguments405['partial'] = 'Fields/Password';
$arguments405['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['section'] = NULL;
$arguments408['partial'] = NULL;
$arguments408['delegate'] = NULL;
$arguments408['renderable'] = NULL;
$arguments408['arguments'] = array (
);
$arguments408['optional'] = false;
$arguments408['default'] = NULL;
$arguments408['contentAs'] = NULL;
$arguments408['debug'] = true;
$arguments408['partial'] = 'Fields/Title';
$arguments408['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments411 = array();
$arguments411['section'] = NULL;
$arguments411['partial'] = NULL;
$arguments411['delegate'] = NULL;
$arguments411['renderable'] = NULL;
$arguments411['arguments'] = array (
);
$arguments411['optional'] = false;
$arguments411['default'] = NULL;
$arguments411['contentAs'] = NULL;
$arguments411['debug'] = true;
$arguments411['partial'] = 'Fields/Name';
$arguments411['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments414 = array();
$arguments414['section'] = NULL;
$arguments414['partial'] = NULL;
$arguments414['delegate'] = NULL;
$arguments414['renderable'] = NULL;
$arguments414['arguments'] = array (
);
$arguments414['optional'] = false;
$arguments414['default'] = NULL;
$arguments414['contentAs'] = NULL;
$arguments414['debug'] = true;
$arguments414['partial'] = 'Fields/FirstName';
$arguments414['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['section'] = NULL;
$arguments417['partial'] = NULL;
$arguments417['delegate'] = NULL;
$arguments417['renderable'] = NULL;
$arguments417['arguments'] = array (
);
$arguments417['optional'] = false;
$arguments417['default'] = NULL;
$arguments417['contentAs'] = NULL;
$arguments417['debug'] = true;
$arguments417['partial'] = 'Fields/MiddleName';
$arguments417['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments420 = array();
$arguments420['section'] = NULL;
$arguments420['partial'] = NULL;
$arguments420['delegate'] = NULL;
$arguments420['renderable'] = NULL;
$arguments420['arguments'] = array (
);
$arguments420['optional'] = false;
$arguments420['default'] = NULL;
$arguments420['contentAs'] = NULL;
$arguments420['debug'] = true;
$arguments420['partial'] = 'Fields/LastName';
$arguments420['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments423 = array();
$arguments423['section'] = NULL;
$arguments423['partial'] = NULL;
$arguments423['delegate'] = NULL;
$arguments423['renderable'] = NULL;
$arguments423['arguments'] = array (
);
$arguments423['optional'] = false;
$arguments423['default'] = NULL;
$arguments423['contentAs'] = NULL;
$arguments423['debug'] = true;
$arguments423['partial'] = 'Fields/Gender';
$arguments423['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments426 = array();
$arguments426['section'] = NULL;
$arguments426['partial'] = NULL;
$arguments426['delegate'] = NULL;
$arguments426['renderable'] = NULL;
$arguments426['arguments'] = array (
);
$arguments426['optional'] = false;
$arguments426['default'] = NULL;
$arguments426['contentAs'] = NULL;
$arguments426['debug'] = true;
$arguments426['partial'] = 'Fields/DateOfBirth';
$arguments426['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments429 = array();
$arguments429['section'] = NULL;
$arguments429['partial'] = NULL;
$arguments429['delegate'] = NULL;
$arguments429['renderable'] = NULL;
$arguments429['arguments'] = array (
);
$arguments429['optional'] = false;
$arguments429['default'] = NULL;
$arguments429['contentAs'] = NULL;
$arguments429['debug'] = true;
$arguments429['partial'] = 'Fields/Company';
$arguments429['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['section'] = NULL;
$arguments432['partial'] = NULL;
$arguments432['delegate'] = NULL;
$arguments432['renderable'] = NULL;
$arguments432['arguments'] = array (
);
$arguments432['optional'] = false;
$arguments432['default'] = NULL;
$arguments432['contentAs'] = NULL;
$arguments432['debug'] = true;
$arguments432['partial'] = 'Fields/Www';
$arguments432['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments435 = array();
$arguments435['section'] = NULL;
$arguments435['partial'] = NULL;
$arguments435['delegate'] = NULL;
$arguments435['renderable'] = NULL;
$arguments435['arguments'] = array (
);
$arguments435['optional'] = false;
$arguments435['default'] = NULL;
$arguments435['contentAs'] = NULL;
$arguments435['debug'] = true;
$arguments435['partial'] = 'Fields/Email';
$arguments435['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments438 = array();
$arguments438['section'] = NULL;
$arguments438['partial'] = NULL;
$arguments438['delegate'] = NULL;
$arguments438['renderable'] = NULL;
$arguments438['arguments'] = array (
);
$arguments438['optional'] = false;
$arguments438['default'] = NULL;
$arguments438['contentAs'] = NULL;
$arguments438['debug'] = true;
$arguments438['partial'] = 'Fields/Telephone';
$arguments438['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments441 = array();
$arguments441['section'] = NULL;
$arguments441['partial'] = NULL;
$arguments441['delegate'] = NULL;
$arguments441['renderable'] = NULL;
$arguments441['arguments'] = array (
);
$arguments441['optional'] = false;
$arguments441['default'] = NULL;
$arguments441['contentAs'] = NULL;
$arguments441['debug'] = true;
$arguments441['partial'] = 'Fields/Fax';
$arguments441['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments444 = array();
$arguments444['section'] = NULL;
$arguments444['partial'] = NULL;
$arguments444['delegate'] = NULL;
$arguments444['renderable'] = NULL;
$arguments444['arguments'] = array (
);
$arguments444['optional'] = false;
$arguments444['default'] = NULL;
$arguments444['contentAs'] = NULL;
$arguments444['debug'] = true;
$arguments444['partial'] = 'Fields/Address';
$arguments444['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['section'] = NULL;
$arguments447['partial'] = NULL;
$arguments447['delegate'] = NULL;
$arguments447['renderable'] = NULL;
$arguments447['arguments'] = array (
);
$arguments447['optional'] = false;
$arguments447['default'] = NULL;
$arguments447['contentAs'] = NULL;
$arguments447['debug'] = true;
$arguments447['partial'] = 'Fields/Zip';
$arguments447['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['section'] = NULL;
$arguments450['partial'] = NULL;
$arguments450['delegate'] = NULL;
$arguments450['renderable'] = NULL;
$arguments450['arguments'] = array (
);
$arguments450['optional'] = false;
$arguments450['default'] = NULL;
$arguments450['contentAs'] = NULL;
$arguments450['debug'] = true;
$arguments450['partial'] = 'Fields/City';
$arguments450['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['section'] = NULL;
$arguments453['partial'] = NULL;
$arguments453['delegate'] = NULL;
$arguments453['renderable'] = NULL;
$arguments453['arguments'] = array (
);
$arguments453['optional'] = false;
$arguments453['default'] = NULL;
$arguments453['contentAs'] = NULL;
$arguments453['debug'] = true;
$arguments453['partial'] = 'Fields/Country';
$arguments453['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['section'] = NULL;
$arguments456['partial'] = NULL;
$arguments456['delegate'] = NULL;
$arguments456['renderable'] = NULL;
$arguments456['arguments'] = array (
);
$arguments456['optional'] = false;
$arguments456['default'] = NULL;
$arguments456['contentAs'] = NULL;
$arguments456['debug'] = true;
$arguments456['partial'] = 'Fields/Image';
$arguments456['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments459 = array();
$arguments459['section'] = NULL;
$arguments459['partial'] = NULL;
$arguments459['delegate'] = NULL;
$arguments459['renderable'] = NULL;
$arguments459['arguments'] = array (
);
$arguments459['optional'] = false;
$arguments459['default'] = NULL;
$arguments459['contentAs'] = NULL;
$arguments459['debug'] = true;
$arguments459['partial'] = 'Fields/Usergroup';
$arguments459['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['section'] = NULL;
$arguments462['partial'] = NULL;
$arguments462['delegate'] = NULL;
$arguments462['renderable'] = NULL;
$arguments462['arguments'] = array (
);
$arguments462['optional'] = false;
$arguments462['default'] = NULL;
$arguments462['contentAs'] = NULL;
$arguments462['debug'] = true;
$arguments462['partial'] = 'Fields/Terms';
$arguments462['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
$output474 = '';

$output474 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments475 = array();
$arguments475['section'] = NULL;
$arguments475['partial'] = NULL;
$arguments475['delegate'] = NULL;
$arguments475['renderable'] = NULL;
$arguments475['arguments'] = array (
);
$arguments475['optional'] = false;
$arguments475['default'] = NULL;
$arguments475['contentAs'] = NULL;
$arguments475['debug'] = true;
$arguments475['partial'] = 'Fields/Captcha';
$arguments475['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output474 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments475, $renderChildrenClosure476, $renderingContext);

$output474 .= '
						';
return $output474;
};
$arguments465 = array();
$arguments465['then'] = NULL;
$arguments465['else'] = NULL;
$arguments465['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array467 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['settings'] = NULL;
// Rendering Boolean node
// Rendering Array
$array470 = array();
$array471 = array (
);$array470['0'] = $renderingContext->getVariableProvider()->getByPath('settings', $array471);

$expression472 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments468['settings'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression472(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array470)
					),
					$renderingContext
				);
$array467['0'] = In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$expression473 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments465['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression473(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array467)
					),
					$renderingContext
				);
$arguments465['__thenClosure'] = $renderChildrenClosure466;

$output399 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);

$output399 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['section'] = NULL;
$arguments478['partial'] = NULL;
$arguments478['delegate'] = NULL;
$arguments478['renderable'] = NULL;
$arguments478['arguments'] = array (
);
$arguments478['optional'] = false;
$arguments478['default'] = NULL;
$arguments478['contentAs'] = NULL;
$arguments478['debug'] = true;
$arguments478['partial'] = 'Fields/SubmitCreate';
$arguments478['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output399 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output399 .= '
					';
return $output399;
};
$arguments397 = array();
$arguments397['if'] = NULL;

$output375 .= '';

$output375 .= '

				';
return $output375;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array372 = array();
$array373 = array (
);$array372['0'] = $renderingContext->getVariableProvider()->getByPath('settings.new.fields', $array373);

$expression374 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression374(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array372)
					),
					$renderingContext
				);
$arguments269['__thenClosure'] = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return '
							If some fields are selected in the flexform
						';
};
$arguments272 = array();

$output271 .= NULL;

$output271 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['section'] = NULL;
$arguments280['partial'] = NULL;
$arguments280['delegate'] = NULL;
$arguments280['renderable'] = NULL;
$arguments280['arguments'] = array (
);
$arguments280['optional'] = false;
$arguments280['default'] = NULL;
$arguments280['contentAs'] = NULL;
$arguments280['debug'] = true;
$output282 = '';

$output282 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['string'] = NULL;
$array285 = array (
);$arguments283['string'] = $renderingContext->getVariableProvider()->getByPath('field', $array285);

$output282 .= In2code\Femanager\ViewHelpers\Misc\UpperViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);
$arguments280['partial'] = $output282;
$arguments280['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output279 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output279 .= '
						';
return $output279;
};
$arguments274 = array();
$arguments274['each'] = NULL;
$arguments274['as'] = NULL;
$arguments274['key'] = NULL;
$arguments274['reverse'] = false;
$arguments274['iteration'] = NULL;
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['string'] = NULL;
$arguments276['seperator'] = ',';
$arguments276['trim'] = true;
$array278 = array (
);$arguments276['string'] = $renderingContext->getVariableProvider()->getByPath('settings.new.fields', $array278);
$arguments274['each'] = In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);
$arguments274['as'] = 'field';

$output271 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output271 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['section'] = NULL;
$arguments287['partial'] = NULL;
$arguments287['delegate'] = NULL;
$arguments287['renderable'] = NULL;
$arguments287['arguments'] = array (
);
$arguments287['optional'] = false;
$arguments287['default'] = NULL;
$arguments287['contentAs'] = NULL;
$arguments287['debug'] = true;
$arguments287['partial'] = 'Fields/SubmitCreate';
$arguments287['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output271 .= '
					';
return $output271;
};
$arguments269['__elseClosures'][] = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return '
							If no fields are selected in the flexform => show all
						';
};
$arguments291 = array();

$output290 .= NULL;

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['section'] = NULL;
$arguments293['partial'] = NULL;
$arguments293['delegate'] = NULL;
$arguments293['renderable'] = NULL;
$arguments293['arguments'] = array (
);
$arguments293['optional'] = false;
$arguments293['default'] = NULL;
$arguments293['contentAs'] = NULL;
$arguments293['debug'] = true;
$arguments293['partial'] = 'Fields/Username';
$arguments293['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['section'] = NULL;
$arguments296['partial'] = NULL;
$arguments296['delegate'] = NULL;
$arguments296['renderable'] = NULL;
$arguments296['arguments'] = array (
);
$arguments296['optional'] = false;
$arguments296['default'] = NULL;
$arguments296['contentAs'] = NULL;
$arguments296['debug'] = true;
$arguments296['partial'] = 'Fields/Password';
$arguments296['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['section'] = NULL;
$arguments299['partial'] = NULL;
$arguments299['delegate'] = NULL;
$arguments299['renderable'] = NULL;
$arguments299['arguments'] = array (
);
$arguments299['optional'] = false;
$arguments299['default'] = NULL;
$arguments299['contentAs'] = NULL;
$arguments299['debug'] = true;
$arguments299['partial'] = 'Fields/Title';
$arguments299['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['section'] = NULL;
$arguments302['partial'] = NULL;
$arguments302['delegate'] = NULL;
$arguments302['renderable'] = NULL;
$arguments302['arguments'] = array (
);
$arguments302['optional'] = false;
$arguments302['default'] = NULL;
$arguments302['contentAs'] = NULL;
$arguments302['debug'] = true;
$arguments302['partial'] = 'Fields/Name';
$arguments302['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['section'] = NULL;
$arguments305['partial'] = NULL;
$arguments305['delegate'] = NULL;
$arguments305['renderable'] = NULL;
$arguments305['arguments'] = array (
);
$arguments305['optional'] = false;
$arguments305['default'] = NULL;
$arguments305['contentAs'] = NULL;
$arguments305['debug'] = true;
$arguments305['partial'] = 'Fields/FirstName';
$arguments305['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['section'] = NULL;
$arguments308['partial'] = NULL;
$arguments308['delegate'] = NULL;
$arguments308['renderable'] = NULL;
$arguments308['arguments'] = array (
);
$arguments308['optional'] = false;
$arguments308['default'] = NULL;
$arguments308['contentAs'] = NULL;
$arguments308['debug'] = true;
$arguments308['partial'] = 'Fields/MiddleName';
$arguments308['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['section'] = NULL;
$arguments311['partial'] = NULL;
$arguments311['delegate'] = NULL;
$arguments311['renderable'] = NULL;
$arguments311['arguments'] = array (
);
$arguments311['optional'] = false;
$arguments311['default'] = NULL;
$arguments311['contentAs'] = NULL;
$arguments311['debug'] = true;
$arguments311['partial'] = 'Fields/LastName';
$arguments311['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['section'] = NULL;
$arguments314['partial'] = NULL;
$arguments314['delegate'] = NULL;
$arguments314['renderable'] = NULL;
$arguments314['arguments'] = array (
);
$arguments314['optional'] = false;
$arguments314['default'] = NULL;
$arguments314['contentAs'] = NULL;
$arguments314['debug'] = true;
$arguments314['partial'] = 'Fields/Gender';
$arguments314['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['section'] = NULL;
$arguments317['partial'] = NULL;
$arguments317['delegate'] = NULL;
$arguments317['renderable'] = NULL;
$arguments317['arguments'] = array (
);
$arguments317['optional'] = false;
$arguments317['default'] = NULL;
$arguments317['contentAs'] = NULL;
$arguments317['debug'] = true;
$arguments317['partial'] = 'Fields/DateOfBirth';
$arguments317['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['section'] = NULL;
$arguments320['partial'] = NULL;
$arguments320['delegate'] = NULL;
$arguments320['renderable'] = NULL;
$arguments320['arguments'] = array (
);
$arguments320['optional'] = false;
$arguments320['default'] = NULL;
$arguments320['contentAs'] = NULL;
$arguments320['debug'] = true;
$arguments320['partial'] = 'Fields/Company';
$arguments320['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['section'] = NULL;
$arguments323['partial'] = NULL;
$arguments323['delegate'] = NULL;
$arguments323['renderable'] = NULL;
$arguments323['arguments'] = array (
);
$arguments323['optional'] = false;
$arguments323['default'] = NULL;
$arguments323['contentAs'] = NULL;
$arguments323['debug'] = true;
$arguments323['partial'] = 'Fields/Www';
$arguments323['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['section'] = NULL;
$arguments326['partial'] = NULL;
$arguments326['delegate'] = NULL;
$arguments326['renderable'] = NULL;
$arguments326['arguments'] = array (
);
$arguments326['optional'] = false;
$arguments326['default'] = NULL;
$arguments326['contentAs'] = NULL;
$arguments326['debug'] = true;
$arguments326['partial'] = 'Fields/Email';
$arguments326['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['section'] = NULL;
$arguments329['partial'] = NULL;
$arguments329['delegate'] = NULL;
$arguments329['renderable'] = NULL;
$arguments329['arguments'] = array (
);
$arguments329['optional'] = false;
$arguments329['default'] = NULL;
$arguments329['contentAs'] = NULL;
$arguments329['debug'] = true;
$arguments329['partial'] = 'Fields/Telephone';
$arguments329['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['section'] = NULL;
$arguments332['partial'] = NULL;
$arguments332['delegate'] = NULL;
$arguments332['renderable'] = NULL;
$arguments332['arguments'] = array (
);
$arguments332['optional'] = false;
$arguments332['default'] = NULL;
$arguments332['contentAs'] = NULL;
$arguments332['debug'] = true;
$arguments332['partial'] = 'Fields/Fax';
$arguments332['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments335 = array();
$arguments335['section'] = NULL;
$arguments335['partial'] = NULL;
$arguments335['delegate'] = NULL;
$arguments335['renderable'] = NULL;
$arguments335['arguments'] = array (
);
$arguments335['optional'] = false;
$arguments335['default'] = NULL;
$arguments335['contentAs'] = NULL;
$arguments335['debug'] = true;
$arguments335['partial'] = 'Fields/Address';
$arguments335['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['section'] = NULL;
$arguments338['partial'] = NULL;
$arguments338['delegate'] = NULL;
$arguments338['renderable'] = NULL;
$arguments338['arguments'] = array (
);
$arguments338['optional'] = false;
$arguments338['default'] = NULL;
$arguments338['contentAs'] = NULL;
$arguments338['debug'] = true;
$arguments338['partial'] = 'Fields/Zip';
$arguments338['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output290 .= '
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
$arguments341['partial'] = 'Fields/City';
$arguments341['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments344 = array();
$arguments344['section'] = NULL;
$arguments344['partial'] = NULL;
$arguments344['delegate'] = NULL;
$arguments344['renderable'] = NULL;
$arguments344['arguments'] = array (
);
$arguments344['optional'] = false;
$arguments344['default'] = NULL;
$arguments344['contentAs'] = NULL;
$arguments344['debug'] = true;
$arguments344['partial'] = 'Fields/Country';
$arguments344['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['section'] = NULL;
$arguments347['partial'] = NULL;
$arguments347['delegate'] = NULL;
$arguments347['renderable'] = NULL;
$arguments347['arguments'] = array (
);
$arguments347['optional'] = false;
$arguments347['default'] = NULL;
$arguments347['contentAs'] = NULL;
$arguments347['debug'] = true;
$arguments347['partial'] = 'Fields/Image';
$arguments347['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments350 = array();
$arguments350['section'] = NULL;
$arguments350['partial'] = NULL;
$arguments350['delegate'] = NULL;
$arguments350['renderable'] = NULL;
$arguments350['arguments'] = array (
);
$arguments350['optional'] = false;
$arguments350['default'] = NULL;
$arguments350['contentAs'] = NULL;
$arguments350['debug'] = true;
$arguments350['partial'] = 'Fields/Usergroup';
$arguments350['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['section'] = NULL;
$arguments353['partial'] = NULL;
$arguments353['delegate'] = NULL;
$arguments353['renderable'] = NULL;
$arguments353['arguments'] = array (
);
$arguments353['optional'] = false;
$arguments353['default'] = NULL;
$arguments353['contentAs'] = NULL;
$arguments353['debug'] = true;
$arguments353['partial'] = 'Fields/Terms';
$arguments353['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output365 = '';

$output365 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments366 = array();
$arguments366['section'] = NULL;
$arguments366['partial'] = NULL;
$arguments366['delegate'] = NULL;
$arguments366['renderable'] = NULL;
$arguments366['arguments'] = array (
);
$arguments366['optional'] = false;
$arguments366['default'] = NULL;
$arguments366['contentAs'] = NULL;
$arguments366['debug'] = true;
$arguments366['partial'] = 'Fields/Captcha';
$arguments366['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output365 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output365 .= '
						';
return $output365;
};
$arguments356 = array();
$arguments356['then'] = NULL;
$arguments356['else'] = NULL;
$arguments356['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array358 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments359 = array();
$arguments359['settings'] = NULL;
// Rendering Boolean node
// Rendering Array
$array361 = array();
$array362 = array (
);$array361['0'] = $renderingContext->getVariableProvider()->getByPath('settings', $array362);

$expression363 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments359['settings'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression363(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array361)
					),
					$renderingContext
				);
$array358['0'] = In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$expression364 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments356['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression364(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array358)
					),
					$renderingContext
				);
$arguments356['__thenClosure'] = $renderChildrenClosure357;

$output290 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output290 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['section'] = NULL;
$arguments369['partial'] = NULL;
$arguments369['delegate'] = NULL;
$arguments369['renderable'] = NULL;
$arguments369['arguments'] = array (
);
$arguments369['optional'] = false;
$arguments369['default'] = NULL;
$arguments369['contentAs'] = NULL;
$arguments369['debug'] = true;
$arguments369['partial'] = 'Fields/SubmitCreate';
$arguments369['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output290 .= '
					';
return $output290;
};

$output266 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output266 .= '
			</fieldset>
		';
return $output266;
};
$arguments255 = array();
$arguments255['additionalAttributes'] = NULL;
$arguments255['data'] = NULL;
$arguments255['action'] = NULL;
$arguments255['arguments'] = array (
);
$arguments255['controller'] = NULL;
$arguments255['extensionName'] = NULL;
$arguments255['pluginName'] = NULL;
$arguments255['pageUid'] = NULL;
$arguments255['object'] = NULL;
$arguments255['pageType'] = 0;
$arguments255['noCache'] = false;
$arguments255['noCacheHash'] = false;
$arguments255['section'] = '';
$arguments255['format'] = '';
$arguments255['additionalParams'] = array (
);
$arguments255['absolute'] = false;
$arguments255['addQueryString'] = false;
$arguments255['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments255['addQueryStringMethod'] = 'GET';
$arguments255['fieldNamePrefix'] = NULL;
$arguments255['actionUri'] = NULL;
$arguments255['objectName'] = NULL;
$arguments255['hiddenFieldClassName'] = NULL;
$arguments255['enctype'] = NULL;
$arguments255['method'] = NULL;
$arguments255['name'] = NULL;
$arguments255['onreset'] = NULL;
$arguments255['onsubmit'] = NULL;
$arguments255['target'] = NULL;
$arguments255['novalidate'] = NULL;
$arguments255['class'] = NULL;
$arguments255['dir'] = NULL;
$arguments255['id'] = NULL;
$arguments255['lang'] = NULL;
$arguments255['style'] = NULL;
$arguments255['title'] = NULL;
$arguments255['accesskey'] = NULL;
$arguments255['tabindex'] = NULL;
$arguments255['onclick'] = NULL;
$arguments255['name'] = 'user';
$array257 = array (
);$arguments255['object'] = $renderingContext->getVariableProvider()->getByPath('user', $array257);
$arguments255['action'] = 'create';
$arguments255['enctype'] = 'multipart/form-data';
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['data-femanager-plugin'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array259);
$arguments255['additionalAttributes'] = $array258;
$output260 = '';

$output260 .= 'form-horizontal ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['then'] = NULL;
$arguments261['else'] = NULL;
$arguments261['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array263 = array();
$array264 = array (
);$array263['0'] = $renderingContext->getVariableProvider()->getByPath('settings.new.validation._enable.client', $array264);

$expression265 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments261['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression265(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array263)
					),
					$renderingContext
				);
$arguments261['then'] = 'feManagerValidation';
$arguments261['else'] = '';

$output260 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);
$arguments255['class'] = $output260;

$output244 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output244 .= '
	</div>
';
return $output244;
};
$arguments242 = array();
$arguments242['name'] = NULL;
$arguments242['name'] = 'main';

$output237 .= NULL;

$output237 .= '
';

return $output237;
}


}
#