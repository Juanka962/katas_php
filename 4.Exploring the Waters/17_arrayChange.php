<?php
/*
You are given an array of integers. On each move you are allowed to increase exactly one of its element by one. 
Find the minimal number of moves required to obtain a strictly increasing sequence from the input.

Example

For inputArray = [1, 1, 1], the output should be
solution(inputArray) = 3.

*/

function solution($inputArray) {
    $count = 0;
    
    for($i = 1;$i<sizeof($inputArray);$i++){
       if ($inputArray[$i] <= $inputArray[$i - 1]) {
            $diff = $inputArray[$i - 1] - $inputArray[$i] + 1;
            $inputArray[$i] += $diff;
            $count += $diff;
        }
    }
    return $count;
}


?>