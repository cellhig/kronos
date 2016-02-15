<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\VentaAsistida */

$this->title = 'Create Venta Asistida';
$this->params['breadcrumbs'][] = ['label' => 'Venta Asistidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venta-asistida-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
