<?php
  fscanf(STDIN, "%d", $N);
  $A = [];
  for($i=0; $i < $N; $i++) {
    for($j=0; $j < $i+1; $j++) {
      if($j==0 || $j == $i) {
        $A[$i][$j] = 1;
      } else {
        $A[$i][$j] = $A[$i-1][$j-1]+$A[$i-1][$j];
      }
    }
    echo implode(" ", $A[$i])."\n";
  }