<?php
namespace app\cli\controller;

class ListenCompletenotify
{
    private $obj_sign;
    private $obj_contract;
    private $obj_contract_app;
    private $obj_mg_model;
    private $document = 'ecs_msg_sign';
    //空方法，便于在同一台服务器起多个任务
    public function _empty()
    {
        $this->index();
    }

    public function index()
    {
        $stomp_url= \tools\activemq\Activemq::geturl();
        $user = config("conf-activemq.user");
        $password = config("conf-activemq.password");
        $stomp = new \Stomp($stomp_url, $user, $password);
        $stomp->subscribe(config("conf-activemq.des_complete_notify"), array("activemq.prefetchSize" => config("conf-activemq.prefetchSize"))); //注意该方法在window-php7下面有问题，
        $this->obj_sign = new \app\Common\Platform\Sign();  //放在while外面，不要到里边去new,会消耗很多内存的

        $this->obj_contract = new \app\Common\Model\Platform\Contract();
        $this->obj_contract_app = new \app\Common\Model\Platform\ContractApp();
        $this->obj_mg_model = new \app\Common\Model\Mg\MsgSign($this->document);

        \think\Log::write("start:complete_notify -Waiting fo messages...\n" . time());
        while (true) {
            try {
                $frame = $stomp->readFrame();
                if ($frame) {
                    if ($frame->command == "MESSAGE") {
                        if ($frame->body == "SHUTDOWN") {
                            $stomp->ack($frame); //回复处理完成
                            break; //退出
                        } else {
                            $msg = $frame->body;
                            $exce_result=$this->handle_complete_notify($msg); //业务处理
                            if($exce_result) {
                                $stomp->ack($frame); //回复处理完成
                            }
                            unset($msg); //释放内存
                        }
                    } else {
                        \think\Log::write("complete_notify -exception:upexpect frame"  . " " . time());
                    }
                }

            } catch (StompException $e) {
                \think\Log::write("complete_notify -exception:" . $e->getMessage() . " " . time());
            }
            usleep(500);
        }
    }

    //业务处理
    private function handle_complete_notify($msg){
        $request = json_decode($msg); //转换为json对象，
        $complete_contract_id=$request->complete_contract_id;
        return  $this->obj_sign->notify_complete($this->obj_contract,$this->obj_contract_app,$this->obj_mg_model,$complete_contract_id);
    }
}
