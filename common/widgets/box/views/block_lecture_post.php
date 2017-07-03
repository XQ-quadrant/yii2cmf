<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 17-6-26
 * Time: 下午8:31
 */
use yii\helpers\Url;
?>

<div class="col-md-6">
    <?php for($i=0;$i<count($ac);$i+=2){ ?>
        <div class="block_home_post">
            <div class="pic">
                <a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>" class="w_hover"
                   style="    width: 79px;height: 50px;">

                    <p style="    margin: 21px 4px 0px 8px;
    text-align: center;">
                        <?= Yii::$app->formatter->asDate($ac[$i]->created_at, 'M月dd日') ?>
                    </p>
                </a>
            </div>

            <div class="text">
                <p class="title">
                    <a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>">
                        <?= $ac[$i]->title ?>
                    </a>
                </p>
                <div class="date"><p><i class="fa fa-user"></i> <?= $ac[$i]->data->speaker?></p></div>
                <div class="icons">
                    <ul>
                        <li><a href="#" class="views"><?= $ac[$i]->trueView?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="line_3" style="margin:14px 0px 17px;"></div>
    <?php } ?>
</div>
<div class="col-md-6">

    <?php for($i=1;$i<count($ac);$i+=2){ ?>
        <div class="block_home_post">
            <div class="pic">
                <a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>" class="w_hover"
                   style="width: 79px;height: 50px;">

                    <p style="margin: 21px 4px 0px 8px;text-align: center;">
                        <?= Yii::$app->formatter->asDate($ac[$i]->created_at, 'M月dd日') ?>
                    </p>
                </a>
            </div>

            <div class="text">
                <p class="title"><a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>"><?= $ac[$i]->title ?></a></p>
                <div class="date"><p><i class="fa fa-user"></i> <?= @$ac[$i]->data->speaker?></p></div>
                <div class="icons">
                    <ul>
                        <li><a href="#" class="views"> <?= $ac[$i]->trueView?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="line_3" style="margin:14px 0px 17px;"></div>
    <?php } ?>



</div>


