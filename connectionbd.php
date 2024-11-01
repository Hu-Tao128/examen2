<?php
    function conectiondb(){
        $bd = mysqli_connect('localhost', 'root', '', 'bienesraices');

        if ($bd) {
            echo "conectado";
        }else{
            echo "No conectado";
        }

        return $bd;
    }
?>