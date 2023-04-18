<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./codigos/codigos.css">
    <link rel="icon" href="./codigos/img/Saw-Movie-PNG-HD-Quality.png">
    <title>MENÚ</title>
</head>
<body class="botonesMenu">
    <div class="caja1">
        <a href="codigos/codigo1.html"><button href="codigos/codigo1.html" type="button" class="boton1" id="boton1"></button></a>
        <a href="codigos/codigo2.html"><button href="codigos/codigo2.html" type="button" class="boton2" id="boton2" disabled></button></a>
    </div>
    <div class="caja2">
        <a href="codigos/codigo3.html"><button href="codigos/codigo3.html" type="button" class="boton3" id="boton3" disabled></button></a>
        <a href="codigos/codigo4.html"><button href="codigos/codigo4.html" type="button" class="boton4" id="boton4" disabled></button></a>
    </div>
    <div class="caja3">
        <button id="mostrar">MOSTRAR PISTA</button>
    <p class="pista"><strong>Mira toda la sala detenidamente y encontrarás diferentes sitios a donde ir, en total hay 5, abajo a la derecha encontrarás para introducir el código final</strong></p><script src="function.js"></script>
        <a href="codigos/codigo5.html"><button href="codigos/codigo5.html" type="button" class="boton5" id="boton5" disabled></button></a>
        <a href="codigos/codigo6.html"><button href="codigos/codigo6.html" type="button" class="boton6" id="boton6" disabled></button></a>
    </div>
    <script>
        const boton1 = document.querySelector("#boton1");
        const boton2 = document.querySelector("#boton2");
        const boton3 = document.querySelector("#boton3");
        const boton4 = document.querySelector("#boton4");
        const boton5 = document.querySelector("#boton5");
        const boton6 = document.querySelector("#boton6");

        boton1.addEventListener("click", function() {
            boton2.removeAttribute("disabled");
        });

        boton2.addEventListener("click", function() {
            boton3.removeAttribute("disabled");
        });

        boton3.addEventListener("click", function() {
            boton4.removeAttribute("disabled");
        });

        boton4.addEventListener("click", function() {
            boton5.removeAttribute("disabled");
        });

        boton5.addEventListener("click", function() {
            boton6.removeAttribute("disabled");
        });

        boton2.addEventListener("click", function() {
            // Aquí colocas el código que quieres que se ejecute al hacer clic en el botón 2.
        });

        boton3.addEventListener("click", function() {
            // Aquí colocas el código que quieres que se ejecute al hacer clic en el botón 3.
        });

        boton4.addEventListener("click", function() {
            // Aquí colocas el código que quieres que se ejecute al hacer clic en el botón 2.
        });

        boton5.addEventListener("click", function() {
            // Aquí colocas el código que quieres que se ejecute al hacer clic en el botón 2.
        });

        boton6.addEventListener("click", function() {
            // Aquí colocas el código que quieres que se ejecute al hacer clic en el botón 2.
        });
    </script>
</body>
</html>