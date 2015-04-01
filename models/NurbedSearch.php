<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nurbed;

/**
 * NurbedSearch represents the model behind the search form about `app\models\Nurbed`.
 */
class NurbedSearch extends Nurbed
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bedno', 'ward'], 'safe'],
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
        $query = Nurbed::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'bedno', $this->bedno])
            ->andFilterWhere(['like', 'ward', $this->ward]);

        return $dataProvider;
    }
}
