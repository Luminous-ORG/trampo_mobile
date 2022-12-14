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
        <div class="left-login">
	            <img src="assets/img/trampo.png" class="left-login-img" id="logo" alt="">
	        </div>
	        <form id="senha">
	            <div class="right-login">
	                <div class="card-login">
                                
                        <div class="textfield">
                            <label id="campo" for="novasenha">E-mail</label>
                            <input type="email" name="novasenha" id="novasenha" placeholder="ex: email@gmail.com" requerid>
                        </div>

                        <button class="btn-cad" id="btn-senha" type="submit" name="SendRecupSenha">Enviar</button>
                        <br>

	                    <a id="link" href="index.php">Lembrou? clique aqui para logar</a>

	                </div>
	            </div>
	        </form>
    	</div>

		<script type="text/javascript" src="assets/bootstrap_js/bootstrap.bundle.min.js"></script>

		<script type="text/javascript" src="assets/js/sweetalert2.js"></script>
		<script type="text/javascript" src="assets/js/login.js?12"></script>
        <script type="text/javascript" src="assets/js/cad_user.js"></script>
        <script type="text/javascript" src="senha.js"></script>
	
		
	</body>
</html>