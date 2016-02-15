<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <?= Html::a('Create Venta Asistida Producto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'observaciones',
            'cantidad_producto',
            'venta_asistida_id',
            'producto_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
