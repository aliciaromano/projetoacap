<?php

use yii\helpers\Html;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model app\models\Cadastro */

$this->title = Yii::t('app', 'Cadastro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cadastros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cadastro-create">


<p>Caso o seu cadastro for efetuado com sucesso a página irá recarregar e seu estabelecimento aparecerá na página <a href="<?=Url::toRoute('cadastro/index')?>" id="ref">Onde Encontrar?</a></p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
