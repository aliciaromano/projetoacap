<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contato';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1>Contato</h1><br>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Obrigado por fazer contato conosco. Nós iremos responder o mais cedo possível.
        </div>

        <p>
      
        </p>

    <?php else: ?>

        <p>
            Se quiser entrar em contato conosco ou tiver alguma questão, por favor preencha o formulário a seguir e nos envie uma mensagem.
            Obrigado.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
