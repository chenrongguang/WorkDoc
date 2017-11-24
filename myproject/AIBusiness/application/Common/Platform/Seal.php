<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-3-4
 * Time: 16:02
 * 数据权限校验类
 */

namespace app\Common\Platform;

class Seal
{
    //检验各个参数的合法性,合法返回true,否则抛出异常，由上层接收:人名章参数检查
    public function checkNameSealParas($para)
    {
        //todo
        if (!($para['image_shape'] == 1 || $para['image_shape'] == 3)) {
            throw new \Exception('Y0208', 208);
        }
        if ($para['image_shape'] == 1) {
            if ($para['image_width'] != $para['image_height']) {
                throw new \Exception('Y0209', 209);
            }
        }
        return true;
    }

    //检验各个参数的合法性,合法返回true,否则抛出异常，由上层接收:企业章参数检查
    public function checkentSealParas($para)
    {
        //todo
        if (empty($para['image_name']) && empty($para['image_name2'])) {
            throw new \Exception('Y0213', 213);
        }

        //图片形状：1:方型；11：方形（带框）2：圆形 3：长方形；31：长方形（带框）
        if (!($para['image_shape'] == 1 || $para['image_shape'] == 11 || $para['image_shape'] == 2 || $para['image_shape'] == 3 || $para['image_shape'] == 31)) {
            throw new \Exception('Y0208', 208);
        }
        if ($para['image_shape'] == 1 || $para['image_shape'] == 11) {
            if ($para['image_width'] != $para['image_height']) {
                throw new \Exception('Y0209', 209);
            }
        }
        if($para['image_width']>200 || $para['image_width']<1 ||  $para['image_height']>200 || $para['image_height']<1 ){
            throw new \Exception('Y0212', 212);
        }
        return true;
    }

    //生成个人签名
    public function getMakeNameSeal($allpara, $pfxdata,$SerialNo)
    {
        $sealCode = \tools\db\MakeKey::getSealCode();

        try {

            $seal_pic=isset($allpara["seal_pic"])  && !empty($allpara["seal_pic"])? $allpara["seal_pic"] : "" ;//印章图片

            $obj_seal = new \app\Common\Cafactory\Seal();
            $result_name = $obj_seal->makeNamedSeal(
                base64_decode($pfxdata),
                "",
                $allpara['user_name'],
                "",
                $sealCode,
                $allpara['user_name'],
                "",
                $allpara['image_shape'],
                $allpara['image_width'],
                $allpara['image_height'],
                $allpara['color'],
                $allpara['font_size'],
                "",
                $SerialNo,
                $seal_pic
            );
            unset($obj_seal);
            return $result_name;
        } catch (\Exception $e) {
            \think\Log::write($e->getMessage());
            throw new \Exception('Y0206', 206);
        }
    }

    //生成企业印章
    public function getentSeal($allpara, $pfxdata,$image_data="",$SerialNo)
    {
        $sealCode = \tools\db\MakeKey::getSealCode();


        try {
            $obj_seal = new \app\Common\Cafactory\Seal();

            //如果没有传递实际的图片数据，那么调用接口自己根据参数生成
            if(empty($image_data)) {
                $image_data = $obj_seal->getSealImage($allpara); //获取印章图片
            }
            else{
                //读取文件流
                $object =str_replace(config('UPLOAD_CONFIG.outerhost')."/","",$image_data); //网址的域名部分替换掉
                $obj_upload = new \tools\upload\Oss();
                $image_data = $obj_upload->download($object);
                //如果失败，抛出异常
                if(!$image_data){
                    throw new \Exception('Y0214', 214);
                }
                unset($obj_upload);
                //$image_data=base64_decode($image_data);//进行base64解码
            }

            $result_seal = $obj_seal->makeSeal(
                //$pfxdata,
                base64_decode($pfxdata), //需要先解码之后传给印章接口
                "",
                $image_data,
                "",
                $allpara['user_name'],
                "",
                $sealCode,
                $allpara['user_name'],
                $allpara['seal_password'], //企业印章采用企业自己设置的印章密码
                "",
                0,//代表企业
                0, //代表普通印章
                $SerialNo
            );
            unset($image_data);
            unset($obj_seal);
            return $result_seal;
        } catch (\Exception $e) {
            \think\Log::write($e->getMessage());
            throw new \Exception('Y0210', 210);
        }
    }

