<?php
   if (isset($_GET["fichero"])) {
    $ruta = getcwd() ;
    $archivos = scandir($ruta);
    
        if (in_array($_GET["fichero"], $archivos)) {
            echo $_GET["fichero"] . " se ha encontrado correctamente <br>";
        }
        else{
            echo "No se busco bien el archivo";
        }
    }
?>
