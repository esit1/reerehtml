<?php

class News_action_detail_b88f6da24165e4b7eb087f17679b3e3c9197fbd6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Detail';
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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['newsItem'] = NULL;
$array12 = array (
);$arguments10['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array12);

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output9 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
					';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array41 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array41);
};
$arguments39 = array();
$arguments39['value'] = NULL;
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$renderChildrenClosure40 = ($arguments39['value'] !== null) ? function() use ($arguments39) { return $arguments39['value']; } : $renderChildrenClosure40;
$output38 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
					';
return $output38;
};
$arguments36 = array();

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output35 .= '
				';
return $output35;
};
$arguments33 = array();

$output32 .= '';

$output32 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
					';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array50);
};
$arguments48 = array();
$arguments48['value'] = NULL;
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$renderChildrenClosure49 = ($arguments48['value'] !== null) ? function() use ($arguments48) { return $arguments48['value']; } : $renderChildrenClosure49;
$output47 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
					';
return $output47;
};
$arguments45 = array();

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= '
				';
return $output44;
};
$arguments42 = array();
$arguments42['if'] = NULL;

$output32 .= '';

$output32 .= '
			';
return $output32;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
					';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$array21 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array21);
};
$arguments19 = array();
$arguments19['value'] = NULL;
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = NULL;
$renderChildrenClosure20 = ($arguments19['value'] !== null) ? function() use ($arguments19) { return $arguments19['value']; } : $renderChildrenClosure20;
$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
					';
return $output18;
};
$arguments16 = array();

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output15 .= '
				';
return $output15;
};
$arguments13['__elseClosures'][] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
					';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array28 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array28);
};
$arguments26 = array();
$arguments26['value'] = NULL;
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = NULL;
$renderChildrenClosure27 = ($arguments26['value'] !== null) ? function() use ($arguments26) { return $arguments26['value']; } : $renderChildrenClosure27;
$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
					';
return $output25;
};
$arguments23 = array();

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '
				';
return $output22;
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output9 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['section'] = NULL;
$arguments57['partial'] = NULL;
$arguments57['delegate'] = NULL;
$arguments57['renderable'] = NULL;
$arguments57['arguments'] = array (
);
$arguments57['optional'] = false;
$arguments57['default'] = NULL;
$arguments57['contentAs'] = NULL;
$arguments57['debug'] = true;
$arguments57['partial'] = 'Detail/Opengraph';
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array60);
$array61 = array (
);$array59['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array61);
$arguments57['arguments'] = $array59;

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
			';
return $output56;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showMetaTags', $array54);

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = $renderChildrenClosure52;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output9 .= '
		';
return $output9;
};
$arguments7 = array();

$output6 .= GeorgRinger\News\ViewHelpers\Format\NothingViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
					<ul class="pager">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
							<li class="previous">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
									<span aria-hidden="true">&larr; </span>';
$array90 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.prev.title', $array90)]);

$output89 .= '
								';
return $output89;
};
$arguments85 = array();
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['newsItem'] = NULL;
$arguments85['settings'] = array (
);
$arguments85['uriOnly'] = false;
$arguments85['configuration'] = array (
);
$arguments85['content'] = '';
$arguments85['section'] = NULL;
$array87 = array (
);$arguments85['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array87);
$array88 = array (
);$arguments85['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array88);

$output84 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
							</li>
						';
return $output84;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array82);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = $renderChildrenClosure80;

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
							<li class="next">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
									';
$array102 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.next.title', $array102)]);

$output101 .= ' <span aria-hidden="true"> &rarr;</span>
								';
return $output101;
};
$arguments97 = array();
$arguments97['additionalAttributes'] = NULL;
$arguments97['data'] = NULL;
$arguments97['class'] = NULL;
$arguments97['dir'] = NULL;
$arguments97['id'] = NULL;
$arguments97['lang'] = NULL;
$arguments97['style'] = NULL;
$arguments97['title'] = NULL;
$arguments97['accesskey'] = NULL;
$arguments97['tabindex'] = NULL;
$arguments97['onclick'] = NULL;
$arguments97['newsItem'] = NULL;
$arguments97['settings'] = array (
);
$arguments97['uriOnly'] = false;
$arguments97['configuration'] = array (
);
$arguments97['content'] = '';
$arguments97['section'] = NULL;
$array99 = array (
);$arguments97['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array99);
$array100 = array (
);$arguments97['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array100);
$arguments97['class'] = 'next';

$output96 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
							</li>
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
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array94);

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output78 .= '
					</ul>
				';
return $output78;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('paginated', $array76);

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = $renderChildrenClosure74;

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
			';
return $output72;
};
$arguments68 = array();
$arguments68['news'] = NULL;
$arguments68['pidList'] = '';
$arguments68['sortField'] = 'datetime';
$arguments68['as'] = NULL;
$arguments68['includeInternalType'] = NULL;
$arguments68['includeExternalType'] = NULL;
$array70 = array (
);$arguments68['pidList'] = $renderingContext->getVariableProvider()->getByPath('newsItem.pid', $array70);
$array71 = array (
);$arguments68['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array71);
$arguments68['as'] = 'paginated';
$arguments68['sortField'] = 'datetime';

$output67 .= GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
		';
return $output67;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showPrevNext', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output6 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['section'] = NULL;
$arguments140['partial'] = NULL;
$arguments140['delegate'] = NULL;
$arguments140['renderable'] = NULL;
$arguments140['arguments'] = array (
);
$arguments140['optional'] = false;
$arguments140['default'] = NULL;
$arguments140['contentAs'] = NULL;
$arguments140['debug'] = true;
$arguments140['section'] = 'headline';
$arguments140['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
				<div class="row">
					<div class="col-md-8">
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
$arguments143['section'] = 'inner-content';
$arguments143['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output139 .= '
					</div>
					<div class="col-md-4">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
							<div class="thumbnail">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['additionalAttributes'] = NULL;
$arguments150['data'] = NULL;
$arguments150['class'] = NULL;
$arguments150['dir'] = NULL;
$arguments150['id'] = NULL;
$arguments150['lang'] = NULL;
$arguments150['style'] = NULL;
$arguments150['title'] = NULL;
$arguments150['accesskey'] = NULL;
$arguments150['tabindex'] = NULL;
$arguments150['onclick'] = NULL;
$arguments150['alt'] = NULL;
$arguments150['file'] = NULL;
$arguments150['additionalConfig'] = array (
);
$arguments150['width'] = NULL;
$arguments150['height'] = NULL;
$arguments150['cropVariant'] = 'default';
$array152 = array (
);$arguments150['file'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array152);
$arguments150['class'] = 'img-responsive';

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
									<div class="caption">
										';
$array159 = array (
);
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array159)]);

$output158 .= '
									</div>
								';
