<?php
$arreglo = array(5, 2, 9, 1, 7, 3, 10, 8, 12, 11,22);
function burbuja(array $arr): array {
  $n = count($arr);
  for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
      if ($arr[$j] > $arr[$j + 1]) {
        // Intercambiar elementos
        $temp = $arr[$j];
        $arr[$j] = $arr[$j + 1];
        $arr[$j + 1] = $temp;
      }
    }
  }
  return $arr;
}

burbuja($arreglo);
?>