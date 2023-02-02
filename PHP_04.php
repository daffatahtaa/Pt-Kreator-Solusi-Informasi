<?php

$array = [750, 483, 224, 198, 60, 698, 400, 709, 168];

$n = count ($array);

for ($i = 0; $i < $n ; $i++){
    for ($j = 0; $j < $n-$i; $j++){
        if ($array[$j] > $array[$j+1]){
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}

print_r($array);
?>