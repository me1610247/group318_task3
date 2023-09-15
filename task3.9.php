<?php

$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140];
 $x = 545;
 $n=0;
 $found=false;
echo '<br>';
foreach($numbers as $nums){
    if($nums===$x){
       $found=true;
        
    }
  }
  if($found){
    echo "found";
  }
  if(!$found){
    echo "not found";
  }

  echo '<br>';
        echo '<hr>';
        // show it is positive or negative
        if($x<0){
            echo "$x is negative";
        }else
        echo "$x is positive";
        echo '<br>';
        echo '<hr>';
        // count number of digits in $x
        echo "$x has ". strlen($x)." Digits";
        echo '<br>';
        echo '<hr>';
        if($x%2!=0){
            echo "$x odd";
        }else
        echo "$x even";
        echo '<br>';
        echo '<hr>';
        // prime number start from 2 
        for($i = 2; $i < $x; $i++) {
            if($x % $i == 0){
              $n++;
              break;
            }
          }
          
          if ($n == 0){
            echo "$x  a prime number.";
          } else {
            echo "$x  not a prime number.";
          }
          echo '<br>';
          echo '<hr>';
          // to show is it read from right as left or no
          if($x==strrev($x)){
            echo "yes $x read from right as left";
          }else
          echo "number $x not read from right as left";
  echo '<br>';
  
