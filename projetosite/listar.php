
<?php 
include_once("config.inc.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Listar</title>
        <meta charset="utf-8">
        </head>
    <body>
<?php
$result_usuarios = "SELECT * FROM formulario";
$resultado_usuarios = mysqli_query($conexao, $result_usuarios);

if ($resultado_usuarios) {
    echo "<h1>Lista de Usuários</h1><hr>";
     
    while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
        echo "Id: " . $row_usuario['id'] . "<br>";
        echo "nome: " . $row_usuario['nome'] . "<br>";
        echo "sobrenome: " . $row_usuario['sobrenome'] . "<br>";
        echo "email: " . $row_usuario['email'] . "<br>";
        echo "sexo: " . $row_usuario['sexo'] . "<br>";
        echo "assunto: " . $row_usuario['assunto'] . "<br>";
        echo "mensagem: " . $row_usuario['mensagem'] . "<br><hr>";
    }
} else {
    echo "Erro na execução da consulta: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>