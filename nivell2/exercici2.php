<?php
function calculaSuma(array $puntuaciones): float
{
  $suma = 0;
  foreach ($puntuaciones as $puntuacion) {
    $suma += $puntuacion;
  }
  return $suma;
}
function calculaMedia(array $puntuaciones): float
{
  return calculaSuma($puntuaciones) / count($puntuaciones);
}

function calculaClasificacion(float $puntuacion): String
{
  if ($puntuacion < 4000) {
    return "Principant";
  } else if ($puntuacion < 8000) {
    return "Intermedi";
  }
  return "Professional";
}
echo "La suma es: " . calculaSuma([1000, 2000, 3000]) . "\n";
echo "La mitjana es: " . calculaMedia([5000, 4000, 6000]) . "\n";
echo "La classificacio es: " . calculaClasificacion(calculaMedia([9000, 9000, 9000])) . "\n";
