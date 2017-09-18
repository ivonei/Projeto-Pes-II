<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tabela Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <script type="text/javascript" language="javascript" src="js/jquery-1.12.4.js">
  </script>
  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js">
  </script>
  <script type="text/javascript" language="javascript" src="../resources/syntax/shCore.js">
  </script>
  <script type="text/javascript" language="javascript" src="../resources/demo.js">
  </script>
  <script type="text/javascript" language="javascript" class="init">
  
$(document).ready(function() {
  $('#tabela').DataTable( {
    "scrollY":        "200px",
    "scrollCollapse": true,
    "paging":         false
  } );
} );

  </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
<?php
include "mySQL.php";


$nova = "select *  from tb_usuario";
$resultado = $conexao->query($nova);
?>

<table id="tabela" class="display" width="100%" cellspacing="0">
<tr>
  <td class="active">ID</td>
  <td class="success">NOME</td>
  <td class="warning">SOBRENOME</td>
  <td class="info">SENHA</td>
</tr>
<?php
while($res = $resultado->fetch_array()){
//  echo $res[0]." - ".$res[1]." - ".$res[2]. " - ".$res[3]."<br>";


echo "<tr>
  <td class=\"active\">$res[0]</td>
  <td class=\"success\">$res[1]</td>
  <td class=\"warning\">$res[2]</td>
  <td class=\"info\">$res[3]</td>
</tr>";

}
?>
</table>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    
  </body>

</html>