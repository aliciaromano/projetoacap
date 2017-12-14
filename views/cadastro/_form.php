<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cadastro */
/* @var $form yii\widgets\ActiveForm */
?>

<section>
    <article style="width: 72%;">

<div class="cadastro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomeestab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CNPJ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipodeestab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senha')->passwordInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
    </article>
    
    
    <div id="disk" style="width: 80%;">
        <img src="<?=Url::to('@web/template/Imagens/dmel.png')?>" id="dmel">
        <img src="<?=Url::to('@web/template/Imagens/diskmel.png')?>" id="diskmel">
        <img src="<?=Url::to('@web/template/Imagens/email.png')?>" id="email">
    </div>
</section>
