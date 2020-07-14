<?php

class partial_Detail_Opengraph_df48d83c635c57f0109179c0c35bfec34e2665b6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
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
$output12 = '';

$output12 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['property'] = NULL;
$arguments15['name'] = NULL;
$arguments15['content'] = NULL;
$arguments15['useCurrentDomain'] = false;
$arguments15['forceAbsoluteUrl'] = false;
$arguments15['property'] = 'og:title';
$array17 = array (
);$arguments15['content'] = $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array17);
return GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);
};
$arguments13 = array();

$output12 .= '';

$output12 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['property'] = NULL;
$arguments20['name'] = NULL;
$arguments20['content'] = NULL;
$arguments20['useCurrentDomain'] = false;
$arguments20['forceAbsoluteUrl'] = false;
$arguments20['property'] = 'og:title';
$array22 = array (
);$arguments20['content'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array22);
return GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);
};
$arguments18 = array();
$arguments18['if'] = NULL;

$output12 .= '';

$output12 .= '
';
return $output12;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['property'] = NULL;
$arguments3['name'] = NULL;
$arguments3['content'] = NULL;
$arguments3['useCurrentDomain'] = false;
$arguments3['forceAbsoluteUrl'] = false;
$arguments3['property'] = 'og:title';
$array5 = array (
);$arguments3['content'] = $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle', $array5);
return GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['property'] = NULL;
$arguments6['name'] = NULL;
$arguments6['content'] = NULL;
$arguments6['useCurrentDomain'] = false;
$arguments6['forceAbsoluteUrl'] = false;
$arguments6['property'] = 'og:title';
$array8 = array (
);$arguments6['content'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array8);
return GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['property'] = NULL;
$arguments23['name'] = NULL;
$arguments23['content'] = NULL;
$arguments23['useCurrentDomain'] = false;
$arguments23['forceAbsoluteUrl'] = false;
$arguments23['property'] = 'og:type';
$array25 = array (
);$arguments23['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.type', $array25);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['property'] = NULL;
$arguments26['name'] = NULL;
$arguments26['content'] = NULL;
$arguments26['useCurrentDomain'] = false;
$arguments26['forceAbsoluteUrl'] = false;
$arguments26['property'] = 'og:url';
$arguments26['content'] = '';
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array28['0'] = 1;

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['useCurrentDomain'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['property'] = NULL;
$arguments30['name'] = NULL;
$arguments30['content'] = NULL;
$arguments30['useCurrentDomain'] = false;
$arguments30['forceAbsoluteUrl'] = false;
$arguments30['property'] = 'og:site_name';
$array32 = array (
);$arguments30['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.site_name', $array32);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['property'] = NULL;
$arguments39['name'] = NULL;
$arguments39['content'] = NULL;
$arguments39['useCurrentDomain'] = false;
$arguments39['forceAbsoluteUrl'] = false;
$arguments39['property'] = 'og:image';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['src'] = NULL;
$arguments41['treatIdAsReference'] = false;
$arguments41['image'] = NULL;
$arguments41['crop'] = NULL;
$arguments41['cropVariant'] = 'default';
$arguments41['width'] = NULL;
$arguments41['height'] = NULL;
$arguments41['minWidth'] = NULL;
$arguments41['minHeight'] = NULL;
$arguments41['maxWidth'] = NULL;
$arguments41['maxHeight'] = NULL;
$arguments41['absolute'] = false;
$array43 = array (
);$arguments41['src'] = $renderingContext->getVariableProvider()->getByPath('newsItem.firstPreview.uid', $array43);
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array44['0'] = 1;

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments41['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments41['maxWidth'] = 500;
$arguments39['content'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array46['0'] = 1;

$expression47 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['forceAbsoluteUrl'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);

$output38 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['property'] = NULL;
$arguments48['name'] = NULL;
$arguments48['content'] = NULL;
$arguments48['useCurrentDomain'] = false;
$arguments48['forceAbsoluteUrl'] = false;
$arguments48['property'] = 'og:image:width';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ImageSizeViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['property'] = NULL;
$arguments50['property'] = 'width';
$arguments48['content'] = GeorgRinger\News\ViewHelpers\ImageSizeViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output38 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output38 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['property'] = NULL;
$arguments52['name'] = NULL;
$arguments52['content'] = NULL;
$arguments52['useCurrentDomain'] = false;
$arguments52['forceAbsoluteUrl'] = false;
$arguments52['property'] = 'og:image:height';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ImageSizeViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['property'] = NULL;
$arguments54['property'] = 'height';
$arguments52['content'] = GeorgRinger\News\ViewHelpers\ImageSizeViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output38 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output38 .= '
';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.firstPreview', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['property'] = NULL;
$arguments83['name'] = NULL;
$arguments83['content'] = NULL;
$arguments83['useCurrentDomain'] = false;
$arguments83['forceAbsoluteUrl'] = false;
$arguments83['name'] = 'description';
$array85 = array (
);$arguments83['content'] = $renderingContext->getVariableProvider()->getByPath('newsItem.description', $array85);

$output82 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['property'] = NULL;
$arguments86['name'] = NULL;
$arguments86['content'] = NULL;
$arguments86['useCurrentDomain'] = false;
$arguments86['forceAbsoluteUrl'] = false;
$arguments86['property'] = 'og:description';
$array88 = array (
);$arguments86['content'] = $renderingContext->getVariableProvider()->getByPath('newsItem.description', $array88);

$output82 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output82 .= '
	';
return $output82;
};
$arguments80 = array();

$output79 .= '';

$output79 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['property'] = NULL;
$arguments92['name'] = NULL;
$arguments92['content'] = NULL;
$arguments92['useCurrentDomain'] = false;
$arguments92['forceAbsoluteUrl'] = false;
$arguments92['name'] = 'description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array96 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array96);
};
$arguments94 = array();
$arguments94['value'] = NULL;
$arguments94['allowedTags'] = NULL;
$renderChildrenClosure95 = ($arguments94['value'] !== null) ? function() use ($arguments94) { return $arguments94['value']; } : $renderChildrenClosure95;$arguments92['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output91 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['property'] = NULL;
$arguments97['name'] = NULL;
$arguments97['content'] = NULL;
$arguments97['useCurrentDomain'] = false;
$arguments97['forceAbsoluteUrl'] = false;
$arguments97['property'] = 'og:description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$array101 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array101);
};
$arguments99 = array();
$arguments99['value'] = NULL;
$arguments99['allowedTags'] = NULL;
$renderChildrenClosure100 = ($arguments99['value'] !== null) ? function() use ($arguments99) { return $arguments99['value']; } : $renderChildrenClosure100;$arguments97['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output91 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output91 .= '
	';
return $output91;
};
$arguments89 = array();
$arguments89['if'] = NULL;

$output79 .= '';

$output79 .= '
';
return $output79;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.description', $array77);

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments56['__thenClosure'] = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['property'] = NULL;
$arguments59['name'] = NULL;
$arguments59['content'] = NULL;
$arguments59['useCurrentDomain'] = false;
$arguments59['forceAbsoluteUrl'] = false;
$arguments59['name'] = 'description';
$array61 = array (
);$arguments59['content'] = $renderingContext->getVariableProvider()->getByPath('newsItem.description', $array61);

$output58 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['property'] = NULL;
$arguments62['name'] = NULL;
$arguments62['content'] = NULL;
$arguments62['useCurrentDomain'] = false;
$arguments62['forceAbsoluteUrl'] = false;
$arguments62['property'] = 'og:description';
$array64 = array (
);$arguments62['content'] = $renderingContext->getVariableProvider()->getByPath('newsItem.description', $array64);

$output58 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output58 .= '
	';
return $output58;
};
$arguments56['__elseClosures'][] = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['property'] = NULL;
$arguments66['name'] = NULL;
$arguments66['content'] = NULL;
$arguments66['useCurrentDomain'] = false;
$arguments66['forceAbsoluteUrl'] = false;
$arguments66['name'] = 'description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$array70 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array70);
};
$arguments68 = array();
$arguments68['value'] = NULL;
$arguments68['allowedTags'] = NULL;
$renderChildrenClosure69 = ($arguments68['value'] !== null) ? function() use ($arguments68) { return $arguments68['value']; } : $renderChildrenClosure69;$arguments66['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output65 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['property'] = NULL;
$arguments71['name'] = NULL;
$arguments71['content'] = NULL;
$arguments71['useCurrentDomain'] = false;
$arguments71['forceAbsoluteUrl'] = false;
$arguments71['property'] = 'og:description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$array75 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array75);
};
$arguments73 = array();
$arguments73['value'] = NULL;
$arguments73['allowedTags'] = NULL;
$renderChildrenClosure74 = ($arguments73['value'] !== null) ? function() use ($arguments73) { return $arguments73['value']; } : $renderChildrenClosure74;$arguments71['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output65 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output65 .= '
	';
return $output65;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['property'] = NULL;
$arguments102['name'] = NULL;
$arguments102['content'] = NULL;
$arguments102['useCurrentDomain'] = false;
$arguments102['forceAbsoluteUrl'] = false;
$arguments102['name'] = 'keywords';
$array104 = array (
);$arguments102['content'] = $renderingContext->getVariableProvider()->getByPath('newsItem.keywords', $array104);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['property'] = NULL;
$arguments105['name'] = NULL;
$arguments105['content'] = NULL;
$arguments105['useCurrentDomain'] = false;
$arguments105['forceAbsoluteUrl'] = false;
$arguments105['property'] = 'fb:admins';
$array107 = array (
);$arguments105['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.admins', $array107);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['property'] = NULL;
$arguments108['name'] = NULL;
$arguments108['content'] = NULL;
$arguments108['useCurrentDomain'] = false;
$arguments108['forceAbsoluteUrl'] = false;
$arguments108['property'] = 'og:email';
$array110 = array (
);$arguments108['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.email', $array110);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['property'] = NULL;
$arguments111['name'] = NULL;
$arguments111['content'] = NULL;
$arguments111['useCurrentDomain'] = false;
$arguments111['forceAbsoluteUrl'] = false;
$arguments111['property'] = 'og:phone_number';
$array113 = array (
);$arguments111['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.phone_number', $array113);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['property'] = NULL;
$arguments114['name'] = NULL;
$arguments114['content'] = NULL;
$arguments114['useCurrentDomain'] = false;
$arguments114['forceAbsoluteUrl'] = false;
$arguments114['property'] = 'og:fax_number';
$array116 = array (
);$arguments114['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.fax_number', $array116);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['property'] = NULL;
$arguments117['name'] = NULL;
$arguments117['content'] = NULL;
$arguments117['useCurrentDomain'] = false;
$arguments117['forceAbsoluteUrl'] = false;
$arguments117['property'] = 'og:latitude';
$array119 = array (
);$arguments117['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.latitude', $array119);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['property'] = NULL;
$arguments120['name'] = NULL;
$arguments120['content'] = NULL;
$arguments120['useCurrentDomain'] = false;
$arguments120['forceAbsoluteUrl'] = false;
$arguments120['property'] = 'og:longitude';
$array122 = array (
);$arguments120['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.longitude', $array122);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['property'] = NULL;
$arguments123['name'] = NULL;
$arguments123['content'] = NULL;
$arguments123['useCurrentDomain'] = false;
$arguments123['forceAbsoluteUrl'] = false;
$arguments123['property'] = 'og:street-address';
$array125 = array (
);$arguments123['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.street-address', $array125);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['property'] = NULL;
$arguments126['name'] = NULL;
$arguments126['content'] = NULL;
$arguments126['useCurrentDomain'] = false;
$arguments126['forceAbsoluteUrl'] = false;
$arguments126['property'] = 'og:locality';
$array128 = array (
);$arguments126['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.locality', $array128);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['property'] = NULL;
$arguments129['name'] = NULL;
$arguments129['content'] = NULL;
$arguments129['useCurrentDomain'] = false;
$arguments129['forceAbsoluteUrl'] = false;
$arguments129['property'] = 'og:locale';
$array131 = array (
);$arguments129['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.locale', $array131);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['property'] = NULL;
$arguments132['name'] = NULL;
$arguments132['content'] = NULL;
$arguments132['useCurrentDomain'] = false;
$arguments132['forceAbsoluteUrl'] = false;
$arguments132['property'] = 'og:region';
$array134 = array (
);$arguments132['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.region', $array134);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['property'] = NULL;
$arguments135['name'] = NULL;
$arguments135['content'] = NULL;
$arguments135['useCurrentDomain'] = false;
$arguments135['forceAbsoluteUrl'] = false;
$arguments135['property'] = 'og:postal-code';
$array137 = array (
);$arguments135['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.postal-code', $array137);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['property'] = NULL;
$arguments138['name'] = NULL;
$arguments138['content'] = NULL;
$arguments138['useCurrentDomain'] = false;
$arguments138['forceAbsoluteUrl'] = false;
$arguments138['property'] = 'og:country-name';
$array140 = array (
);$arguments138['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.country-name', $array140);

$output0 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['property'] = NULL;
$arguments147['name'] = NULL;
$arguments147['content'] = NULL;
$arguments147['useCurrentDomain'] = false;
$arguments147['forceAbsoluteUrl'] = false;
$arguments147['name'] = 'twitter:card';
$array149 = array (
);$arguments147['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.card', $array149);

$output146 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['property'] = NULL;
$arguments150['name'] = NULL;
$arguments150['content'] = NULL;
$arguments150['useCurrentDomain'] = false;
$arguments150['forceAbsoluteUrl'] = false;
$arguments150['name'] = 'twitter:site';
$array152 = array (
);$arguments150['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.site', $array152);

$output146 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output146 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['property'] = NULL;
$arguments153['name'] = NULL;
$arguments153['content'] = NULL;
$arguments153['useCurrentDomain'] = false;
$arguments153['forceAbsoluteUrl'] = false;
$arguments153['name'] = 'twitter:creator';
$array155 = array (
);$arguments153['content'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.creator', $array155);

$output146 .= GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output146 .= '
';
return $output146;
};
$arguments141 = array();
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.site', $array144);

$expression145 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$arguments141['__thenClosure'] = $renderChildrenClosure142;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#