<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trampo</title>
		<link rel="stylesheet" type="text/css" href="assets/css/tela_login.css?2">
		<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
		<link rel="stylesheet" type="text/css" href="assets/bootstrap_css/bootstrap.min.css">
	</head>
	<body>

		<div class="main-login">
	        <div class="left-login">
	            <img src="assets/img/trampo.png" class="left-login-img" id="logo" alt="">
	        </div>
	        <form id="form-login">
	            <div class="right-login">
	                <div class="card-login">
	                    <div class="textfield">
	                        <label id="campo" for="usuario">E-mail</label>
	                        <input type="email" name="usuario" id="usuario" placeholder="ex: email@gmail.com" requerid>
	                    </div>
	               
	                    <div class="textfield">      
	                        <label id="campo" for="senha">Senha</label>  
	                        <input type="password" name="senha" minlength="8" id="senha" placeholder="Digite sua senha" requerid>
	                        <br>
	                        <div>
	                        	<input id="campo" type="checkbox" onclick="mostrarOcultarSenha()"> Mostrar senha
	                        </div>
	                    </div>
						

	                    <a id="link" href="esqueci_senha.php">Esqueceu a senha?</a>

	                    <button class="btn-login" id="btn-login" type="submit">Entrar</button>
	                    <a id="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Cadastra-se</a>
	                </div>
	            </div>
	        </form>
    	</div>

    	


		<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
			<div class="offcanvas-header">
				<h5 id="offcanvasRightLabel">Cadastro</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
		    <div class="offcanvas-body">
				<div class="main-cad">   
			        <form id="form-cad">
			            <div class="right-cad">
			                <div class="card-cad">
			                	<div class="textfield">
			                        <label id="campo" for="nomecad">Nome</label>
			                        <input type="text" name="nomecad" minlength="9" id="nomecad" placeholder="Digite seu nome completo" requerid>
			                    </div>
			                    <div class="textfield">
			                        <label id="campo" for="usuariocad">E-mail</label>
			                        <input type="email" name="usuariocad" id="usuariocad" placeholder="ex: email@gmail.com" requerid>
			                    </div>
			                    <div class="textfield">
			                        <label id="campo" for="senhacad">Senha</label>
			                 
			                        <input type="password" minlength="8" name="senhacad" id="senhacad" placeholder="Digite sua senha" onkeyup="validarSenhaForca()" requerid> 
							        <div id="erroSenhaForca"></div> 

			                        <br>
			                        <div>
			                        	<input type="checkbox" onclick="mostrarOcultarSenha1()"> Mostrar senha
			                        </div>  
			                    </div>
			                    <div class="textfield">
			                        <label for="senhacad">Confirmar Senha</label>
			                        <input type="password" minlength="8" name="consenhacad" id="consenhacad" placeholder="Digite novamente sua senha" onkeyup="validarSenhaForca2()" requerid> 
							        <div id="erroSenhaForca2"></div> 

			                        <br>
			                        <div>
			                        	<input type="checkbox" onclick="mostrarOcultarSenha2()"> Mostrar senha
			                        </div>   
			                    </div>
			                    <button class="btn-cad" id="btn-cad" type="submit">Cadastrar</button>
			                    
			                </div>
			            </div>
			        </form>
		    	</div>
		  	</div>
		</div>


		<div style="width: 100%; background: #006eff;" class="offcanvas offcanvas-end" tabindex="-1" id="canvas" aria-labelledby="offcanvasRightLabel">
			<div class="offcanvas-header">
				<h5 id="offcanvasRightLabel"></h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
		    <div class="offcanvas-body">
				<div class="main-cad">         
		            <div class="right-cad">
		                <div class="card-cad">		         
		                   
		                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
							  <div class="carousel-indicators">
							    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
							    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
							  </div>
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="assets/img/img5.png" class="d-block w-100">
							      <br>
							      <br>
							    </div>
							    <div class="carousel-item">
							      <img src="assets/img/img2.png" class="d-block w-100">
							      <br>
							      <br>							    
							    </div>
							    <div class="carousel-item">
							      <img src="assets/img/img3.png" class="d-block w-100">
							      <br>
							      <br>					  
							    </div>
							  </div>
							 
							</div>
 								

		                    <button class="btn-fec" style="color: #006eff;" data-bs-dismiss="offcanvas" aria-label="Close" type="button">começar</button>
		                    
		                </div>
		            </div>			       
		    	</div>
		  	</div>
		</div>


		<script type="text/javascript" src="assets/bootstrap_js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="assets/js/sweetalert2.js"></script>

		<script type="text/javascript" src="assets/js/login.js?12"></script>
		<script type="text/javascript" src="assets/js/cad_user.js"></script>
		<script src="jquery.js"></script>
		<script type="text/javascript">
			
			$(window).on('load',function(){
   			$('#canvas').offcanvas('show'); });


   			function validarSenhaForca(){
				var senha = document.getElementById('senhacad').value;
				var forca = 0;

				if((senha.length >= 4) && (senha.length <= 7)){
					forca += 10;
				}else if(senha.length > 7){
					forca += 25;
				}

				mostrarForca(forca);
			}

			function mostrarForca(forca){

				if(forca <= 10 ){
					document.getElementById("erroSenhaForca").innerHTML = "<span style='color: #ff0000'>Senha no mínimo 8 caracteres</span>";
				}else if(forca > 10){
					document.getElementById("erroSenhaForca").innerHTML = "<span style='color: green'>Senha OK</span>";
				}
			}

			function validarSenhaForca2(){
				var senha2 = document.getElementById('consenhacad').value;
				var forca2 = 0;

				if((senha2.length >= 4) && (senha2.length <= 7)){
					forca2 += 10;
				}else if(senha2.length > 7){
					forca2 += 25;
				}

				mostrarForca2(forca2);
			}

			function mostrarForca2(forca2){

				if(forca2 <= 10 ){
					document.getElementById("erroSenhaForca2").innerHTML = "<span style='color: #ff0000'>Senha no mínimo 8 caracteres</span>";
				}else if(forca2 > 10){
					document.getElementById("erroSenhaForca2").innerHTML = "<span style='color: green'>Senha OK</span>";
				}
			}

		</script>
	</body>
</html>