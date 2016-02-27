<?php

use yii\helpers\Html;
use common\models\PermisosHelpers;

/**
 * @var yii\web\View $this
 */

$this->title = 'Distrinet';

$es_admin = PermisosHelpers::requerirMinimoRol('Admin');
$es_User = PermisosHelpers::requerirMinimoRol('User');

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="site-index">
    <div class="jumbotron">



    <?php
     if (!Yii::$app->user->isGuest && $es_admin): ?>
            
                <div class="row" >
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="http://localhost/kronos/backend/web/index.php?r=user%2Findex" >
                            <i class="fa fa-user fa-3x"></i>
                        <h4>Usuarios</h4>
                        </a>
                        </div> 
                  </div> 


                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="http://localhost/kronos/backend/web/index.php?r=user%2Findex" >
                            <i class="fa fa-tags fa-3x"></i>
                        <h4>Perfiles</h4>
                        </a>
                        </div> 
                  </div> 


                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="http://localhost/kronos/backend/web/index.php?r=user%2Findex" >
                            <i class="fa fa-paper-plane fa-3x"></i>
                        <h4>Roles</h4>
                        </a>
                        </div> 
                  </div> 

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="http://localhost/kronos/backend/web/index.php?r=user%2Findex" >
                            <i class="fa fa-gamepad fa-3x"></i>
                        <h4>Tipos Usuarios</h4>
                        </a>
                        </div> 
                  </div> 

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="http://localhost/kronos/backend/web/index.php?r=user%2Findex" >
                            <i class="fa fa-toggle-on fa-3x"></i>
                        <h4>Estados</h4>
                        </a>
                        </div> 
                  </div> 

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="http://localhost/kronos/backend/web/index.php?r=user%2Findex" >
                            <i class="fa fa-book fa-3x"></i>
                        <h4>Catalogo</h4>
                        </a>
                        </div> 
                  </div> 


                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="http://localhost/kronos/backend/web/index.php?r=user%2Findex" >
                            <i class="fa fa-bullhorn fa-3x"></i>
                        <h4>Web</h4>
                        </a>
                        </div> 
                  </div> 

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="http://localhost/kronos/backend/web/index.php?r=user%2Findex" >
                            <i class="fa fa-users fa-3x"></i>
                        <h4>Empleados</h4>
                        </a>
                        </div> 
                  </div> 

             

        <?php endIf ; ?>

     <?php
     if (!Yii::$app->user->isGuest && $es_User): ?>
            
                
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="http://localhost/kronos/backend/web/index.php?r=user%2Findex" >
                            <i class="fa fa-male fa-3x"></i>
                        <h4>Clientes</h4>
                        </a>
                        </div> 
                  </div> 


                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="http://localhost/kronos/backend/web/index.php?r=user%2Findex" >
                            <i class="fa fa-cubes fa-3x"></i>
                        <h4>Existencias</h4>
                        </a>
                        </div> 
                  </div> 


                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="http://localhost/kronos/backend/web/index.php?r=user%2Findex" >
                            <i class="fa fa-shopping-cart fa-3x"></i>
                        <h4>Ventas</h4>
                        </a>
                        </div> 
                  </div> 
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


}

</style>

</div>