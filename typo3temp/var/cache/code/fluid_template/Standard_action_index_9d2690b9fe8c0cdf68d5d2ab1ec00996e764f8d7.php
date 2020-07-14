<?php

class Standard_action_index_9d2690b9fe8c0cdf68d5d2ab1ec00996e764f8d7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Standard';
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
 * section Jumbotron
 */
public function section_54621857be8482061195a0838a0d85f76438f774(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <div class="jumbotron">
        <div class="container">
            <!–-TYPO3SEARCH_begin-–>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$array3 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array3);
};
$arguments1 = array();
$arguments1['value'] = NULL;

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '
            <!–-TYPO3SEARCH_end-–>
        </div>
    </div>
';

return $output0;
}
/**
 * section rootline
 */
public function section_c5489e2534b0bd52fb9bae8971ff4f6abe5716c8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output4 = '';

$output4 .= '
    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['data'] = NULL;
$arguments5['typoscriptObjectPath'] = NULL;
$arguments5['currentValueKey'] = NULL;
$arguments5['table'] = '';
$arguments5['typoscriptObjectPath'] = 'lib.rootline';
$renderChildrenClosure6 = ($arguments5['data'] !== null) ? function() use ($arguments5) { return $arguments5['data']; } : $renderChildrenClosure6;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
        <br>
    </div>
';

return $output4;
}
/**
 * section Startseite
 */
public function section_b660f83df4d651cb63d531b8463d856eccc4c7a6(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output7 = '';

$output7 .= '
    <div class="container">
        <div class="Startseite_main">
            <!–-TYPO3SEARCH_begin-–>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array10);
};
$arguments8 = array();
$arguments8['value'] = NULL;

$output7 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output7 .= '
        </div>
        <br>
        <hr>
        <br>
        <div class="card-group">
            <div class="card">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['data'] = NULL;
$arguments11['typoscriptObjectPath'] = NULL;
$arguments11['currentValueKey'] = NULL;
$arguments11['table'] = '';
$arguments11['typoscriptObjectPath'] = 'lib.picture1';
$renderChildrenClosure12 = ($arguments11['data'] !== null) ? function() use ($arguments11) { return $arguments11['data']; } : $renderChildrenClosure12;
$output7 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output7 .= '
                <div class="card-body">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array15);
};
$arguments13 = array();
$arguments13['value'] = NULL;

$output7 .= isset($arguments13['value']) ? $arguments13['value'] : $renderChildrenClosure14();

$output7 .= '
                </div>
            </div>
            <div class="card">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['data'] = NULL;
$arguments16['typoscriptObjectPath'] = NULL;
$arguments16['currentValueKey'] = NULL;
$arguments16['table'] = '';
$arguments16['typoscriptObjectPath'] = 'lib.picture2';
$renderChildrenClosure17 = ($arguments16['data'] !== null) ? function() use ($arguments16) { return $arguments16['data']; } : $renderChildrenClosure17;
$output7 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output7 .= '
                <div class="card-body">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$array20 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array20);
};
$arguments18 = array();
$arguments18['value'] = NULL;

$output7 .= isset($arguments18['value']) ? $arguments18['value'] : $renderChildrenClosure19();

$output7 .= '
                </div>
            </div>
            <div class="card">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['data'] = NULL;
$arguments21['typoscriptObjectPath'] = NULL;
$arguments21['currentValueKey'] = NULL;
$arguments21['table'] = '';
$arguments21['typoscriptObjectPath'] = 'lib.picture3';
$renderChildrenClosure22 = ($arguments21['data'] !== null) ? function() use ($arguments21) { return $arguments21['data']; } : $renderChildrenClosure22;
$output7 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output7 .= '
                <div class="card-body">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array25 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array25);
};
$arguments23 = array();
$arguments23['value'] = NULL;

$output7 .= isset($arguments23['value']) ? $arguments23['value'] : $renderChildrenClosure24();

