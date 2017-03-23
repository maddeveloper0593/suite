<?php 
namespace SuitSDK;

class Config{
	
	public $name;
	
	public function __construct(){
		
	$sugar2 = new \Asakusuma\SugarWrapper\Rest;

	$sugar2->setUrl('https://www.cerebraultra.com/scrm/service/v2/rest.php'); 
	$sugar2->setUsername('admin');
	$sugar2->setPassword('Dxdev@123');

	$sugar2->connect();

	$error = $sugar2->get_error();

	print_r($sugar2);

	}
} 
