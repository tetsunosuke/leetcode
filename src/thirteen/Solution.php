<?php
namespace leetcode\thirteen;

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $sValues= [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
            ];

        $arabic = 0;
        $prev = null;
        for ( $n = strlen($s) - 1; $n >= 0; --$n ) {
            $curr = $s[$n];
            if ( is_null($prev) ) {
                $arabic += $sValues[$s[$n]];
            } else {
                if ($sValues[$prev] > $sValues[$curr]) {
                    $arabic -= $sValues[$curr];
                } else {
                    $arabic += $sValues[$curr];
                }
            }
            $prev = $curr;
        }

        return $arabic;
    }
}
