<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Contato';
?>

<section>
	<article style="width: 72%;">
			<form action="mailsend.php" method="post">
			Nome:
				<br class="br">
			<input type="text" name="nome" required class="input">
				<br><br>
			Telefone para contato:
				<br class="br">
			<input type="tel" name="telefones" class="input" maxlength="9" >
				<br><br>
			E-mail:
				<br class="br">
			<input type="text" name="email" required class="input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="caracters@caracters.com">
				<br><br>
			Mensagem:
			<br class="br">
			<textarea rows="10" cols="60"></textarea>
				<br><br>
			<input type="submit" name="submit" value="Enviar" id="value">
		</form>
	</article>
	
	<div id="disk" style="width: 80%;">
		<img src="<?=Url::to('@web/template/Imagens/dmel.png')?>" id="dmel">
		<img src="<?=Url::to('@web/template/Imagens/diskmel.png')?>" id="diskmel">
		<img src="<?=Url::to('@web/template/Imagens/email.png')?>" id="email">
	</div>

</section>