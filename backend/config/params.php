<?php
return [
    'adminEmail' => 'admin@example.com',

    /** 
     * 此配置文件用于配置 类型 状态信息
     * 
     * @date  2014-12-11
     * 
     * @author liuh
     */
    

    //  customer config
    'customer_status' =>[
		1 => '新纪录',
		2 => '跟进中',
		3 => '提交门市',
		4 => '失败',
		5 => '生成订单',
		6 => '退单'
	], 
	
    
    'customer_type' => [
		1 => '婚纱照',
		2 => '艺术写真',
		3 => '孕妇照',
		4 => '儿童照',
		100  => '其它',
	],


	
    // visit config
    'visit_result' => [
		1 => '无法接通',
		2 => '无意向',
		3 => '待追踪',
		4 => '确定进店',
		5 => '失败',
	],


    // failure config
    'failure_type' => [
		1 => '价格偏高',
		2 => '套系内容',
		3 => '路程太远',
		4 => '服装不满意',
		5 => '化妆不满意',
		6 => '风格不满意',
		100  => '其它',
	],

    // order config
    'order_status' => [
		1 => '预约',
		2 => '全款',
		3 => '拍摄完成',
		4 => '取件完成',
	],



];
