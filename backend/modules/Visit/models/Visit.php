<?php

namespace app\modules\Visit\models;

use Yii;

/**
 * This is the model class for table "tbl_visit".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property integer $result
 * @property string $content
 * @property string $next_time
 * @property string $create_time
 */
class Visit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_visit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'result'], 'required'],
            [['customer_id', 'result'], 'integer'],
            [['content'], 'string'],
            [['next_time', 'create_time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => '用户编号',
            'result' => '回访结果',
            'content' => '回访内容',
            'next_time' => '下次回访时间',
            'create_time' => '创建时间',
        ];
    }
}
