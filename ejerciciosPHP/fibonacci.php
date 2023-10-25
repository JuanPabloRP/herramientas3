<h1>Fibonacci</h1>
<?php
$n1=0;
$n2=1;
$aux=0;
for ($i=0; $i < 10 ; $i++){
  echo $n1."<br>";
  $aux=$n1+$n2;
  $n1=$n2;
  $n2=$aux;

}