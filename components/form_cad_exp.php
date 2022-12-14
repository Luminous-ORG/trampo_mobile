<div style="width: 100%;" class="offcanvas offcanvas-end" tabindex="-1" id="cadexp" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Experiência</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
    <div class="offcanvas-body">
		<div class="main-cad">   
	
			<form action="../../api/cad_exp2.php" method="POST">
                    
                    <div class="textfield">
                        <label id="campo" for="cargo">Qual eras seu Cargo?</label>
                        <input type="text" name="cargo" id="cargo" placeholder="Digite seu cargo" value=""  >
                    </div>

                    <div class="textfield">
                        <label id="campo" for="empresa">Qual era o nome da Empresa?</label>
                        <input type="text" name="empresa" id="empresa" placeholder="Digite o nome da empresa" value="" >
                    </div>

                    <label id="campo" for="mesInicio">Quando iniciou?</label>
                    <div class="textfield2">
                                        
                        <input type="number" min="1" max="12" style="width:25%;border: 1px solid #006eff; border-radius: 10px;padding: 15px; margin-right: 10px;" class="mes" value="" name="mesInicio" id="mes" placeholder="ex: 10" >
                        <input type="number" value="" min="1930" max="2022" style="width:29%;border: 1px solid #006eff; border-radius: 10px;padding: 15px;" class="ano" name="anoInicio" id="ano" placeholder="ex: 1980" >
                    
                    </div>
                    <br>

                    <div class="textfield">
                        <div class="form-check">
                          <input class="form-check-input" name="sit" type="checkbox" id="sit" value="Até o momento" onchange="javascript:showContent2()">
                          <label class="form-check-label" for="flexCheckDefault">
                            Esse é o meu trabalho atual
                          </label>
                        </div>
                    </div>
                    <br>

                   <div id="content2" style="display: block;">
                        <label id="campo" for="mesSaiu">Quando saiu?</label>              
                        
                        <div class="textfield2">
                                            
                            <input type="number" min="1" max="12" style="width:25%;border: 1px solid #006eff; border-radius: 10px;padding: 15px; margin-right: 10px;" class="mes1" value="" name="mesSaiu" id="mes" placeholder="ex: 10" >
                            <input type="number" value="" min="1930" max="2022" style="width:29%;border: 1px solid #006eff; border-radius: 10px;padding: 15px;" class="ano1" name="anoSaiu" id="ano" placeholder="ex: 1980" >
                        
                        </div>
                    </div>


                    <button class="btn-cad" id="btn-cad" type="submit">Cadastrar</button>
                    <br><br>

                </form>

            </div>
    
    	</div>
  	</div>
</div>

