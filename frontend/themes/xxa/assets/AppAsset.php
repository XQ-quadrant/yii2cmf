<?php

namespace frontend\themes\xxa\assets;

use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
   // public $sourcePath = '@webroot/xxa';
    public $css = [
        '/xxa/css/site.css',
        '/xxa/css/self.css',
    ];
    public $js = [
        '/xxa/js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'common\assets\FontAwesomeAsset',
        'common\assets\ModalAsset',
    ];
}
