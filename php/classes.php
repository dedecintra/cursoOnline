<?php

class Pessoa {
    #atributos
    var $nome;

    #metodos
    function setNome($nome_definido){
        $this->nome = $nome_definido;
    }

    function getNome(){
        return $this->nome;
    }
}

$pessoa = new Pessoa();

$pessoa->setNome('Débora');

echo $pessoa->getNome();

?>