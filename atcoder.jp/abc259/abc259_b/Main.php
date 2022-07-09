<?php
    fscanf(STDIN, "%d %d %d", $a, $b, $d);
    $angle = deg2rad($d);
    $x = ($a) * cos($angle) - ($b) * sin($angle);
    $y = ($a) * sin($angle) + ($b) * cos($angle);
    echo $x . " ". $y;