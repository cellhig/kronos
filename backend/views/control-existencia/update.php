<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ControlExistencia */

$this->title = 'Editar Control Existencia: ' . ' ' . 'control '. $model->id.' de '.$model->fecha;
$this->params['breadcrumbs'][] = ['label' => 'Control Existencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'control '. $model->id . ' de ' . $model->fecha, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="control-existencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
