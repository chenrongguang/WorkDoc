<?php
/**
 * @Author: chexning
 * @Date:   2016-05-13 14:32:47
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-05-21 14:28:47
 */
    header("Content-type: text/html; charset=utf-8"); //������������ʽ
    require_once("../API/eSignOpenAPI.php");
    require_once(CLASS_PATH ."eSign.class.php");
    require_once (CLASS_PATH . "ErrorConstant.class.php");

    $sign = new eSign();//ȫ��esign sdk����

    $action=$_GET["action"];
    switch ($action) {
        case 'init':init();break;
        case 'addPerson':addPerson();break;
        case 'addOrganize':addOrganize();break;
        case 'addTemplateSeal':addTemplateSeal();break;
        case 'addFileSeal':addFileSeal();break;
        case 'userSignPDF':userSignPDF();break;
        case 'selfSignPDF':selfSignPDF();break;
        case 'saveSignedFile':saveSignedFile();break;
        default:break;
    }

    /**
     * ��ʼ���͵�¼
     */
    function init(){
        global $sign;//��������ȫ�ֱ���
        $project_id=$_POST['projectId'];
        $project_secret=$_POST['projectSecret'];
        $iRet = $sign->init($project_id, $project_secret);
        if(0 == $iRet){
            if($sign->projectid_login()){
                $array=array(
                    errCode => 0,
                    msg =>'��¼�ɹ�',
                    errShow => true
                  ); 
                echo  urldecode(json_encode($array));
            }else{
               echo  urldecode(json_encode($sign->showError("��¼ʧ��")));
            }
        }else{
            echo urldecode(json_encode($iRet));
        }
    }

    /**
     * ��Ӹ����û�
     */
    function addPerson(){
        global $sign;//��������ȫ�ֱ���
        $project_id=$_POST['projectId'];
        $project_secret=$_POST['projectSecret'];
        $iRet = $sign->init($project_id, $project_secret);
        if(0 == $iRet){
             if($sign->projectid_login()){
                $ret = $sign->addPersonAccount($_POST['mobile'], $_POST['name'], $_POST['id'],$_POST['area'],$_POST['email'],$_POST['organ'],$_POST['title'],$_POST['address']);
                echo urldecode(json_encode($ret));
            }
        }else{
            echo  urldecode(json_encode($sign->showError("��ʼ��ʧ��")));
        } 
    }

    /**
     * �����ҵ�û�
     */
    function addOrganize(){
        global $sign;//��������ȫ�ֱ���
        $project_id=$_POST['projectId'];
        $project_secret=$_POST['projectSecret'];
        $iRet = $sign->init($project_id, $project_secret);
        if(0 == $iRet){
             if($sign->projectid_login()){
                $ret = $sign->addOrganizeAccount($_POST['mobile'], $_POST['name'], $_POST['organCode'],$_POST['email'],$_POST['organType'],$_POST['regCode'],$_POST['legalName'],$_POST['legalArea'],$_POST['userType'],$_POST['agentName'],$_POST['agentIdNo'],$_POST['legalIdNo'],$_POST['regType']);
                echo urldecode(json_encode($ret));
            }
        }else{
            echo  urldecode(json_encode($sign->showError("��ʼ��ʧ��")));
        } 

    }

    /**
     * �½�ģ��ӡ��
     */
    function addTemplateSeal(){
        global $sign;//��������ȫ�ֱ���
        $project_id=$_POST['projectId'];
        $project_secret=$_POST['projectSecret'];
        $iRet = $sign->init($project_id, $project_secret);
        if(0 == $iRet){
             if($sign->projectid_login()){
                $ret = $sign->addTemplateSeal($_POST['accountId'], $_POST['templateType'], $_POST['color'], $_POST['hText'], $_POST['qText']);
                if(!get_magic_quotes_gpc() ) //���get_magic_quotes_gpc()�Ǵ򿪵�
                {
                     $ret=stripslashes(json_encode($ret));//���ַ������д���
                     echo $ret;
                }else{
                    echo json_encode($ret);
                }
            }
        }else{
            echo  urldecode(json_encode($sign->showError("��ʼ��ʧ��")));
        } 
    }

    /**
     * ����ֻ�ӡ��
     */
    function addFileSeal(){
        global $sign;//��������ȫ�ֱ���
        $project_id=$_POST['projectId'];
        $project_secret=$_POST['projectSecret'];
        $iRet = $sign->init($project_id, $project_secret);
        if(0 == $iRet){
             if($sign->projectid_login()){
                $imgB64=$_POST['sealData'];
                $imgB64=substr($imgB64,strpos($imgB64,',')+1) ;
                $ret = $sign->addFileSeal($_POST['accountId'], $imgB64, $_POST['color']);
                if(!get_magic_quotes_gpc() ) //���get_magic_quotes_gpc()�Ǵ򿪵�
                {
                     $ret=stripslashes(json_encode($ret));//���ַ������д���
                     echo $ret;
                }else{
                    echo json_encode($ret);
                }
            }
        }else{
            echo  urldecode(json_encode($sign->showError("��ʼ��ʧ��")));
        } 
    }
    /**
     * ƽ̨�û�ǩ��
     */
    function userSignPDF(){
        global $sign;//��������ȫ�ֱ���
        $project_id=$_POST['projectId'];
        $project_secret=$_POST['projectSecret'];
        $iRet = $sign->init($project_id, $project_secret);
        if(0 == $iRet){
             if($sign->projectid_login()){
                $signret = $sign->userSignPDF($_POST['accountId'], $_POST['sealData'], $_POST['srcFile'], $_POST['dstFile'], $_POST['signType'], $_POST['posPage'], $_POST['posX'], $_POST['posY'], $_POST['key'], $_POST['fileName']);
                echo urldecode(json_encode($signret));
            }
        }else{
            echo  urldecode(json_encode($sign->showError("��ʼ��ʧ��")));
        } 

    }

    /**
     * ƽ̨����ǩ��
     */
    function selfSignPDF(){
        global $sign;//��������ȫ�ֱ���
        $project_id=$_POST['projectId'];
        $project_secret=$_POST['projectSecret'];
        $iRet = $sign->init($project_id, $project_secret);
        if(0 == $iRet){
             if($sign->projectid_login()){
                $signret = $sign->selfSignPDF($_POST['srcFile'], $_POST['dstFile'], $_POST['sealId'], $_POST['signType'], $_POST['posPage'], $_POST['posX'], $_POST['posY'], $_POST['key'], $_POST['fileName']);     
                echo urldecode(json_encode($signret));
            }
        }else{
            echo  urldecode(json_encode($sign->showError("��ʼ��ʧ��")));
        } 

    }

    /**
     * �ĵ���ȫ
     */
    function saveSignedFile(){
        global $sign;//��������ȫ�ֱ���
        $project_id=$_POST['projectId'];
        $project_secret=$_POST['projectSecret'];
        $iRet = $sign->init($project_id, $project_secret);
        if(0 == $iRet){
             if($sign->projectid_login()){
                $saveRet = $sign->saveSignedFile($_POST['docFilePath'], $_POST['docName'], $_POST['signer']);
                if($saveRet["errCode"]==0){    
                    $downRet = $sign->getSignedFile($saveRet['docId']);
                    echo json_encode($downRet);
                }else{
                    echo urldecode(json_encode($saveRet));
                }
        }else{
            echo  urldecode(json_encode($sign->showError("��ʼ��ʧ��")));
        } 
    }
}

?>