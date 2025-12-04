<?php
  $x = 10;
  $y = 5;
  $n = 0.5;
  $m = 2.5;

  echo $x . " " . $y . "\n";
  echo ($x + $y) . "\n";
  echo ($x - $y) . "\n";
  echo ($x * $y) . "\n";
  echo ($x % $y) . "\n";

  echo $n . " " . $m . "\n";
  echo ($n + $m) . "\n";
  echo ($n - $m) . "\n";
  echo ($n * $m) . "\n";
  echo ($n % $m) . "\n";
  
  echo $x * 2 . "\n";
  echo $y * 2 . "\n";
  echo $n * 2 . "\n";
  echo $m * 2 . "\n";

  echo $x + $y + $n + $m . "\n";
  echo $x * $y * $n * $m . "\n";

  function operacionAritmetica($num1, $num2, $op) {
    $resultado = 0;
    if($op == "+") {
      $resultado = $num1 + $num2;
    } elseif($op == "-") {
      $resultado = $num1 - $num2;
    } elseif($op == "*") {
      $resultado = $num1 * $num2;
    } elseif($op == "/") {
      $resultado = $num1 / $num2;
    } else {
      return "Operador no válido";
    }
    return $resultado;
  }

  echo "La suma es " . operacionAritmetica(10, 5, "+") . "\n";
  echo "La resta es " . operacionAritmetica(10, 5, "-") . "\n";
  echo "La multiplicación es " . operacionAritmetica(10, 5, "*") . "\n";
  echo "La división es " . operacionAritmetica(10, 5, "/") . "\n";
  echo "Operador no válido: " . operacionAritmetica(10, 5, "j") . "\n";