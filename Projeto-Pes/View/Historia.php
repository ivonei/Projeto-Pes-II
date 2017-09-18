<?php
session_start();
require_once  "../conexao1.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">  
  <link href="../css/bootstrap.min.css" rel="stylesheet">   
  <link href="../css/Login2.css" rel="stylesheet">
  <link href="../css/Login.css" rel="stylesheet">
  <link rel="icon" href="favicon/favicon.ico">
  <title>SHS História</title>
</head>
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="menu"><i class="fa fa-bars" id="menu_icon"></i></a>
      <a class="navbar-brand" href="../Index.php">Sweet Heaven System</a>
    </div><!--navbar-header close-->
    <div class="collapse navbar-collapse drop_menu" id="content_details">
      <ul class="nav navbar-nav">
        <li><a href="../Index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-info-sign"></span> Sobre<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Empresa.php">Empresa</a></li>
            <li><a href="Historia.php">História</a></li>
          </ul><!--dropdown-menu close-->
        </li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-phone"></span> Contato</a></li>
      </ul><!--nav navbar-nav close-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#signup-modal"><span class="glyphicon glyphicon-user"></span> Regristrar</a></li>
        <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
      </ul><!--navbar-right close-->
    </div><!--collapse navbar-collapse drop_menu close-->
  </div><!--container-fluid close-->
</nav><!--navbar navbar-inverse close-->
<br>
<br>
<br>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
    			<div class="log-section">
					<h1>Entre com sua conta</h1><br>
				  <form class="form-signin" method="POST" action="valida_login.php">
					<input type="text" name="usuario" placeholder="Usuário">
					<input type="password" name="senha" placeholder="Senha">
					<input type="submit" name="login" class="login loginmodal-submit" value="Entrar">
				  </form>
					
				  <div class="login-help">
					<a href="#">Registrar-se</a> - <a href="#">Esqueci minha senha</a>
				  </div>
				</div>
			</div>
		  </div>
          
          
          
          
          
<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
    			<div class="log-section">
					<h1>Criar uma nova conta</h1><br>
				  <form>
    				<input type="text" name="name" placeholder="Nome">
                    <input type="text" name="name" placeholder="Sobrenome">
					<input type="password" name="pass" placeholder="Criar senha">
                    <input type="password" name="pass" placeholder="Digite a senha novamente">
					<input type="submit" name="signin" class="login loginmodal-submit" value="Regristrar">
				  </form>
					
				  <div class="login-help">
					 <a href="#">Já possuo uma conta</a>
				  </div>
				</div>
			</div>
		  </div>

<div class="container">
  <div class="jumbotron">
    <h1>Sweet Heavens System</h1> 
    <p> A Sweet Heavens System foi criado em 2016 com um sistema para Desktop, com o objetivo de atender apenas um agricultor, visto que o sistema prosperou muitos outros agricultores quiseram obter o Sweet Heavens System porém com certas modificações, foi em Maio 2017 que surgiu  a oportunidade de criar um sistema online onde todos os agricultores podem ter acesso e customizar sua página de acordo com seu gosto.</p> 
	
  </div>
  <p>Gostou da ideia então compartilhe com seus colegas</p> 
  <p>Este é outro texto.</p> 
</div><!--container close-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src = "../js/Login.js"></script>
</body>
</html>