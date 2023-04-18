<?php 
$preg2=$_POST['preg2'];
$preg3=$_POST['preg3'];

if ($preg2=="0" and $preg3=="6") {
    header('Location: ./c2p2SOL.html');
} else {
    header('Location: ./codigo2.html');
}
?>
