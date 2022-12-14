<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="conta" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Dados</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<form id="form-cad">
			    <div class="right-cad">
			        <div class="card-cad">
			        	<div class="textfield">
			                <label id="campo" for="nomecad">Nome</label>
			                <input value="<?php echo $nome?>" type="text" name="nomecad" minlength="9" id="nomecad" placeholder="Digite seu nome completo" requerid>
			            </div>
			            <div class="textfield">
			                <label id="campo" for="usuariocad">E-mail</label>
			                <input value="<?php echo $email?>" type="email" name="usuariocad" id="usuariocad" placeholder="ex: email@gmail.com" requerid>
			            </div>
			            
							<input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']?>">
               			

			            <button class="btn-cad" id="btn-cad" type="submit">Atualizar</button>
			            
			        </div>
			    </div>
			</form>

            </div>
    
    	</div>
  	</div>
</div>




