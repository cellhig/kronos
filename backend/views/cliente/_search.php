<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'buscador') ?>

   <!-- <?= $form->field($model, 'correo_electronico') ?>

    <?=  $form->field($model, 'estado') ?>

    <?= $form->field($model, 'persona_id') ?>-->

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <!--<?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?> --><!-- deshabilito el boton limpiar no es necesario aún-->
    </div>

    <?php ActiveForm::end(); ?>

</div>
