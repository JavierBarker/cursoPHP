<?php
/*multiplique los primeros 20 numeros */

$numero = 1;
$contador = 2;

while ($contador <= 20) {
    
    $numero *= $contador;

    $contador++;
}

echo "El resultado de multiplicar los primeros 20 numeros es ".$numero;

?>