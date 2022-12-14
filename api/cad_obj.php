<?php

	session_start();

    require_once('../classes/Conexao.php');
    require_once('../classes/Curriculo.php');
    include_once("limpar.php");

    // Pega os dados

    $json = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));


    //$objetivo = limpar($_POST['objetivo']);
    $idBanco='';

    //Validações
    
    if(empty($json['objetivo'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário escrever!'];
     
    }else{
        
 
        $curriculo = new Curriculo();
        $con = Conexao::conectar();
        $stmt = $con->prepare("SELECT * FROM tbObjetivoUsuario WHERE
        idUsuario = :id ");
        $stmt->bindValue(":id",$_SESSION['id']);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){

            $idBanco = $row['idUsuario'];

        }
		

	    if($idBanco == null){
	         
	        $curriculo->setObjetivo($json['objetivo']);
            $curriculo->setIdUsuario($_SESSION['id']);
            $curriculo->salvarObjetivo($curriculo);
    	     	
	    	$retorna = ['status' => true, 'msg' => 'Dados cadastrados com sucesso!'];
	        
	    }else{
	    	        
            $curriculo->setObjetivo($json['objetivo']);
            $curriculo->setIdUsuario($_SESSION['id']);
            $curriculo->alterarObjetivo($curriculo);

        
    		$retorna = ['status' => true, 'msg' => 'Dados atualizados com sucesso!'];

	    }
    
 
    }


    echo json_encode($retorna);

?>