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
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend/assets';
    public $css = [
        'css/site.css',
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
		'js/flot/jquery.flot.js',
		'js/flot/jquery.flot.tooltip.min.js',
		'js/flot/jquery.flot.resize.js',
		'js/flot/jquery.flot.pie.js',
		'js/chartjs/Chart.min.js',
		'js/pace.min.js',
		'js/waves.min.js',
		'js/morris_chart/raphael-2.1.0.min.js',
		'js/morris_chart/morris.js',
		'js/jquery-jvectormap-world-mill-en.js',
		'js/chartjs/Chart.min.js',
		'js/custom.js',
	
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
