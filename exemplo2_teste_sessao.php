<?php

    session_start();

    if(isset($_SESSION["teste"])){
        echo "Variavel de sessão 'teste' vale: ". $_SESSION["teste"];
    }
    else{
        echo "sessão ainda não foi iniciado";
    }

?>