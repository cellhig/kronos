<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ControlExistenciaProducto */

$this->title = 'Create Control Existencia Producto';
$this->params['breadcrumbs'][] = ['label' => 'Control Existencia Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="control-existencia-producto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
