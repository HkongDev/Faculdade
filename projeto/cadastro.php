	<?php
	

	include('conexao.php');

	if(isset($_POST['cadastrar'])) {
		$nome = $_POST['nome'];
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$query = mysqli_query($conexao, "INSERT INTO usuario (usuario, senha) VALUES ('$usuario', md5('$senha'))");  
	}


		?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Cadastro</title>
		<style>

			body {
 					margin: 0;
 					padding: 0;
 					background-image: url(https://i.ibb.co/Yj4r4c6/fundo.jpg);
 					background-size: cover;
 					font-family: 'Comfortaa', cursive;				
				}
			
			*{
				margin: 0;
				padding: 0;
			}
			
		
			.horas{

				width: 400px;
 				height: 400px;
 				border: 2px solid #000;
 				border-radius: 100px 100px 100px 100px;
 				color: #fff;
 				background-color: rgba(0,0,5,0.8);
 				top: 50%;
 				left: 50%;
 				position: absolute;
 				transform: translate(-50%, -50%);
 				box-sizing: border-box;
 				padding: 68px 28px;
				opacity: 1.0;				
			}
		
			table{
				border-collapse: collapse;
			}
		th, td{

			border-width: 1px solid white;
			border-bottom: 2px solid white;
			border-top: 2px solid white;
			border-left: 2px solid white;
			border-right: 2px solid white;
			padding: 2px;


		}
		
		.botao{
			font-family: 'Comfortaa', cursive;
			display: inline-block;
		}

		.p1, .p0{
			text-align: center;
		}

		.div1{
			text-align: right;
		}

		.buton{
			font-family: 'Comfortaa', cursive;
			width: 100px;
			height: 50;
			
			}
		p{
			text-align: center;
			
		}

		form{
			text-align: center;
		}

		button{

			font-family: 'Comfortaa', cursive;
			text-decoration: none;
		}


			
						
		
	</style>
		}
</head>
<body>

		
		<form method="post">
			<div class="horas">
				<p>Cadastro</p><br><br>
				<form>
				<label>Nome: </label><br>
				<input type="text" name="nome"><br>
				<label>Usuário: </label><br>
				<input type="text" name="usuario"><br>
				<label>Senha: </label><br>
				<input type="password" name="senha">
				<br><br><button name="cadastrar">Cadastrar</button>
				<br><br><button name="voltar" id="volta"><a href="home.php">Voltar</button>
				</form>
				
				
		</form>


		</div>
		</body>