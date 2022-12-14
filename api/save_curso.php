<?php
	session_start();

    require_once('../classes/Conexao.php');
    require_once('../classes/Curriculo.php');
    include_once("limpar.php");

    // Pega os dados

    $json = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));

    /*
  	$id = $_POST['id'];
    $curso = limpar($_POST['curso']);
    $instituicao = limpar($_POST['instituicao']);
    $ano = limpar($_POST['ano']);*/

    //Validações
    
    if(empty($json['curso'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Curso!'];

        $_SESSION['msg'] = "<script> Swal.fire({
            text: 'Erro: necessário preencher o campo Curso!',
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3086d6',
            confirmButtonText: 'Fechar'
            });
            </script>";
    
        header('Location: ../views/restrito/perfil.php');

     
    }elseif(empty($json['instituicao'])){
     
        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Instituição!'];

        $_SESSION['msg'] = "<script> Swal.fire({
            text: 'Erro: necessário preencher o campo Instituição!',
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3086d6',
            confirmButtonText: 'Fechar'
            });
            </script>";
    
        header('Location: ../views/restrito/perfil.php');

    }elseif(empty($json['ano'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário informar o ano que terminou o curso!'];

        $_SESSION['msg'] = "<script> Swal.fire({
            text: 'Erro: necessário informar o ano que terminou o curso!',
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3086d6',
            confirmButtonText: 'Fechar'
            });
            </script>";
    
        header('Location: ../views/restrito/perfil.php');

    }else{
 
	 	$curriculo = new Curriculo();
	    $con = Conexao::conectar();


		$curriculo->setNomeCurso($json['curso']);
	    $curriculo->setInstituicao($json['instituicao']);
	    $curriculo->setDataConclusaoCurso($json['ano']);
	    $curriculo->setIdCurso($json['id']);

	    $curriculo->alterarCurso($curriculo);

	     	
	    $retorna = ['status' => true, 'msg' => 'Curso atualizado com sucesso!'];
	           
        $_SESSION['msg'] = "<script> Swal.fire({
            text: 'Dados atualizados com sucesso!',
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3086d6',
            confirmButtonText: 'Fechar'
            });
            </script>";

        header('Location: ../views/restrito/perfil.php');

        

    }


    echo json_encode($retorna);

?>