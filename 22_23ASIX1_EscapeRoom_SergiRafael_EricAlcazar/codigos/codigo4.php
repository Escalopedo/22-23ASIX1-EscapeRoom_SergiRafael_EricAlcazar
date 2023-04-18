<?php 
$huesos=$_POST['huesos'];
$dientes=$_POST['dientes'];

if ($huesos =="206" and $dientes =="32") {
    header('Location: ./c4p2SOL.html');
} else {
    header('Location: ./codigo4.html');
}
?>