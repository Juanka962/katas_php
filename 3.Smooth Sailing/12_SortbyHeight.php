<?php
/*
Some people are standing in a row in a park. There are trees between them which cannot be moved. 
Your task is to rearrange the people by their heights in a non-descending order without moving the trees. 
People can be very tall!

Example

For a = [-1, 150, 190, 170, -1, -1, 160, 180], the output should be
solution(a) = [-1, 150, 160, 170, -1, -1, 180, 190].

*/
function solution($a) {
    $arr1 = [];
    $arr2 = [];
    for($i=0;$i<sizeof($a);$i++){
        if($a[$i]!=-1){
            array_push($arr1,$a[$i]);
        }
    }
    sort($arr1);
    for($i=0;$i<sizeof($a);$i++){
        if($a[$i]!=-1){
            array_push($arr2,$arr1[0]);
            array_shift($arr1);
        }
        if($a[$i] == -1){
            array_push($arr2,$a[$i]);
        }
    }
    return $arr2;
    
}


?>