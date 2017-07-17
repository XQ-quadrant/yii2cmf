<?php

namespace frontend\controllers;

use Yii;
use common\models\Course;
use common\models\search\CourseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\search\CourseVariableSearch;

class CourseVariableController extends \yii\web\Controller
{

    public function actionGet()
    {
        return $this->render('get');
    }
    /**
     * 课程选择列表
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CourseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all CourseVariable models.
     * @return mixed
     */
    public function actionView()
    {
        $searchModel = new CourseVariableSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
