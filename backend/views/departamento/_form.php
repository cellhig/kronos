<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Departamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_departamento')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
