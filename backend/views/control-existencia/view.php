<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ControlExistencia */

$this->title = 'Detalles';
$this->params['breadcrumbs'][] = ['label' => 'Control Existencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="control-existencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'observaciones',
            'fecha',
            'sede_id',
        ],
    ]) ?>

</div>
