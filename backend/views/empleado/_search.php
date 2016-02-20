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

    <?= $form->field($model, 'id') ?>
    <!-- campos de persona -->

    <?= $form->field($persona, 'nombre') ?>

    <?= $form->field($persona, 'apellido') ?>

    <?= $form->field($persona, 'identificacion') ?>

    <?= $form->field($persona, 'direccion') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'municipio_id') ?>

    <?php // echo $form->field($model, 'tipo_identificacion_id') ?>

    <!-- fin campos de persona -->
    <?= $form->field($model, 'telefono_movil') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'persona_id') ?>

    <?= $form->field($model, 'cargo_id') ?>

    <?php // echo $form->field($model, 'sede_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
