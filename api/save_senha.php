<?php
   // session_start();
    
    require_once('../classes/Usuario.php');
    require_once('../classes/Conexao.php');
    include_once("limpar.php");

    // Pega os dados
    $dados = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));

    //Validações
    if(empty($dados['atual'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Senha Atual!'];
    
    }elseif(empty($dados['senhacad'])){
     
        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Nova Senha!'];

    }else{
        
    	if($dados['atual'] == $dados['senhaatual']){

        $usuario = new Usuario();
      
        $usuario->setSenhaUsuario($dados['senhacad']);
        $usuario->setIdUsuario($dados['id']);
        $usuario->alterarSenha($usuario);

        $retorna = ['status' => true, 'msg' => 'Dados atualizados com sucesso!', 'DADOS' => $dados];

        }else{
       	
       	$retorna = ['status' => false, 'msg' => 'Erro: erro confirmar Senha Atual!'];

        }


    }

    echo json_encode($retorna);

?>