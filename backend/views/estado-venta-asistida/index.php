<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EstadoVentaAsistidaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estado Venta Asistidas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-venta-asistida-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Estado Venta Asistida', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre_estado_venta_asistida',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
