<?php
//n numbers in array
$n=25;
$Numbers=[];
for($i=0;$i<=$n;$i++){
    // store the number itself from 0 to 100 in the array
    $Numbers[]=rand(0,100);
}
$sum=array_sum($Numbers);
$average=$sum/$n;
// intval to make the output integer only not float
echo "Average of total N ($n) Numbers is ". intval($average);