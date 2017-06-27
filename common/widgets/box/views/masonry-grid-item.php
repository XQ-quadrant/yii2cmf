<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午7:11
 */
use yii\helpers\Url;
 ?>

   <?php foreach ( $ac as $m):?>
       <div class="masonry-grid-item col-sm-6 col-md-4">
           <!-- blogpost start -->
           <article class="clearfix blogpost">
               <?php if (!empty($m->pic)){?>
               <div class="overlay-container">
                   <img src="<?= Url::to( $m->pic) ?>" alt="">
                   <div class="overlay">
                       <div class="overlay-links">
                           <a href="<?=Url::to(['/'.$model->tableName().'/view/','id'=>$m->id])?>"><i class="fa fa-link"></i></a>
                           <a href="<?= Url::to($m->pic) ?>" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
                       </div>
                   </div>
               </div>
               <?php } ?>
               <div class="blogpost-body">

                   <div class="blogpost-content">
                       <header>
                           <h4 class="title"><a href="<?=Url::to(['/'.$model->tableName().'/view/','id'=>$m->id])?>"><?=$m->title?></a></h4>

                       </header>
                       <div class="post-info">
                           <span class="day"><?=Yii::$app->formatter->asDate($m->create_at,'dd')?></span>
                           <span class="month"><?=Yii::$app->formatter->asDate($m->create_at,'M月 Y')?></span>
                       </div>
                       <p><?=$m->breviary?></p>
                   </div>
               </div>

           </article>

           <!-- blogpost end -->
       </div>


   <?php endforeach; ?>
