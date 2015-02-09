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

    /*
     * 为用户分配权限列表
     * 
     * @param  INTEGER  id 
     * 
    */
    public function actionAllown($id=null)
    {
        //echo 'allown'; 
        if(empty($id)){
            return ;
        }
        //  获取指定用户权限信息
        $relative = Assignment::findAll(['user_id'=>$id]);
        // 获取所有权限
	    $data = Item::findAll(['type'=>1]);
        
        //$query->joinWith('visit');
        //print_r($data);
        //print_r($relative);
        return $this->render('allown',['data'=>$data ,'relative'=>$relative,'user_id'=>$id ]);
    }


    /*
     * add user item
    */
    public function actionAdditem()
    {
        $param = Yii::$app->request->post();

        $user_id = $param['user_id'];
        $items = $param['item_name'];
        if(empty($user_id) || empty($items)){
           return;
        }

	    $rbac = Yii::$app->authManager;

	    $item = new Item();
        foreach($items as $key=>$value){
            $item->name = $value;            
	        $rbac->assign($item,$user_id);
        }
        
    }



}
