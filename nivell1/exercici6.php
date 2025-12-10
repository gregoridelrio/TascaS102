<?php
function isBitten()
{
  $bite = rand(1, 2);
  if ($bite == 1) {
    return true;
  } else {
    return false;
  }
}

// Añadido echo para mostrar resultado de la funcion
echo $status = (isBitten()) ? "Charlie bit your finger" : "Charlie hasn't bitten your finger";
