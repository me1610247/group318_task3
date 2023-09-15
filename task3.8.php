<?php
echo 'numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10]';
echo '<br>';
$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// we must sort the array to find decrement & increment of numbers
echo "Second Largest Number is ";
function largestSecond($numbers){
    sort($numbers);
    echo $numbers[sizeof($numbers)-2];
    echo '<br>';
} largestSecond($numbers);