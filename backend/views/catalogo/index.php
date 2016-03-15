<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
use arturoliveira\ExcelView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CatalogoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Catalogos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalogo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Catalogo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

        <?php 

     $gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
      
            'id',
            'nombre_catalogo',
            'descripcion',
            'fecha_inicio',
            'fecha_finalizacion',
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
    'hiddenColumns'=>[0, 9], // SerialColumn, Color, & ActionColumn
    'disabledColumns'=>[0,0], // ID & Name
    'noExportColumns'=>[6], // Status
    'dropdownOptions' => [
        'label' => 'Exportar A...',
        'class' => 'btn btn-default'
    ],
]);
       ?>

    <?php Pjax::begin(); ?> 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel, // se implementará bucador global.
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nombre_catalogo',
            'descripcion',
            'fecha_inicio',
            'fecha_finalizacion',
            // 'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>     

</div>
