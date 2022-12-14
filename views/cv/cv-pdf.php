<?php
	require_once("../../classes/Conexao.php");
	session_start();
	
	
	$div3='';
	$div1='';
	$div2='';
	  $telefone ='';
	  $endereco  ='';
	 
	  $numero ='';
	 
	  $bairro  ='';
	  $cidade='';
	  $uf  ='';
	 
	  $objetivo  ='';
	 
	  $grau  ='';
	 
	  $situacao  ='';
	 
	  $mes  ='';
	 
	  $ano  ='';
	 
	  $experiencia  ='';
	 
	  $curso  ='';
	 
	  $habilidade ='';
	  $idioma  ='';
	 
	  $foto  ='';
	 
	  	$info ='';
	 	$info1='';
		$info2='';
		$info3='';
		$info4='';
		$info5='';
		$info6='';
		$info7='';
		$info8='';
		$info9='';
		$info10='';

	  $cnhB ='';
	  $cnhC ='';
	 
	  $cnhD  ='';
	 
	 $cnhE  ='';
	 
	  $exterior  ='';
	 
	  $deficiente ='';
	  $viagens  ='';
	 $comunicacao  ='';
	 
	 $informatica  ='';
	 $nomebanco ='';
	 $emailbanco  ='';
	$tituloObjetivo ='';
	
				  $con = Conexao::conectar();
	
				  $stmt = $con->prepare("SELECT * FROM tbDadosUsuario WHERE
				  idUsuario = :id ");
				  $stmt->bindValue(":id", $_SESSION['id']);
				  $stmt->execute();
		  
				  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
		  
					  $telefone .= $row['telefone'];
					  $endereco .= $row['endereco']; 
					  $numero .= $row['numero']; 
					  $bairro .= $row['bairro'];
					  $cidade .= $row['cidade'];
					  $uf .= $row['uf'];
					 
				  }
	
				  $stmt1 = $con->prepare("SELECT * FROM tbObjetivoUsuario WHERE
				  idUsuario = :id ");
				  $stmt1->bindValue(":id", $_SESSION['id']);
				  $stmt1->execute();
		  
				  while($row1 = $stmt1->fetch(PDO::FETCH_BOTH)){
		  
					  $objetivo .= $row1['objetivo'];
					 
					 
				  }
	
				  $stmt2 = $con->prepare("SELECT * FROM tbEducacaoUsuario WHERE
				  idUsuario = :id ");
				  $stmt2->bindValue(":id",$_SESSION['id']);
				  $stmt2->execute();
	  
				  while($row2 = $stmt2->fetch(PDO::FETCH_BOTH)){
	  
					  $grau .= $row2['grau'];
					  $situacao .= $row2['situacao'];
					  $mes .= $row2['mes'];
					  $ano .= $row2['ano'];
	  
				  }
	
	
				  $stmt3 = $con->prepare("SELECT * FROM tbExperienciaUsuario WHERE
				  idUsuario = :id ");
				  $stmt3->bindValue(":id",$_SESSION['id']);
				  $stmt3->execute();
	  
				  while($row3 = $stmt3->fetch(PDO::FETCH_BOTH)){
	  
					  $experiencia .= "<p> ". $row3['cargo']." | ". $row3['empresa']." (" . $row3['anoInicio'] . " - " . $row3['anoSaiu'] . " " . $row3['situacao'] . ")</p><br>";					                             
	  
				  }
	
	
				  $stmt4 = $con->prepare("SELECT * FROM tbCursoUsuario WHERE
				  idUsuario = :id ");
				  $stmt4->bindValue(":id",$_SESSION['id']);
				  $stmt4->execute();
	  
				  while($row4 = $stmt4->fetch(PDO::FETCH_BOTH)){
	  
					  $curso .= "<p>".$row4['curso'].", ".$row4['instituicao']." (".$row4['ano'].")</p>";					                             
	  
				  }
	
				  $stmt5 = $con->prepare("SELECT * FROM tbHabilidade WHERE
				  idUsuario = :id ");
				  $stmt5->bindValue(":id",$_SESSION['id']);
				  $stmt5->execute();
	  
				  while($row5 = $stmt5->fetch(PDO::FETCH_BOTH)){
	  
					$habilidade .="<p> " .$row5['habilidade']. ", " .$row5['nivel']." </p>";
					  
				  }
	
				  $stmt6 = $con->prepare("SELECT * FROM tbIdiomaUsuario WHERE
				  idUsuario = :id ");
				  $stmt6->bindValue(":id",$_SESSION['id']);
				  $stmt6->execute();
	  
				  while($row6 = $stmt6->fetch(PDO::FETCH_BOTH)){
	  
					$idioma .="<p> " .$row6['idioma']. " (" .$row6['nivel'].")</p>";
					  
				  }
	
	
				  $stmt8 = $con->prepare("SELECT * FROM tbFotoUsuario WHERE
				  idUsuario = :id ");
				  $stmt8->bindValue(":id",$_SESSION['id']);
				  $stmt8->execute();
	  
				  while($row7 = $stmt8->fetch(PDO::FETCH_BOTH)){
	  
					$foto .= $row7['foto']; ;
					  
				  }
	
				  
				  
				  $stmt7 = $con->prepare("SELECT * FROM tbInfo WHERE
				  idUsuario = :id ");
				  $stmt7->bindValue(":id",$_SESSION['id']);
				  $stmt7->execute();
	  
				  while($row7 = $stmt7->fetch(PDO::FETCH_BOTH)){
	  
					$info .= " <p>". $row7['info1'] ." </p>";
					$info1 .=" <p>". $row7['info2'] ." </p>";
	                $info2 .=" <p>". $row7['info3'] ." </p>";
	                $info3 .=" <p>". $row7['info4'] ." </p>";
	                $info4 .=" <p>". $row7['info5'] ." </p>";
	                $info5 .=" <p>". $row7['info6'] ." </p>";
	                $info6 .=" <p>". $row7['info7'] ." </p>";
	                $info7 .=" <p>". $row7['info8'] ." </p>";
	                $info8 .=" <p>". $row7['info9'] ." </p>";
	                $info9 .=" <p>". $row7['info10'] ." </p>";
	                $info10 .=" <p>". $row7['info11'] ." </p>";

					  
				  }
					  
	
				  $nomebanco .= $_SESSION['nome'];
				  $emailbanco .= $_SESSION['email'];
	

	if($objetivo == null){
		$tituloObjetivo = "<h2 id='titulo'></h2>";
	}else{
		$tituloObjetivo = "<h2 id='titulo'>Objetivo</h2>";
	}
	
	if($foto == null){
		$foto = 'http://localhost:8080/trampo/assets/img/icon_user.png';
	
	}else{
		
	}
	
		
		$Nome = "
					<td class='user'>
	
							<img class='foto' src='$foto'>
	
							<br>
							<br>
							
	
					</td>
		";
	
		$Contato = "
	
				<td class='contato'>
					
							<h2 id='titulo3'>Contato</h2>
							<br>
							<p>$telefone</p>
							<br>
							<p>$emailbanco</p>
							<br>
							<p>$endereco, $numero, $bairro, $cidade, $uf</p>
					
					</td>
		";
	
	
	
	
		$Formacao = "
	
			  <td class='formacao'>
						
						<h2 id='titulo'>Formação</h2>
						<br>
						<p>$grau ($situacao)</p>
	
					</td>
		";
	
	
	
		if($experiencia == ""){
			$Experiencia = "
			<td>
		
			</td>
			";
		}else{
		$Experiencia = "
	
		<td class='experiencia'>
						
						<h2 id='titulo'>Experiência</h2>
						<br>
						$experiencia
	
					</td>
		";
		}
	
	
	
		if($curso == ""){
			$div2 = "
			
			";
		}else{
		$div2 = "
	
		  <td class='curso'>
						
						<h2 id='titulo'>Cursos</h2>
						<br>
						$curso
	
					</td>
		";
		}
	
	
		
	
		if( 
		$info == "" &&
		$info1 == "" &&
		$info2 == "" &&
		$info3 == "" &&
		$info4 == "" &&
		$info5 == "" &&
		$info6 == "" &&
		$info7 == "" &&
		$info8 == "" &&
		$info9 == "" &&
		$info10 == ""
		){
	
		}else{
			$div3 = "
		
			";
	
		$div3 = "
	
		  <td class='info'>
						
						<h2 id='titulo'>Informações adicionais</h2>
						<br>
						 $info
						 $info1
						 $info2
						 $info3
						 $info4
						 $info5
						 $info6
						 $info7
						 $info8
						 $info9
						 $info10

						 
	
					</td>
		";
		
		}
	
	
		if($idioma == ""){
			$div4 = "
			<td class='idioma'>
						
						
					</td>
			";
		}else{
		$div4 = "
	
			  <td class='idioma'>
						
						<h2 id='titulo3'>Idiomas</h2>
						<br>
						$idioma
	
					</td>
		";
		}
	
	// include autoloader
	require_once("../../libraries/dompdf/autoload.inc.php");
	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	//Criando a Instancia
	$dompdf = new DOMPDF(['enable_remote' => true]);


	// Carrega seu HTML (Conteúdo)
	$dompdf->load_html(
	"
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset='utf-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
			<title>CV</title>
		</head>
		<style type='text/css'>
	
			*{
				margin: 0;
				padding: 0;
				border:0;
	
			}
			body{
				font-family:  Arial, Helvetica, sans-serif;
				color: #283132;
				height:100%;		
				background: linear-gradient(90deg, #FFC0CB 30%, #00FFFF 10%);

			}
			.cabecalho{
				background-color: #006eff;
				height:100%;		
				width: 38%;
			}
			.fundo{
				position: absolute;
			}
			
			
			.foto{
			   background-color: #ddd;
				border-radius: 50%;
				height: 250px;
				object-fit: cover;
				width: 250px;  
				border: 2px solid;
				border-color: #006eff;
				padding: 2px;
			}
			.user{
				padding: 20px;
				width: 20%;
				background-color: #006eff;
			
			}
			.contato{
				background-color: #006eff;
				color:white;
				padding: 20px;
				text-align: left;
			
			}
			.objetivo{
				width: 100vw;        
				padding: 20px;
				text-align: left;
			}
			.experiencia{
				width: 100vw;        	
				padding: 20px;
				text-align: left;
			}
			.formacao{
				width: 100vw;
				padding: 20px;
				text-align: left;
			}
			
			.curso{
				
				padding-top: 20px;
				padding-left: 20px;
				padding-bottom: 20px;
				padding-right: 70px;
				text-align: left;
			}
			.idioma{
				background-color: #006eff;
				color:white;
				 padding-top: 20px;
				padding-left: 20px;
				padding-bottom: 20px;
				padding-right: 70px;
				text-align: left;
			}
			.no{
				background-color: #006eff;
				color:white;
				 padding-top: 20px;
				padding-left: 20px;
				padding-bottom: 20px;
				padding-right: 70px;
				text-align: left;
		
			}
			.info{
				
				padding-top: 20px;
				padding-left: 20px;
				padding-bottom: 20px;
				padding-right: 100px;
				text-align: left;
			}
			#titulo{
				color: #006eff;
			}
			#titulo2{
				color: #006eff;
				margin-top:50px;
				font-size: 30px;
			}
			table{
			border-collapse:collapse;
		
			}
	
		</style>
		<body>
	
	
		<div class='cabecalho'>

		<div class='fundo'>
			
			<table>
		
			
				<tbody>
					$Nome
					<td class='objetivo'>	
						
						<h1 id='titulo2'>$nomebanco</h1>
						<br><br>
						<br><br>
						$tituloObjetivo
						<br>
						<p>$objetivo</p>

					</td>
				</tbody>
				<tbody>
					$Contato
					$Formacao
				</tbody>
				<tbody>
					$div4
					$Experiencia
				</tbody>
				<tbody>
				<th class='no'></th>
					$div2
				</tbody>
				<tbody>
				<th class='no'></th>
					$div3
				</tbody>
		
		
			</table>
	
				
	
		</div>
		</div>
	
		</body>
	</html>
  
    
	   
	"
	);
	
	$dompdf->setPaper('A4', 'portrait'); //landscape	
		
	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"curriculo.pdf", 
		array(
			"Attachment" => true //Para realizar o download somente alterar para true
		)
	);
?>


