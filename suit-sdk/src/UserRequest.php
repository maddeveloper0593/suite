<?php 
namespace SuitSDK;
use SuitSDK\Config;

class UserRequest {

	private $Config;
	private $Log;

	public function __construct(){
		
		$this->Config = new Config();
		$this->Log = new Log();
	}


	public function getName(){
		
		echo $this->Config->name;
		echo '<br/>';
		echo $this->Log->log;
	}

}

