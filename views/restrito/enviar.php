<?php 

		session_start();
	require_once("../../classes/Conexao.php");
	$con = Conexao::conectar();

	$idBanco = "";

    // Pega os dados

    $json = filter_input_array(INPUT_GET,FILTER_DEFAULT);


	$hoje = date('d/m/Y');
        
    
 
    		//$retorna = ['status' => true, 'dados' => $json];

    
 
        $con = Conexao::conectar();
        $stmt = $con->prepare("SELECT * FROM tbcadastro WHERE
        idUsuario = :id AND idVaga = :idv");
        $stmt->bindValue(":id",$_SESSION['id']);
        $stmt->bindValue(":idv",$json['idVaga']);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){

            $idBanco = $row['idUsuario'];

        }
		

	    if($stmt->rowCount() > 0){

	    	 $_SESSION['msg'] = "<script> Swal.fire({
            text: 'Você já se candidatou para essa vaga!',
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3086d6',
            confirmButtonText: 'Fechar'
            });
            </script>";
                    

    		$retorna = ['status' => false, 'msg' => 'Você já se candidatou para essa vaga!'];

                header('Location: vagas.php');    	     	
            
	         
	    }else{
	

	         $stmt = $con->prepare("INSERT INTO tbcadastro(idVaga,idUsuario,horarioCadastro) VALUES (?,?,?)");
            $stmt->bindValue(1, $json['idVaga']);
            $stmt->bindValue(2, $json['idUser']);
            $stmt->bindValue(3, $hoje);   

            $stmt->execute();

	
                    $_SESSION['msg'] = "<script> Swal.fire({
                    text: 'Candidatou-se sucesso!',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3086d6',
                    confirmButtonText: 'Fechar'
                    })
                    </script>";

                header('Location: vagas.php');    	     	
	    	$retorna = ['status' => true, 'msg' => 'Candidatou-se sucesso!'];
	        
	    }
    
 
    


    echo json_encode($retorna);

?>
