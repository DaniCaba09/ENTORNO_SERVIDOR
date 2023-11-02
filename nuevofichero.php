<?php

        $contenido = "hola";
        $ruta = "nuevoarchivo.txt";

        $file = fopen($ruta, "a+"); // "w" abre el archivo para escritura / funcina igual que el w, pero el nuevo contenido lo pone al final del archivo
        if ($file) {
            if (fwrite($file, $contenido)) {
                echo "El archivo se ha creado correctamente.";
            } else {
                echo "Hubo un error al escribir en el archivo.";
            }
            fclose($file);
        } else {
            echo "Hubo un error al abrir el archivo.";
        }
        
?>