<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nurhead;

/**
 * NurheadSearch represents the model behind the search form about `app\models\Nurhead`.
 */
class NurheadSearch extends Nurhead
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['vstdate', 'dept', 'nur1', 'nur2', 'nur3', 'nur4', 'doctor', 'aides', 'worker', 'duty', 'staff'], 'safe'],
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
        $query = Nurhead::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'vstdate' => $this->vstdate,
        ]);

        $query->andFilterWhere(['like', 'dept', $this->dept])
            ->andFilterWhere(['like', 'nur1', $this->nur1])
            ->andFilterWhere(['like', 'nur2', $this->nur2])
            ->andFilterWhere(['like', 'nur3', $this->nur3])
            ->andFilterWhere(['like', 'nur4', $this->nur4])
            ->andFilterWhere(['like', 'doctor', $this->doctor])
            ->andFilterWhere(['like', 'aides', $this->aides])
            ->andFilterWhere(['like', 'worker', $this->worker])
            ->andFilterWhere(['like', 'duty', $this->duty])
            ->andFilterWhere(['like', 'staff', $this->staff]);

        return $dataProvider;
    }
}
