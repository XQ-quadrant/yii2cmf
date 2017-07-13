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
    <?php for($i=0;$i<count($ac);$i++){ ?>
        <div class="col-md-6">
            <article class="block_topic_post ">
                <p class="title">
                    <a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>"><?= $ac[$i]->title ?></a>
                </p>
                <div class="f_pic">
                    <a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>" class="general_pic_hover scale initialized">
                        <img src="<?= $ac[$i]->cover?:Url::to('@web/ccmr/images/defualt.jpg')?>" alt="">
                        <span class="hover" style="display: none;">
                            <span class="icon" style="left: 0px; top: -122px; right: auto; bottom: auto;"></span>
                        </span>
                    </a>
                </div>
                <p class="text"><?= $ac[$i]->description ?></p>
                <div class="info">
                    <div class="date">
                        <p><?= Yii::$app->formatter->asDate($ac[$i]->created_at, 'Y-M-dd') ?></p>
                    </div>
                    <div class="r_part">
                        <!--<div class="category"><p><a href="#">Business</a></p></div>-->
                        <a href="#" class="views"><?= $ac[$i]->trueView?></a>
                    </div>
                </div>
            </article>
        </div>

    <?php } ?>
    <div class="line_3" style="margin:14px 0px 17px;"></div>
</div>



