<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property integer $idproduto
 * @property integer $volume
 *
 * @property ProdutoHasPedido[] $produtoHasPedidos
 * @property Pedido[] $pedidoIdpedidos
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['volume'], 'required'],
            [['volume'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idproduto' => Yii::t('app', 'Idproduto'),
            'volume' => Yii::t('app', 'Volume'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoHasPedidos()
    {
        return $this->hasMany(ProdutoHasPedido::className(), ['produto_idproduto' => 'idproduto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidoIdpedidos()
    {
        return $this->hasMany(Pedido::className(), ['idpedido' => 'pedido_idpedido'])->viaTable('produto_has_pedido', ['produto_idproduto' => 'idproduto']);
    }
}
