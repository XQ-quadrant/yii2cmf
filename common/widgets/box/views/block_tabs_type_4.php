<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 17-6-26
 * Time: 下午8:31
 */
use yii\helpers\Url;

?>
<div class="block_tabs_type_4 nav-tabs-custom">
    <ul class="nav nav-tabs tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><?= $title ?></a></li>
        <!--<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"></a></li>-->
    </ul>
    <div class="tab-content ">
        <div class="tab-pane active" id="tab_1">
            <?php foreach ($ac as $m): ?>
                <div class="block_home_news_post">
                    <div class="info">
                        <div class="date"><p><?= Yii::$app->formatter->asDate($m->created_at, 'Y-M-dd') ?></p></div>
                        <div class="r_part">
                            <a href="#" class="views"><i class="fa fa-eye"></i> <?= $m->trueView ?>浏览</a>
                        </div>
                    </div>
                    <p class="title">
                        <a href="<?= Url::to(['/article/view', 'id' => $m->id]) ?>"><?= $m->title ?></a>
                    </p>
                </div>

            <?php endforeach; ?>


            <a href="<?= Url::to($url ) ?>" class="lnk_all_news fl">全部</a>
            <div class="clearfix"></div>
        </div>
       <!-- <div class="tab-pane" id="tab_2">
            The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than
        </div>-->


    </div>
</div>


