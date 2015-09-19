<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\adminUi\assetsBundle;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminUiAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/';
    public $baseUrl = '@web';
    public $css = [
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
    ];

    public $js  = [
            //'js/jquery-ui-1.10.3.min.js',
            'dist/js/app.js',
            'plugins/iCheck/icheck.min.js'
    ];

    public $depends = [
            'yii\web\JqueryAsset',
            'yii\bootstrap\BootstrapAsset',
            'yii\bootstrap\BootstrapPluginAsset',
            'yii\adminUi\assetsBundle\AdminUiHeadAsset',
            'yii\adminUi\assetsBundle\FontAwesomeAsset',
            'yii\adminUi\assetsBundle\FontIoniconsAsset',
    ];
}
