<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Catalogo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catalogo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_catalogo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['maxlength' => true, 'rows' => 3]) ?>

    <!-- uso del widget de kartik-v (datepicker) para failitar la seleccion de fecha-->    
    <?= $form->field($model, 'fecha_inicio')->widget(DatePicker::classname(), [
            //'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
        ]); ?>

    <!-- uso del widget de kartik-v (datepicker) para failitar la seleccion de fecha-->    
    <?= $form->field($model, 'fecha_finalizacion')->widget(DatePicker::classname(), [
            //'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
        ]); ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'Activo' => 'Activo', 'Inactivo' => 'Inactivo', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
