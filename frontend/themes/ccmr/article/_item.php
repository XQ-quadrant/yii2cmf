<?php
/* @var $this \yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="media-body">
    <h4 class="media-heading">
        <a href="<?= Url::to(['article/view', 'id' => $model->id])?>"><?= $model->title?></a>

        <?php if($model->is_top): ?><span class="label label-primary">置顶</span><?php endif; ?>
        <?php if($model->isReprint): ?><span class="label label-info">转载</span><?php endif; ?>
    </h4>
    <div class="media-content"><?= $model->description ?></div>
    <div class="media-action">
        <span class="time"><?= Html::icon('clock-o')?> <?= Yii::$app->formatter->asDate($model->published_at) ?></span>
        <span class="views" ><?= Html::icon('eye')?> 浏览 <?= $model->trueView?></span>
    </div>
</div>

<div class="media-right">
    <?php if ($model->cover): ?>
        <a href="<?= Url::to(['article/view', 'id' => $model->id])?>"><?= Html::img($model->cover, ['width' => 160, 'height' => 120]) ?></a>
    <?php endif; ?>
</div>
