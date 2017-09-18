<?php

class ControleEmpregados{
	
//controlador do empregados
//encaminhar os dados para a Model

function cadastrar($nome, $id, $telefone, $funcao, $cpf, $categoria, $salario){
session_start();
$id_user         = $_SESSION['usuarioId'];
require_once "C:/wamp64/www/Projeto-Pes/View/ViewEmpregado/empregados.php";
require_once "C:/wamp64/www/Projeto-Pes/Model/empregado.php";
include_once "C:/wamp64/www/Projeto-Pes/View/ViewEmpregados.php";
	 
	 $model = new empregado($nome, $id, $id_user, $telefone, $funcao, $cpf, $categoria, $salario);
	 $validacao = $model->cad_empregado();	
	 $obj2 = new ViewEmpregados;
	 return $obj2->exibir($validacao);

	  if($validacao == 1){
		 header("Location:../View/Admin/administrativo.php");
	}

  }

function remove($nome, $id, $telefone, $funcao, $cpf, $categoria, $salario){
session_start();
$id_user         = "";

require_once "C:/wamp64/www/Projeto-Pes/Controller/process_remove_empregado.php";
require_once "C:/wamp64/www/Projeto-Pes/Model/empregado.php";
include_once "C:/wamp64/www/Projeto-Pes/View/ViewEmpregados.php";

//include_once "C:/wamp64/www/Projeto-Pes/Controller/process_remove_empregado.php";

//include "C:/wamp64/www/Projeto-Pes/View/ViewEmpregado/empregados.php";

 $model = new empregado($nome, $id, $id_user, $telefone, $funcao, $cpf, $categoria, $salario);
	 $validacao = $model->remove_empregado();	
	 $obj2 = new ViewEmpregados;
	 return $obj2->exibir($validacao);

	  if($validacao == 1){
		 header("Location:../View/Admin/administrativo.php");
	}
   }

  }
?>