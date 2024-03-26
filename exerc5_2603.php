<?php

$x=15;
$count=0;
$num=2;
while($count < $x){
    for($i =2;$i<= $num/2; $i++){
        if($num % $i == 0){
            break;
        }
    }
    if($i > $num/2){
        echo("$num <br>");
        $count++;
    }
    $num++;
    
}