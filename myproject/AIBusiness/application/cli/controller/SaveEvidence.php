<?php
/**
 * 保全服务
 * 该任务只起一个，它不是activemq的消费者
 */

namespace app\cli\controller;

class SaveEvidence
{
    //private $obj_sign;
    private $obj_contract;
    private $curl=null;
    private $time_out =30;

    //空方法，便于在同一台服务器起多个任务
    public function _empty()
    {
        $this->index();
    }

    public function index()
    {
        \think\Log::write("start:saveEvidence -start to find need saveevidence messages...\n" . time());
        $this->obj_contract = new \app\Common\Model\Platform\Contract();

        //查找合同状态为完成，并且已经生成hash值的
        $where = " status = 2 and use_yn ='Y' and contract_hashcode is not null and judge_status=0";
        $result = $this->obj_contract->getlistbystr($where, 'create_time asc', 1000);//测试阶段，先来一个 //每次处理1000条吧
        foreach ($result as $val) {
            try {

                $e_data=array(
                    'Contract_id'=>(string)$val['contract_id'],
                    'Contract_code'=>$val['contract_code'],
                    'Query_code'=>$val['query_code'],
                    'Create_time'=> date('Y-m-d H:i:s', $val['create_time']),
                    'Complete_time'=>date('Y-m-d H:i:s', $val['complete_time']),
                    'Etype'=>"pdf",
                    'Ehash'=>$val['contract_hashcode']
                    );

                $j_e_data = json_encode($e_data);
                $remotesave_result =$this->remotesave($j_e_data,(string)$val['contract_id']);
                if($remotesave_result==false){
                    continue;
                }

                $update_data=array('judge_status'=>1,'judge_time'=>time(),'judge_info'=>$remotesave_result);

                $local_save_result=$this->obj_contract->updateinfo($update_data,$val['contract_id']);
                if($local_save_result==false || $local_save_result==null){
                    continue;
                }

            } catch (\Exception $e) {
                \think\Log::write("saveEvidence -exception:" . $val['contract_id'] . "-" . $e->getMessage() . " " . time());
                continue;//继续处理下一个
            }
        }
    }


