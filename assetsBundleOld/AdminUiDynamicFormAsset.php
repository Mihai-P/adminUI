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
class AdminUiDynamicFormAsset extends AssetBundle
{
    public $sourcePath = '@theme/assets/';    
    
    public $js  = [
            'js/plugins/dynamicform/jquery-dynamic-form_latest.js',
    ];
    
    public $depends = [
            'tez\theme\assetsBundle\AdminUiAsset',
    ];
}