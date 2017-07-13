<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Courses');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginBlock('content-header') ?>
<?= $this->title . ' ' . Html::a(Yii::t('app', 'Create Course'), ['create'], ['class' => 'btn btn-primary btn-flat btn-xs']) ?>
<?php $this->endBlock() ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="box box-primary">
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
        'columns' => [
                    //'id',
                    'name',
                    'teacher',
                    'info:ntext',
                    'status',
                    // 'college',
            [
                'class' => 'backend\widgets\grid\PositionColumn',
                'attribute' => 'status'
            ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template'=>'{view} '
                    ]

                ],
            ]); ?>
        </div>
    </div>
