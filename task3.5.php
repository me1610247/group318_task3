<?php
echo 'Array_of_names(["eraasoft", "backend", "group313"]) ';
echo '<br>';
echo '<br>';
echo '<br>';
echo "capitalized Input Array = ";
function ArrayofNames(){
    $Array_of_names=['eraasoft',"backend","group318"];
    foreach ($Array_of_names as $capName){
         echo '"'  ." ".ucwords($capName)." ". '' ;
    }
}
echo ArrayofNames();
