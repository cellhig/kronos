<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Catalogo */

$this->title = 'Editar Catalogo: ' . ' ' . $model->nombre_catalogo;
$this->params['breadcrumbs'][] = ['label' => 'Catalogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="catalogo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
