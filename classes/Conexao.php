<?php

    class Conexao
    {
        public static function conectar()
        {
            
            try{

                $servidor="localhost";
                $banco="bdTrampo";
                $usuario="root";
                $senha="";

                $conexao = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);			
                
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexao->exec("SET CHARACTER SET utf8");
                    
                return $conexao;

                
            }catch(Exception $e){

                echo('ERRO AO CONECTAR: '+$e);

            }
        }
    }

?>