<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\adminUi\assetsBundle;

use yii\web\AssetBundle;

/**
 * Asset bundle for the the custom design created for the AdminLTE theme
 *
 * @author Mihai Petrescu <mihai.petrescu@gmail.com>
 */
class AdminUiExtraAsset extends AssetBundle
{
    public $sourcePath = '@vendor/adminUi/assets/';
    public $css = [                
        'css/extra.css',
    ];
    public $js  = [
        'js/extra.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];         
}