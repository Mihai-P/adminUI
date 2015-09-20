<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace tez\theme\assetsBundle;

use yii\web\AssetBundle;

/**
 * Bootstrap 2 theme for Bootstrap 3.
 *
 * @author Alexander Makarov <sam@rmcreative.ru>
 * @since 2.0
 */
class AdminUiThemeAsset extends AssetBundle
{
    public $sourcePath = '@theme/assets/';
    public $css = [
        'css/bootstrap-theme.css',
    ];
    public $depends = [
        'tez\theme\assetsBundle\AdminUiAsset',
    ];
}
