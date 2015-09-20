<?php

namespace tez\theme\assetsBundle;

use yii\web\AssetBundle;


class AdminUIMultiselect extends AssetBundle
{
    public $sourcePath = '@theme/assets/';
    public $css = [                
        'css/multiselect/jquery.asmselect.css',
    ];
    public $js  = [        
        'js/plugins/multiselect/jquery.asmselect.js',
    ];  
    public $depends = [
        'tez\theme\assetsBundle\AdminUiAsset',
        'tez\theme\assetsBundle\JqueryUI',
    ];
}
?>
