<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Brand;

/**
 * BrandSearch represents the model behind the search form about `backend\models\Brand`.
 */
class BrandSearch extends Brand
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sort', 'is_show'], 'integer'],
            [['b_name', 'b_logo', 'b_desc', 'site_url'], 'safe'],
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
        $query = Brand::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'sort' => $this->sort,
            'is_show' => $this->is_show,
        ]);

        $query->andFilterWhere(['like', 'b_name', $this->b_name])
            ->andFilterWhere(['like', 'b_logo', $this->b_logo])
            ->andFilterWhere(['like', 'b_desc', $this->b_desc])
            ->andFilterWhere(['like', 'site_url', $this->site_url]);

        return $dataProvider;
    }
}
