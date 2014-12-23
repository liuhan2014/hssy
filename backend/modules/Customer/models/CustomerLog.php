<?php

namespace app\modules\Customer\models;

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
            'customer_id' => '用户ID',
            'create_time' => '添加时间',
            'admin_id' => '添加人ID',
            'content' => '内容',
            'type' => '操作类别',
        ];
    }
   

}
