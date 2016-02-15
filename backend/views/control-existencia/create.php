<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ControlExistencia */

$this->title = 'Create Control Existencia';
$this->params['breadcrumbs'][] = ['label' => 'Control Existencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="control-existencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
