<?php 

	session_start();
	require_once("../../classes/Conexao.php");

		$info='';
		$info1='';
		$info2='';
		$info3='';
		$info4='';
		$info5='';
		$info6='';
		$info7='';
		$info8='';
		$info9='';
		$info10='';
        try {

            
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("SELECT * FROM tbInfo WHERE
            idUsuario = :id ");
            $stmt->bindValue(":id",$_SESSION['id']);
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_BOTH)){

                $info = $row['info1'];
                $info1 = $row['info2'];
                $info2 = $row['info3'];
                $info3 = $row['info4'];
                $info4 = $row['info5'];
                $info5 = $row['info6'];
                $info6 = $row['info7'];
                $info7 = $row['info8'];
                $info8 = $row['info9'];
                $info9 = $row['info10'];
                $info10 = $row['info11'];
                    

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
		<link rel="stylesheet" type="text/css" href="../../assets/css/cad_cv.css?1">
		<link rel="stylesheet" type="text/css" href="../../assets/css/menu.css">
		<link rel="stylesheet" type="text/css" href="../../assets/bootstrap_css/bootstrap.min.css">
	</head>
	<body>

		<nav style="background-color: #006eff;" class="navbar fixed-top ">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="etap7.php">
		      <img src="../../assets/img/arrow-left.svg"></a>
		    <a class="navbar-brand" href="#" style="color: white;">Adicionais</a>
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
				
				<a href="etap10.php"><button type="button" class="btn btn-success">Sim</button></a>
				
			</div>

			<br>
				<label style="margin-bottom: 10px;">Possui Informações Adicionais? Preencha essa etapa</label>
 
			<div class="form">

				<form action="../../api/cad_info.php" method="POST">
					
					<div class="textfield">
                        <label id="campo">Informações Adicionais</label>
						<div class="form-check">
						  <input class="form-check-input" name="info1" type="checkbox" value="Tenho carteira de habilitação (CNH) A" id="flexCheckDefault" 
						  <?php if($info1 == null){}else{echo 'checked';}?>
						  >
						  <label class="form-check-label" for="flexCheckDefault">
						    Tenho carteira de habilitação (CNH) A
						  </label>
						</div>
					</div>
					<div class="textfield">
						<div class="form-check">
						  <input class="form-check-input" name="info2" type="checkbox" value="Tenho carteira de habilitação (CNH) B" id="flexCheckDefault" 
						  <?php if($info2 == null){}else{echo 'checked';}?>
						  >
						  <label class="form-check-label" for="flexCheckDefault">
						    Tenho carteira de habilitação (CNH) B
						  </label>
						</div>
					</div>
					<div class="textfield">
						<div class="form-check">
						  <input class="form-check-input" name="info3" type="checkbox" value="Tenho carteira de habilitação (CNH) C" id="flexCheckDefault" 
						  <?php if($info3 == null){}else{echo 'checked';}?>
						  >
						  <label class="form-check-label" for="flexCheckDefault">
						    Tenho carteira de habilitação (CNH) C
						  </label>
						</div>
					</div>
					<div class="textfield">
						<div class="form-check">
						  <input class="form-check-input" name="info4" type="checkbox" value="Tenho carteira de habilitação (CNH) D" id="flexCheckDefault" 
						  <?php if($info4 == null){}else{echo 'checked';}?>
						  >
						  <label class="form-check-label" for="flexCheckDefault">
						    Tenho carteira de habilitação (CNH) D
						  </label>
						</div>
					</div>
					<div class="textfield">
						<div class="form-check">
						  <input class="form-check-input" name="info5" type="checkbox" value="Tenho carteira de habilitação (CNH) E" id="flexCheckDefault" 
						  <?php if($info5 == null){}else{echo 'checked';}?>
						  >
						  <label class="form-check-label" for="flexCheckDefault">
						    Tenho carteira de habilitação (CNH) E
						  </label>
						</div>
					</div>
					<div class="textfield">
						<div class="form-check">
						  <input class="form-check-input" name="info6" type="checkbox" value="Já morei no exterior" id="flexCheckDefault" 
						  <?php if($info6 == null){}else{echo 'checked';}?>
						  >
						  <label class="form-check-label" for="flexCheckDefault">
						    Já morei no exterior
						  </label>
						</div>
					</div>
					<div class="textfield">
						<div class="form-check">
						  <input class="form-check-input" name="info7" type="checkbox" value="Sou deficiente físico" id="flexCheckDefault" 
						  <?php if($info7 == null){}else{echo 'checked';}?>
						  >
						  <label class="form-check-label" for="flexCheckDefault">
						    Sou deficiente físico
						  </label>
						</div>
					</div>
					<div class="textfield">
						<div class="form-check">
						  <input class="form-check-input" name="info8" type="checkbox" value="Tenho disponibilidade para viagens ou mudanças" id="flexCheckDefault" 
						  <?php if($info8 == null){}else{echo 'checked';}?>
						  >
						  <label class="form-check-label" for="flexCheckDefault">
						    Tenho disponibilidade para viagens ou mudanças
						  </label>
						</div>
					</div>
					<div class="textfield">
						<div class="form-check">
						  <input class="form-check-input" name="info9" type="checkbox" value="Tenho boa comunicação" id="flexCheckDefault" 
						  <?php if($info9 == null){}else{echo 'checked';}?>
						  >
						  <label class="form-check-label" for="flexCheckDefault">
						    Tenho boa comunicação
						  </label>
						</div>
					</div>
					<div class="textfield">
						<div class="form-check">
						  <input class="form-check-input" name="info10" type="checkbox" value="Conhecimento básico em informática" id="flexCheckDefault" 
						  <?php if($info10 == null){}else{echo 'checked';}?>
						  >
						  <label class="form-check-label" for="flexCheckDefault">
						    Conhecimento básico em informática
						  </label>
						</div>
					</div>
					
					<div class="textfield">
                        <label id="campo" for="info">Outros</label>
                        <textarea type="text" name="info" id="info" placeholder="Escreva aqui:" value="" maxlength="5000"><?php echo $info;?></textarea>
                    </div>

					<button class="btn-cad" id="btn-cad" onclick="atualizar()" type="submit">Cadastrar</button>

				</form>

			</div>
				

		</section>


		

		<?php include('../../components/visualizar.html'); ?>
		<script type="text/javascript" src="../../assets/js/cad_info.js"></script>
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