<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend/assets';
    public $css = [
        
        'css/bootstrap.min.css',
        'css/waves.min.css',
        
        'css/style.css',
        'font-awesome/css/font-awesome.min.css',
        'back.css',
        
        
    ];
    public $js = [
	    'js/jquery.min.js',
	    'js/bootstrap.min.js',
	    'js/pace.min.js',
	
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
