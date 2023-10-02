<!DOCTYPE html>
<html>

    <head>
    <meta charset="UTF-8">
    <style>
        body{
        background-image:url(wallpaper.jpg);
        width:600px;
        height:400px;
        border:2px;
        margin-left:30%;
        color:rgb(114, 114, 114);
        text-align: center;
        
        }
        .contenedor{
        border:5px solid;
        border-radius:5%;
        border-color:rgb(142, 81, 255);
        background-color:rgba(11, 112, 107, 0.344);
        background-size: 100%;
        width: 150%;
        height: 330%;
        background-color:rgb(208, 246, 255);
        
        }  
        h2{
        color:rgb(0, 42, 121);
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        h1{
        color:rgb(142, 81, 255);
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
    </style>
    </head>


    <body>
    <div class="contenedor">

    <h1>Ejercicios PHP - DANIEL CABA</h1>

    <h2>Ejercicio 1</h2>

    <?php
        $var1 = "hola";
        $var2 = " ";
        $var3 = "mundo";
        $var4 = $var1.$var2.$var3; //Utilizamos el . para concatenar.
        echo $var4;

        $varbool = false;
        echo $varbool;

        echo "<br>";

        $varfloat = 3.14;
        echo $varfloat;
        
        echo "<br>";

        $vararray = array("1", "2", "3"); //Creamos un array para guardar los valores dados.
        $vararray = array("clave1"=> "1", "clave2"=>"2","clave3"=> "3");
        print_r($vararray);

    ?>
    <h2>Ejercicio 2</h2>
    
    <?php
        is_bool($varbool);
        echo $varbool;
    ?>
    <h4>El resultado deja de mostrarse ya que al pasar a falso, el resultado seria 0, por lo que no se mostraria.</h4>
    <h4>En caso contrario, si fuese true, mostraria un 1.</h4>

    <h2>Ejercicio 3</h2>
    
    <?php
        $var4 =str_replace(" ","",$var4); //Utilizamos la funcion str_replace para cambiar y donde habia un espacio lo elimine por lo que hay dentro de las comillas simples.
        echo $var4;
    ?>

    <h2>Ejercicio 4</h2>
    
    <?php
        $cadenatexto = "<p>El operador \"+\" sirve para sumar el valor de variables. Con la \"/\"podemos
        dividir valores entre variables. El simbolo del dolar \"$\" indica que estamos
        utilizando variables pero no lo usaremos en las constantes o globales.<p>";
        echo $cadenatexto;
    ?>

    <h2>Ejercicio 5</h2>
    
    <?php
        echo "<p>La longitud de la cadena anterior es :<p>".strlen($cadenatexto);
    ?>

    <h2>Ejercicio 6</h2>
    
    <?php
        $frase = "HELLO WORLD";
        $arrayVOCALES = array('a','e','i','o','u','A','E','I','O','U'); //Agregamos las letras en este caso las vocales que pueden ser eliminadas.
        $SINVOCALES = str_replace($arrayVOCALES, '',$frase);
        echo $SINVOCALES;
    ?>

    <h2>Ejercicio 7</h2>
    
    <?php
        $textonulo = null;
        $textonulo2 = is_null($textonulo);
        echo $textonulo2;
    ?>

    <h2>Ejercicio 8</h2>
    
    <?php
        $entero = intval($frase);
        echo $entero;
    ?>

    <h4>Encontramos que al pasar de un String a Int el valor es 0, ya que 0 se muestra como un error, ademas de que cuando realizamos la funcion intval la base es 0, al no contener ningun valor numerico la base se mantiene en 0.</h4>

    <h2>Ejercicio 9</h2>

    <h4>A)</h4>
    <?php
        $RaizCuadrada = sqrt(144); //Utilizamos la función adecuada para poder realizar la raiz cuadrada del numero pedido en el ejercicio, el 144.
        echo $RaizCuadrada; //Lo imprimimos.
    ?>

    <h4>B)</h4>
    <?php
        $base = 2;
        $potencia = 8;
        $ejerciciob = pow($base, $potencia); //Creamos las variables base y potencia y con la función pow() podemos realizar la operación.
        echo $ejerciciob; //Lo imprimimos por pantalla.
    ?>

    <h4>C)</h4>
    <?php
        $DIVIDENDO = 100;
        $DIVISOR = 6;
        $ejercicioc = $DIVIDENDO%$DIVISOR; //Obtenemos el modulo de los datos pedidos, 100 y 6, y encontramos el resultado.
        echo $ejercicioc; // Lo imprimimos por pantalla.
    ?>

    <h4>D)</h4> 

    <?php

        function mcd($Numero1, $Numero2){

            if($Numero1 == 0){
                return $Numero2;
            }

            return mcd($Numero2%$Numero1, $Numero1);

        }

        echo mcd(3,6);


        /*$array$Numero1[];
        $array$Numero2[];
        
        for($i = 2; $i < $Numero1; $i++){
            if($Numero1%$i==0){
                $Numero1 = $Numero1/$i;                 //ESTO FUÉ UN INTENTO CON FOR ANTES DE SABES A USAR LA RECURSIVIDAD.
                $array$Numero1[]=$i;
            }
        }

        for($i = 2; $i < $Numero2; $i++){
            if($Numero2%$i==0){
                $Numero2 = $Numero2/$i;
                $array$Numero2[]=$i;
            }
        }
        */



    ?>

    <div>
    </body>
</html>