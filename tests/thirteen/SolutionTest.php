<?php
namespace leetcode\thirteen;

require_once 'vendor/autoload.php';
require_once dirname(__FILE__) . '/../../src/thirteen/Solution.php';
use \PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {

    /**
     * @dataProvider provider
     */
    public function testRomanToInt($input, $expected) {
        $obj = new Solution();
        $this->assertSame($expected, $obj->romanToInt($input));
    }

    public function provider() {
        return [
            ["III", 3],
            ["IV", 4],
            ["IX", 9],
            ["LVIII", 58],
            ["MCMXCIV", 1994],
        ];
    }
}
