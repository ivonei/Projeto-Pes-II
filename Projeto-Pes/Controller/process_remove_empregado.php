<?php
//controlador do login da view
include 'C:\wamp64\www\Projeto-Pes\Controller\process_controle_empregados.php';


 $id = $_GET["id"];
 $telefone        = ""; 
 $funcao          = "";
 $cpf             = "";
 $categoria       = "";
 $salario         = "";
 $nome            = "";

//encaminhar os dados para a Model
$obj = new ControleEmpregados;
$x = $obj->remove($nome, $id, $telefone, $funcao, $cpf, $categoria, $salario);
?>