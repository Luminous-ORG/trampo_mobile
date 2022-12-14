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
                        <label id="campo" for="telefone">Qual seu n??vel de escolaridade?</label>
                        <select class="form-select" name="grau">
						  <option value="" selected>Escolha uma das op????es</option>
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
						  <option value="Ensino M??dio Incompleto"
						  		<?php
                                    if($grau == 'Ensino M??dio Incompleto'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino M??dio Incompleto</option>
						  <option value="Ensino M??dio Completo"
						  		<?php
                                    if($grau == 'Ensino M??dio Completo'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino M??dio Completo</option>
						  <option value="Ensino M??dio Com T??cnico"
						  		<?php
                                    if($grau == 'Ensino M??dio Com T??cnico'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino M??dio Com T??cnico</option>
						  <option value="Ensino M??dio pelo EJA"
						  	  	<?php
                                    if($grau == 'Ensino M??dio pelo EJA'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino M??dio pelo EJA</option>
						  <option value="Ensino M??dio pelo EJA"
						  	 <?php
                                    if($grau == 'Ensino Fundamental pelo EJA'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino M??dio pelo EJA</option>
						</select>
                    </div>
                    <div class="textfield">
                        <label id="campo" for="telefone">Qual sua situa????o?</label>
                        <select class="form-select" name="status">
						  <option value="" selected>Escolha uma das op????es</option>
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
						  J?? conclu?? o ensino</option>
						  <option value="N??o conclu?? o ensino"
	  							<?php
                                    if($situacao == 'N??o conclu?? o ensino'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  N??o conclu?? o ensino</option>
						  
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