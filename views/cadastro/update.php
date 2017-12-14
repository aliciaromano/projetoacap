<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cadastro */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cadastro',
]) . $model->idloja;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cadastros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idloja, 'url' => ['view', 'id' => $model->idloja]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cadastro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
