<?php 


class Register
{

	private static $instance = NULL;
	private $vars = array();
	private $settings;
	public $db = NULL;

	private function __construct(){

		$this->loadSettings();
	}

	public static function getInstance(){

		if(self::$instance == NULL){
			// self::$instance = new __CLASS__;
			self::$instance = new Register;
		}

		return self::$instance;
	}

	public function __set($name, $value){
		$this->vars[$name] = $value;
	}

	public function __get($name){

		return $this->vars[$name];
	}

	private function loadSettings(){

		$this->settings = json_decode(file_get_contents('../app/settings/settings.json'));
	}

	public function settings(){

		return $this->settings;
	}
}

?>