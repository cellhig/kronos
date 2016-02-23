<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Empleado */

$this->title = 'Registrar Empleado';
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empleado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'persona' => $persona, //renderiza el modelo de persona
    ]) ?>

</div>
