<?php

namespace backend\controllers;

use Yii;
use backend\models\ControlExistenciaProducto;
use backend\models\ControlExistenciaProductoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\ControlExistencia;

/**
 * ControlExistenciaProductoController implements the CRUD actions for ControlExistenciaProducto model.
 */
class ControlExistenciaProductoController extends Controller
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
     * Lists all ControlExistenciaProducto models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ControlExistenciaProductoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ControlExistenciaProducto model.
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
     * Creates a new ControlExistenciaProducto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ControlExistenciaProducto();
        $ctrlExist = new ControlExistencia();

        if ($model->load(Yii::$app->request->post()) && $ctrlExist->load(Yii::$app->request->post())) {

            $ctrlExist->fecha = $ctrlExist->fecha;
            $ctrlExist->observaciones = $ctrlExist->observaciones;
            $ctrlExist->sede_id = $ctrlExist->sede_id;

            $ctrlExist->save();

            $model->cantidad = $model->cantidad;
            $model->control_existencia_id = $ctrlExist->id;
            $model->producto_id = $model->producto_id;

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'ctrlExist' => $ctrlExist,
            ]);
        }
    }

    /**
     * Updates an existing ControlExistenciaProducto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = ControlExistenciaProducto::findOne($id);
        $ctrlId = $model->control_existencia_id;
        $ctrlExist = ControlExistencia::findOne($ctrlId);

        if ($model->load(Yii::$app->request->post()) && $ctrlExist->load(Yii::$app->request->post())) {
            $isValid = $model->validate();
            $isValid = $ctrlExist->validate() && $isValid;

            if ($isValid) {
                $model->save(false);
                $ctrlExist->save(false);

                return $this->redirect(['control-existencia-producto\view', 'id' => $id]);
            }
            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'ctrlExist' => $ctrlExist,
            ]);
        }
    }

    /**
     * Deletes an existing ControlExistenciaProducto model.
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
     * Finds the ControlExistenciaProducto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ControlExistenciaProducto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ControlExistenciaProducto::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
