<?php

function rotateArray($arr, $k) {
    $n = count($arr);
    $k = $k % $n; // Ensure k is within bounds

    if ($k === 0) return $arr; // No rotation needed

    $rotatedArr = [];
    // Add the last k elements to the beginning
    for ($i = $n - $k; $i < $n; $i++) {
        $rotatedArr[] = $arr[$i];
    }
    // Add the remaining elements
    for ($i = 0; $i < $n - $k; $i++) {
        $rotatedArr[] = $arr[$i];
    }

    return $rotatedArr;
}

// Example usage
$arr = [1, 2, 3, 4, 5, 6, 7];
$rotatedArr = rotateArray($arr, 3);
print_r($rotatedArr);