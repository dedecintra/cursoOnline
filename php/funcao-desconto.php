<?php

    function calculo_desconto ($valor_total,$desconto){
        $valor_deconto = $valor_total * ($desconto/100);
        $valor_com_desconto = $valor_total - $valor_deconto;
        return $valor_com_desconto;
    }

?>