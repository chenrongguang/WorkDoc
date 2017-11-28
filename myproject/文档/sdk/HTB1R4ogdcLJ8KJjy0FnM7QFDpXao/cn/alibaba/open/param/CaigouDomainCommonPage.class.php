<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/CaigouDomainProductProductCoop.class.php');

class CaigouDomainCommonPage extends SDKDomain {

       	
    private $datas;
    
        /**
    * @return 数据列表
    */
        public function getDatas() {
        return $this->datas;
    }
    
    /**
     * 设置数据列表     
     * @param array include @see CaigouDomainProductProductCoop[] $datas     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDatas(CaigouDomainProductProductCoop $datas) {
        $this->datas = $datas;
    }
    
        	
    private $total;
    
        /**
    * @return 数据总量
    */
        public function getTotal() {
        return $this->total;
    }
    
    /**
     * 设置数据总量     
     * @param Integer $total     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotal( $total) {
        $this->total = $total;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "datas", $this->stdResult )) {
    			$datasResult=$this->stdResult->{"datas"};
    				$object = json_decode ( json_encode ( $datasResult ), true );
					$this->datas = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$CaigouDomainProductProductCoopResult=new CaigouDomainProductProductCoop();
						$CaigouDomainProductProductCoopResult->setArrayResult($arrayobject );
						$this->datas [$i] = $CaigouDomainProductProductCoopResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "total", $this->stdResult )) {
    				$this->total = $this->stdResult->{"total"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "datas", $this->arrayResult )) {
    		$datasResult=$arrayResult['datas'];
    			$this->datas = new CaigouDomainProductProductCoop();
    			$this->datas->setStdResult ( $datasResult);
    		}
    		    	    			    		    			if (array_key_exists ( "total", $this->arrayResult )) {
    			$this->total = $arrayResult['total'];
    			}
    		    	    		}
 
   
}
?>