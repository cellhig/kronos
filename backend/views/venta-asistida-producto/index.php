<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
use arturoliveira\ExcelView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VentaAsistidaProductoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Venta Asistida Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venta-asistida-producto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Venta Asistida de Producto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
        $gridColumns = [
            ['class' => 'kartik\grid\SerialColumn'],
            'id',
            'observaciones',
            'cantidad_producto',
            'venta_asistida_id',
            'producto_id',
            ];
    ?>

    <?php
        echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        //'columns' => $gridColumns,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                //'id',
                //'observaciones',
                [
                    'attribute' => 'venta_asistida_id',
                    'value' => 'ventaAsistida.id',
                    'label' => '# de solicitud',
                ],
                [
                    'attribute' => 'venta_asistida_id',
                    'value' => 'ventaAsistida.fecha_solicitud',
                    'label' => 'Fecha de solicitud',
                ],
                [
                    'attribute' => 'producto_id',
                    'value' => 'producto.nombre',
                    'label' => 'Nombre del producto solicitado',
                ],
                [
                    'attribute' => 'cantidad_producto',
                    'value' => 'cantidad_producto',
                    'label' => 'unidades solicitadas',
                ],
                [
                    'attribute' => 'venta_asistida_id',
                    'value' => 'ventaAsistida.cliente.persona.nombre',
                    'label' => 'Nombre del cliente',
                ],
                [
                    'attribute' => 'venta_asistida_id',
                    'value' => 'ventaAsistida.cliente.persona.telefono',
                    'label' => 'teléfono de contacto',
                ],
                [
                    'attribute' => 'venta_asistida_id',
                    'value' => 'ventaAsistida.cliente.correo_electronico',
                    'label' => 'correo electrónico de contacto',
                ],
                [
                    'attribute' => 'venta_asistida_id',
                    'value' => 'ventaAsistida.estadoVentaAsistida.nombre_estado_venta_asistida',
                    'label' => 'estado de la solicitud',
                ],

                //'cantidad_producto',
                ],
        'fontAwesome' => true,
        'selectedColumns'=> [1, 2, 3, 4, 5, 6, 7],  // Col seq 2 to 6
        'columnSelectorOptions'=>[
            'label' => 'Columnas'],
        'hiddenColumns'=>[/*0, 4, 9*/], // SerialColumn, Color, & ActionColumn
        'disabledColumns'=>[0,0], // ID & Name
        'noExportColumns'=>[/*6*/], // Status
        'dropdownOptions' => [
            'label' => 'Exportar A',
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
            //'id',
            //'observaciones',
            [
                'attribute' => 'venta_asistida_id',
                'value' => 'ventaAsistida.fecha_solicitud',
                'label' => 'Fecha de solicitud',
            ],
            [
                'attribute' => 'producto_id',
                'value' => 'producto.nombre',
                'label' => 'Nombre del producto solicitado',
            ],
            'cantidad_producto',

            ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    <?php Pjax::end(); ?>
</div>
