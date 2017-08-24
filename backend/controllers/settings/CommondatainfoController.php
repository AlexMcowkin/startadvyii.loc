<?php
namespace backend\controllers\settings;

use Yii;
use backend\models\settings\CommondataInfo;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\bootstrap\ActiveForm;

class CommondatainfoController extends Controller
{
    public $layout = "@app/views/layouts/content/content_full";

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

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => CommondataInfo::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreateupdate()
    {
        $model = new CommondataInfo();

        $request = Yii::$app->getRequest();
        if($request->isPost && $request->post('ajax') !== null)
        {
            $model->load(Yii::$app->request->post());
            Yii::$app->response->format = Response::FORMAT_JSON;
            $result = ActiveForm::validate($model);
            return $result;
        }

        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                // delete all rows from table
                CommondataInfo::deleteAll();

                // get all rows into array
                $_commondataInfo = Yii::$app->request->post('CommondataInfo');
                foreach($_commondataInfo["commoninfo"] as $value)
                {
                    $rows[] = [$value['attribute'], $value['text']];
                }

                // insert all rows
                Yii::$app->db->createCommand()->batchInsert(CommondataInfo::tableName(), ['attribute', 'text'], $rows)->execute();

                return $this->redirect(['index']);
            }
            else
            {
                $errors = $model->getErrors();
                return $this->render('createupdate', ['model' => $model, 'errors' => $errors]);
            }
        }
        else
        {
            $commoninfo = CommondataInfo::find()->all();
            foreach ($commoninfo as $key => $value)
            {
                $model->commoninfo[] = ['id'=> $value->id, 'attribute' => $value->attribute, 'text' => $value->text];
            }
            return $this->render('createupdate', ['model' => $model, 'errors' => '']);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = CommondataInfo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}