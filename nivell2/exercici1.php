<?php
function calcularTotalPagar(int $minutos): float
{
  $coste = 0.10;
  return ($minutos <= 3 && $minutos > 0) ? $coste : $coste += (($minutos - 3) * 0.05);
}
echo "El coste total a pagar es: " . calcularTotalPagar(6) . " euros.\n";