return $output158;
};
$arguments153 = array();
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$arguments153['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array156);

$expression157 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments153['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments153['__thenClosure'] = $renderChildrenClosure154;

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output149 .= '
							</div>
						';
return $output149;
};
$arguments146 = array();
$arguments146['each'] = NULL;
$arguments146['as'] = NULL;
$arguments146['key'] = NULL;
$arguments146['reverse'] = false;
$arguments146['iteration'] = NULL;
$array148 = array (
);$arguments146['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array148);
$arguments146['as'] = 'mediaElement';

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output139 .= '
					</div>
				</div>
			';
return $output139;
};
$arguments137 = array();

$output136 .= '';

$output136 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['section'] = NULL;
$arguments163['partial'] = NULL;
$arguments163['delegate'] = NULL;
$arguments163['renderable'] = NULL;
$arguments163['arguments'] = array (
);
$arguments163['optional'] = false;
$arguments163['default'] = NULL;
$arguments163['contentAs'] = NULL;
$arguments163['debug'] = true;
$arguments163['section'] = 'headline';
$arguments163['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['section'] = NULL;
$arguments166['partial'] = NULL;
$arguments166['delegate'] = NULL;
$arguments166['renderable'] = NULL;
$arguments166['arguments'] = array (
);
$arguments166['optional'] = false;
$arguments166['default'] = NULL;
$arguments166['contentAs'] = NULL;
$arguments166['debug'] = true;
$arguments166['section'] = 'inner-content';
$arguments166['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output162 .= '
			';
return $output162;
};
$arguments160 = array();
$arguments160['if'] = NULL;

$output136 .= '';

$output136 .= '
		';
return $output136;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array134);

$expression135 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression135(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
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
$arguments106['section'] = 'headline';
$arguments106['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
				<div class="row">
					<div class="col-md-8">
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
$arguments109['section'] = 'inner-content';
$arguments109['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output105 .= '
					</div>
					<div class="col-md-4">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
							<div class="thumbnail">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['alt'] = NULL;
$arguments116['file'] = NULL;
$arguments116['additionalConfig'] = array (
);
$arguments116['width'] = NULL;
$arguments116['height'] = NULL;
$arguments116['cropVariant'] = 'default';
$array118 = array (
);$arguments116['file'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array118);
$arguments116['class'] = 'img-responsive';

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
									<div class="caption">
										';
$array125 = array (
);
$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array125)]);

$output124 .= '
									</div>
								';
return $output124;
};
$arguments119 = array();
$arguments119['then'] = NULL;
$arguments119['else'] = NULL;
$arguments119['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array122);

$expression123 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments119['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments119['__thenClosure'] = $renderChildrenClosure120;

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output115 .= '
							</div>
						';
return $output115;
};
$arguments112 = array();
$arguments112['each'] = NULL;
$arguments112['as'] = NULL;
$arguments112['key'] = NULL;
$arguments112['reverse'] = false;
$arguments112['iteration'] = NULL;
$array114 = array (
);$arguments112['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array114);
$arguments112['as'] = 'mediaElement';

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output105 .= '
					</div>
				</div>
			';
return $output105;
};
$arguments103['__elseClosures'][] = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['section'] = NULL;
$arguments127['partial'] = NULL;
$arguments127['delegate'] = NULL;
$arguments127['renderable'] = NULL;
$arguments127['arguments'] = array (
);
$arguments127['optional'] = false;
$arguments127['default'] = NULL;
$arguments127['contentAs'] = NULL;
$arguments127['debug'] = true;
$arguments127['section'] = 'headline';
$arguments127['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['section'] = NULL;
$arguments130['partial'] = NULL;
$arguments130['delegate'] = NULL;
$arguments130['renderable'] = NULL;
$arguments130['arguments'] = array (
);
$arguments130['optional'] = false;
$arguments130['default'] = NULL;
$arguments130['contentAs'] = NULL;
$arguments130['debug'] = true;
$arguments130['section'] = 'inner-content';
$arguments130['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output126 .= '
			';
return $output126;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array4);

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

return $output0;
}
/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output169 = '';

$output169 .= '
	<h1 itemprop="headline">';
$array170 = array (
);
$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array170)]);

$output169 .= '</h1>
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
$arguments171['partial'] = 'General/AdditionalInformation';
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array174);
$array175 = array (
);$array173['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array175);
$arguments171['arguments'] = $array173;

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output169 .= '
';

return $output169;
}
/**
 * section inner-content
 */
public function section_f614ee6568201c42c4bc472ffd587e542a12a348(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output176 = '';

$output176 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RenderMediaViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
			<!-- teaser -->
			<div class="lead" itemprop="description">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$array189 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array189);
};
$arguments187 = array();
$arguments187['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '
			</div>
		';
return $output186;
};
$arguments181 = array();
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$arguments181['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array183 = array();
$array184 = array (
);$array183['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array184);

$expression185 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments181['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array183)
					),
					$renderingContext
				);
$arguments181['__thenClosure'] = $renderChildrenClosure182;

$output180 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output180 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
			<!-- content elements -->
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$array198 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.contentElementIdList', $array198);
};
$arguments196 = array();
$arguments196['data'] = NULL;
$arguments196['typoscriptObjectPath'] = NULL;
$arguments196['currentValueKey'] = NULL;
$arguments196['table'] = '';
$arguments196['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$renderChildrenClosure197 = ($arguments196['data'] !== null) ? function() use ($arguments196) { return $arguments196['data']; } : $renderChildrenClosure197;
$output195 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '
		';
return $output195;
};
$arguments190 = array();
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array192 = array();
$array193 = array (
);$array192['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.contentElements', $array193);

$expression194 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments190['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression194(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);
$arguments190['__thenClosure'] = $renderChildrenClosure191;

$output180 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output180 .= '

		<!-- main text -->
		<div class="news-text-wrap" itemprop="articleBody">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$array201 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array201);
};
$arguments199 = array();
$arguments199['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output180 .= '
		</div>
	';
return $output180;
};
$arguments177 = array();
$arguments177['news'] = NULL;
$arguments177['imgClass'] = NULL;
$arguments177['videoClass'] = NULL;
$arguments177['audioClass'] = NULL;
$array179 = array (
);$arguments177['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array179);
$arguments177['imgClass'] = 'img-responsive';
$arguments177['videoClass'] = 'video-wrapper';
$arguments177['audioClass'] = 'audio-wrapper';

$output176 .= GeorgRinger\News\ViewHelpers\RenderMediaViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
		<!-- Link Back -->
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
			';
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
$arguments212['key'] = 'back-link';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext)]);

$output211 .= '
		';
return $output211;
};
$arguments208 = array();
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['class'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['title'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$arguments208['target'] = NULL;
$arguments208['rel'] = NULL;
$arguments208['pageUid'] = NULL;
$arguments208['pageType'] = NULL;
$arguments208['noCache'] = NULL;
$arguments208['noCacheHash'] = NULL;
$arguments208['section'] = NULL;
$arguments208['linkAccessRestrictedPages'] = NULL;
$arguments208['additionalParams'] = NULL;
$arguments208['absolute'] = NULL;
$arguments208['addQueryString'] = NULL;
$arguments208['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments208['addQueryStringMethod'] = NULL;
$arguments208['class'] = 'btn btn-default';
$array210 = array (
);$arguments208['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array210);

$output207 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
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
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array205);

$expression206 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = $renderChildrenClosure203;

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output176 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return '
			Care about the privacy of your readers?
			Checkout https://typo3.org/extensions/repository/view/rx_shariff
			and it will be used automatically!
		';
};
$arguments220 = array();

$output219 .= NULL;

$output219 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['section'] = NULL;
$arguments225['partial'] = NULL;
$arguments225['delegate'] = NULL;
$arguments225['renderable'] = NULL;
$arguments225['arguments'] = array (
);
$arguments225['optional'] = false;
$arguments225['default'] = NULL;
$arguments225['contentAs'] = NULL;
$arguments225['debug'] = true;
$arguments225['partial'] = 'Detail/Shariff';

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output224 .= '
		';
return $output224;
};
$arguments222 = array();
$arguments222['extensionKey'] = NULL;
$arguments222['then'] = NULL;
$arguments222['else'] = NULL;
$arguments222['extensionKey'] = 'rx_shariff';
$arguments222['__thenClosure'] = $renderChildrenClosure223;

$output219 .= GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output219 .= '
	';
return $output219;
};
$arguments214 = array();
$arguments214['then'] = NULL;
$arguments214['else'] = NULL;
$arguments214['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array216 = array();
$array217 = array (
);$array216['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showSocialShareButtons', $array217);

$expression218 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments214['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array216)
					),
					$renderingContext
				);
