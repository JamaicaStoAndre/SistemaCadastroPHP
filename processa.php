<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];
$sql = "inser into usuario (nome, email, profissao) values ('$nome','$email','$profissao')";
$salvar = mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>
