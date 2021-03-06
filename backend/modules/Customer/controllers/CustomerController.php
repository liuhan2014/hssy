<?php

namespace app\modules\Customer\controllers;

use Yii;
use app\modules\Customer\models\Customer;
use app\modules\Customer\models\CustomerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CustomerController implements the CRUD actions for Customer model.
 */
class CustomerController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Customer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CustomerSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $data = $searchModel->getList(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'data' => $data,
        ]);
    }

    /**
     * Displays a single Customer model.
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
     * Creates a new Customer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Customer();

        if ($model->load(Yii::$app->request->post())) {
		
	        $model->create_time = date("Y-m-d H:i:s");
	        // 获取当前登陆用户
            // $model->entry_admin = $admin->id;
	        // 初始状态  1
	        $model->status  = 1;

	        if($model->save()){
	            // 记录日志
                $data['customer_id'] = $model->id;
                $data['admin_id'] = \Yii::$app->user->getId();
                $data['content'] = sprintf("添加客户信息");
                $data['type'] = 1;
                \Yii::$app->customerLog->write($data);
	        }
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Customer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id,$url)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->id]);
            // 记录日志
            $data['customer_id'] = $model->id;
            $data['admin_id'] = \Yii::$app->user->getId();
            $data['content'] = sprintf("修改客户信息");
            $data['type'] = 2;
            \Yii::$app->customerLog->write($data);
            return $this->redirect($url);

        } else {
        //var_dump($model);exit;
            $this->layout = false;
            return $this->render('update', ['model' => $model,]);
        }
    }

    /**
     * Deletes an existing Customer model.
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
     * Finds the Customer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Customer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Customer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