    //编辑企业印章
    public function updateentSeal($allpara,$pfxdata,$sealCode,$image_data="",$SerialNo)
    {
        try {
            $obj_seal = new \app\Common\Cafactory\Seal();

            //如果没有传递实际的图片数据，那么调用接口自己根据参数生成
            if(empty($image_data)) {
                $image_data = $obj_seal->getSealImage($allpara); //获取印章图片
            }
            else{

                //读取印章图片
                $object =str_replace(config('UPLOAD_CONFIG.outerhost')."/","",$image_data); //网址的域名部分替换掉
                $obj_upload = new \tools\upload\Oss();
                $image_data = $obj_upload->download($object);
                //如果失败，抛出异常
                if(!$image_data){
                    throw new \Exception('Y0214', 214);
                }
                unset($obj_upload);
                //$image_data=base64_decode($image_data);//进行base64解码
            }

            $result_seal = $obj_seal->updateSeal(
                base64_decode($pfxdata), //需要先解码之后传给印章接口
                "",
                $image_data,
                "",
                $allpara['user_name'],
                "",
                $sealCode,
                $allpara['user_name'],
                $allpara['seal_password'], //该更新不更新密码，看看行不行了
                "",
                0,//代表企业
                0 //代表普通印章
                ,$SerialNo
            );
            unset($image_data);
            unset($obj_seal);
            return $result_seal;
        } catch (\Exception $e) {
            \think\Log::write($e->getMessage());
            throw new \Exception('Y0210', 210);
        }
    }


    //编辑个人签名
    public function updateperSeal($allpara,$pfxdata,$sealCode,$image_data="",$SerialNo)
    {
        try {
            $obj_seal = new \app\Common\Cafactory\Seal();

            //如果没有传递实际的图片数据，那么调用接口自己根据参数生成
            if(empty($image_data)) {
                $image_data = $obj_seal->getSealImage($allpara); //合成个人签名图片
            }
            else{

                //读取个人签名图片
                $object =str_replace(config('UPLOAD_CONFIG.outerhost')."/","",$image_data); //网址的域名部分替换掉
                $obj_upload = new \tools\upload\Oss();
                $image_data = $obj_upload->download($object);
                //如果失败，抛出异常
                if(!$image_data){
                    throw new \Exception('Y0214', 214);
                }
                unset($obj_upload);
                //$image_data=base64_decode($image_data);//进行base64解码
            }

            $result_seal = $obj_seal->updateSeal(
                base64_decode($pfxdata), //需要先解码之后传给印章接口
                "",
                $image_data,
                "",
                $allpara['user_name'],
                "",
                $sealCode,
                $allpara['user_name'],
                $allpara['seal_password'], //该更新不更新密码，看看行不行了
                "",
                1,//代表个人
                0 //代表普通签名
                ,$SerialNo
            );
            unset($image_data);
            unset($obj_seal);
            return $result_seal;
        } catch (\Exception $e) {
            \think\Log::write($e->getMessage());
            throw new \Exception('Y0210', 210);
        }
    }



    /**
     * @param $allpara
     * @param $seal_code
     * @param $start_time
     * @param $end_time
     * @throws \Exception
     * 插入生成的印章数据到数据库
     */
    public function insertSeal(
        $allpara,
        $seal_code,
        $start_time,
        $end_time,
        $image_data="",
        $pfx_id=""
    )
    {
        try {
            $sealInfo['seal_code'] = $seal_code;
            if (!empty($allpara['seal_password'])) {
                $sealInfo['seal_password'] = $allpara['seal_password']; //直接存明文
            }
            if (!empty($allpara['name'])) {
                $sealInfo['name'] = $allpara['name'];
            }
            if (!empty($allpara['image_name'])) {
                $sealInfo['image_name'] = $allpara['image_name'];
            }
            if (!empty($allpara['image_name2'])) {
                $sealInfo['image_name2'] = $allpara['image_name2'];
            }
            $sealInfo['image_width'] = $allpara['image_width'];
            $sealInfo['image_height'] = $allpara['image_height'];
            $sealInfo['image_shape'] = $allpara['image_shape'];
            $sealInfo['font_size'] = $allpara['font_size'];
            $sealInfo['color'] = $allpara['color'];
            $sealInfo['start_time'] = $start_time;
            $sealInfo['end_time'] = $end_time;
            if (!empty($allpara['default_yn'])) {
                $sealInfo['default_yn'] = $allpara['default_yn'];
            }
            if (isset($allpara['create_type'])) {
                $sealInfo['create_type'] = $allpara['create_type'];
            }
            if (!empty($allpara['seal_type'])) {
                $sealInfo['seal_type'] = $allpara['seal_type'];
            }

            if (!empty($image_data)) {
                $sealInfo['seal_img'] = $image_data;
            }
            if (!empty($pfx_id)) {
                $sealInfo['pfx_id'] = $pfx_id;
            }

            $sealInfo['create_time'] = time();
            $sealInfo['user_id'] = $allpara['user_id'];
            if (!empty($allpara['confirm_status'])) {
                $sealInfo['confirm_status'] = $allpara['confirm_status'];
            }
            $usersealModel = new \app\Common\Model\Platform\UserSeal();
            $addUserSeal = $usersealModel->addUserSeal($sealInfo);
            unset($usersealModel);
            return $addUserSeal;
        } catch (\Exception $e) {
            \think\Log::write("生成签章章错误：" . $e->getMessage());
            throw new \Exception('Y0207', 207);
        }
    }

