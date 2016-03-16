<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Departamento;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Municipio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="municipio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_municipio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departamento_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Departamento::find()->all(),'id','nombre_departamento'),
        'language' => 'en',
        'options' => ['placeholder' => 'Seleccione uno'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Registrar') : Yii::t('app', 'Editar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>