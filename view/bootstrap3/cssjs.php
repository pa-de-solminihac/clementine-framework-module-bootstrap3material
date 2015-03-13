<?php
$cssjs = $this->getModel('cssjs');
$cssjs->register_foot('jquery', array(
    'src' => $this->getHelper('jquery')->getUrl()
));
// bootstrap3
$cssjs->register_foot('bootstrap3', array(
    'src' => __WWW_ROOT_BOOTSTRAP3__ . '/skin/js/bootstrap.min.js',
));
$cssjs->register_css('bootstrap3', array(
    'src' => __WWW_ROOT_BOOTSTRAP3__ . '/skin/css/bootstrap.min.css'
));
// surcharges bootstrap3 : material design theme
$cssjs->register_foot('bootstrap3material', array(
    'src' => __WWW_ROOT_BOOTSTRAP3MATERIAL__ . '/skin/js/material.min.js',
));
$cssjs->register_foot('bootstrap3ripples', array(
    'src' => __WWW_ROOT_BOOTSTRAP3MATERIAL__ . '/skin/js/ripples.min.js',
));
// adaptations clementine material
$cssjs->register_css('bootstrap3skinmaterial', array(
    'src' => __WWW_ROOT_BOOTSTRAP3MATERIAL__ . '/skin/css/clementine-material.css'
));
$cssjs->register_foot('bootstrap3materialinit',
    $this->getBlockHtml('design/js_material', $data, $request)
);
$cssjs->register_css('bootstrap3ripples', array(
    'src' => __WWW_ROOT_BOOTSTRAP3MATERIAL__ . '/skin/css/ripples.min.css'
));
// overrides bootstrap3 default theme
$cssjs->register_css('bootstrap3theme', array(
    'src' => __WWW_ROOT_BOOTSTRAP3MATERIAL__ . '/skin/css/material-wfont.min.css'
));
$this->getParentBlock($data, $request);
