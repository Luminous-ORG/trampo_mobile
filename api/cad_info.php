<?php

	session_start();

    require_once('../classes/Conexao.php');
    require_once('../classes/Curriculo.php');
    include_once("limpar.php");

    // Pega os dados

    $json = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));

    //Validações

    if(empty($json['info']) && empty($json['info1']) && empty($json['info2'])&& empty($json['info3'])&& empty($json['info4'])&& empty($json['info5'])&& empty($json['info6'])&& empty($json['info7'])&& empty($json['info8'])&& empty($json['info9'])&& empty($json['info10'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário escrever!', 'dados' => $json];

            $_SESSION['msg'] = "<script> Swal.fire({
                    text: 'Erro: necessário selecionar ou escrever algo!',
                    icon: 'error',
                    showCancelButton: false,
                    confirmButtonColor: '#3086d6',
                    confirmButtonText: 'Fechar'
                    });
                    </script>";

        header('Location: ../views/cad_cv/etap9.php');
        
    }else{
        


        $idBanco='';
 
        $curriculo = new Curriculo();
        $con = Conexao::conectar();
        $stmt = $con->prepare("SELECT * FROM tbInfo WHERE
        idUsuario = :id ");
        $stmt->bindValue(":id",$_SESSION['id']);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){

            $idBanco = $row['idUsuario'];

        }
		

	    if($idBanco == null){


	        $curriculo->setInfo($json['info']);
            $curriculo->setCnhA($json['info1']);
            $curriculo->setCnhB($json['info2']);
            $curriculo->setCnhC($json['info3']);
            $curriculo->setCnhD($json['info4']);
            $curriculo->setCnhE($json['info5']);
            $curriculo->setExterior($json['info6']);
            $curriculo->setDeficienteFisico($json['info7']);
            $curriculo->setDisponibilidade($json['info8']);
            $curriculo->setBoaComunicacao($json['info9']);
            $curriculo->setInformatica($json['info10']);
            $curriculo->setIdUsuario($_SESSION['id']);
            $curriculo->salvarInfo($curriculo);

            $_SESSION['msg'] = "<script> Swal.fire({
                    text: 'Dados cadastrados com sucesso!',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3086d6',
                    confirmButtonText: 'Fechar'
                    });
                    </script>";

    	     	
	    	$retorna = ['status' => true, 'msg' => 'Dados cadastrados com sucesso!'];

            header('Location: ../views/cad_cv/etap10.php');

	        
	    }else{         
	    	        
            $curriculo->setInfo($json['info']);
            $curriculo->setCnhA($json['info1']);
            $curriculo->setCnhB($json['info2']);
            $curriculo->setCnhC($json['info3']);
            $curriculo->setCnhD($json['info4']);
            $curriculo->setCnhE($json['info5']);
            $curriculo->setExterior($json['info6']);
            $curriculo->setDeficienteFisico($json['info7']);
            $curriculo->setDisponibilidade($json['info8']);
            $curriculo->setBoaComunicacao($json['info9']);
            $curriculo->setInformatica($json['info10']);
            $curriculo->setIdUsuario($_SESSION['id']);
            $curriculo->alterarInfo($curriculo);;
        
    		$retorna = ['status' => true, 'msg' => 'Dados atualizados com sucesso!'];


            $_SESSION['msg'] = "<script> Swal.fire({
                    text: 'Dados atualizados com sucesso!',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3086d6',
                    confirmButtonText: 'Fechar'
                    });
                    </script>";
            
            header('Location: ../views/cad_cv/etap10.php');


	    }
    
 
    }


    echo json_encode($retorna);

?>