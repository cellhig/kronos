<?php

namespace backend\controllers;

use Yii;
use backend\models\Producto;
use backend\models\ProductoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductoController implements the CRUD actions for Producto model.
 */
class ProductoController extends Controller
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
     * Lists all Producto models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Producto model.
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
     * Creates a new Producto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Producto();

        if ($model->load(Yii::$app->request->post())) {

            $nombreImagen =$model->codigo_producto;//nombre que le voy a dar a la imagen
            $model->file = UploadedFile::getInstance($model, 'file');// creo una instancia de la imagen
            $model->file->saveAs('imgProductos/'.$nombreImagen.'.'.$model->file->extension);//guardo la imagen con el nombre y la ruta en la app
            $model->imagen = 'imgProductos/'.$nombreImagen.'.'.$model->file->extension;//guardo la ruta de la imagen en la BD

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Producto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $isValid = $model->validate();
            if ($isValid) {
                $nombreImagen =$model->codigo_producto;//nombre que le voy a dar a la imagen
                $model->file = UploadedFile::getInstance($model, 'file');// creo una instancia de la imagen
                if (UploadedFile::getInstance($model, 'file') != null) {
                    $model->file->saveAs('imgProductos/'.$nombreImagen.'.'.$model->file->extension);//guardo la imagen con el nombre y la ruta en la app
                    $model->imagen = 'imgProductos/'.$nombreImagen.'.'.$model->file->extension;//guardo la ruta de la imagen en la BD
                    $model->save(false);
                }

                return $this->redirect(['producto/view', 'id'=>$id]);
            }

            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Producto model.
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
     * Finds the Producto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Producto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Producto::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
