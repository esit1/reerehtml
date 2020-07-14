<?php

class Administration_action_index_6ea9735408e42daf79d7b97cccc98baf4b630eab extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	<p class="lead">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'administration.index.description';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</p>
	<div class="row">
		<div class="col-md-6">
			<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'administration.statistics.header';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</h4>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['languageKey'] = NULL;
$arguments5['alternativeLanguageKeys'] = NULL;
$arguments5['key'] = 'administration.statistics.name';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$arguments7['key'] = 'administration.statistics.count';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
						<tr>
							<td>';
$array13 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('name', $array13)]);

$output12 .= '</td>
							<td>';
$array14 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count', $array14)]);

$output12 .= '</td>
						</tr>
					';
return $output12;
};
$arguments9 = array();
$arguments9['each'] = NULL;
$arguments9['as'] = NULL;
$arguments9['key'] = NULL;
$arguments9['reverse'] = false;
$arguments9['iteration'] = NULL;
$array11 = array (
);$arguments9['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array11);
$arguments9['as'] = 'count';
$arguments9['key'] = 'name';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['languageKey'] = NULL;
$arguments15['alternativeLanguageKeys'] = NULL;
$arguments15['key'] = 'administration.statistics.headerTypes';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '</h4>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>';
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
$arguments17['key'] = 'administration.statistics.name';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output0 .= '</th>
						<th>';
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
$arguments19['key'] = 'administration.statistics.count';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output0 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
						<tr>
							<td>';
$array25 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.name', $array25)]);

$output24 .= ' (';
$array26 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.type', $array26)]);

$output24 .= ')</td>
							<td>';
$array27 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.count', $array27)]);

$output24 .= ' / ';
$array28 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uniqueCount', $array28)]);

$output24 .= '</td>
						</tr>
					';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('phash', $array23);
$arguments21['as'] = 'data';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
				</tbody>
			</table>
		</div>
	</div>
	<h3>
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
$arguments29['key'] = 'administration.statistics.mostSearched.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output0 .= '
	</h3>
	<p>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['key'] = NULL;
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['languageKey'] = NULL;
$arguments31['alternativeLanguageKeys'] = NULL;
$arguments31['key'] = 'administration.statistics.mostSearched.description';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output0 .= '
	</p>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
					<div class="row">
						<div class="col-md-4">
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
$arguments125['section'] = 'statistic';
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['statistic'] = $renderingContext->getVariableProvider()->getByPath('all', $array128);
$array127['title'] = 'all';
$arguments125['arguments'] = $array127;

$output124 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['section'] = NULL;
$arguments129['partial'] = NULL;
$arguments129['delegate'] = NULL;
$arguments129['renderable'] = NULL;
$arguments129['arguments'] = array (
);
$arguments129['optional'] = false;
$arguments129['default'] = NULL;
$arguments129['contentAs'] = NULL;
$arguments129['debug'] = true;
$arguments129['section'] = 'statistic';
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['statistic'] = $renderingContext->getVariableProvider()->getByPath('last24hours', $array132);
$array131['title'] = 'last24hours';
$arguments129['arguments'] = $array131;

$output124 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output124 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['section'] = NULL;
$arguments133['partial'] = NULL;
$arguments133['delegate'] = NULL;
$arguments133['renderable'] = NULL;
$arguments133['arguments'] = array (
);
$arguments133['optional'] = false;
$arguments133['default'] = NULL;
$arguments133['contentAs'] = NULL;
$arguments133['debug'] = true;
$arguments133['section'] = 'statistic';
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['statistic'] = $renderingContext->getVariableProvider()->getByPath('last30days', $array136);
$array135['title'] = 'last30days';
$arguments133['arguments'] = $array135;

$output124 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output124 .= '
						</div>
					</div>
				';
return $output124;
};
$arguments122 = array();

$output121 .= '';

$output121 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
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
$arguments143['key'] = 'administration.statistics.noResultForPage';

$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output142 .= '
					';
return $output142;
};
$arguments140 = array();
$arguments140['message'] = NULL;
$arguments140['title'] = NULL;
$arguments140['state'] = -2;
$arguments140['iconName'] = NULL;
$arguments140['disableIcon'] = false;
$renderChildrenClosure141 = ($arguments140['message'] !== null) ? function() use ($arguments140) { return $arguments140['message']; } : $renderChildrenClosure141;
$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
				';
return $output139;
};
$arguments137 = array();
$arguments137['if'] = NULL;

$output121 .= '';

$output121 .= '
			';
