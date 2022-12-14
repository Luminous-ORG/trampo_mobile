<?php
	session_start();

    require_once('../classes/Conexao.php');
    require_once('../classes/Curriculo.php');
    include_once("limpar.php");

    $idBanco = "";

    // Pega os dados

    $json = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));

    //Validações
    
    if(empty($json['dia'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Dia!'];
     
    }elseif(empty($json['mes'])){
     
        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Mês!'];

    }elseif(empty($json['ano'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Ano!'];

    }elseif(empty($json['telefone'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Telefone!'];

    }elseif(empty($json['pergunta'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário responder a pergunta!'];

    }elseif(empty($json['cep'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo CEP!'];

    }elseif(empty($json['rua'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Endereço!'];

    }elseif(empty($json['numero'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Número residencial!'];

    }elseif(empty($json['bairro'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Bairro!'];

    }elseif(empty($json['cidade'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Cidade!'];

    }elseif(empty($json['uf'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo UF!'];

    }else{
 
	 	$curriculo = new Curriculo();
		$con = Conexao::conectar();
	    $stmt = $con->prepare("SELECT * FROM tbDadosUsuario WHERE
	    idUsuario = :id ");
	    $stmt->bindValue(":id",$_SESSION['id']);
	    $stmt->execute();

	    while($row = $stmt->fetch(PDO::FETCH_BOTH)){

	        $idBanco = $row['idUsuario'];

	    }
		
        /*
    $json['dia'];
    $json['mes'];
    $json['ano'];
    $json['telefone'];
    $json['pergunta'];
    $json['cep'];
    $json['rua'];
    $json['numero'];
    $json['bairro'];
    $json['cidade'];
    $json['uf'];*/

	    if($idBanco == null){
	         
	        $curriculo->setIdUsuario($_SESSION['id']);
	        $curriculo->setDia($json['dia']);
	        $curriculo->setMes($json['mes']);
	        $curriculo->setAno($json['ano']);
	        $curriculo->setTelefone($json['telefone']);
	        $curriculo->setTrabalhou($json['pergunta']);
	        $curriculo->setCep($json['cep']);
	        $curriculo->setEndereco($json['rua']);
	        $curriculo->setNumero($json['numero']);
	        $curriculo->setBairro($json['bairro']);
	        $curriculo->setCidade($json['cidade']);
	        $curriculo->setUf($json['uf']);
	        $curriculo->salvarDados($curriculo);
	     	
	    	$retorna = ['status' => true, 'msg' => 'Dados cadastrados com sucesso!'];
	        
	    }else{
	    	        
            $curriculo->setIdUsuario($_SESSION['id']);
            $curriculo->setDia($json['dia']);
            $curriculo->setMes($json['mes']);
            $curriculo->setAno($json['ano']);
            $curriculo->setTelefone($json['telefone']);
            $curriculo->setTrabalhou($json['pergunta']);
            $curriculo->setCep($json['cep']);
            $curriculo->setEndereco($json['rua']);
            $curriculo->setNumero($json['numero']);
            $curriculo->setBairro($json['bairro']);
            $curriculo->setCidade($json['cidade']);
            $curriculo->setUf($json['uf']);
            $curriculo->alterarDados($curriculo);
        
    		$retorna = ['status' => true, 'msg' => 'Dados atualizados com sucesso!'];

	    }
 
    }


    echo json_encode($retorna);

?>