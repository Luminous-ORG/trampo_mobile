<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="dados" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Dados</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<div class="form">
				<br>
				<form id="form-cad-dados">
					
					<label id="campo" for="usuario">Data de Nascimento
					
					</label>
					<div class="textfield2">
                                        
                        <input type="number" min="1" max="31" style="width:25%;border: 1px solid #006eff; border-radius: 10px;padding: 15px; margin-right: 10px;" class="dia" value="<?php echo @$dia?>" name="dia" id="dia" placeholder="ex: 25" >
                        <input type="number" min="1" max="12" style="width:25%;border: 1px solid #006eff; border-radius: 10px;padding: 15px; margin-right: 10px;" class="mes" value="<?php echo @$mes?>" name="mes" id="mes" placeholder="ex: 10" >
                        <input type="number" value="<?php echo @$ano?>" min="1930" max="2004" style="width:29%;border: 1px solid #006eff; border-radius: 10px;padding: 15px;" class="ano" name="ano" id="ano" placeholder="ex: 1980" >
                    
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
                
					<button class="btn-cad" id="btn-cad" type="submit">Atualizar</button>
					<br><br>

				</form>

			</div>
    
    	</div>
  	</div>
</div>

