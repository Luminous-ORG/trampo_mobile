<?php
   // session_start();
    
    require_once('../classes/Usuario.php');
    require_once('../classes/Conexao.php');
    include_once("limpar.php");

    // Pega os dados
    $dados = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));

    //Validações
    if(empty($dados['usuariocad'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo E-mail!'];
    
    }elseif(empty($dados['nomecad'])){
     
        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Nome!'];

    }else{
        $usuario = new Usuario();
      
        $usuario->setNomeUsuario($dados['nomecad']);
        $usuario->setEmailUsuario($dados['usuariocad']);
        $usuario->setIdUsuario($dados['id']);
        $usuario->alterarUsuario($usuario);

        $retorna = ['status' => true, 'msg' => 'Dados atualizados com sucesso!', 'DADOS' => $dados];

    }

    echo json_encode($retorna);

?>