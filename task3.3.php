<?php

$array=[1,10,5,2,11,8,7,6];
echo "Array of Numbers is ";
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br>';

echo "Largest Number is : ". max($array);
/*
or another solution to find largest number 
*/ 
echo '<br>';
echo '<br>';
    sort($array);
echo "Largest Number is (second method) : ".$array[sizeof($array)-1];
echo '<br>';
echo '<br>';
echo "Largest Number is (third method) : ". array_pop($array);
echo '<br>';
echo '<br>';
echo '<br>';
echo "Smallest Number is : ". min($array);
echo '<br>';
echo '<br>';
/*
or another solution to find smallest number 
*/
$smallest=array_shift($array);
echo "Smallest Number is (second method) : ". $smallest;
