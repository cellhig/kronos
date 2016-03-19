<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TipoIdentificacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Identificacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-identificacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Tipo de Identificacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nombre_tipo_identificacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
