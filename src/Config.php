<?php 
/*
* In this file we are creating SuiteCRM REST API Object for connecting SuiteCRM through REST API
*/
namespace SuitSDK;

class Config{
	
	public $name;
	
	private $userName;
	private $password;
	
	function __construct(){
		
		$this->userName = 'admin';
		$this->password = 'Dxdev@123';
	} 

	public function getRestObj(){					
		
		$sugarRestObj = new \Asakusuma\SugarWrapper\Rest;
		$sugarRestObj->setUrl('http://cerebracrm.matricore.com/service/v2/rest.php'); 
		$sugarRestObj->setUsername('admin');
		$sugarRestObj->setPassword('Dxdev@123');
		$sugarRestObj->connect();
		return $sugarRestObj;	 
	}	
} 
