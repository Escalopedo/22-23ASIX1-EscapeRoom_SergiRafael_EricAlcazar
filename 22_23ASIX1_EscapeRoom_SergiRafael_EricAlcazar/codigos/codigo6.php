<?php 
$preg4=$_POST['preg4'];
$preg5=$_POST['preg5'];
if ($preg4=="307" and $preg5=="289") {
    header('Location: ./congratulations.html');
} else {
    header('Location: ./codigo6.html');
}
?>