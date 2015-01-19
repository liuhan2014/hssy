<?php

namespace app\modules\Admin\controllers;

use Yii;
use common\models\Assignment;
use common\models\ItemChild;
use common\models\Item;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
	$rbac = Yii::$app->authManager;
 	$role = "customer";	
	/*/ 为角色分配权限
	$item = new Item();
	$item2 = new Item();
	$item->name = "customer";
	$item2->name = "source_index";
		
	$citem = $rbac->addChild($item, $item2);
	var_dump($citem);
	*/
	// 查看用户是否有指定权限
	$access = $rbac->checkAccess(Yii::$app->user->getId(), 'source_add');

	// 为用户分配一个角色
//	$assign = $rbac->itemTable;
	//$assign = $rbac->assign($role,2);
	//var_dump($access);

	/**
	$item = new Item();
	$item->name = 'customer_add';
	$item->type = 1;
	$item->description = 'customer add';

	$it = $rbac->addItem($item);
	var_dump($it);
	*/
	$this->layout = false;
        return $this->render('index');
    }
    

}
