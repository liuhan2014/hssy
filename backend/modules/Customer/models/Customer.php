<?php

namespace app\modules\Customer\models;

use Yii;

/**
 * This is the model class for table "tbl_customer".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $weixin
 * @property string $qq
 * @property string $concat
 * @property integer $sex
 * @property string $price
 * @property string $marry_date
 * @property string $address
 * @property integer $source
 * @property integer $type
 * @property string $remark
 * @property integer $status
 * @property string $create_time
 * @property string $last_modify
 * @property integer $entry_admin
 * @property integer $track_amdin
 * @property integer $reception_admin
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sex', 'source', 'type', 'status', 'entry_admin', 'track_amdin', 'reception_admin'], 'integer'],
            [['remark'], 'string'],
            [['create_time', 'last_modify'], 'safe'],
            [['name', 'phone', 'concat'], 'string', 'max' => 32],
            [['weixin', 'price', 'marry_date'], 'string', 'max' => 64],
            [['qq'], 'string', 'max' => 16],
            [['address'], 'string', 'max' => 512]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '客户姓名',
            'phone' => '手机',
            'weixin' => '微信',
            'qq' => 'QQ',
            'concat' => '其它联系方式',
            'sex' => '性别',
            'price' => '预算',
            'marry_date' => '婚期',
            'address' => '住址',
            'source' => '来源渠道',
            'type' => '拍摄类型',
            'remark' => '备注信息',
            'status' => '状态',
            'create_time' => '创建时间',
            'last_modify' => '最后修改时间',
            'entry_admin' => '录入人',
            'track_amdin' => '追踪人',
            'reception_admin' => '接待人',
        ];
    }
}
