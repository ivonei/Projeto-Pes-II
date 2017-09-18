<?php
   session_start();
   require_once  "conexao1.php";
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/Login2.css" rel="stylesheet">
      <link href="css/Login.css" rel="stylesheet">
      <!-- <link href="css/exemplo.css" rel="stylesheet"> -->
      <link rel="icon" href="favicon/favicon.ico">
      <title>SHS Início</title>
   </head>
   <body>
      <nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <div class="navbar-header">
               <a class="menu"><i class="fa fa-bars" id="menu_icon"></i></a>
               <a class="navbar-brand" href="#">Sweet Heaven System</a>
            </div>
            <!--navbar-header close-->
            <div class="collapse navbar-collapse drop_menu" id="content_details">
               <ul class="nav navbar-nav">
                  <li><a href="#"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-info-sign"></span> Sobre<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="View/Empresa.php">Empresa</a></li>
                        <li><a href="View/Historia.php">História</a></li>
                     </ul>
                     <!--dropdown-menu close-->
                  </li>
                  <li><a href="View/Contact.php"><span class="glyphicon glyphicon-phone"></span> Contato</a></li>
               </ul>
               <!--nav navbar-nav close-->
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#" data-toggle="modal" data-target="#signup-modal"><span class="glyphicon glyphicon-user"></span> Regristrar</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
               </ul>
               <!--navbar-right close-->
            </div>
            <!--collapse navbar-collapse drop_menu close-->
         </div>
         <!--container-fluid close-->
      </nav>
      <!--navbar navbar-inverse close-->
      <br>
      <br>
      <br>
      <div class = "container">
         <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
               <div class="log-section">
                  <h1>Entre com sua conta</h1>
                  <br>
                  <form class="form-signin" method="POST" action="Controller/valida_login.php">
                     <input type="text" name="usuario" class="form-control" placeholder="Usuário" required autofocus>
                     <input type="password" name="senha" class="form-control" placeholder="Senha" >
                     <input type="submit" name="login" class="login loginmodal-submit" value="Entrar">
                  </form>
                  <p class="text-center text-danger"> 
                     <?php
                        if(isset($_SESSION['loginErro'])){
                         echo $_SESSION['loginErro'];
                         unset ($_SESSION['loginErro']);
                        }
                        ?>
                  </p>
                  <div class="login-help">
                     <a href="#">Registrar-se</a> - <a href="#">Esqueci minha senha</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
         <div class="modal-dialog">
            <div class="log-section">
               <h1>Criar uma nova conta</h1>
               <br>
               <form method="post" action="cad_usuario.php">
                  <input type="text" name="nome" placeholder="Nome">
                  <input type="text" name="email" placeholder="E-mail">
                  <input type="text" name="usuario" placeholder="Usuário">
                  <input type="password" name="senha" placeholder="Criar senha">
                  <input type="password" name="senha" placeholder="Digite a senha novamente">
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
            <!-- <img src="onlinelogomaker-060717-1748-8943.png"/> -->
            <h1>Entre com suas credenciais</h1>
            <p>
            <h3> Criar uma nova conta</h3>
            </p>
            <li><a href="#" data-toggle="modal" data-target="#signup-modal"><span class="glyphicon glyphicon-user"></span> Regristrar</a></li>
            <p> É gratuito e sempre será 
            <p>
            <p>
            <h3>Caso já possua uma conta clique em Entrar no cabeçalho</h3>
            </p> 
            <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
         </div>
         <div class="page-header">
            <h1>Carousel</h1>
         </div>
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
               <li data-target="#carousel-example-generic" data-slide-to="1"></li>
               <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="item active">
                  <img src="Imagem/germinar.jpg" class="img-responsive" alt="First slide">
               </div>
               <div class="item">
                  <img src="Imagem/trator.jpg" class="img-responsive"  alt="Second slide">
               </div>
               <div class="item">
                  <img src="Imagem/tecnocampo.jpg" class="img-responsive" alt="Third slide">
               </div>
               <div class="item">
                  <img src="Imagem/logo.png" class="img-responsive" alt="Forth slide">
               </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <p>Isto é um texto</p>
         <p>Este é outro texto.</p>
      </div>
      <!--container close-->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script src = "js/Login.js"></script>
      <script src="js/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="js/docs.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>
   </body>
</html>