$output7 .= '
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="Startseite_main">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array28 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array28);
};
$arguments26 = array();
$arguments26['value'] = NULL;

$output7 .= isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();

$output7 .= '
        </div>
        <!–-TYPO3SEARCH_end-–>
        <br>
        <br>
    </div>
';

return $output7;
}
/**
 * section 2Spalten
 */
public function section_681c85967796c9f258d7624aa056fb7328ca9188(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output29 = '';

$output29 .= '
    <div class="container maincontent">
        <div class="row">
            <div class="col-md-4">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['data'] = NULL;
$arguments30['typoscriptObjectPath'] = NULL;
$arguments30['currentValueKey'] = NULL;
$arguments30['table'] = '';
$arguments30['typoscriptObjectPath'] = 'lib.subnavigation';
$renderChildrenClosure31 = ($arguments30['data'] !== null) ? function() use ($arguments30) { return $arguments30['data']; } : $renderChildrenClosure31;
$output29 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array34);
};
$arguments32 = array();
$arguments32['value'] = NULL;

$output29 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output29 .= '
                <!–-TYPO3SEARCH_end-–>
            </div>
            <div class="col-md-8">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array37 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array37);
};
$arguments35 = array();
$arguments35['value'] = NULL;

$output29 .= isset($arguments35['value']) ? $arguments35['value'] : $renderChildrenClosure36();

$output29 .= '
                <!–-TYPO3SEARCH_end-–>
            </div>
        </div>
';

return $output29;
}
/**
 * section 2spaltenOhneUntermenue
 */
public function section_579b1b37454b8ad7ec64a965c272a0d39edec6ff(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output38 = '';

$output38 .= '
    <div class="container maincontent">
        <div class="row">
            <div class="col-md-8">
                <br>
                <br>
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array41 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array41);
};
$arguments39 = array();
$arguments39['value'] = NULL;

$output38 .= isset($arguments39['value']) ? $arguments39['value'] : $renderChildrenClosure40();

$output38 .= '
            </div>
            <div class="col-md-4">
                <br>
                <br>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$array44 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array44);
};
$arguments42 = array();
$arguments42['value'] = NULL;

$output38 .= isset($arguments42['value']) ? $arguments42['value'] : $renderChildrenClosure43();

$output38 .= '
                <!–-TYPO3SEARCH_end-–>
            </div>
        </div>
        <br>
        <br>
';

return $output38;
}
/**
 * section 1Spalte
 */
public function section_5d13ac32e84b4ed26757b552af7d24c6e02a4686(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output45 = '';

$output45 .= '
    <div class="container maincontent">
        <div class="row">
            <div class="col-md-12">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array48 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array48);
};
$arguments46 = array();
$arguments46['value'] = NULL;

$output45 .= isset($arguments46['value']) ? $arguments46['value'] : $renderChildrenClosure47();

$output45 .= '
                <!–-TYPO3SEARCH_end-–>
            </div>
        </div>
';

return $output45;
}
/**
 * section 3Box
 */
public function section_292b74bcd0175453827f77b69bca6891406953f3(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output49 = '';

$output49 .= '
    <div class="container maincontent">
        <div class="row">
            <div class="col-md-12">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$array52 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array52);
};
$arguments50 = array();
$arguments50['value'] = NULL;

$output49 .= isset($arguments50['value']) ? $arguments50['value'] : $renderChildrenClosure51();

$output49 .= '
                <!–-TYPO3SEARCH_end-–>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$array55 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array55);
};
$arguments53 = array();
$arguments53['value'] = NULL;

$output49 .= isset($arguments53['value']) ? $arguments53['value'] : $renderChildrenClosure54();

$output49 .= '
                <!–-TYPO3SEARCH_end-–>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img alt="Obst" src="/fileadmin/images/Saisonkalender/orchard-1872997_1920.jpg">
                        </div>
                        <div class="flip-card-back">
                            <br>
                            <br>
                            <br>
                            <!–-TYPO3SEARCH_begin-–>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$array58 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array58);
};
$arguments56 = array();
$arguments56['value'] = NULL;

