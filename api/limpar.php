<?php
    // função para limpar comandos maliciosos
    function limpar($input){
        // sql 
        $var = addslashes($input);
        // xss
        $var = htmlspecialchars($var);
        return $var;
    }

?>