$arguments214['__thenClosure'] = $renderChildrenClosure215;

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output176 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
		<div id="disqus_thread"></div>
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['newsItem'] = NULL;
$arguments233['shortName'] = NULL;
$arguments233['link'] = NULL;
$array235 = array (
);$arguments233['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array235);
$array236 = array (
);$arguments233['shortName'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.disqusShortname', $array236);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['additionalAttributes'] = NULL;
$arguments237['data'] = NULL;
$arguments237['class'] = NULL;
$arguments237['dir'] = NULL;
$arguments237['id'] = NULL;
$arguments237['lang'] = NULL;
$arguments237['style'] = NULL;
$arguments237['title'] = NULL;
$arguments237['accesskey'] = NULL;
$arguments237['tabindex'] = NULL;
$arguments237['onclick'] = NULL;
$arguments237['newsItem'] = NULL;
$arguments237['settings'] = array (
);
$arguments237['uriOnly'] = false;
$arguments237['configuration'] = array (
);
$arguments237['content'] = '';
$arguments237['section'] = NULL;
$array239 = array (
);$arguments237['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array239);
$array240 = array (
);$arguments237['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array240);
// Rendering Boolean node
// Rendering Array
$array241 = array();
$array241['0'] = 1;

$expression242 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments237['uriOnly'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression242(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array241)
					),
					$renderingContext
				);
// Rendering Array
$array243 = array();
$array243['forceAbsoluteUrl'] = 1;
$arguments237['configuration'] = $array243;
$arguments233['link'] = GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output232 .= GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '
	';
return $output232;
};
$arguments227 = array();
$arguments227['then'] = NULL;
$arguments227['else'] = NULL;
$arguments227['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array230 = array (
);$array229['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.disqusShortname', $array230);

$expression231 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments227['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);
$arguments227['__thenClosure'] = $renderChildrenClosure228;

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output176 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
		Various options exist to fetch different related information:
		- ';
$array247 = array (
);
$output246 .= $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array247);

$output246 .= ': all related news, related und related from, sorted by date
		- ';
$array248 = array (
);
$output246 .= $renderingContext->getVariableProvider()->getByPath('newsItem.related', $array248);

$output246 .= ': all related
		- ';
$array249 = array (
);
$output246 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedSorted', $array249);

$output246 .= ': all related, sorted by date
		- ';
$array250 = array (
);
$output246 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFrom', $array250);

$output246 .= ': all related from
		- ';
$array251 = array (
);
$output246 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFromSorted', $array251);

$output246 .= ': all related from, sorted by date
	';
return $output246;
};
$arguments244 = array();

$output176 .= NULL;

$output176 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
		<!-- Related news records -->
		<div class="news-related news-related-news">
			<h4>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['languageKey'] = NULL;
$arguments258['alternativeLanguageKeys'] = NULL;
$arguments258['key'] = 'related-news';

$output257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output257 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
					<li>
						<span class="news-related-news-date">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$array268 = array (
);return $renderingContext->getVariableProvider()->getByPath('related.datetime', $array268);
};
$arguments264 = array();
$arguments264['date'] = NULL;
$arguments264['format'] = '';
$arguments264['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['key'] = NULL;
$arguments266['id'] = NULL;
$arguments266['default'] = NULL;
$arguments266['arguments'] = NULL;
$arguments266['extensionName'] = NULL;
$arguments266['languageKey'] = NULL;
$arguments266['alternativeLanguageKeys'] = NULL;
$arguments266['key'] = 'dateFormat';
$arguments264['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);
$renderChildrenClosure265 = ($arguments264['date'] !== null) ? function() use ($arguments264) { return $arguments264['date']; } : $renderChildrenClosure265;
$output263 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext)]);

$output263 .= '
						</span>
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
							';
$array275 = array (
);
$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('related.title', $array275)]);

$output274 .= '
						';
return $output274;
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
$arguments269['newsItem'] = NULL;
$arguments269['settings'] = array (
);
$arguments269['uriOnly'] = false;
$arguments269['configuration'] = array (
);
$arguments269['content'] = '';
$arguments269['section'] = NULL;
$array271 = array (
);$arguments269['newsItem'] = $renderingContext->getVariableProvider()->getByPath('related', $array271);
$array272 = array (
);$arguments269['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array272);
$array273 = array (
);$arguments269['title'] = $renderingContext->getVariableProvider()->getByPath('related.title', $array273);

$output263 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output263 .= '
					</li>

				';
return $output263;
};
$arguments260 = array();
$arguments260['each'] = NULL;
$arguments260['as'] = NULL;
$arguments260['key'] = NULL;
$arguments260['reverse'] = false;
$arguments260['iteration'] = NULL;
$array262 = array (
);$arguments260['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array262);
$arguments260['as'] = 'related';

$output257 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output257 .= '
			</ul>
		</div>
	';
return $output257;
};
$arguments252 = array();
$arguments252['then'] = NULL;
$arguments252['else'] = NULL;
$arguments252['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array254 = array();
$array255 = array (
);$array254['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array255);

$expression256 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments252['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression256(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array254)
					),
					$renderingContext
				);
$arguments252['__thenClosure'] = $renderChildrenClosure253;

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output176 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
		<!-- related files -->
		<div class="news-related news-related-files">
			<h4>
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
$arguments282['key'] = 'related-files';

$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);

$output281 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
					<li>
						<span class="news-related-files-link">
							<a href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$array291 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.publicUrl', $array291);
};
$arguments288 = array();
$arguments288['value'] = NULL;
$arguments288['keepQuotes'] = false;
$arguments288['encoding'] = 'UTF-8';
$arguments288['doubleEncode'] = true;
$value290 = ($arguments288['value'] !== NULL ? $arguments288['value'] : $renderChildrenClosure289());

$output287 .= !is_string($value290) && !(is_object($value290) && method_exists($value290, '__toString')) ? $value290 : htmlspecialchars($value290, ($arguments288['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments288['encoding'], $arguments288['doubleEncode']);

$output287 .= '" target="_blank">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['then'] = NULL;
$arguments292['else'] = NULL;
$arguments292['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['0'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array295);

$expression296 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments292['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression296(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array294)
					),
					$renderingContext
				);
$array297 = array (
);$arguments292['then'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array297);
$array298 = array (
);$arguments292['else'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.name', $array298);

$output287 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output287 .= '
							</a>
						</span>
						<span class="news-related-files-size"> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$array301 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.size', $array301);
};
$arguments299 = array();
$arguments299['value'] = NULL;
$arguments299['decimals'] = 0;
$arguments299['decimalSeparator'] = '.';
$arguments299['thousandsSeparator'] = ',';
$arguments299['units'] = NULL;
$renderChildrenClosure300 = ($arguments299['value'] !== null) ? function() use ($arguments299) { return $arguments299['value']; } : $renderChildrenClosure300;
$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext)]);

$output287 .= ' </span>
					</li>
				';
return $output287;
};
$arguments284 = array();
$arguments284['each'] = NULL;
$arguments284['as'] = NULL;
$arguments284['key'] = NULL;
$arguments284['reverse'] = false;
$arguments284['iteration'] = NULL;
$array286 = array (
);$arguments284['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array286);
$arguments284['as'] = 'relatedFile';

$output281 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output281 .= '
			</ul>
		</div>
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
);$array278['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array279);

$expression280 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments276['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression280(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array278)
					),
					$renderingContext
				);
$arguments276['__thenClosure'] = $renderChildrenClosure277;

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output176 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output307 = '';

$output307 .= '
		<!-- Related links -->
		<div class="news-related news-related-links">
			<h4>
				';
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
$arguments308['key'] = 'related-links';

$output307 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext)]);

$output307 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['then'] = NULL;
$arguments321['else'] = NULL;
$arguments321['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array323 = array();
$array324 = array (
);$array323['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array324);

$expression325 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments321['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression325(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array323)
					),
					$renderingContext
				);
$array326 = array (
);$arguments321['then'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array326);
$array327 = array (
);$arguments321['else'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array327);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);
};
$arguments314 = array();
$arguments314['parameter'] = NULL;
$arguments314['target'] = '';
$arguments314['class'] = '';
$arguments314['title'] = '';
$arguments314['additionalParams'] = '';
$arguments314['additionalAttributes'] = array (
);
$arguments314['useCacheHash'] = false;
$arguments314['addQueryString'] = false;
$arguments314['addQueryStringMethod'] = 'GET';
$arguments314['addQueryStringExclude'] = '';
$arguments314['absolute'] = false;
$array316 = array (
);$arguments314['parameter'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array316);
$array317 = array (
);$arguments314['title'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array317);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['link'] = NULL;
$array320 = array (
);$arguments318['link'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array320);
$arguments314['target'] = GeorgRinger\News\ViewHelpers\TargetLinkViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output313 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '<span>';
$array334 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array334)]);

