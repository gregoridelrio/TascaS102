<?php
  function contar($contar, $hasta = 10) {
    for($i = 1; $i <= $hasta; $i+=$contar) {
      echo $i . "\n";
    }
  }
  contar(2, 20);