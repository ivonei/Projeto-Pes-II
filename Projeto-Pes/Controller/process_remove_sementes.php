<?php
session_start();
//controlador do login da view

include '../Model/Model_Semente.php';
include_once("../conexao1.php");

 $id = $_GET["id"];
 $id_user         = ""; 
 $nome            = "";
 $descricao       = "";
 $tag             = "";
 $preco           = "";
 $quantidade      = "";
 $marca           = "";
 $categoria_id    = "";

//encaminhar os dados para a Model


 
 $model = new Model_Semente($nome,$id,$id_user,$descricao,$tag,$preco,$quantidade,$marca,$categoria_id);
 $validacao = $model->remove_sementes();

echo $validacao;

  if($validacao == 1){
	 header("Location:../View/listar_sementes.php");
  }

?>