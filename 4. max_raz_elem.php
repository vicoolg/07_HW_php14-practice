<?php

$array1 = ['rthshgh', 'dfdfd', '565'];
$array2 = ['fgfh', 'vfdbbvbvbv', 'gdfgdf6565fgg5'];
// var_dump($array1);
// var_dump($array2);

function max_str ( $array1, $array2) {
    $max_raz = 0;
    for($i = 0; $i < count($array1); $i++) {
        for($j = 0; $j < count($array2); $j++) {
            $raz = abs(strlen($array1[$i]) - strlen($array2[$j]));
            if ($max_raz < $raz) {
                $max_raz = $raz;
                
            }
        } 
    }echo $max_raz;
    return($max_raz);
    
}
max_str ( $array1, $array2);

     