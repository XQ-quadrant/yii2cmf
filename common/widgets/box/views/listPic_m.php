<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-6-17
 * Time: 上午10:13
 */
use yii\helpers\Url;

//use Yii;
?>
<div class="box list-pic <?= $css['warper'] ?>">
    <a href="<?= $url ?>" class="uppercase">
        <div class="box-header <?= $css['header'] ?>">
            <i class="<?= $css['icon'] ?>"></i>

            <h3 class="box-title <?= $css['title'] ?> text-white"><?= $title ?> </h3>
            <div class="list-news-bg"></div>
            <div class="box-tools pull-right">
                <!--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>-->
                <!--<button type="button" class="btn btn-box-tool"  title="" >
                    <i class="fa fa-comments"></i>更多</button>-->
            </div>
        </div>
    </a>
    <div class="box-body <?= $css['body'] ?>">
        <?php foreach ($ac as $m): ?>
            <div class="attachment-block " style="min-height: 80px">
                <div style="overflow: hidden;height: 68px;display: inline">
                    <img class="attachment-img" src="<?= Url::to( $m->cover) ?>" alt=<?= $m->title ?>
                    style="max-height:68px;max-width:95px;">
                </div>
                <div class="attachment-pushed">
                    <h4 class="attachment-heading listpic-text" style="font-size: 17px; height: 22px;white-space: nowrap;
text-overflow: ellipsis;">
                        <a href="<?= Url::to(['/' . $model->tableName() . '/view/', 'id' => $m->id]) ?>"><?= $m->title ?></a>
                    </h4>

                    <div class="attachment-text listpic-text" style="height: 43px;">
                        <?= $m->description ?>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

    <!-- /.box-body -->
</div>
