<?php

    interface MinhaInterface{
        public function Teste();
    }
    
    class MinhaClasse implements MinhaInterface{
        public function Teste(){
            echo "Do Something!";
        }
    }
    
    class MinhaOutraClasse implements MinhaInterface{
        public function Teste(){
            echo "Do something else";
        }
    }
    
    $classe1 = new MinhaClasse;
    $classe2 = new MinhaOutraClasse;

    $classe1->Teste();
    $classe2->Teste();
    


?>