return $output121;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('all', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments97['__thenClosure'] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
					<div class="row">
						<div class="col-md-4">
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
$arguments100['section'] = 'statistic';
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['statistic'] = $renderingContext->getVariableProvider()->getByPath('all', $array103);
$array102['title'] = 'all';
$arguments100['arguments'] = $array102;

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['section'] = NULL;
$arguments104['partial'] = NULL;
$arguments104['delegate'] = NULL;
$arguments104['renderable'] = NULL;
$arguments104['arguments'] = array (
);
$arguments104['optional'] = false;
$arguments104['default'] = NULL;
$arguments104['contentAs'] = NULL;
$arguments104['debug'] = true;
$arguments104['section'] = 'statistic';
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['statistic'] = $renderingContext->getVariableProvider()->getByPath('last24hours', $array107);
$array106['title'] = 'last24hours';
$arguments104['arguments'] = $array106;

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output99 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['section'] = NULL;
$arguments108['partial'] = NULL;
$arguments108['delegate'] = NULL;
$arguments108['renderable'] = NULL;
$arguments108['arguments'] = array (
);
$arguments108['optional'] = false;
$arguments108['default'] = NULL;
$arguments108['contentAs'] = NULL;
$arguments108['debug'] = true;
$arguments108['section'] = 'statistic';
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['statistic'] = $renderingContext->getVariableProvider()->getByPath('last30days', $array111);
$array110['title'] = 'last30days';
$arguments108['arguments'] = $array110;

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output99 .= '
						</div>
					</div>
				';
return $output99;
};
$arguments97['__elseClosures'][] = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
						';
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
$arguments116['key'] = 'administration.statistics.noResultForPage';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output115 .= '
					';
return $output115;
};
$arguments113 = array();
$arguments113['message'] = NULL;
$arguments113['title'] = NULL;
$arguments113['state'] = -2;
$arguments113['iconName'] = NULL;
$arguments113['disableIcon'] = false;
$renderChildrenClosure114 = ($arguments113['message'] !== null) ? function() use ($arguments113) { return $arguments113['message']; } : $renderChildrenClosure114;
$output112 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
				';
return $output112;
};

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
		';
return $output96;
};
$arguments94 = array();

$output93 .= '';

$output93 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
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
$arguments151['key'] = 'administration.statistics.selectPage';

$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output150 .= '
			';
return $output150;
};
$arguments148 = array();
$arguments148['message'] = NULL;
$arguments148['title'] = NULL;
$arguments148['state'] = -2;
$arguments148['iconName'] = NULL;
$arguments148['disableIcon'] = false;
$arguments148['state'] = -1;
$renderChildrenClosure149 = ($arguments148['message'] !== null) ? function() use ($arguments148) { return $arguments148['message']; } : $renderChildrenClosure149;
$output147 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
		';
return $output147;
};
$arguments145 = array();
$arguments145['if'] = NULL;

$output93 .= '';

$output93 .= '
	';
return $output93;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('pageUid', $array91);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
					<div class="row">
						<div class="col-md-4">
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
$arguments64['section'] = 'statistic';
// Rendering Array
$array66 = array();
$array67 = array (
);$array66['statistic'] = $renderingContext->getVariableProvider()->getByPath('all', $array67);
$array66['title'] = 'all';
$arguments64['arguments'] = $array66;

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['section'] = NULL;
$arguments68['partial'] = NULL;
$arguments68['delegate'] = NULL;
$arguments68['renderable'] = NULL;
$arguments68['arguments'] = array (
);
$arguments68['optional'] = false;
$arguments68['default'] = NULL;
$arguments68['contentAs'] = NULL;
$arguments68['debug'] = true;
$arguments68['section'] = 'statistic';
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['statistic'] = $renderingContext->getVariableProvider()->getByPath('last24hours', $array71);
$array70['title'] = 'last24hours';
$arguments68['arguments'] = $array70;

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output63 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['section'] = NULL;
$arguments72['partial'] = NULL;
$arguments72['delegate'] = NULL;
$arguments72['renderable'] = NULL;
$arguments72['arguments'] = array (
);
$arguments72['optional'] = false;
$arguments72['default'] = NULL;
$arguments72['contentAs'] = NULL;
$arguments72['debug'] = true;
$arguments72['section'] = 'statistic';
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['statistic'] = $renderingContext->getVariableProvider()->getByPath('last30days', $array75);
$array74['title'] = 'last30days';
$arguments72['arguments'] = $array74;

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output63 .= '
						</div>
					</div>
				';
return $output63;
};
$arguments61 = array();

$output60 .= '';

$output60 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['languageKey'] = NULL;
$arguments82['alternativeLanguageKeys'] = NULL;
$arguments82['key'] = 'administration.statistics.noResultForPage';

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output81 .= '
					';
return $output81;
};
$arguments79 = array();
$arguments79['message'] = NULL;
$arguments79['title'] = NULL;
$arguments79['state'] = -2;
$arguments79['iconName'] = NULL;
$arguments79['disableIcon'] = false;
$renderChildrenClosure80 = ($arguments79['message'] !== null) ? function() use ($arguments79) { return $arguments79['message']; } : $renderChildrenClosure80;
$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
				';
return $output78;
};
$arguments76 = array();
$arguments76['if'] = NULL;

$output60 .= '';

$output60 .= '
			';
return $output60;
};
$arguments36 = array();
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['0'] = $renderingContext->getVariableProvider()->getByPath('all', $array58);

