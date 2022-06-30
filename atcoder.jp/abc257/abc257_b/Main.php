<?php
    fscanf(STDIN, "%d %d %d", $N, $K, $Q);
    $As = explode(" ", trim(fgets(STDIN)));
    $L = explode(" ", trim(fgets(STDIN)));
    $ans = array_fill(1, $N, 0);
    $count = 1;
    foreach($As as $A) {
        $ans[$A] = $count++;
    }
    for($i=0; $i < $Q; $i++) {
        $hit = array_search($L[$i], $ans);
        if($hit < $N && $ans[$hit+1] == 0) {
            $ans[$hit+1] = $ans[$hit];
            $ans[$hit] = 0;
        }
    }
    foreach($ans as $key => $an) {
        if($an) echo $key . " ";
    }