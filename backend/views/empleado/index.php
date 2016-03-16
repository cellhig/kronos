<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
use arturoliveira\ExcelView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;




/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmpleadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empleados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empleado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Registrar Empleado', ['value' =>  Url::to('index.php?r=empleado/create'), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
    </p>

    <!-- inicio del modal para el formulario-->
    <?php
        Modal::begin([
                'header' => '<h4>Empleados</h4>',
                'id' => 'modal',
                'size' => 'modal-lg',
            ]);

        echo "<div id='ModalContent'></div>";

        Modal::end();
    ?><!-- fin del modal para el formulario-->

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
            'label' => 'Columnas'],
        'hiddenColumns'=>[0, 4, 9], // SerialColumn, Color, & ActionColumn
        'disabledColumns'=>[0,0], // ID & Name
        'noExportColumns'=>[6], // Status
        'dropdownOptions' => [
            'label' => 'Exportar A..',
            'class' => 'btn btn-default'
        ],
    ]);
           ?>


     <?php Pjax::begin(); ?>      
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,//se implementa un bucador global por eso ya no es necesario
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'persona_id',
                'value' => 'persona.nombre',
                'label' => 'Nombre',
            ],

            [
                'attribute' => 'persona_id',
                'value' => 'persona.apellido',
                'label' => 'Apellido',
            ],

            [
                'attribute' => 'persona_id',
                'value' => 'persona.direccion',
                'label' => 'Direccion',
            ],

            [
                'attribute' => 'persona_id',
                'value' => 'persona.telefono',
                'label' => 'Telefono',
            ],

            //'telefono_movil',
            //'estado',
            [
                'attribute' => 'cargo_id',
                'value' => 'cargo.nombre_cargo',
                'label' => 'Cargo',
            ],

            // 'sede_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>