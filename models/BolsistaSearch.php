<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bolsista;

/**
 * BolsistaSearch represents the model behind the search form about `app\models\Bolsista`.
 */
class BolsistaSearch extends Bolsista
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idBolsista', 'idTutor', 'idHorario_Trabalho', 'idLocal_Trabalho'], 'integer'],
            [['nome', 'sobrenome', 'matricula', 'senha', 'login'], 'safe'],
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
        $query = Bolsista::find();

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
            'idBolsista' => $this->idBolsista,
            'idTutor' => $this->idTutor,
            'idHorario_Trabalho' => $this->idHorario_Trabalho,
            'idLocal_Trabalho' => $this->idLocal_Trabalho,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'sobrenome', $this->sobrenome])
            ->andFilterWhere(['like', 'matricula', $this->matricula])
            ->andFilterWhere(['like', 'senha', $this->senha])
            ->andFilterWhere(['like', 'login', $this->login]);

        return $dataProvider;
    }
}
