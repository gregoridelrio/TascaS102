<?php
  function verificarGrado($nota){
    $resultado = "";
    if($nota >= 6){
      $resultado = "Primera Divisió";
    } else if($nota >= 4.5 && $nota <= 5.9){
      $resultado = "Segona Divisió";
    } else if($nota >= 3.3 && $nota <= 4.4){
      $resultado = "Tercera Divisió";
    } else {
      $resultado = "Reprovar";
    }
    return $resultado;
  }
  echo verificarGrado(3.4) . "\n";