<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/7/19
 * Time: 上午12:05
 */

namespace frontend\themes\xxa;

use Yii;

class Theme extends \frontend\themes\Theme
{
    public $info = [
        'author' => 'XQ',
        'id' => 'xxa',
        'name' => '信息与信号实验室',
        'version' => 'v1.0',
        'description' => '基础主题',
        'keywords' => '基础 经典'
    ];

    public function bootstrap()
    {
        Yii::$container->set('yii\bootstrap\BootstrapAsset', [
            'sourcePath' => '@frontend/themes/xxa/static',
            //'sourcePath' => '@webroot/xxa',
            'css' => [
                YII_ENV_DEV ? 'css/bootstrap.css' : 'css/bootstrap.min.css',
            ]
        ]);
    }
}