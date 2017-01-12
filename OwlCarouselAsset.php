<?php

namespace ereminmdev\yii2\owlcarousel;

use yii\web\AssetBundle;

class OwlCarouselAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm/owl.carousel/dist';

    public $js = [
        YII_DEBUG ? 'owl.carousel.js' : 'owl.carousel.min.js',
    ];

    public $css = YII_DEBUG ? [
        'assets/owl.carousel.css',
        'assets/owl.theme.default.css',
    ] : [
        'assets/owl.carousel.min.css',
        'assets/owl.theme.default.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
