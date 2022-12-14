<?php
	session_start();

    require_once('../classes/Conexao.php');
    require_once('../classes/Curriculo.php');
    include_once("limpar.php");

    // Pega os dados

    $json = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));


   // $idioma = limpar($_POST['idioma']);
   // $nivel = limpar($_POST['nivel']);


    //Validações
    
    if(empty($json['idioma'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Idioma!'];
     
    }elseif(empty($json['nivel'])){
     
        $retorna = ['status' => false, 'msg' => 'Erro: necessário informar o nível do seu Idioma'];

    }else{
 
	 	$curriculo = new Curriculo();
	    $con = Conexao::conectar();

		$curriculo->setIdioma($json['idioma']);
        $curriculo->setNivelIdioma($json['nivel']);
        $curriculo->setIdUsuario($_SESSION['id']);
        $curriculo->salvarIdioma($curriculo);

	     	
	    $retorna = ['status' => true, 'msg' => 'Dados cadastrados com sucesso!'];
	           
 
    }


    echo json_encode($retorna);

?>