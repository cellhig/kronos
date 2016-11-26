<?php
 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
 
/* @var $this yii\web\View */
/* @var $model backend\models\search\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>
 
<div class="user-search">
 
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
 
    <?= $form->field($model, 'id') ?>
 
    <?= $form->field($model, 'username') ?>
 
   <?= $form->field($model, 'email') ?>
    
    <?= $form->field($model, 'rol_id')->dropDownList(User::getRolLista(), [ 'prompt' => 'Por Favor Elija Uno' ]);?>


    <?= $form->field($model, 'estado_id')->dropDownList($model->estadoLista, [ 'prompt' => 'Por Favor Elija Uno' ]);?>
 
    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>
 
    <?php ActiveForm::end(); ?>
 
</div>