    private function  remotesave($e_data,$contract_id){

        try {
            if ($this->curl == null) {
                $this->curl = curl_init();
                curl_setopt( $this->curl, CURLOPT_URL, config('conf-gfa.api_evidence_url'));
                curl_setopt( $this->curl, CURLOPT_PORT, config('conf-gfa.api_evidence_port'));
                curl_setopt( $this->curl, CURLOPT_RETURNTRANSFER, TRUE); //设置是否返回信息
                curl_setopt( $this->curl, CURLOPT_POST, TRUE); //设置为POST方式
                curl_setopt( $this->curl, CURLOPT_TIMEOUT, $this->time_out); //设置为POST方式

                curl_setopt( $this->curl, CURLOPT_SSLVERSION, "all");
                curl_setopt( $this->curl, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
                curl_setopt( $this->curl, CURLOPT_SSL_VERIFYHOST, false); // 从证书中检查SSL加密算法是否存在
                curl_setopt( $this->curl, CURLOPT_SSLCERTTYPE, 'PEM');
                curl_setopt( $this->curl, CURLOPT_SSLCERT, "./gfaevidcert/cert.pem");
                curl_setopt( $this->curl, CURLOPT_SSLCERTPASSWD, config('conf-gfa.api_evidence_certpas'));
                curl_setopt( $this->curl, CURLOPT_SSLKEYTYPE, 'PEM');
                curl_setopt( $this->curl, CURLOPT_SSLKEY,  "./gfaevidcert/private.pem");
            }

            curl_setopt( $this->curl, CURLOPT_POSTFIELDS, $e_data);   //POST数据
            curl_setopt( $this->curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json", 'Content-Length:' . strlen($e_data),"REQUEST_ACTION: APPLY_DIGITAL_EVIDENCE"));

            $response = curl_exec( $this->curl); //接收返回信息

            if (curl_errno( $this->curl)) {//出错则显示错误信息
                \think\Log::write("证据保全-执行curl失败：" . curl_errno( $this->curl));
                $para['result'] = "证据保全-执行curl失败" . curl_errno( $this->curl);
                \app\Common\App\Mylog::makeErrorInfo(null, $para);
                $this->curl = null;
                return false;
            }

            $j_resp = json_decode($response);
            if ($j_resp->result->result == 'success') {
                $status = $j_resp->status;
                if($status=="sign"){
                    return $j_resp->EEPid;
                }
                else{
                    \think\Log::write("证据保全-返回状态不正确：" . $status);
                    $para['result'] = "证据保全-返回状态不正确：" . $status;
                    \app\Common\App\Mylog::makeErrorInfo(null, $para);
                    return false;
                }

            } else {
                /*
                \think\Log::write("证据保全-返回错误：" . $j_resp->result->errordesc);
                $para['result'] = "证据保全-返回错误：" . $j_resp->result->errordesc;
                \app\Common\App\Mylog::makeErrorInfo(null, $para);
                return false;
                */
                //查询下，有些可能没有返回，实际已经存上了
                return $this->search_handle($contract_id);
            }

        } catch (\Exception $e) {
            \think\Log::write("证据保全-错误：" . $e->getMessage() . "---error line:" . $e->getLine());
            $para['result'] = "证据保全-返回错误：" . "证据保全-错误：" . $e->getMessage() . "---error line:" . $e->getLine();
            \app\Common\App\Mylog::makeErrorInfo($e, $para);
            $this->curl = null;
            return  false;
        }

    }

    /**
     * @param $contract_id
     * 查询并返回数据
     */
    private function search_handle($contract_id){
        try {
            $arr_data['Contract_id']=$contract_id;
            $e_data=json_encode($arr_data);

            if ($this->curl == null) {
                $this->curl = curl_init();
                curl_setopt( $this->curl, CURLOPT_URL, config('conf-gfa.api_evidence_url'));
                curl_setopt( $this->curl, CURLOPT_PORT, config('conf-gfa.api_evidence_port'));
                curl_setopt( $this->curl, CURLOPT_RETURNTRANSFER, TRUE); //设置是否返回信息
                curl_setopt( $this->curl, CURLOPT_POST, TRUE); //设置为POST方式
                curl_setopt( $this->curl, CURLOPT_TIMEOUT, $this->time_out); //设置为POST方式

                curl_setopt( $this->curl, CURLOPT_SSLVERSION, "all");
                curl_setopt( $this->curl, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
                curl_setopt( $this->curl, CURLOPT_SSL_VERIFYHOST, false); // 从证书中检查SSL加密算法是否存在
                curl_setopt( $this->curl, CURLOPT_SSLCERTTYPE, 'PEM');
                curl_setopt( $this->curl, CURLOPT_SSLCERT, "./gfaevidcert/cert.pem");
                curl_setopt( $this->curl, CURLOPT_SSLCERTPASSWD, config('conf-gfa.api_evidence_certpas'));
                curl_setopt( $this->curl, CURLOPT_SSLKEYTYPE, 'PEM');
                curl_setopt( $this->curl, CURLOPT_SSLKEY,  "./gfaevidcert/private.pem");
            }

            curl_setopt( $this->curl, CURLOPT_POSTFIELDS, $e_data);   //POST数据
            curl_setopt( $this->curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json", 'Content-Length:' . strlen($e_data),"REQUEST_ACTION: QUERY_USER_BY_USER_COLUMN"));

            $response = curl_exec( $this->curl); //接收返回信息

            if (curl_errno( $this->curl)) {//出错则显示错误信息
                \think\Log::write("证据保全-执行查询curl失败：" . curl_errno( $this->curl));
                $para['result'] = "证据保全-执行查询curl失败" . curl_errno( $this->curl);
                \app\Common\App\Mylog::makeErrorInfo(null, $para);
                $this->curl = null;
                return false;
            }

            $j_resp = json_decode($response);
            if ($j_resp->result->result == 'success') {
                $EEPid=$j_resp->rows[0]->eepid;
                if(empty($EEPid)){
                    return false;
                }
                else{
                    return $EEPid;
                }
            } else {
                \think\Log::write("证据保全-查询失败：" . $j_resp->result->errordesc);
                $para['result'] = "证据保全-查询失败：" . $j_resp->result->errordesc;
                \app\Common\App\Mylog::makeErrorInfo(null, $para);
                return false;
            }

        } catch (\Exception $e) {
            \think\Log::write("证据保全-查询错误：" . $e->getMessage() . "---error line:" . $e->getLine());
            $para['result'] = "证据保全-查询错误："  . $e->getMessage() . "---error line:" . $e->getLine();
            \app\Common\App\Mylog::makeErrorInfo($e, $para);
            $this->curl = null;
            return  false;
        }

    }
}
