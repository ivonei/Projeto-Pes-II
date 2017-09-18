<?php

$conectar = mysqli_connect("localhost", "root", "") or die("Erro");


mysqli_select_db($conectar,"tcc")or die ("Base dados não encontrada");



?>