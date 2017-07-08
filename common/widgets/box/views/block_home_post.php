<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 17-6-26
 * Time: 下午8:31
 */
use yii\helpers\Url;
?>
<div class="row">
<div class="col-md-6">
    <?php for($i=0;$i<count($ac);$i+=2){ ?>
        <div class="block_home_post">
            <div class="pic">
                <a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>" class="w_hover">
                    <img src="<?= $ac[$i]->cover?:Url::to('@web/ccmr/images/defualt.jpg')?>" alt="">
                    <span></span>
                </a>
            </div>
            <div class="text">
                <p class="title"><a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>"><?= $ac[$i]->title ?></a></p>
                <div class="date"><p><?= Yii::$app->formatter->asDate($ac[$i]->created_at, 'Y-M-dd') ?></p></div>
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
                <a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>" class="w_hover">
                    <img src="<?= $ac[$i]->cover?:Url::to('@web/ccmr/images/defualt.jpg')?>" alt="">
                    <span></span>
                </a>
            </div>
            <div class="text">
                <p class="title"><a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>"><?= $ac[$i]->title ?></a></p>
                <div class="date"><p><?= Yii::$app->formatter->asDate($ac[$i]->created_at, 'Y-M-dd') ?></p></div>
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
</div>


