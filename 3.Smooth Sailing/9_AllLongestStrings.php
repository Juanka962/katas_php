<?php

/*
Given an array of strings, return another array containing all of its longest strings.

Example

For inputArray = ["aba", "aa", "ad", "vcd", "aba"], the output should be
solution(inputArray) = ["aba", "vcd", "aba"].

*/
function solution($inputArray) {
    $size = 0;
    $arr = [];
    for($i = 0; $i<sizeof($inputArray);$i++){
        if($size<strlen($inputArray[$i])){
             $size = strlen($inputArray[$i]);
        }
    }
    for($i = 0; $i<sizeof($inputArray);$i++){
        if(strlen($inputArray[$i]) === $size){
            array_push($arr,$inputArray[$i]);
        }
    }
    return $arr;
}

?>