<?php
  function suma($num1,$num2,$num3){
    return $num1 + $num2 + $num3;
  }
  function media($num1,$num2,$num3){
    return suma($num1,$num2,$num3) / 3;
  }

  function clasificacion($num){
    $respuesta = "";
    if ($num < 4000){
      $respuesta = "Principant";
    } else if ($num < 8000){
      $respuesta = "Intermedi";
    } else {
      $respuesta = "Professional";
    }
    return $respuesta;
  }
  echo "La suma es: " . suma(1000,2000,3000) . "\n";
  echo "La mitjana es: " . media(5000,4000,6000) . "\n";
  echo "La classificacio es: " . clasificacion(media(9000,9000,9000)) . "\n";