<?php
	session_start();

    require_once('../classes/Usuario.php');
    require_once('../classes/Conexao.php');
    require_once('../classes/Curriculo.php');
    include_once("limpar.php");

    $id = $_GET['id'];

    $curriculo = new Curriculo();

  	$curriculo->setIdIdioma($id);
  	
    $curriculo->excluirIdioma($curriculo);

 	header('Location: ../views/restrito/perfil.php?alert=2');

?>