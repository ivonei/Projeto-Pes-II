<?php
    session_start();
	//include_once("seguranca.php");
	/// echo  "Bem vindo usuario: ".$_SESSION['usuarioNome'];
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
  
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  
   <link href="../css/usuario.css" rel="stylesheet">
  <link rel="icon" href="../favicon/favicon.ico">
  <title>Área do Usuário</title>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>

<script src="https://code.highcharts.com/modules/exporting.js"></script>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
		<div class="navbar-header">Bem-vindo <span class="destaque">
		<?php 	 echo $_SESSION['usuarioNome']; 
		
		?></span></div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="usuario.php">Página Principal</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Ajuda</a></li>
			<li><a href="../sair.php">Sair</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
<style>
.grafico {
	min-width: 310px;
	max-width: 400px;
	height: 280px;
	margin: 0 auto
}

.main-header {
    font-size: x-large;
    color : #888;
    font-family: Verdana;
    margin-bottom: 20px;
}

.destaque {
    color: #f88;
    font-weight: bolder;
}

.highcharts-tooltip h3 {
    margin: 0.3em 0;
}
</style>


<div class="container">

	
	<div class="col-md-3">
	    
	    <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-list-ol fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">4</p>
                <p class="announcement-text">Compradores</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>
	
	
	

	<div class="col-md-3">
	    
	    <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-usd fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"> R$ 950 mil</p>
                <p class="announcement-text">Renda</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>	
	
	

	<div class="col-md-3">
	    
	    <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-calendar fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">Calendário</p>
                <p class="announcement-text">Agenda</p>
              </div>
            </div>
          </div>
          <a href="calendario.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>		
	

	<div class="col-md-3">
	    
	    <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-th fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"> 1 área</p>
                <p class="announcement-text">Áreas <i class=""></i>  </p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>			
	
		
	<div class="col-md-3">
	    
	    <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-users fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">5 Pessoas</p>
                <p class="announcement-text">Empregados</p>
              </div>
            </div>
          </div>
          <a href="ViewEmpregado/empregados.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>	
	
		
	<div class="col-md-3">
	    
	    <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-cubes fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">Quantidade</p>
                <p class="announcement-text">Estoque</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>	
	
	<div class="col-md-3">
	    
	    <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-leaf fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">4 variedades</p>
                <p class="announcement-text">Produtos</p>
              </div>
            </div>
          </div>
          <a href="ProdCad.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>	
	
	<div class="col-md-3">
	    
	    <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-sun-o fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">Sol 34 °C</p>
                <p class="announcement-text">Previsão</p>
              </div>
            </div>
          </div>
          <a href="ProdCad.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>	
	
	<div class="col-md-7">
	<br><h2>Área de Análise Gráfica</4></br>
	</div>
	<div class="col-md-7">
	    
	    <h3>Principais clientes</h3>
	    
	    <table class="table table-condensed table-bordered table-hover small">
	        <thead>
	           <tr>
	               <th style="width:80px;">.</th>
	               <th>Nome</th>
	               <th>Receita</th>
	               <th>Imposto</th>
	               <th>Capital</th>
	               <th>ROI</th>	               
	               <th>Juro</th>
	           </tr>
	        </thead>
	        <tbody>
	            
	            <tr>
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-dashboard"></i></a>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i></a>
	                    <a href="#"> <i class="glyphicon glyphicon-warning-sign"></i></a>
	                </td>
	                <td>
	                    Company 1
	                </td>
	                <td>
	                    $ 350 k
	                </td>
	                <td>
	                    4 
	                </td>
	                <td>
	                    $ 291,75
	                </td>
	                <td>3,72</td>
	                <td>
	                    3,65%
	                </td>
	                
	            </tr>
	            
	            <tr class="danger">
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-dashboard"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-warning-sign"></i></a>
	                </td>
	                
	                <td>
	                    Customer 2
	                </td>
	                <td>$ 270 k</td>
	                <td>7,8 </td>
	                <td>$ 1307.32</td>
	                <td>2,61</td>	                
	                <td>8,45%</td>
	            </tr>

	            <tr class="info">
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-dashboard"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-warning-sign"></i></a>
	                </td>
	                
	                <td>
	                    Customer 3
	                </td>
	                <td>$ 125 k</td>
	                <td>2,5 </td>
	                <td>$ 312.45</td>
	                <td>9,21</td>	                
	                <td>2,5%</td>
	            </tr>

	            <tr >
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-dashboard"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-warning-sign"></i></a>
	                </td>
	                
	                <td>
	                    Customer 4
	                </td>
	                <td>$ 205 k</td>
	                <td>7,1 </td>
	                <td>$ 115,75</td>
	                <td>6,27</td>
	                <td>(n/d)</td>
	            </tr>

	            
	        </tbody>
	        
	    </table>
	    
    </div>
	
	<div class="col-md-6">
	    <div id='grafico1' class="grafico"></div>
	</div>
	
	<div class="col-md-6">
	    <div id='grafico2' class="grafico"></div>
	</div>
	<div class="col-md-6">
	    <div id='grafico3' class="grafico"></div>
	</div>

	
	
	
		<div class="col-md-8">
	    
	    <h3>Messages</h3>
	    
	    <table class="table table-condensed table-bordered table-hover small">
	        <thead>
	           <tr>
	               <th style="width:30px;">.</th>
	               <th>From</th>
	               <th>Subject</th>
	               <th>Actions</th>
	           </tr>
	        </thead>
	        <tbody>
	            
	          
	            
	            
	            <tr class="text-info">
	                <td>
	                   <i class="glyphicon glyphicon-info-sign"></i>
	                </td>
	                <td>
	                   John Doe
	                </td>
	                <td>
	                    Complaint
	                </td>
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i></a>
	                    <a href="#"> <i class="glyphicon glyphicon-arrow-right"></i> </a>
	                </td>

	            </tr>
	            

	            <tr class="text-info">
	                <td>
	                   <i class="glyphicon glyphicon-user"></i>
	                </td>
	                <td>
	                    Mr Joe
	                </td>
	                <td>
	                    Congrats
	                </td>
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i></a>
	                    <a href="#"> <i class="glyphicon glyphicon-arrow-right"></i> </a>
	                </td>

	            </tr>
	            

	            
	        </tbody>
	        
	    </table>
	    
    </div>
	
	
		<div class="col-md-6">
	    <div id='grafico4' class="grafico" style="height: 400px;"></div>
	</div>

	
</div>

    <script src="../js/bootstrap.min.js"></script>
    <script src = "../js/usuario.js"></script>
	
	<script src="../js/jquery.min.js"></script>

</body>
</html>
<br />
<a href = "../sair.php">Sair</a>