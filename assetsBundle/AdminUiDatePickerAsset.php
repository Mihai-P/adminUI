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
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker.min.css'
    ];
    
    public $js = [
        'bootstrap-datepicker-js' => "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.min.js",
        'bootstrap-datepicker-js-lang' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/locales/bootstrap-datepicker.{{lang}}.min.js',
    ];

    public $depends = [
        'tez\theme\assetsBundle\AdminUiAsset',
    ];

    /**
     * Registers this asset bundle with a view.
     * @param View $view the view to be registered with
     * @return static the registered asset bundle instance
     */
    public function init()
    {
        $this->js['bootstrap-datepicker-js-lang'] = str_replace('{{lang}}', \Yii::$app->language, $this->js['bootstrap-datepicker-js-lang']);
        parent::init();
    }
}