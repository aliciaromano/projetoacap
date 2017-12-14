<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AcapAsset;

AcapAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	 <meta charset="<?= Yii::$app->charset ?>">	
	<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<link rel="icon" type="ico" href="<?=Url::to('@web/template/favicon.ico')?>">

</head>
<body>
<?php $this->beginBody() ?>

<div><img id="u25101_img" src="<?=Url::to('@web/template/Imagens/fundo_capa-crop-u25101.png')?>" width="272" height="371"></div>
<div><img id="u25078_img" src="<?=Url::to('@web/template/Imagens/fundo_capa.png" width="575')?>" height="371"></div>

<header>
	<img src="<?=Url::to('@web/template/Imagens/ACAPmel.png')?>" id="header">	
</header>

<nav> <!-- Menu  -->
	<div id="nav">
		<div class="nav"><strong><a class="navv" href="<?=Url::toRoute('site/index')?>">PÁGINA INICIAL</a></strong></div>
		<div class="nav"><strong><a class="navv" href="<?=Url::toRoute('site/produtos')?>">PRODUTOS</a></strong></div>
		<div class="nav"><strong><a class="navv" href="<?=Url::toRoute('cadastro/create')?>">CADASTRO</a></strong></div>
		<div class="nav"><strong><a class="navv" href="<?=Url::toRoute('site/contact')?>">CONTATO</a></strong></div>
		<div class="nav"><strong><a class="navv" href="<?=Url::toRoute('cadastro/index')?>">ONDE ENCONTRAR?</a></strong></div>

</nav>

<section>		
	<?= $content ?>
</section>

<div id="rodape"> </div>

<footer>
<div id="footer"> 
</div>

<div id="footerc">
	<h1 id="cont">Onde nos encontrar</h1><br>
	<p>Assentamento Santa Clara II</p>
	<p>Bairro: Zona Rural</p>
	<p>Município: Cerro Corá</p>
	<p>Estado: Rio Grande do Norte</p>
	<p>Cep: 59395-000</p>
</div>

<div id="footerm">
	<img src="<?=Url::to('@web/template/Imagens/acapfoot.png')?>" width="300" height="250">
</div>

<div id="footera">
	<h1>Parcerias</h1>

	<a href="http://portal.ifrn.edu.br/"><img src="<?=Url::to('@web/template/Imagens/CAMPUS CURRAIS NOVOS.png')?>" width="170" height="200" id="if"></a>
	<a href="http://www.semabelhasemalimento.com.br/"><img src="<?=Url::to('@web/template/Imagens/semabelhasemalimento.png')?>" height="200" id="sabelha"></a>
</div>

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>