$output49 .= isset($arguments56['value']) ? $arguments56['value'] : $renderChildrenClosure57();

$output49 .= '
                            <!–-TYPO3SEARCH_end-–>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$array61 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array61);
};
$arguments59 = array();
$arguments59['value'] = NULL;

$output49 .= isset($arguments59['value']) ? $arguments59['value'] : $renderChildrenClosure60();

$output49 .= '
                <!–-TYPO3SEARCH_end-–>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img alt="Obst" src="/fileadmin/images/Saisonkalender/salad-4755777_1920.jpg">
                        </div>
                        <div class="flip-card-back">
                            <br>
                            <br>
                            <br>
                            <!–-TYPO3SEARCH_begin-–>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$array64 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array64);
};
$arguments62 = array();
$arguments62['value'] = NULL;

$output49 .= isset($arguments62['value']) ? $arguments62['value'] : $renderChildrenClosure63();

$output49 .= '
                            <!–-TYPO3SEARCH_end-–>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$array67 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array67);
};
$arguments65 = array();
$arguments65['value'] = NULL;

$output49 .= isset($arguments65['value']) ? $arguments65['value'] : $renderChildrenClosure66();

$output49 .= '
                <!–-TYPO3SEARCH_end-–>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img alt="Obst" src="fileadmin/images/Saisonkalender/italian-4246406_1920.jpg">
                        </div>
                        <div class="flip-card-back">
                            <br>
                            <br>
                            <br>
                            <!–-TYPO3SEARCH_begin-–>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$array70 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array70);
};
$arguments68 = array();
$arguments68['value'] = NULL;

$output49 .= isset($arguments68['value']) ? $arguments68['value'] : $renderChildrenClosure69();

$output49 .= '
                            <!–-TYPO3SEARCH_end-–>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
';

return $output49;
}
/**
 * section Rezept
 */
public function section_7d1778b25a3925f0bf52e74e2e509d4bcfe0c564(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output71 = '';

$output71 .= '
    <div class="container maincontent">

        <!–-TYPO3SEARCH_begin-–>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$array74 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array74);
};
$arguments72 = array();
$arguments72['value'] = NULL;

$output71 .= isset($arguments72['value']) ? $arguments72['value'] : $renderChildrenClosure73();

$output71 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$array77 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array77);
};
$arguments75 = array();
$arguments75['value'] = NULL;

$output71 .= isset($arguments75['value']) ? $arguments75['value'] : $renderChildrenClosure76();

$output71 .= '
        <!–-TYPO3SEARCH_end-–>
        <hr>
        <h3> Weitere Rezepte in dieser Kategorie. </h3>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['data'] = NULL;
$arguments78['typoscriptObjectPath'] = NULL;
$arguments78['currentValueKey'] = NULL;
$arguments78['table'] = '';
$arguments78['typoscriptObjectPath'] = 'lib.navigationRezepte';
$renderChildrenClosure79 = ($arguments78['data'] !== null) ? function() use ($arguments78) { return $arguments78['data']; } : $renderChildrenClosure79;
$output71 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output71 .= '
    </div>
';

return $output71;
}
/**
 * section jumbotronplusboxen
 */
public function section_06d950a812cc6f0da70c0b018115ac031b76a9de(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output80 = '';

$output80 .= '
    <div class="container maincontent">
        <!–-TYPO3SEARCH_begin-–>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$array83 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array83);
};
$arguments81 = array();
$arguments81['value'] = NULL;

$output80 .= isset($arguments81['value']) ? $arguments81['value'] : $renderChildrenClosure82();

$output80 .= '
        <!–-TYPO3SEARCH_end-–>
    </div>
';

return $output80;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output84 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['name'] = NULL;
$arguments85['name'] = 'Standard';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output84 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
    <div class="jumbotron">
        <div class="container">
            <!–-TYPO3SEARCH_begin-–>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$array92 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array92);
};
$arguments90 = array();
$arguments90['value'] = NULL;

