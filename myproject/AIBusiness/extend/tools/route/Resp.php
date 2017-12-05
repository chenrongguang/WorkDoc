<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-8-24
 * Time: 14:26
 * 输出工具类
 */


namespace tools\route;

class Resp {

    /**
     * @param string $flag 成功、失败标志
     * @param string $code 编码
     * @param string $msg 提示信息
     * @param array $data 输出的数据
     * @return array
     */
    public static  function get_response($flag ='SUCCESS',$code='0',$msg='',$data=[]){

        //如果消息为空，则根据code去获取
        if(empty($msg)){
            $msg= getmsgbycode($code);
        }

        $return = [
            'result' => $flag,
            'code' => $code,
            'msg' => $msg
        ];
        if (!empty($data) && is_array($data)) {
            $return['return_data'] = $data;
        }
        return $return;
    }

    private function getmsgbycode($code){
        //todo

        return '处理成功';

    }

}