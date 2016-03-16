<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CategoriaProducto */

$this->title = 'Editar Categoria Producto: ' . ' ' . $model->nombre_categoria;
$this->params['breadcrumbs'][] = ['label' => 'Categoria de Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_categoria, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="categoria-producto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
