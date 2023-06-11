<?php
/*
Write a function that reverses characters in (possibly nested) parentheses in the input string.

Input strings will always be well-formed with matching ()s.

Example

    For inputString = "(bar)", the output should be
    solution(inputString) = "rab";
    For inputString = "foo(bar)baz", the output should be
    solution(inputString) = "foorabbaz";
    For inputString = "foo(bar)baz(blim)", the output should be
    solution(inputString) = "foorabbazmilb";

*/

function solution($str){
    while(strpos($str, '(') !== false){
        $str = preg_replace_callback('/\(([^()]*)\)/', function($matches){
            return strrev($matches[1]);
        }, $str);
    }
    
    return $str;
}

?>