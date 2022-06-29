<?php
 fscanf(STDIN, "%d", $N);
 for($i=0; $i < $N; $i++) {
     $LRs[] = explode(" ", trim(fgets(STDIN)));
 }
 $times = array_fill(1, 2*10**5, 0);
 foreach($LRs as $LR) {
    $times[$LR[0]] += 1;
    $times[$LR[1]] -= 1;
 }
 $login = false;
 $count = 0;
 foreach($times as $key => $time) {
     if($time > 0) {
         $count += $time;
         if($login == false) {
             $login = true;
             echo $key . " ";
         }
     } else if($time < 0 ) {
         $count += $time;
         if($login && $count == 0) {
             $login = false;
             $count = 0;
             echo $key . "\n";
         }
     }
 }