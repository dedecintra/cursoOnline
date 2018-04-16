<?php
//classe mae ou superclasse
class Felino{
    var $mamifero = "sim";
    
    function correr(){
        echo 'correr como felino';
    }
}

class Chita extends Felino{
    //polimorfismo
    function correr(){
        echo 'Chita nao corre!';
    }
}

class Gato extends Felino{
}

$chita = new Chita();
echo $chita->mamifero .'<br>';

$chita->correr();
?>