$expression59 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments36['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$arguments36['__thenClosure'] = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['section'] = NULL;
$arguments39['partial'] = NULL;
$arguments39['delegate'] = NULL;
$arguments39['renderable'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['optional'] = false;
$arguments39['default'] = NULL;
$arguments39['contentAs'] = NULL;
$arguments39['debug'] = true;
$arguments39['section'] = 'statistic';
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['statistic'] = $renderingContext->getVariableProvider()->getByPath('all', $array42);
$array41['title'] = 'all';
$arguments39['arguments'] = $array41;

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
						</div>
						<div class="col-md-4">
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
$arguments43['section'] = 'statistic';
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['statistic'] = $renderingContext->getVariableProvider()->getByPath('last24hours', $array46);
$array45['title'] = 'last24hours';
$arguments43['arguments'] = $array45;

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output38 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['section'] = NULL;
$arguments47['partial'] = NULL;
$arguments47['delegate'] = NULL;
$arguments47['renderable'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['optional'] = false;
$arguments47['default'] = NULL;
$arguments47['contentAs'] = NULL;
$arguments47['debug'] = true;
$arguments47['section'] = 'statistic';
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['statistic'] = $renderingContext->getVariableProvider()->getByPath('last30days', $array50);
$array49['title'] = 'last30days';
$arguments47['arguments'] = $array49;

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output38 .= '
						</div>
					</div>
				';
return $output38;
};
$arguments36['__elseClosures'][] = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
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
$arguments55['key'] = 'administration.statistics.noResultForPage';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output54 .= '
					';
return $output54;
};
$arguments52 = array();
$arguments52['message'] = NULL;
$arguments52['title'] = NULL;
$arguments52['state'] = -2;
$arguments52['iconName'] = NULL;
$arguments52['disableIcon'] = false;
$renderChildrenClosure53 = ($arguments52['message'] !== null) ? function() use ($arguments52) { return $arguments52['message']; } : $renderChildrenClosure53;
$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
				';
return $output51;
};

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
		';
return $output35;
};
$arguments33['__elseClosures'][] = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['key'] = NULL;
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['languageKey'] = NULL;
$arguments88['alternativeLanguageKeys'] = NULL;
$arguments88['key'] = 'administration.statistics.selectPage';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output87 .= '
			';
return $output87;
};
$arguments85 = array();
$arguments85['message'] = NULL;
$arguments85['title'] = NULL;
$arguments85['state'] = -2;
$arguments85['iconName'] = NULL;
$arguments85['disableIcon'] = false;
$arguments85['state'] = -1;
$renderChildrenClosure86 = ($arguments85['message'] !== null) ? function() use ($arguments85) { return $arguments85['message']; } : $renderChildrenClosure86;
$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
		';
return $output84;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * section statistic
 */
public function section_b482dfd7888552644911ba741a53cee27e9d364d(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output153 = '';

$output153 .= '

	<h4>
		';
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
$output156 = '';

$output156 .= 'administration.statistics.mostSearched.';
$array157 = array (
);
$output156 .= $renderingContext->getVariableProvider()->getByPath('title', $array157);
$arguments154['key'] = $output156;

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext)]);

$output153 .= '
	</h4>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="nowrap">&nbsp;</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['key'] = NULL;
$arguments185['id'] = NULL;
$arguments185['default'] = NULL;
$arguments185['arguments'] = NULL;
$arguments185['extensionName'] = NULL;
$arguments185['languageKey'] = NULL;
$arguments185['alternativeLanguageKeys'] = NULL;
$arguments185['key'] = 'administration.statistics.word';

$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext)]);

$output184 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['key'] = NULL;
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$arguments187['languageKey'] = NULL;
$arguments187['alternativeLanguageKeys'] = NULL;
$arguments187['key'] = 'administration.statistics.count';

$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext)]);

$output184 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
						<tr>
							<td class="nowrap"><strong>';
$array193 = array (
);
$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('i.cycle', $array193)]);

$output192 .= '.</strong></td>
							<td>';
$array194 = array (
);
$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.word', $array194)]);

$output192 .= '</td>
							<td>';
$array195 = array (
);
$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.c', $array195)]);

$output192 .= '</td>
						</tr>
					';
return $output192;
};
$arguments189 = array();
$arguments189['each'] = NULL;
$arguments189['as'] = NULL;
$arguments189['key'] = NULL;
$arguments189['reverse'] = false;
$arguments189['iteration'] = NULL;
$array191 = array (
);$arguments189['each'] = $renderingContext->getVariableProvider()->getByPath('statistic', $array191);
$arguments189['as'] = 'line';
$arguments189['iteration'] = 'i';

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output184 .= '
				</tbody>
			</table>
		';
return $output184;
};
$arguments182 = array();

$output181 .= '';

$output181 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
				';
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
$arguments202['key'] = 'administration.statistics.noResult';

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext)]);

$output201 .= '
			';
return $output201;
};
$arguments199 = array();
$arguments199['message'] = NULL;
$arguments199['title'] = NULL;
$arguments199['state'] = -2;
$arguments199['iconName'] = NULL;
$arguments199['disableIcon'] = false;
$arguments199['state'] = 2;
$renderChildrenClosure200 = ($arguments199['message'] !== null) ? function() use ($arguments199) { return $arguments199['message']; } : $renderChildrenClosure200;
$output198 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
		';
return $output198;
};
$arguments196 = array();
$arguments196['if'] = NULL;

