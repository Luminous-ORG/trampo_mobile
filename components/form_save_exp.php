<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="saveexp<?php echo $linha['idExperiencia'];?>" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Atualizar Experiência</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<form action="../../api/save_exp.php" method="POST">
                    
                    <div class="textfield">
                        <label id="campo" for="cargo">Qual eras seu Cargo?</label>
                        <input type="text" name="cargo" id="cargo" placeholder="Digite seu cargo" value="<?php echo $linha['cargo'];?>"  >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="empresa">Qual era o nome da Empresa?</label>
                        <input type="text" name="empresa" id="empresa" placeholder="Digite o nome da empresa" value="<?php echo $linha['empresa'];?>" >
                    </div>

                    <label id="campo" for="mesInicio">Quando iniciou?</label>
                    <div class="textfield2">
                                        
                        <input type="number" min="1" max="12" style="width:25%;border: 1px solid #006eff; border-radius: 10px;padding: 15px; margin-right: 10px;" class="mes" value="<?php echo $linha['mesInicio'];?>" name="mesInicio" id="mes" placeholder="ex: 10" >
                        <input type="number" value="<?php echo $linha['anoInicio'];?>" min="1930" max="2022" style="width:29%;border: 1px solid #006eff; border-radius: 10px;padding: 15px;" class="ano" name="anoInicio" id="ano" placeholder="ex: 1980" >
                    
                    </div>
                    <br>

                    <div class="textfield">
                        <div class="form-check">
                          <input class="form-check-input" name="sit" type="checkbox" id="status<?php echo $linha['idExperiencia'];?>" value="Até o momento" onchange="javascript:showContent<?php echo $linha['idExperiencia'];?>()"<?php if($linha['situacao'] == 'Até o momento'){echo 'checked';}else{}?>>
                          <label class="form-check-label" for="flexCheckDefault">
                            Esse é o meu trabalho atual 

                          </label>
                        </div>
                    </div>
                    <br>

                   <div id="content<?php echo $linha['idExperiencia'];?>" style="display: block;">
                        <label id="campo" for="mesSaiu">Quando saiu?</label>              
                        
                        <div class="textfield2">
                                            
                            <input type="number" min="1" max="12" style="width:25%;border: 1px solid #006eff; border-radius: 10px;padding: 15px; margin-right: 10px;" class="mes1" value="<?php echo $linha['mesSaiu'];?>" name="mesSaiu" id="mes" placeholder="ex: 10" >
                            <input type="number" value="<?php echo $linha['anoSaiu'];?>" min="1930" max="2022" style="width:29%;border: 1px solid #006eff; border-radius: 10px;padding: 15px;" class="ano1" name="anoSaiu" id="ano" placeholder="ex: 1980" >
                        
                        </div>
                    </div>

                    <input type="hidden" value="<?php echo $linha['idExperiencia'];?>" name="id" id="id">

                    <button class="btn-cad" id="btn-cad" type="submit">Atualizar</button>
                    <br><br>

                </form>

            </div>
    
    	</div>
  	</div>
</div>




<script>
            function showContent<?php echo $linha['idExperiencia'];?>() {
                element = document.getElementById("content<?php echo $linha['idExperiencia'];?>");
                check = document.getElementById("status<?php echo $linha['idExperiencia'];?>");
                if (check.checked) {
                    element.style.display="none";
                }
                else {
                    element.style.display="block";
                }
            }
</script>

