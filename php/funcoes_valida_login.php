<?php

    function valida_login ($login,$senha){
        //valida direto no BD
        $login_bd = "debora";
        $senha_bd = "123";

        if($login == $login_bd && $senha == $senha_bd){
            return true;
        }
        return false;
    }
    
?>