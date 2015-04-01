<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NurWard;

/**
 * NurwardtSearch represents the model behind the search form about `app\models\NurWard`.
 */
class NurwardtSearch extends NurWard
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ward', 'name'], 'safe'],
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
        $query = NurWard::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'ward', $this->ward])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
