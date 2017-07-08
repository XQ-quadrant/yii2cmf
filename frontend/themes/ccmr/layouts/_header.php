<?php
/**
 * @var \yii\web\View $this
 */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;

?>
<header class="">


    <img class="m-banner" src="<?= Url::to('@web/ccmr/images/bg_top.jpg') ?>" style="right: 0px">
    <div class="m-header container">

        <div class="wrap clearfix" style=""><!---->
            <div class="m-logo" style="    width: 100%;">

                <a href="<?= \yii\helpers\Url::home() ?>" title="<?= Yii::$app->config->get('SITE_NAME') ?>"
                   style="width: 100%;font-size: 30px;color: #474749;
    font-weight: bold;">
                    <img style="    padding: 0 24px 0 0px;width: 100%" src="<?= Yii::$app->config->get('SITE_LOGO') ?>">
                    <!--信息与信号安全实验室
                    <span style="    font-size: 17px;
    color: #666;
    float: right;
    letter-spacing: 2px;">西南交通大学</span>-->
                </a>
            </div>

        </div>
    </div>
    <nav class="m-nav clearfix">
        <div class=" container " style="    padding: 0 0 0 4%;">
            <?php
            $navItems = \common\models\Nav::getItems('header');
            echo \yii\widgets\Menu::widget([
                'items' => $navItems,
                'options' => ['class' => 'f-cb'],
                'activeCssClass' => 'crt'
            ])
            ?>
        </div>
    </nav>

</header>