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
	];
	public $depends = [
		//'yii\web\YiiAsset',
		//'yii\bootstrap\BootstrapAsset',
	];
}
