<?php

/*
Given an array of integers, find the pair of adjacent elements that has the largest product and return that product.

Example

For inputArray = [3, 6, -2, -5, 7, 3], the output should be
solution(inputArray) = 21.

*/

function solution($inputArray) {
    $max = $inputArray[0]*$inputArray[1];
    for($i = 1; $i<count($inputArray)-1;$i++){
        $possibleMax = $inputArray[$i]*$inputArray[$i+1];
        if($max<$possibleMax){
            $max = $possibleMax;
        }
    }
    return $max;
}




?>