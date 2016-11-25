<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\EstadoVentaAsistida;
use backend\models\VentaAsistida;
use backend\models\Cliente;
use backend\models\Producto;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\VentaAsistidaProducto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-asistida-producto-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- -->

    <?= $form->field($ventaAsistida, 'fecha_solicitud')->widget(DatePicker::classname(), [
        //'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]); ?>

    <?= $form->field($ventaAsistida, 'cliente_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Cliente::find()->all(),'id','persona.nombre', 'correo_electronico'),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione uno'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <!-- -->

    <?= $form->field($model, 'producto_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Producto::find()->all(),'id','nombre', 'categoriaProducto.nombre_categoria'),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione uno'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'cantidad_producto')->textInput() ?>

    <?= $form->field($model, 'observaciones')->textarea(['maxlength' => true]) ?>

    <?= $form->field($ventaAsistida, 'estado_venta_asistida_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(EstadoVentaAsistida::find()->all(),'id','nombre_estado_venta_asistida'),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione uno'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
