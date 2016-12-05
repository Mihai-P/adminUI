<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace tez\theme\assetsBundle;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminUiTimePickerAsset extends AssetBundle
{
    public $sourcePath = '@theme/assets/';
    public $css = [                
        'css/timepicker/bootstrap-timepicker.min.css',
    ];
    
    public $js  = [
            'js/plugins/timepicker/bootstrap-timepicker.js',
    ];    
     public $depends = [
            'yii\web\JqueryAsset',
            'tez\theme\assetsBundle\AdminUiAsset',
    ];
}