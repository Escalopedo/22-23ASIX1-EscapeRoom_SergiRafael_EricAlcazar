
<?php
        $adivinanza = $_POST['adivinanza'];
         if ($adivinanza == "JIG" or $adivinanza == "jig") {
         echo "<!DOCTYPE html>";
         echo "<html lang='en'>";
         echo "<head>";
         echo "<meta charset='UTF-8'>";
         echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
         echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
         echo "<link rel='stylesheet' href='codigos.css'>";
         echo "<link rel='icon' href='./img/Saw-Movie-PNG-HD-Quality.png'>";
         echo "<title>ACERTIJO 5.2</title>";
         echo "</head>";
         echo "<body class='codigo5'>";
         echo "<div class='parte1_5'>";
         echo "<p class='txt_2_5'> AHORA DEBES PONER LAS OTRAS TRES LETRAS </p>";
         echo "</div>";
         echo " <div class='parte2'>";
         echo "    </div>";
         echo "    <div class='parte3'>";
         echo         "<form method='post' action='c5p2.php'>";
         echo " <label class='texto_adivinanza' for='adivinanza2'>INSERTE LAS TRES ÚLTIMAS LETRAS</label>";
         echo "</br>";
         echo "</br>";
         echo " <input class='relleno' type='text' name='adivinanza2' id='adivinanza' placeholder='INGRESE TRES LETRAS'>";
         echo "</br>";
         echo "</br>";
         echo "<input class='ingresar' type='submit' value='INSERTAR'>";
         echo "          </form>   ";
         echo "    </div>";
         echo "</body>";
         echo "</html>";
        } else {
            header('Location: ./codigo5.html');
        }

?>
