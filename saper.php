<?php

$ar = [[1,1,1,0], [1,'*',2,1], [2,3,'*',1], ['*',2,1,1]];
function styletable($ar){
    for($i=0; $i<count($ar);$i++){
        for ($j=0;$j<count($ar[$i]);$j++){
            if(intval($ar[$i][$j]) || $ar[$i][$j]=='0'){
                echo "\x1b[1;31m".$ar[$i][$j]."\x1b[1;31m".'|';
            }else{
                echo "\x1b[1;33m".$ar[$i][$j]."\x1b[1;33m".'|';
            }

        }
        echo "\n";
    }
}
function two_dimensions_zeros($rows, $columns){

 $field = [];
 foreach (range(1, $rows) as $value) {
  $field[] = array_fill(0, $columns, 0);
 }

 return $field;
}
