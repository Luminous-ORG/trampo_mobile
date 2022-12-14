<link rel="stylesheet" type="text/css" href="../../assets/css/reset.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/cad_cv.css?10">
<link rel="stylesheet" type="text/css" href="../../assets/css/menu.css">
<link rel="stylesheet" type="text/css" href="../../assets/bootstrap_css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="foto.css">


				<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="img" aria-labelledby="offcanvasRightLabel">
									<div class="offcanvas-header">
							<h5 id="offcanvasRightLabel">Atualizar Foto</h5>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
					    <div class="offcanvas-body">
							<div class="main-cad">   
						
								<div class="form">

					                <input type="file" name="imagem" id="imagem"  onchange="isImagem(this)"><br><br>
									<div id="preview"></div>
								    
								              

					                	<div class="cont">
					                		<button class="btn-cad1" id="btn-cad1">Cadastrar</button>	
					                	</div>
										
									
									<br><br>

								</div>
					    
					    	</div>
					  	</div>
					</div>


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
        $('.btn-cad1').on('click', function () {
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