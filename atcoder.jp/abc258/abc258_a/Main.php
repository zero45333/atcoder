<?php
    fscanf(STDIN, "%d", $K);
    echo date('H:i', strtotime('21:00 +' . $K .'minute'));