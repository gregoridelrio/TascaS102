<?php
function verificarGrado($nota)
{
  if ($nota >= 6) {
    return "Primera Divisió";
  } else if ($nota >= 4.5) {
    return "Segona Divisió";
  } else if ($nota >= 3.3) {
    return "Tercera Divisió";
  }
  return "Reprovar";
}
echo verificarGrado(7) . "\n";
echo verificarGrado(5) . "\n";
echo verificarGrado(4) . "\n";
echo verificarGrado(1) . "\n";
