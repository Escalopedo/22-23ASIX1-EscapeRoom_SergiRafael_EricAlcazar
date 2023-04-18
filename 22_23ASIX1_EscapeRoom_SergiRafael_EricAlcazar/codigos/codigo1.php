<?php
$codigoUno=$_POST['codigoUno'];
$codigoSum=$_POST['codigoSum'];
    if ($codigoUno == "1" and $codigoSum=="11"){
        header('Location: ./c1pSOL.html');
    } else {
        header('Location: ./codigo1.html');
    }