<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VentaAsistidaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Venta Asistidas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venta-asistida-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Venta Asistida', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fecha_solicitud',
            'estado_venta_asistida_id',
            'cliente_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
