<?php
  fscanf(STDIN, "%d %d", $R, $C);
  $A[] = explode(" ", trim(fgets(STDIN)));
  $A[] = explode(" ", trim(fgets(STDIN)));
  echo $A[$R-1][$C-1];