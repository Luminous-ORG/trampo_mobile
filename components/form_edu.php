<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="edu" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Escolaridade</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<div class="form">

				<form id="form-cad-edu">
						
					<div class="textfield">
                        <label id="campo" for="telefone">Qual seu grau acadêmico?</label>
                        <select class="form-select" name="grau">
						  <option value="" selected>Escolha uma das opções</option>
						  <option value="Ensino Fundamental Incompleto"
						  		<?php
                                    if($grau == 'Ensino Fundamental Incompleto'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Fundamental Incompleto</option>
						  <option value="Ensino Fundamental Completo"
						  		<?php
                                    if($grau == 'Ensino Fundamental Completo'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Fundamental Completo</option>
						  <option value="Ensino Médio Incompleto"
						  		<?php
                                    if($grau == 'Ensino Médio Incompleto'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Médio Incompleto</option>
						  <option value="Ensino Médio Completo"
						  		<?php
                                    if($grau == 'Ensino Médio Completo'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Médio Completo</option>
						  <option value="Ensino Médio Com Técnico"
						  		<?php
                                    if($grau == 'Ensino Médio Com Técnico'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Médio Com Técnico</option>
						  <option value="Ensino Médio pelo EJA"
						  	  	<?php
                                    if($grau == 'Ensino Médio pelo EJA'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Médio pelo EJA</option>
						  <option value="Ensino Médio pelo EJA"
						  	 <?php
                                    if($grau == 'Ensino Fundamental pelo EJA'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Ensino Médio pelo EJA</option>
						</select>
                    </div>
                    <div class="textfield">
                        <label id="campo" for="telefone">Qual sua situação?</label>
                        <select class="form-select" name="status">
						  <option value="" selected>Escolha uma das opções</option>
						  <option value="Cursando"
						  		<?php
                                    if($situacao == 'Cursando'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Estou Cursando</option>
						  <option value="Concluido"
						  		<?php
                                    if($situacao == 'Concluido'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Já concluí o ensino</option>
						  <option value="Não concluí o ensino"
	  							<?php
                                    if($situacao == 'Não concluí o ensino'){
                                        echo'selected';
                                    }else{

                                    }
                                ?>
						  >
						  Não concluí o ensino</option>
						  
						</select>
                    </div>

					<button class="btn-cad" id="btn-cad" type="submit">Atualizar</button>

				</form>

			</div>
    
    	</div>
  	</div>
</div>

