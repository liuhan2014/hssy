<?php

namespace app\modules\Visit\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Visit\models\Visit;

/**
 * VisitSearch represents the model behind the search form about `app\modules\Visit\models\Visit`.
 */
class VisitSearch extends Visit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'customer_id', 'result'], 'integer'],
            [['content', 'next_time', 'create_time'], 'safe'],
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
        $query = Visit::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'customer_id' => $this->customer_id,
            'result' => $this->result,
            'next_time' => $this->next_time,
            'create_time' => $this->create_time,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
