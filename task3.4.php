<?php 
$array = [1,10,5,2,11];
$x = 3 ;
 
$smallerNumber=0;
$LagerNumber=0;

foreach ($array as $nums){
    if($nums < $x){
        $smallerNumber ++;
    }else
        $LagerNumber++;
}
echo "Numbers Smaller than ($x) = ". $smallerNumber;
echo '<br>';
echo "Numbers Larger than  ($x) = ". $LagerNumber;

