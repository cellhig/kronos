<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use backend\models\Municipio;

/* @var $this yii\web\View */
/* @var $model backend\models\Sede */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sede-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_sede')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'municipio_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Municipio::find()->all(),'id','nombre_municipio', 'departamento.nombre_departamento'),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione uno'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
