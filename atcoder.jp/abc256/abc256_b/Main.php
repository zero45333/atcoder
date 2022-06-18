<?php
  fscanf(STDIN, "%d", $N);
  $A = explode(" ", trim(fgets(STDIN)));
  $count = 0;
  $P = [];
  for($i=0; $i < $N; $i++) {
      $P[0] = $A[$i];
    for($j=0; $j < $A[$i]; $j++) {
        if ($j != $A[$i]) {
            array_unshift($P, 0);
        }
    }
  }
  for($i=4; $i < count($P); $i++) {
      if($P[$i]) {
          $count++;
      }
  }
 echo $count;