$output89 .= isset($arguments90['value']) ? $arguments90['value'] : $renderChildrenClosure91();

$output89 .= '
            <!–-TYPO3SEARCH_end-–>
        </div>
    </div>
';
return $output89;
};
$arguments87 = array();
$arguments87['name'] = NULL;
$arguments87['name'] = 'Jumbotron';

$output84 .= NULL;

$output84 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['data'] = NULL;
$arguments96['typoscriptObjectPath'] = NULL;
$arguments96['currentValueKey'] = NULL;
$arguments96['table'] = '';
$arguments96['typoscriptObjectPath'] = 'lib.rootline';
$renderChildrenClosure97 = ($arguments96['data'] !== null) ? function() use ($arguments96) { return $arguments96['data']; } : $renderChildrenClosure97;
$output95 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
        <br>
    </div>
';
return $output95;
};
$arguments93 = array();
$arguments93['name'] = NULL;
$arguments93['name'] = 'rootline';

$output84 .= NULL;

$output84 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
    <div class="container">
        <div class="Startseite_main">
            <!–-TYPO3SEARCH_begin-–>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array103);
};
$arguments101 = array();
$arguments101['value'] = NULL;

$output100 .= isset($arguments101['value']) ? $arguments101['value'] : $renderChildrenClosure102();

$output100 .= '
        </div>
        <br>
        <hr>
        <br>
        <div class="card-group">
            <div class="card">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['data'] = NULL;
$arguments104['typoscriptObjectPath'] = NULL;
$arguments104['currentValueKey'] = NULL;
$arguments104['table'] = '';
$arguments104['typoscriptObjectPath'] = 'lib.picture1';
$renderChildrenClosure105 = ($arguments104['data'] !== null) ? function() use ($arguments104) { return $arguments104['data']; } : $renderChildrenClosure105;
$output100 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output100 .= '
                <div class="card-body">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array108);
};
$arguments106 = array();
$arguments106['value'] = NULL;

$output100 .= isset($arguments106['value']) ? $arguments106['value'] : $renderChildrenClosure107();

$output100 .= '
                </div>
            </div>
            <div class="card">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['data'] = NULL;
$arguments109['typoscriptObjectPath'] = NULL;
$arguments109['currentValueKey'] = NULL;
$arguments109['table'] = '';
$arguments109['typoscriptObjectPath'] = 'lib.picture2';
$renderChildrenClosure110 = ($arguments109['data'] !== null) ? function() use ($arguments109) { return $arguments109['data']; } : $renderChildrenClosure110;
$output100 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output100 .= '
                <div class="card-body">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$array113 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array113);
};
$arguments111 = array();
$arguments111['value'] = NULL;

$output100 .= isset($arguments111['value']) ? $arguments111['value'] : $renderChildrenClosure112();

$output100 .= '
                </div>
            </div>
            <div class="card">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['data'] = NULL;
$arguments114['typoscriptObjectPath'] = NULL;
$arguments114['currentValueKey'] = NULL;
$arguments114['table'] = '';
$arguments114['typoscriptObjectPath'] = 'lib.picture3';
$renderChildrenClosure115 = ($arguments114['data'] !== null) ? function() use ($arguments114) { return $arguments114['data']; } : $renderChildrenClosure115;
$output100 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output100 .= '
                <div class="card-body">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$array118 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array118);
};
$arguments116 = array();
$arguments116['value'] = NULL;

$output100 .= isset($arguments116['value']) ? $arguments116['value'] : $renderChildrenClosure117();

$output100 .= '
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="Startseite_main">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$array121 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array121);
};
$arguments119 = array();
$arguments119['value'] = NULL;

$output100 .= isset($arguments119['value']) ? $arguments119['value'] : $renderChildrenClosure120();