$output333 .= '</span>
						';
return $output333;
};
$arguments328 = array();
$arguments328['then'] = NULL;
$arguments328['else'] = NULL;
$arguments328['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array331);

$expression332 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments328['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression332(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments328['__thenClosure'] = $renderChildrenClosure329;

$output313 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output313 .= '
					</li>
				';
return $output313;
};
$arguments310 = array();
$arguments310['each'] = NULL;
$arguments310['as'] = NULL;
$arguments310['key'] = NULL;
$arguments310['reverse'] = false;
$arguments310['iteration'] = NULL;
$array312 = array (
);$arguments310['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array312);
$arguments310['as'] = 'relatedLink';

$output307 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output307 .= '
			</ul>
		</div>
	';
return $output307;
};
$arguments302 = array();
$arguments302['then'] = NULL;
$arguments302['else'] = NULL;
$arguments302['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array304 = array();
$array305 = array (
);$array304['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array305);

$expression306 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments302['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression306(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array304)
					),
					$renderingContext
				);
$arguments302['__thenClosure'] = $renderChildrenClosure303;

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output176 .= '
';

return $output176;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output335 = '';

$output335 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments336 = array();
$arguments336['name'] = NULL;
$arguments336['name'] = 'Detail';

$output335 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output335 .= '

<!--
	=====================
		News/Detail.html
-->

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$output349 = '';

$output349 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments350 = array();
$arguments350['newsItem'] = NULL;
$array352 = array (
);$arguments350['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array352);

$output349 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext)]);

$output349 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
					';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$array381 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array381);
};
$arguments379 = array();
$arguments379['value'] = NULL;
$arguments379['keepQuotes'] = false;
$arguments379['encoding'] = NULL;
$renderChildrenClosure380 = ($arguments379['value'] !== null) ? function() use ($arguments379) { return $arguments379['value']; } : $renderChildrenClosure380;
$output378 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output378 .= '
					';
return $output378;
};
$arguments376 = array();

$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext)]);

$output375 .= '
				';
return $output375;
};
$arguments373 = array();

$output372 .= '';

$output372 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= '
					';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$array390 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array390);
};
$arguments388 = array();
$arguments388['value'] = NULL;
$arguments388['keepQuotes'] = false;
$arguments388['encoding'] = NULL;
$renderChildrenClosure389 = ($arguments388['value'] !== null) ? function() use ($arguments388) { return $arguments388['value']; } : $renderChildrenClosure389;
$output387 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output387 .= '
					';
return $output387;
};
$arguments385 = array();

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext)]);

$output384 .= '
				';
return $output384;
};
$arguments382 = array();
$arguments382['if'] = NULL;

$output372 .= '';

$output372 .= '
			';
return $output372;
};
$arguments353 = array();
$arguments353['then'] = NULL;
$arguments353['else'] = NULL;
$arguments353['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array369 = array();
$array370 = array (
);$array369['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array370);

$expression371 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments353['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression371(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array369)
					),
					$renderingContext
				);
$arguments353['__thenClosure'] = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
					';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$array361 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array361);
};
$arguments359 = array();
$arguments359['value'] = NULL;
$arguments359['keepQuotes'] = false;
$arguments359['encoding'] = NULL;
$renderChildrenClosure360 = ($arguments359['value'] !== null) ? function() use ($arguments359) { return $arguments359['value']; } : $renderChildrenClosure360;
$output358 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output358 .= '
					';
return $output358;
};
$arguments356 = array();

$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext)]);

$output355 .= '
				';
return $output355;
};
$arguments353['__elseClosures'][] = function() use ($renderingContext, $self) {
$output362 = '';

$output362 .= '
					';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
$output365 = '';

$output365 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$array368 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array368);
};
$arguments366 = array();
$arguments366['value'] = NULL;
$arguments366['keepQuotes'] = false;
$arguments366['encoding'] = NULL;
$renderChildrenClosure367 = ($arguments366['value'] !== null) ? function() use ($arguments366) { return $arguments366['value']; } : $renderChildrenClosure367;
$output365 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output365 .= '
					';
return $output365;
};
$arguments363 = array();

$output362 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\TitleTagViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext)]);

$output362 .= '
				';
return $output362;
};

$output349 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output349 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$output396 = '';

$output396 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments397 = array();
$arguments397['section'] = NULL;
$arguments397['partial'] = NULL;
$arguments397['delegate'] = NULL;
$arguments397['renderable'] = NULL;
$arguments397['arguments'] = array (
);
$arguments397['optional'] = false;
$arguments397['default'] = NULL;
$arguments397['contentAs'] = NULL;
$arguments397['debug'] = true;
$arguments397['partial'] = 'Detail/Opengraph';
// Rendering Array
$array399 = array();
$array400 = array (
);$array399['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array400);
$array401 = array (
);$array399['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array401);
$arguments397['arguments'] = $array399;

$output396 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output396 .= '
			';
return $output396;
};
$arguments391 = array();
$arguments391['then'] = NULL;
$arguments391['else'] = NULL;
$arguments391['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array393 = array();
$array394 = array (
);$array393['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showMetaTags', $array394);

$expression395 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments391['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression395(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array393)
					),
					$renderingContext
				);
$arguments391['__thenClosure'] = $renderChildrenClosure392;

$output349 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);

$output349 .= '
		';
return $output349;
};
$arguments347 = array();

$output346 .= GeorgRinger\News\ViewHelpers\Format\NothingViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output346 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output407 = '';

$output407 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output418 = '';

$output418 .= '
					<ul class="pager">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
							<li class="previous">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
$output429 = '';

$output429 .= '
									<span aria-hidden="true">&larr; </span>';
$array430 = array (
);
$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.prev.title', $array430)]);

$output429 .= '
								';
return $output429;
};
$arguments425 = array();
$arguments425['additionalAttributes'] = NULL;
$arguments425['data'] = NULL;
$arguments425['class'] = NULL;
$arguments425['dir'] = NULL;
$arguments425['id'] = NULL;
$arguments425['lang'] = NULL;
$arguments425['style'] = NULL;
$arguments425['title'] = NULL;
$arguments425['accesskey'] = NULL;
$arguments425['tabindex'] = NULL;
$arguments425['onclick'] = NULL;
$arguments425['newsItem'] = NULL;
$arguments425['settings'] = array (
);
$arguments425['uriOnly'] = false;
$arguments425['configuration'] = array (
);
$arguments425['content'] = '';
$arguments425['section'] = NULL;
$array427 = array (
);$arguments425['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array427);
$array428 = array (
);$arguments425['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array428);

$output424 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output424 .= '
							</li>
						';
return $output424;
};
$arguments419 = array();
$arguments419['then'] = NULL;
$arguments419['else'] = NULL;
$arguments419['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array421 = array();
$array422 = array (
);$array421['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.prev', $array422);

$expression423 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments419['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression423(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array421)
					),
					$renderingContext
				);
$arguments419['__thenClosure'] = $renderChildrenClosure420;

$output418 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output418 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
$output436 = '';

$output436 .= '
							<li class="next">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
$output441 = '';

$output441 .= '
									';
$array442 = array (
);
$output441 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginated.next.title', $array442)]);

$output441 .= ' <span aria-hidden="true"> &rarr;</span>
								';
return $output441;
};
$arguments437 = array();
$arguments437['additionalAttributes'] = NULL;
$arguments437['data'] = NULL;
$arguments437['class'] = NULL;
$arguments437['dir'] = NULL;
$arguments437['id'] = NULL;
$arguments437['lang'] = NULL;
$arguments437['style'] = NULL;
$arguments437['title'] = NULL;
$arguments437['accesskey'] = NULL;
$arguments437['tabindex'] = NULL;
$arguments437['onclick'] = NULL;
$arguments437['newsItem'] = NULL;
$arguments437['settings'] = array (
);
$arguments437['uriOnly'] = false;
$arguments437['configuration'] = array (
);
$arguments437['content'] = '';
$arguments437['section'] = NULL;
$array439 = array (
);$arguments437['newsItem'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array439);
$array440 = array (
);$arguments437['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array440);
$arguments437['class'] = 'next';

$output436 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);

