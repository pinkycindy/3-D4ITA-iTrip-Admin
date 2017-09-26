<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Event;

/**
 * EventSearch represents the model behind the search form about `backend\models\Event`.
 */
class EventSearch extends Event
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idEvent', 'idProvinsi'], 'integer'],
            [['namaEvent', 'tglEvent', 'deskripsiEvent', 'lokasiEvent'], 'safe'],
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
        $query = Event::find();

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
            'idEvent' => $this->idEvent,
            'idProvinsi' => $this->idProvinsi,
            'tglEvent' => $this->tglEvent,
        ]);

        $query->andFilterWhere(['like', 'namaEvent', $this->namaEvent])
            ->andFilterWhere(['like', 'deskripsiEvent', $this->deskripsiEvent])
            ->andFilterWhere(['like', 'lokasiEvent', $this->lokasiEvent]);

        return $dataProvider;
    }
}
