<?php
    
    require_once('Conexao.php');

    class Curriculo
    {
        private $idUsuario;
        private $idFoto;
        private $fotoBase64;
        private $idObjetivo;
        private $objetivo;
        private $idDados;
        private $dia;
        private $mes;
        private $ano;
        private $telefone;
        private $trabalhou;
        private $cep;
        private $endereco;
        private $numero;
        private $bairro;
        private $cidade;
        private $uf;
        private $idEducacao;
        private $grauEducacao;
        private $statusEducacao;
        private $mesEducacao;
        private $anoEducacao;
        private $idExperiencia;
        private $cargo;
        private $empresa;
        private $mesInicio;
        private $anoInicio;     
        private $situacao;
        private $mesSaiu;
        private $anoSaiu;
        private $IdHabilidade;
        private $habilidade;
        private $nivelHabilidade;
        private $idCurso;
        private $nomeCurso;
        private $instituicao;
        private $dataConclusaoCurso;
        private $idIdioma;
        private $idioma;
        private $nivelIdioma;
        private $idInfo;
        private $info;
        private $cnhA;
        private $cnhB;
        private $cnhC;
        private $cnhD;
        private $cnhE;
        private $exterior;
        private $deficienteFisico;
        private $disponibilidade;
        private $boaComunicacao;
        private $informatica;


        public function setIdUsuario($idUsuario) { $this->idUsuario = $idUsuario; }
        public function getIdUsuario() { return $this->idUsuario; }
        public function setIdFoto($idFoto) { $this->idFoto = $idFoto; }
        public function getIdFoto() { return $this->idFoto; }
        public function setFotoBase64($fotoBase64) { $this->fotoBase64 = $fotoBase64; }
        public function getFotoBase64() { return $this->fotoBase64; }
        public function setIdObjetivo($idObjetivo) { $this->idObjetivo = $idObjetivo; }
        public function getIdObjetivo() { return $this->idObjetivo; }
        public function setObjetivo($objetivo) { $this->objetivo = $objetivo; }
        public function getObjetivo() { return $this->objetivo; }
        public function setIdDados($idDados) { $this->idDados = $idDados; }
        public function getIdDados() { return $this->idDados; }
        public function setDia($dia) { $this->dia = $dia; }
        public function getDia() { return $this->dia; }
        public function setMes($mes) { $this->mes = $mes; }
        public function getMes() { return $this->mes; }
        public function setAno($ano) { $this->ano = $ano; }
        public function getAno() { return $this->ano; }
        public function setTelefone($telefone) { $this->telefone = $telefone; }
        public function getTelefone() { return $this->telefone; }
        public function setTrabalhou($trabalhou) { $this->trabalhou = $trabalhou; }
        public function getTrabalhou() { return $this->trabalhou; }
        public function setCep($cep) { $this->cep = $cep; }
        public function getCep() { return $this->cep; }
        public function setEndereco($endereco) { $this->endereco = $endereco; }
        public function getEndereco() { return $this->endereco; }
        public function setNumero($numero) { $this->numero = $numero; }
        public function getNumero() { return $this->numero; }
        public function setBairro($bairro) { $this->bairro = $bairro; }
        public function getBairro() { return $this->bairro; }
        public function setCidade($cidade) { $this->cidade = $cidade; }
        public function getCidade() { return $this->cidade; }
        public function setUf($uf) { $this->uf = $uf; }
        public function getUf() { return $this->uf; }
        public function setIdEducacao($idEducacao) { $this->idEducacao = $idEducacao; }
        public function getIdEducacao() { return $this->idEducacao; }
        public function setGrauEducacao($grauEducacao) { $this->grauEducacao = $grauEducacao; }
        public function getGrauEducacao() { return $this->grauEducacao; }
        public function setStatusEducacao($statusEducacao) { $this->statusEducacao = $statusEducacao; }
        public function getStatusEducacao() { return $this->statusEducacao; }
        public function setMesEducacao($mesEducacao) { $this->mesEducacao = $mesEducacao; }
        public function getMesEducacao() { return $this->mesEducacao; }
        public function setAnoEducacao($anoEducacao) { $this->anoEducacao = $anoEducacao; }
        public function getAnoEducacao() { return $this->anoEducacao; }
        public function setIdExperiencia($idExperiencia) { $this->idExperiencia = $idExperiencia; }
        public function getIdExperiencia() { return $this->idExperiencia; }
        public function setCargo($cargo) { $this->cargo = $cargo; }
        public function getCargo() { return $this->cargo; }
        public function setEmpresa($empresa) { $this->empresa = $empresa; }
        public function getEmpresa() { return $this->empresa; }
        public function setMesInicio($mesInicio) { $this->mesInicio = $mesInicio; }
        public function getMesInicio() { return $this->mesInicio; }
        public function setAnoInicio($anoInicio) { $this->anoInicio = $anoInicio; }
        public function getAnoInicio() { return $this->anoInicio; }
        public function setMesSaiu($mesSaiu) { $this->mesSaiu = $mesSaiu; }
        public function getMesSaiu() { return $this->mesSaiu; }
        public function setAnoSaiu($anoSaiu) { $this->anoSaiu = $anoSaiu; }
        public function getAnoSaiu() { return $this->anoSaiu; }
        public function setSituacao($situacao) { $this->situacao = $situacao; }
        public function getSituacao() { return $this->situacao; }
        public function setIdHabilidade($IdHabilidade) { $this->IdHabilidade = $IdHabilidade; }
        public function getIdHabilidade() { return $this->IdHabilidade; }
        public function setHabilidade($habilidade) { $this->habilidade = $habilidade; }
        public function getHabilidade() { return $this->habilidade; }
        public function setNivelHabilidade($nivelHabilidade) { $this->nivelHabilidade = $nivelHabilidade; }
        public function getNivelHabilidade() { return $this->nivelHabilidade; }
        public function setIdCurso($idCurso) { $this->idCurso = $idCurso; }
        public function getIdCurso() { return $this->idCurso; }
        public function setNomeCurso($nomeCurso) { $this->nomeCurso = $nomeCurso; }
        public function getNomeCurso() { return $this->nomeCurso; }
        public function setInstituicao($instituicao) { $this->instituicao = $instituicao; }
        public function getInstituicao() { return $this->instituicao; }
        public function setDataConclusaoCurso($dataConclusaoCurso) { $this->dataConclusaoCurso = $dataConclusaoCurso; }
        public function getDataConclusaoCurso() { return $this->dataConclusaoCurso; }
        public function setIdIdioma($idIdioma) { $this->idIdioma = $idIdioma; }
        public function getIdIdioma() { return $this->idIdioma; }
        public function setIdioma($idioma) { $this->idioma = $idioma; }
        public function getIdioma() { return $this->idioma; }
        public function setNivelIdioma($nivelIdioma) { $this->nivelIdioma = $nivelIdioma; }
        public function getNivelIdioma() { return $this->nivelIdioma; }
        public function setIdInfo($idInfo) { $this->idInfo = $idInfo; }
        public function getIdInfo() { return $this->idInfo; }
        public function setInfo($info) { $this->info = $info; }
        public function getInfo() { return $this->info; }
        public function setCnhA($cnhA) { $this->cnhA = $cnhA; }
        public function getCnhA() { return $this->cnhA; }
        public function setCnhB($cnhB) { $this->cnhB = $cnhB; }
        public function getCnhB() { return $this->cnhB; }
        public function setCnhC($cnhC) { $this->cnhC = $cnhC; }
        public function getCnhC() { return $this->cnhC; }
        public function setCnhD($cnhD) { $this->cnhD = $cnhD; }
        public function getCnhD() { return $this->cnhD; }
        public function setCnhE($cnhE) { $this->cnhE = $cnhE; }
        public function getCnhE() { return $this->cnhE; }
        public function setExterior($exterior) { $this->exterior = $exterior; }
        public function getExterior() { return $this->exterior; }
        public function setDeficienteFisico($deficienteFisico) { $this->deficienteFisico = $deficienteFisico; }
        public function getDeficienteFisico() { return $this->deficienteFisico; }
        public function setDisponibilidade($disponibilidade) { $this->disponibilidade = $disponibilidade; }
        public function getDisponibilidade() { return $this->disponibilidade; }
        public function setBoaComunicacao($boaComunicacao) { $this->boaComunicacao = $boaComunicacao; }
        public function getBoaComunicacao() { return $this->boaComunicacao; }
        public function setInformatica($informatica) { $this->informatica = $informatica; }
        public function getInformatica() { return $this->informatica; }

        //salvar
        public function salvarFoto($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("INSERT INTO tbFotoUsuario(foto,idUsuario)
                                    VALUES (?,?)");
            $stmt->bindValue(1, $curriculo->getFotoBase64());
            $stmt->bindValue(2, $curriculo->getIdUsuario());

            $stmt->execute();
        }
        
        public function salvarObjetivo($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("INSERT INTO tbObjetivoUsuario(objetivo,idUsuario)
                                    VALUES (?,?)");
            $stmt->bindValue(1, $curriculo->getObjetivo());
            $stmt->bindValue(2, $curriculo->getIdUsuario());

            $stmt->execute();
        }
        public function salvarDados($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("INSERT INTO tbDadosUsuario(idUsuario,dia,mes,ano,telefone,jaTrabalhou,cep,endereco,numero,bairro,cidade,uf)
                                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bindValue(1, $curriculo->getIdUsuario());
            $stmt->bindValue(2, $curriculo->getDia());
            $stmt->bindValue(3, $curriculo->getMes());
            $stmt->bindValue(4, $curriculo->getAno());
            $stmt->bindValue(5, $curriculo->getTelefone());
            $stmt->bindValue(6, $curriculo->getTrabalhou());
            $stmt->bindValue(7, $curriculo->getCep());
            $stmt->bindValue(8, $curriculo->getEndereco());
            $stmt->bindValue(9, $curriculo->getNumero());
            $stmt->bindValue(10, $curriculo->getBairro());
            $stmt->bindValue(11, $curriculo->getCidade());
            $stmt->bindValue(12, $curriculo->getUf());
            $stmt->execute();
        }
        public function salvarEducacao($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("INSERT INTO tbEducacaoUsuario(grau,situacao,mes,ano,idUsuario)
                                    VALUES (?,?,?,?,?)");
            $stmt->bindValue(1, $curriculo->getGrauEducacao());
            $stmt->bindValue(2, $curriculo->getStatusEducacao());
            $stmt->bindValue(3, $curriculo->getMesEducacao());
            $stmt->bindValue(4, $curriculo->getAnoEducacao());
            $stmt->bindValue(5, $curriculo->getIdUsuario());
           
            $stmt->execute();
        }
        public function salvarExperiencia($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("INSERT INTO tbExperienciaUsuario(cargo,empresa,mesInicio,anoInicio,situacao,mesSaiu,anoSaiu,idUsuario)
                                    VALUES (?,?,?,?,?,?,?,?)");
            $stmt->bindValue(1, $curriculo->getCargo());
            $stmt->bindValue(2, $curriculo->getEmpresa());
            $stmt->bindValue(3, $curriculo->getMesInicio());
            $stmt->bindValue(4, $curriculo->getAnoInicio());
            $stmt->bindValue(5, $curriculo->getSituacao());
            $stmt->bindValue(6, $curriculo->getMesSaiu());
            $stmt->bindValue(7, $curriculo->getAnoSaiu());
            $stmt->bindValue(8, $curriculo->getIdUsuario());
           
            $stmt->execute();
        }
        public function salvarHabilidade($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("INSERT INTO tbHabilidade(habilidade,nivel,idUsuario)
                                    VALUES (?,?,?)");
            $stmt->bindValue(1, $curriculo->getHabilidade());
            $stmt->bindValue(2, $curriculo->getNivelHabilidade());
            $stmt->bindValue(3, $curriculo->getIdUsuario());

            $stmt->execute();
        }
        public function salvarCurso($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("INSERT INTO tbCursoUsuario(curso,instituicao,ano,idUsuario)
                                    VALUES (?,?,?,?)");
            $stmt->bindValue(1, $curriculo->getNomeCurso());
            $stmt->bindValue(2, $curriculo->getInstituicao());
            $stmt->bindValue(3, $curriculo->getDataConclusaoCurso());
            $stmt->bindValue(4, $curriculo->getIdUsuario());

            $stmt->execute();
        }
        public function salvarIdioma($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("INSERT INTO tbIdiomaUsuario(idioma,nivel,idUsuario)
                                    VALUES (?,?,?)");
            $stmt->bindValue(1, $curriculo->getIdioma());
            $stmt->bindValue(2, $curriculo->getNivelIdioma());
            $stmt->bindValue(3, $curriculo->getIdUsuario());

            $stmt->execute();
        
        }
        public function salvarInfo($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("INSERT INTO tbInfo(info1,info2,info3,info4,info5,info6,info7,info8,info9,info10,info11,idUsuario)
                                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bindValue(1, $curriculo->getInfo());
            $stmt->bindValue(2, $curriculo->getCnhA());
            $stmt->bindValue(3, $curriculo->getCnhB());
            $stmt->bindValue(4, $curriculo->getCnhC());
            $stmt->bindValue(5, $curriculo->getCnhD());
            $stmt->bindValue(6, $curriculo->getCnhE());
            $stmt->bindValue(7, $curriculo->getExterior());
            $stmt->bindValue(8, $curriculo->getDeficienteFisico());
            $stmt->bindValue(9, $curriculo->getDisponibilidade());
            $stmt->bindValue(10, $curriculo->getBoaComunicacao());
            $stmt->bindValue(11, $curriculo->getInformatica());
            $stmt->bindValue(12, $curriculo->getIdUsuario());

            $stmt->execute();
        }
       
        //alterar
        public function alterarFoto($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbFotoUsuario SET foto = ? WHERE idUsuario = ?");
            $stmt->bindValue(1, $curriculo->getFotoBase64());
            $stmt->bindValue(2, $curriculo->getIdUsuario());

            $stmt->execute();
        }
        public function alterarObjetivo($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbObjetivoUsuario SET objetivo = ? WHERE idUsuario = ?");
            $stmt->bindValue(1, $curriculo->getObjetivo());
            $stmt->bindValue(2, $curriculo->getIdUsuario());

            $stmt->execute();
        }
        public function alterarDados($curriculo){
            $con = Conexao::conectar();
 
            $stmt = $con->prepare("UPDATE tbDadosUsuario SET dia = ?,mes = ?,ano = ?,telefone = ?,jaTrabalhou = ?,cep = ?,endereco = ?,numero = ?,bairro = ?,cidade = ?,uf = ? WHERE idUsuario = ?");
            $stmt->bindValue(1, $curriculo->getDia());
            $stmt->bindValue(2, $curriculo->getMes());
            $stmt->bindValue(3, $curriculo->getAno());
            $stmt->bindValue(4, $curriculo->getTelefone());
            $stmt->bindValue(5, $curriculo->getTrabalhou());
            $stmt->bindValue(6, $curriculo->getCep());
            $stmt->bindValue(7, $curriculo->getEndereco());
            $stmt->bindValue(8, $curriculo->getNumero());
            $stmt->bindValue(9, $curriculo->getBairro());
            $stmt->bindValue(10, $curriculo->getCidade());
            $stmt->bindValue(11, $curriculo->getUf());
            $stmt->bindValue(12, $curriculo->getIdUsuario());
            $stmt->execute();
        }
        public function alterarEducacao($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbEducacaoUsuario SET grau = ?,situacao = ?,mes = ?,ano = ? WHERE idUsuario = ?");
            $stmt->bindValue(1, $curriculo->getGrauEducacao());
            $stmt->bindValue(2, $curriculo->getStatusEducacao());
            $stmt->bindValue(3, $curriculo->getMesEducacao());
            $stmt->bindValue(4, $curriculo->getAnoEducacao());
            $stmt->bindValue(5, $curriculo->getIdUsuario());
           
            $stmt->execute();
        }
        public function alterarExperiencia($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbExperienciaUsuario SET cargo = ?,empresa = ?,mesInicio = ?,anoInicio = ?,situacao = ?,mesSaiu = ?,anoSaiu = ? WHERE idExperiencia = ?");
            $stmt->bindValue(1, $curriculo->getCargo());
            $stmt->bindValue(2, $curriculo->getEmpresa());
            $stmt->bindValue(3, $curriculo->getMesInicio());
            $stmt->bindValue(4, $curriculo->getAnoInicio());
            $stmt->bindValue(5, $curriculo->getSituacao());
            $stmt->bindValue(6, $curriculo->getMesSaiu());
            $stmt->bindValue(7, $curriculo->getAnoSaiu());
            $stmt->bindValue(8, $curriculo->getIdExperiencia());
           
            $stmt->execute();
        }
        public function alterarHabilidade($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbHabilidade SET habilidade = ?,nivel =? WHERE idHabilidade = ?");
            $stmt->bindValue(1, $curriculo->getHabilidade());
            $stmt->bindValue(2, $curriculo->getNivelHabilidade());
            $stmt->bindValue(3, $curriculo->getIdHabilidade());

            $stmt->execute();
        }
        public function alterarCurso($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbCursoUsuario SET curso = ?,instituicao = ?,ano = ? WHERE idCurso = ?");
            $stmt->bindValue(1, $curriculo->getNomeCurso());
            $stmt->bindValue(2, $curriculo->getInstituicao());
            $stmt->bindValue(3, $curriculo->getDataConclusaoCurso());
            $stmt->bindValue(4, $curriculo->getIdCurso());

            $stmt->execute();
        }
        public function alterarIdioma($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbIdiomaUsuario SET idioma = ?,nivel = ? WHERE idIdioma = ?");
            $stmt->bindValue(1, $curriculo->getIdioma());
            $stmt->bindValue(2, $curriculo->getNivelIdioma());
            $stmt->bindValue(3, $curriculo->getIdIdioma());

            $stmt->execute();
        }
        public function alterarInfo($curriculo){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("UPDATE tbInfo SET info1 = ?, info2 = ?, info3 = ?, info4 = ?, info5 = ?, info6 = ?, info7 = ?, info8 = ?, info9 = ?, info10 = ?, info11 = ? WHERE idUsuario = ?");
            $stmt->bindValue(1, $curriculo->getInfo());
            $stmt->bindValue(2, $curriculo->getCnhA());
            $stmt->bindValue(3, $curriculo->getCnhB());
            $stmt->bindValue(4, $curriculo->getCnhC());
            $stmt->bindValue(5, $curriculo->getCnhD());
            $stmt->bindValue(6, $curriculo->getCnhE());
            $stmt->bindValue(7, $curriculo->getExterior());
            $stmt->bindValue(8, $curriculo->getDeficienteFisico());
            $stmt->bindValue(9, $curriculo->getDisponibilidade());
            $stmt->bindValue(10, $curriculo->getBoaComunicacao());
            $stmt->bindValue(11, $curriculo->getInformatica());
            $stmt->bindValue(12, $curriculo->getIdUsuario());

            $stmt->execute();
        }

        //excluir
        public function excluirConta($curriculo){

            $con = Conexao::conectar();
            $stmt1 = $con->prepare("DELETE FROM tbCursoUsuario where idUsuario = ?");
            $stmt1->bindValue(1, $curriculo->getIdUsuario());
            $stmt1->execute();

            $stmt2 = $con->prepare("DELETE FROM tbDadosUsuario where idUsuario = ?");
            $stmt2->bindValue(1, $curriculo->getIdUsuario());
            $stmt2->execute();

            $stmt3 = $con->prepare("DELETE FROM tbEducacaoUsuario where idUsuario = ?");
            $stmt3->bindValue(1, $curriculo->getIdUsuario());
            $stmt3->execute();

            $stmt4 = $con->prepare("DELETE FROM tbExperienciaUsuario where idUsuario = ?");
            $stmt4->bindValue(1, $curriculo->getIdUsuario());
            $stmt4->execute();

            $stmt5 = $con->prepare("DELETE FROM tbFotoUsuario where idUsuario = ?");
            $stmt5->bindValue(1, $curriculo->getIdUsuario());
            $stmt5->execute();

            $stmt6 = $con->prepare("DELETE FROM tbHabilidade where idUsuario = ?");
            $stmt6->bindValue(1, $curriculo->getIdUsuario());
            $stmt6->execute();

            $stmt7 = $con->prepare("DELETE FROM tbIdiomaUsuario where idUsuario = ?");
            $stmt7->bindValue(1, $curriculo->getIdUsuario());
            $stmt7->execute();

            $stmt8 = $con->prepare("DELETE FROM tbInfo where idUsuario = ?");
            $stmt8->bindValue(1, $curriculo->getIdUsuario());
            $stmt8->execute();

            $stmt9 = $con->prepare("DELETE FROM tbObjetivoUsuario where idUsuario = ?");
            $stmt9->bindValue(1, $curriculo->getIdUsuario());
            $stmt9->execute();

            $stmt10 = $con->prepare("DELETE FROM tbUsuario where idUsuario = ?");
            $stmt10->bindValue(1, $curriculo->getIdUsuario());
            $stmt10->execute();

        }
        public function excluirFoto($curriculo){

        }
        public function excluirObjetivo($curriculo){

        }
        public function excluirDados($curriculo){

        }
        public function excluirEducacao($curriculo){

        }
        public function excluirExperiencia($curriculo){
            $con = Conexao::conectar();
            $stmt = $con->prepare("DELETE FROM tbExperienciaUsuario where idExperiencia = ?");
            $stmt->bindValue(1, $curriculo->getIdExperiencia());
            
            $stmt->execute();
        }
        public function excluirHabilidade($curriculo){
            $con = Conexao::conectar();
            $stmt = $con->prepare("DELETE FROM tbHabilidade where idHabilidade = ?");
            $stmt->bindValue(1, $curriculo->getIdHabilidade());
            
            $stmt->execute();
        }
        public function excluirCurso($curriculo){
            $con = Conexao::conectar();
            $stmt = $con->prepare("DELETE FROM tbCursoUsuario where idCurso = ?");
            $stmt->bindValue(1, $curriculo->getIdCurso());
            
            $stmt->execute();
        }
        public function excluirIdioma($curriculo){
            $con = Conexao::conectar();
            $stmt = $con->prepare("DELETE FROM tbIdiomaUsuario where idIdioma = ?");
            $stmt->bindValue(1, $curriculo->getIdIdioma());
            
            $stmt->execute();
        }
        public function excluirInfo($curriculo){

        }

        //listar
        public function listarFoto(){

        }
        public function listarObjetivo(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT * FROM tbObjetivoUsuario";
            $resultado = $conexao->query($querySelect);
            $listarObjetivo = $resultado->fetchAll();
            return $listarObjetivo;
        }
        public function listarDados(){
           
        }
        public function listarEducacao(){
            
        }
        public function listarExperiencia(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT * FROM tbExperienciaUsuario";
            $resultado = $conexao->query($querySelect);
            $listarExperiencia = $resultado->fetchAll();
            return $listarExperiencia;
        }
        public function listarHabilidade(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT * FROM tbHabilidade";
            $resultado = $conexao->query($querySelect);
            $listarHabilidade = $resultado->fetchAll();
            return $listarHabilidade;
        }
        public function listarCurso(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT * FROM tbCursoUsuario";
            $resultado = $conexao->query($querySelect);
            $listarCurso = $resultado->fetchAll();
            return $listarCurso;
        }
        public function listarIdioma(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT * FROM tbIdiomaUsuario";
            $resultado = $conexao->query($querySelect);
            $listarIdioma = $resultado->fetchAll();
            return $listarIdioma;
        }
        public function listarInfo(){
      
        }

    }

?>