$output181 .= '';

$output181 .= '
	';
return $output181;
};
$arguments158 = array();
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$arguments158['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('statistic', $array179);

$expression180 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments158['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments158['__thenClosure'] = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="nowrap">&nbsp;</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['key'] = NULL;
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$arguments161['languageKey'] = NULL;
$arguments161['alternativeLanguageKeys'] = NULL;
$arguments161['key'] = 'administration.statistics.word';

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output160 .= '</th>
						<th>';
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
$arguments163['key'] = 'administration.statistics.count';

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext)]);

$output160 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
						<tr>
							<td class="nowrap"><strong>';
$array169 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('i.cycle', $array169)]);

$output168 .= '.</strong></td>
							<td>';
$array170 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.word', $array170)]);

$output168 .= '</td>
							<td>';
$array171 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.c', $array171)]);

$output168 .= '</td>
						</tr>
					';
return $output168;
};
$arguments165 = array();
$arguments165['each'] = NULL;
$arguments165['as'] = NULL;
$arguments165['key'] = NULL;
$arguments165['reverse'] = false;
$arguments165['iteration'] = NULL;
$array167 = array (
);$arguments165['each'] = $renderingContext->getVariableProvider()->getByPath('statistic', $array167);
$arguments165['as'] = 'line';
$arguments165['iteration'] = 'i';

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output160 .= '
				</tbody>
			</table>
		';
return $output160;
};
$arguments158['__elseClosures'][] = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['key'] = NULL;
$arguments176['id'] = NULL;
$arguments176['default'] = NULL;
$arguments176['arguments'] = NULL;
$arguments176['extensionName'] = NULL;
$arguments176['languageKey'] = NULL;
$arguments176['alternativeLanguageKeys'] = NULL;
$arguments176['key'] = 'administration.statistics.noResult';

$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext)]);

$output175 .= '
			';
return $output175;
};
$arguments173 = array();
$arguments173['message'] = NULL;
$arguments173['title'] = NULL;
$arguments173['state'] = -2;
$arguments173['iconName'] = NULL;
$arguments173['disableIcon'] = false;
$arguments173['state'] = 2;
$renderChildrenClosure174 = ($arguments173['message'] !== null) ? function() use ($arguments173) { return $arguments173['message']; } : $renderChildrenClosure174;
$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
		';
return $output172;
};

$output153 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output153 .= '

';

return $output153;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output204 = '';

$output204 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['name'] = NULL;
$arguments205['name'] = 'Administration';

$output204 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output204 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '

	<p class="lead">';
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
$arguments210['key'] = 'administration.index.description';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output209 .= '</p>
	<div class="row">
		<div class="col-md-6">
			<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['key'] = NULL;
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$arguments212['languageKey'] = NULL;
$arguments212['alternativeLanguageKeys'] = NULL;
$arguments212['key'] = 'administration.statistics.header';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext)]);

$output209 .= '</h4>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['key'] = NULL;
$arguments214['id'] = NULL;
$arguments214['default'] = NULL;
$arguments214['arguments'] = NULL;
$arguments214['extensionName'] = NULL;
$arguments214['languageKey'] = NULL;
$arguments214['alternativeLanguageKeys'] = NULL;
$arguments214['key'] = 'administration.statistics.name';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext)]);

$output209 .= '</th>
						<th>';
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
$arguments216['key'] = 'administration.statistics.count';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext)]);

$output209 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
						<tr>
							<td>';
$array222 = array (
);
$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('name', $array222)]);

$output221 .= '</td>
							<td>';
$array223 = array (
);
$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count', $array223)]);

$output221 .= '</td>
						</tr>
					';
return $output221;
};
$arguments218 = array();
$arguments218['each'] = NULL;
$arguments218['as'] = NULL;
$arguments218['key'] = NULL;
$arguments218['reverse'] = false;
$arguments218['iteration'] = NULL;
$array220 = array (
);$arguments218['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array220);
$arguments218['as'] = 'count';
$arguments218['key'] = 'name';

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output209 .= '
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['key'] = NULL;
$arguments224['id'] = NULL;
$arguments224['default'] = NULL;
$arguments224['arguments'] = NULL;
$arguments224['extensionName'] = NULL;
$arguments224['languageKey'] = NULL;
$arguments224['alternativeLanguageKeys'] = NULL;
$arguments224['key'] = 'administration.statistics.headerTypes';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext)]);

$output209 .= '</h4>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>';
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
$arguments226['key'] = 'administration.statistics.name';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext)]);

$output209 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['key'] = NULL;
$arguments228['id'] = NULL;
$arguments228['default'] = NULL;
$arguments228['arguments'] = NULL;
$arguments228['extensionName'] = NULL;
$arguments228['languageKey'] = NULL;
$arguments228['alternativeLanguageKeys'] = NULL;
$arguments228['key'] = 'administration.statistics.count';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext)]);

$output209 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
						<tr>
							<td>';
$array234 = array (
);
$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.name', $array234)]);

$output233 .= ' (';
$array235 = array (
);
$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.type', $array235)]);

$output233 .= ')</td>
							<td>';
