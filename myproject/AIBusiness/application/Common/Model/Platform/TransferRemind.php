<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/10/19
 * Time: 14:11
 */
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-9-27
 * Time: 14:26
 */

namespace app\Common\Model\Platform;
use think\Config;
use think\Model;

class TransferRemind extends Base{
    /**
     * @param $data
     * 新增合同
     */
    public  function add($data){
        $result =  $this->insert($data);
        return $result;
    }


    /**
     * @param $data
     * 删除合同
     */
    public  function deletes($where){
        $result = $this->where($where)->delete();
        return $result;
    }

    /**
     * @param $data
     * 更加用户ID 合同ID 查询数据
     * */
    public  function getinfo($user_id,$contract_id){
        $info = $this->where([
            'user_id' => $user_id,
            'contract_id'=>$contract_id
        ])->find();
        return $info;

    }
	

}