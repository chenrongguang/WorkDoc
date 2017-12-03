<?php
namespace app\service\apiclient;

//include_once('com/alibaba/example/ExampleFacade.php');
use \app\service\apiservice\apiexample;
include_once('com/alibaba/example/param/apiexample/ExampleFamilyGetParam.php');
include_once('com/alibaba/example/param/apiexample/ExampleFamilyPostParam.php');
include_once('com/alibaba/example/param/apiexample/ExampleFamilyGetResult.php');
include_once('com/alibaba/example/param/apiexample/ExampleFamilyPostResult.php');

include_once('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once('com/alibaba/openapi/client/util/DateUtil.class.php');

class example
{
    private $exampleFacade;
    private $testRefreshToken;

    public function __construct($para)
    {
        $this->exampleFacade = new ExampleFacade ();
        $this->exampleFacade->setAppKey($para['app_key']);
        $this->exampleFacade->setSecKey($para['app_secret']);
        $this->exampleFacade->setServerHost(config('server_host'));
        $this->testRefreshToken = $para['refresh_token'];
    }


    public function example_1()
    {
        try {

            // --------------------------first example starting----------------------------------
            $param = new ExampleFamilyGetParam ();
            $param->setFamilyNumber(1);
            $exampleFamilyGetResult = new ExampleFamilyGetResult ();

            $this->exampleFacade->exampleFamilyGet($param, $exampleFamilyGetResult);
            $exampleFamily = $exampleFamilyGetResult->getResult();
            echo "ExampleFamilyGet call get the result, the familyNumber is ";
            echo $exampleFamilyGetResult->getResult()->getFamilyNumber();
            echo " and the name of father is ";
            echo $exampleFamilyGetResult->getResult()->getFather()->getName();
            echo ", the birthday of fanther is ";
            echo $exampleFamilyGetResult->getResult()->getFather()->getBirthday();
            echo "<br/>";
            // ----------------------------first example end-------------------------------------
        } catch (OceanException $ex) {
            echo "Exception occured with code[";
            echo $ex->getErrorCode();
            echo "] message [";
            echo $ex->getMessage();
            echo "].";
        }
    }

    public function example_2()
    {
        try {

            // --------------------------second example starting----------------------------------
            $exampleFamilyPostParam = new ExampleFamilyPostParam ();
            // set the simple parameter
            $exampleFamilyPostParam->setComments("SDK Example");

            // set a complex domain as parameter
            $exampleFamily = new ExampleFamily ();

            $exampleFamily->setFamilyNumber(12);
            $exampleFather = new ExamplePerson ();
            $exampleFather->setAge(31);
            $exampleFather->setBirthday("19780312101010000");
            $exampleFather->setName("John");
            $exampleFamily->setFather($exampleFather);
            $exampleFamilyPostParam->setFamily($exampleFamily);

            // simulate the feature of upload image.
            $fileContent = file_get_contents("example.png");
            $houseImg = new ByteArray ();
            $houseImg->setBytesValue($fileContent);
            $exampleFamilyPostParam->setHouseImg($houseImg);

            $authorizationToken = $this->exampleFacade->refreshToken($this->testRefreshToken);
            echo "refresh token:";
            echo $authorizationToken->getAccessToken();
            echo "<br/>";

            $exampleFamilyPostResult = new ExampleFamilyPostResult ();
            $this->exampleFacade->exampleFamilyPost($exampleFamilyPostParam, $authorizationToken->getAccessToken(), $exampleFamilyPostResult);
            echo "ExampleFamilyPost call get the result, the descriptin of result is ";
            echo $exampleFamilyPostResult->getResultDesc();
            echo "<br/>";
            echo "ExampleFamilyPost call get the result, the father name upset is ";
            echo $exampleFamilyPostResult->getResult()->getFather()->getName();
            // --------------------------second example starting----------------------------------
        } catch (OceanException $ex) {
            echo "Exception occured with code[";
            echo $ex->getErrorCode();
            echo "] message [";
            echo $ex->getMessage();
            echo "].";
        }
    }
}