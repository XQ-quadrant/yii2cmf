<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午7:11
 */
namespace common\widgets\box;

use common\models\Article;
use common\widgets\box\assets\BoxAsset;
use common\models\Document;
use yii\base\Widget;
use yii\db\ActiveRecord;

class BoxWidget extends Widget
{
    public $css = ['warper'=>'box-widget','title'=>'with-border','body'=>'box-profile','css'=>'','icon'];
    public $model ;
    public $activeRecord ;
    public $cate ;
    public $where ;
    public $liNum = 10;
    public $offset = 0;
    public $pic;
    public $type;
    public $title;
    public $url;
    public $sort = []; //顺序
    public $config = []; //初始化model参数
    public $category = []; // common\models\Category 栏目模型
    public $feature ; // 特色条目启动

    /**
     * 初始化
     * @see \yii\base\Object::init()
     */
    public function init(){
        parent::init();
    }


    public function run(){
        $this->registerClientScript();

        if ($this->model === null) {
            /******************* 默认article模型 **************/
            $this->model = new Article();
            /*$list = \frontend\models\Article::find()
                ->andWhere(['category_id' => $category2->id])->orderBy('id desc')
                ->limit(5)->all();*/

            $this->activeRecord = Article::find()
                ->where(['category_id' => $this->category->id])->notTrashed()
                //->andWhere($this->where)
                ->orderBy(array_merge($this->sort,['level' => SORT_DESC,'created_at'=>SORT_DESC]))
                ->limit($this->liNum)
                ->offset($this->offset)
                ->all();

            //echo 'hehhe';die();
            //$this->activeRecord = Cate::find()->where(['status'=>Cate::$STATUS_AOLLOW])->orderBy(['level' => SORT_DESC])->all();//new Room();//'Hello World';
        }
        /*else{

            //$this->model = new ActiveRecord();
            $this->model = new $this->model($this->config);
            $this->activeRecord = $this->model
                ->find()
                ->where($this->where)
                ->orderBy(array_merge($this->sort,['level' => SORT_DESC]))->limit($this->liNum)->all();

        }*/
        //$room =
        $renderArray = [
            'category'=>$this->category,
            'model'=>$this->model,
            'ac'=>$this->activeRecord,
            'pic'=>$this->pic,
            'css'=>$this->css,
            'title'=>$this->title?:$this->category->title,
            'url'=>$this->url,
            'cate'=>$this->cate,
            'feature'=>$this->feature,
        ];
        if (isset($this->type)){  //渲染视图模板

            return $this->render($this->type,$renderArray);

        }else{
            return $this->render('index',$renderArray); //渲染默认视图模板
        }

        /*switch($this->type){
            case 'pic': return $this->render('listPic',$renderArray);break;

            case 'products-list':return $this->render('products-list',$renderArray);break;

            default:  return $this->render('index',$renderArray);
        }*/
        /*if(!isset($this->pic)){
            return $this->render('index',['model'=>$this->model,'ac'=>$this->activeRecord,'css'=>$this->css,'title'=>$this->title]);

        }else{
            return $this->render('listPic',[
                'model'=>$this->model,
                'ac'=>$this->activeRecord,
                'css'=>$this->css,
                'title'=>$this->title,
                'url'=>$this->url,
            ]);

        }*/
    }
    public function registerClientScript()
    {
        BoxAsset::register($this->view);
        //$script = "FormFileUpload.init();";
        //$this->view->registerJs($script, View::POS_READY);
    }
}