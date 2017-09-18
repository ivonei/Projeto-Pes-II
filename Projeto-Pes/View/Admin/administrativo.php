
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Página Administrativa">
<meta name="author" content="Victor Augusto Pozzan e Guilhermee de Oliveira ">
<!--<link rel="icon" href="../../favicon.ico">-->

<title>Administrativo</title>

 <link href="../../css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
<link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="../../theme.css" rel="stylesheet">
<script src="../../js/ie-emulation-modes-warning.js"></script>
</head>

<body>
<?php
include_once("menu_admin.php");
//$link = $_GET["link"];
$pag[1] = "";
$pag[2] = "listar_usuario.php";
$pag[3] = "cad_usuario_adm.php";
$pag[4] = "editar_usuario_adm.php";
$pag[5] = "visual_usuario_adm.php";
$pag[6] = "cad_categoriasementes.php";//sementes
$pag[7] = "listar_cat_sementes.php";
$pag[8] = "editar_cat_semente.php";
$pag[9] = "cad_categoriaagrotoxico.php";//agrotoxico
$pag[10] = "listar_cat_agrotoxico.php";
$pag[11] = "editar_cat_agrotoxico.php";
$pag[12] = "cad_categoriaetiqueta.php";//etiqueta
$pag[13] = "listar_cat_etiqueta.php";
$pag[14] = "editar_cat_etiqueta.php";
$pag[15] = "cad_categoriaembalagem.php";//embalagem
$pag[16] = "listar_cat_embalagem.php";
$pag[17] = "editar_cat_embalagem.php";


 if(isset($_GET['link'])){ 
 $link = $_GET['link']; 
 if(file_exists($pag[$link])){
	 require_once($pag[$link]); 
	 }else{
		 require_once('administrativo.php'); 
		 } 
	}else{
	 require_once('administrativo.php'); }


?>
 <div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
	<h1>Área Administrativa</h1>
	<p>Esta é uma área administrativa do sistema Sweet Heavens System. Caro Administrador aja com responsabilidade, seriedade, sensatez e cuidado sobre suas ações.</p>
  </div>
  <div class="page-header">
	<h1>Nota</h1>
  </div>
  <div class="well">
	<p>Estes dados devem ser preservados e mantidos em segurança!</p>
  </div>


</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
