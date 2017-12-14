<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto_has_pedido".
 *
 * @property integer $produto_idproduto
 * @property integer $pedido_idpedido
 * @property integer $quantidade
 *
 * @property Produto $produtoIdproduto
 * @property Pedido $pedidoIdpedido
 */
class ProdutoHasPedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produto_has_pedido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['produto_idproduto', 'pedido_idpedido'], 'required'],
            [['produto_idproduto', 'pedido_idpedido', 'quantidade'], 'integer'],
            [['produto_idproduto'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::className(), 'targetAttribute' => ['produto_idproduto' => 'idproduto']],
            [['pedido_idpedido'], 'exist', 'skipOnError' => true, 'targetClass' => Pedido::className(), 'targetAttribute' => ['pedido_idpedido' => 'idpedido']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'produto_idproduto' => Yii::t('app', 'Produto Idproduto'),
            'pedido_idpedido' => Yii::t('app', 'Pedido Idpedido'),
            'quantidade' => Yii::t('app', 'Quantidade'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoIdproduto()
    {
        return $this->hasOne(Produto::className(), ['idproduto' => 'produto_idproduto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidoIdpedido()
    {
        return $this->hasOne(Pedido::className(), ['idpedido' => 'pedido_idpedido']);
    }
}
