<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login | SISTEMA PONTO</title>
</head>
<body>
	<div class="titulo"><h1>SISTEMA PONTO</h1></div>
		<div class="login">
			<img src="https://i.ibb.co/xzdqZwr/icolog.jpg" class="usuario" width="100" height="100" alt="">
			<h1>Login</h1>
			<?php 
	if(isset($_SESSION['nao autenticado'])):
	?>
	<div class="notification is-danger">
	<p>ERRO: usuário ou senha inválidos.</p>
	</div>
	<?php
	endif;
	unset($_SESSION['nao autenticado']);
	?>
		<form action="login.php" method="POST">
				<p>Usuário</p>
				<input type="text" name="usuario">
				<p>Senha</p>
				<input type="password" name="senha">
				<input type="submit" name="" value="Login">
				<a href="#">Esqueci minha senha</a><br>
				<a href="cadastro.php">Cadastre-se</a><br>
		</form>
	</div>
</body>
