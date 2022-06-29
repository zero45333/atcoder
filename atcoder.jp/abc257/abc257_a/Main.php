<?php
    fscanf(STDIN, "%d %d", $N, $X);
    echo chr(ceil($X/$N)+64);