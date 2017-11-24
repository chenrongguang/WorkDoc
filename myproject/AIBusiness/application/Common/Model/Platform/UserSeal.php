<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/11/23
 * Time: 14:17
 */

namespace app\Common\Model\Platform;
use think\Db;
use think\Config;

class UserSeal extends Base
{
    public function addUserSeal($sealInfo)
    {
        $info = $this->data($sealInfo)->save();
        return $info;
    }

    public function updateseal($where,$update){
        $info = $this->where($where
        )->update($update);
        return $info;
    }

    public function getExistSealCode($sealpara)
    {
        $result =
            $this->where($sealpara)
                ->where('end_time', 'gt', \tools\util\TimeF::timeform1(date('Y-m-d H:i:s')))
                ->field('seal_code')
                ->find();
        return $result;
    }

    public function getUserSeal($info)
    {
        $result =
            $this->where($info)
                ->field('id,end_time,seal_code,seal_password,confirm_status,pfx_id')
                ->find();
        return $result;
    }

    public  function  getlist($where){
        $list = $this->field('id,default,user_id,confirm_status,seal_code,seal_type,name,image_name,image_name2,image_width,image_height,image_shape,font_size,color,seal_password,seal_img')
        ->where($where)->order('create_time desc')  ->select();
        return $list;
    }

    public  function  getsingle($where){
        $result= $this
            ->where($where)->find();
        return $result;
    }

    public  function  setdefaults($where,$id){
         $where['user_id']  = array('eq',$where['user_id']);
         $where['id']  = array('neq',$where['id']);
         $data['id']  = $id;
         Db::startTrans();
        if(false !== $this->where($where)->setField('default','N')){
            try {
                // 提交事务
                $result = $this->where($data)->update(['default'=>'Y']);
                Db::commit();
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
            }
        }
        return $result;
    }


    //根据印章id,关联查询证书信息
    public function getSealPfxInfo($seal_code)
    {
        $prefix = Config::get('database.prefix');
        $result = $this->alias('a')
            ->field("a.seal_code,
                     a.pfx_id,
                     b.StartTime,
                     b.EndTime,
                     b.SerialNo"
            )
            ->join($prefix.'user_pfx b','a.pfx_id = b.pfx_id','inner')
            ->where([
                'a.seal_code' => $seal_code,
                'a.use_yn' => 'Y'
            ])->find();
        return $result;
    }
}