<?php 

	session_start();
	require_once("../../classes/Conexao.php");
    require_once("../../classes/Curriculo.php");


    $pergunta ='';
    $grau ='';
    $situacao ='';
    $status ='';
            

    try {
        $con = Conexao::conectar();


        $stmt = $con->prepare("SELECT * FROM tbUsuario WHERE
	    idUsuario = :id ");
	    $stmt->bindValue(":id", $_SESSION['id']);
	    $stmt->execute();

	    while($row = $stmt->fetch(PDO::FETCH_BOTH)){

	        $status = $row['status'];
	    
	    }
        
        $stmt1 = $con->prepare("SELECT * FROM tbDadosUsuario WHERE
        idUsuario = :id ");
        $stmt1->bindValue(":id",$_SESSION['id']);
        $stmt1->execute();

        while($row1 = $stmt1->fetch(PDO::FETCH_BOTH)){

            $dia = $row1['dia'];
            $mes = $row1['mes'];
            $ano = $row1['ano'];
            $telefone = $row1['telefone'];
            $pergunta = $row1['jaTrabalhou'];
            $cep = $row1['cep'];
            $rua = $row1['endereco'];
            $numero = $row1['numero'];
            $bairro = $row1['bairro'];
            $cidade = $row1['cidade'];
            $uf = $row1['uf'];

        }

        $stmt2 = $con->prepare("SELECT * FROM tbEducacaoUsuario WHERE
        idUsuario = :id ");
        $stmt2->bindValue(":id",$_SESSION['id']);
        $stmt2->execute();

        while($row2 = $stmt2->fetch(PDO::FETCH_BOTH)){

            $grau = $row2['grau'];
            $situacao = $row2['situacao'];    

        }

        $stmt3 = $con->prepare("SELECT * FROM tbInfo WHERE
        idUsuario = :id ");
        $stmt3->bindValue(":id",$_SESSION['id']);
        $stmt3->execute();

        while($row3 = $stmt3->fetch(PDO::FETCH_BOTH)){

            $info = $row3['info1'];
         	$info1 = $row3['info2'];
            $info2 = $row3['info3'];
            $info3 = $row3['info4'];
            $info4 = $row3['info5'];
            $info5 = $row3['info6'];
            $info6 = $row3['info7'];
            $info7 = $row3['info8'];
            $info8 = $row3['info9'];
            $info9 = $row3['info10'];
            $info10 = $row3['info11'];
           

        }

        $stmt4 = $con->prepare("SELECT * FROM tbObjetivoUsuario WHERE
        idUsuario = :id ");
        $stmt4->bindValue(":id",$_SESSION['id']);
        $stmt4->execute();

        while($row4 = $stmt4->fetch(PDO::FETCH_BOTH)){

            $objetivo = $row4['objetivo'];
                

        }
         
        $experiencia = new Curriculo();
        $listarExperiencia = $experiencia->listarExperiencia();
   		
   		$curso = new Curriculo();
        $listarCurso = $curso->listarCurso();

        $idioma = new Curriculo();
        $listarIdioma = $idioma->listarIdioma();


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
		<link rel="stylesheet" type="text/css" href="../../assets/css/restrito.css?1">
		<link rel="stylesheet" type="text/css" href="../../assets/css/cad_cv.css?1">
		<link rel="stylesheet" type="text/css" href="../../assets/css/reset.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/menu.css?1">		
		<link rel="stylesheet" type="text/css" href="../../assets/bootstrap_css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css">

	</head>
	<body>

		<?php include('../../components/menu.html');?>

		<style>
                  
                img{
                  background-color: #ddd;
                  border-radius: 50%;
                  height: 250px;
                  object-fit: cover;
                  width: 250px;  
                  border: 2px solid;
                  border-color: #006eff;
                  padding: 2px;
                }
                
            </style>

		<section class="container" style="margin-top: 120px;">

			 <div class="image">

			 	<?php

              $fotoBanco = 'foto';

              $con = Conexao::conectar();

              $stmt = $con->prepare("SELECT * FROM tbFotoUsuario WHERE 
              idUsuario = :id ");
              $stmt->bindValue(":id", $_SESSION['id']);
              $stmt->execute();
      
              while($row = $stmt->fetch(PDO::FETCH_BOTH)){
              
                  $fotoBanco = $row['foto'];
      
              }
              if($fotoBanco == 'foto'){?>

                  <img src="../../assets/img/icon_user.png" >
              
              <?php }else{?>
                  
                    <img width="230" height="230"  id="img_redonda" class="rounded-circle" src="<?php echo $fotoBanco;?>" >
                
              <?php  }?>

		

			 </div>
			 <br>

			 <h3 style="text-align:center;"><?php echo @$_SESSION['nome'];?></h3>
		

			<br>
			<div class="card mb-3">
			  <div class="card-body">
			  	<div style="text-align:center;">
			  		
			  		<form action="../../api/save_status.php" method="POST">
			  		   <div class="textfield">
                        <label id="campo" for="">Deseja que as empresas vajam sua foto?</label>
                        <div class="form-check">
						  <input class="form-check-input" value="true" type="radio" name="pergunta" id="pergunta1" 
						  <?php 
						  	if($status == 'true'){
						  		echo "checked";
						  	}else{

						  	}
						  ?>
						  >
						  <label class="form-check-label" for="pergunta1">
						    Sim
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" value="false" type="radio" name="pergunta" id="pergunta2" 
						  <?php 
						  	if($status == 'false'){
						  		echo "checked";
						  	}else{

						  	}
						  ?>
						  >
						  <label class="form-check-label" for="pergunta2">
						    Não
						  </label>
						</div>

                    	</div>
			                    
			                <button class="btn btn-success" type="submit">Salvar</button>

                    </form>

			  	</div>			    
			  </div>
			</div>
			<br>
			<div class="card mb-3">
			  <div class="card-body">
			  	<div style="text-align:center;">
			  		<a href="#" class="btn btn-success"
			  		id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#img" aria-controls="offcanvasRight">Atualizar Foto</a>	

				


			  		<a href="#" class="btn btn-success"
			  		id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
			  		>Visualizar Currículo</a>
			  	</div>			    
			  </div>
			</div>
			<br>
			<div class="card mb-3">
			  <div class="card-body">
			    <h5 class="card-title">Dados</h5>
			    <p class="card-text">
			    	<ul>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg> <?php echo @$telefone;?></p>

                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                    </svg> <?php echo @$_SESSION['email'];?></p>
                    
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg> <?php echo @$rua;?></p>    
                    
                </ul>
			    </p>
			    <div style="text-align:center;">
			    <a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#dados" aria-controls="offcanvasRight" class="btn btn-primary">Atualizar Dados</a>
			    </div>
			  </div>
			</div>

		

			<br>
			<div class="card mb-3">
			  <div class="card-body">
			    <h5 class="card-title">Escolaridade</h5>
			    <p class="card-text"><?php echo @$grau;?> (<?php echo @$situacao;?>)</p>
			    <div style="text-align:center;">
			    <a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#edu" aria-controls="offcanvasRight" class="btn btn-primary">Atualizar Escolaridade</a>
			    </div>
			  </div>
			</div>

			<br>
			<div class="card mb-3">
			  <div class="card-body">
			    <h5 class="card-title">Experiência</h5>
			    <table class="table">
				  <tbody>
				     
				     <?php foreach ($listarExperiencia as $linha){ ?>
	                    <!--se a sessão for igual ao ID do usuário -->
	                    <?php if($_SESSION['id'] == $linha['idUsuario']) {?>
	                    	<?php include('../../components/form_save_exp.php');?>
	                      <tr>

					      <td><?php echo $linha['empresa'];?></td>
					      <td>
					      	<a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#saveexp<?php echo $linha['idExperiencia'];?>" aria-controls="offcanvasRight" class="btn btn-primary">
						      	<svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
			                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
			                    </svg>
					      	</a>
					      	<a data-bs-toggle="modal" data-bs-target="#exampleModalid<?php echo $linha[0];?>" href='#' id="link" type="button" class="btn btn-danger">
						      	<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
								  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
								</svg>
					      	</a>
					      </td>
					      </tr>


					      <div class="modal fade" id="exampleModalid<?php echo $linha[0];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: red; color:white;">
                                                <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo excluir?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <?php echo $linha[2];?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">cancelar</button>
                                                <a type="button" class="btn btn-danger" href='../../api/excluir_exp.php?id=<?php echo $linha[0];?>'>excluir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
				      <?php } ?>
                	<?php } ?>
				    
				   
				  </tbody>
				</table>
			    <!--<p class="card-text">Experiência</p>-->
			    <div style="text-align:center;">
			    <a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#cadexp" aria-controls="offcanvasRight" class="btn btn-primary">Cadastrar Experiência</a>
			    </div>
			  </div>
			</div>

			<br>
			<div class="card mb-3">
			  <div class="card-body">
			    <h5 class="card-title">Cursos</h5>
			     <table class="table">
				  <tbody>
				  	   <!--lista-->
	                <?php foreach ($listarCurso as $linha){ ?>
	                    <!--se a sessão for igual ao ID do usuário -->
	                    <?php if($_SESSION['id'] == $linha['idUsuario']) {?>
							<?php include('../../components/form_curso.php');?>
						    
					    <tr>
					     
					      <td><?php echo $linha['curso'];?></td>
					      <td>
					      	<a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#cadcurso<?php echo $linha['idCurso'];?>" aria-controls="offcanvasRight" class="btn btn-primary">
					      	<svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
	                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
	                    </svg>
					      </a>
					      <a data-bs-toggle="modal" data-bs-target="#exampleModalid<?php echo $linha[0];?>" href='#' id="link" type="button" class="btn btn-danger">
						      	<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
								  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
								</svg>
					      	</a>
					      </td>
					      
					    </tr>


					    <div class="modal fade" id="exampleModalid<?php echo $linha[0];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: red; color:white;">
                                                <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo excluir?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <?php echo $linha[2];?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">cancelar</button>
                                                <a type="button" class="btn btn-danger" href='../../api/excluir_curso.php?id=<?php echo $linha[0];?>'>excluir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

					    <?php } ?>
	                <?php } ?>
				   
				  </tbody>
				</table>
			    <div style="text-align:center;">
			    <a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#cadcurso" aria-controls="offcanvasRight" class="btn btn-primary">Cadastrar Cursos</a>
			    </div>
			  </div>
			</div>

			<br>
			<div class="card mb-3">
			  <div class="card-body">
			    <h5 class="card-title">Idioma</h5>
			     <table class="table">
				  <tbody>
				  	<?php foreach ($listarIdioma as $linha){ ?>
                    <!--se a sessão for igual ao ID do usuário -->
                    <?php if($_SESSION['id'] == $linha['idUsuario']) {?>
	                    	<?php include('../../components/form_save_idioma.php');?>

					    <tr>
					     
					      <td><?php echo $linha['idioma'];?></td>
					      <td>
					      	<a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#cadidioma<?php echo $linha['idIdioma'];?>" aria-controls="offcanvasRight" class="btn btn-primary">
					      	<svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
		                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
		                    </svg>
					      </a>
					     <a data-bs-toggle="modal" data-bs-target="#exampleModalid<?php echo $linha[0];?>" href='#' id="link" type="button" class="btn btn-danger">
						      	<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
								  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
								</svg>
					      	</a>
					      </td>
				      
				    </tr>

				    <div class="modal fade" id="exampleModalid<?php echo $linha[0];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: red; color:white;">
                                                <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo excluir?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <?php echo $linha[1];?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">cancelar</button>
                                                <a type="button" class="btn btn-danger" href='../../api/excluir_idioma.php?id=<?php echo $linha[0];?>'>excluir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

				      <?php } ?>
	                <?php } ?>
				   
				   
				  </tbody>
				</table>
			    <div style="text-align:center;">
			    <a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#cadidioma" aria-controls="offcanvasRight" class="btn btn-primary">Cadastrar Idioma</a>
			    </div>
			  </div>
			</div>

			<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="cadidioma" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Idioma</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<form id="form-cad-idioma">
					
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
    
    	</div>
  	</div>
</div>



			<br>
			<div class="card mb-3">
			  <div class="card-body">
			    <h5 class="card-title">Informações Adicionais</h5>
			    <p class="card-text"><?php echo @$info1;?></p>
			    <p class="card-text"><?php echo @$info2;?></p>
			    <p class="card-text"><?php echo @$info3;?></p>
			    <p class="card-text"><?php echo @$info4;?></p>
			    <p class="card-text"><?php echo @$info5;?></p>
			    <p class="card-text"><?php echo @$info6;?></p>
			    <p class="card-text"><?php echo @$info7;?></p>
			    <p class="card-text"><?php echo @$info8;?></p>
			    <p class="card-text"><?php echo @$info9;?></p>
			    <p class="card-text"><?php echo @$info10;?></p>
			    <p class="card-text"><?php echo @$info;?></p>
			    <div style="text-align:center;">
			    <a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#info" aria-controls="offcanvasRight" class="btn btn-primary">Atualizar Informações Adicionais</a>
			    </div>
			  </div>
			</div>

			<br>
			<div class="card mb-3">
			  <div class="card-body">
			    <h5 class="card-title">Objetivo</h5>
			    <p class="card-text"><?php echo @$objetivo?></p>
			    <div style="text-align:center;">
			    <a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#obj" aria-controls="offcanvasRight" class="btn btn-primary">Atualizar Objetivo</a>
			    </div>
			  </div>
			</div>

			

			<br>
			<br>
			<br>


		</section>


		<?php include('../../components/visualizar.html'); ?>
		<?php include('../../components/form-dados.php');?>
		<?php include('../../components/form_edu.php');?>
		<?php include('../../components/form_info.php');?>
		<?php include('../../components/form_obj.php');?>
		<?php include('../../components/form_cad_exp.php');?>
		<?php include('../../components/form_cad_curso.php');?>
		<?php include('../../components/form_cad_idioma.php');?>
		<?php include('foto.php');?>
		<script type="text/javascript" src="../../assets/js/sweetalert2.js"></script>
		<?php 
		if(!empty($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}else{

		}
		
		?>
		<script type="text/javascript" src="../../assets/js/save_dados.js?6"></script>
		<script type="text/javascript" src="../../assets/js/save_curso.js?6"></script>
		<script type="text/javascript" src="../../assets/js/save_cad_exp.js?6"></script>
		<script type="text/javascript" src="../../assets/js/save_cad_idioma.js?6"></script>
		<script type="text/javascript" src="../../assets/js/save_exp.js?6"></script>
		<script type="text/javascript" src="../../assets/js/save_edu.js?6"></script>
		<script type="text/javascript" src="../../assets/js/save_idioma.js?6"></script>
		<script type="text/javascript" src="../../assets/js/save_obj.js?6"></script>
		<script type="text/javascript" src="../../assets/js/save_info.js?6"></script>
		<script type="text/javascript" src="../../assets/bootstrap_js/bootstrap.bundle.min.js?6"></script>
		<script type="text/javascript">


			 function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    	   
    		}

		    function meu_callback(conteudo) {
		        if (!("erro" in conteudo)) {
		            //Atualiza os campos com os valores.
		            document.getElementById('rua').value=(conteudo.logradouro);
		            document.getElementById('bairro').value=(conteudo.bairro);
		            document.getElementById('cidade').value=(conteudo.localidade);
		            document.getElementById('uf').value=(conteudo.uf);
		          
		        } //end if.
		        else {
		            //CEP não Encontrado.
		            limpa_formulário_cep();
		             Swal.fire({
			              text: 'CEP não encontrado.',
			              icon: 'error',
			              showCancelButton: false,
			              confirmButtonColor: '#3085d6',
			              confirmButtonText: 'Fechar'
			            });
		            
		        }
		    }
		        
		    function pesquisacep(valor) {


		        //Nova variável "cep" somente com dígitos.
		        var cep = valor.replace(/\D/g, '');

		        //Verifica se campo cep possui valor informado.
		        if (cep != "") {

		            //Expressão regular para validar o CEP.
		            var validacep = /^[0-9]{8}$/;

		            //Valida o formato do CEP.
		            if(validacep.test(cep)) {

		                //Preenche os campos com "..." enquanto consulta webservice.
		                document.getElementById('rua').value="...";
		                document.getElementById('bairro').value="...";
		                document.getElementById('cidade').value="...";
		                document.getElementById('uf').value="...";
		           

		                //Cria um elemento javascript.
		                var script = document.createElement('script');

		                //Sincroniza com o callback.
		                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

		                //Insere script no documento e carrega o conteúdo.
		                document.body.appendChild(script);

		            } //end if.
		            else {
		                //cep é inválido.
		                limpa_formulário_cep();
		                 Swal.fire({
			              text: 'Formato de CEP inválido.',
			              icon: 'error',
			              showCancelButton: false,
			              confirmButtonColor: '#3085d6',
			              confirmButtonText: 'Fechar'
			            });
		               
		            }
		        } //end if.
		        else {
		            //cep sem valor, limpa formulário.
		            limpa_formulário_cep();
		        }
		    };
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
		     function showContent2() {
		        element = document.getElementById("content2");
		        check = document.getElementById("sit");
		        if (check.checked) {
		            element.style.display='none';
		        }
		        else {
		            element.style.display='block';
		        }
		    }
		</script>
		
		
	</body>
</html>