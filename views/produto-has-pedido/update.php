<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutoHasPedido */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Produto Has Pedido',
]) . $model->produto_idproduto;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produto Has Pedidos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->produto_idproduto, 'url' => ['view', 'produto_idproduto' => $model->produto_idproduto, 'pedido_idpedido' => $model->pedido_idpedido]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="produto-has-pedido-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
