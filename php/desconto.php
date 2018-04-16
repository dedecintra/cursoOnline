<?php

    require_once('funcao-desconto.php');

    $valor_total = 800;
    $desconto = 10;
    $valor_com_desconto = calculo_desconto($valor_total,$desconto) ;
?>

    Valor total: <?php echo $valor_total; ?> <br>
    Valor desconto:  <?php echo $desconto; ?> <br>
    Valor total com desconto: <?php echo $valor_com_desconto; ?>