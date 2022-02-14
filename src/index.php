<?php
$t  = 35;

if ($t >= 60) {
  echo "First Division";
} elseif ($t>=45 and $t < 59) {
  echo "second division";
}
  elseif ($t>33 and $t < 44) {
    echo "third division";
} else {
  echo "fail";
}
?>