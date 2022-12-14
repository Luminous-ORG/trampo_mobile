<?php 

	session_start();
	require_once("../../classes/Conexao.php");
	$con = Conexao::conectar();
        
        $stmt1 = $con->prepare("SELECT * FROM tbDadosUsuario WHERE
        idUsuario = :id ");
        $stmt1->bindValue(":id",$_SESSION['id']);
        $stmt1->execute();

        $cidade='';
        while($row1 = $stmt1->fetch(PDO::FETCH_BOTH)){

            $cidade = $row1['cidade'];
          

        }
		$grau='';
        $stmt2 = $con->prepare("SELECT * FROM tbEducacaoUsuario WHERE
        idUsuario = :id ");
        $stmt2->bindValue(":id",$_SESSION['id']);
        $stmt2->execute();

        while($row2 = $stmt2->fetch(PDO::FETCH_BOTH)){

            $grau = $row2['grau'];
            

        }
         $fotoBanco = 'foto';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>trampo</title>
		<link rel="stylesheet" type="text/css" href="../../assets/css/restrito.css?1">
		<link rel="stylesheet" type="text/css" href="../../assets/css/reset.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/cad_cv.css?1">
		<link rel="stylesheet" type="text/css" href="../../assets/css/menu.css?1">		
		<link rel="stylesheet" type="text/css" href="../../assets/bootstrap_css/bootstrap.min.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	</head>
	<body>
		
		<!-- https://shoppingcampolimpo.com.br/lojas_files/25744.jpg -->


		<nav style="background-color: #006eff;" class="navbar fixed-top ">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" style="color: white;" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg><a>
          
            <a class="navbar-brand" href="#" style="color: white;">Vagas</a>
            <a class="navbar-brand" href="#" style="color: transparent;">espaço</a>
            	   
            
            
          </div>
           <div class="container-fluid">
           
            	<div style="text-align:center;">
            	   	
            	<form class="d-flex" role="search" method="POST" action="vagas.php">
            	
            		<input  class="form-control me-2" type="search" name="pesquisa" id="pesquisa" aria-label="Search" placeholder="Deseja pesquisar algo?">
            		
            		<input type="submit" class="btn btn-light" value="pesquisar">

            	</form>
        
        		</div>
            
            
          </div>
        </nav>

		<section style="margin-bottom:30px;margin-top: 140px;" class="container">

			<div class="row row-cols-1 row-cols-md-3 g-4">

				<?php

					//$stmt = $con->prepare("SELECT * FROM tbVaga WHERE requisitos LIKE '%$grau%' AND salario LIKE '%$sal%' AND cidade LIKE '%$cidade%'");
				$pesquisa = @$_POST['pesquisa'];

					//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuÃ¡rio
				$stmt = $con->prepare("SELECT * FROM tbVaga WHERE cidade LIKE '%$pesquisa%' OR requisitos LIKE '%$pesquisa%' OR salario LIKE '%$pesquisa%' OR cargaHoraria LIKE '%$pesquisa%' OR dataVaga LIKE '%$pesquisa%' OR nomeVaga LIKE '%$pesquisa%' OR nomeEmpresa LIKE '%$pesquisa%' ORDER BY requisitos like '%$grau%' DESC ");
						$stmt->execute();

					
					if($stmt->rowCount() <= 0){

						echo '<div class="col" style="margin-top: 30px;">
						    <div class="card h-100">
						      <div class="card-body" style="text-align: center;">
						      	<br>
						        <h5 class="card-title">
						        	<svg xmlns="http://www.w3.org/2000/svg" style="color: #006eff;" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
								            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
								        	</svg>
								        </h5>
								        <br>
								<p class="card-text">Nenhuma vaga encontrada :(</p>
						        <br>
						      </div>
						    </div>
						  </div>';

					}else{

						while($row = $stmt->fetch(PDO::FETCH_BOTH)){ ?>
				
					<a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#canvasRight<?php echo $row['idVaga'];?>" aria-controls="offcanvasRight">
					  <div class="col">
					    <div class="card h-100">
					      <div class="card-body">
					        <h5 class="card-title"><?php echo $row['nomeVaga'];?></h5>
					        <p class="card-text">Requisitos : <?php echo $row['requisitos'];?></p>
					        <p class="card-text">Salário: <?php echo $row['salario'];?></p>
					        <p class="card-text"><?php echo $row['cargaHoraria'];?></p>
					       <p class="card-text"><?php echo $row['cidade'];?></p>
					        <p class="card-text"><small class="text-muted">Postado em <?php echo $row['dataVaga'];?></small></p>
					      </div>
					    </div>
					  </div>
					</a>


				<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="canvasRight<?php echo $row['idVaga'];?>" aria-labelledby="offcanvasRightLabel">
					<div class="offcanvas-header">
						<h5 id="offcanvasRightLabel"><?php echo $row['nomeEmpresa'];?></h5>
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
				    <div class="offcanvas-body">
						<div class="main-cad">   
					        <form >
					            <div class="right-cad">
					                <div class="card-cad">		

					                	<div class="textfield">
					                        <img src="<?php
					                         if($row['foto'] == null){
					                         	echo '../../assets/img/empresa1.png';
					                         }else{
					                         echo $row['foto'];
					                     	 }
					                     		?>" class="img-fluid" alt="...">
					                    </div>

					                    <div class="textfield">
					                        <label>Cargo: <?php echo $row['nomeVaga'];?></label>
					                    </div>
					                    <div class="textfield">
					                        <label>Requisitos: <?php echo $row['requisitos'];?></label>
					                    </div>
					                     <div class="textfield">
					                        <label><?php echo $row['cargaHoraria'];?>.</label>
					                    </div>
					                    <div class="textfield">
					                        <label>Salário: <?php echo $row['salario'];?></label>
					                    </div>
					                    <div class="textfield">
					                        <label><?php echo $row['descricaoVaga'];?></label>
					                    </div>
					                    
		     
					                    <a class="btn btn-primary" href="enviar.php?idUser=<?php echo$_SESSION['id']?>&idVaga=<?php echo $row['idVaga'];?>">Candidatar-se a Vaga</a>
					                    
					                </div>
					            </div>
					        </form>
				    	</div>
				  	</div>
				</div>


				<?php }}?>
			 
			      
			</div>
			
		</section>



		<script type="text/javascript" src="../../assets/bootstrap_js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="../../assets/js/sweetalert2.js"></script>
		<?php 
		if(!empty($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}else{

		}
		
		?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function () {
            $("#pesquisa").autocomplete({
                source: 'complete.php'
            });
        });
    </script>
	</body>
</html>
