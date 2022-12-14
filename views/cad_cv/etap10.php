<?php 

	session_start();
	require_once("../../classes/Conexao.php");

   
        try {

            $objetivo='';
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("SELECT * FROM tbObjetivoUsuario WHERE
            idUsuario = :id ");
            $stmt->bindValue(":id",$_SESSION['id']);
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_BOTH)){

                $objetivo = $row['objetivo'];
                    

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
		    <a class="navbar-brand" href="etap9.php">
		      <img src="../../assets/img/arrow-left.svg"></a>
		    <a class="navbar-brand" href="#" style="color: white;">Objetivo</a>
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
				
				<a href="etap11.php?alert="><button type="button" class="btn btn-success">Sim</button></a>
				

			</div>

			<div class="form">

				
				<form id="form-cad">
					
					<div class="textfield">
                        <label id="campo" for="objetivo">Possui um Objetivo?</label>
                        <textarea type="text" name="objetivo" id="objetivo" placeholder="Escreva seu Objetivo" value="" maxlength="5000"><?php echo @$objetivo?></textarea>
                    </div>

					<button class="btn-cad" id="btn-cad" type="submit">Cadastrar</button>

				</form>


			</div>
				

		</section>


		
		<?php include('../../components/visualizar.html'); ?>
		<script type="text/javascript" src="../../assets/js/cad_obj.js"></script>
		<script type="text/javascript" src="../../assets/bootstrap_js/bootstrap.bundle.min.js"></script>
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