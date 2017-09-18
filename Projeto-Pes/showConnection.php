<?php
include "conexao.php"; 

$sql = "SELECTT * FROM tb users WHERE id=1; ";
$resultado = pg_query ($conexao, $sql);
if (!$resultado){
	echo "erro"
}
if (pg_num_rows($resultado)==0){
	echo"nhm registro";
	
}
else{
	while ($linha = pg_fetch_array($resultado)){
	 echo $linha["nome"].$linha["id"].$linha[2];
	}
}
?>