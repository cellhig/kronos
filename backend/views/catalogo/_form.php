<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Catalogo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catalogo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_catalogo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'fecha_finalizacion')->textInput() ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'Activo' => 'Activo', 'Inactivo' => 'Inactivo', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
