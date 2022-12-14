<?php 

	session_start();
	require_once("../../classes/Conexao.php");
?>
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
		    <a class="navbar-brand" href="etap2.php">
		      <img src="../../assets/img/arrow-left.svg"></a>
		    <a class="navbar-brand" href="#" style="color: white;">Experiência</a>
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
				
				<a href="etap5.php"><button type="button" class="btn btn-success">Sim</button></a>
				
			</div>
				<br>
				<label style="margin-bottom: 10px;">Possui alguma Experiência Profissional? Preencha essa etapa</label>


			<div class="form">

				<form method="POST" action="../../api/cad_exp.php">
					
					<div class="textfield">
                        <label id="campo" for="cargo">Qual era seu Cargo?</label>
                        <input type="text" name="cargo" id="cargo" placeholder="Digite seu cargo" value=""  >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="empresa">Qual era o nome da Empresa?</label>
                        <input type="text" name="empresa" id="empresa" placeholder="Digite o nome da empresa" value="" >
                    </div>

                    <label id="campo" for="mesInicio">Quando iniciou?</label>
                    <div class="textfield2">
                                        
                        <input type="number" min="1" max="12" style="width:25%;border: 1px solid #006eff; border-radius: 10px;padding: 15px; margin-right: 10px;" class="mes" value="" name="mesInicio" id="mes" placeholder="Mês" >
                        <input type="number" value="" min="1930" max="2022" style="width:29%;border: 1px solid #006eff; border-radius: 10px;padding: 15px;" class="ano" name="anoInicio" id="ano" placeholder="Ano" >
                    
                    </div>
                    <br>

                    <div class="textfield">
                       	<div class="form-check">
						  <input class="form-check-input" name="sit" type="checkbox" id="status" value="Até o momento" onchange="javascript:showContent()">
						  <label class="form-check-label" for="flexCheckDefault">
						    Esse é o meu trabalho atual
						  </label>
						</div>
                    </div>
                    <br>

		           <div id="content" style="display: block;">
	                    <label id="campo" for="mesSaiu">Quando saiu?</label>              
	                    
	                    <div class="textfield2">
	                                        
	                        <input type="number" min="1" max="12" style="width:25%;border: 1px solid #006eff; border-radius: 10px;padding: 15px; margin-right: 10px;" class="mes1" value="" name="mesSaiu" id="mes" placeholder="Mês" >
	                        <input type="number" value="" min="1930" max="2022" style="width:29%;border: 1px solid #006eff; border-radius: 10px;padding: 15px;" class="ano1" name="anoSaiu" id="ano" placeholder="Ano" >
	                    
	                    </div>
 					</div>

 				
					<button class="btn-cad" id="btn-cad" type="submit">Cadastrar</button>
					<br><br>

				</form>

			</div>
				

		</section>


		
		<?php include('../../components/visualizar.html'); ?>
		<script type="text/javascript">
	
            maxNumber(document.querySelector(".mes"));
            maxNumber(document.querySelector(".ano"));
            maxNumber(document.querySelector(".mes1"));
            maxNumber(document.querySelector(".ano1"));

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
		<script type="text/javascript">
		    function showContent() {
		        element = document.getElementById("content");
		        check = document.getElementById("status");
		        if (check.checked) {
		            element.style.display='none';
		        }
		        else {
		            element.style.display='block';
		        }
		    }
		</script>
		<script type="text/javascript" src="../../assets/bootstrap_js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="../../assets/js/cad_exp.js"></script>
		<script type="text/javascript" src="../../assets/js/sweetalert2.js"></script>
		<?php 
		if(!empty($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}else{

		}
		
		?>
	</body>
</html>