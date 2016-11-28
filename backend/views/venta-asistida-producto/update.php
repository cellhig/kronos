<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\VentaAsistidaProducto */
/* @var $ventaAsistida backend\models\VentaAsistida */

$this->title = 'Actualizar Venta Asistida Producto: ' . ' ' . $ventaAsistida->id;
$this->params['breadcrumbs'][] = ['label' => 'Venta Asistida Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $ventaAsistida->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="venta-asistida-producto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ventaAsistida' => $ventaAsistida
    ]) ?>

</div>
