<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EstadoVentaAsistida */

$this->title = 'Create Estado Venta Asistida';
$this->params['breadcrumbs'][] = ['label' => 'Estado Venta Asistidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-venta-asistida-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
