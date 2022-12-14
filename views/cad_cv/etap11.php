<?php
	session_start();
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
		<link rel="stylesheet" type="text/css" href="foto.css">
	</head>
	<body>

		<nav style="background-color: #006eff;" class="navbar fixed-top ">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="etap10.php">
		      <img src="../../assets/img/arrow-left.svg"></a>
		    <a class="navbar-brand" href="#" style="color: white;">Foto</a>
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
				
				<a href="../restrito/index.php"><button type="button" class="btn btn-success">Sim</button></a>
				

			</div>
			<br>
			
				<label>Clique no botão Abaixo para colocar uma foto</label>

			<br><br>
			<div class="form">

                <input type="file" name="imagem" id="imagem"  onchange="isImagem(this)"><br><br>
				<div id="preview"></div>
			    
			              

                	<div class="cont">
                		<button class="btn-cad" id="btn-cad">Cadastrar</button>	
                	</div>
					
				
				<br><br>

			</div>
				

		</section>


		
		<?php include('../../components/visualizar.html'); ?>

		<script type="text/javascript" src="../../assets/js/sweetalert2.js"></script>
		
		<?php 
			if(!empty($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}else{

			}
		
		?>

		<script type="text/javascript" src="../../assets/bootstrap_js/bootstrap.bundle.min.js"></script>

		<script src="jquery.js"></script>
		<script src="crop.js"></script>    
       <script>
        

          function isImagem(i){
           
           var img = i.value.split(".");
           var ext = "."+img.pop();

           if(!ext.match(/\.(gif|jpg|jpeg|tiff|png)$/i)){
              Swal.fire({
            text: 'Erro: não é uma imagem!',
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3086d6',
            confirmButtonText: 'Fechar'
            });
              i.value = '';
              return;
           }

          // alert("OK!");
        }


        // Carregar o espaço para o preview da imagem
        var redimensionar = $('#preview').croppie({
            // Ativar a leitura de orientação para renderizar corretamente a imagem
            enableExif: true,

            // Ativar orientação personalizada
            enableOrientation: true,

            // O recipiente interno do coppie. A parte visível da imagem
            viewport: {
                width: 290,
                height: 290,
                type: 'square'
            },

            // O recipiente externo do cortador
            boundary: {
                width: 300,
                height: 300
            }

        });


        // Executar a instrução quando o usuário selecionar uma imagem
        $('#imagem').on('change', function () {

            // FileReader para ler de forma assincrona o conteúdo dos arquivos
            var reader = new FileReader();

            // onload - Execute após ler o conteúdo



            reader.onload = function (e) {
                redimensionar.croppie('bind', {
                    // Recuperar a imagem base64
                    url: e.target.result
                });
            }

            // O método readAsDataURL é usado para ler o conteúdo do tipo Blob ou File
            reader.readAsDataURL(this.files[0]);

        });

        // Executar a instrução quando o usuário clicar no botão enviar
        $('.btn-cad').on('click', function () {
            redimensionar.croppie('result', {
                type: 'canvas', // Tipo de arquivos permitidos - base64, html, blob
                size: 'viewport' // O tamanho da imagem cortada
            }).then(function (img){
                // Enviar os dados para um arquivo PHP
           
                    $.ajax({
                    url: "../../api/cad_img.php", // Enviar os dados para o arquivo upload.php
                    type: "POST", // Método utilizado para enviar os dados
                    data: { // Dados que deve ser enviado
                        "imagem": img
                    },
                    success: function(){
                        // sweetalert - https://celke.com.br/artigo/como-usar-sweetalert-no-formulario-com-javascript-e-php
                        //alert("Imagem enviada com sucesso!");
                        location.reload('index.php');

                    }
                    });
                
            });
        });

    </script>
	</body>

</html>