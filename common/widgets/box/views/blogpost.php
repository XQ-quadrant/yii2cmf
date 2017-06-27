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
       <article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
           <div class="blogpost-body">
               <div class="post-info">
                   <span class="day"><?=Yii::$app->formatter->asDate($m->create_at,'dd')?></span>
                   <span class="month"><?=Yii::$app->formatter->asDate($m->create_at,'M月 Y')?></span>
               </div>
               <div class="blogpost-content">
                   <header>
                       <h3 class="title"><a href=" <?=Url::to(['/'.$model->tableName().'/view/','id'=>$m->id])?>"><?=$m->title?></a></h3>
                      <!-- <div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>-->
                   </header>
                   <p><?=$m->breviary?></p>
               </div>
           </div>
       </article>

   <?php endforeach; ?>
