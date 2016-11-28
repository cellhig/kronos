<?php

namespace backend\controllers;

use Yii;
use backend\models\VentaAsistidaProducto;
use backend\models\VentaAsistida;
use backend\models\VentaAsistidaProductoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VentaAsistidaProductoController implements the CRUD actions for VentaAsistidaProducto model.
 */
class VentaAsistidaProductoController extends Controller
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
     * Lists all VentaAsistidaProducto models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VentaAsistidaProductoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VentaAsistidaProducto model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = VentaAsistidaProducto::findOne($id);
        $ventaId = $model->venta_asistida_id;
        $ventaAsistida = VentaAsistida::findOne($ventaId);

        return $this->render('view', [
            'model' => $this->findModel($id),
            'ventaAsistida' => $ventaAsistida
        ]);
    }

    /**
     * Creates a new VentaAsistidaProducto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VentaAsistidaProducto();
        $ventaAsistida = new VentaAsistida();

        if ($model->load(Yii::$app->request->post()) && $ventaAsistida->load(Yii::$app->request->post())) {

            $ventaAsistida->estado_venta_asistida_id;
            $ventaAsistida->cliente_id;
            $ventaAsistida->fecha_solicitud;

            $ventaAsistida->save();

            $model->producto_id;
            $model->cantidad_producto;
            $model->venta_asistida_id = $ventaAsistida->id;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'ventaAsistida' => $ventaAsistida
            ]);
        }
    }

    /**
     * Updates an existing VentaAsistidaProducto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = VentaAsistidaProducto::findOne($id);
        $ventaId = $model->venta_asistida_id;
        $ventaAsistida = VentaAsistida::findOne($ventaId);

        if (!isset($model, $ventaAsistida)) {
            throw new NotFoundHttpException("The sale was not found.");
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $isValid = $model->validate();
            $isValid = $ventaAsistida->validate() && $isValid;

            if ($isValid) {
                $model->save();
                $ventaAsistida->save();
                return $this->redirect(['venta-asistida-producto/view', 'id'=>$id]);
            }
            //return $this->redirect(['view', 'id' => $model->id]);

        } else {
            return $this->render('update', [
                'model' => $model,
                'ventaAsistida' => $ventaAsistida
            ]);
        }
    }

    /**
     * Deletes an existing VentaAsistidaProducto model.
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
     * Finds the VentaAsistidaProducto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return VentaAsistidaProducto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = VentaAsistidaProducto::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
