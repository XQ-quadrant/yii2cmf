<?php

namespace frontend\themes\ccmr\assets;

use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
    public $sourcePath = '@webroot/ccmr/';
    public $css = [
        '/ccmr/css/site.css',
        '/ccmr/css/self.css',
        //'/ccmr/css/skin-sliver-blue.css',
    ];
    public $js = [
        '/ccmr/js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'common\assets\FontAwesomeAsset',
        'common\assets\ModalAsset',
    ];
}
