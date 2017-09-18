<?php

Class carro {
    
    public $nome;
    public $modelo;
    public $ano;


    public function __construct(){
        
        $nome = "";
        $modelo = "";
        $ano = 0;
        
        echo "Classe Construida!";
    
    }
    
    function __destruct(){
        print "Classe has been destroyed! <br>";
    }
}

class subClasse extends carro {
    function __construct(){
        parent::__construct();
        print "Construtor sub classe <br>";
    }
    
}

?>