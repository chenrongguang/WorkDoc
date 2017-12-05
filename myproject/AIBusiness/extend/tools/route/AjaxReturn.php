<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-8-24
 * Time: 14:26
 * ajax返回类
 */

namespace tools\route;

class AjaxReturn {

    /**
     * @param $rep_data
     */
    public  static  function ajx_return($rep_data){
        header('Content-Type:application/json; charset=utf-8');
        exit(json_encode($rep_data));
    }

}