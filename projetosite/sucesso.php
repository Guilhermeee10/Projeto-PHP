<?php  include("config.inc.php"); ?>

<?php
$nome = $_POST['nome']; 
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];  
$sexo = $_POST['sexo'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$dados = "INSERT INTO formulario (nome,sobrenome,email,sexo,assunto, mensagem) VALUES ('$nome', '$sobrenome','$email','$sexo','$assunto', '$mensagem')";

$query = mysqli_query($conexao,$dados);
if($query){
    echo "<h4>Dados enviados com sucesso! </h4>";
}else{
 echo "<h4>Não foi possivel enviar o e-mail.</h4>";
    }

?>