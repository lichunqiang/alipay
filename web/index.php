<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('app', dirname(__DIR__));
$config = [
	'id' => 'alipay-demo',
	'name' => 'alipay',
	'vendorPath' => dirname(__DIR__) . '/vendor',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'app\controllers',
	'components' => [
		'request' => [
			'cookieValidationKey' => 'test'
		]
	],
	'modules' => [
        'alipay' => 'light\alipay\Module'
    ]
];
$application = new yii\web\Application($config);
$application->run();
