<?php

namespace app\modules\Source\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Source\models\Source;
use yii\data\Pagination;

/**
 * SourceSearch represents the model behind the search form about `app\modules\Source\models\Source`.
 */
class SourceSearch extends Source
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'desc', 'person', 'phone', 'create_time'], 'safe'],
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
        $query = Source::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'create_time' => $this->create_time,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'person', $this->person])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }

    /*
     * get list 
     */
    public function lists($params)
    {
        $query = Source::find()->orderBy('id DESC');

        $countQuery = clone $query;
        $count = $countQuery->count();

        $pages = new Pagination(['totalCount' => $count,'pageSize'=>15]);

        $models = $query->offset($pages->offset)
          ->limit($pages->limit)
          ->all();

        return ['lists'=>$models,'pages'=>$pages,'count'=>$count];
    }

    /*
     * get source [id,name]
     * 
     * @param  INT   status 
     * 
     * @return array[id=>name]
     */ 
    public function getAll($status = null){
        $query = Source::find()->orderBy('id DESC');
	
	if($status){
        	$query->andFilterWhere([
        	    'status' => $status,
        	]);
	}
	
	$model = $query->select('id,name')->all();	
	
	$arr = [];
		
	foreach($model as $key=>$item){
	    $arr[$item->id] = $item->name;
	}
	
	return $arr;
    }



}
