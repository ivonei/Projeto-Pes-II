<?php
 session_start();
 include_once("conexao1.php");
 $id            = $_POST["id"];
 $nome            = $_POST["nome"];
 $email           = $_POST["email"];
 $usuario         = $_POST["usuario"];
 $senha           = $_POST["senha"];
 $nivel_de_acesso = $_POST["nivel_de_acesso"];

 
 $con=mysqli_connect("localhost","root","") or die ("Erro");
 mysqli_select_db($con,"tcc")or die ("Base dados não encontrada");
// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
 
$query = ("UPDATE usuarios set nome ='$nome', email='$email', login ='$usuario', senha='$senha', nivel_acesso_id='$nivel_de_acesso', modified= NOW() WHERE id='$id'");
mysqli_query($con, $query) or die("Erro ao tentar cadastrar registro");
 
 if(mysqli_affected_rows($con)!=0){
		header("Location: listar_usuario.php");
 }
 ?>
