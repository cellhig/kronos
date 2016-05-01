<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\FileInput;
use backend\models\CategoriaProducto;
/* @var $this yii\web\View */
/* @var $model backend\models\Producto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?><!-- ['options' => ['enctype' => 'multipart/form-data'] es necesario para cargar cualquier archivo en php-->

    <?= $form->field($model, 'codigo_producto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
    ]); ?> 

    <?= $form->field($model, 'descripcion')->textarea(['maxlength' => true, 'rows' => 3]) ?>

        <!-- uso del widget de kartik-v (select2) para failitar la busqueda de los tipos de documento-->
    <?= $form->field($model, 'categoria_producto_id')->widget(Select2::classname(), [
            'data' =>  ArrayHelper::map(CategoriaProducto::find()->all(),'id','nombre_categoria'),
            'language' => 'en',
            'options' => ['placeholder' => 'Seleccione uno'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'Activo' => 'Activo', 'Inactivo' => 'Inactivo', ], ['prompt' => '']) ?>

    <!--<?= $form->field($model, 'categoria_producto_id')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
