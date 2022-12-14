<?php
    // destruir sessão
    session_start();
    ob_start();
    unset($_SESSION['id'],$_SESSION['nome'],$_SESSION['email'],$_SESSION['senha']);
    session_destroy();
    
    header("Location: ../index.php");

?>