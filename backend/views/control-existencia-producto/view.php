<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ControlExistenciaProducto */

$this->title = 'Detalles';
$this->params['breadcrumbs'][] = ['label' => 'Control Existencia Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="control-existencia-producto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <!--<?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro de eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>-->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'control_existencia_id',            
            'controlExistencia.fecha',
            'controlExistencia.sede.nombre_sede',
            'controlExistencia.observaciones',
            'producto.nombre',
            'cantidad',
        ],
    ]) ?>

</div>
