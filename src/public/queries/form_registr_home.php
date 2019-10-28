<?php
    if (isset($_POST['nombre'])&&isset($_POST['email'])&&isset($_POST['mensaje'])) {
        # code...
        if (isset($_POST['btn_send'])) {
            # code...
            echo "datos recibidos";
        }else {
            # code...
            echo "parece que un intruso intenta ingresar, estaremos revisando";
        }
    }else {
        # code...
        echo "debe completar todos los campos";
    }
?>