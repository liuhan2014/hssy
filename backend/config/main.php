<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'name' => '测试后台',
    'basePath' => dirname(__DIR__),
    'language' => 'zh-CN',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['gii'],
    'modules' => [
	'gii' => 'yii\gii\Module',
//	'yii2-user' => 'communityii\user\Module',
	 'source' => [
            'class' => 'app\modules\Source\Source',
        	],
	],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '0r8XJKUtSIkiOCGW1V4CJLJ9Oa3KjFND',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ], 

	'authManager' => [
	    'class' => 'yii\rbac\DbManager',
	    'defaultRoles' => ['guest'],	// 默认权限 无需验证的权限 
	    //'superAdmin' => 'admin',	// 默认超级管理员 无需验证角色
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
    ],
    'params' => $params,
];
