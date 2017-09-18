<?php
session_start();
//controlador do login da view

include '../Model/Model_Agrotoxico.php';
 include_once("../conexao1.php");
 
 $id_user         = $_SESSION['usuarioId']; 
 $id 			  = $_POST["id"];
 $nome            = $_POST["nome"];
 $descricao       = $_POST["descricao"];
 $preco           = $_POST["preco"];
 $quantidade      = $_POST["quantidade"];
 $marca           = $_POST["marca"];
 $categoria_id    = $_POST["categoria_id"];

//encaminhar os dados para a Model

 
 $model = new Model_Agrotoxico($nome,$id,$id_user,$descricao,$preco,$quantidade,$marca,$categoria_id);
 $validacao = $model->cad_agro();

echo $validacao;

  if($validacao == 1){
	 header("Location:../View/listar_agrotoxico.php");
  }
  
?>