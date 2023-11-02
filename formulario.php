<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAREA PHP II</title>
    <style>
        body {
            background-image: url(img/giphy.gif);
            background-size: cover;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        h1 {
            color: white;
        }

        h2 {
            color: red;
            display: flex;
            justify-content: center;
            /* Centrado horizontal */
            align-items: center;
            /* Centrado vertical */
            font-size: 50px;
        }

        #completo {
            margin-left: 25%;
            width: 50%;
            height: 50vh;
            background-color: black;
            opacity: 95%;
        }

        #fecha {
            margin-left: 15%;
            margin-top: 20%;
            width: 70%;
            text-align: center;

            #ache1 {
                color: aqua;
            }

        }

        #divuno {
            text-align: center;
            margin-left: 10%;
            margin-top: 10%;
            width: 80%;
            height: 20vh;
            background-color: rgba(204, 224, 224, 0.375);
            display: flex;
            justify-content: center;
            /* Centrado horizontal */
            align-items: center;
            /* Centrado vertical */
        }

        input {
            width: 120%;
            margin-right: 5%;
        }

        a {
            width: 50%;
            color: aqua;
        }

        #a3 {
            margin-left: 8%;
            width: 50%;
            margin-right: 2%;
        }
    </style>
</head>

<body>

    <div id="completo">

        <?php



        if (isset($_POST["Usuario"]) && $_POST["Usuario"] == "admin" && isset($_POST["password"]) && $_POST["password"] == "1234") {

            ?>
            <div id="fecha">
                <br>
                <br>
                <h1 id=ache1>La fecha del día de hoy es:
                    <?php // Obtener la fecha actual y mostrarla en el formato deseado
                        $fechaActual = date("d/m/Y   H: i: s");
                        echo "$fechaActual" ?>
                </h1>
            </div>
            <div id="divuno">
                <a href="ruta.php">Obtener la ruta actual donde nos encontramos</a>
                <form action="buscararchivo.php" method="GET">
                    <label for="fichero"></label>
                    <input type="text" placeholder="Fichero a buscar..." name="fichero">
                    <a href="fichero.php">
                        <input type="submit">
                    </a>
                </form>
                <a id="a3" href="nuevofichero.php">Crear un nuevo fichero con opciones de permisos y escribir en él. </a>
            </div>
            <?php

        } else {
            echo "<br><br><br><br><h2>EL INICIO DE SESIÓN FUÉ INCORRECTO</h2>";
        }
        ?>
    </div>

</body>

</html>