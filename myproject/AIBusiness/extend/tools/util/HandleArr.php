<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-8-24
 * Time: 14:26
 * 数组处理类
 */


namespace tools\util;

class HandleArr {

    /**
     * @param $rows
     * @param $key
     * @return array
     * 生成没有键值的数组回去
     */
    public function  make_nokey_arr($rows,$key){
        $result = array();
        foreach ($rows as $value) {
            $result[] = $value[$key];
        }
        return $result;
    }

}