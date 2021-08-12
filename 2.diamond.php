
<?php

function bril($array) {

    for($i = 1; $i <= $array; $i++) {
        if($i % 2 == 1) { //
            echo str_repeat(' ',($array-$i)/2);
            echo str_repeat('*',$i).PHP_EOL;
          
        }
    }
    for($i = $array - 1; $i >= 1; $i--) {
        if($i % 2 == 1) {
            echo str_repeat(' ',($array-$i)/2);
            echo str_repeat('*',$i).PHP_EOL;
            
            

            
        }
    }
            // else {
            //     echo str_repeat("* ", $i).PHP_EOL;
            // }
        
    
}

bril(5);
//  function my_sum($arr) {
//     $sum = 0;
//     for ($i = 0; $i <= $arr[-1]; $i++) {
//         echo $i;
       
//     }
//     $sum = $sum + $arr[$i];
//     echo $sum;
// }
// $arr = [2, 5, 4, 8, 6];
// my_sum($arr);