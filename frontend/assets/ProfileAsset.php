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
class ProfileAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend/assets';
    public $css = [
        
       'css/bootstrap.min.css',
       'css/waves.min.css',
       'css/menu-light.css',
       'css/style.css',
       'font-awesome/css/font-awesome.min.css',
        
        
    ];
    public $js = [
	    'js/jquery.min.js',
	    'js/bootstrap.min.js',
	    'js/metisMenu.min.js',
	    'js/jquery-jvectormap-1.2.2.min.js',
	    'js/pace.min.js',
	    'js/waves.min.js',
	    'js/jquery-jvectormap-world-mill-en.js',
	    'js/custom.js',
	
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
