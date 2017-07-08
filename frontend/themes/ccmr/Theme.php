<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/7/19
 * Time: 上午12:05
 */

namespace frontend\themes\ccmr;

use Yii;

class Theme extends \frontend\themes\Theme
{
    public $info = [
        'author' => 'XQ',
        'id' => 'ccmr',
        'name' => 'ccmr',
        'version' => 'v1.0',
        'description' => '经管院资本市场研究中心',
        'keywords' => '经管院资本市场研究中心 ccmr'
    ];

    public function bootstrap()
    {
        Yii::$container->set('yii\bootstrap\BootstrapAsset', [
            'sourcePath' => '@frontend/themes/ccmr/static',
            //'sourcePath' => '@webroot/xxa',
            'css' => [
                YII_ENV_DEV ? 'css/bootstrap.css' : 'css/bootstrap.min.css',
            ]
        ]);
    }
}