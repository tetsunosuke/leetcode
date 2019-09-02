<?php

namespace seven;

class Solution {
    function r($x) {
        $x = strrev($x);
        if ($x > pow(2, 31) -1 || $x < -(pow(2, 31))) {
            return 0;
        } else {
            return intval($x);
        }
    }
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if ($x > 0) {
            return self::r($x);
        } else {
            $x = abs($x);
            return -(self::r($x));
        }
    }
}