$output100 .= '
        </div>
        <!–-TYPO3SEARCH_end-–>
        <br>
        <br>
    </div>
';
return $output100;
};
$arguments98 = array();
$arguments98['name'] = NULL;
$arguments98['name'] = 'Startseite';

$output84 .= NULL;

$output84 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
    <div class="container maincontent">
        <div class="row">
            <div class="col-md-4">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['data'] = NULL;
$arguments125['typoscriptObjectPath'] = NULL;
$arguments125['currentValueKey'] = NULL;
$arguments125['table'] = '';
$arguments125['typoscriptObjectPath'] = 'lib.subnavigation';
$renderChildrenClosure126 = ($arguments125['data'] !== null) ? function() use ($arguments125) { return $arguments125['data']; } : $renderChildrenClosure126;
$output124 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= '
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$array129 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array129);
};
$arguments127 = array();
$arguments127['value'] = NULL;

$output124 .= isset($arguments127['value']) ? $arguments127['value'] : $renderChildrenClosure128();

$output124 .= '
                <!–-TYPO3SEARCH_end-–>
            </div>
            <div class="col-md-8">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$array132 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array132);
};
$arguments130 = array();
$arguments130['value'] = NULL;

$output124 .= isset($arguments130['value']) ? $arguments130['value'] : $renderChildrenClosure131();

$output124 .= '
                <!–-TYPO3SEARCH_end-–>
            </div>
        </div>
';
return $output124;
};
$arguments122 = array();
$arguments122['name'] = NULL;
$arguments122['name'] = '2Spalten';

$output84 .= NULL;

$output84 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
    <div class="container maincontent">
        <div class="row">
            <div class="col-md-8">
                <br>
                <br>
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$array138 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array138);
};
$arguments136 = array();
$arguments136['value'] = NULL;

$output135 .= isset($arguments136['value']) ? $arguments136['value'] : $renderChildrenClosure137();

$output135 .= '
            </div>
            <div class="col-md-4">
                <br>
                <br>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$array141 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array141);
};
$arguments139 = array();
$arguments139['value'] = NULL;

$output135 .= isset($arguments139['value']) ? $arguments139['value'] : $renderChildrenClosure140();

$output135 .= '
                <!–-TYPO3SEARCH_end-–>
            </div>
        </div>
        <br>
        <br>
';
return $output135;
};
$arguments133 = array();
$arguments133['name'] = NULL;
$arguments133['name'] = '2spaltenOhneUntermenue';

$output84 .= NULL;

$output84 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
    <div class="container maincontent">
        <div class="row">
            <div class="col-md-12">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$array147 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array147);
};
$arguments145 = array();
$arguments145['value'] = NULL;

$output144 .= isset($arguments145['value']) ? $arguments145['value'] : $renderChildrenClosure146();

$output144 .= '
                <!–-TYPO3SEARCH_end-–>
            </div>
        </div>
';
return $output144;
};
$arguments142 = array();
$arguments142['name'] = NULL;
$arguments142['name'] = '1Spalte';

$output84 .= NULL;

$output84 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
    <div class="container maincontent">
        <div class="row">
            <div class="col-md-12">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$array153 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array153);
};
$arguments151 = array();
$arguments151['value'] = NULL;

$output150 .= isset($arguments151['value']) ? $arguments151['value'] : $renderChildrenClosure152();

$output150 .= '
                <!–-TYPO3SEARCH_end-–>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$array156 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array156);
};
$arguments154 = array();
$arguments154['value'] = NULL;

$output150 .= isset($arguments154['value']) ? $arguments154['value'] : $renderChildrenClosure155();

$output150 .= '
                <!–-TYPO3SEARCH_end-–>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img alt="Obst" src="/fileadmin/images/Saisonkalender/orchard-1872997_1920.jpg">
                        </div>
                        <div class="flip-card-back">
                            <br>
                            <br>
                            <br>
                            <!–-TYPO3SEARCH_begin-–>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$array159 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array159);
};
$arguments157 = array();
$arguments157['value'] = NULL;

