<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmpleadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empleado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'buscador') ?>
    
    <!--<?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'persona_id') ?>

    <?= $form->field($model, 'cargo_id') ?>

    <?php // echo $form->field($model, 'sede_id') ?>-->

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <!--<?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>--><!-- deshabilito el boton limpiar no es necesario aún-->
    </div>

    <?php ActiveForm::end(); ?>

</div>
