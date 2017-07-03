<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Achievement;
use common\models\search\AchievementSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Connection;

/**
 * AchievementController implements the CRUD actions for Achievement model.
 */
class AchievementController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Achievement models.
     * @return mixed
     */
    public function actionIndex()
    {
        $cate = Yii::$app->request->get('cate');
        //$model = new Achievement(['cate'=>$cate]);
        $searchModel = new AchievementSearch(['cate'=>$cate]);
        //Yii::$app->request->queryParams['sort']='-id';
        $t = Yii::$app->request->queryParams;
        //$t['sort']='-id';
        $dataProvider = $searchModel->search($t);
        $dataProvider->query->orderBy(['id' => SORT_DESC,'create_at'=>SORT_DESC]);
        /*var_dump(Yii::$app->request->queryParams);
        var_dump($t);
        die();*/
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionList()
    {
        //$this->layout = 'main_nav.php';
        $searchModel = new AchievementSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        //var_dump($dataProvider->sort);die();
        return $this->render('list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Achievement model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Achievement model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $cate = Yii::$app->request->get('cate');
        $model = new Achievement(['cate'=>$cate]);

        if ($model->load(Yii::$app->request->post()) && $model->create()) {

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Achievement model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Achievement model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Achievement model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Achievement the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Achievement::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionTool(){
        die('喵喵');
        $temp_data = new Connection([
            'dsn' => 'mysql:host=localhost;dbname=temp_date',
            'username' => 'gb',
            'password' => 'gb',
            'charset' => 'utf8',
        ]);
        $temp_data->open();
        $news = $temp_data->createCommand("SELECT * FROM paper ORDER BY id DESC")->queryAll();
        foreach ($news as $key=>$v){
            $new = new Achievement();
            $new->title = $v['Title'];
            $new->periodical = $v['Journal'];
            $new->author = $v['Author(s)'];
            $new->year_id = $v['Year-Number'] ;

            //die();
            /*echo $new->year_id ;
            echo $new->title ;
            echo $new->author.'<br><br>';*/
            if($new->insert()){
                echo $new->year_id ;
                echo $new->title ;
                echo $new->author.'<br><br>';
            }else{
                echo "FAIL";
                echo $new->year_id .'<br><br>';
            }
            $new->refresh();

        }

        $temp_data->close();

    }
    public function actionTool2($cate){
        /*$temp_data = new Connection([
            'dsn' => 'mysql:host=localhost;dbname=temp_date',
            'username' => 'gb',
            'password' => 'gb',
            'charset' => 'utf8',
        ]);
        $temp_data->open();*/
die('喵喵');
        //$news = Yii::$app->db->createCommand("SELECT * FROM `TABLE 32` WHERE id <= 63")->queryAll();

        $news = Yii::$app->db->createCommand("SELECT * FROM `TABLE 31` WHERE id <= 74 AND id>=65")->queryAll();

        foreach ($news as $key=>$v){
            $new = new Achievement();
            $new->title = $v['COL 3'];
            $new->periodical = $v['COL 4'];
            $new->author = $v['COL 11'];
            $new->year_id = '2016-'.$v['COL 1'] ;
            $new->cate = $cate ;

            //die();
            /*echo $new->year_id ;
            echo $new->title ;
            echo $new->author.'<br><br>';*/

            if($new->insert()){
                echo $new->year_id ;
                echo $new->title ;
                echo $new->author.'<br><br>';
            }else{
                echo "FAIL";
                echo $new->year_id .'<br><br>';
            }
            $new->refresh();

        }
        //$temp_data->close();
    }
}
