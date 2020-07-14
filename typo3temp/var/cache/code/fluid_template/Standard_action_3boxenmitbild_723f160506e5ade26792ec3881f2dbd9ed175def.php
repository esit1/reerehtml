<?php

class Standard_action_3boxenmitbild_723f160506e5ade26792ec3881f2dbd9ed175def extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['alt'] = NULL;
$arguments11['ismap'] = NULL;
$arguments11['longdesc'] = NULL;
$arguments11['usemap'] = NULL;
$arguments11['src'] = NULL;
$arguments11['treatIdAsReference'] = NULL;
$arguments11['image'] = NULL;
$arguments11['crop'] = NULL;
$arguments11['cropVariant'] = 'default';
$arguments11['width'] = NULL;
$arguments11['height'] = NULL;
$arguments11['minWidth'] = NULL;
$arguments11['minHeight'] = NULL;
$arguments11['maxWidth'] = NULL;
$arguments11['maxHeight'] = NULL;
$arguments11['absolute'] = false;
$array13 = array (
);$arguments11['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array13);
$array14 = array (
);$arguments11['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array14);
$array15 = array (
);$arguments11['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array15);
$arguments11['width'] = 400;

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
                            <br/>
                        ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('data_tx_dreiboxv1_bildbox1', $array9);
$arguments7['as'] = 'file';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('data_tx_dreiboxv1_bildbox1', $array4);

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
                </div>
            </div>
            <blockquote class="blockquote">
                <p class="mb-0">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_textbox1', $array24);
};
$arguments22 = array();
$arguments22['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments22['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
                        <br/>
                    ';
return $output21;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_textbox1', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['__thenClosure'] = $renderChildrenClosure17;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
                </p>
                <footer class="blockquote-footer">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return 'Zu den Rezepten.
                        ';
};
$arguments31 = array();
$arguments31['parameter'] = NULL;
$arguments31['target'] = '';
$arguments31['class'] = '';
$arguments31['title'] = '';
$arguments31['additionalParams'] = '';
$arguments31['additionalAttributes'] = array (
);
$arguments31['useCacheHash'] = false;
$arguments31['addQueryString'] = false;
$arguments31['addQueryStringMethod'] = 'GET';
$arguments31['addQueryStringExclude'] = '';
$arguments31['absolute'] = false;
$array33 = array (
);$arguments31['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_linkbox1', $array33);

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
                    ';
return $output30;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_linkbox1', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = $renderChildrenClosure26;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output0 .= '
                </footer>
            </blockquote>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$arguments44['alt'] = NULL;
$arguments44['ismap'] = NULL;
$arguments44['longdesc'] = NULL;
$arguments44['usemap'] = NULL;
$arguments44['src'] = NULL;
$arguments44['treatIdAsReference'] = NULL;
$arguments44['image'] = NULL;
$arguments44['crop'] = NULL;
$arguments44['cropVariant'] = 'default';
$arguments44['width'] = NULL;
$arguments44['height'] = NULL;
$arguments44['minWidth'] = NULL;
$arguments44['minHeight'] = NULL;
$arguments44['maxWidth'] = NULL;
$arguments44['maxHeight'] = NULL;
$arguments44['absolute'] = false;
$array46 = array (
);$arguments44['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array46);
$array47 = array (
);$arguments44['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array47);
$array48 = array (
);$arguments44['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array48);
$arguments44['width'] = 400;

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
                            <br/>
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
);$arguments40['each'] = $renderingContext->getVariableProvider()->getByPath('data_tx_dreiboxv1_bildbox2', $array42);
$arguments40['as'] = 'file';

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
                    ';
return $output39;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('data_tx_dreiboxv1_bildbox2', $array37);

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments34['__thenClosure'] = $renderChildrenClosure35;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '
                </div>
            </div>
            <blockquote class="blockquote">
                <p class="mb-0">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$array57 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_textbox2', $array57);
};
$arguments55 = array();
$arguments55['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments55['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
                        <br/>
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
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_textbox2', $array52);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['__thenClosure'] = $renderChildrenClosure50;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output0 .= '
                </p>
                <footer class="blockquote-footer">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return 'Zu den Rezepten.
                        ';
};
$arguments64 = array();
$arguments64['parameter'] = NULL;
$arguments64['target'] = '';
$arguments64['class'] = '';
$arguments64['title'] = '';
$arguments64['additionalParams'] = '';
$arguments64['additionalAttributes'] = array (
);
$arguments64['useCacheHash'] = false;
$arguments64['addQueryString'] = false;
$arguments64['addQueryStringMethod'] = 'GET';
$arguments64['addQueryStringExclude'] = '';
$arguments64['absolute'] = false;
$array66 = array (
);$arguments64['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_linkbox2', $array66);

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
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
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_linkbox2', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments58['__thenClosure'] = $renderChildrenClosure59;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output0 .= '
                </footer>
            </blockquote>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['alt'] = NULL;
$arguments77['ismap'] = NULL;
$arguments77['longdesc'] = NULL;
$arguments77['usemap'] = NULL;
$arguments77['src'] = NULL;
$arguments77['treatIdAsReference'] = NULL;
$arguments77['image'] = NULL;
$arguments77['crop'] = NULL;
$arguments77['cropVariant'] = 'default';
$arguments77['width'] = NULL;
$arguments77['height'] = NULL;
$arguments77['minWidth'] = NULL;
$arguments77['minHeight'] = NULL;
$arguments77['maxWidth'] = NULL;
$arguments77['maxHeight'] = NULL;
$arguments77['absolute'] = false;
$array79 = array (
);$arguments77['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array79);
$array80 = array (
);$arguments77['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array80);
$array81 = array (
);$arguments77['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array81);
$arguments77['width'] = 400;

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                            <br/>
                        ';
return $output76;
};
$arguments73 = array();
$arguments73['each'] = NULL;
$arguments73['as'] = NULL;
$arguments73['key'] = NULL;
$arguments73['reverse'] = false;
$arguments73['iteration'] = NULL;
$array75 = array (
);$arguments73['each'] = $renderingContext->getVariableProvider()->getByPath('data_tx_dreiboxv1_bildbox3', $array75);
$arguments73['as'] = 'file';

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
                    ';
return $output72;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('data_tx_dreiboxv1_bildbox3', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = $renderChildrenClosure68;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output0 .= '
                </div>
            </div>
            <blockquote class="blockquote">
                <p class="mb-0">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$array90 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_textbox3', $array90);
};
$arguments88 = array();
$arguments88['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments88['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
                        <br/>
                    ';
return $output87;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_textbox3', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output0 .= '
                </p>
                <footer class="blockquote-footer">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return 'Zu den Rezepten.
                        ';
};
$arguments97 = array();
$arguments97['parameter'] = NULL;
$arguments97['target'] = '';
$arguments97['class'] = '';
$arguments97['title'] = '';
$arguments97['additionalParams'] = '';
$arguments97['additionalAttributes'] = array (
);
$arguments97['useCacheHash'] = false;
$arguments97['addQueryString'] = false;
$arguments97['addQueryStringMethod'] = 'GET';
$arguments97['addQueryStringExclude'] = '';
$arguments97['absolute'] = false;
$array99 = array (
);$arguments97['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_linkbox3', $array99);

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
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
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_dreiboxv1_linkbox3', $array94);

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output0 .= '

                </footer>
            </blockquote>
        </div>
    </div>
</div>';

return $output0;
}


}
#