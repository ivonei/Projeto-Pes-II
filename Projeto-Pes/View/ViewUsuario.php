<?php

class ViewUsuario{


	function exibir($dados){


		 if($dados == 1){
		 header("Location:../View/Admin/administrativo.php");
	  }
			return $dados;
	}
}
?>