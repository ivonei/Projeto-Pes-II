<?php
 session_start();
 include_once("conexao1.php");
 $id            = $_GET["id"];
 
 $con=mysqli_connect("localhost","root","") or die ("Erro");
 mysqli_select_db($con,"tcc")or die ("Base dados não encontrada");
// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
 
$query = "DELETE FROM usuarios WHERE id=$id";

mysqli_query($con, $query) or die("Erro ao tentar remover");
 
 if(mysqli_affected_rows($con)!=0){
		header("Location: listar_usuario.php");
 }
 ?>
