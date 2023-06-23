<?php
function divide($numerator, $denominator) {
  if ($denominator == 0) {
    $error_message = "Denominator cannot be zero!";
    trigger_error($error_message);
  }
  return $numerator / $denominator;
}


echo divide(10, 0);