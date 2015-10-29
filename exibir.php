<?php
include ("conexao.php");

$sql= 'SELECT * FROM livros';
$query = $mysqli->query($sql);

while ($dados = $query->fetch_array()) {
	echo utf8_decode('<b>Id: </b>'.$dados['id'].'<br/>');
	echo utf8_decode('<b>Nome:</b>'.$dados['titulo'].'<br/>');
	echo utf8_decode('<b>Sobrenome:</b>'.$dados['descricao'].'<br/>');
	echo "<hr>";
	
	
	
	

}

echo '<br/>';
echo 'Registros encontrados: '.$query->num_rows; 
echo '<br/> <br/>';
?>

<form method="post" action="excluir.php">
	<label for="id">Insira o Id para excluir o livro</label><br/>
		<input type="text" name="id">
			<input type="submit" value="Excluir">


</form>