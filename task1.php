<?php

$name = 'ivan';
$nameChars = str_split($name);
$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$alphabetChars = explode(',', $alphabet);
$nameSize = count($nameChars);
$alphabetSize = count($alphabetChars);
$reversedName = array_reverse($nameChars);


for ($i = 0; $i < $nameSize; $i++) {
    for ($j = 0; $j < $alphabetSize; $j++) {

        if ($nameChars[$i] == $alphabetChars[$j] && $reversedName[$i] == $alphabetChars[$j]) {
            echo "<b><u>$alphabetChars[$j]</u></b>";

        } else if ($nameChars[$i] == $alphabetChars[$j]) {
            echo "<b>$alphabetChars[$j]</b>";

        } else if ($reversedName[$i] == $alphabetChars[$j]) {
            echo "<u>$alphabetChars[$j]</u>";

        } else {
            echo $alphabetChars[$j];
        }
    }
    echo "<br>";
}










