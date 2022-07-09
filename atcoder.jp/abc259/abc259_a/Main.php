<?php
    fscanf(STDIN, "%d %d %d %d %d", $N, $M, $X, $T, $D);
    $length = $T;
    for($i=$N; $i >= 0; $i--) {
        if($i  < $X) {
            $length -= $D;
        }
        if($i == $M) {
            echo $length;
            exit;
        }
    }