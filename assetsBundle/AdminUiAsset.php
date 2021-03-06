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
class AdminUiAsset extends AssetBundle
{
    public $sourcePath = '@theme/assets/';
    public $baseUrl = '@web';
    public $css = [
        'css/theme.css',
    ];

    public $js  = [
        'js/theme.js',
    ];

    public $depends = [
        'tez\theme\assetsBundle\AdminUiDistAsset',
        'tez\theme\assetsBundle\AdminUiPluginAsset',
    ];
}
