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
            [['vstdate', 'opdnur1', 'opdnur2', 'opdnur3', 'opdnur4', 'opddoctor', 'opdaides', 'opdworker', 'ernur1', 'ernur2', 'ernur3', 'ernur4', 'erdoctor', 'eraides', 'erworker', 'lrnur1', 'lrnur2', 'lrnur3', 'lrnur4', 'lrdoctor', 'lraides', 'lrworker', 'wardnur1', 'wardnur2', 'wardnur3', 'wardnur4', 'warddoctor', 'wardaides', 'wardworker', 'cardroom', 'launder', 'centersupport', 'kitchen', 'xrayroom', 'carman', 'duty', 'staff'], 'safe'],
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

        $query->andFilterWhere(['like', 'opdnur1', $this->opdnur1])
            ->andFilterWhere(['like', 'opdnur2', $this->opdnur2])
            ->andFilterWhere(['like', 'opdnur3', $this->opdnur3])
            ->andFilterWhere(['like', 'opdnur4', $this->opdnur4])
            ->andFilterWhere(['like', 'opddoctor', $this->opddoctor])
            ->andFilterWhere(['like', 'opdaides', $this->opdaides])
            ->andFilterWhere(['like', 'opdworker', $this->opdworker])
            ->andFilterWhere(['like', 'ernur1', $this->ernur1])
            ->andFilterWhere(['like', 'ernur2', $this->ernur2])
            ->andFilterWhere(['like', 'ernur3', $this->ernur3])
            ->andFilterWhere(['like', 'ernur4', $this->ernur4])
            ->andFilterWhere(['like', 'erdoctor', $this->erdoctor])
            ->andFilterWhere(['like', 'eraides', $this->eraides])
            ->andFilterWhere(['like', 'erworker', $this->erworker])
            ->andFilterWhere(['like', 'lrnur1', $this->lrnur1])
            ->andFilterWhere(['like', 'lrnur2', $this->lrnur2])
            ->andFilterWhere(['like', 'lrnur3', $this->lrnur3])
            ->andFilterWhere(['like', 'lrnur4', $this->lrnur4])
            ->andFilterWhere(['like', 'lrdoctor', $this->lrdoctor])
            ->andFilterWhere(['like', 'lraides', $this->lraides])
            ->andFilterWhere(['like', 'lrworker', $this->lrworker])
            ->andFilterWhere(['like', 'wardnur1', $this->wardnur1])
            ->andFilterWhere(['like', 'wardnur2', $this->wardnur2])
            ->andFilterWhere(['like', 'wardnur3', $this->wardnur3])
            ->andFilterWhere(['like', 'wardnur4', $this->wardnur4])
            ->andFilterWhere(['like', 'warddoctor', $this->warddoctor])
            ->andFilterWhere(['like', 'wardaides', $this->wardaides])
            ->andFilterWhere(['like', 'wardworker', $this->wardworker])
            ->andFilterWhere(['like', 'cardroom', $this->cardroom])
            ->andFilterWhere(['like', 'launder', $this->launder])
            ->andFilterWhere(['like', 'centersupport', $this->centersupport])
            ->andFilterWhere(['like', 'kitchen', $this->kitchen])
            ->andFilterWhere(['like', 'xrayroom', $this->xrayroom])
            ->andFilterWhere(['like', 'carman', $this->carman])
            ->andFilterWhere(['like', 'duty', $this->duty])
            ->andFilterWhere(['like', 'staff', $this->staff]);

        return $dataProvider;
    }
}