    /**
     * @param $allpara
     * @param $seal_code
     * @return false|int
     * @throws \Exception
     */
    public function updateSeal(
        $allpara,
        $seal_code,
        $image_data,
        $pfx_id
    )
    {
        try {
            $where=array('seal_code'=>$seal_code);
            if (!empty($allpara['seal_password'])) {
                $sealInfo['seal_password'] = $allpara['seal_password']; //直接存明文
            }
            if (!empty($allpara['name'])) {
                $sealInfo['name'] = $allpara['name'];
            }
            if (!empty($allpara['image_name'])) {
                $sealInfo['image_name'] = $allpara['image_name'];
            }
            if (!empty($allpara['image_name2'])) {
                $sealInfo['image_name2'] = $allpara['image_name2'];
            }
            $sealInfo['image_width'] = $allpara['image_width'];
            $sealInfo['image_height'] = $allpara['image_height'];
            $sealInfo['image_shape'] = $allpara['image_shape'];
            $sealInfo['font_size'] = $allpara['font_size'];
            $sealInfo['color'] = $allpara['color'];

            if (!empty($image_data)) {
                $sealInfo['seal_img'] = $image_data;
            }

            if (!empty($pfx_id)) {
                $sealInfo['pfx_id'] = $pfx_id;
            }
            if (!empty($allpara['confirm_status'])) {
                $sealInfo['confirm_status'] = $allpara['confirm_status'];
            }
            $usersealModel = new \app\Common\Model\Platform\UserSeal();
            $updateseal = $usersealModel->updateseal($where,$sealInfo);
            unset($usersealModel);
            return $updateseal;
        } catch (\Exception $e) {
            \think\Log::write("更新印章错误：" . $e->getMessage());
            throw new \Exception('Y0207', 207);
        }
    }


    //印章过期，重新按生成一个印章，所有参数都不便，只是重新走证书流程，然后更新印章
    public function remakeSeal($id)
    {
        $usersealModel = new \app\Common\Model\Platform\UserSeal();
        $where['id']=$id;
        $obj_result= $usersealModel->getsingle($where);
        $seal_type=$obj_result['seal_type'];

        //企业印章更新
        if($seal_type=="e"){
            $this->remake_EntSeal($obj_result);
        }
        //个人签名更新
        else if($seal_type=="p"){
            $this->remake_PerSeal($obj_result);
        }

        return true;
    }

    //重新生成企业印章
    private function  remake_EntSeal($obj_result){
        //申请新的证书
        //然后用该新证书来绑定到该印章编码上
        //根据用户id,获取去pfx信息

        $seal_para=array(
            'name'=>$obj_result['name'],
            'seal_password'=>$obj_result['seal_password'],
            'image_name'=>$obj_result['image_name'],
            'image_name2'=>$obj_result['image_name2'],
            'image_shape'=>$obj_result['image_shape'],
            'image_height'=>$obj_result['image_width'],
            'image_width'=>$obj_result['image_height'],
            'color'=>$obj_result['color'],
            'font_size'=>$obj_result['font_size'],
            'create_type'=>$obj_result['create_type'],  //用户自己创建的
            'seal_type'=>$obj_result['seal_type'],//0表示是企业印章
        );

        if( empty($obj_result['seal_img'])){
            $image_data="";
        }
        else{
            $image_data=$obj_result['seal_img'];
        }

        // 根据用户id,获取企业信息等信息
        $user_id=$obj_result['user_id'];
        $obj_user_model= new \app\Common\Model\Platform\User();
        $user_info=$obj_user_model->getUserInfoByUserId($user_id,"e");
        unset($obj_user_model);
        if(empty($user_info)){
            throw new \Exception('Y0207', 207);
        }
        //企业时，app_key为空，都是系统行为
        $arr_user_info=array('app_key'=>"",'user_id'=>$user_info['user_id'],'user_name'=>$user_info['user_name'],'mobile'=>$user_info['mobile'],'user_type'=>$user_info['user_type'],'identity_type'=>$user_info['identity_type'],'identity_no'=>$user_info['identity_no']);
        $all_para =array_merge($seal_para,$arr_user_info);//合并出完整参数

        $obj_pfx=new \app\Common\Platform\Pfx();
        $pfx_info= $obj_pfx->GetPfxInfo($all_para);

        unset($obj_pfx);
        $this->updateentSeal($all_para,"",$obj_result['seal_code'],$image_data,$pfx_info['SerialNo']);

        //更新印章信息到数据库
        $result_update=$this->updateSealOnlyPfx($obj_result['seal_code'],$pfx_info['StartTime'],$pfx_info['EndTime'],$pfx_info['pfx_id']);
        unset($pfx_info);
        if($result_update==false || $result_update==null){
            throw new \Exception('Y0211', 211);
        }
        $return['seal_code'] = $obj_result['seal_code'];
        unset($obj_seal);
    }


