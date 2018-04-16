<?php

    function primeira_funcao() {
        //codigo de execução da função          
        echo "Bem vindo ao cuso de php ";
    }

     primeira_funcao();
print  '<br/>--------------------------------- <br/><br/>';
    //função sem retorno 
    function exibir_boas_vindas ($nome= 'Indefinido'){
        echo "Bem vindo ao curso PHP,  " .$nome;
    }
 
    //chamar função
    exibir_boas_vindas("ana maria");
print  '<br/>--------------------------------- <br/><br/>';
    //função com retorno 
    function calcular_soma($a,$b){
        return $a+$b;
    }
    print calcular_soma(7,8);
?>