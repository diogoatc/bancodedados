<?php

include 'conexao.php';

$id=$_POST['id'];

$sql="DELETE FROM livros WHERE id=$id";
$query= $mysqli->query($sql);

	if(mysqli_query($mysqli, $sql)){
		echo "Deletado com sucesso <br/>";
		echo utf8_decode("<a href='index.php'>Home</a>  | ");
		echo utf8_decode("<a href='exibir.php'>exibir</a>  | ");
		
		}else{
			echo "Erro ao deletar dados ".$mysqli->error;
		}

		$mysqli->close();
		
		
		
		?>
		
		