$output436 .= '
							</li>
						';
return $output436;
};
$arguments431 = array();
$arguments431['then'] = NULL;
$arguments431['else'] = NULL;
$arguments431['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array433 = array();
$array434 = array (
);$array433['0'] = $renderingContext->getVariableProvider()->getByPath('paginated.next', $array434);

$expression435 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments431['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression435(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array433)
					),
					$renderingContext
				);
$arguments431['__thenClosure'] = $renderChildrenClosure432;

$output418 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);

$output418 .= '
					</ul>
				';
return $output418;
};
$arguments413 = array();
$arguments413['then'] = NULL;
$arguments413['else'] = NULL;
$arguments413['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array415 = array();
$array416 = array (
);$array415['0'] = $renderingContext->getVariableProvider()->getByPath('paginated', $array416);

$expression417 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments413['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression417(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array415)
					),
					$renderingContext
				);
$arguments413['__thenClosure'] = $renderChildrenClosure414;

$output412 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output412 .= '
			';
return $output412;
};
$arguments408 = array();
$arguments408['news'] = NULL;
$arguments408['pidList'] = '';
$arguments408['sortField'] = 'datetime';
$arguments408['as'] = NULL;
$arguments408['includeInternalType'] = NULL;
$arguments408['includeExternalType'] = NULL;
$array410 = array (
);$arguments408['pidList'] = $renderingContext->getVariableProvider()->getByPath('newsItem.pid', $array410);
$array411 = array (
);$arguments408['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array411);
$arguments408['as'] = 'paginated';
$arguments408['sortField'] = 'datetime';

$output407 .= GeorgRinger\News\ViewHelpers\SimplePrevNextViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output407 .= '
		';
return $output407;
};
$arguments402 = array();
$arguments402['then'] = NULL;
$arguments402['else'] = NULL;
$arguments402['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array404 = array();
$array405 = array (
);$array404['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showPrevNext', $array405);

$expression406 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments402['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression406(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array404)
					),
					$renderingContext
				);
$arguments402['__thenClosure'] = $renderChildrenClosure403;

$output346 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output346 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
$output476 = '';

$output476 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
$output479 = '';

$output479 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['section'] = NULL;
$arguments480['partial'] = NULL;
$arguments480['delegate'] = NULL;
$arguments480['renderable'] = NULL;
$arguments480['arguments'] = array (
);
$arguments480['optional'] = false;
$arguments480['default'] = NULL;
$arguments480['contentAs'] = NULL;
$arguments480['debug'] = true;
$arguments480['section'] = 'headline';
$arguments480['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output479 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output479 .= '
				<div class="row">
					<div class="col-md-8">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments483 = array();
$arguments483['section'] = NULL;
$arguments483['partial'] = NULL;
$arguments483['delegate'] = NULL;
$arguments483['renderable'] = NULL;
$arguments483['arguments'] = array (
);
$arguments483['optional'] = false;
$arguments483['default'] = NULL;
$arguments483['contentAs'] = NULL;
$arguments483['debug'] = true;
$arguments483['section'] = 'inner-content';
$arguments483['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output479 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);

$output479 .= '
					</div>
					<div class="col-md-4">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
							<div class="thumbnail">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['additionalAttributes'] = NULL;
$arguments490['data'] = NULL;
$arguments490['class'] = NULL;
$arguments490['dir'] = NULL;
$arguments490['id'] = NULL;
$arguments490['lang'] = NULL;
$arguments490['style'] = NULL;
$arguments490['title'] = NULL;
$arguments490['accesskey'] = NULL;
$arguments490['tabindex'] = NULL;
$arguments490['onclick'] = NULL;
$arguments490['alt'] = NULL;
$arguments490['file'] = NULL;
$arguments490['additionalConfig'] = array (
);
$arguments490['width'] = NULL;
$arguments490['height'] = NULL;
$arguments490['cropVariant'] = 'default';
$array492 = array (
);$arguments490['file'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array492);
$arguments490['class'] = 'img-responsive';

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
$output498 = '';

$output498 .= '
									<div class="caption">
										';
$array499 = array (
);
$output498 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array499)]);

$output498 .= '
									</div>
								';
return $output498;
};
$arguments493 = array();
$arguments493['then'] = NULL;
$arguments493['else'] = NULL;
$arguments493['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array495 = array();
$array496 = array (
);$array495['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array496);

$expression497 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments493['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression497(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array495)
					),
					$renderingContext
				);
$arguments493['__thenClosure'] = $renderChildrenClosure494;

$output489 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext);

$output489 .= '
							</div>
						';
return $output489;
};
$arguments486 = array();
$arguments486['each'] = NULL;
$arguments486['as'] = NULL;
$arguments486['key'] = NULL;
$arguments486['reverse'] = false;
$arguments486['iteration'] = NULL;
$array488 = array (
);$arguments486['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array488);
$arguments486['as'] = 'mediaElement';

$output479 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output479 .= '
					</div>
				</div>
			';
return $output479;
};
$arguments477 = array();

$output476 .= '';

$output476 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$output502 = '';

$output502 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['section'] = NULL;
$arguments503['partial'] = NULL;
$arguments503['delegate'] = NULL;
$arguments503['renderable'] = NULL;
$arguments503['arguments'] = array (
);
$arguments503['optional'] = false;
$arguments503['default'] = NULL;
$arguments503['contentAs'] = NULL;
$arguments503['debug'] = true;
$arguments503['section'] = 'headline';
$arguments503['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output502 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output502 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments506 = array();
$arguments506['section'] = NULL;
$arguments506['partial'] = NULL;
$arguments506['delegate'] = NULL;
$arguments506['renderable'] = NULL;
$arguments506['arguments'] = array (
);
$arguments506['optional'] = false;
$arguments506['default'] = NULL;
$arguments506['contentAs'] = NULL;
$arguments506['debug'] = true;
$arguments506['section'] = 'inner-content';
$arguments506['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output502 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);

$output502 .= '
			';
return $output502;
};
$arguments500 = array();
$arguments500['if'] = NULL;

$output476 .= '';

$output476 .= '
		';
return $output476;
};
$arguments443 = array();
$arguments443['then'] = NULL;
$arguments443['else'] = NULL;
$arguments443['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array473 = array();
$array474 = array (
);$array473['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array474);

$expression475 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments443['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression475(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array473)
					),
					$renderingContext
				);
$arguments443['__thenClosure'] = function() use ($renderingContext, $self) {
$output445 = '';

$output445 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments446 = array();
$arguments446['section'] = NULL;
$arguments446['partial'] = NULL;
$arguments446['delegate'] = NULL;
$arguments446['renderable'] = NULL;
$arguments446['arguments'] = array (
);
$arguments446['optional'] = false;
$arguments446['default'] = NULL;
$arguments446['contentAs'] = NULL;
$arguments446['debug'] = true;
$arguments446['section'] = 'headline';
$arguments446['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output445 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output445 .= '
				<div class="row">
					<div class="col-md-8">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments449 = array();
$arguments449['section'] = NULL;
$arguments449['partial'] = NULL;
$arguments449['delegate'] = NULL;
$arguments449['renderable'] = NULL;
$arguments449['arguments'] = array (
);
$arguments449['optional'] = false;
$arguments449['default'] = NULL;
$arguments449['contentAs'] = NULL;
$arguments449['debug'] = true;
$arguments449['section'] = 'inner-content';
$arguments449['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output445 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext);

$output445 .= '
					</div>
					<div class="col-md-4">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
							<div class="thumbnail">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['additionalAttributes'] = NULL;
$arguments456['data'] = NULL;
$arguments456['class'] = NULL;
$arguments456['dir'] = NULL;
$arguments456['id'] = NULL;
$arguments456['lang'] = NULL;
$arguments456['style'] = NULL;
$arguments456['title'] = NULL;
$arguments456['accesskey'] = NULL;
$arguments456['tabindex'] = NULL;
$arguments456['onclick'] = NULL;
$arguments456['alt'] = NULL;
$arguments456['file'] = NULL;
$arguments456['additionalConfig'] = array (
);
$arguments456['width'] = NULL;
$arguments456['height'] = NULL;
$arguments456['cropVariant'] = 'default';
$array458 = array (
);$arguments456['file'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array458);
$arguments456['class'] = 'img-responsive';

$output455 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output455 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output464 = '';

$output464 .= '
									<div class="caption">
										';
$array465 = array (
);
$output464 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array465)]);

$output464 .= '
									</div>
								';
return $output464;
};
$arguments459 = array();
$arguments459['then'] = NULL;
$arguments459['else'] = NULL;
$arguments459['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array461 = array();
$array462 = array (
);$array461['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.description', $array462);

$expression463 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments459['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression463(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array461)
					),
					$renderingContext
				);
