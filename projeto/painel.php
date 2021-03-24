<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>HOME | SISTEMA PONTO</title>
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
			
		
			.menu{
				width: 100%;
				height: 50px;
				background-color: #222;
				font-family: 'Comfortaa', cursive;
				
			}

			.menu ul{
				list-style: none;
				position: relative;
			}

			.menu ul li {
				width: 150px;
				float: left;				
			}

			.menu a{
				padding: 15px;
				display: block;
				text-decoration: none;
				text-align: center;
				background-color: #222;
				color: #fff;				
			}

			.menu ul ul {
				position: absolute;
				visibility: hidden;

			}

			.menu ul li:hover ul{
				visibility: visible;

			}

			.menu a:hover{
				background-color: #f4f4f4;
				color: #555;
			}

			.menu ul ul li {
				float: none;
				border-bottom: solid 1px #ccc;
			}

			.menu ul ul li a{
				background-color: #069;
			}

			label[for="bt_menu"]{
				padding: 5px;
				background-color: #222;
				color: #fff;
				font-family: 'Comfortaa', cursive;
				text-align: center;
				font-size: 30px;
				cursor: pointer;
				width: 50px;
				height: 50px;
			}

			#bt_menu{
				display: none;
			}

			label[for="bt_menu"]{
				display: none;

			}

			@media(max-width: 800px){

					label[for="bt_menu"]{
						display: block;
					}

					#bt_menu:checked ~ .menu{

						margin-left: 0;
					}
					.menu{
						margin-top: 5px;
						margin-left: -100px;
						transition: all .4s;
					}
					.menu ul li{
						width: 100%;
						float: none;
					}					
			.menu ul ul{
				position: static;
				overflow: hidden;
				max-height: 0;
				transition: all .4s;
			}

			.menu ul li:hover ul{
				height: auto;
				max-height: 200px;

			}

			}

			.horas{

				width: 700px;
 				height: 575px;
 				border: 2px solid #000;
 				border-radius: 100px 100px 100px 100px;
 				color: #fff;
 				background-color: rgba(0,0,5,0.8);
 				top: 60%;
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
		.parag{
			text-align: justify;
			
		}

			
						
		
	</style>
</head>
<body>

		<input type="checkbox" id="bt_menu">
		<label for="bt_menu">&#9776;</label>

		<nav class="menu">
				
			<ul>				
							
				<li><a href="#">Colaborador</a>
					<ul>
						<li><a href="home.php">Sair</a></li>
					</ul>
			</ul>

		</nav>
		
		
		<form>
			<div class="horas">
				<p class="p0">Registro de Horas Trabalhadas</p>
			<p class="p3">Usuário: <?php echo $_SESSION['usuario'];?></p>
			<label for="func"><br><p>Função:</p></label>
					<select id="func" name="func">
 					 <option value="professor">Professor</option>
					  <option value="manutencao">Manutenção</option>
 					 <option value="adm">Administrativo</option>
					  <option value="direcao">Direção</option>
						</select>
								
		</form>
		<br>
		<table style="width:100%"><br>
			<tr>
			<th><p>Data<p></th>
  			<th>Hora Entrada<br></th>
  			<th>Hora Saída<br></th>
  			<th>Total Horas<br></b></th>
  			<th>Justificativa<br></th>
  			<th>Opções</th>
  		</tr>
  		<tr>
  		<td><input type="date"></td>
  		<td><input type="time"></td>
  		<td><input type="time"></td>
  		<td>Campo4</td>
  		<td><select id="just" name="just">
  					<option value="-">- Selecione -</option>
 					 <option value="capaci">Capacitação</option>
					  <option value="empr">Empréstimo</option>
 					 <option value="prod">Produção</option>
					  <option value="comport">Comportamental</option>
						</select></td>
  		<td><button class="botao"><img src="https://i.ibb.co/44mPvK5/config.png"></button><button class="botao"><img src="https://i.ibb.co/MV909mx/excl.png"></button></td>
 		</tr>
  		</table>

		  <br><button type="button" class="buton">Enviar Ajuste</button>

           <br><br><p class="p1">Histórico de manutenção de ponto

        <br> <table style="width:100%"><br>
			<tr>
			<th>Data</th>
  			<th>Hora Entrada<br></th>
  			<th>Hora Saída<br></th>
  			<th>Total Horas<br></b></th>
    		</tr>
  		<tr>
  		<td>Exemplo1</td>
  		<td>exemplo2</td>
  		<td>exemplo3</td>
  		<td>exemplo4</td>
   		</tr>
   		<tr>
  		<td>Exemplo1</td>
  		<td>exemplo2</td>
  		<td>exemplo3</td>
  		<td>exemplo4</td>
   		</tr>
   		<tr>
  		<td>Exemplo1</td>
  		<td>exemplo2</td>
  		<td>exemplo3</td>
  		<td>exemplo4</td>
   		</tr>
   		<tr>
  		<td>Exemplo1</td>
  		<td>exemplo2</td>
  		<td>exemplo3</td>
  		<td>exemplo4</td>
   		</tr>
  		</table>
  		<div class="div1">
  		<br><button><img src="https://i.ibb.co/MgvTPcs/imprim.png"></button>
  		<button><img src="https://i.ibb.co/SvLRdt6/excel.png"></button>
  		<button><img src="https://i.ibb.co/KhwnsLd/pdf.pngs"></button>
  		</div>
  		
		 <p id="parag"> Status da solicitação Atual: Pendente de aprovação</p>

		</div>
		</body>