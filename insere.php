<?php
include 'conexao.php';
$id=0;
$var_titulo= $_POST['titulo'];
$var_des=$_POST['descricao'];

$sql = $mysqli->prepare("INSERT INTO livros values(?,?,?)");
$sql->bind_param("iss",$id,$var_titulo,$var_des);
$sql->execute();


if($sql){
	echo "Dados inseridos com sucesso <br/>";
	echo utf8_decode("<a href='index.php'>Home</a>  | ");
	echo utf8_decode("<a href='exibir.php'>exibir</a>  | ");
}else{
	echo "Erro";
}
$mysqli->close();
?>


