<?php

namespace backend\controllers;

use Yii;
use backend\models\Empleado;
use backend\models\Persona;
use backend\models\EmpleadoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * EmpleadoController implements the CRUD actions for Empleado model.
 */
class EmpleadoController extends Controller
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
     * Lists all Empleado models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmpleadoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Empleado model.
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
     * Creates a new Empleado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Empleado();
        $persona = new Persona();//objeto del modelo persona

        if ($model->load(Yii::$app->request->post()) && $persona->load(Yii::$app->request->post())) {

            $persona->nombre = $persona->nombre;
            $persona->apellido = $persona->apellido;
            $persona->identificacion = $persona->identificacion;
            $persona->tipo_identificacion_id = $persona->tipo_identificacion_id;
            $persona->municipio_id = $persona->municipio_id;
            $persona->direccion = $persona->direccion;
            $persona->telefono = $persona->telefono;

            $persona->save();


            $model->telefono_movil = $model->telefono_movil;
            $model->estado = $model->estado;
            $model->persona_id = $persona->id;
            $model->cargo_id = $model->cargo_id;
            $model->sede_id= $model->sede_id;
            $model->save();


            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
                'persona' => $persona,//uso el objeto persona aqui para poder guaradar los datos en la BD
            ]);
        }
    }

    /**
     * Updates an existing Empleado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = Empleado::findOne($id);
        $pid = $model->persona_id;//busca el id de persona asociado a empleado
        $persona = Persona::findOne($pid);

        if (!isset($model, $persona)) {
            throw new NotFoundHttpException("The user was not found.");
        }

        if ($model->load(Yii::$app->request->post()) && $persona->load(Yii::$app->request->post())) {
            $isValid = $model->validate();
            $isValid = $persona->validate() && $isValid;

            if ($isValid) {
                $model->save(false);
                $persona->save(false);
                return $this->redirect(['empleado/view', 'id'=>$id]);
            }

            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'persona' => $persona,//uso el objeto persona aqui para poder actualizar los datos en la BD
            ]);
        }
    }

    /**
     * Deletes an existing Empleado model.
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
     * Finds the Empleado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Empleado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Empleado::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}