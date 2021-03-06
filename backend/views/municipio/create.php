<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Municipio */

$this->title = 'Registrar Municipio';
$this->params['breadcrumbs'][] = ['label' => 'Municipios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municipio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
