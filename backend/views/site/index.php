
<?php
use backend\assets\AppAsset; 
use yii\helpers\Html;
use common\models\PermisosHelpers;

/**
 * @var yii\web\View $this
 */

$this->title = 'Distrinet';

$es_Superadmin = PermisosHelpers::requerirMinimoRol('SuperUsuario');
$es_admin = PermisosHelpers::requerirMinimoRol('Admin');
$es_User = PermisosHelpers::requerirMinimoRol('User');

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-index">
  

  <?php
      if (!Yii::$app->user->isGuest && $es_Superadmin): ?>
    
    <div class="row" >
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
          <i class="fa fa-user fa-3x"></i>
          <?php
          if (!Yii::$app->user->isGuest && $es_Superadmin) {
            echo Html::a(' Usuarios', ['user/index'], ['class' => '']);
          }
          ?>
        </div> 
      </div> 

      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
          <i class="fa fa-tags fa-3x"></i>
          <?php
          if (!Yii::$app->user->isGuest && $es_Superadmin) {
            echo Html::a(' Perfiles', ['perfil/index'], ['class' => '']);
          }
          ?>
        </div> 
      </div> 

      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">  
          <i class="fa fa-paper-plane fa-3x"></i>
          <?php
          if (!Yii::$app->user->isGuest && $es_Superadmin) {
            echo Html::a(' Roles', ['rol/index'], ['class' => '']);
          }
          ?>
        </div> 
      </div> 

      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
          <i class="fa fa-gamepad fa-3x"></i>
          <?php
          if (!Yii::$app->user->isGuest && $es_Superadmin) {
            echo Html::a('Tipo Usuario', ['tipo-usuario/index'], ['class' => '']);
          }
          ?>
        </div> 
      </div> 

      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
         <i class="fa fa-toggle-on fa-3x"></i>
         <?php
         if (!Yii::$app->user->isGuest && $es_Superadmin) {
          echo Html::a('Est. Producto', ['estado/index'], ['class' => '']);
        }
        ?>
      </div> 
    </div> 

          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
        <i class="fa fa-puzzle-piece fa-3x"></i>
         <?php
         if (!Yii::$app->user->isGuest && $es_Superadmin) {
          echo Html::a('Cargo', ['cargo/index'], ['class' => '']);
        }
        ?>
      </div> 
    </div> 

         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
        <i class="fa fa-folder fa-3x"></i>
         <?php
         if (!Yii::$app->user->isGuest && $es_Superadmin) {
          echo Html::a('Categ. Producto', ['categoria-producto/index'], ['class' => '']);
        }
        ?>
      </div> 
    </div> 

       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
        <i class="fa fa-map-marker fa-3x"></i>
         <?php
         if (!Yii::$app->user->isGuest && $es_Superadmin) {
          echo Html::a('Departamento', ['departamento/index'], ['class' => '']);
        }
        ?>
      </div> 
    </div> 


      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
        <i class="fa fa-map-marker fa-3x"></i>
         <?php
         if (!Yii::$app->user->isGuest && $es_Superadmin) {
          echo Html::a('Municipio', ['municipio/index'], ['class' => '']);
        }
        ?>
      </div> 
    </div> 


      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
         <i class="fa fa-toggle-on fa-3x"></i>
         <?php
         if (!Yii::$app->user->isGuest && $es_Superadmin) {
          echo Html::a('Est. Ventas', ['estado-venta-asistida/index'], ['class' => '']);
        }
        ?>
      </div> 
    </div> 


      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
         <i class="fa fa-ticket fa-3x"></i>
         <?php
         if (!Yii::$app->user->isGuest && $es_Superadmin) {
          echo Html::a('Producto', ['producto/index'], ['class' => '']);
        }
        ?>
      </div> 
    </div> 

    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
         <i class="fa fa-institution fa-3x"></i>
         <?php
         if (!Yii::$app->user->isGuest && $es_Superadmin) {
          echo Html::a('Sede', ['sede/index'], ['class' => '']);
        }
        ?>
      </div> 
    </div> 


    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
         <i class="fa fa-ellipsis-v fa-3x"></i>
         <?php
         if (!Yii::$app->user->isGuest && $es_Superadmin) {
          echo Html::a('Tipo Identificación', ['tipo-identificacion/index'], ['class' => '']);
        }
        ?>
      </div> 
    </div> 

    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
         <i class="fa fa-reorder fa-3x"></i>
         <?php
         if (!Yii::$app->user->isGuest && $es_Superadmin) {
          echo Html::a('Tipo Usuario', ['tipo-usuario/index'], ['class' => '']);
        }
        ?>
      </div> 
    </div> 

    <?php endIf; ?>


    <?php
    if (!Yii::$app->user->isGuest && $es_admin): ?>

      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
          <i class="fa fa-book fa-3x"></i>
          <?php
          if (!Yii::$app->user->isGuest && $es_admin) {
            echo Html::a('Catalogo', ['catalogo/index'], ['class' => '']);
          }
          ?>
        </div> 
      </div> 


      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
          <i class="fa fa-bullhorn fa-3x"></i>
          <?php
          if (!Yii::$app->user->isGuest && $es_admin) {
            echo Html::a('Web', ['web/index'], ['class' => '']);
          }
          ?>
        </div> 
      </div> 

      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
          <i class="fa fa-users fa-3x"></i>
          <?php
          if (!Yii::$app->user->isGuest && $es_admin) {
            echo Html::a('Empleado', ['empleado/index'], ['class' => '']);
          }
          ?>
        </div> 
      </div> 


      <?php endIf ; ?>
      <?php

      if (!Yii::$app->user->isGuest && $es_User): ?>   
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
          <i class="fa fa-male fa-3x"></i>
          <?php
          if (!Yii::$app->user->isGuest && $es_User) {
            echo Html::a('Cliente', ['cliente/index'], ['class' => '']);
          }
          ?>     
        </div> 
      </div> 


      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
          <i class="fa fa-cubes fa-3x"></i>
          <?php
          if (!Yii::$app->user->isGuest && $es_User) {
            echo Html::a('Inventario', ['control-existencia-producto/index'], ['class' => '']);
          }
          ?>             
        </div> 
      </div> 


      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
          <i class="fa fa-shopping-cart fa-3x"></i>
          <?php
          if (!Yii::$app->user->isGuest && $es_User) {
            echo Html::a('Ventas', ['venta-asistida-producto/index'], ['class' => '']);
          }
          ?>    
        </div> 
      </div> 
      <?php endIf ; ?>

  </div> 
  </div>
  </div>

