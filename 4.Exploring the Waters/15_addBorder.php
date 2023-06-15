<?php

/*
Given a rectangular matrix of characters, add a border of asterisks(*) to it.

Example

For

picture = ["abc",
           "ded"]

the output should be

solution(picture) = ["*****",
                     "*abc*",
                     "*ded*",
                     "*****"]


*/


function solution($picture) {
    $number = str_repeat('*',strlen($picture[0]));
    array_push($picture,$number);
    array_unshift($picture,$number);
    for($i=0;$i<sizeof($picture);$i++){
         $picture[$i] = '*'.$picture[$i].'*';
    }
    return $picture;
}

?>