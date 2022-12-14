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
		    <a class="navbar-brand" href="etap3.php">
		      <img src="../../assets/img/arrow-left.svg"></a>
		    <a class="navbar-brand" href="#" style="color: white;">Cursos</a>
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
				
				<a href="etap7.php"><button type="button" class="btn btn-success">Sim</button></a>
				
			</div>
			<br>
				<label style="margin-bottom: 10px;">Ja fez algum curso? Preencha essa etapa</label>
			<div class="form">

				<form id="form-cad">

					<div class="textfield">
                        <label id="campo" for="curso">Nome do curso</label>
                        <input type="text" name="curso" id="curso" placeholder="Digite o nome do curso" value="" >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="instituicao">Nome da Instituição</label>
                        <input type="text" name="instituicao" id="instituicao" placeholder="Digite o nome da Instituição" value="" >
                    </div>


					<div class="textfield">
                        <label id="campo" for="instituicao">Ano de Conclusão</label>
                        <input name="ano" id="ano" class="ano"type="number" min="1930" max="2022" placeholder="Ano" maxlength="4" >
                    </div>

               

					<button class="btn-cad" id="btn-cad" type="submit">Cadastrar</button>

				</form>

			</div>
				

		</section>


		
		<?php include('../../components/visualizar.html'); ?>
		<script type="text/javascript">
			
            maxNumber(document.querySelector(".ano"));

            function maxNumber(input)
            {
                input.addEventListener('input', handler);
                input.addEventListener('blur', handler);

                var running = false;

                function handler() {
                    // Para evitar conflito entre o input e o blur
                    if (running) return;
                    
                    // Bloqueia múltiplas chamadas do input e blur
                    running = true;

                    var max = parseFloat(this.getAttribute("max"));
                    
                    // Se o input for maior que max="" ele irá fixa o valor maximo no value
                    if (parseFloat(this.value) > max) this.value = max;
                    
                    // Habilita novamente as chamadas do blur e keyup
                    running = false;
                };
            }

		</script>
		<script type="text/javascript" src="../../assets/js/cad_curso.js"></script>
		<script type="text/javascript" src="../../assets/bootstrap_js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="../../assets/js/sweetalert2.js"></script>
	</body>
</html>