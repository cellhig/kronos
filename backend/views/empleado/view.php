<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Empleado */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empleado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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

            //'id',

            'persona.nombre',
            'persona.apellido',
            'persona.direccion',
            'persona.telefono',
            'telefono_movil',

            'sede.nombre_sede',
            'cargo.nombre_cargo',
            //'estado', 
            'cargo.nombre_cargo',
            'sede.nombre_sede',
            'estado',
            //'persona_id',
            //'cargo_id',
            //'sede_id',

        ],
    ]) ?>

</div>


