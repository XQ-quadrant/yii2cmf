<?php
/**
 * @var \yii\web\View $this
 */
use yii\helpers\Html;
use yii\bootstrap\Nav;

?>
<header class=" mb38">
    <?php \yii\widgets\Pjax::begin([
        'id' => 'header-container',
        'linkSelector' => false,
        'formSelector' => false,
        'options' => ['class' => 'm-sitenav clearfix']
    ]) ?>
    <div class="pull-left">

    </div>
    <?php
    $rightMenuItems = [];
    $rightMenuItems[] = ['label' => '反馈', 'url' => ['/user/default/create-article']];
    $noticeNums = Yii::$app->notify->getNoReadNums();
    if ($noticeNums > 0) {
        $rightMenuItems[] = [
            'label' => '<i class="fa fa-bell"></i> <span class="badge">' . $noticeNums . '</span>',
            'items' => [
                [
                    'label' => $noticeNums . '条新消息',
                    'url' => ['/user/default/notice']
                ]
            ]
        ];
    } else {
        $rightMenuItems[] = [
            'label' => '<i class="fa fa-bell"></i>',
            'url' => ['/user/default/notice']
        ];
    }
    if (Yii::$app->user->isGuest) {
        $rightMenuItems[] = ['label' => Yii::t('common', 'Signup'), 'url' => ['/user/registration/signup']];
        $rightMenuItems[] = ['label' => Yii::t('common', 'Login'), 'url' => ['/user/security/login']];
    } else {
        $rightMenuItems[] = [
            'label' => Html::img(Yii::$app->user->identity->getAvatar(32), ['width' => 32, 'height' => 32]),
            'linkOptions' => [
                'class' => 'avatar'
            ],
            'items' => [
                [
                    'label' => Html::icon('user') . ' 个人主页',
                    'url' => ['/user/default/index', 'id' => Yii::$app->user->id],
                ],
                [
                    'label' => Html::icon('cog') . ' 账户设置',
                    'url' => ['/user/settings/profile'],
                ],
                [
                    'label' => Html::icon('book') . ' 我的投稿',
                    'url' => ['/user/default/article-list'],
                ],
                [
                    'label' => Html::icon('thumbs-up') . ' 我赞过的',
                    'url' => ['/user/default/up'],
                ],
                [
                    'label' => Html::icon('star') . ' 我收藏的',
                    'url' => ['/user/default/favourite'],
                ],
                [
                    'label' => Html::icon('sign-out') . ' 退出',
                    'url' => ['/user/security/logout'],
                    'linkOptions' => ['data-method' => 'post'],
                ]
            ]
        ];
    }

    $this->params['rightMenuItems'] = $rightMenuItems;
    $this->trigger('beforeRenderRightMenu');
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $this->params['rightMenuItems'],
        'encodeLabels' => false
    ]);
    ?>
    <?php \yii\widgets\Pjax::end() ?>
    <img class="m-banner m-banner-left" src="/xxa/images/left.png" style="left: 0px">
    <img class="m-banner" src="/xxa/images/right.png" style="right: 0px">
    <div class="m-header container">

        <div class="wrap clearfix" style="background: url(/xxa/images/callout-pattern.png) 44px -39px"><!---->
            <div class="m-logo" style="    width: 363px;s">

                <a href="<?= \yii\helpers\Url::home() ?>" title="<?= Yii::$app->config->get('SITE_NAME') ?>"
                   style="width: 100%;font-size: 30px;color: #474749;
    font-weight: bold;">
                    <img style="width: 100%" src="<?= Yii::$app->config->get('SITE_LOGO') ?>">
                    <!--信息与信号安全实验室
                    <span style="    font-size: 17px;
    color: #666;
    float: right;
    letter-spacing: 2px;">西南交通大学</span>-->
                </a>
            </div>
            <div class="u-search">
                <form class="form" action="<?= url(['/search/index']) ?>" method="get">
                    <input type="text" id="dk-text" class="text" autocomplete="off"
                           placeholder="<?= Yii::$app->request->get('q', '全站搜索'); ?>" name="q">
                    <a title="搜索" class="icn-search2 fa fa-search" data-method="get"></a>
                </form>
                <div class="list" style="visibility:hidden;"></div>
            </div>
        </div>
    </div>
    <nav class="m-nav clearfix">
        <div class=" container ">
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