<?php
session_start();
ob_start();
include 'classes/Conexao.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './lib/vendor/autoload.php';
$mail = new PHPMailer(true);

$con = Conexao::conectar();

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


	if(empty($dados['novasenha'])){

        $retorna = ['status' => false, 'msg' => 'Erro: necessário preencher o campo E-mail!'];
    
    }else{
        //var_dump($dados);
        $query_usuario = "SELECT idUsuario, nomeUsuario, emailUsuario 
                    FROM tbUsuario 
                    WHERE emailUsuario =:usuario  
                    LIMIT 1";
        $result_usuario = $con->prepare($query_usuario);
        $result_usuario->bindParam(':usuario', $dados['novasenha'], PDO::PARAM_STR);
        $result_usuario->execute();
    
        if (($result_usuario) and ($result_usuario->rowCount() != 0)) {
            $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
            $chave_recuperar_senha = base64_encode($row_usuario['idUsuario']);
            //echo "Chave $chave_recuperar_senha <br>";
    
            $query_up_usuario = "UPDATE tbUsuario 
                        SET recuperar_senha =:recuperar_senha 
                        WHERE idUsuario =:id 
                        LIMIT 1";
            $result_up_usuario = $con->prepare($query_up_usuario);
            $result_up_usuario->bindParam(':recuperar_senha', $chave_recuperar_senha, PDO::PARAM_STR);
            $result_up_usuario->bindParam(':id', $row_usuario['idUsuario'], PDO::PARAM_INT);
    
            if ($result_up_usuario->execute()) {
                $link = $chave_recuperar_senha;
    
                try {
                    /*$mail->SMTPDebug = SMTP::DEBUG_SERVER;*/
                    $mail->CharSet = 'UTF-8';
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.mailtrap.io';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = '2e0f8b4b98770b';
                    $mail->Password   = '44e3eb7aa67599';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 2525;
    
                    $mail->setFrom('luminousorg.2022@gmail.com', 'Atendimento');
                    $mail->addAddress($row_usuario['emailUsuario'], $row_usuario['nomeUsuario']);
    
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Recuperar senha';
                    $mail->Body    = 'Prezado(a) ' . $row_usuario['nomeUsuario'] .".<br><br>Você solicitou alteração de senha.<br><br>Código de recuperação de senha: <b>$link</b><br><br>Se você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.<br><br>";
                    $mail->AltBody = 'Prezado(a) ' . $row_usuario['nomeUsuario'] ."\n\nVocê solicitou alteração de senha.\n\nCódigo de recuperação de senha:  <b>$link</b> \n\nSe você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.\n\n";
    
                    $mail->send();
    
            		$retorna = ['status' => true, 'msg' => 'E-mail enviado com sucesso!'];

         
                } catch (Exception $e) {
                   // echo "Erro: E-mail não enviado sucesso. Mailer Error: {$mail->ErrorInfo}";
            		$retorna = ['status' => false, 'msg' => 'E-mail não enviado', 'Erro' => $mail->ErrorInfo];

                }
            } else {
               // echo  "<p style='color: #ff0000'>Erro: Tente novamente!</p>";
            	$retorna = ['status' => false, 'msg' => 'Erro: erro ao enviar o E-mail!'];

            }
        } else {
           // echo  "<p style='color: #ff0000'>Erro: Tente novamente!</p>";
            $retorna = ['status' => false, 'msg' => 'Erro: erro ao enviar o E-mail!'];
        }

	}

    echo json_encode($retorna);


?>