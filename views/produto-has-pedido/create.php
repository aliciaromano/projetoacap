<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProdutoHasPedido */

$this->title = Yii::t('app', 'Create Produto Has Pedido');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produto Has Pedidos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-has-pedido-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
