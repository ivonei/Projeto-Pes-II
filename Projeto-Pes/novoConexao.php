<?php
	include "conexao.php";

	$sql = "SELECT * from \"Usuario\"";
	

	
	
	$var = pg_query($conexao, $sql);
	if(!$var){
		echo "Erro";
	}else{
		if(pg_num_rows($var) == 0) {
			echo "Nenhum registo encontrado";
		}else{
			
		echo "Total = ". pg_num_rows($var);
			while ($linha = pg_fetch_array($var)){
				echo $linha["nome"]." ".$linha["telefone"]." ".$linha["cidade"]." ".$linha["id"]."<br>";
			}
		}
	}
	
	?>