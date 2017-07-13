<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 17-6-27
 * Time: 下午2:00
 */
use yii\helpers\Url;

?>

<div class="block_popular_posts">
    <h4><?= $title ?></h4>

    <?php foreach ($ac as $m): ?>
        <div class="article">
            <?php if($pic==true){ ?>

            <div class="pic">
                <a href="#" class="w_hover">
                    <img src="<?= $m->cover?:Url::to('@web/ccmr/images/defualt.jpg')?>" alt="">
                    <span></span>
                </a>
            </div>
            <?php } ?>
            <div class="text">
                <p class="title"><a href="<?= Url::to(['/article/view', 'id' => $m->id]) ?>"><?= $m->title ?></a></p>
                <div class="date"><p><?= Yii::$app->formatter->asDate($m->created_at, 'Y-M-dd') ?></p></div>
                <div class="icons">
                    <ul>
                        <li><a href="#" class="views"><?= $m->trueView?></a></li>
                        <!--<li><a href="#" class="comments">22</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="line_3"></div>

    <?php endforeach; ?>

</div>