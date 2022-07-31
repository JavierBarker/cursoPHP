<?php
/* verificar si es par o impar */

for($i = 1; $i <= 30; $i++){
    
    $cuadrado = $i*$i;
    echo "El cuadrado de ".$i." es ".$cuadrado;
    
    if ($cuadrado % 2 === 0) {
        echo ", es par";
    } else {
        echo ", es impar";
    }
    
    
    echo "<br>";
}
?>