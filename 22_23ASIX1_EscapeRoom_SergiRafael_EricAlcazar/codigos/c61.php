<?php
$preg2=$_POST['preg2'];
$preg3=$_POST['preg3'];


if ($preg2=="1" and $preg3=="9") {
    header('Location: ./c6p2.html');
} else {
    header('Location: ./codigo6.html');
}