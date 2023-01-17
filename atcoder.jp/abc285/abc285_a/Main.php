<?php
  fscanf(STDIN, "%d %d", $a, $b);
  echo $a*2 == $b || $a*2+1 == $b ? 'Yes' : 'No';