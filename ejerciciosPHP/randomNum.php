<?php
  function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for($i = 2; $i < $numero % 2 +1; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    
    return true;
}

    $numeroAleatorio = rand(1, 100);
    echo "El número aleatorio es: $numeroAleatorio <br>";

    if (esPrimo($numeroAleatorio)) {
        echo "El número es primo.";
    } else {
        echo "El número no es primo.";
    }
?>