$arguments459['__thenClosure'] = $renderChildrenClosure460;

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output455 .= '
							</div>
						';
return $output455;
};
$arguments452 = array();
$arguments452['each'] = NULL;
$arguments452['as'] = NULL;
$arguments452['key'] = NULL;
$arguments452['reverse'] = false;
$arguments452['iteration'] = NULL;
$array454 = array (
);$arguments452['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaNonPreviews', $array454);
$arguments452['as'] = 'mediaElement';

$output445 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output445 .= '
					</div>
				</div>
			';
return $output445;
};
$arguments443['__elseClosures'][] = function() use ($renderingContext, $self) {
$output466 = '';

$output466 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments467 = array();
$arguments467['section'] = NULL;
$arguments467['partial'] = NULL;
$arguments467['delegate'] = NULL;
$arguments467['renderable'] = NULL;
$arguments467['arguments'] = array (
);
$arguments467['optional'] = false;
$arguments467['default'] = NULL;
$arguments467['contentAs'] = NULL;
$arguments467['debug'] = true;
$arguments467['section'] = 'headline';
$arguments467['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output466 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments467, $renderChildrenClosure468, $renderingContext);

$output466 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['section'] = NULL;
$arguments470['partial'] = NULL;
$arguments470['delegate'] = NULL;
$arguments470['renderable'] = NULL;
$arguments470['arguments'] = array (
);
$arguments470['optional'] = false;
$arguments470['default'] = NULL;
$arguments470['contentAs'] = NULL;
$arguments470['debug'] = true;
$arguments470['section'] = 'inner-content';
$arguments470['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output466 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output466 .= '
			';
return $output466;
};

$output346 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output346 .= '
	';
return $output346;
};
$arguments341 = array();
$arguments341['then'] = NULL;
$arguments341['else'] = NULL;
$arguments341['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array343 = array();
$array344 = array (
);$array343['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array344);

$expression345 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments341['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression345(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array343)
					),
					$renderingContext
				);
$arguments341['__thenClosure'] = $renderChildrenClosure342;

$output340 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output340 .= '
';
return $output340;
};
$arguments338 = array();
$arguments338['name'] = NULL;
$arguments338['name'] = 'content';

$output335 .= NULL;

$output335 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$output511 = '';

$output511 .= '
	<h1 itemprop="headline">';
$array512 = array (
);
$output511 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array512)]);

$output511 .= '</h1>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments513 = array();
$arguments513['section'] = NULL;
$arguments513['partial'] = NULL;
$arguments513['delegate'] = NULL;
$arguments513['renderable'] = NULL;
$arguments513['arguments'] = array (
);
$arguments513['optional'] = false;
$arguments513['default'] = NULL;
$arguments513['contentAs'] = NULL;
$arguments513['debug'] = true;
$arguments513['partial'] = 'General/AdditionalInformation';
// Rendering Array
$array515 = array();
$array516 = array (
);$array515['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array516);
$array517 = array (
);$array515['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array517);
$arguments513['arguments'] = $array515;

$output511 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output511 .= '
';
return $output511;
};
$arguments509 = array();
$arguments509['name'] = NULL;
$arguments509['name'] = 'headline';

$output335 .= NULL;

$output335 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RenderMediaViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
$output524 = '';

$output524 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
$output530 = '';

$output530 .= '
			<!-- teaser -->
			<div class="lead" itemprop="description">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
$array533 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array533);
};
$arguments531 = array();
$arguments531['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output530 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments531, $renderChildrenClosure532, $renderingContext);

$output530 .= '
			</div>
		';
return $output530;
};
$arguments525 = array();
$arguments525['then'] = NULL;
$arguments525['else'] = NULL;
$arguments525['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array527 = array();
$array528 = array (
);$array527['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array528);

$expression529 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments525['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression529(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array527)
					),
					$renderingContext
				);
$arguments525['__thenClosure'] = $renderChildrenClosure526;

$output524 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);

$output524 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
$output539 = '';

$output539 .= '
			<!-- content elements -->
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
$array542 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.contentElementIdList', $array542);
};
$arguments540 = array();
$arguments540['data'] = NULL;
$arguments540['typoscriptObjectPath'] = NULL;
$arguments540['currentValueKey'] = NULL;
$arguments540['table'] = '';
$arguments540['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$renderChildrenClosure541 = ($arguments540['data'] !== null) ? function() use ($arguments540) { return $arguments540['data']; } : $renderChildrenClosure541;
$output539 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);

$output539 .= '
		';
return $output539;
};
$arguments534 = array();
$arguments534['then'] = NULL;
$arguments534['else'] = NULL;
$arguments534['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array536 = array();
$array537 = array (
);$array536['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.contentElements', $array537);

$expression538 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments534['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression538(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array536)
					),
					$renderingContext
				);
$arguments534['__thenClosure'] = $renderChildrenClosure535;

$output524 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output524 .= '

		<!-- main text -->
		<div class="news-text-wrap" itemprop="articleBody">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure544 = function() use ($renderingContext, $self) {
$array545 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array545);
};
$arguments543 = array();
$arguments543['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output524 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments543, $renderChildrenClosure544, $renderingContext);

$output524 .= '
		</div>
	';
return $output524;
};
$arguments521 = array();
$arguments521['news'] = NULL;
$arguments521['imgClass'] = NULL;
$arguments521['videoClass'] = NULL;
$arguments521['audioClass'] = NULL;
$array523 = array (
);$arguments521['news'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array523);
$arguments521['imgClass'] = 'img-responsive';
$arguments521['videoClass'] = 'video-wrapper';
$arguments521['audioClass'] = 'audio-wrapper';

$output520 .= GeorgRinger\News\ViewHelpers\RenderMediaViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext);

$output520 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output551 = '';

$output551 .= '
		<!-- Link Back -->
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$output555 = '';

$output555 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments556 = array();
$arguments556['key'] = NULL;
$arguments556['id'] = NULL;
$arguments556['default'] = NULL;
$arguments556['arguments'] = NULL;
$arguments556['extensionName'] = NULL;
$arguments556['languageKey'] = NULL;
$arguments556['alternativeLanguageKeys'] = NULL;
$arguments556['key'] = 'back-link';

$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext)]);

$output555 .= '
		';
