<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
use arturoliveira\ExcelView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategoriaProductoProductoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categoria Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoria-producto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Registrar Categoria de Producos', ['value' =>  Url::to('index.php?r=categoria-producto/create'), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
    </p>

    <!-- inicio del modal para el formulario-->
    <?php
        Modal::begin([
                'header' => '<h4>Cargos</h4>',
                'id' => 'modal',
                'size' => 'modal-lg',
            ]);

        echo "<div id='ModalContent'></div>";

        Modal::end();
    ?><!-- fin del modal para el formulario-->

    <?php 

     $gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
      
          'id',
            'codigo_categoria',
            'nombre_categoria',
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


    <?php Pjax::begin(); ?> 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'codigo_categoria',
            'nombre_categoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
    <?php Pjax::end(); ?> 

</div>
