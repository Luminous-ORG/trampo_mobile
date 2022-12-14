<?php

    session_start();

    include_once("../classes/Conexao.php");
    include_once("limpar.php");

    $dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

    if(empty($dados['usuario'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo E-mail!'];
    
    }elseif(empty($dados['senha'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Senha!'];
    
    }else{

        $con = Conexao::conectar();

        $stmt = $con->prepare("SELECT * FROM tbUsuario WHERE 
        emailUsuario = :e and senhaUsuario = :s");
        $stmt->bindValue(":e", $dados['usuario']);
        $stmt->bindValue(":s", $dados['senha']);
        $stmt->execute();

            $idBanco = '';
            $nomeBanco = '';
            $emailBanco = '';
            $senhaBanco = '';

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){

            $idBanco = $row['idUsuario'];
            $nomeBanco = $row['nomeUsuario'];
            $emailBanco = $row['emailUsuario'];
            $senhaBanco = $row['senhaUsuario'];

        }



        if (($dados['usuario'] == $emailBanco)&& ($dados['senha'] == $senhaBanco)){

            $_SESSION['id'] = $idBanco;
            $_SESSION['nome'] = $nomeBanco;
            $_SESSION['email'] = $emailBanco;
            $_SESSION['senha'] = $senhaBanco;

            $retorna = ['status' => true, 'msg' => 'Login realizado com sucesso!'];
        
        }else{
            $retorna = ['status' => false, 'msg' => 'Erro: E-mail ou Senha incorretos!'];

        }
        
    }

    echo json_encode($retorna);
?>