return $output555;
};
$arguments552 = array();
$arguments552['additionalAttributes'] = NULL;
$arguments552['data'] = NULL;
$arguments552['class'] = NULL;
$arguments552['dir'] = NULL;
$arguments552['id'] = NULL;
$arguments552['lang'] = NULL;
$arguments552['style'] = NULL;
$arguments552['title'] = NULL;
$arguments552['accesskey'] = NULL;
$arguments552['tabindex'] = NULL;
$arguments552['onclick'] = NULL;
$arguments552['target'] = NULL;
$arguments552['rel'] = NULL;
$arguments552['pageUid'] = NULL;
$arguments552['pageType'] = NULL;
$arguments552['noCache'] = NULL;
$arguments552['noCacheHash'] = NULL;
$arguments552['section'] = NULL;
$arguments552['linkAccessRestrictedPages'] = NULL;
$arguments552['additionalParams'] = NULL;
$arguments552['absolute'] = NULL;
$arguments552['addQueryString'] = NULL;
$arguments552['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments552['addQueryStringMethod'] = NULL;
$arguments552['class'] = 'btn btn-default';
$array554 = array (
);$arguments552['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array554);

$output551 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments552, $renderChildrenClosure553, $renderingContext);

$output551 .= '
	';
return $output551;
};
$arguments546 = array();
$arguments546['then'] = NULL;
$arguments546['else'] = NULL;
$arguments546['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array548 = array();
$array549 = array (
);$array548['0'] = $renderingContext->getVariableProvider()->getByPath('settings.backPid', $array549);

$expression550 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments546['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression550(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array548)
					),
					$renderingContext
				);
$arguments546['__thenClosure'] = $renderChildrenClosure547;

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments546, $renderChildrenClosure547, $renderingContext);

$output520 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
$output563 = '';

$output563 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
return '
			Care about the privacy of your readers?
			Checkout https://typo3.org/extensions/repository/view/rx_shariff
			and it will be used automatically!
		';
};
$arguments564 = array();

$output563 .= NULL;

$output563 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
$output568 = '';

$output568 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['section'] = NULL;
$arguments569['partial'] = NULL;
$arguments569['delegate'] = NULL;
$arguments569['renderable'] = NULL;
$arguments569['arguments'] = array (
);
$arguments569['optional'] = false;
$arguments569['default'] = NULL;
$arguments569['contentAs'] = NULL;
$arguments569['debug'] = true;
$arguments569['partial'] = 'Detail/Shariff';

$output568 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$output568 .= '
		';
return $output568;
};
$arguments566 = array();
$arguments566['extensionKey'] = NULL;
$arguments566['then'] = NULL;
$arguments566['else'] = NULL;
$arguments566['extensionKey'] = 'rx_shariff';
$arguments566['__thenClosure'] = $renderChildrenClosure567;

$output563 .= GeorgRinger\News\ViewHelpers\ExtensionLoadedViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);

$output563 .= '
	';
return $output563;
};
$arguments558 = array();
$arguments558['then'] = NULL;
$arguments558['else'] = NULL;
$arguments558['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array560 = array();
$array561 = array (
);$array560['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.showSocialShareButtons', $array561);

$expression562 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments558['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression562(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array560)
					),
					$renderingContext
				);
$arguments558['__thenClosure'] = $renderChildrenClosure559;

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext);

$output520 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
$output576 = '';

$output576 .= '
		<div id="disqus_thread"></div>
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['newsItem'] = NULL;
$arguments577['shortName'] = NULL;
$arguments577['link'] = NULL;
$array579 = array (
);$arguments577['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array579);
$array580 = array (
);$arguments577['shortName'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.disqusShortname', $array580);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments581 = array();
$arguments581['additionalAttributes'] = NULL;
$arguments581['data'] = NULL;
$arguments581['class'] = NULL;
$arguments581['dir'] = NULL;
$arguments581['id'] = NULL;
$arguments581['lang'] = NULL;
$arguments581['style'] = NULL;
$arguments581['title'] = NULL;
$arguments581['accesskey'] = NULL;
$arguments581['tabindex'] = NULL;
$arguments581['onclick'] = NULL;
$arguments581['newsItem'] = NULL;
$arguments581['settings'] = array (
);
$arguments581['uriOnly'] = false;
$arguments581['configuration'] = array (
);
$arguments581['content'] = '';
$arguments581['section'] = NULL;
$array583 = array (
);$arguments581['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array583);
$array584 = array (
);$arguments581['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array584);
// Rendering Boolean node
// Rendering Array
$array585 = array();
$array585['0'] = 1;

$expression586 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments581['uriOnly'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression586(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array585)
					),
					$renderingContext
				);
// Rendering Array
$array587 = array();
$array587['forceAbsoluteUrl'] = 1;
$arguments581['configuration'] = $array587;
$arguments577['link'] = GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext);

$output576 .= GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext);

$output576 .= '
	';
return $output576;
};
$arguments571 = array();
$arguments571['then'] = NULL;
$arguments571['else'] = NULL;
$arguments571['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array573 = array();
$array574 = array (
);$array573['0'] = $renderingContext->getVariableProvider()->getByPath('settings.detail.disqusShortname', $array574);

$expression575 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments571['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression575(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array573)
					),
					$renderingContext
				);
$arguments571['__thenClosure'] = $renderChildrenClosure572;

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext);

$output520 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure589 = function() use ($renderingContext, $self) {
$output590 = '';

$output590 .= '
		Various options exist to fetch different related information:
		- ';
$array591 = array (
);
$output590 .= $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array591);

$output590 .= ': all related news, related und related from, sorted by date
		- ';
$array592 = array (
);
$output590 .= $renderingContext->getVariableProvider()->getByPath('newsItem.related', $array592);

$output590 .= ': all related
		- ';
$array593 = array (
);
$output590 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedSorted', $array593);

$output590 .= ': all related, sorted by date
		- ';
$array594 = array (
);
$output590 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFrom', $array594);

$output590 .= ': all related from
		- ';
$array595 = array (
);
$output590 .= $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFromSorted', $array595);

$output590 .= ': all related from, sorted by date
	';
return $output590;
};
$arguments588 = array();

$output520 .= NULL;

$output520 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
$output601 = '';

$output601 .= '
		<!-- Related news records -->
		<div class="news-related news-related-news">
			<h4>
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
$arguments602['key'] = 'related-news';

$output601 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext)]);

$output601 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
$output607 = '';

$output607 .= '
					<li>
						<span class="news-related-news-date">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
$array612 = array (
);return $renderingContext->getVariableProvider()->getByPath('related.datetime', $array612);
};
$arguments608 = array();
$arguments608['date'] = NULL;
$arguments608['format'] = '';
$arguments608['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments610 = array();
$arguments610['key'] = NULL;
$arguments610['id'] = NULL;
$arguments610['default'] = NULL;
$arguments610['arguments'] = NULL;
$arguments610['extensionName'] = NULL;
$arguments610['languageKey'] = NULL;
$arguments610['alternativeLanguageKeys'] = NULL;
$arguments610['key'] = 'dateFormat';
$arguments608['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments610, $renderChildrenClosure611, $renderingContext);
$renderChildrenClosure609 = ($arguments608['date'] !== null) ? function() use ($arguments608) { return $arguments608['date']; } : $renderChildrenClosure609;
$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext)]);

$output607 .= '
						</span>
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
$output618 = '';

$output618 .= '
							';
$array619 = array (
);
$output618 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('related.title', $array619)]);

$output618 .= '
						';
return $output618;
};
$arguments613 = array();
$arguments613['additionalAttributes'] = NULL;
$arguments613['data'] = NULL;
$arguments613['class'] = NULL;
$arguments613['dir'] = NULL;
$arguments613['id'] = NULL;
$arguments613['lang'] = NULL;
$arguments613['style'] = NULL;
$arguments613['title'] = NULL;
$arguments613['accesskey'] = NULL;
$arguments613['tabindex'] = NULL;
$arguments613['onclick'] = NULL;
$arguments613['newsItem'] = NULL;
$arguments613['settings'] = array (
);
$arguments613['uriOnly'] = false;
$arguments613['configuration'] = array (
);
$arguments613['content'] = '';
$arguments613['section'] = NULL;
$array615 = array (
);$arguments613['newsItem'] = $renderingContext->getVariableProvider()->getByPath('related', $array615);
$array616 = array (
);$arguments613['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array616);
$array617 = array (
);$arguments613['title'] = $renderingContext->getVariableProvider()->getByPath('related.title', $array617);

$output607 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments613, $renderChildrenClosure614, $renderingContext);

