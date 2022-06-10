<?php
$params = array_merge(
	require __DIR__ . '/../../common/config/params.php',
	require __DIR__ . '/../../common/config/params-local.php',
	require __DIR__ . '/params.php',
	require __DIR__ . '/params-local.php'
);

return [
	'id' => 'app-frontend',
	'name' => 'I-REMONT',
	'basePath' => dirname(__DIR__),
	'bootstrap' => [
		'log',
		/* 'debug', */
	],
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
				'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css',
			],
		],
		'debug' => [
			'class' => 'yii\debug\Module',
		],
		'notifications' => [
			'class' => 'webzop\notifications\Module',
			'app\components\DynaUrl',
			'channels' => [
				'screen' => [
					'class' => 'webzop\notifications\channels\ScreenChannel',
				],
			],
		],
	],
	'controllerNamespace' => 'frontend\controllers',
	'components' => [
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
		'request' => [
			'baseUrl' => '',
			'csrfParam' => '_csrf-frontend',
		],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
		],
		'session' => [
			// this is the name of the session cookie used for login on the frontend
			'name' => 'advanced-frontend',
		],
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'useFileTransport' => false,
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'smtp.yandex.com',
				'username' => 'alica.freimut@yandex.ru',
				'password' => '3z4Jrzj9s',
				'port' => '465',
				'encryption' => 'ssl',
			],
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
		'assetManager' => [
			'appendTimestamp' => true,
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'enableStrictParsing' => false,
			'rules' => [
				'' => 'site/index',
				'error' => 'site/error',
				'<action:(contact|about)>' => 'site/<action>',
				/* 'categories/<page:\w+>' => 'categories/category', //пагинация для статей
				'categories' => 'categories/index', */

				/* 'categories' => 'categories/index', //статьи */
				/* 'categories/<category:[\w\-]*>' => 'categories/category', */
				'categories/<action:\d+>' => 'categories/category',
				'categories/<action:[a-z-]+>' => 'categories/<action>',
				'categories/<action:[a-z-]+>' => 'categories/category',
			],
		],
	],
	'params' => $params,
];
