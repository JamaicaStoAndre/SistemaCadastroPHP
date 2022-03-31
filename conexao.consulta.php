<?php
$hostname = "localhost";
$user = "maykon";
$password = "maykon";
$database = "cadastro";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
    print "Falha na conexão com o Banco de dados";
}else{
	print "Conectou com sucesso";	
}

?>
