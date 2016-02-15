<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VentaAsistida */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-asistida-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_solicitud')->textInput() ?>

    <?= $form->field($model, 'estado_venta_asistida_id')->textInput() ?>

    <?= $form->field($model, 'cliente_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
