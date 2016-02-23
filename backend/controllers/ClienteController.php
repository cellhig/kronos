<?php

namespace backend\controllers;

use Yii;
use backend\models\Cliente;
use backend\models\ClienteSearch;
use backend\models\Persona;
use backend\models\PersonaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClienteController implements the CRUD actions for Cliente model.
 */
class ClienteController extends Controller
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
     * Lists all Cliente models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClienteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cliente model.
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
     * Creates a new Cliente model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cliente();
        $persona = new Persona();

        if ($model->load(Yii::$app->request->post()) && $persona->load(Yii::$app->request->post())) {

            $persona->nombre = $persona->nombre;
            $persona->apellido = $persona->apellido;
            $persona->identificacion = $persona->identificacion;
            $persona->tipo_identificacion_id = $persona->tipo_identificacion_id;
            $persona->municipio_id = $persona->municipio_id;
            $persona->direccion = $persona->direccion;
            $persona->telefono = $persona->telefono;

            $persona->save();

            $model->correo_electronico = $model->correo_electronico;
            $model->estado = $model->estado;
            $model->persona_id = $persona->id;

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);

        } else {
            return $this->render('create', [
                'model' => $model,
                'persona' => $persona,
            ]);
        }
    }

    /**
     * Updates an existing Cliente model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = Cliente::findOne($id);
        $persona = Persona::findOne($id);

        if (!isset($model, $persona)) {
            throw new NotFoundHttpException("The user was not found.");
        }

        if ($model->load(Yii::$app->request->post()) && $persona->load(Yii::$app->request->post())) {
            $isValid = $model->validate();
            $isValid = $persona->validate() && $isValid;

            if ($isValid) {
                $model->save(false);
                $persona->save(false);
                return $this->redirect(['cliente/view', 'id'=>$id]);
            }

        } else {
            return $this->render('update', [
                'model' => $model,
                'persona' => $persona,
            ]);
        }
    }

    /**
     * Deletes an existing Cliente model.
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
     * Finds the Cliente model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cliente the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cliente::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
