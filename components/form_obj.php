<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="obj" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Objetivo</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<div class="form">

				
				<form id="form-cad-obj">
					
					<div class="textfield">
                        <label id="campo" for="objetivo">Possui um Objetivo?</label>
                        <textarea type="text" name="objetivo" id="objetivo" placeholder="Escreva seu Objetivo" value="" maxlength="5000"><?php echo @$objetivo?></textarea>
                    </div>

					<button class="btn-cad" id="btn-cad" type="submit">Atualizar</button>

				</form>


			</div>
    
    	</div>
  	</div>
</div>

