<?php
  fscanf(STDIN, "%d %d %d %d %d %d", $h1, $h2, $h3, $w1, $w2, $w3);
  $count = 0;
  // a b c
  // d e f
  // g h i
  for($a=1; $a <= 28; $a++) {
      for($b=1; $b <= 29-$a; $b++) {
          for($d=1; $d <= 29-$a; $d++) {
              for($e=1; $e <= 29-$b &&  $e <= 29-$d ; $e++) {
                  $c = $h1 - $a - $b;
                  $g = $w1 - $a - $d;
                  $f = $h2 - $d - $e;
                  $h = $w2 - $b - $e;
                  $i1 = $h3 - $g - $h;
                  $i2 = $w3 - $c - $f;
                  if ($i1 == $i2 && min($c,$f,$g,$h,$i1,$i2) > 0) {
                      $count++;
                  }
              }
          }
      }
  }
  echo $count;