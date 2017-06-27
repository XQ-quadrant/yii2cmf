<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午7:11
 */
use yii\helpers\Url;
 ?>
<!-- About Me Box -->
<div class="box <?=$css['warper']?>">
 <a href="<?=$url?>" >
 <div class="box-header <?=$css['header']?>" style="">
  <i class="<?=$css['icon']?>"></i>

  <h3 class="box-title <?=$css['title']?>"><?=$title?> </h3>
  <div class="box-tools pull-right">
   <span data-toggle="tooltip"  class="badge  index-box-more" ><?= Yii::t('common','more')?></span>

  </div>
 </div></a>
 <!-- /.box-header -->
 <div class="box-body">
  <ul class="list-group list-group-unbordered">
   <?php foreach ( $ac as $m):?>
   <li class="list-group-item" style="margin-bottom: 8px;display: block;width: 100%">

    <a class=" " href=" <?=Url::to(['/'.$model->tableName().'/view/','id'=>$m->id])?>"
       style="display: block;height: 43px;font-size: 12px;">

<span class="text-muted pull-left big-date" style="
       font-size: 16px; font-weight:500;color:#86cfff; border: 1px solid #d6dce0; padding: 4px;
    ">
         <?=Yii::$app->formatter->asDate($m->create_at,'M月dd日')?>
       </span>
      <p class="attachment-text listpic-text " style="

      padding-left: 7px;  font-size: 15px;overflow: hidden;width: auto;
    height: 40px;
        /*white-space: pre;*/
    text-overflow: ellipsis;
    display: block;   ">

       <?=$m->title?>
      </p>

     </a>

   </li>
   <?php endforeach; ?>
  </ul>

 </div>

 <!-- /.box-body -->
</div>
