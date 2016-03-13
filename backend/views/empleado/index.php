<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
use arturoliveira\ExcelView;




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

     <?php 

         $gridColumns = [
        ['class' => 'kartik\grid\SerialColumn'],
            //'id',
            'persona.nombre',
            'persona.apellido',
            'persona.direccion',
            'persona.telefono',
            //'telefono_movil',
            //'estado',
            //'persona_id',
            'cargo.nombre_cargo',
            // 'sede_id',
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
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'persona.nombre',
            'persona.apellido',
            'persona.direccion',
            'persona.telefono',
            //'telefono_movil',
            //'estado',
            //'persona_id',
            'cargo.nombre_cargo',
            // 'sede_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>