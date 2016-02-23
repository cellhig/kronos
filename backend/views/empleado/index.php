<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmpleadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empleados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empleado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Empleado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            /*[
                'attribute'=>'persona_id',
                'value'=>'persona.nombre'
            ],*/ // array para habilitar busqueda.
            'persona.nombre',
            /*[
                'attribute'=>'persona_id',
                'value'=>'persona.apellido'
            ],*/ // array para habilitar busqueda.
            'persona.apellido',

            /*[
                'attribute'=>'persona_id',
                'value'=>'persona.direccion'
            ],*/ // array para habilitar busqueda.
            'persona.direccion',

            /*[
                'attribute'=>'persona_id',
                'value'=>'persona.telefono'
            ],*/ // array para habilitar busqueda.
            'persona.telefono',

            //'telefono_movil',

            /*[
                'attribute'=>'cargo_id',
                'value'=>'cargo.nombre_cargo'
            ],*/ // array para habilitar busqueda.
            'cargo.nombre_cargo',
            //'estado',
            //'persona_id',
            'id',
            'telefono_movil',
            'estado',
            'persona_id',
            'cargo_id',
            // 'sede_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
