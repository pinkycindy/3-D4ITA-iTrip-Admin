<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Wisata;

/**
 * WisataSearch represents the model behind the search form about `backend\models\Wisata`.
 */
class WisataSearch extends Wisata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idWisata', 'idProvinsi', 'biayaMasuk'], 'integer'],
            [['namaWisata', 'deskripsiWisata', 'kategori', 'lokasiWisata'], 'safe'],
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
        $query = Wisata::find();

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
            'idWisata' => $this->idWisata,
            'idProvinsi' => $this->idProvinsi,
            'biayaMasuk' => $this->biayaMasuk,
        ]);

        $query->andFilterWhere(['like', 'namaWisata', $this->namaWisata])
            ->andFilterWhere(['like', 'deskripsiWisata', $this->deskripsiWisata])
            ->andFilterWhere(['like', 'kategori', $this->kategori])
            ->andFilterWhere(['like', 'lokasiWisata', $this->lokasiWisata]);

        return $dataProvider;
    }
}
