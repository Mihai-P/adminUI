<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tez\theme;

use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\web\Controller;
use yii\base\Event;

class AdminLTEBootstrap implements BootstrapInterface
{

    public function bootstrap($app)
    {
        \Yii::$classMap = array_merge(\Yii::$classMap, [
            'yii\grid\ActionColumn' => '@theme/widgets/ActionColumn.php',
            'theme\widgets\Pjax' => '@vendor/yiisoft/yii2/widgets/Pjax.php',
        ]);
        \Yii::setAlias('theme', __DIR__);
        $app->set('view', [
            'class' => 'yii\web\View',
            'theme' => [
                'pathMap' => [
                    '@app/views/layouts' => ['@app/views/layouts', '@theme/views/layouts'],
                    '@cms/views/layouts' => ['@app/views/layouts', '@cms/views/layouts', '@theme/views/layouts'],
                    '@app/views' => ['@app/views', '@theme/views'],
//                    '@backend/views' => ['@backend/views', '@theme/views'],
                    '@dektrium/user/views' => ['@theme/views', '@dektrium/user/views'],
                    /*'@dektrium/user/views/settings' => ['@cms/views/settings', '@dektrium/user/views/settings'],
                    '@dektrium/user/views/admin' => ['@cms/views/admin', '@dektrium/user/views/admin'],
                    '@dektrium/user/views/security' => ['@cms/views/security', '@theme/views/security', '@dektrium/user/views/security'],

                    '@dektrium/user/views/recovery' => ['@cms/views/recovery', '@dektrium/user/views/recovery'],*/
                ],
            //'baseUrl' => '@web/themes/adminui',
            ],
            'renderers' => [
                'tpl' => [
                    'class' => 'yii\smarty\ViewRenderer',
                    'cachePath' => '@runtime/Smarty/cache',
                    'widgets' => [
                        'functions' => [
                            'GridView' => 'yii\grid\GridView',
                        //'Nav' => 'yii\bootstrap\Nav',
                        //'Alert' => 'yii\bootstrap\Alert',
                        ],
                        'blocks' => [
                            //'NavBar' => 'yii\bootstrap\NavBar',
                            'ActiveForm' => 'yii\widgets\ActiveForm',
                        ]
                    ]
                ],
            ],
        ]);
        $app->set('urlManager', [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ]);
        $app->set('assetManager', [
            'class' => 'yii\web\AssetManager',
            'bundles' => [
                'yii\widgets\ActiveFormAsset' => [
                    'js' => [],
                    'depends' => [
                        'tez\theme\assetsBundle\AdminUiActiveForm',
                    ],
                ],
                'yii\grid\GridViewAsset' => [
                    'depends' => [
                        'backend\assets\AppAsset'
                    ],
                ],
            ],
            'linkAssets' => true,
        ]);
        if (Yii::$app->id == "app-backend") {
            Yii::$container->set('yii\grid\GridView', [
                'filterPosition' => '',
                'layout' => "\n{items}\n
                        <div class=\"table-footer clearfix\">\n
                            {actions}\n
                            <div class=\"pagination-holder\">\n
                                {pager}\n
                            </div>\n
                            {summary}\n
                        </div>",
                'tableOptions' => [
                    'class' => 'table table-hover table-striped'
                ]
                    ]
            );
            Yii::$container->set('yii\grid\ActionColumn', [
                'options' => ['style' => 'width: 140px;'], 'contentOptions' => ['class' => 'action-column'], 'headerOptions' => ['class' => 'action-column']
                    ]
            );
            Yii::$container->set('yii\grid\CheckboxColumn', [
                'options' => ['style' => 'width: 40px;']
                    ]
            );
            Yii::$container->set('yii\bootstrap\ActiveForm', [
                'layout' => 'horizontal',
                    'fieldConfig' => [
                        'horizontalCssClasses' => [
                            'wrapper' => 'col-sm-9',
                        ],
                    ],
                ]
            );
        }
        /*
          Event::on(Controller::className(), Controller::EVENT_BEFORE_ACTION, function ($event) {
          if(!Yii::$app->params['useSmarty'] && in_array($event->action->id,['login','forgot','reset-password']) && in_array('backend',  explode("\\", $event->sender->className()))){
          $event->sender->layout = '//blank';
          }
          });
          Event::on(Controller::className(), Controller::EVENT_BEFORE_ACTION, function ($event) {
          if(!Yii::$app->params['useSmarty'] && in_array($event->action->id, ['index']) && in_array(['backend', 'cms'],  explode("\\", $event->sender->className()))){
          $event->sender->layout = '//index';
          }
          });
          Event::on(Controller::className(), Controller::EVENT_BEFORE_ACTION, function ($event) {
          if(!Yii::$app->params['useSmarty'] && in_array($event->action->id, ['create', 'update']) && in_array('backend',  explode("\\", $event->sender->className()))){
          $event->sender->layout = '//form';
          }
          });
         */
    }

}