<?php
  function isBitten(){
    $bite = rand(1,2);
    if ($bite == 1){
      return true;
    } else {
      return false;
    }
  }