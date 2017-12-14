<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cadastro".
 *
 * @property integer $idloja
 * @property string $nomeestab
 * @property string $CNPJ
 * @property string $tipodeestab
 * @property string $endereco
 * @property string $cep
 * @property string $telefone
 * @property string $email
 * @property string $senha
 * @property integer $pedido_idpedido
 * @property string $authkey 
 * @property string $authtoken
 *
 * @property Pedido $pedidoIdpedido
 */
class Cadastro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cadastro';
    }

    public function beforeSave($insert)
    {
        if(isset($this->dirtyAttributes['senha'])){
            $this->senha = sha1($this->senha);
        }

        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->authkey = \Yii::$app->security->generateRandomString(45);
                $this->authtoken = \Yii::$app->security->generateRandomString(90);
            }
            return true;
        }
        return false;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomeestab', 'CNPJ', 'tipodeestab', 'endereco', 'cep', 'telefone', 'email', 'senha'], 'required'],
            [['pedido_idpedido'], 'integer'],
            [['nomeestab', 'CNPJ', 'tipodeestab', 'endereco', 'senha', 'authkey'], 'string', 'max' => 45],
            [['cep'], 'string', 'max' => 10],
            [['telefone'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 100],
            [['authtoken'], 'string', 'max' => 90],
            [['authtoken'], 'unique'],
            [['pedido_idpedido'], 'exist', 'skipOnError' => true, 'targetClass' => Pedido::className(), 'targetAttribute' => ['pedido_idpedido' => 'idpedido']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idloja' => Yii::t('app', 'Idloja'),
            'nomeestab' => Yii::t('app', 'Nome do Estabelecimento'),
            'CNPJ' => Yii::t('app', 'Cnpj'),
            'tipodeestab' => Yii::t('app', 'Tipo de Estabelecimento'),
            'endereco' => Yii::t('app', 'Endereço'),
            'cep' => Yii::t('app', 'Cep'),
            'telefone' => Yii::t('app', 'Telefone'),
            'email' => Yii::t('app', 'Email'),
            'senha' => Yii::t('app', 'Senha'),
            //'pedido_idpedido' => Yii::t('app', 'Pedido Idpedido'),
            'authkey' => Yii::t('app', 'Authkey'),
            'authtoken' => Yii::t('app', 'Authtoken'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidoIdpedido()
    {
        return $this->hasOne(Pedido::className(), ['idpedido' => 'pedido_idpedido']);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::findOne(['authtoken'=>$token]);
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authkey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authkey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->senha === sha1($password);
    }
}