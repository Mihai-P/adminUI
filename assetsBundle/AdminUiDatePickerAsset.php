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
class AdminUiDatePickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-daterangepicker';
    public $css = [                
        'daterangepicker-bs3.css',
    ];
    
    public $js  = [
        'daterangepicker.js',
    ];  
    public $depends = [
        'yii\web\JqueryAsset',
        'tez\theme\assetsBundle\AdminUiAsset',
        'tez\theme\assetsBundle\AdminUiMomentAsset',
    ];
}