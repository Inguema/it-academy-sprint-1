<?php
/*Charlie me mordió el dedo!
Charlie te morderá el dedo exactamente el 50% del tiempo.
Escribe La función isBitten ()que devuelve TRUE  con un 50% de probabilidad y FALSE de lo contrario.
Consejo: puede que la función rand () te resulte útil.
 */

function isBitten() {
    $resultado = rand(1, 100);
    //var_dump($resultado);
    if ($resultado <= 50){
        echo "Charli te morderá el dedo.";
    } else {
        echo "Te has librado de la mordedura";
    }
}
echo isBitten();
