<?php

    session_start();
    require_once("../classes/Conexao.php");
    require_once("../classes/Curriculo.php");

    $curriculo = new Curriculo();
    $con = Conexao::conectar();


    // Receber a imagem
    $imagem = filter_input(INPUT_POST, 'imagem', FILTER_DEFAULT);
    //var_dump($imagem);

    if($imagem == "data:image/png;base64,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"){

        $_SESSION['msg'] = "<script> Swal.fire({
            text: 'Erro: erro ao cadastrar foto!',
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3086d6',
            confirmButtonText: 'Fechar'
            });
            </script>";

    }else{

            $idBanco="";

            $stmt8 = $con->prepare("SELECT * FROM tbFotoUsuario WHERE
            idUsuario = :id ");
            $stmt8->bindValue(":id",$_SESSION['id']);
            $stmt8->execute();

            while($row = $stmt8->fetch(PDO::FETCH_BOTH)){

                $idBanco = $row['idUsuario'];

                
            }

            if($idBanco == null){

            // Separa as informações da imagem base64 pelo ";"
            list($type, $imagem) = explode(';', $imagem);
            list(, $imagem) = explode(',', $imagem);

            // Desconverter a imagem base64
            $imagem = base64_decode($imagem);

            // Atribuir a extensão da imagem PNG
            $imagem_nome = time() . '.png';

            $pasta = "http://localhost:8080/trampo/assets/img/";

                $caminho = $pasta . $imagem_nome;

                echo $caminho;

                $curriculo->setFotoBase64($caminho);
                $curriculo->setIdUsuario($_SESSION['id']);
                $curriculo->salvarFoto($curriculo);


            // Realizar o upload da imagem
            file_put_contents('../assets/img/' . $imagem_nome, $imagem);

            //echo 'alert("Imagem enviada com sucesso!");';


                    $_SESSION['msg'] = "<script> Swal.fire({
                    text: 'Foto cadastrada com sucesso!',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3086d6',
                    confirmButtonText: 'Fechar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                        window.location = '../restrito/index.php';
                         }else{
                        window.location = '../restrito/index.php';                 
                         }
                      })
                    </script>";

               // header('Location: ../views/restrito/perfil.php');



            }else{

                            // Separa as informações da imagem base64 pelo ";"
            list($type, $imagem) = explode(';', $imagem);
            list(, $imagem) = explode(',', $imagem);

            // Desconverter a imagem base64
            $imagem = base64_decode($imagem);

            // Atribuir a extensão da imagem PNG
            $imagem_nome = time() . '.png';

            $pasta = "http://localhost:8080/trampo/assets/img/";

                $caminho = $pasta . $imagem_nome;

                echo $caminho;

                $curriculo->setFotoBase64($caminho);
                $curriculo->setIdUsuario($_SESSION['id']);
                $curriculo->alterarFoto($curriculo);


            // Realizar o upload da imagem
            file_put_contents('../assets/img/' . $imagem_nome, $imagem);

            //echo 'alert("Imagem enviada com sucesso!");';
                    $_SESSION['msg'] = "<script> Swal.fire({
                    text: 'Foto atualizada com sucesso!',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3086d6',
                    confirmButtonText: 'Fechar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                        window.location = '../restrito/perfil.php';
                         }else{
                        window.location = '../restrito/perfil.php';                 
                         }
                      })
                    </script>";


            

            }
        
    }

    /*
    $formatos = array("png","jpeg","jpg","gif");
    $extensao = pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION);

    if (empty($extensao)) {
        
        $_SESSION['msg'] = "<script> Swal.fire({
            text: 'Erro: erro ao cadastrar foto!',
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3086d6',
            confirmButtonText: 'Fechar'
            });
            </script>";

        header('Location: ../views/cad_cv/etap11.php?');
        
    }else{
        
        //192.168.15.14

        if(in_array($extensao, $formatos)){
            echo "existe";

            $idBanco="";

            $stmt8 = $con->prepare("SELECT * FROM tbFotoUsuario WHERE
            idUsuario = :id ");
            $stmt8->bindValue(":id",$_SESSION['id']);
            $stmt8->execute();

            while($row = $stmt8->fetch(PDO::FETCH_BOTH)){

                $idBanco = $row['idUsuario'];

                
            }

            if($idBanco == null){
                
                
                $pasta = "http://localhost/trampo/assets/img/";
                $pasta2 = "../assets/img/";
                $temporario = $_FILES['imagem']['tmp_name'];
                $novoNovo =uniqid().".$extensao";

                $caminho = $pasta.$novoNovo;

                echo $caminho;

                $curriculo->setFotoBase64($caminho);
                $curriculo->setIdUsuario($_SESSION['id']);
                $curriculo->salvarFoto($curriculo);

                if(move_uploaded_file($temporario,$pasta2.$novoNovo)){
                echo $mensagem[] = "cad";
                
                $_SESSION['msg'] = "<script> Swal.fire({
                    text: 'Foto cadastrada com sucesso!',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3086d6',
                    confirmButtonText: 'Fechar'
                    });
                    </script>";

                header('Location: ../views/restrito/perfil.php');


                }else{
                echo   $mensagem[]= "erro"; 

                $_SESSION['msg'] = "<script> Swal.fire({
                    text: 'Erro: erro ao cadastrar foto!',
                    icon: 'error',
                    showCancelButton: false,
                    confirmButtonColor: '#3086d6',
                    confirmButtonText: 'Fechar'
                    });
                    </script>";
                
                header('Location: ../views/cad_cv/etap11.php');

                }
                
            }else{

                $pasta = "http://localhost/trampo/assets/img/";
                $pasta2 = "../assets/img/";
                $temporario = $_FILES['imagem']['tmp_name'];
                $novoNovo =uniqid().".$extensao";
    
                $caminho = $pasta.$novoNovo;
    
                echo $caminho;
    
                $curriculo->setFotoBase64($caminho);
                $curriculo->setIdUsuario($_SESSION['id']);
                $curriculo->alterarFoto($curriculo);
    
                if(move_uploaded_file($temporario,$pasta2.$novoNovo)){
                echo $mensagem[] = "alt";
                
                $_SESSION['msg'] = "<script> Swal.fire({
                    text: 'Foto atualizada com sucesso!',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3086d6',
                    confirmButtonText: 'Fechar'
                    });
                    </script>";

                header('Location: ../views/restrito/perfil.php');
    
    
                }else
                {
                echo   $mensagem[]= "erro"; 
                
                $_SESSION['msg'] = "<script> Swal.fire({
                    text: 'Erro: erro ao cadastrar foto!',
                    icon: 'error',
                    showCancelButton: false,
                    confirmButtonColor: '#3086d6',
                    confirmButtonText: 'Fechar'
                    });
                    </script>";
                
                header('Location: ../views/cad_cv/etap11.php');
    
                }

            }

        }else{
            //echo "erro";
            $mensagem[] = "formato inválido";

            $_SESSION['msg'] = "<script> Swal.fire({
                text: 'Erro: formato inválido!',
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#3086d6',
                confirmButtonText: 'Fechar'
                });
                </script>";

            header('Location: ../views/cad_cv/etap11.php');

        }
    }
    */

?>