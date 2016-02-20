<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sede */

$this->title = 'Actualizar Sede: ' . ' ' . $model->nombre_sede;
$this->params['breadcrumbs'][] = ['label' => 'Sedes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_sede, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="sede-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
