<?php

class ViewEmpregados{


	function exibir($dados){

		 if($dados == 1){
		 header("Location:../ViewEmpregado/empregados.php");
	  }
			return $dados;
	}
}
?>