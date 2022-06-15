<?php
  fscanf(STDIN, "%d %d %d", $num[], $num[], $num[]);
  $b = $num[1];
  sort($num);
  echo $b == $num[1] ? 'Yes' : 'No';