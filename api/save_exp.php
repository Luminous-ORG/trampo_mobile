<?php

session_start();

require_once('../classes/Conexao.php');
require_once('../classes/Curriculo.php');
include_once("limpar.php");

// Pega os dados

$json = filter_input_array(limpar(INPUT_POST,FILTER_DEFAULT));


if($json['mesSaiu']==null){
    $json['anoSaiu'] = null;
    $json['mesSaiu'] = null;
}else{

}

if($json['anoSaiu']==null){
    $json['anoSaiu'] = null;
    $json['mesSaiu'] = null;
}else{

}

if($json['sit'] != null){
    $json['anoSaiu'] = null;
    $json['mesSaiu'] = null;
}else{

}


//Validações

if(empty($json['cargo'])){

    $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Cargo!'];

    $_SESSION['msg'] = "<script> Swal.fire({
        text: 'Erro: necessário preencher o campo Cargo!',
        icon: 'error',
        showCancelButton: false,
        confirmButtonColor: '#3086d6',
        confirmButtonText: 'Fechar'
        });
        </script>";

    header('Location: ../views/restrito/perfil.php');

 
}elseif(empty($json['empresa'])){
 
    $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo Empresa!'];

    $_SESSION['msg'] = "<script> Swal.fire({
        text: 'Erro: necessário preencher o campo Empresa!',
        icon: 'error',
        showCancelButton: false,
        confirmButtonColor: '#3086d6',
        confirmButtonText: 'Fechar'
        });
        </script>";

    header('Location: ../views/restrito/perfil.php');


}elseif(empty($json['mesInicio'])){

    $retorna = ['status' => false, 'msg' => 'Erro: necessário informar o mês que começou na empresa!'];

    $_SESSION['msg'] = "<script> Swal.fire({
        text: 'Erro: necessário informar o mês que começou na empresa!',
        icon: 'error',
        showCancelButton: false,
        confirmButtonColor: '#3086d6',
        confirmButtonText: 'Fechar'
        });
        </script>";

    header('Location: ../views/restrito/perfil.php');


}elseif(empty($json['anoInicio'])){

    $retorna = ['status' => false, 'msg' => 'Erro: necessário informar o ano que começou na empresa!'];

    $_SESSION['msg'] = "<script> Swal.fire({
        text: 'Erro: necessário informar o ano que começou na empresa!',
        icon: 'error',
        showCancelButton: false,
        confirmButtonColor: '#3086d6',
        confirmButtonText: 'Fechar'
        });
        </script>";

    header('Location: ../views/restrito/perfil.php');


}elseif(empty($json['sit'])){


    $curriculo = new Curriculo();
    $con = Conexao::conectar();

           
           $curriculo->setCargo($json['cargo']);
           $curriculo->setEmpresa($json['empresa']);
           $curriculo->setMesInicio($json['mesInicio']);
           $curriculo->setAnoInicio($json['anoInicio']);
           $curriculo->setSituacao("");
           $curriculo->setAnoSaiu($json['anoSaiu']);
           $curriculo->setMesSaiu($json['mesSaiu']);
           $curriculo->setIdExperiencia($json['id']);

           $curriculo->alterarExperiencia($curriculo);
            
           $retorna = ['status' => true, 'msg' => 'Dados atualizador com sucesso!', 'dados' => $json];
       
           $_SESSION['msg'] = "<script> Swal.fire({
            text: 'Dados atualizados com sucesso!',
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3086d6',
            confirmButtonText: 'Fechar'
            });
            </script>";
        
           header('Location: ../views/restrito/perfil.php');
     

}else{

     $curriculo = new Curriculo();
    $con = Conexao::conectar();

        
        $curriculo->setCargo($json['cargo']);
        $curriculo->setEmpresa($json['empresa']);
        $curriculo->setMesInicio($json['mesInicio']);
        $curriculo->setAnoInicio($json['anoInicio']);
        $curriculo->setSituacao($json['sit']);
        $curriculo->setAnoSaiu($json['anoSaiu']);
        $curriculo->setMesSaiu($json['mesSaiu']);
        $curriculo->setIdExperiencia($json['id']);

        $curriculo->alterarExperiencia($curriculo);

   
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