<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-3-4
 * Time: 16:02
 * 数据权限校验类
 */

namespace app\Common\Platform;

class Dataauth
{

    /**
     * @param $arr_users
     * @param $tmpl_id
     * 校验该调用者是否可以调用该合同模板
     */
    public  function tmpl_auth($arr_users,$tmpl_code,$app_key)
    {
        $model = new \app\Common\Model\Platform\Tmpl();
        if($app_key == config('conf-dict.default_appkey')){
            return true;
        }else{
            $info = $model->getuserid($tmpl_code);
            if ($info['tmpl_type'] == "transfer") {
                return true;
            }else{
                if (in_array($info['user_id'], $arr_users)) {
                    return true;
                }else{
                    return false;
                }
            }
        }
    }
    //获取所有可以操作的用户集,返回数组
    /**
     * @param $app_key
     * @return array
     */
    public function getalluser($app_key){
        $appkey_modle = new \app\Common\Model\Platform\App();
        $result = $appkey_modle->getUsersByAppKey($app_key);
        return $result;
    }





}