<?php
    require_once 'classes/calculadora.php';

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $operacao = $_POST['operacao'];

    $calculadora = new Calculadora();

    //setar valores
    $calculadora->setN1( $n1 );
    $calculadora->setN2( $n2 );

    switch($operacao){
        case 'somar':
            echo 'A soma é: ';
            $calculadora->somar();
            break;
        case 'subtrair':
            echo 'A subtração é: ';
            $calculadora->subtrair();
            break;
        case 'multiplicar':
            echo 'A multiplicação é: ';
            $calculadora->multiplicar();
            break;
        case 'dividir':
            echo 'A divisão é: ';
            $calculadora->dividir();
            break;

    }


    echo $calculadora->getTotal();
?>