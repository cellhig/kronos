<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
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
            'persona.telefono',
            'correo_electronico',
            'estado',
            //'persona_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
