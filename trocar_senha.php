<?php

session_start();

include('classes/Conexao.php');

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	if(empty($dados['senhanova'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo senha!'];
    
    }elseif(empty($dados['consenhanova'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Confirmar-Senha!'];
    }else{

        if($dados['senhanova'] != $dados['consenhanova']){
            
            $retorna = ['status' => false, 'msg' => 'Erro: erro ao confirmar senha!'];
        
        }else{


        	$con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbUsuario SET senhaUsuario = ? WHERE idUsuario = ?");
            $stmt->bindValue(1, $dados['senhanova']);  
            $stmt->bindValue(2, $_SESSION['id']);  

            $stmt->execute();

            $retorna = ['status' => true, 'msg' => 'Senha alterada com sucesso!'];


		
		}

    }

    echo json_encode($retorna);

?>