$array236 = array (
);
$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.count', $array236)]);

$output233 .= ' / ';
$array237 = array (
);
$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uniqueCount', $array237)]);

$output233 .= '</td>
						</tr>
					';
return $output233;
};
$arguments230 = array();
$arguments230['each'] = NULL;
$arguments230['as'] = NULL;
$arguments230['key'] = NULL;
$arguments230['reverse'] = false;
$arguments230['iteration'] = NULL;
$array232 = array (
);$arguments230['each'] = $renderingContext->getVariableProvider()->getByPath('phash', $array232);
$arguments230['as'] = 'data';

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output209 .= '
				</tbody>
			</table>
		</div>
	</div>
	<h3>
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
$arguments238['key'] = 'administration.statistics.mostSearched.title';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext)]);

$output209 .= '
	</h3>
	<p>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['key'] = NULL;
$arguments240['id'] = NULL;
$arguments240['default'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['extensionName'] = NULL;
$arguments240['languageKey'] = NULL;
$arguments240['alternativeLanguageKeys'] = NULL;
$arguments240['key'] = 'administration.statistics.mostSearched.description';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);

$output209 .= '
	</p>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['section'] = NULL;
$arguments334['partial'] = NULL;
$arguments334['delegate'] = NULL;
$arguments334['renderable'] = NULL;
$arguments334['arguments'] = array (
);
$arguments334['optional'] = false;
$arguments334['default'] = NULL;
$arguments334['contentAs'] = NULL;
$arguments334['debug'] = true;
$arguments334['section'] = 'statistic';
// Rendering Array
$array336 = array();
$array337 = array (
);$array336['statistic'] = $renderingContext->getVariableProvider()->getByPath('all', $array337);
$array336['title'] = 'all';
$arguments334['arguments'] = $array336;

$output333 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output333 .= '
						</div>
						<div class="col-md-4">
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
$arguments338['section'] = 'statistic';
// Rendering Array
$array340 = array();
$array341 = array (
);$array340['statistic'] = $renderingContext->getVariableProvider()->getByPath('last24hours', $array341);
$array340['title'] = 'last24hours';
$arguments338['arguments'] = $array340;

$output333 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output333 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments342 = array();
$arguments342['section'] = NULL;
$arguments342['partial'] = NULL;
$arguments342['delegate'] = NULL;
$arguments342['renderable'] = NULL;
$arguments342['arguments'] = array (
);
$arguments342['optional'] = false;
$arguments342['default'] = NULL;
$arguments342['contentAs'] = NULL;
$arguments342['debug'] = true;
$arguments342['section'] = 'statistic';
// Rendering Array
$array344 = array();
$array345 = array (
);$array344['statistic'] = $renderingContext->getVariableProvider()->getByPath('last30days', $array345);
$array344['title'] = 'last30days';
$arguments342['arguments'] = $array344;

$output333 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);

$output333 .= '
						</div>
					</div>
				';
return $output333;
};
$arguments331 = array();

$output330 .= '';

$output330 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$output351 = '';

$output351 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments352 = array();
$arguments352['key'] = NULL;
$arguments352['id'] = NULL;
$arguments352['default'] = NULL;
$arguments352['arguments'] = NULL;
$arguments352['extensionName'] = NULL;
$arguments352['languageKey'] = NULL;
$arguments352['alternativeLanguageKeys'] = NULL;
$arguments352['key'] = 'administration.statistics.noResultForPage';

$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext)]);

$output351 .= '
					';
return $output351;
};
$arguments349 = array();
$arguments349['message'] = NULL;
$arguments349['title'] = NULL;
$arguments349['state'] = -2;
$arguments349['iconName'] = NULL;
$arguments349['disableIcon'] = false;
$renderChildrenClosure350 = ($arguments349['message'] !== null) ? function() use ($arguments349) { return $arguments349['message']; } : $renderChildrenClosure350;
$output348 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '
				';
return $output348;
};
$arguments346 = array();
$arguments346['if'] = NULL;

$output330 .= '';

$output330 .= '
			';
return $output330;
};
$arguments306 = array();
$arguments306['then'] = NULL;
$arguments306['else'] = NULL;
$arguments306['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array327 = array();
$array328 = array (
);$array327['0'] = $renderingContext->getVariableProvider()->getByPath('all', $array328);

$expression329 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments306['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression329(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array327)
					),
					$renderingContext
				);
