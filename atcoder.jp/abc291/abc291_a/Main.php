<?php
  fscanf(STDIN, "%s", $S);
  for($i=0; $i < strlen($S); $i++) {
    if (ctype_upper($S[$i])) {
      echo $i + 1;
    }
  }
?>