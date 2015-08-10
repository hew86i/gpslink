<?php 

/**
*  Get users
*/
class GetUser extends Controller
{

	public function __construct() {

	}

	public function index($param = 0) {

		// load model
		$getall = $this->model('User');

		// load view with data passed
		$this->view('test/getall', $data = $getall->getUserById($param));
	}
}
 ?>