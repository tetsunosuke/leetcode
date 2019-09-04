<?php
namespace leetcode\eleven;↲

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $maxarea = 0;
        $l = 0;
        $r = count($height);

        while($l < $r) {
            $maxarea = max($maxarea, min($height[$l], $height[$r]) * ($r-$l));
            if ($height[$l] < $height[$r]) {
                $l++;
            } else {
                $r--;
            }
        }

        return $maxarea;
    }
    function maxAreaTooSlow($height) {
        // 仮の最大
        $m = 0;

        $all = [];
        $length = count($height);
        for($i=0; $i < $length; $i++) {
            for ($j = $i+1; $j < $length; $j++) {

                $tmp = min($height[$i], $height[$j]) * ($j-$i);
                if ($m < $tmp) {
                    $m = $tmp;
                }
            }
        }
        return $m;
    }
}
