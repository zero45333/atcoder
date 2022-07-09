<?php
    fscanf(STDIN, "%s", $S);
    fscanf(STDIN, "%s", $T);
    $si=0;
    for($i=0; $i < strlen($T); $i++) {
        if($T[$i] != $S[$si]) {
            if(!isset($S[$si-1]) || !isset($S[$si-2])) {
                echo 'No';
                exit;
            }
            if($S[$si - 1] != $S [$si - 2]) {
                echo 'No';
                exit;
            }
            if($S[$si - 1] != $T[$i]) {
                echo 'No';
                exit;
            }
        } else {
            $si++;
        }

    }
    echo 'Yes';