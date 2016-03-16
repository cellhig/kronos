<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Sede;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\ControlExistencia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="control-existencia-form">

    <?php $form = ActiveForm::begin(); ?>


    <!-- uso del widget de kartik-v (select2) para failitar la busqueda de la sede-->
    <?= $form->field($model, 'sede_id')->widget(Select2::classname(), [
            'data' =>  ArrayHelper::map(Sede::find()->all(),'id','nombre_sede'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione sede'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?> 

    <!-- uso del widget de kartik-v (datepicker) para failitar la seleccion de fecha-->    
    <?= $form->field($model, 'fecha')->widget(DatePicker::classname(), [
		    //'options' => ['placeholder' => ''],
		    'pluginOptions' => [
		        'autoclose'=>true,
		        'format' => 'yyyy-mm-dd'
		    ]
		]); ?>

    <?= $form->field($model, 'observaciones')->textarea(['rows' => 3]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
