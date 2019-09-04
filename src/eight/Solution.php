<?php

namespace leetcode\eight;

class Solution {

    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str) {
        // この状態だと、"   -115579378e25" のテストケース対応不能...
        $i = intval($str);
        if ($i > pow(2, 31) - 1){
            return pow(2, 31) - 1;
        }

        if ($i < -(pow(2, 31))) {
            return -pow(2, 31) ;
        }
        return intval($str);
    }
}
