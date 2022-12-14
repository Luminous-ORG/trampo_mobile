<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="senha" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Atualizar Senha</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<form id="form-senha">
			    <div class="right-cad">
			        <div class="card-cad">
			      
			      		<div class="textfield">
                            <label id="campo" for="senhacad">Senha Atual</label>
                            <input value="" type="password" minlength="8" name="atual" id="atual" placeholder="Digite a Senha Atual" requerid> 
                         
                        </div>

			             <div class="textfield">
                            <label id="campo" for="senhacad">Nova Senha</label>
                            <input value="" type="password" minlength="8" name="senhacad" id="senhacad" placeholder="Digite a Nova Senha" requerid> 
                         
                        </div>
			            
						<input type="hidden" name="senhaatual" id="senhaatual" value="<?php echo $senha?>">
						<input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']?>">
               			

			            <button class="btn-cad" id="btn-cad" type="submit">Atualizar</button>
			            
			        </div>
			    </div>
			</form>

            </div>
    
    	</div>
  	</div>
</div>