    /**
     * @param $seal_code
     * @param $start_time
     * @param $end_time
     * @param $pfx_id
     * @return int|string
     * @throws \Exception
     * 更新印章、或者个人签名，只更新证书，其他制作印章的信息不更新
     */
    private function updateSealOnlyPfx(
        $seal_code,
        $start_time,
        $end_time,
        $pfx_id
    )
    {
        try {
            $where=array('seal_code'=>$seal_code);
            $sealInfo['start_time'] = $start_time;
            $sealInfo['end_time'] = $end_time;
            $sealInfo['pfx_id'] = $pfx_id;

            $usersealModel = new \app\Common\Model\Platform\UserSeal();
            $updateseal = $usersealModel->updateseal($where,$sealInfo);
            unset($usersealModel);
            return $updateseal;
        } catch (\Exception $e) {
            \think\Log::write("更新印章证书错误：" . $e->getMessage());
            throw new \Exception('Y0207', 207);
        }
    }


    //重新生成个人签名
    private function  remake_PerSeal($obj_result){
        $seal_para=array(
            'name'=>$obj_result['name'],
            'user_id'=>$obj_result['user_id'],
            'image_shape'=>$obj_result['image_shape'],
            'image_height'=>$obj_result['image_height'],
            'image_width'=>$obj_result['image_width'],
            'color'=>$obj_result['color'],
            'font_size'=>$obj_result['font_size'],
            'create_type'=>$obj_result['create_type'],  //系统创建的
            'seal_type'=>$obj_result['seal_type'],//0表示是个人签名
            'use_yn'=>'Y', //是否可用
            'seal_password'=>$obj_result['seal_password'],
            'image_name'=>$obj_result['image_name'],//人名证里边的人名 ，这里考虑到人名可以更改，比如以前叫张三，后面到公安局改名为张山 等请求
        );

        if( empty($obj_result['seal_img'])){
            $image_data="";
        }
        else{
            $image_data=$obj_result['seal_img'];
        }

        // 根据用户id,获取用户姓名等信息
        //获取该签名绑定的证书使用的申请资料
        $user_id=$obj_result['user_id'];
        $obj_user_model= new \app\Common\Model\Platform\User();
        $user_info=$obj_user_model->getUserBaseInfobyWhere(array("user_id"=>$user_id)); //根据用户id获取用户数据
        unset($obj_user_model);
        if(empty($user_info)){
            throw new \Exception('Y0207', 207);
        }

        //获取旧的证书信息
        //$user_id=$obj_result['user_id'];
        $obj_userpfx_model= new \app\Common\Model\Platform\UserPfx();
        $userpfx_info=$obj_userpfx_model->getSingle($obj_result['pfx_id']);
        if(empty($userpfx_info)){
            throw new \Exception('Y0220', 220);
        }
        unset($obj_userpfx_model);

        $arr_user_info=array('app_key'=>$userpfx_info['app_key'],'user_id'=>$obj_result['user_id'],'user_name'=>$userpfx_info['user_name'],'mobile'=>$user_info['mobile'],'user_type'=>$user_info['user_type'],'identity_type'=>$userpfx_info['identity_type'],'identity_no'=>$userpfx_info['identity_no']);
        $all_para =array_merge($seal_para,$arr_user_info);//合并出完整参数
        //根据用户id,获取去pfx信息
        $obj_pfx=new \app\Common\Platform\Pfx();
        $pfx_info= $obj_pfx->GetPfxInfo($all_para);
        unset($obj_pfx);
        //更新个人签名
        $this->updateperSeal($all_para,"",$obj_result['seal_code'],$image_data,$pfx_info['SerialNo']);
        //更新个人签名信息到数据库
        $result_update=$this->updateSealOnlyPfx($obj_result['seal_code'],$pfx_info['StartTime'],$pfx_info['EndTime'],$pfx_info['pfx_id']);
        unset($pfx_info);
        if($result_update==false || $result_update==null){
            throw new \Exception('Y0211', 211);
        }
        $return['seal_code'] = $obj_result['seal_code'];
    }
}