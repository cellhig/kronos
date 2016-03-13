<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
use arturoliveira\ExcelView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ControlExistenciaProductoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Control Existencia Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="control-existencia-producto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Existencia de Producto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

     <?php 

     $gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
            'id',
            'cantidad',
            'control_existencia_id',
            'producto_id',
    ];
?>

      <?php
    echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'fontAwesome' => true,
    'selectedColumns'=> [1, 2, 3, 4, 5],  // Col seq 2 to 6
    'columnSelectorOptions'=>[
        'label' => 'Columns'],
    'hiddenColumns'=>[0, 4, 9], // SerialColumn, Color, & ActionColumn
    'disabledColumns'=>[0,0], // ID & Name
    'noExportColumns'=>[6], // Status
    'dropdownOptions' => [
        'label' => 'Export All',
        'class' => 'btn btn-default'
    ],
]);
       ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'control_existencia_id',
            [
                'attribute' => 'control_existencia_id',
                'value' => 'controlExistencia.fecha',
                'label' => 'Fecha',
            ],
            //'controlExistencia.fecha',
            [
                'attribute' => 'control_existencia_id',
                'value' => 'controlExistencia.sede.nombre_sede',
                'label' => 'Sede',
            ],
            //'controlExistencia.sede.nombre_sede',
            [
                'attribute' => 'producto_id',
                'value' => 'producto.nombre',
            ],
            //'producto.nombre',
            'cantidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
