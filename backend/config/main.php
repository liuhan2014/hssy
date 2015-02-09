<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'name' => '商家管理后台',
    'basePath' => dirname(__DIR__),
    'language' => 'zh-CN',
    'timezone' => 'Asia/Shanghai',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['gii'],
    'modules' => [
	'gii' => 'yii\gii\Module',
	'user' => [			// 管理员管理
           'class' => 'dektrium\user\Module',
           'enableUnconfirmedLogin' => true,
           'confirmWithin' => 21600,
           'cost' => 12,
           'admins' => ['admin','liuh']
        ],
	'source' => ['class' => 'app\modules\Source\Source',],	// 渠道管理
	'visit' => ['class' => 'app\modules\Visit\Visit',],	// 回访管理
	'customer' => ['class' => 'app\modules\Customer\Customer',], // 客户管理
	'admin' => ['class' => 'app\modules\Admin\Admin',],	// 管理员其它操作  例 分组 rbac
	'statis' => ['class' => 'app\modules\Statis\Module',], // 统计分析 
	],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '0r8XJKUtSIkiOCGW1V4CJLJ9Oa3KjFND',
        ],
/*        'user' => [
            'identityClass' => 'common\models\User',
            //'identityClass' => 'yii\web\User',
            'enableAutoLogin' => true,
        ], 
*/
    'customerLog' =>['class' => 'common\models\CustomerLog'],
	'authManager' => [
	    'class' => 'yii\rbac\DbManager',
	    //'class' => 'yii\rbac\PhpManager',
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
