<?php
    session_start();
    include 'classes/Conexao.php';

    $con = Conexao::conectar();

    $dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);


    if(empty($dados['codigo'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo!'];
    
    }else{

        $stmt = $con->prepare("SELECT * FROM tbUsuario WHERE 
        recuperar_senha = :e");
        $stmt->bindValue(":e", $dados['codigo']);
        $stmt->execute();

            $idBanco = '';
            $nomeBanco = '';
            $emailBanco = '';
            $codigoBanco = '';

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){

            $idBanco = $row['idUsuario'];
            $nomeBanco = $row['nomeUsuario'];
            $emailBanco = $row['emailUsuario'];
            $codigoBanco = $row['recuperar_senha'];

        }



        if (($dados['codigo'] == $codigoBanco)){

            
            $_SESSION['id'] = $idBanco;
            $_SESSION['emailUsuario'] = $emailBanco;


            $retorna = ['status' => true, 'msg' => 'Código correto!'];

           // header("Location: senha.php");

        
        }else{

            //echo 'Erro: Código incorreto!';
            $retorna = ['status' => false, 'msg' => 'Erro: Código incorreto!'];


        }
    }

    echo json_encode($retorna);
?>