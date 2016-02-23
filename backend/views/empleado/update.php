<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Empleado */
/* @var $model backend\models\Empleado */
/* @var $persona backend\models\Persona */

$this->title = 'Actualizar Empleado: ' . ' ' . $persona->nombre. ' ' .$persona->apellido;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $persona->nombre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="empleado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'persona' => $persona,
    ]) ?>

</div>
