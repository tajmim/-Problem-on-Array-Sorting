<?php


function mergeSort($arr) {
    if (count($arr) == 1) return $arr;
    
    $mid = count($arr) / 2;
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    
    $left = mergeSort($left);
    $right = mergeSort($right);
    
    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            array_push($result, array_shift($left));
        } else {
            array_push($result, array_shift($right));
        }
    }
    
    return array_merge($result, $left, $right);
}

function binarySearch($arr, $target) {
    $low = 0;
    $high = count($arr) - 1;
    
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        
        if ($arr[$mid] == $target) return $mid;
        elseif ($arr[$mid] < $target) $low = $mid + 1;
        else $high = $mid - 1;
    }
    
    return $low;
}

function findTargetIndex(&$nums, $target) {
    $nums = mergeSort($nums);
    
    return binarySearch($nums, $target);
}

$nums1 = [1,7,3,5,6,9,15];
$target1 = 5;
echo findTargetIndex($nums1, $target1) . "\n";

$nums2 = [5,6,1,3];
$target2 = 2;
echo findTargetIndex($nums2, $target2) . "\n";

$nums3 = [1,3,5,6];
$target3 = 7;
echo findTargetIndex($nums3, $target3) . "\n";

?>
