<?php
session_start();
//controlador do login da view

include '../Model/Model_Semente.php';
 include_once("../conexao1.php");
 
 $id_user         = $_SESSION['usuarioId']; 
 $nome            = $_POST["nome"];
 $descricao       = $_POST["descricao"];
 $tag             = $_POST["tag"];
 $preco           = $_POST["preco"];
 $quantidade      = $_POST["quantidade"];
 $marca           = $_POST["marca"];
 $categoria_id    = $_POST["categoria_id"];

//encaminhar os dados para a Model

 $id = "";
 
 $model = new Model_Semente($nome,$id,$id_user,$descricao,$tag,$preco,$quantidade,$marca,$categoria_id);
 $validacao = $model->cad_sementes();

echo $validacao;

  if($validacao == 1){
	 header("Location:../View/listar_sementes.php");
  }

  //if($validacao == 2){
//	  header("Location:../View/usuario.php"); 
  //}
  //if($validacao != 1 && $validacao != 2){
//	header("Location:../Index.php");
 // }
  
?>