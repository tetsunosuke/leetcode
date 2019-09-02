<?php
namespace one;

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $cnt = count($nums);
        for($i = 0; $i < $cnt; $i++) {
            for($j=$i+1; $j<$cnt;$j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    return [$i, $j];
                }
            }
        }
    }
}
