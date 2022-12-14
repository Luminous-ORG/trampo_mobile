<?php

	session_start();

    require_once('../classes/Usuario.php');
    require_once('../classes/Conexao.php');
    include_once("limpar.php");

    // Pega os dados
    $dados = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));

    try{
      
        $usuario = new Usuario();
            
            $usuario->setStatusUsuario($dados['pergunta']);
        	$usuario->setIdUsuario($_SESSION['id']);
            $usuario->alterarStatus($usuario);

              $_SESSION['msg'] = "<script> Swal.fire({
                    text: 'Dados atualizados com sucesso!',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3086d6',
                    confirmButtonText: 'Fechar'
                    });
                    </script>";

        header('Location: ../views/restrito/perfil.php');

    }catch(Exception $e){
        echo('ERRO: '+$e);
    }  



?>