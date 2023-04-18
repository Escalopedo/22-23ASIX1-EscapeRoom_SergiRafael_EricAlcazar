<?php
   $adivinanza2=$_POST['adivinanza2'];
   if ($adivinanza2 == "SAW" or $adivinanza2=="saw") {
      header('Location: ./c5pSOL.html');
   } else {
      header('Location: ./codigo5.html');
  }
?>