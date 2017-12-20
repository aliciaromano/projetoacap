<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Produtos';
?>
<section style=" width: 80%;">
		<img src="<?=Url::to('@web/template/Imagens/produtos.jpg')?>" width="860" style="margin-bottom: 0px; ">
		<p style="" id="produto"> O produto ACAPMEL (mel de abelha in natura).</p>

		<p style="text-indent: 3em;">Para adquirir qualquer um dos produtos pode entrar em contato direto com a associação, através do <a href="<?=Url::toRoute('site/contato')?>" id="ref">telefone/e-mail</a> ou procurar nos supermercados e farmácias da região.</p>

		<h1>Produtos</h1>
		<br><br>

	<div style="margin-bottom: 35%;">
		<img src="<?=Url::to('@web/template/Imagens/produto01.jpg')?>" style="float: left; border: 2px solid #000;" width="230" height="280">
		<p style="text-indent: 2em;"> Garrafa de mel tamanho pequeno peso líquido: 280g </p>
	</div>
	<br><br>
	</div>

	<div style="margin-bottom: 35%;">
		<img src="<?=Url::to('@web/template/Imagens/produto02.jpg')?>" style="float: left; border: 2px solid #000;" width="230" height="280">
		<p style="text-indent: 2em;"> Garrafa de mel tamanho pequeno peso líquido: 700g </em></p>
	</div>
	<br><br>
	</div>

	<div style="margin-bottom: 35%;">
		<img src="<?=Url::to('@web/template/Imagens/imagemdoproduto.png')?>" style="float: left; border: 2px solid #000;">
		<p style="text-indent: 2em;"><em>Especificações do produto</em></p>
	</div>
	<br><br>
	</div>

	<div style="margin-bottom: 35%;">

		<img src="<?=Url::to('@web/template/Imagens/imagemdoproduto.png')?>" style="float: left; border: 2px solid #000;">
		<p style="text-indent: 2em;"><em>Especificações do produto</em></p>
	</div>
	</div>
	<br><br>
</section>