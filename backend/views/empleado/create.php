<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Empleado */

$this->title = 'Registar Empleado';
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
