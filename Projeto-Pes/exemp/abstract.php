<?php

    abstract class ClasseAbstrata {
        abstract public function teste2();
    }
    
    class ClasseImplementacao extends ClasseAbstrata{
        public function teste(){
            echo "Metodo teste() chamado! <br>";
        }
    }
    
    $obj = new ClasseImplementacao;
    $obj->teste();

?>