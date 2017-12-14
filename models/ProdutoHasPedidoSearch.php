<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProdutoHasPedido;

/**
 * ProdutoHasPedidoSearch represents the model behind the search form about `app\models\ProdutoHasPedido`.
 */
class ProdutoHasPedidoSearch extends ProdutoHasPedido
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['produto_idproduto', 'pedido_idpedido', 'quantidade'], 'integer'],
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
        $query = ProdutoHasPedido::find();

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
            'produto_idproduto' => $this->produto_idproduto,
            'pedido_idpedido' => $this->pedido_idpedido,
            'quantidade' => $this->quantidade,
        ]);

        return $dataProvider;
    }
}
