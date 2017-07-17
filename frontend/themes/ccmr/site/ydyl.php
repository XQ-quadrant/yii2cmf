<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\Category;
use common\widgets\box\BoxWidget;
use common\models\Article;

/* @var $this yii\web\View */

$this->title = Yii::t('common', 'School of International Education');
$this->params['index'] = true;//$this->title;
$this->params['breadcrumbs'] = null;//$this->title;
$this->blocks['content-header'] = '';
//$this->registerCssFile('@web/css/pluging.css',['depends'=>['backend\assets\KodeAsset']]);

//$this->registerJsFile('@web/js/jquery.cslider.js',['depends'=>['backend\assets\KodeAsset']]);
/*$this->registerCss('.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12  .wbox{
    position: relative;
    min-height: 1px;
    padding-right: 8px;
    padding-left: 8px;

}
.normal{
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
');*/

?>


<div class="row" style="margin-top: 5px">

    <?= \frontend\widgets\slider\CarouselWidget::widget([
        'key' => 'cc',
        'options' => [
            'class' => 'mb15 home-carousel small',
        ],
    ]) ?>
</div>
<div class="line_3" style="margin:14px 0px 28px;"></div>
<div class="row" style="background: #fff;margin-bottom: 7px;">
    <div class="col-md-8" style="padding-right: 31px;">
        <div class="row">
            <article class="block_topic_post_feature" style="    padding: 0 16px;">
                <?php
                $category = Category::findOne(['slug' => 'news']);
                //$topic = new Article();
                $topic = Article::find()
                    ->where(['category_id' => $category->id])->notTrashed()
                    ->orderBy(['level' => SORT_DESC,'created_at'=>SORT_DESC])
                    ->limit(1)
                    ->one();
                ?>
                <div class="f_pic">
                    <a href="news_post.html" class="general_pic_hover scale initialized">
                        <img style="width: 310px;" src="<?= Url::to('@web/ccmr/images/img7.jpg') ?>" alt="">
                        <span class="hover" style="display: inline;">
                            <span class="icon" style="left: 100%; top: 0px; right: auto; bottom: auto;">
                            </span>
                        </span>
                    </a>
                </div>
                <div class="content">
                    <p class="title"><a href="news_post.html"><?= $topic->title ?></a></p>

                    <div class="info">
                        <div class="date">
                            <p><?= Yii::$app->formatter->asDate($topic->created_at, 'Y-M-dd') ?></p>
                        </div>
                        <div class="r_part">
                        </div>
                    </div>
                    <p class="text"><?= $topic->description ?></p>
                </div>
                <div class="clearboth"></div>
            </article>
            <div class="line_3" style="margin:25px 0px 28px;"></div>
            <?= common\widgets\box\BoxWidget::widget([
                'category' => Category::findOne(['slug' => 'news']),
                //'config' => ['cate'=>14],
                //'where' => ['category_id' => $category2->id],
                'type' => 'block_topic_post',
                //'cate' => 14,
                'sort' => [
                    'created_at' => SORT_DESC,
                    //'name' => SORT_DESC,
                ],
                'liNum' => 4,
                'feature'=>true,
                'offset' => 1,
                //'title' => ,
                'url' => Url::toRoute(['document/list', 'cate' => 14]),
                'css' => ['warper' => 'box-widget index-box ', 'header' => 'with-border index-box-header', 'title' => 'index-box-title', 'icon' => 'index-box-icon bicon-news', 'body' => 'box-profile blue-border',],
            ]) ?>


        </div>
        <?= BoxWidget::widget([
            'category' => Category::findOne(['slug' => 'local-data']),
            //'config' => ['cate'=>14],
            //'where' => ['category_id' => $category2->id],
            'type' => 'block_best_materials',
            //'cate' => 14,
            'sort' => [
                'created_at' => SORT_DESC,
                //'name' => SORT_DESC,
            ],
            'liNum' => 4,
            //'pic' => true,
            //'title' => ,
            'url' => Url::toRoute(['document/list', 'cate' => 14]),
            'css' => ['warper' => 'box-widget index-box ', 'header' => 'with-border index-box-header', 'title' => 'index-box-title', 'icon' => 'index-box-icon bicon-news', 'body' => 'box-profile blue-border',],
        ]) ?>

    </div>
    <div class="col-md-4 wbox" style="padding-left: 20px;
    border-left: 1px solid #ededed;">
        <?= common\widgets\box\BoxWidget::widget([
            'category' => Category::findOne(['slug' => 'cross-nation-study']),
            //'config' => ['cate'=>14],
            //'where' => ['category_id' => $category2->id],
            'type' => 'block_popular_posts',
            //'cate' => 14,
            'sort' => [
                'created_at' => SORT_DESC,
                //'name' => SORT_DESC,
            ],
            'liNum' => 6,
            'pic' => true,
            'title' => '国别研究',
            'url' => Url::toRoute(['document/list', 'cate' => 14]),
            'css' => ['warper' => 'box-widget index-box ', 'header' => 'with-border index-box-header', 'title' => 'index-box-title', 'icon' => 'index-box-icon bicon-news', 'body' => 'box-profile blue-border',],
        ]) ?>
        <img style="width: 100%" class="img-responsive bottom-img"
             src="<?= Url::to('@web/ccmr/images/timg.jpg') ?>" alt="Photo">
    </div>
    
</div>

