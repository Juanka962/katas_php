<?php

/*
Given two strings, find the number of common characters between them.

Example

For s1 = "aabcc" and s2 = "adcaa", the output should be
solution(s1, s2) = 3.

Strings have 3 common characters - 2 "a"s and 1 "c".
*/

function solution($s1, $s2) {
    $common = 0;
    
    foreach (count_chars($s1, 1) as $key => $val) {
        $common += min(substr_count($s2, chr($key)), $val);      
    }
    return $common;
}


?>