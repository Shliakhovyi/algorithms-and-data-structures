<?php

$a = [2,3,8,1,10,18,7];

function bubbleSort(&$A) {
    for($i=0; $i<count($A); $i++) {
        for($j = count($A)-1; $j > $i; $j--) {
            if($A[$j]< $A[$j-1]) {
                $tmp = $A[$j];
                $A[$j] = $A[$j-1];
                $A[$j-1] = $tmp;
            }
        }
    }
}


bubbleSort($a);
echo json_encode($a);