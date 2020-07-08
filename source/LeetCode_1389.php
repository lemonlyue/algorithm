<?php
class Solution {

    /**
     * @desc 递归方法
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    public $arr = [];
    function createTargetArray($nums, $index) {
        foreach ($index as $key => $item) {
            $this->insert($item, $nums[$key]);
        }
        return $this->$arr;
    }

    /**
     * @desc 插入方法, 判断当前数组位置是否有值, 有值则将值往后移, 没有值则插入
     * @param int $index
     * @param int $num
     */
    function insert($index, $num) {
        if (!isset($this->$arr[$index])) {
            $this->$arr[$index] = $num;
        } else {
            $temp = $this->$arr[$index];
            $this->insert($index + 1, $temp);
            $this->$arr[$index] = $num;
        }
    }


    /**
     * @desc 将 index 数组中的每一项遍历，判断在插入后实际对应的下标位置得到 ($_tmp_index), 然后通过该映射写入到结果中。
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    function createTargetArray2($nums, $index) {
        $target = [];
        $_tmp_indexs = [];

        foreach ($index as $i => $k) {
            if (in_array($k, $_tmp_indexs)) {
                foreach ($_tmp_indexs as &$_tmp_index) {
                    if ($_tmp_index >= $k) {
                        $_tmp_index ++;
                    }
                }
            }
            $_tmp_indexs[] = $k;
        }

        foreach ($_tmp_indexs as $i => $k) {
            $target[$k] = $nums[$i];
        }
        ksort($target);
        return $target;

    }
}