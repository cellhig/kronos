<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
use arturoliveira\ExcelView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php 

     $gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
      
                   //'id',
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

            'persona.municipio.nombre_municipio',
            'persona.telefono',
            //'correo_electronico',
            //'estado',
            //'persona_id',
    ];
?>

      <?php
    echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'fontAwesome' => true,
    'selectedColumns'=> [1, 2, 3, 4, 5],  // Col seq 2 to 6
    'columnSelectorOptions'=>[
        'label' => 'Columnas'],
    'hiddenColumns'=>[0, 4, 9], // SerialColumn, Color, & ActionColumn
    'disabledColumns'=>[0,0], // ID & Name
    'noExportColumns'=>[6], // Status
    'dropdownOptions' => [
        'label' => 'Exportar A...',
        'class' => 'btn btn-default'
    ],
]);
       ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,// al habilitar bucador global no es necesario este filtro por ahora.
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
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

            'persona.municipio.nombre_municipio',
            'persona.telefono',
            //'correo_electronico',
            //'estado',
            //'persona_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
