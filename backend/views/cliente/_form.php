<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Municipio;
use backend\models\TipoIdentificacion;
use backend\models\Cargo;
use backend\models\Sede;
use backend\models\Departamento;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model backend\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

        <!-- Inicia el fromulario  de persona -->

    <?= $form->field($persona, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($persona, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($persona, 'identificacion')->textInput(['maxlength' => true]) ?>


    <!-- uso del widget de kartik-v (select2) para failitar la busqueda de los tipos de documento-->
    <?= $form->field($persona, 'tipo_identificacion_id')->widget(Select2::classname(), [
            'data' =>  ArrayHelper::map(TipoIdentificacion::find()->all(),'id','nombre_tipo_identificacion'),
            'language' => 'en',
            'options' => ['placeholder' => 'Seleccione uno'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>    

    <!-- uso del widget de kartik-v (select2) para failitar la busqueda de los municipios-->
    <?= $form->field($persona, 'municipio_id')->widget(Select2::classname(), [
            'data' =>  ArrayHelper::map(Municipio::find()->all(),'id','nombre_municipio'),
            'language' => 'en',
            'options' => ['placeholder' => 'Seleccione uno'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($persona, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($persona, 'telefono')->textInput(['maxlength' => true]) ?>


    <!-- finaliza el fromulario  de persona -->

    <?= $form->field($model, 'correo_electronico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'Activo' => 'Activo', 'Inactivo' => 'Inactivo', ], ['prompt' => 'Seleccione uno']) ?>

    <!--<?= $form->field($model, 'persona_id')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
