<?php
session_start();
//controlador do login da view

include '../Model/ModelUsuario.php';

$nome="";
$id="";
$login = $_POST['usuario']; //login
$senha = $_POST['senha'];   //senha
$nivel_acesso="";

//encaminhar os dados para a Model
 
 $model = new ModelUsuario($nome,$id,$login,$senha,$nivel_acesso);
 $validacao = $model->validaDados();

echo $validacao;

  if($validacao == 1){
	 header("Location:../View/Admin/administrativo.php");
  }
  if($validacao == 2){
	  header("Location:../View/usuario.php"); 
  }
  if($validacao != 1 && $validacao != 2){
	header("Location:../Index.php");
  }
  
?>