<?php
 session_start();
 //controlador de cadastro
 $nome = $_POST["nome"];
 $email = $_POST["email"];
 $usuario = $_POST["usuario"];
 $senha = $_POST["senha"];
 $nivel_de_acesso = 2;
 //$signin = $_POST["usuario"];
 echo $nome.$email.$usuario.$senha.$nivel_de_acesso;
 $con=mysqli_connect("localhost","root","") or die ("Erro");
 mysqli_select_db($con,"tcc")or die ("Base dados não encontrada");
// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$query = "INSERT INTO usuarios  (nome, email, login, senha, nivel_acesso_id, created) VALUES('$nome', '$email', '$usuario','$senha','$nivel_de_acesso', NOW())";
mysqli_query($con, $query) or die("Erro ao tentar cadastrar registro");

mysqli_close($con);

?>