<?php
  fscanf(STDIN, "%d", $N);
  $X = explode(' ', trim(fgets(STDIN)));
  sort($X);
  echo array_sum(array_slice($X, $N, count($X)-$N*2)) / (count($X)-$N*2);
?>