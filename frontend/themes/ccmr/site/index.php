<?php

use yii\helpers\Url;
use common\models\Category;

/* @var $this yii\web\View
 * @var $categories array
 */

?>
<div class="row" style="margin-top: 5px">

    <?= \frontend\widgets\slider\CarouselWidget::widget([
        'key' => 'cc',
        'options' => [
            'class' => 'mb15 home-carousel',
        ],
    ]) ?>
</div>
<div class="row">

    <div class="col-md-8" style="padding-right: 31px;">
        <div class="row">
            <?php
            if ($this->beginCache('category-article-list', ['duration' => 1])):
                ?>
                <div class="line_2" style="margin:34px 0px 28px;"></div>

                <?= common\widgets\box\BoxWidget::widget([
                'category' => Category::findOne(['slug' => 'macro_news']),
                //'config' => ['cate'=>14],
                //'where' => ['category_id' => $category2->id],
                'type' => 'block_home_post',
                //'cate' => 14,
                'sort' => [
                    'created_at' => SORT_DESC,
                ],
                'liNum' => 4,
                //'pic' => true,
                //'title' => ,
                'url' => Url::toRoute(['document/list', 'cate' => 14]),
                //'css' => ['warper' => 'box-widget index-box ', 'header' => 'with-border index-box-header', 'title' => 'index-box-title', 'icon' => 'index-box-icon bicon-news', 'body' => 'box-profile blue-border',],
            ]) ?>
                <div class="clearboth"></div>
                <a href="<?= Url::to(['/article/index','cate'=>'macro_news']) ?>" class="lnk_all_news fl" style="padding-bottom: 5px">更多 宏观要闻</a>

                <div class="line_3" style="margin:22px 0px 30px;"></div>

                <h3 style="line-height: 2em;font-weight: bold;color:#0b3d7a">企业动态</h3>
                <div class="line_4" style="margin:-4px 0px 18px;"></div>
                <?= common\widgets\box\BoxWidget::widget([
                'category' => Category::findOne(['slug' => 'business']),
                //'config' => ['cate'=>14],
                //'where' => ['category_id' => $category2->id],
                'type' => 'block_topic_post',
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


                <?php $this->endCache();endif; ?>


        </div>
    </div>
    <div class="col-md-4" style="padding-left: 20px;
    border-left: 1px solid #ededed;">

        <?= \common\modules\area\widgets\AreaWidget::widget([
            'slug' => 'site-index-sidebar',
            "blockClass" => "panel panel-default",
            "headerClass" => "panel-heading",
            "bodyClass" => "panel-body",
        ]) ?>

        <h3 style="letter-spacing: 1.2px;padding: 0 5px;    ">专题研究</h3>
        <?= common\widgets\box\BoxWidget::widget([
            'category' => Category::findOne(['slug' => 'study']),
            //'config' => ['cate'=>14],
            //'where' => ['category_id' => $category2->id],
            'type' => 'block_home_post_feature',
            //'cate' => 14,
            'sort' => [
                'created_at' => SORT_DESC,
            ],
            'liNum' => 5,
            //'pic' => true,
            'feature' => true,
            'url' => Url::toRoute(['article/index', 'cate' => 'notice']),
            'css' => ['warper' => 'box-widget index-box ', 'header' => 'with-border index-box-header', 'title' => 'index-box-title', 'icon' => 'index-box-icon bicon-news', 'body' => 'box-profile blue-border',],
        ]) ?>
        <div class="line_2" style="margin:34px 0px 28px;"></div>


        <div class="panel panel-success">
            <div class="panel-heading">
                <h5>热门标签</h5>
            </div>
            <div class="panel-body">
                <ul class="tag-list list-inline">
                    <?php foreach ($hotTags as $tag): ?>
                        <li><a class="label label-<?= $tag->level ?>"
                               href="<?= Url::to(['article/tag', 'name' => $tag->name]) ?>"><?= $tag->name ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    </div>
</div>