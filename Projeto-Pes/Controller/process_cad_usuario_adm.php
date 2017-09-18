<?php
//include '../View/ViewUsuario.php';
//die;


//include '../Model/ModelUsuario.php';
//include '../View/ViewUsuario.php';


class ControleUsuario{


//controlador do login da view


 
//encaminhar os dados para a Model
function cadastrar($nome,$usuario,$id,$senha,$nivel_acesso,$email){



include 'C:/wamp64/www/Projeto/View/ViewUsuario.php';
include "C:/wamp64/www/Projeto/Model/ModelUsuario.php";
	 $model = new ModelUsuario($nome,$usuario,$id,$senha,$nivel_acesso,$email);
	 $validacao = $model->cad_user();

	
$obj2 = new ViewUsuario;
return $obj2->exibir($validacao);







	  if($validacao == 1){
		 header("Location:../View/Admin/administrativo.php");
	  }

  }

  }
?>