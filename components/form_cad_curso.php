<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="cadcurso" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Curso</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<form id="form-cad">

					<div class="textfield">
                        <label id="campo" for="curso">Nome do curso</label>
                        <input type="text" name="curso" id="curso" placeholder="Digite o nome do curso" value="" >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="instituicao">Nome da Instituição</label>
                        <input type="text" name="instituicao" id="instituicao" placeholder="Digite o nome da Instituição" value="" >
                    </div>


									<div class="textfield">
                        <label id="campo" for="instituicao">Ano de Conclusão</label>
                        <input name="ano" id="ano" value="" class="ano"type="number" min="1930" max="2022" placeholder="Ano ex: 2004" maxlength="4" >
                    </div>

               <input type="hidden" value="" name="id" id="id">

					<button class="btn-cad" id="btn-cad" type="submit">Cadastrar</button>

				</form>

  	</div>
</div>



                 