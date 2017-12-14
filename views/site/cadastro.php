<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Cadastro';
?>
<section>
	<article style="width: 72%;">
			<form>
			Nome:
				<br class="br">
			<input type="text" name="nome" required class="input">
				<br><br>
			Endereço:
				<br class="br">
			<input type="text" name="endereco" required class="input">
				<br><br>
			Tipo de estabelecimento:
				<br class="br">
			<input type="text" name="nome" required class="input">
				<br><br>
			Telefone:
				<br class="br">
			<input type="text" name="telefones" class="input" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$">
				<br><br>
			E-mail:
				<br class="br">
			<input type="text" name="email" required class="input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="caracters@caracters.com">
				<br><br>
			<input type="submit" name="submit" value="Cadastrar" id="value">
		</form>
	</article>
	
	<div id="disk" style="width: 80%;">
		<img src="<?=Url::to('@web/template/Imagens/dmel.png')?>" id="dmel">
		<img src="<?=Url::to('@web/template/Imagens/diskmel.png')?>" id="diskmel">
		<img src="<?=Url::to('@web/template/Imagens/email.png')?>" id="email">
	</div>
</section>