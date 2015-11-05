<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ponto;

/**
 * PontoSearch represents the model behind the search form about `app\models\Ponto`.
 */
class PontoSearch extends Ponto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPonto_Eletronico', 'idBolsista'], 'integer'],
            [['data', 'hora', 'Estado', 'tipoFrequencia'], 'safe'],
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
        $query = Ponto::find();

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
            'idPonto_Eletronico' => $this->idPonto_Eletronico,
            'data' => $this->data,
            'hora' => $this->hora,
            'idBolsista' => $this->idBolsista,
        ]);

        $query->andFilterWhere(['like', 'Estado', $this->Estado])
            ->andFilterWhere(['like', 'tipoFrequencia', $this->tipoFrequencia]);

        return $dataProvider;
    }
}
