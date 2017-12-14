<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedido".
 *
 * @property integer $idpedido
 * @property integer $cliente_idcliente
 * @property string $data
 *
 * @property Cadastro[] $cadastros
 * @property ProdutoHasPedido[] $produtoHasPedidos
 * @property Produto[] $produtoIdprodutos
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cliente_idcliente'], 'required'],
            [['cliente_idcliente'], 'integer'],
            [['data'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpedido' => Yii::t('app', 'Idpedido'),
            'cliente_idcliente' => Yii::t('app', 'Cliente Idcliente'),
            'data' => Yii::t('app', 'Data'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCadastros()
    {
        return $this->hasMany(Cadastro::className(), ['pedido_idpedido' => 'idpedido']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoHasPedidos()
    {
        return $this->hasMany(ProdutoHasPedido::className(), ['pedido_idpedido' => 'idpedido']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoIdprodutos()
    {
        return $this->hasMany(Produto::className(), ['idproduto' => 'produto_idproduto'])->viaTable('produto_has_pedido', ['pedido_idpedido' => 'idpedido']);
    }
}
