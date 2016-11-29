<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Sede;
use backend\models\Producto;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\ControlExistenciaProducto */
/* @var $ctrlExist backend\models\ControlExistencia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="control-existencia-producto-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- formulario control existencia-->

    <!-- uso del widget de kartik-v (select2) para failitar la busqueda de la sede-->
    <?= $form->field($ctrlExist, 'sede_id')->widget(Select2::classname(), [
            'data' =>  ArrayHelper::map(Sede::find()->all(),'id','nombre_sede'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione sede'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?> 

    <!-- uso del widget de kartik-v (datepicker) para failitar la seleccion de fecha-->    
    <?= $form->field($ctrlExist, 'fecha')->widget(DatePicker::classname(), [
        //'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]); ?>

    <?= $form->field($ctrlExist, 'observaciones')->textarea(['rows' => 3,]) ?>

    <!-- fin formulario control existencia-->

    
    <!--<?= $form->field($model, 'control_existencia_id')->textInput() ?>-->

    <!--<?= $form->field($model, 'producto_id')->textInput() ?>-->

        <!-- uso del widget de kartik-v (select2) para failitar la busqueda de la sede-->
    <?= $form->field($model, 'producto_id')->widget(Select2::classname(), [
            'data' =>  ArrayHelper::map(Producto::find()->all(),'id','nombre', 'categoriaProducto.nombre_categoria'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione uno'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
