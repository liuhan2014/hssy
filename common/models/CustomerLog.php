<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_customer_log".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property string $create_time
 * @property integer $admin_id
 * @property string $content
 * @property integer $type
 */
class CustomerLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customer_log';
    }

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
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'create_time' => 'Create Time',
            'admin_id' => 'Admin ID',
            'content' => 'Content',
            'type' => 'Type',
        ];
    }

    public function write($data){
        $model = new CustomerLog();

        $model->create_time = date("Y-m-d H:i:s");
        $model->customer_id = $data['customer_id'];
        $model->admin_id = $data['admin_id'];
        $model->content = $data['content'];
        $model->type = $data['type'];

        return $model->save();
    }


}
