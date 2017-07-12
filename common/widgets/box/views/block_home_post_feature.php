<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 17-6-26
 * Time: 下午8:31
 */
use yii\helpers\Url;

?>
<?php if($feature == true && isset($ac[0])){
    //echo count($ac);die();
    ?>
<div class="block_home_post_feature">
    <div class="f_pic">
        <div id="home_f_pic_slider" class="home_f_pic_slider flexslider">
            <img src="<?= $ac[0]->cover ?: Url::to('@web/ccmr/images/defualt.jpg') ?>" style="width: 100%" alt="">
        </div>
    </div>
    <p class="title">
        <a href="<?= Url::to(['/article/view', 'id' => $ac[0]->id]) ?>">
            <?= $ac[0]->title ?>
        </a>
    </p>
    <p class="text" style="height: 78px;
    overflow: hidden;"><?= $ac[0]->description ?></p>
    <div class="info">
        <div class="date"><p><?= Yii::$app->formatter->asDate($ac[0]->created_at, 'Y-M-dd') ?></p></div>
        <div class="r_part">
            <!--<div class="category"><p><a href="#">Business</a></p></div>-->
        </div>
    </div>
</div>
<?php } ?>
<div class="line_2" style="margin:8px 0px 16px;"></div>
    <?php for ($i = 1; $i < count($ac); $i ++ ) { ?>
        <div class="block_home_post">
            <div class="pic">
                <a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>" class="w_hover">
                    <img src="<?= $ac[$i]->cover ?: Url::to('@web/ccmr/images/defualt.jpg') ?>" alt="">
                    <span></span>
                </a>
            </div>

            <div class="text">
                <p class="title"><a
                        href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>">
                        <?= $ac[$i]->title ?>
                    </a>
                </p>
                <div class="date">
                    <p><?= Yii::$app->formatter->asDate($ac[$i]->created_at, 'Y-M-dd') ?></p>
                </div>
                <div class="icons">
                    <ul>
                        <li><a href="#" class="views"><?= $ac[$i]->trueView ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="line_3" style="margin:14px 0px 17px;"></div>
    <?php } ?>



