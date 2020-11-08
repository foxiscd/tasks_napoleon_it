<?php

$arr = [3, 4, 1, 2, 16, 27, 13];

function sortArray(array $array)
{
    for($i=0; $i < count($array); $i++) {
        if ($array[$i] % 2){
            $oddArray[] = $array[$i];
        }else{
            $evenArray[] = $array[$i];
        }
    }

    for ($i=0; $i < count($oddArray); $i++){
        for($j = $i+1; $j < count($oddArray); $j++)
        {
            if($oddArray[$j] > $oddArray[$i])
            {
                $temp = $oddArray[$i];
                $oddArray[$i] = $oddArray[$j];
                $oddArray[$j] = $temp;
            }
        }
    }

    for ($i=0; $i < count($evenArray); $i++){
        for($j = $i+1; $j < count($evenArray); $j++)
        {
            if($evenArray[$j] < $evenArray[$i])
            {
                $temp = $evenArray[$i];
                $evenArray[$i] = $evenArray[$j];
                $evenArray[$j] = $temp;
            }
        }
    }
    return array_merge($evenArray,$oddArray)  ;
}

print_r(sortArray($arr));