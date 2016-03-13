<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ControlExistenciaProducto */

$this->title = 'Actualizar Control Existencia: ';// . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Control Existencia de Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'existencia', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="control-existencia-producto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ctrlExist' => $ctrlExist,
    ]) ?>

</div>
