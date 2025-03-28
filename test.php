<?php 
$arr = [1,1,1,2,2,3,3,2,2,4,4,75,4,75,6,75,6,75,6,8,9,0,75,3,2,1,4,6,75,4,4];
// $arr = [1,3,4,5,3,6,7,8,8,6,4,5,3,4,5,6,7,8,9,5,3,2,2,34,65,7,4];

// function findNumber($arr){
//     $temp = [];
//     foreach($arr as $v){
//         if(array_key_exists($v, $temp)){
//             $temp[$v] += 1;
//         }else{
//             $temp[$v] = 1;
//         }
//     }
//     return $temp;
// }

function findNumber(array $arr): array {
    // Use array_count_values to count occurrences directly
    $temp = array_count_values($arr);
    arsort($temp); // Sort by values in descending order
    return $temp;
}


$a = findNumber($arr);
// arsort($a);
print_r($a);

?>