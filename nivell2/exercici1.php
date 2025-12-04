<?php
  function totalPagar($minutos){
    $coste = 0;
    if($minutos <= 3 && $minutos > 0){
      $coste = 0.10;
    } else if ($minutos > 3){
      $coste = 0.10 + (($minutos - 3) * 0.05);
    }
    return $coste;
  }
  echo "El coste total a pagar es: " . totalPagar(6) . " euros.\n";