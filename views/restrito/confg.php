<?php
	session_start();
	require_once("../../classes/Conexao.php");
    $con = Conexao::conectar();

    $stmt = $con->prepare("SELECT * FROM tbUsuario WHERE
    idUsuario = :id ");
    $stmt->bindValue(":id", $_SESSION['id']);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_BOTH)){

        $nome = $row['nomeUsuario'];
        $email = $row['emailUsuario'];
        $senha = $row['senhaUsuario'];
    
    }

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
	</head>
	<body>
		
		<nav style="background-color: #006eff;" class="navbar fixed-top ">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" style="color: white;" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg><a>
            <a class="navbar-brand" href="#" style="color: white;">Configurações</a>
            <a class="navbar-brand" href="#" style="color: transparent;">espaço</a>
            
          </div>
        </nav>
		<br><br><br><br><br>
		<section class="container">
			<div class="card mb-3">
			  <div class="card-body">
			    <h5 class="card-title">Dados</h5>
			    <p class="card-text">
			    	<ul>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
	                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
	                </svg> <?php echo $nome;?></p>

                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                    </svg> <?php echo $email;?></p>

					<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
	                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
	                </svg> ID: <?php echo $_SESSION['id'];?></p>    
                    
                </ul>
			    </p>
			    <div style="text-align:center;">
			    <a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#conta" aria-controls="offcanvasRight" class="btn btn-primary">Atualizar Dados</a>

			    <a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#senha" aria-controls="offcanvasRight" class="btn btn-primary">Atualizar Senha</a>
			    </div>
			  </div>
			</div>

			<br>

			<div class="card mb-3">
			  <div class="card-body">
			    <h5 class="card-title">Sair da conta</h5>
			    <p class="card-text">Deseja sair de sua conta?</p>
			    <div style="text-align:center;">
			    <a href="../../api/sair.php" class="btn btn-success">Sair</a>
			    </div>
			  </div>
			</div>
			<br>


			<div class="card mb-3">
			  <div class="card-body">
			    <h5 class="card-title">Excluir Conta</h5>
			    <p class="card-text">Deseja mesmo excluir sua conta?</p>
			    <div style="text-align:center;">
			    <a  data-bs-toggle="modal" data-bs-target="#exampleModalid<?php echo $_SESSION['id'];?>" href='#' id="link" type="button" class="btn btn-danger">Excluir conta</a>
			    </div>
			  </div>
			</div>
		</section>

		 <div class="modal fade" id="exampleModalid<?php echo $_SESSION['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: red; color:white;">
                                                <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo excluir?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            excluir conta
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">cancelar</button>
                                                <a type="button" class="btn btn-danger" href='../../api/excluir_conta.php'>excluir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
		
			<br>
			<br>
			<br>

		<?php include('../../components/form_conta.php');?>
		<?php include('../../components/form-senha.php');?>
		<script type="text/javascript" src="../../assets/js/save_conta.js?4"></script>
		<script type="text/javascript" src="../../assets/bootstrap_js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="../../assets/js/sweetalert2.js"></script>
		<script type="text/javascript">

			const formSenha = document.getElementById('form-senha');

			if(formSenha){
			    formSenha.addEventListener("submit",async (e) =>{
			       
			        e.preventDefault();
			    
			        const dadosForm2 = new FormData(formSenha);

			        const dados = await fetch("../../api/save_senha.php",{
			            method: "POST",
			            body: dadosForm2
			        });
			    
			        const resposta = await dados.json();
			        console.log(resposta);

			        if(resposta['status']){

			            Swal.fire({
			                text: resposta['msg'],
			                icon: 'success',
			                showCancelButton: false,
			                confirmButtonColor: '#3085d6',
			                confirmButtonText: 'Fechar'
			              }).then((result) => {
			                if (result.isConfirmed) {
			                location.reload('perfil.php');
			                 }else{
			                        location.reload('perfil.php');         
			                 }
			              })

			        }else{
			            Swal.fire({
			              text: resposta['msg'],
			              icon: 'error',
			              showCancelButton: false,
			              confirmButtonColor: '#3085d6',
			              confirmButtonText: 'Fechar'
			            });
			        }

			    });
			}
			
		</script>
	</body>
</html>