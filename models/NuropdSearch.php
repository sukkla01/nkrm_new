<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nuropd;

/**
 * NuropdSearch represents the model behind the search form about `app\models\Nuropd`.
 */
class NuropdSearch extends Nuropd
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'vopd', 'ver', 'vtreatment', 'vhome', 'vrefer'], 'integer'],
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
        $query = Nuropd::find();

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
            'vopd' => $this->vopd,
            'ver' => $this->ver,
            'vtreatment' => $this->vtreatment,
            'vhome' => $this->vhome,
            'vrefer' => $this->vrefer,
        ]);

        $query->andFilterWhere(['like', 'duty', $this->duty])
            ->andFilterWhere(['like', 'staff', $this->staff]);

        return $dataProvider;
    }
}