<script type="text/javascript">


/*=============================================================
    Authour URI: www.binarytheme.com
    License: Commons Attribution 3.0

    http://creativecommons.org/licenses/by/3.0/

    100% To use For Personal And Commercial Use.
    IN EXCHANGE JUST GIVE US CREDITS AND TELL YOUR FRIENDS ABOUT US
   
    ========================================================  */


    (function ($) {
      "use strict";
      var mainApp = {

        main_fun: function () {

            /*====================================
              LOAD APPROPRIATE MENU BAR
              ======================================*/
              $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                  $('div.sidebar-collapse').addClass('collapse')
                } else {
                  $('div.sidebar-collapse').removeClass('collapse')
                }
              });



            },

            initialization: function () {
              mainApp.main_fun();

            }

          }
    // Initializing ///

    $(document).ready(function () {
      mainApp.main_fun();
    });

  }(jQuery));


</script>


<style type="text/css">



/*=============================================================
    Authour URI: www.binarycart.com
    License: Commons Attribution 3.0

    http://creativecommons.org/licenses/by/3.0/

    100% To use For Personal And Commercial Use.
    IN EXCHANGE JUST GIVE US CREDITS AND TELL YOUR FRIENDS ABOUT US
   
    ========================================================  */
/*==============================================
    GENERAL  STYLES    
    =============================================*/
    body {
      font-family: 'Open Sans', sans-serif;
      line-height:30px;
    }

    #wrapper {
      width: 100%;
      margin-top:50px;
    }

    #page-wrapper {
      padding: 15px 15px;
      min-height: 600px;
      background:#F3F3F3;

    }
    #page-inner {
      width:100%;
      margin:10px 20px 10px 0px;
      background-color:#fff!important;
      padding:10px;
      min-height:1050px;
    }
    .pad-top {
      padding-top:15px;
    }
    
/*==============================================
    DASHBOARD STYLES    
    =============================================*/
    .div-square {
      padding:5px;
      border:3px double #e1e1e1;
      -webkit-border-radius:8px;
      -moz-border-radius:8px;
      border-radius:8px;
      margin:5px;

    }

    .div-square> a,.div-square> a:hover {
      color:#808080;
      text-decoration:none;
    }
/*==============================================
    MEDIA QUERIES     
    =============================================*/

    @media(min-width:768px) {
     #page-wrapper{
       margin: 0 0 0 260px;
       padding: 15px 30px;
       min-height: 1050px;

     }


     .navbar-side {
      z-index: 1;
      position: absolute;
      width: 260px;

    }

    .row{
      margin-top:40px;
      padding: 0 10px;
    }

    .clickable{
      cursor: pointer;   
    }

    .panel-heading span {
      margin-top: -20px;
      font-size: 15px;
    }

  }

</style>

</div>