$output150 .= isset($arguments157['value']) ? $arguments157['value'] : $renderChildrenClosure158();

$output150 .= '
                            <!–-TYPO3SEARCH_end-–>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$array162 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array162);
};
$arguments160 = array();
$arguments160['value'] = NULL;

$output150 .= isset($arguments160['value']) ? $arguments160['value'] : $renderChildrenClosure161();

$output150 .= '
                <!–-TYPO3SEARCH_end-–>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img alt="Obst" src="/fileadmin/images/Saisonkalender/salad-4755777_1920.jpg">
                        </div>
                        <div class="flip-card-back">
                            <br>
                            <br>
                            <br>
                            <!–-TYPO3SEARCH_begin-–>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$array165 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array165);
};
$arguments163 = array();
$arguments163['value'] = NULL;

$output150 .= isset($arguments163['value']) ? $arguments163['value'] : $renderChildrenClosure164();

$output150 .= '
                            <!–-TYPO3SEARCH_end-–>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!–-TYPO3SEARCH_begin-–>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$array168 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array168);
};
$arguments166 = array();
$arguments166['value'] = NULL;

$output150 .= isset($arguments166['value']) ? $arguments166['value'] : $renderChildrenClosure167();

$output150 .= '
                <!–-TYPO3SEARCH_end-–>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img alt="Obst" src="fileadmin/images/Saisonkalender/italian-4246406_1920.jpg">
                        </div>
                        <div class="flip-card-back">
                            <br>
                            <br>
                            <br>
                            <!–-TYPO3SEARCH_begin-–>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$array171 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array171);
};
$arguments169 = array();
$arguments169['value'] = NULL;

$output150 .= isset($arguments169['value']) ? $arguments169['value'] : $renderChildrenClosure170();

$output150 .= '
                            <!–-TYPO3SEARCH_end-–>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
';
return $output150;
};
$arguments148 = array();
$arguments148['name'] = NULL;
$arguments148['name'] = '3Box';

$output84 .= NULL;

$output84 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
    <div class="container maincontent">

        <!–-TYPO3SEARCH_begin-–>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$array177 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array177);
};
$arguments175 = array();
$arguments175['value'] = NULL;

$output174 .= isset($arguments175['value']) ? $arguments175['value'] : $renderChildrenClosure176();

$output174 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$array180 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array180);
};
$arguments178 = array();
$arguments178['value'] = NULL;

$output174 .= isset($arguments178['value']) ? $arguments178['value'] : $renderChildrenClosure179();

$output174 .= '
        <!–-TYPO3SEARCH_end-–>
        <hr>
        <h3> Weitere Rezepte in dieser Kategorie. </h3>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['data'] = NULL;
$arguments181['typoscriptObjectPath'] = NULL;
$arguments181['currentValueKey'] = NULL;
$arguments181['table'] = '';
$arguments181['typoscriptObjectPath'] = 'lib.navigationRezepte';
$renderChildrenClosure182 = ($arguments181['data'] !== null) ? function() use ($arguments181) { return $arguments181['data']; } : $renderChildrenClosure182;
$output174 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output174 .= '
    </div>
';
return $output174;
};
$arguments172 = array();
$arguments172['name'] = NULL;
$arguments172['name'] = 'Rezept';

$output84 .= NULL;

$output84 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
    <div class="container maincontent">
        <!–-TYPO3SEARCH_begin-–>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$array188 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array188);
};
$arguments186 = array();
$arguments186['value'] = NULL;

$output185 .= isset($arguments186['value']) ? $arguments186['value'] : $renderChildrenClosure187();

$output185 .= '
        <!–-TYPO3SEARCH_end-–>
    </div>
';
return $output185;
};
$arguments183 = array();
$arguments183['name'] = NULL;
$arguments183['name'] = 'jumbotronplusboxen';

$output84 .= NULL;

$output84 .= '


';

return $output84;
}


}
#