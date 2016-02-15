<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EstadoVentaAsistida */

$this->title = 'Update Estado Venta Asistida: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Estado Venta Asistidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estado-venta-asistida-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
