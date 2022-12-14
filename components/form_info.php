<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="info" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Informações adicionais</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<div class="form">
				<?php

				require_once("../../classes/Conexao.php");

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
				<form action="../../api/save_info.php" method="POST">
					
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
                        <textarea type="text" name="info" id="info" placeholder="Escreva aqui:" value="" maxlength="5000"><?php echo @$info;?></textarea>
                    </div>

					<button class="btn-cad" id="btn-cad" type="submit">Cadastrar</button>

				</form>

			</div>
    
    	</div>
  	</div>
</div>

