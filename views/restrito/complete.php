<?php

require_once("../../classes/Conexao.php");
$con = Conexao::conectar();

$assunto = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);

//SQL para selecionar os registros
$result_msg_cont = ("SELECT * FROM tbVaga WHERE nomeVaga LIKE '%".$assunto."%' ORDER BY nomeVaga ASC LIMIT 7");

//Seleciona os registros
$resultado_msg_cont = $con->prepare($result_msg_cont);
$resultado_msg_cont->execute();

while($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)){
   $data[] = $row_msg_cont['nomeVaga'];
   $data[] = $row_msg_cont['cidade'];
   $data[] = $row_msg_cont['requisitos'];
   $data[] = $row_msg_cont['salario'];
}

echo json_encode($data);