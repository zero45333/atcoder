<?php
  fscanf(STDIN, "%s", $S);
  $result = strrpos($S, 'a');
  echo $result === false ? -1 : $result + 1;