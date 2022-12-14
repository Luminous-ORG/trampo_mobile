<?php
	session_start();

    require_once('../classes/Conexao.php');
    require_once('../classes/Curriculo.php');
    include_once("limpar.php");

    // Pega os dados

    $id = limpar($_POST['id']);
    $idioma = limpar($_POST['idioma']);
    $nivel = limpar($_POST['nivel']);


    //Validações
    
    if(empty($idioma)){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Idioma!'];

        $_SESSION['msg'] = "<script> Swal.fire({
            text: 'Erro: necessário preencher o campo Idioma!',
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3086d6',
            confirmButtonText: 'Fechar'
            });
            </script>";
    
        header('Location: ../views/restrito/perfil.php');
     
    }elseif(empty($nivel)){
     
        $retorna = ['status' => false, 'msg' => 'Erro: necessário informar o nível do seu Idioma!'];

        $_SESSION['msg'] = "<script> Swal.fire({
            text: 'Erro: necessário informar o nível do seu Idioma!',
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

		$curriculo->setIdioma($idioma);
	    $curriculo->setNivelIdioma($nivel);
	    $curriculo->setIdIdioma($id);
	    $curriculo->alterarIdioma($curriculo);
	     	
	    $retorna = ['status' => true, 'msg' => 'Dados atualizados com sucesso!'];

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


