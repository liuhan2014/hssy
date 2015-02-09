<?php

namespace app\modules\Customer\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Customer\models\Customer;
use yii\db\Query;

/**
 * CustomerSearch represents the model behind the search form about `app\modules\Customer\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sex', 'source', 'type', 'status', 'entry_admin', 'track_amdin', 'reception_admin'], 'integer'],
            [['name', 'phone', 'weixin', 'qq', 'concat', 'price', 'marry_date', 'address', 'remark', 'create_time', 'last_modify'], 'safe'],
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
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Customer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'sex' => $this->sex,
            'source' => $this->source,
            'type' => $this->type,
            'status' => $this->status,
            'create_time' => $this->create_time,
            'last_modify' => $this->last_modify,
            'entry_admin' => $this->entry_admin,
            'track_amdin' => $this->track_amdin,
            'reception_admin' => $this->reception_admin,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'weixin', $this->weixin])
            ->andFilterWhere(['like', 'qq', $this->qq])
            ->andFilterWhere(['like', 'concat', $this->concat])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'marry_date', $this->marry_date])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
    
    // 获取用户列表
    public function getList($params)
    {
	    $query = new Query;
	    // compose the query
	    $data = $query->select('*')
	            ->from('tbl_customer')
	            ->limit(10)->all();
	    
	    return $data;
    }
}
