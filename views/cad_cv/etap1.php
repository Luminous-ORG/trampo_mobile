<?php 

	session_start();
	require_once("../../classes/Conexao.php");

    $pergunta ='oii';

    try {
        $con = Conexao::conectar();
        
        $stmt = $con->prepare("SELECT * FROM tbDadosUsuario WHERE
        idUsuario = :id ");
        $stmt->bindValue(":id",$_SESSION['id']);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){

            $dia = $row['dia'];
            $mes = $row['mes'];
            $ano = $row['ano'];
            $telefone = $row['telefone'];
            $pergunta = $row['jaTrabalhou'];
            $cep = $row['cep'];
            $rua = $row['endereco'];
            $numero = $row['numero'];
            $bairro = $row['bairro'];
            $cidade = $row['cidade'];
            $uf = $row['uf'];

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
		    <a class="navbar-brand" href="#">
		      <img src="../../assets/img/arrow-left.svg"></a>
		    <a class="navbar-brand" href="#" style="color: white;">Dados</a>
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
				
				<a href="etap2.php"><button type="button" class="btn btn-success">Sim</button></a>
				
			</div>


			<div class="form">
				<br>
				<form id="form-cad-dados">
					
					<label id="campo" for="usuario">Data de Nascimento
					
					</label>
					<div class="textfield2">
                                        
                        <input type="number" min="1" max="31" style="width:25%;border: 1px solid #006eff; border-radius: 10px;padding: 15px; margin-right: 10px;" class="dia" value="<?php echo @$dia?>" name="dia" id="dia" placeholder="Dia" >
                        <input type="number" min="1" max="12" style="width:25%;border: 1px solid #006eff; border-radius: 10px;padding: 15px; margin-right: 10px;" class="mes" value="<?php echo @$mes?>" name="mes" id="mes" placeholder="Mês" >
                        <input type="number" value="<?php echo @$ano?>" min="1930" max="2004" style="width:29%;border: 1px solid #006eff; border-radius: 10px;padding: 15px;" class="ano" name="ano" id="ano" placeholder="Ano" >
                    
                    </div>

                	<div class="textfield">
                        <label id="campo" for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" placeholder="Digite um número de telefone" value="<?php echo @$telefone?>" maxlength="15" >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="">Você já trabalhou?</label>
                        <div class="form-check">
						  <input class="form-check-input" value="Sim" type="radio" name="pergunta" id="pergunta1" 
						  	<?php
                                if($pergunta == 'Sim'){
                                    echo'checked';
                                }else{

                                }
                            ?>
						  >
						  <label class="form-check-label" for="pergunta1">
						    Sim
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" value="Não" type="radio" name="pergunta" id="pergunta2" 
					  		<?php
                                if($pergunta == 'Não'){
                                    echo'checked';
                                }else{
                                    
                                }
                            ?>
						  >
						  <label class="form-check-label" for="pergunta2">
						    Não
						  </label>
						</div>

                    </div>

                    <div class="textfield">
                        <label id="campo" for="cep">CEP</label>
                        <input placeholder="Ex: 01001-000" name="cep" type="text" id="cep" value="<?php echo @$cep?>" size="10" maxlength="9" onblur="pesquisacep(this.value);" >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="rua">Endereço</label>
                        <input name="rua" type="text" id="rua" size="60" value="<?php echo @$rua?>" placeholder="Digite seu endereço" >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="numero">Número Residencial</label>
                        <input type="number" name="numero" id="numero" value="<?php echo @$numero?>" placeholder="Digite seu número Residencial" >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="">Bairro</label>
                        <input name="bairro" type="text" id="bairro" value="<?php echo @$bairro?>" size="40" placeholder="Digite seu bairro" >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="">Cidade</label>
                        <input name="cidade" type="text" id="cidade" value="<?php echo @$cidade?>" size="40" placeholder="Digite sua cidade" >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="">UF</label>
                        <input name="uf" type="text" id="uf" value="<?php echo @$uf?>" size="2" placeholder="Digite seu estado" >
                    </div>
                
					<button class="btn-cad" id="btn-cad" type="submit">Cadastrar</button>
					<br><br>

				</form>

			</div>
				

		</section>


		<?php include('../../components/visualizar.html'); ?>
		<script type="text/javascript">
			maxNumber(document.querySelector(".dia"));
            maxNumber(document.querySelector(".mes"));
            maxNumber(document.querySelector(".ano"));

            function maxNumber(input)
            {
                input.addEventListener('input', handler);
                input.addEventListener('blur', handler);

                var running = false;

                function handler() {
                    // Para evitar conflito entre o input e o blur
                    if (running) return;
                    
                    // Bloqueia múltiplas chamadas do input e blur
                    running = true;

                    var max = parseFloat(this.getAttribute("max"));
                    
                    // Se o input for maior que max="" ele irá fixa o valor maximo no value
                    if (parseFloat(this.value) > max) this.value = max;
                    
                    // Habilita novamente as chamadas do blur e keyup
                    running = false;
                };
            }
            /* Máscaras ER */
            function mascara(o,f){
                v_obj=o
                v_fun=f
                setTimeout("execmascara()",1)
            }
            function execmascara(){
                v_obj.value=v_fun(v_obj.value)
            }
            function mtel(v){
                v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
                v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
                v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
                return v;
            }
            function id( el ){
                return document.getElementById( el );
            }
            window.onload = function(){
                id('telefone').onkeyup = function(){
                    mascara( this, mtel );
                }
            }
		</script>
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
		<script type="text/javascript" src="../../assets/bootstrap_js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="../../assets/js/cad_dados.js"></script>
		<script type="text/javascript" src="../../assets/js/sweetalert2.js"></script>
	</body>
</html>