$arguments306['__thenClosure'] = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments309 = array();
$arguments309['section'] = NULL;
$arguments309['partial'] = NULL;
$arguments309['delegate'] = NULL;
$arguments309['renderable'] = NULL;
$arguments309['arguments'] = array (
);
$arguments309['optional'] = false;
$arguments309['default'] = NULL;
$arguments309['contentAs'] = NULL;
$arguments309['debug'] = true;
$arguments309['section'] = 'statistic';
// Rendering Array
$array311 = array();
$array312 = array (
);$array311['statistic'] = $renderingContext->getVariableProvider()->getByPath('all', $array312);
$array311['title'] = 'all';
$arguments309['arguments'] = $array311;

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['section'] = NULL;
$arguments313['partial'] = NULL;
$arguments313['delegate'] = NULL;
$arguments313['renderable'] = NULL;
$arguments313['arguments'] = array (
);
$arguments313['optional'] = false;
$arguments313['default'] = NULL;
$arguments313['contentAs'] = NULL;
$arguments313['debug'] = true;
$arguments313['section'] = 'statistic';
// Rendering Array
$array315 = array();
$array316 = array (
);$array315['statistic'] = $renderingContext->getVariableProvider()->getByPath('last24hours', $array316);
$array315['title'] = 'last24hours';
$arguments313['arguments'] = $array315;

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output308 .= '
						</div>
						<div class="col-md-4">
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
$arguments317['section'] = 'statistic';
// Rendering Array
$array319 = array();
$array320 = array (
);$array319['statistic'] = $renderingContext->getVariableProvider()->getByPath('last30days', $array320);
$array319['title'] = 'last30days';
$arguments317['arguments'] = $array319;

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output308 .= '
						</div>
					</div>
				';
return $output308;
};
$arguments306['__elseClosures'][] = function() use ($renderingContext, $self) {
$output321 = '';

$output321 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
						';
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
$arguments325['key'] = 'administration.statistics.noResultForPage';

$output324 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext)]);

$output324 .= '
					';
return $output324;
};
$arguments322 = array();
$arguments322['message'] = NULL;
$arguments322['title'] = NULL;
$arguments322['state'] = -2;
$arguments322['iconName'] = NULL;
$arguments322['disableIcon'] = false;
$renderChildrenClosure323 = ($arguments322['message'] !== null) ? function() use ($arguments322) { return $arguments322['message']; } : $renderChildrenClosure323;
$output321 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output321 .= '
				';
return $output321;
};

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '
		';
return $output305;
};
$arguments303 = array();

$output302 .= '';

$output302 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
				';
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
$arguments360['key'] = 'administration.statistics.selectPage';

$output359 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext)]);

$output359 .= '
			';
return $output359;
};
$arguments357 = array();
$arguments357['message'] = NULL;
$arguments357['title'] = NULL;
$arguments357['state'] = -2;
$arguments357['iconName'] = NULL;
$arguments357['disableIcon'] = false;
$arguments357['state'] = -1;
$renderChildrenClosure358 = ($arguments357['message'] !== null) ? function() use ($arguments357) { return $arguments357['message']; } : $renderChildrenClosure358;
$output356 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output356 .= '
		';
return $output356;
};
$arguments354 = array();
$arguments354['if'] = NULL;

$output302 .= '';

$output302 .= '
	';
return $output302;
};
$arguments242 = array();
$arguments242['then'] = NULL;
$arguments242['else'] = NULL;
$arguments242['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array299 = array();
$array300 = array (
);$array299['0'] = $renderingContext->getVariableProvider()->getByPath('pageUid', $array300);

$expression301 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments242['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression301(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array299)
					),
					$renderingContext
				);
$arguments242['__thenClosure'] = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
					<div class="row">
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['section'] = NULL;
$arguments273['partial'] = NULL;
$arguments273['delegate'] = NULL;
$arguments273['renderable'] = NULL;
$arguments273['arguments'] = array (
);
$arguments273['optional'] = false;
$arguments273['default'] = NULL;
$arguments273['contentAs'] = NULL;
$arguments273['debug'] = true;
$arguments273['section'] = 'statistic';
// Rendering Array
$array275 = array();
$array276 = array (
);$array275['statistic'] = $renderingContext->getVariableProvider()->getByPath('all', $array276);
$array275['title'] = 'all';
$arguments273['arguments'] = $array275;

$output272 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output272 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['section'] = NULL;
$arguments277['partial'] = NULL;
$arguments277['delegate'] = NULL;
$arguments277['renderable'] = NULL;
$arguments277['arguments'] = array (
);
$arguments277['optional'] = false;
$arguments277['default'] = NULL;
$arguments277['contentAs'] = NULL;
$arguments277['debug'] = true;
$arguments277['section'] = 'statistic';
// Rendering Array
$array279 = array();
$array280 = array (
);$array279['statistic'] = $renderingContext->getVariableProvider()->getByPath('last24hours', $array280);
$array279['title'] = 'last24hours';
$arguments277['arguments'] = $array279;

$output272 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output272 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['section'] = NULL;
$arguments281['partial'] = NULL;
$arguments281['delegate'] = NULL;
$arguments281['renderable'] = NULL;
$arguments281['arguments'] = array (
);
$arguments281['optional'] = false;
$arguments281['default'] = NULL;
$arguments281['contentAs'] = NULL;
$arguments281['debug'] = true;
$arguments281['section'] = 'statistic';
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['statistic'] = $renderingContext->getVariableProvider()->getByPath('last30days', $array284);
$array283['title'] = 'last30days';
$arguments281['arguments'] = $array283;

$output272 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output272 .= '
						</div>
					</div>
				';
return $output272;
};
$arguments270 = array();

$output269 .= '';

$output269 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
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
$arguments291['key'] = 'administration.statistics.noResultForPage';

$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext)]);

$output290 .= '
					';
