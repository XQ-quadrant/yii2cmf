<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Calender */

$this->title = 'Update Calender: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Calenders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calender-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
