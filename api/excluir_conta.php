<?php

    session_start();
    require_once('../classes/Curriculo.php');
    require_once('../classes/Conexao.php');
    include_once("limpar.php");


    $curriculo = new Curriculo();

    $curriculo->setIdUsuario($_SESSION['id']);
    $curriculo->excluirConta($curriculo);
   

    header('Location: ../index.php');

    
?>