return $output290;
};
$arguments288 = array();
$arguments288['message'] = NULL;
$arguments288['title'] = NULL;
$arguments288['state'] = -2;
$arguments288['iconName'] = NULL;
$arguments288['disableIcon'] = false;
$renderChildrenClosure289 = ($arguments288['message'] !== null) ? function() use ($arguments288) { return $arguments288['message']; } : $renderChildrenClosure289;
$output287 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
				';
return $output287;
};
$arguments285 = array();
$arguments285['if'] = NULL;

$output269 .= '';

$output269 .= '
			';
return $output269;
};
$arguments245 = array();
$arguments245['then'] = NULL;
$arguments245['else'] = NULL;
$arguments245['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array266 = array();
$array267 = array (
);$array266['0'] = $renderingContext->getVariableProvider()->getByPath('all', $array267);

$expression268 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments245['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression268(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array266)
					),
					$renderingContext
				);
$arguments245['__thenClosure'] = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
					<div class="row">
						<div class="col-md-4">
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
$arguments248['section'] = 'statistic';
// Rendering Array
$array250 = array();
$array251 = array (
);$array250['statistic'] = $renderingContext->getVariableProvider()->getByPath('all', $array251);
$array250['title'] = 'all';
$arguments248['arguments'] = $array250;

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output247 .= '
						</div>
						<div class="col-md-4">
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
$arguments252['section'] = 'statistic';
// Rendering Array
$array254 = array();
$array255 = array (
);$array254['statistic'] = $renderingContext->getVariableProvider()->getByPath('last24hours', $array255);
$array254['title'] = 'last24hours';
$arguments252['arguments'] = $array254;

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output247 .= '
						</div>
						<div class="col-md-4">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['section'] = NULL;
$arguments256['partial'] = NULL;
$arguments256['delegate'] = NULL;
$arguments256['renderable'] = NULL;
$arguments256['arguments'] = array (
);
$arguments256['optional'] = false;
$arguments256['default'] = NULL;
$arguments256['contentAs'] = NULL;
$arguments256['debug'] = true;
$arguments256['section'] = 'statistic';
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['statistic'] = $renderingContext->getVariableProvider()->getByPath('last30days', $array259);
$array258['title'] = 'last30days';
$arguments256['arguments'] = $array258;

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output247 .= '
						</div>
					</div>
				';
return $output247;
};
$arguments245['__elseClosures'][] = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
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
$arguments264['key'] = 'administration.statistics.noResultForPage';

$output263 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext)]);

$output263 .= '
					';
return $output263;
};
$arguments261 = array();
$arguments261['message'] = NULL;
$arguments261['title'] = NULL;
$arguments261['state'] = -2;
$arguments261['iconName'] = NULL;
$arguments261['disableIcon'] = false;
$renderChildrenClosure262 = ($arguments261['message'] !== null) ? function() use ($arguments261) { return $arguments261['message']; } : $renderChildrenClosure262;
$output260 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
				';
return $output260;
};

$output244 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output244 .= '
		';
return $output244;
};
$arguments242['__elseClosures'][] = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
				';
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
$arguments297['key'] = 'administration.statistics.selectPage';

$output296 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext)]);

$output296 .= '
			';
return $output296;
};
$arguments294 = array();
$arguments294['message'] = NULL;
$arguments294['title'] = NULL;
$arguments294['state'] = -2;
$arguments294['iconName'] = NULL;
$arguments294['disableIcon'] = false;
$arguments294['state'] = -1;
$renderChildrenClosure295 = ($arguments294['message'] !== null) ? function() use ($arguments294) { return $arguments294['message']; } : $renderChildrenClosure295;
$output293 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '
		';
return $output293;
};

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output209 .= '

';
return $output209;
};
$arguments207 = array();
$arguments207['name'] = NULL;
$arguments207['name'] = 'Content';

$output204 .= NULL;

$output204 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '

	<h4>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['key'] = NULL;
$arguments365['id'] = NULL;
$arguments365['default'] = NULL;
$arguments365['arguments'] = NULL;
$arguments365['extensionName'] = NULL;
$arguments365['languageKey'] = NULL;
$arguments365['alternativeLanguageKeys'] = NULL;
$output367 = '';

$output367 .= 'administration.statistics.mostSearched.';
$array368 = array (
);
$output367 .= $renderingContext->getVariableProvider()->getByPath('title', $array368);
$arguments365['key'] = $output367;

$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext)]);

$output364 .= '
	</h4>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$output392 = '';

$output392 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="nowrap">&nbsp;</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['key'] = NULL;
$arguments396['id'] = NULL;
$arguments396['default'] = NULL;
$arguments396['arguments'] = NULL;
$arguments396['extensionName'] = NULL;
$arguments396['languageKey'] = NULL;
$arguments396['alternativeLanguageKeys'] = NULL;
$arguments396['key'] = 'administration.statistics.word';

$output395 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext)]);

$output395 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments398 = array();
$arguments398['key'] = NULL;
$arguments398['id'] = NULL;
$arguments398['default'] = NULL;
$arguments398['arguments'] = NULL;
$arguments398['extensionName'] = NULL;
$arguments398['languageKey'] = NULL;
$arguments398['alternativeLanguageKeys'] = NULL;
$arguments398['key'] = 'administration.statistics.count';

