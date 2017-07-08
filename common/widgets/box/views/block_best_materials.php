<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 17-6-26
 * Time: 下午8:31
 */
use yii\helpers\Url;

?>

<h3 style="font-size:16px;line-height: 2em;font-weight: bold;color:#2fbdfd;"><?= $category->title ?></h3>
<div class="line_4" style="margin:-4px 0px 18px;"></div>
<div class="row">
    <div class="block_best_materials">
        <div class="slider">
            <div id="best_materials_slider" class="flexslider">
                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="slides row" style="">
                        <?php for($i=0;$i<count($ac);$i++){ ?>
                            <li class="col-md-4" style="float: left; display: block;">
                                <div class="block_best_material_post">
                                    <div class="f_pic">
                                        <a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>" class="w_hover">
                                            <img src="<?= $ac[$i]->cover?:Url::to('@web/ccmr/images/defualt.jpg')?>" alt="">
                                            <span></span>
                                        </a>
                                    </div>
                                    <p class="title">
                                        <a href="<?= Url::to(['/article/view', 'id' => $ac[$i]->id]) ?>">
                                            <?= $ac[$i]->title ?>
                                        </a>
                                    </p>
                                    <div class="info">
                                        <div class="date"><p><?= Yii::$app->formatter->asDate($ac[$i]->created_at, 'Y-M-dd') ?></p></div>
                                        <div class="category">
                                            <p>
                                                <a href="#" class="views"><?= $ac[$i]->trueView?></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
                <ul class="flex-direction-nav">
                    <li><a class="flex-prev" href="#">Previous</a></li>
                    <li><a class="flex-next flex-disabled" href="#">Next</a></li>
                </ul>
            </div>
        </div>

        <script type="text/javascript">
            $(function() {
                $('#best_materials_slider').flexslider({
                    animation : 'slide',
                    controlNav : false,
                    directionNav : true,
                    animationLoop : false,
                    slideshow : false,
                    itemWidth: 213,
                    itemMargin: 0,
                    minItems: 1,
                    maxItems: 3,
                    move: 1,
                    useCSS : false
                });
            });
        </script>
    </div>



</div>



