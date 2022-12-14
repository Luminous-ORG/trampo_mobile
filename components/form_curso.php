<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="cadcurso<?php echo $linha['idCurso'];?>" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Atualizar Curso</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<form action="../../api/save_curso.php" method="POST">

								<div class="textfield">
                        <label id="campo" for="curso">Nome do curso</label>
                        <input type="text" name="curso" id="curso" placeholder="Digite o nome do curso" value="<?php echo $linha['curso'];?>" >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="instituicao">Nome da Instituição</label>
                        <input type="text" name="instituicao" id="instituicao" placeholder="Digite o nome da Instituição" value="<?php echo $linha['instituicao'];?>" >
                    </div>


									<div class="textfield">
                        <label id="campo" for="instituicao">Ano de Conclusão</label>
                        <input name="ano" id="ano" value="<?php echo $linha['ano'];?>" class="ano"type="number" min="1930" max="2022" placeholder="Ano ex: 2004" maxlength="4" >
                    </div>

               <input type="hidden" value="<?php echo $linha['idCurso'];?>" name="id" id="id">

					<button class="btn-cad" id="btn-cad" type="submit">Atualizar</button>

				</form>

  	</div>
</div>



                 