<?php

$number = fopen("php://stdin","r");
$level_count = (int)fgets($number); //5
$rooms_on_level = (int)fgets($number); //4
$room_number = (int)fgets($number); //61

$rooms = $level_count * $rooms_on_level; //20
// var_dump($rooms);

$access = ceil($room_number / $rooms); // 61/20 => 4
$rest = $room_number % $rooms; //61 % 20 => 1
$level = $rest ? ceil($rest / $rooms_on_level) : $level_count;
echo $access . ' ' . $level;