<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16-1-28
 * Time: 下午6:40
 */

namespace api\modules\v1\controllers;


use api\common\controllers\Controller;
use api\modules\v1\models\Article;
use api\modules\v1\models\CalendarEvent;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class CalendarEventController extends Controller
{
    public function actionIndex($calendar_id = null, $module = null)
    {
        $query = CalendarEvent::find()
            ->andFilterWhere(['calendar_id' => $calendar_id]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ]
        ]);
        return $dataProvider;
    }

    public function actionView($id = 0)
    {
        $model = CalendarEvent::find()->where(['id' => $id])->one();
        if ($model === null) {
            throw new NotFoundHttpException('not found');
        }
        //$model->addView();
        return $model;
    }
    public function actionCreate()
    {
        $model = new CalendarEvent();
        $model->load(\Yii::$app->request->post());
        //$model = CalendarEvent::find()->where(['id' => $id])->one();
        if ($model === null) {
            throw new NotFoundHttpException('not found');
        }
        //$model->addView();
        return $model;
    }
}