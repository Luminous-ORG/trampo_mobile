<?php 

	session_start();
	require_once("../../classes/Conexao.php");

   
        try {

            $grau ='oii';
            $situacao ='oii';
            
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("SELECT * FROM tbEducacaoUsuario WHERE
            idUsuario = :id ");
            $stmt->bindValue(":id",$_SESSION['id']);
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_BOTH)){

                $grau = $row['grau'];
                $situacao = $row['situacao'];    

            }

        } catch(Exception $e) {
            
            echo $e->getMessage();
        }


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
		    <a class="navbar-brand" href="etap1.php">
		      <img src="../../assets/img/arrow-left.svg"></a>
		    <a class="navbar-brand" href="#" style="color: white;">Escolaridade</a>
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
				
				<a href="etap3.php"><button type="button" class="btn btn-success">Sim</button></a>
				

			</div>

			<div class="form">

				<form id="form-cad-edu">
						
					<div class="textfield">
                        <label id="campo" for="telefone">Qual seu nível de escolaridade?</label>
                        <select class="form-select" name="grau">
						  <option value="" selected>Escolha uma das opções</option>
						  <option value="Ensino Fundamental Incompleto"
						  		<?php
                                    if($grau == 'Ensino Fundamental Incompleto'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Fundamental Incompleto</option>
						  <option value="Ensino Fundamental Completo"
						  		<?php
                                    if($grau == 'Ensino Fundamental Completo'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Fundamental Completo</option>
						  <option value="Ensino Médio Incompleto"
						  		<?php
                                    if($grau == 'Ensino Médio Incompleto'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Médio Incompleto</option>
						  <option value="Ensino Médio Completo"
						  		<?php
                                    if($grau == 'Ensino Médio Completo'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Médio Completo</option>
						  <option value="Ensino Médio Com Técnico"
						  		<?php
                                    if($grau == 'Ensino Médio Com Técnico'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Médio Com Técnico</option>
						  <option value="Ensino Médio pelo EJA"
						  	  	<?php
                                    if($grau == 'Ensino Médio pelo EJA'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Médio pelo EJA</option>
						  <option value="Ensino Médio pelo EJA"
						  	 <?php
                                    if($grau == 'Ensino Fundamental pelo EJA'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Médio pelo EJA</option>
						</select>
                    </div>
                    <div class="textfield">
                        <label id="campo" for="telefone">Qual sua situação?</label>
                        <select class="form-select" name="status">
						  <option value="" selected>Escolha uma das opções</option>
						  <option value="Cursando"
						  		<?php
                                    if($situacao == 'Cursando'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Estou Cursando</option>
						  <option value="Concluido"
						  		<?php
                                    if($situacao == 'Concluido'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Já concluí o ensino</option>
						  <option value="Não concluí o ensino"
	  							<?php
                                    if($situacao == 'Não concluí o ensino'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Não concluí o ensino</option>
						  
						</select>
                    </div>

					<button class="btn-cad" id="btn-cad" type="submit">Cadastrar</button>

				</form>

			</div>
				

		</section>


		

		<?php include('../../components/visualizar.html'); ?>
		<script type="text/javascript" src="../../assets/bootstrap_js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="../../assets/js/cad_edu.js"></script>
		<script type="text/javascript" src="../../assets/js/sweetalert2.js"></script>
	</body>
</html>