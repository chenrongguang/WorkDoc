<?php
namespace app\cli\controller;

//用于统计合同汇总到输出表
use app\admin\Controller;
use think\Exception;
use think\Db;
use think\Model;


class ContractStat
{
    //定时查出合同统计数据 存到新表中
    public function all()
    {
        $t = strtotime(date("Y-m-d",strtotime("-1 day"))); //默认查询系统前一天的数据
        $start = mktime(0,0,0,date("m",$t),date("d",$t),date("Y",$t));
        $end = mktime(23,59,59,date("m",$t),date("d",$t),date("Y",$t));
        $where['complete_time'] = ['between',"$start,$end"];
        $list = Db::name('Contract')->field("contract_id")->where($where)->select();
        $data['complete_time'] = $t;
        $data['share'] = count($list);
        //判断是否存在相同的日期 存在择更新
        $up_data['complete_time'] = $t;
        if($info = Db::name('ContractStat')->where($up_data)->find()){
            Db::startTrans();
            try {
                Db::name('ContractStat')->where('id', $info['id'])->update(['share'=>$data['share'] ]);
                // 提交事务
                Db::commit();
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
            }
        }else{
            Db::startTrans();
            try {
                Db::name('ContractStat')->insert($data);
                // 提交事务
                Db::commit();
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
            }
        }
        usleep(500);

    }
}
