<?php

/*
Given a year, return the century it is in. The first century spans from the year 1 up to and including the year 100, 
the second - from the year 101 up to and including the year 200, etc.

Example

    For year = 1905, the output should be
    solution(year) = 20;
    For year = 1700, the output should be
    solution(year) = 17.

*/

function solution($year) {
    $sig = (string)$year ;
    $siglo='';
    $aum='';
    for($i=strlen($sig);$i>=0;$i--){
        if(strlen($aum)<2){
            $aum.=$sig[$i];
        }
        else{
            $siglo.=$sig[$i];
        }
        
    }
    if(intval(strrev($aum))>0){
        $siglo = intval(strrev($siglo))+1;
    }
    else{
        $siglo = intval(strrev($siglo));
    }
    return $siglo;
}

?>