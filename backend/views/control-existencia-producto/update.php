<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ControlExistenciaProducto */

$this->title = 'Update Control Existencia Producto: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Control Existencia Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="control-existencia-producto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
