<?php
$names1 = ["Alice","Bob", "Charlie", "Dave"];
$names2 = ["Alice", "Charlie", "Dave"];
function searchForBob($names){
    for($i=0;$i<count($names);$i++){
        if($names[$i]==="Bob"){
           return $i;
        }
    }
    return -1;
}
echo "Location of Bob is ".searchForBob($names1);
echo '<br>';
echo '<hr>';
echo "Location of Bob is ". searchForBob($names2);