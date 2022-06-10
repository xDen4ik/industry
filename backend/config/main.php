<?php
$params = array_merge(
	require __DIR__ . '/../../common/config/params.php',
	require __DIR__ . '/../../common/config/params-local.php',
	require __DIR__ . '/params.php',
	require __DIR__ . '/params-local.php'
);

return [
	'id' => 'app-backend',
	'language' => 'ru-RU',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'backend\controllers',
	'bootstrap' => ['log'],
	'modules' => [
		'imagemanager' => [
			'class' => 'noam148\imagemanager\Module',
			//set accces rules ()
			'canUploadImage' => true,
			'canRemoveImage' => function () {
				return true;
			},
			'deleteOriginalAfterEdit' => false, // false: keep original image after edit. true: delete original image after edit
			// Set if blameable behavior is used, if it is, callable function can also be used
			'setBlameableBehavior' => false,
			//add css files (to use in media manage selector iframe)
			'cssFiles' => [
				'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css',
			],
		],
	],
	'components' => [
		'request' => [
			'baseUrl' => '/admin',
			'csrfParam' => '_csrf-backend',
		],
		'user' => [
			'identityClass' => 'common\models\User',
			'identityCookie' => ['name' => '_identity-usefulengene', 'httpOnly' => true],
			'enableAutoLogin' => true,
		],
		'session' => [
			// this is the name of the session cookie used for login on the backend
			'name' => 'info-site',
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],

		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				'' => 'site/index',
				'login' => 'site/login',
			],
		],
		'urlManagerFrontend' => [
			'class' => 'yii\web\urlManager',
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'baseUrl' => '/',
		],
		'imagemanager' => [
			'class' => 'noam148\imagemanager\components\ImageManagerGetPath',
			//set media path (outside the web folder is possible)
			'mediaPath' => '/frontend/web/img/categories',
			//path relative web folder. In case of multiple environments (frontend, backend) add more paths 
			'cachePath' =>  ['assets/images', '../../frontend/web/img/images'],
			//use filename (seo friendly) for resized images else use a hash
			'useFilename' => true,
			//show full url (for example in case of a API)
			'absoluteUrl' => true,
			'databaseComponent' => 'db' // The used database component by the image manager, this defaults to the Yii::$app->db component
		],
	],
	'homeUrl' => '/admin',
	'name' => 'Useful Engene',
	'params' => $params,
];
