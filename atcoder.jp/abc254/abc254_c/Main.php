<?php
  fscanf(STDIN, "%d %d", $N, $K);
  $a = explode(" ", trim(fgets(STDIN)));
  $ans = $a;
  for($i=0; $i < $K; $i++) {
      $tmp = [];
      for($j=$i; $j < $N; $j+=$K) {
          $tmp[] = $a[$j];
      }
      sort($tmp);
      $index = 0;
      for($j=$i; $j < $N; $j+=$K) {
          $ans[$j] = $tmp[$index++];
      }
  }
  sort($a);
  echo count(array_diff_assoc($ans, $a)) ? 'No' : 'Yes';