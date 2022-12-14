<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trampo</title>
		<link rel="stylesheet" type="text/css" href="assets/css/tela_login.css?1">
		<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
		<link rel="stylesheet" type="text/css" href="assets/bootstrap_css/bootstrap.min.css">
	</head>
	<body>

		<div class="main-login">

	        <form id="troca">
	            <div class="right-login">
	                <div class="card-login">
	                    <div class="textfield">
	                        <label id="campo" for="usuario">E-mail: <?php echo $_SESSION['emailUsuario']?></label>
	                        <label id="campo" for="usuario">ID: <?php echo $_SESSION['id']?></label>
	                    </div>
	               
	                      <div class="textfield">
	                        <label id="campo" for="senhanova">Nova Senha</label>
	                        <input type="password" minlength="8" name="senhanova" id="senhanova" placeholder="Digite sua senha" requerid> 
	                        <br>
	                        <div>
	                        	<input type="checkbox" onclick="mostrarOcultarSenha1()"> Mostrar senha
	                        </div>  
	                    </div>
	                    <div class="textfield">
	                        <label for="senhanova">Confirmar Nova Senha</label>
	                        <input type="password" minlength="8" name="consenhanova" id="consenhanova" placeholder="Digite novamente sua senha" requerid> 
	                        <br>
	                        <div>
	                        	<input type="checkbox" onclick="mostrarOcultarSenha2()"> Mostrar senha
	                        </div>   
	                    </div>

	                    <button class="btn-login" id="btn-login" type="submit">Alterar senha</button>

	                     <a id="link" href="index.php">Lembrou? clique aqui para logar</a>

	                   
	                </div>
	            </div>
	        </form>
    	</div>




		<script>
		
		function mostrarOcultarSenha1(){
			var senha = document.getElementById("senhanova");
			if(senha.type == "password"){
				senha.type = "text";
			}else{
				senha.type = "password";
			}
		}

		function mostrarOcultarSenha2(){
			var senha = document.getElementById("consenhanova");
			if(senha.type == "password"){
				senha.type = "text";
			}else{
				senha.type = "password";
			}
		}
		</script>
		<script type="text/javascript" src="assets/bootstrap_js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="assets/js/sweetalert2.js"></script>
		<script type="text/javascript" src="trocar_senha.js"></script>
	
		
	</body>
</html>