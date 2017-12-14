<?php

namespace app;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cadastro;

/**
 * modelsCadastroSearch represents the model behind the search form about `app\models\Cadastro`.
 */
class modelsCadastroSearch extends Cadastro
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idloja', 'pedido_idpedido'], 'integer'],
            [['nomeestab', 'CNPJ', 'tipodeestab', 'endereco', 'cep', 'telefone', 'email', 'senha'], 'safe'],
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
        $query = Cadastro::find();

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
            'idloja' => $this->idloja,
            'pedido_idpedido' => $this->pedido_idpedido,
        ]);

        $query->andFilterWhere(['like', 'nomeestab', $this->nomeestab])
            ->andFilterWhere(['like', 'CNPJ', $this->CNPJ])
            ->andFilterWhere(['like', 'tipodeestab', $this->tipodeestab])
            ->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'senha', $this->senha]);

        return $dataProvider;
    }
}
