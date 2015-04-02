<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nurer;

/**
 * NurerSearch represents the model behind the search form about `app\models\Nurer`.
 */
class NurerSearch extends Nurer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'vnonac', 'vemergency', 'vresus', 'vhome', 'vvisit', 'vac', 'vurgent', 'vobservations', 'vrefer', 'vadmit'], 'integer'],
            [['vstdate', 'duty', 'staff'], 'safe'],
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
        $query = Nurer::find();

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
            'vnonac' => $this->vnonac,
            'vemergency' => $this->vemergency,
            'vresus' => $this->vresus,
            'vhome' => $this->vhome,
            'vvisit' => $this->vvisit,
            'vac' => $this->vac,
            'vurgent' => $this->vurgent,
            'vobservations' => $this->vobservations,
            'vrefer' => $this->vrefer,
            'vadmit' => $this->vadmit,
        ]);

        $query->andFilterWhere(['like', 'duty', $this->duty])
            ->andFilterWhere(['like', 'staff', $this->staff]);

        return $dataProvider;
    }
}
