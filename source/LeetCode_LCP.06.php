<?php
class Solution {

    /**
     * 优化
     * @param Integer[] $coins
     * @return Integer
     */
    function minCount($coins) {
        $num = 0;
        foreach ($coins as $coin) {
            $num += (int)($coin / 2) + $coin % 2;
        }
        return $num;
    }

    
    /**
     * @param Integer[] $coins
     * @return Integer
     */
    function minCount2($coins) {
        $num = 0;
        foreach ($coins as $coin) {
            if ($coin % 2 === 0) {
                $num += intval($coin / 2);
            } elseif ($coin / 2 >= 1) {
                $num += intval($coin / 2) + 1;
            } else {
                $num += 1;
            }
        }
        return $num;
    }
}