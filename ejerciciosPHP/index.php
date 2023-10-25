<?php
echo "Dos funciones de la pag de PHP";
echo "<br />";
$frutas = array ("manzana, banano, pera");
$frutas_string = implode(",", $frutas);
echo "Besto frutas: " .
$frutas_string;
echo "<br />";
$str = 'Anasheee';
$NumeroLetras = strlen($str);
echo 'El string "'. $str. '" tiene '. $NumeroLetras. ' letras';
echo "<br />";
echo "<br />";


echo "Juego del baloto (del 1 al 43) y una superbola del 1 al 16";
echo "<br />";
echo "Baloto: \n";
echo "<br />";
echo "Nums ganadores: \n";
echo "<br />";

$baloto = array();
$superbola = rand(1, 16);

while (count($baloto) < 6) {
  $num = rand(1, 43);
  if (!in_array($num, $baloto)) {
    $baloto[] = $num;
  }
}

sort($baloto);

echo implode(", ", $baloto) . " + " . $superbola;
echo "<br />";




echo "Zona horaria";
echo "<br />";
date_default_timezone_set("America/Bogota");
$current_date = date("F j, Y, g:i a");
echo $current_date;
echo "<br>";

$current_date = date("m.d.y");
echo $current_date;
echo "<br>";

$current_date = date("j, n, Y");
echo $current_date;
echo "<br>";

$current_date = date("Ymd");
echo $current_date;
echo "<br>";

$current_date = date('h-i-s, j-m-y, it is w Day');
echo $current_date;
echo "<br>";

$current_date = date('\i\t \i\s \t\h\e jS \d\a\y.');
echo $current_date;
echo "<br>";

$current_date = date("D M j G:i:s T Y");
echo $current_date;
echo "<br>";

$current_date = date('H:m:s \m \i\s\ \m\o\n\t\h');
echo $current_date;
echo "<br>";

$current_date = date("H:i:s");
echo $current_date;
echo "<br>";

$current_date = date("Y-m-d H:i:s");
echo $current_date;
echo "<br>";
echo "<br>";
?>