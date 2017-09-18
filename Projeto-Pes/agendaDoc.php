<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/telaSec.css">
    <script type="text/javascript" src="js/mainSec.js"></script>
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4" style="padding-top: 100px;" >
                    <div class="recovery-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Agenda</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="mainDoc.php">
                        <label class="col-md-2 control-label" for="nome">Médico</label>
                        <select class="form-control">
                            <option>Dra. Fátima</option>  <!-- ao invés de option, usar uma lista, para que a secretaria possa armazenar nela -->
                            <option>Dr. André</option>
                            <option>Dr. Sérgio</option>
                            <option>4</option>
                            <option>5</option>
                            </select>                    
                        </form>
                        <br>
                        <form role="form" method="post" action="mainDoc.php">
                        <fieldset>
                            <input id="textinput" name="textinput" placeholder="Nome do paciente" class="form-control input-md" required="" type="text">
                            <span class="help-block">Digite o nome do paciente</span>       
                             
                        <button id="agendamento" name="agendamento" class="btn btn-success">Agendar Paciente</button>
                      </fieldset>
                     </form>

                 </div>
            </div>
        </div>
     </div>
     </div>