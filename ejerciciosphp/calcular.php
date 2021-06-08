<?php

    if(isset($_POST['number'])){
        if ($_POST['number'] !== ""){
            $verificar = 1;

            //modulo 2
            $resultado = $_POST ['number'];
    echo $resultado;
        }else {
            $verificar = 0;
        }
    }

    if($resultado%2== 0){
        $respuesta = "par";
    }else {
        $respuesta = "impar";
    }
    header('Location: ./index.php?confirm='.$verificar.'&paroimpar='.$respuesta.'&numero='.$resultado)
?>