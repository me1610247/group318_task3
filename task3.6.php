<?php
function moveZerosToEnd(&$nums) {
    $n = count($nums);
    $zeroCount = 0;
    
    // Move non-zero elements to the beginning of the array
    for ($i = 0; $i < $n; $i++) {
        if ($nums[$i] != 0) {
            $nums[$zeroCount] = $nums[$i];
            $zeroCount++;
        }
    }
    
    // Fill the remaining elements with zeros
    while ($zeroCount < $n) {
        $nums[$zeroCount] = 0;
        $zeroCount++;
    }
}

// Test case
$nums = [0, 1, 0, 3, 12];
moveZerosToEnd($nums);

// Print the resulting array
echo '<pre>';
print_r($nums);
echo '</pre>';
?>