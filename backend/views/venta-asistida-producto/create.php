<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\VentaAsistidaProducto */
/* @var $model backend\models\VentaAsistida */

$this->title = 'Create Venta Asistida Producto';
$this->params['breadcrumbs'][] = ['label' => 'Venta Asistida Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venta-asistida-producto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ventaAsistida' => $ventaAsistida
    ]) ?>

</div>
