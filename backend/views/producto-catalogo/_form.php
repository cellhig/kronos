<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Catalogo;
use backend\models\Producto;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model backend\models\ProductoCatalogo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-catalogo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'producto_id')->widget(Select2::classname(), [
            'data' =>  ArrayHelper::map(Producto::find()->all(),'id','nombre'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione uno'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <!--<?= $form->field($model, 'producto_id')->textInput() ?>-->

    <!--<?= $form->field($model, 'catalogo_id')->textInput() ?>-->
    <!-- uso del widget de kartik-v (select2) para failitar la busqueda de los tipos de documento-->
    <?= $form->field($model, 'catalogo_id')->widget(Select2::classname(), [
            'data' =>  ArrayHelper::map(Catalogo::find()->all(),'id','nombre_catalogo'),
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
