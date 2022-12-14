<?php

    session_start();

    require_once('Conexao.php');

    class Usuario
    {
        private $idUsuario;
        private $nomeUsuario;
        private $emailUsuario;
        private $senhaUsuario;
        private $statusUsuario;

        public function setIdUsuario($idUsuario) { $this->idUsuario = $idUsuario; }
        public function getIdUsuario() { return $this->idUsuario; }

        public function setNomeUsuario($nomeUsuario) { $this->nomeUsuario = $nomeUsuario; }
        public function getNomeUsuario() { return $this->nomeUsuario; }

        public function setEmailUsuario($emailUsuario) { $this->emailUsuario = $emailUsuario; }
        public function getEmailUsuario() { return $this->emailUsuario; }

        public function setSenhaUsuario($senhaUsuario) { $this->senhaUsuario = $senhaUsuario; }
        public function getSenhaUsuario() { return $this->senhaUsuario; }

        public function setStatusUsuario($statusUsuario) { $this->statusUsuario = $statusUsuario; }
        public function getStatusUsuario() { return $this->statusUsuario; }

        
        public function salvarUsuario($usuario){

            $con = Conexao::conectar();
            
            $stmt = $con->prepare("INSERT INTO tbusuario(nomeUsuario, emailUsuario, senhaUsuario, recuperar_senha, status) VALUES (?,?,?,?,?)");
            $stmt->bindValue(1, $usuario->getNomeUsuario());
            $stmt->bindValue(2, $usuario->getEmailUsuario());
            $stmt->bindValue(3, $usuario->getSenhaUsuario());  
            $stmt->bindValue(4, $usuario->getSenhaUsuario());  
            $stmt->bindValue(5, $usuario->getStatusUsuario());  

            $stmt->execute();

            $id = $con->lastInsertId();

            $_SESSION['id'] = $id;
            $_SESSION['nome'] = $usuario->getNomeUsuario();
            $_SESSION['email'] = $usuario->getEmailUsuario();
            $_SESSION['senha'] = $usuario->getSenhaUsuario();
            

        }

        public function alterarUsuario($usuario){
            
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbUsuario SET nomeUsuario = ?, emailUsuario = ? WHERE idUsuario = ?");
            $stmt->bindValue(1, $usuario->getNomeUsuario());
            $stmt->bindValue(2, $usuario->getEmailUsuario()); 
            $stmt->bindValue(3, $usuario->getIdUsuario());  

            $stmt->execute();

        }

        public function alterarSenha($usuario){
            
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbUsuario SET senhaUsuario = ? WHERE idUsuario = ?");
            $stmt->bindValue(1, $usuario->getSenhaUsuario());
            $stmt->bindValue(2, $usuario->getIdUsuario());  

            $stmt->execute();

        }

         public function alterarStatus($usuario){
            
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbUsuario SET status = ? WHERE idUsuario = ?");
            $stmt->bindValue(1, $usuario->getStatusUsuario());
            $stmt->bindValue(2, $usuario->getIdUsuario());  

            $stmt->execute();

        }

        public function listarUsuario(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT * FROM tbUsuario";
            $resultado = $conexao->query($querySelect);
            $listarUsuario = $resultado->fetchAll();
            return $listarUsuario;
        }
    }
   

?>