<?php

namespace app\modules\Source\controllers;

use Yii;
use app\modules\Source\models\Source;
use app\modules\Source\models\SourceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SourceController implements the CRUD actions for Source model.
 */
class SourceController extends Controller
{
    public function behaviors()
    {
        return [
            ];
    }

    /**
     * Lists all Source models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SourceSearch();

        $data = $searchModel->lists(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'lists' => $data['lists'],
            'pages' => $data['pages'],
        ]);
    }

    /**
     * Creates a new Source model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Source();

        if ($model->load(Yii::$app->request->post())) {
	    $model->create_time = date('Y-m-d H:i:s');
	    $model->save();
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Source model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id,$url)
    {
        $model = $this->findModel($id);

	$this->layout = false;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->id]);
	    return $this->redirect($url);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Finds the Source model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Source the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Source::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     *  获取指定对象信息
    */
    public function actionObject($id,$url)
    {
        $model = $this->findModel($id);
        $this->layout = false;
        return $this->render('object', [
                'model' => $model,
                'url' => $url,
        ]);
    }

    public function actionDisable($id,$url)
    {
        $model = $this->findModel($id);

	$model->status = 2;

	$model->save();

	return $this->redirect($url);
    }

    public function actionCancel($id,$url)
    {
        $model = $this->findModel($id);

	$model->status = 1;

	$model->save();

	return $this->redirect($url);
    }

}
