<?php

    require_once('../classes/Usuario.php');
    require_once('../classes/Conexao.php');
    include_once("limpar.php");

    // Pega os dados
    $dados = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));

    //Validações
    if(empty($dados['usuariocad'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo E-mail!'];
    
    }elseif(empty($dados['senhacad'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Senha!'];
     
    }elseif(empty($dados['nomecad'])){
     
        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Nome!'];

    }elseif(empty($dados['consenhacad'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Confirmar-Senha!'];
         
    }else{
    

        if($dados['senhacad'] != $dados['consenhacad']){
            
            $retorna = ['status' => false, 'msg' => 'Erro: erro ao confirmar senha!'];
        
        }else{

            try{
              
                $usuario = new Usuario();

                $con = Conexao::conectar();
                
                $stmt = $con->prepare("SELECT idUsuario FROM tbUsuario WHERE 
                                        emailUsuario = :e");
                $stmt->bindValue(":e", $dados['usuariocad']);
                $stmt->execute();

                // verifica se o usuário já existe

                if($stmt->rowCount() > 0){
                    
                    $retorna = ['status' => false, 'msg' => 'Erro: esse usuário já está cadastrado!'];
        
            
                }else{

                    $status = "true";
                    
                    $usuario->setNomeUsuario($dados['nomecad']);
                    $usuario->setEmailUsuario($dados['usuariocad']);
                    $usuario->setSenhaUsuario($dados['senhacad']);
                    $usuario->setStatusUsuario($status);
            
                    $usuario->salvarUsuario($usuario);

                    $retorna = ['status' => true, 'msg' => 'Cadastro realizado com sucesso!'];
                    
                }

            }catch(Exception $e){
                echo('ERRO: '+$e);
            }  

        }

    }

    echo json_encode($retorna);

?>