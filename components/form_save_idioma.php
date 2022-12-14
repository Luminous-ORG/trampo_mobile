<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="cadidioma<?php echo $linha['idIdioma'];?>" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Atualizar idioma</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<form id="form-save-idioma" action="../../api/save_idioma.php" method="POST">
					
					<div class="textfield">
                        <label id="campo" for="idioma">Fala mais de um Idioma?</label>
                        <input type="text" name="idioma" id="idioma" placeholder="Digite seu Idioma" value="<?php echo $linha['idioma'];?>" >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="nivel">Qual o nível seu Idioma?</label>
                        <select class="form-select" name="nivel" >
						  <option value="" selected>Escolha uma das opções</option>
						  <option value="Básico"
						   <?php
                              if($linha['nivel'] == 'Básico'){
                                echo 'selected';
                              }else{
                    
                              }

                             ?>
						  >
						  Básico</option>
						  <option value="Intermediário"
							<?php
                              if($linha['nivel'] == 'Intermediário'){
                                echo 'selected';
                              }else{
                    
                              }

                             ?>
						  >
						  Intermediário</option>
						  <option value="Avançado"
						  	<?php
                              if($linha['nivel'] == 'Avançado'){
                                echo 'selected';
                              }else{
                    
                              }

                             ?>
						  >
						  Avançado</option>
						  <option value="Fluente"
						  	<?php
                              if($linha['nivel'] == 'Fluente'){
                                echo 'selected';
                              }else{
                    
                              }

                             ?>
						  >
						  Fluente</option>
						  
						  
						</select>
                    </div>

                    <input type="hidden" value="<?php echo $linha['idIdioma'];?>" name="id" id="id">


					<button class="btn-cad" id="btn-cad" type="submit">Atualizar</button>

				</form>

            </div>
    
    	</div>
  	</div>
</div>

