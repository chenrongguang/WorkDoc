<?php
namespace app\home\controller;
class Crg
{
    
   function user($data){
    file_put_contents(dirname(__FILE__).'/user.txt', date('Y-m-d H:i:s').':'.var_export($data,true)."\n",FILE_APPEND);
    $url = "http://api.yqianyun.com?method=easysigncloud.platform.user.addp&app_key=42C4203BA8982284537B4CF9122BDEA1";
    $method = "post";
    $arr['mobile'] = $data['sjh'];
   
    $json = json_encode($arr);
    $res = $this->get_curl($url,$method,$json);
    $datas = json_decode($res,true);
    //file_put_contents(dirname(__FILE__).'/user_res.txt', date('Y-m-d H:i:s').':'.$res."\n",FILE_APPEND);
    if($datas['data']['user_id']){
        return $datas['data']['user_id'];
    }else{
         file_put_contents(dirname(__FILE__).'/fail.txt', date('Y-m-d H:i:s').'user:注册失败'."\n",FILE_APPEND);
    }
    

}

   function qm($data){
    file_put_contents(dirname(__FILE__).'/qm.txt', date('Y-m-d H:i:s').':'.var_export($data,true)."\n",FILE_APPEND);
    $url = "http://api.yqianyun.com?method=easysigncloud.platform.seal.addp&app_key=42C4203BA8982284537B4CF9122BDEA1"; 
    $method = "post";
    $arr['user_id'] =$data['user_id'];
    $arr['mobile'] = $data['sjh'];
    $arr['name'] = $data['xm'];
    $arr['user_name'] = $data['xm'];
    $arr['identity_type'] = "0";
    $arr['identity_no'] = $data['sfzh'];
    $json = json_encode($arr);
    //file_put_contents(dirname(__FILE__).'/json.txt', date('Y-m-d H:i:s').':'.$json."\n",FILE_APPEND);
    $res = $this->get_curl($url,$method,$json);
    $datas = json_decode($res,true);
    file_put_contents(dirname(__FILE__).'/qm.txt', date('Y-m-d H:i:s').':'.var_export($datas,true)."\n",FILE_APPEND);
   
    if($datas['data']['seal_code']){
        return $datas['data']['seal_code'];
    }else{
         file_put_contents(dirname(__FILE__).'/fail.txt', date('Y-m-d H:i:s').'qm:签章失败'."\n",FILE_APPEND);
    }
    

}

function qy(){
    $url = "http://api.yqianyun.com?method=easysigncloud.platform.sign.single&app_key=42C4203BA8982284537B4CF9122BDEA1"; 
    $method = "post";
    $arr['tmpl_code'] = "6CA49088-3E19-CF85-2960-7F2D273221CE";
    $arr['query_code'] = "wsm2016";
    $arr['pub_business'] = "";
    $sign_user['user_type'] = "e";
    $sign_user['mobileemail'] = "616701921@qq.com";
    $sign_user['user_id'] =  1000033;
    $sign_user['user_name'] = "大连微神马";
    $sign_user['identity_type'] = "";
    $sign_user['identity_no'] = "";
    $sign_user['seal_code'] = "9C5D889DEDB1B1FFAF08EAF34E231DC9";
    $sign_user['seal_password'] = "wsm123456";
    $sign_user['business'] = "Text1@|@大连微神马科技1@#@Text2@|@大连微神马科技2@#@Text3@|@大连微神马科技3@#@Text4@|@大连微神马科技4";
    $user1['sign_user'] = $sign_user;
    $local['page'] = "9";
    $local['location_type'] = 3;
    $local['lx'] = "";
    $local['ly'] = "";
    $local['keyword'] = "aaa";
    $sign = array('sign_para' =>$local);

    $local2['page'] = "9";
    $local2['location_type'] = 3;
    $local2['lx'] = "";
    $local2['ly'] = "";
    $local2['keyword'] = "bbb";
    $sign1 = array('sign_para' =>$local2);

    $local3['page'] = "11";
    $local3['location_type'] = 3;
    $local3['lx'] = "";
    $local3['ly'] = "";
    $local3['keyword'] = "ccc";
    $sign2 = array('sign_para' =>$local3);

    $local4['page'] = "11";
    $local4['location_type'] = 3;
    $local4['lx'] = "";
    $local4['ly'] = "";
    $local4['keyword'] = "ddd";
    $sign3 = array('sign_para' =>$local4);
    $user1['sign_para_list']=array($sign,$sign1,$sign2,$sign3);

    /*
    $sign_user2['user_type'] = "p";
    $sign_user2['mobileemail'] = $data['sjh'];
    $sign_user2['user_id'] = "";
    $sign_user2['user_name'] = $data['xm'];
    $sign_user2['identity_type'] = "0";
    $sign_user2['identity_no'] = $data['sfzh'];
    $sign_user2['seal_code'] = $data['seal_code'];
    $sign_user2['seal_password'] = "";
    $sign_user2['business'] = "Text5@|@大连微神马科技5";
    $user2['sign_user'] = $sign_user2;
    $locals['page'] = "11";
    $locals['location_type'] = 3;
    $locals['lx'] = "";
    $locals['ly'] = "";
    $locals['keyword'] = "eee";
    $signs = array('sign_para' =>$locals);
    $user2['sign_para_list']=array($signs);
    */

    $sign_user2['user_type'] = "p";
    $sign_user2['mobileemail'] = "18861908001";
    $sign_user2['user_id'] = "";
    $sign_user2['user_name'] = "44测试1";
    $sign_user2['identity_type'] = "0";
    $sign_user2['identity_no'] = "13102219610421380x";
    //$sign_user2['seal_code'] = "BE6F27672DF5E3640A6C0E3B8783AF3D";
    $sign_user2['seal_code'] = "1C86F146B8F1684D8709B13F7BCD726E";
    $sign_user2['seal_password'] = "";
    $sign_user2['business'] = "Text5@|@大连微神马科技5";
    $user2['sign_user'] = $sign_user2;
    $locals['page'] = "11";
    $locals['location_type'] = 3;
    $locals['lx'] = "";
    $locals['ly'] = "";
    $locals['keyword'] = "eee";
    $signs = array('sign_para' =>$locals);
    $user2['sign_para_list']=array($signs);

    
    $arr['sign_list'] = array($user1,$user2);
    $json = json_encode($arr);
//echo $json;exit();
    $res = $this->get_curl($url,$method,$json);
    
    return $res;

}



 function get_curl($url, $method = 'post', $curlPostJson){
    // 初始化一个 cURL 会话对象
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //post相应设定
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPostJson);
    // 运行cURL，请求网页
    $data = curl_exec($curl);
    // 关闭URL请求
    curl_close($curl);
    return $data;
}







}

