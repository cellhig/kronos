<?php
 
use yii\helpers\Html;
use yii\grid\GridView;
use \yii\bootstrap\Collapse;
use kartik\export\ExportMenu;
use arturoliveira\ExcelView;
use yii\widgets\Pjax;


 
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
 
$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
 
    <h1><?= Html::encode($this->title) ?></h1>
 
<?php   echo Collapse::widget([
 
     
   'items' => [
        // equivalente a lo de arriba
        [
            'label' => 'Search',
            'content' => $this->render('_search', ['model' => $searchModel]) ,
            // open its content by default
            //'contentOptions' => ['class' => 'in']
        ],
        
   ] 
]);
  
   
?>
    <?php 

         $gridColumns = [
        ['class' => 'kartik\grid\SerialColumn'],
                'id',
                'cantidad',
                'control_existencia_id',
                'producto_id',
        ];
    ?>

          <?php
        echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'fontAwesome' => true,
        'selectedColumns'=> [1, 2, 3, 4, 5],  // Col seq 2 to 6
        'columnSelectorOptions'=>[
            'label' => 'Columns'],
        'hiddenColumns'=>[0, 4, 9], // SerialColumn, Color, & ActionColumn
        'disabledColumns'=>[0,0], // ID & Name
        'noExportColumns'=>[6], // Status
        'dropdownOptions' => [
            'label' => 'Export All',
            'class' => 'btn btn-default'
        ],
    ]);
           ?>

    <?php Pjax::begin(); ?>  
   <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
 
            //'id',
            ['attribute'=>'userIdLink', 'format'=>'raw'],
            ['attribute'=>'userLink', 'format'=>'raw'],
            ['attribute'=>'perfilLink', 'format'=>'raw'],
           
            'email:email',
            'rolNombre',
            'tipoUsuarioNombre',
            'estadoNombre',
            'created_at',
          
           ['class' => 'yii\grid\ActionColumn'],
           
            
            // 'updated_at',
 
            
        ],
    ]); ?>
    <?php Pjax::end(); ?> 
 
</div>