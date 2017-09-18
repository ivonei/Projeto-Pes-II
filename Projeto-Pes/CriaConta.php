<!DOCTYPE html>
<html lang="pt-br">
	<head>
	   <meta charset="utf-8">
	   <title>Finance</title>
	   <link rel="stylesheet" href="css/bootstrap.min.css">
	   <link rel="stylesheet" href="css/indexmenu.css">
	   <link rel="stylesheet" href="css/indexbanner.css">
	</head>
	
	<body style="background:#FEFFCA">  <!-- Cor background -->
	
		<header role=banner>
			
		</header>
		
		<section role=main>  <!-- conteudo -->
			<header role=heading>  <!-- cabecalho do <article> -->
				
			</header>
			
			<article role=article>  <!-- <article> -->
		
			</article>
			
			<footer role=complementary>  <!-- rodape do <article> -->
		
			</footer>
		</section>
		
		<nav role=navigation>  <!-- conteudo relacionado -->
			<div class="nav-side-menu">
			
				
				<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>   					
				<container> 
					<div class="row-fluid">
						<div class="navbar-header hidden-xs">
							<a class="navbar-brand" href="index.php"><img src="logo.png"></a>
					    </div>
								
						<div class="menu-list">
						<br><br><br><br>
							<ul id="menu-content" class="menu-content collapse out">
								<li data-toggle="collapse" data-target="#contas" class="collapsed">
									<a href="#"><i class="fa fa-users fa-lg"></i> Contas<span class="arrow"></span></a>
								</li>  				
								<ul class="sub-menu collapse" id="contas">
									<li>Conta 1</li>
									<li>Conta 2</li>
									<li>Conta 3</li>
								</ul>					
								<li>
									<a href="CriaConta.php"><i class="fa fa-user fa-lg"></i> Nova Conta</a>
								</li>
							</ul>
							
							
							<div class="col-md-4 col-lg-10"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
								<a class="navbar-brand" href="index.php"><img src="buttonLogout.png"></a>
							</div>
				       </div>
	
					</div>
				</container>
			</div>
			
		</nav>
		<form method= "POST" action="ContaBancoDados.php">	
					<div class="container">
						<div class="row">	
							<div class="form-group col-md-6 col-md-offset-2">
							<br><br>
								<label for="exampleInputNome"><font color="#ffda44">Nome</label>
								<input type="nome" class="form-control" id="exampleInputNome" placeholder="nome" name="nome">
							</div>
							<div class="form-group col-md-4 col-lg-8 col-offset-2">
								<label for="exampleInputValor">Valor</label>
								<input type="valor" class="form-control" id="exampleInputValor" placeholder="valor" name = "valor">
							</div>
							<div class="col-md-4 col-lg-8"><p></p>
								<button type="submit" class="btn btn-default">Cadastrar</button>
							</div>	
						</div>
					</div>
						</form></body>
		<aside role=complementary>  <!-- navegacao -->

		</aside>
		
		<footer role=contentifo>  <!-- rodape da pagina -->

		</footer>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
