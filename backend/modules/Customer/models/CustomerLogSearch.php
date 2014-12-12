<?php

namespace app\modules\Customer\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Customer\models\CustomerLog;

/**
 * CustomerSearch represents the model behind the search form about `app\modules\Customer\models\Customer`.
 */
class CustomerLogSearch extends CustomerLog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id'], 'required'],
            [['customer_id', 'admin_id', 'type'], 'integer'],
            [['create_time'], 'safe'],
            [['content'], 'string', 'max' => 512]
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

   
    /**
     * write customer log message 
     *
     * @param  INT     customer_id
     * @param  INT     type
     * @param  Stirng  content
     *
     * @return blloean
    */
    public function add($customer_id,$content,$type){
	$model = new CustomerLog();
	
	$model->create_time = date('Y-m-d H:i:s');
//	$model->admin_id = $admin;
	
	$model->customer_id = $customer_id;
	$model->content = $content;
	$model->type = $type;

	return $model->save();
    }

}
