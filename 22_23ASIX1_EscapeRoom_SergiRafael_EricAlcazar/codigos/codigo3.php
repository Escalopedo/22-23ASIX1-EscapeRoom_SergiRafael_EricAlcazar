<?php
$op1=$_POST['op1'];
$op2=$_POST['op2'];

if ($op1 == "1110" and $op2 == "10") {
    header('Location: ./c3p2SOL.html');
} else{
    header('Location ./codigo3.html');
}