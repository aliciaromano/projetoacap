<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modelsCadastroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Onde Encontrar?');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cadastro-index">

    <h1>Estabelecimentos onde você pode encontrar os produtos ACAPMEL</h1><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idloja',
            'nomeestab',
            //'CNPJ',
            'tipodeestab',
            'endereco',
             'cep',
            // 'telefone',
            //'email:email',
            // 'senha',
            // 'pedido_idpedido',

        ],
    ]); ?>
</div>
