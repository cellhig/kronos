<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Departamento */

$this->title = 'Update Departamento: ' . ' ' . $model->nombre_departamento;
$this->params['breadcrumbs'][] = ['label' => 'Departamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_departamento, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="departamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
