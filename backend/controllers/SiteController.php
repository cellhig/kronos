<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use common\models\PermisosHelpers;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
               ],
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                         return PermisosHelpers::requerirMinimoRol('Admin') 
                         && PermisosHelpers::requerirEstado('Activo');
                        }
                    ],
                        [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                         return PermisosHelpers::requerirMinimoRol('User') 
                         && PermisosHelpers::requerirEstado('Activo');
                        }
                    ],

                  [
                    'actions' => ['user/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                 [
                    'actions' => ['perfil/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                  [
                    'actions' => ['rol/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                [
                    'actions' => ['tipo-usuario/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                [
                    'actions' => ['estado/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                [
                    'actions' => ['catalogo/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('Admin') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                [
                    'actions' => ['web/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('Admin') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                   [
                    'actions' => ['empleado/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('Admin') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                     [
                    'actions' => ['cliente/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('User') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],
                    [
                    'actions' => ['control-existencia-producto/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('User') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],
                     [
                    'actions' => ['venta-asistida-producto/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('User') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                    [
                    'actions' => ['Cargo/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],


                    [
                    'actions' => ['categoria-producto/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],


                    [
                    'actions' => ['departamento/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                   [
                    'actions' => ['municipio/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                      [
                    'actions' => ['estado-venta-asistida/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],


                      [
                    'actions' => ['sede/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],


                      [
                    'actions' => ['tipo-identificacion/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                         [
                    'actions' => ['tipo-usuario/index'],
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) {
                     return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                     && PermisosHelpers::requerirEstado('Activo');
                    }
                ],

                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                       
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