$output395 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext)]);

$output395 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
$output403 = '';

$output403 .= '
						<tr>
							<td class="nowrap"><strong>';
$array404 = array (
);
$output403 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('i.cycle', $array404)]);

$output403 .= '.</strong></td>
							<td>';
$array405 = array (
);
$output403 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.word', $array405)]);

$output403 .= '</td>
							<td>';
$array406 = array (
);
$output403 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.c', $array406)]);

$output403 .= '</td>
						</tr>
					';
return $output403;
};
$arguments400 = array();
$arguments400['each'] = NULL;
$arguments400['as'] = NULL;
$arguments400['key'] = NULL;
$arguments400['reverse'] = false;
$arguments400['iteration'] = NULL;
$array402 = array (
);$arguments400['each'] = $renderingContext->getVariableProvider()->getByPath('statistic', $array402);
$arguments400['as'] = 'line';
$arguments400['iteration'] = 'i';

$output395 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output395 .= '
				</tbody>
			</table>
		';
return $output395;
};
$arguments393 = array();

$output392 .= '';

$output392 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
$output409 = '';

$output409 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
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
$arguments413['key'] = 'administration.statistics.noResult';

$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext)]);

$output412 .= '
			';
return $output412;
};
$arguments410 = array();
$arguments410['message'] = NULL;
$arguments410['title'] = NULL;
$arguments410['state'] = -2;
$arguments410['iconName'] = NULL;
$arguments410['disableIcon'] = false;
$arguments410['state'] = 2;
$renderChildrenClosure411 = ($arguments410['message'] !== null) ? function() use ($arguments410) { return $arguments410['message']; } : $renderChildrenClosure411;
$output409 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output409 .= '
		';
return $output409;
};
$arguments407 = array();
$arguments407['if'] = NULL;

$output392 .= '';

$output392 .= '
	';
return $output392;
};
$arguments369 = array();
$arguments369['then'] = NULL;
$arguments369['else'] = NULL;
$arguments369['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array389 = array();
$array390 = array (
);$array389['0'] = $renderingContext->getVariableProvider()->getByPath('statistic', $array390);

$expression391 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments369['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression391(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array389)
					),
					$renderingContext
				);
$arguments369['__thenClosure'] = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="nowrap">&nbsp;</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments372 = array();
$arguments372['key'] = NULL;
$arguments372['id'] = NULL;
$arguments372['default'] = NULL;
$arguments372['arguments'] = NULL;
$arguments372['extensionName'] = NULL;
$arguments372['languageKey'] = NULL;
$arguments372['alternativeLanguageKeys'] = NULL;
$arguments372['key'] = 'administration.statistics.word';

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext)]);

$output371 .= '</th>
						<th>';
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

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext)]);

$output371 .= '</th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output379 = '';

$output379 .= '
						<tr>
							<td class="nowrap"><strong>';
$array380 = array (
);
$output379 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('i.cycle', $array380)]);

$output379 .= '.</strong></td>
							<td>';
$array381 = array (
);
$output379 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.word', $array381)]);

$output379 .= '</td>
							<td>';
$array382 = array (
);
$output379 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.c', $array382)]);

$output379 .= '</td>
						</tr>
					';
return $output379;
};
$arguments376 = array();
$arguments376['each'] = NULL;
$arguments376['as'] = NULL;
$arguments376['key'] = NULL;
$arguments376['reverse'] = false;
$arguments376['iteration'] = NULL;
$array378 = array (
);$arguments376['each'] = $renderingContext->getVariableProvider()->getByPath('statistic', $array378);
$arguments376['as'] = 'line';
$arguments376['iteration'] = 'i';

$output371 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output371 .= '
				</tbody>
			</table>
		';
return $output371;
};
$arguments369['__elseClosures'][] = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments387 = array();
$arguments387['key'] = NULL;
$arguments387['id'] = NULL;
$arguments387['default'] = NULL;
$arguments387['arguments'] = NULL;
$arguments387['extensionName'] = NULL;
$arguments387['languageKey'] = NULL;
$arguments387['alternativeLanguageKeys'] = NULL;
$arguments387['key'] = 'administration.statistics.noResult';

$output386 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext)]);

$output386 .= '
			';
return $output386;
};
$arguments384 = array();
$arguments384['message'] = NULL;
$arguments384['title'] = NULL;
$arguments384['state'] = -2;
$arguments384['iconName'] = NULL;
$arguments384['disableIcon'] = false;
$arguments384['state'] = 2;
$renderChildrenClosure385 = ($arguments384['message'] !== null) ? function() use ($arguments384) { return $arguments384['message']; } : $renderChildrenClosure385;
$output383 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output383 .= '
		';
return $output383;
};

$output364 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output364 .= '

';
return $output364;
};
$arguments362 = array();
$arguments362['name'] = NULL;
$arguments362['name'] = 'statistic';

$output204 .= NULL;

$output204 .= '

';

return $output204;
}


}
#