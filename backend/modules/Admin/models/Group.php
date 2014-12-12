<?php

namespace app\modules\Admin\models;

use Yii;

/**
 * This is the model class for table "tbl_group".
 *
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property string $create_time
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['create_time'], 'safe'],
            [['name'], 'string', 'max' => 64],
            [['desc'], 'string', 'max' => 512]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '组名',
            'desc' => '组描述',
            'create_time' => '创建时间',
        ];
    }
}