$output607 .= '
					</li>

				';
return $output607;
};
$arguments604 = array();
$arguments604['each'] = NULL;
$arguments604['as'] = NULL;
$arguments604['key'] = NULL;
$arguments604['reverse'] = false;
$arguments604['iteration'] = NULL;
$array606 = array (
);$arguments604['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array606);
$arguments604['as'] = 'related';

$output601 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext);

$output601 .= '
			</ul>
		</div>
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
);$array598['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.allRelatedSorted', $array599);

$expression600 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments596['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression600(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array598)
					),
					$renderingContext
				);
$arguments596['__thenClosure'] = $renderChildrenClosure597;

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext);

$output520 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
$output625 = '';

$output625 .= '
		<!-- related files -->
		<div class="news-related news-related-files">
			<h4>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments626 = array();
$arguments626['key'] = NULL;
$arguments626['id'] = NULL;
$arguments626['default'] = NULL;
$arguments626['arguments'] = NULL;
$arguments626['extensionName'] = NULL;
$arguments626['languageKey'] = NULL;
$arguments626['alternativeLanguageKeys'] = NULL;
$arguments626['key'] = 'related-files';

$output625 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments626, $renderChildrenClosure627, $renderingContext)]);

$output625 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
$output631 = '';

$output631 .= '
					<li>
						<span class="news-related-files-link">
							<a href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
$array635 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.publicUrl', $array635);
};
$arguments632 = array();
$arguments632['value'] = NULL;
$arguments632['keepQuotes'] = false;
$arguments632['encoding'] = 'UTF-8';
$arguments632['doubleEncode'] = true;
$value634 = ($arguments632['value'] !== NULL ? $arguments632['value'] : $renderChildrenClosure633());

$output631 .= !is_string($value634) && !(is_object($value634) && method_exists($value634, '__toString')) ? $value634 : htmlspecialchars($value634, ($arguments632['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments632['encoding'], $arguments632['doubleEncode']);

$output631 .= '" target="_blank">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments636 = array();
$arguments636['then'] = NULL;
$arguments636['else'] = NULL;
$arguments636['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array638 = array();
$array639 = array (
);$array638['0'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array639);

$expression640 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments636['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression640(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array638)
					),
					$renderingContext
				);
$array641 = array (
);$arguments636['then'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.title', $array641);
$array642 = array (
);$arguments636['else'] = $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.name', $array642);

$output631 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments636, $renderChildrenClosure637, $renderingContext);

$output631 .= '
							</a>
						</span>
						<span class="news-related-files-size"> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
$array645 = array (
);return $renderingContext->getVariableProvider()->getByPath('relatedFile.originalResource.size', $array645);
};
$arguments643 = array();
$arguments643['value'] = NULL;
$arguments643['decimals'] = 0;
$arguments643['decimalSeparator'] = '.';
$arguments643['thousandsSeparator'] = ',';
$arguments643['units'] = NULL;
$renderChildrenClosure644 = ($arguments643['value'] !== null) ? function() use ($arguments643) { return $arguments643['value']; } : $renderChildrenClosure644;
$output631 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext)]);

$output631 .= ' </span>
					</li>
				';
return $output631;
};
$arguments628 = array();
$arguments628['each'] = NULL;
$arguments628['as'] = NULL;
$arguments628['key'] = NULL;
$arguments628['reverse'] = false;
$arguments628['iteration'] = NULL;
$array630 = array (
);$arguments628['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array630);
$arguments628['as'] = 'relatedFile';

$output625 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments628, $renderChildrenClosure629, $renderingContext);

$output625 .= '
			</ul>
		</div>
	';
return $output625;
};
$arguments620 = array();
$arguments620['then'] = NULL;
$arguments620['else'] = NULL;
$arguments620['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array622 = array();
$array623 = array (
);$array622['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedFiles', $array623);

$expression624 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments620['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression624(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array622)
					),
					$renderingContext
				);
$arguments620['__thenClosure'] = $renderChildrenClosure621;

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments620, $renderChildrenClosure621, $renderingContext);

$output520 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
$output651 = '';

$output651 .= '
		<!-- Related links -->
		<div class="news-related news-related-links">
			<h4>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments652 = array();
$arguments652['key'] = NULL;
$arguments652['id'] = NULL;
$arguments652['default'] = NULL;
$arguments652['arguments'] = NULL;
$arguments652['extensionName'] = NULL;
$arguments652['languageKey'] = NULL;
$arguments652['alternativeLanguageKeys'] = NULL;
$arguments652['key'] = 'related-links';

$output651 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext)]);

$output651 .= '
			</h4>
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$output657 = '';

$output657 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments665 = array();
$arguments665['then'] = NULL;
$arguments665['else'] = NULL;
$arguments665['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array667 = array();
$array668 = array (
);$array667['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array668);

$expression669 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments665['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression669(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array667)
					),
					$renderingContext
				);
$array670 = array (
);$arguments665['then'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array670);
$array671 = array (
);$arguments665['else'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array671);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments665, $renderChildrenClosure666, $renderingContext);
};
$arguments658 = array();
$arguments658['parameter'] = NULL;
$arguments658['target'] = '';
$arguments658['class'] = '';
$arguments658['title'] = '';
$arguments658['additionalParams'] = '';
$arguments658['additionalAttributes'] = array (
);
$arguments658['useCacheHash'] = false;
$arguments658['addQueryString'] = false;
$arguments658['addQueryStringMethod'] = 'GET';
$arguments658['addQueryStringExclude'] = '';
$arguments658['absolute'] = false;
$array660 = array (
);$arguments658['parameter'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array660);
$array661 = array (
);$arguments658['title'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.title', $array661);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments662 = array();
$arguments662['link'] = NULL;
$array664 = array (
);$arguments662['link'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.uri', $array664);
$arguments658['target'] = GeorgRinger\News\ViewHelpers\TargetLinkViewHelper::renderStatic($arguments662, $renderChildrenClosure663, $renderingContext);

$output657 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments658, $renderChildrenClosure659, $renderingContext);

$output657 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure673 = function() use ($renderingContext, $self) {
$output677 = '';

$output677 .= '<span>';
$array678 = array (
);
$output677 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array678)]);

$output677 .= '</span>
						';
return $output677;
};
$arguments672 = array();
$arguments672['then'] = NULL;
$arguments672['else'] = NULL;
$arguments672['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array674 = array();
$array675 = array (
);$array674['0'] = $renderingContext->getVariableProvider()->getByPath('relatedLink.description', $array675);

$expression676 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments672['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression676(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array674)
					),
					$renderingContext
				);
$arguments672['__thenClosure'] = $renderChildrenClosure673;

$output657 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments672, $renderChildrenClosure673, $renderingContext);

$output657 .= '
					</li>
				';
return $output657;
};
$arguments654 = array();
$arguments654['each'] = NULL;
$arguments654['as'] = NULL;
$arguments654['key'] = NULL;
$arguments654['reverse'] = false;
$arguments654['iteration'] = NULL;
$array656 = array (
);$arguments654['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array656);
$arguments654['as'] = 'relatedLink';

$output651 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);

$output651 .= '
			</ul>
		</div>
	';
return $output651;
};
$arguments646 = array();
$arguments646['then'] = NULL;
$arguments646['else'] = NULL;
$arguments646['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array648 = array();
$array649 = array (
);$array648['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.relatedLinks', $array649);

$expression650 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments646['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression650(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array648)
					),
					$renderingContext
				);
$arguments646['__thenClosure'] = $renderChildrenClosure647;

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext);

$output520 .= '
';
return $output520;
};
$arguments518 = array();
$arguments518['name'] = NULL;
$arguments518['name'] = 'inner-content';

$output335 .= NULL;

$output335 .= '

';

return $output335;
}


}
#