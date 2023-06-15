<?php

/*
Given a string, find out if its characters can be rearranged to form a palindrome.

Example

For inputString = "aabb", the output should be
solution(inputString) = true.

We can rearrange "aabb" to make "abba", which is a palindrome

*/

function solution($inputString) {
    $letters = array();
    $len = strlen($inputString);
    
    for($i = 0; $i < $len; $i++) {
        $letters[ord($inputString[$i]) - 97]++;
    }
    
    $uneven = 0;
    
    foreach($letters as $char) {
        if($char % 2 != 0) {
            $uneven++;
        }
        if($uneven > 1) {
            return false;
        }
    }
    
    return true;
}




?>