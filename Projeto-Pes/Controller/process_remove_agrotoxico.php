<?php
session_start();
//controlador do login da view

include '../Model/Model_Agrotoxico.php';
include_once("../conexao1.php");

 $id = $_GET["id"];
 $id_user         = ""; 
 $nome            = "";
 $descricao       = "";
 $preco           = "";
 $quantidade      = "";
 $marca           = "";
 $categoria_id    = "";

//encaminhar os dados para a Model


 
 $model = new Model_Agrotoxico($nome,$id,$id_user,$descricao,$preco,$quantidade,$marca,$categoria_id);
 $validacao = $model->remove_agro();

echo $validacao;

  if($validacao == 1){
	 header("Location:../View/listar_agrotoxico.php");
  }

?>