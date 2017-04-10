<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '../assets/css/animate.css',
        '../assets/css/flexslider.css',
        '../assets/css/owl.carousel.css',
        '../assets/css/prettyPhoto.css',
        '../assets/css/style.css',
    ];
    public $js = [
      '../assets/js/animate.js',
      '../assets/js/myscript.js',
      '../assets/js/owl.carousel.js',
      '../assets/js/superfish.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
