<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modelsCadastroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cadastro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idloja') ?>

    <?= $form->field($model, 'nomeestab') ?>

    <?= $form->field($model, 'CNPJ') ?>

    <?= $form->field($model, 'tipodeestab') ?>

    <?= $form->field($model, 'endereco') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'senha') ?>

    <?php // echo $form->field($model, 'pedido_idpedido') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
