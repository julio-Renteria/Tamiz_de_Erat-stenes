<h1>Numeros primos </h1>

<p>Programar el Tamiz de Eratóstenes para encontrar los números primos hasta X valor
    que determine el usuario, e imprimirlos en una consola es suficiente. </p>


<?php


PracticaPrimos(120); // Ingrese hasta que numero desea detrminar los numeros primos

function PracticaPrimos($numero)
{
    $a = array();
    $conn  = 1;
    $iteracion = 0; //iteracion
    echo  "  ", 2;
    $i = 3;

    while ($i <= $numero) {
        if (!in_array($i, $a)) {
            echo "  -  ", $i;
            $conn += 1;
            $j = $i;


            while ($j <= ($numero / $i)) {
                array_push($a, $i * $j);
                $j += 1;
                /*  $iteracion += 1; */
            }
        }

        $i += 2;
        $iteracion += 1;
    }

    echo '<br>' . 'Iteraciones ' . $iteracion;
    echo " \n";

    return;
}
