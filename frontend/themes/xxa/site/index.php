<?php

use yii\helpers\Url;
use common\models\Category;

/* @var $this yii\web\View
 * @var $categories array
 */

?>
<div class="row">
    <div class="col-md-8" style="padding-right: 31px;">
        <div class="row">
        <?= \frontend\widgets\slider\CarouselWidget::widget([
            'key' => 'cc',
            'options' => [
                'class' => 'mb15 home-carousel',
            ],
        ]) ?>
        </div>
        <div class="row">
            <?php
            if ($this->beginCache('category-article-list', ['duration' => 1])):
                ?>
                <div class="line_2" style="margin:34px 0px 28px;"></div>
                <div class="row">
                    <?= common\widgets\box\BoxWidget::widget([
                        'category' => Category::findOne(['slug' => 'lecture']),
                        //'config' => ['cate'=>14],
                        //'where' => ['category_id' => $category2->id],
                        'type' => 'block_lecture_post',
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
                <div class="clearfix"></div>


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
                //'pic' => true,
                //'title' => ,
                'url' => Url::toRoute(['document/list', 'cate' => 14]),
                'css' => ['warper' => 'box-widget index-box ', 'header' => 'with-border index-box-header', 'title' => 'index-box-title', 'icon' => 'index-box-icon bicon-news', 'body' => 'box-profile blue-border',],
            ]) ?>


                <?php $this->endCache();endif; ?>


        </div>
    </div>
    <div class="col-md-4" style="        padding-left: 20px;
    border-left: 1px solid #ededed;">

        <div class="block_subscribes_sidebar">
            <div class="service">
                <a href="#" class="rss">
                    <span class="num">11 234</span>
                    <span class="people">IEEE</span>
                </a>
            </div>

            <div class="service">
                <a href="#" class="tw">
                    <span class="num">781</span>
                    <span class="people">SCI</span>
                </a>
            </div>

            <div class="service">
                <a href="#" class="fb">
                    <span class="num">341</span>
                    <span class="people">SSCI</span>
                </a>
            </div>
        </div>
        <div class="separator" style="height:31px;"></div>
        <?= \common\modules\area\widgets\AreaWidget::widget([
            'slug' => 'site-index-sidebar',
            "blockClass" => "panel panel-default",
            "headerClass" => "panel-heading",
            "bodyClass" => "panel-body",
        ]) ?>


        <?= common\widgets\box\BoxWidget::widget([
            'category' => Category::findOne(['slug' => 'notice']),
            //'config' => ['cate'=>14],
            //'where' => ['category_id' => $category2->id],
            'type' => 'block_tabs_type_4',
            //'cate' => 14,
            'sort' => [
                'created_at' => SORT_DESC,
                //'name' => SORT_DESC,
            ],
            'liNum' => 6,
            //'pic' => true,
            //'title' => ,
            'url' => Url::toRoute(['article/index', 'cate' => 'notice']),
            'css' => ['warper' => 'box-widget index-box ', 'header' => 'with-border index-box-header', 'title' => 'index-box-title', 'icon' => 'index-box-icon bicon-news', 'body' => 'box-profile blue-border',],
        ]) ?>
        <div class="line_2" style="margin:34px 0px 28px;"></div>
        <?= common\widgets\box\BoxWidget::widget([
            'category' => Category::findOne(['slug' => 'news']),
            //'config' => ['cate'=>14],
            //'where' => ['category_id' => $category2->id],
            'type' => 'block_popular_posts',
            //'cate' => 14,
            'sort' => [
                'created_at' => SORT_DESC,
                //'name' => SORT_DESC,
            ],
            'liNum' => 6,
            //'pic' => true,
            'title' =>'行业信息' ,
            'url' => Url::toRoute(['document/list', 'cate' => 14]),
            'css' => ['warper' => 'box-widget index-box ', 'header' => 'with-border index-box-header', 'title' => 'index-box-title', 'icon' => 'index-box-icon bicon-news', 'body' => 'box-profile blue-border',],
        ]) ?>

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