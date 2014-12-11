<?php

namespace app\modules\Source\models;

use Yii;

/**
 * This is the model class for table "tbl_source".
 *
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property string $person
 * @property string $phone
 * @property string $create_time
 */
class Source extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_source';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['create_time'], 'safe'],
            [['name'], 'string', 'max' => 128],
            [['desc'], 'string', 'max' => 512],
            [['person'], 'string', 'max' => 16],
            [['phone'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '渠道名称',
            'desc' => '渠道描述',
            'person' => '联系人',
            'phone' => '联系方式',
            'create_time' => '创建时间',
        ];
    }
}
