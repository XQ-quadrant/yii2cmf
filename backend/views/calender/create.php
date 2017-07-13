<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Calender */

$this->title = 'Create Calender';
$this->params['breadcrumbs'][] = ['label' => 'Calenders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calender-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
