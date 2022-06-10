<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		/* 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700', */
		'css/animate.css',
		'css/owl.carousel.css',
		'css/jquery.fancybox.min.css',
		'css/ionicons.min.css',
		'css/font-awesome.min.css',
		'css/style.css',
	];
	public $js = [
		'js/jquery-3.2.1.min.js',
		'js/popper.min.js',
		'js/bootstrap.min.js',
		'js/owl.carousel.min.js',
		'js/jquery.waypoints.min.js',
		'js/jquery.fancybox.min.js',
		'js/main.js',
	];
	public $depends = [
		//'yii\web\YiiAsset',
		//'yii\bootstrap\BootstrapAsset',
	];
}
