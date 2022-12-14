<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>trampo</title>
		<link rel="stylesheet" type="text/css" href="../../assets/css/reset.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/cad_cv.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/menu.css">
		<link rel="stylesheet" type="text/css" href="../../assets/bootstrap_css/bootstrap.min.css">
	</head>
	<body>

		<nav style="background-color: #006eff;" class="navbar fixed-top ">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="etap5.php">
		      <img src="../../assets/img/arrow-left.svg"></a>
		    <a class="navbar-brand" href="#" style="color: white;">Idiomas</a>
		    <a class="navbar-brand" id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"style="color: white;">
		      <img src="../../assets/img/eye.svg"></a>
		  </div>
		</nav>

		<section class="container">

			<div class="cabecalho">
				<label style="margin-bottom: 10px;">Deseja editar seu perfil mais tarde?</label>
				
				<a href="../restrito/index.php"><button type="button" class="btn btn-danger">Sim</button></a>
				
				<br>
				<br>
				<label style="margin-bottom: 10px;">Deseja pular essa etapa?</label>
				
				<a href="etap9.php"><button type="button" class="btn btn-success">Sim</button></a>
				

			</div>

			<div class="form">

				<form id="form-cad">
					
					<div class="textfield">
                        <label id="campo" for="idioma">Fala mais de um Idioma?</label>
                        <input type="text" name="idioma" id="idioma" placeholder="Digite seu Idioma" value="" >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="nivel">Qual o nível seu Idioma?</label>
                        <select class="form-select" name="nivel" >
						  <option value="" selected>Escolha uma das opções</option>
						  <option value="Básico"

						  >
						  Básico</option>
						  <option value="Intermediário"

						  >
						  Intermediário</option>
						  <option value="Avançado"

						  >
						  Avançado</option>
						  <option value="Fluente"

						  >
						  Fluente</option>
						  
						  
						</select>
                    </div>

					<button class="btn-cad" id="btn-cad" type="submit">Cadastrar</button>

				</form>

			</div>
				

		</section>


		

		<?php include('../../components/visualizar.html'); ?>
		<script type="text/javascript" src="../../assets/bootstrap_js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="../../assets/js/cad_idioma.js"></script>
		<script type="text/javascript" src="../../assets/js/sweetalert2.js"></script>
	</body>
</html>