<?php
function solution($n) {
    /*
Ticket numbers usually consist of an even number of digits. A ticket number is considered lucky if the sum 
of the first half of the digits is equal to the sum of the second half.

Given a ticket number n, determine if it's lucky or not.

Example

    For n = 1230, the output should be
    solution(n) = true;
    For n = 239017, the output should be
    solution(n) = false.

    
    */
    $mitad = strlen(strval($n))/2;
    $first = substr($n,0,$mitad);
    $second = substr($n,$mitad,strlen($n));
    $result1 = 0;
    $result2 = 0;
    for($i=0;$i<strlen($first);$i++){
        $result1+=intval($first[$i]);
    }
    for($i=0;$i<strlen($second);$i++){
        $result2+=intval($second[$i]);
    }
    
   
    return $result1 == $result2;
}




?>