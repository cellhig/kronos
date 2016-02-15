<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <?= Html::a('Create Control Existencia Producto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cantidad',
            'control_existencia_id',
            'producto_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
