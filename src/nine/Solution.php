<?php

namespace nine;

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        return strrev($x) === (string)$x;
    }
}
