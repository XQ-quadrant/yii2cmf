<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Calender */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Calenders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'user_id',
            'hint:ntext',
            'status',
        ],
    ]) ?>
    </div>
</div>
