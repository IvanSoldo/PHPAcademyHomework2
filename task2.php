<?php

$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$alphabetChars = explode(',', $alphabet);
$alphabetSize = count($alphabetChars);
const START = 12;



for ($i = 0; $i < $alphabetSize; $i++) {
    for ($j = 0; $j < $alphabetSize; $j++) {

        if (START - $i === $j) {
            echo "<b>$alphabetChars[$j]</b>";

        } else if (START + $j === $i) {
            echo "<b>$alphabetChars[$j]</b>";

        } else {
            echo $alphabetChars[$j];
        }
    }
    echo "<br>";
    $removed = array_shift($alphabetChars);
    array_push($alphabetChars, $removed);
}






