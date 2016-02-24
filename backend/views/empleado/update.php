<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Empleado */
/* @var $model backend\models\Empleado */
/* @var $persona backend\models\Persona */

<<<<<<< HEAD
$this->title = 'Update Empleado: ' . ' ' . $model->id;
=======
$this->title = 'Actualizar datos: ' . ' ' . $persona->nombre. ' ' .$persona->apellido;
>>>>>>> copia-loca-desktop
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empleado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'persona' => $persona,
    ]) ?>

</div>