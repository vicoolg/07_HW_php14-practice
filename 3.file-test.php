
<?php
$array = file('C:\OpenServer\domains\localhost\num.txt');


function result_str ($array) {
    foreach($array as $str) {
        $str1 = explode(';',$str);
        $result1 = explode(' ', $str1[0]); //
        $result2 = explode(' ', $str1[1]);
        $str_sum = array_sum($result1);
        $count = count($result1);
        $result4=($str_sum/$count);
        $result5=($str_sum%$count);
     
        if(( $result2[0]  == $result4) && ($result2[1] == $result5)){
            var_dump($str.'True').PHP_EOL;
        }
            elseif ($result2[0] !== $result4 && $result2[1] !== $result5){
            var_dump($str.' False').PHP_EOL;
            }
    }
     return $str;
}
result_str ($array);