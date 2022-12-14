<?php
	session_start();

    require_once('../classes/Conexao.php');
    require_once('../classes/Curriculo.php');
    include_once("limpar.php");

    $idBanco = "";

    // Pega os dados

    $json = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));


//    $grau = limpar($_POST['grau']);
//    $status = limpar($_POST['status']);

    //Validações
    
    if(empty($json['grau'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário informar seu grau acadêmico!'];
     
    }elseif(empty($json['status'])){
     
        $retorna = ['status' => false, 'msg' => 'Erro: necessário informar sua situação no ensino!'];

    }else{
        
    
 
        $curriculo = new Curriculo();
        $con = Conexao::conectar();
        $stmt = $con->prepare("SELECT * FROM tbEducacaoUsuario WHERE
        idUsuario = :id ");
        $stmt->bindValue(":id",$_SESSION['id']);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){

            $idBanco = $row['idUsuario'];

        }
		

	    if($idBanco == null){
	         
	        $curriculo->setGrauEducacao($json['grau']);
            $curriculo->setStatusEducacao($json['status']);
            $curriculo->setMesEducacao(0);
            $curriculo->setAnoEducacao(0);
            $curriculo->setIdUsuario($_SESSION['id']);
            $curriculo->salvarEducacao($curriculo);
    	     	
	    	$retorna = ['status' => true, 'msg' => 'Dados cadastrados com sucesso!'];
	        
	    }else{
	    	        
            $curriculo->setGrauEducacao($json['grau']);
            $curriculo->setStatusEducacao($json['status']);
            $curriculo->setMesEducacao(0);
            $curriculo->setAnoEducacao(0);
            $curriculo->setIdUsuario($_SESSION['id']);
            $curriculo->alterarEducacao($curriculo);
        
    		$retorna = ['status' => true, 'msg' => 'Dados atualizados com sucesso!'];

	    }
    
 
    }


    echo json_encode($retorna);

?>