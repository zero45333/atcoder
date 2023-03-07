<?php
  fscanf(STDIN, "%d %d", $N, $Q);
  $player = array_fill(1, $N, 0);
  for ($i=0; $i < $Q; $i++) {
    fscanf(STDIN, "%d %d", $event, $x);
    switch ($event) {
      case 1:
        $player[$x] += 1;
        break;
      case 2:
        $player[$x] += 2;
        break;
      case 3:
        if ($player[$x] >= 2) {
          echo "Yes\n";
        } else {
          echo "No\n";
        }
        break;
    }
  }