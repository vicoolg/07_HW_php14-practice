<?php

$array1 = ['rthshgh', 'dfdfd', '565'];
$array2 = ['fgfh', 'vfdbbvbvbv', 'gdfgdf6565fgg5'];
// var_dump($array1);
// var_dump($array2);

function max_str ( $array1, $array2) {
    try {
        if (count($array1) == count($array2)) {
            $max_raz = 0; // создаем переменную для значения максимальной разницы
            for($i = 0; $i < count($array1); $i++) { // перебираем элементы первого массива
                for($j = 0; $j < count($array2); $j++) { // перебираем элементы второго массива
                    if(!is_string($array1[$i]) || !is_string($array2[$j])) {
                        echo 'элемент массива не является строкой';
                    exit();
                    }
                        $raz = abs(strlen($array1[$i]) - strlen($array2[$j])); //находим разницу каждой пары элементов
                        if ($max_raz < $raz) { //если посчитаная разница больше предыдущей
                        $max_raz = $raz; // присваиваем переменной большее значение разницы
                        }echo $max_raz; //  результат
                        return($max_raz); //возращаем значение максимальной разницы между парами элементов               
                    
                    
                }
            }                    
        }
        else {
            echo 'разное количестов элементов в массивах';
            exit();
            } 
                
    }
    catch (Exception $e) {
    echo 'Выброшено исключение: ', $e->getMessage(), "\n";
    exit();
    }            

}
max_str ( $array1, $array2); //запускаем функцию

