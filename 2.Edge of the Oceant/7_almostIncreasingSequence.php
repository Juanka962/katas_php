<?php

/*
Given a sequence of integers as an array, determine whether it is possible to obtain a strictly increasing sequence by removing no more than one element from the array.

Note: sequence a0, a1, ..., an is considered to be a strictly increasing if a0 < a1 < ... < an. Sequence containing only one element is also considered to be strictly increasing.

Example

    For sequence = [1, 3, 2, 1], the output should be
    solution(sequence) = false.

*/
function solution($sequence) {
    $mistakes = 0;
    
    for($i = 0; $i < count($sequence)-1; $i++) {
        if($sequence[$i] >= $sequence[$i+1]) {
            if(count($sequence) > $i+2 && 
               $sequence[$i] >= $sequence[$i+2] && 
               $i > 0 && 
               $sequence[$i-1] >= $sequence[$i+1]) {
                return false;   
            }
            else
                $mistakes++;
        }
        
        if($mistakes > 1)
            return false;
    }
    
    return true;
}



?>