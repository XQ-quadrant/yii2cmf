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
<div class="box <?=$css['warper']?>">

    <div class="box-body <?=$css['body']?>">
        <ul class="products-list product-list-in-box">
            <?php foreach ( $ac as $m):?>
            <li class="item">
                <div class="product-info-right">
                    <a href="<?=Url::to(['/'.$model->tableName().'/view/','id'=>$m->id])?>" class="product-title">
                        <?=$m->title?>
                        <!--<span class=" pull-left">800</span>--></a>
                    <span class="product-description">
                          <?=$m->breviary?>
                        </span>
                </div>
                <div class="product-img">
                    <img src="<?=  empty($m->pic)?Url::to('@web'.'/images/icon/icon1.png'):Url::to('@web'.$m->pic) ?>" alt="<?=$m->title?>">
                </div>

            </li>
            <?php endforeach; ?>
            <!-- /.item -->

        </ul>

    </div>

    <!-- /.box-body -->
</div>
