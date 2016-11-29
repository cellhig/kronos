<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\EstadoVentaAsistida */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Estado Venta Asistidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-venta-asistida-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro de eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre_estado_venta_asistida',
        ],
    ]) ?>

</div>
