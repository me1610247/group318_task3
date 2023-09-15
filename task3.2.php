<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$Array2D = [];
echo "Dictated of second array by first array = ";
// Creating a 2D array of size 2x5 with elements dictated by the 1D array
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $Array2D[$i][$j] = $numbers[$i * 5 + $j];
        echo $Array2D[$i][$j] . " ";

    }
}
