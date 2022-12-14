<?php
	session_start();

    require_once('../classes/Conexao.php');
    require_once('../classes/Curriculo.php');
    include_once("limpar.php");

    // Pega os dados

    $json = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));

    //Validações
    
    if(empty($json['curso'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Curso!'];
     
    }elseif(empty($json['instituicao'])){
     
        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Instituição!'];

    }elseif(empty($json['ano'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário informar o ano que terminou o curso!'];

    }else{
 
	 	$curriculo = new Curriculo();
	    $con = Conexao::conectar();


		$curriculo->setNomeCurso($json['curso']);
	    $curriculo->setInstituicao($json['instituicao']);
	    $curriculo->setDataConclusaoCurso($json['ano']);
	    $curriculo->setIdUsuario($_SESSION['id']);

	    $curriculo->salvarCurso($curriculo);

	     	
	    $retorna = ['status' => true, 'msg' => 'Dados cadastrados com sucesso!'];
	           
 
    }


    echo json_encode($retorna);

?>