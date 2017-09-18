<?php
session_start();
session_destroy();
//remover os dados
unset($_SESSION['usuarioId'],         
  $_SESSION['usuarioNome'],       
  $_SESSION['usuarioNivelAcesso'],
  $_SESSION['usuarioLogin'],      
  $_SESSION['usuarioSenha']);
  //madar para a home
header("Location: ../Index.php");
?>