<?php
    if (isset($_POST['calcular'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        if ($operacion == "suma") {
            $resultado = $num1 + $num2;
            echo "La suma es: " . $resultado;
        } elseif ($operacion == "resta") {
            $resultado = $num1 - $num2;
            echo "La resta es: " . $resultado;
        } elseif ($operacion == "dividir") {
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                echo "La división es: " . $resultado;
            } else {
                echo "No se puede dividir por cero.";
            }
        } elseif ($operacion == "multiplicar") {
            $resultado = $num1 * $num2;
            echo "La multiplicación es: " . $resultado;
        }
    }
?>
