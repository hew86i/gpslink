<?php

class User extends Model
{

	public $name;

	public function getAllUsers() {
		return $this->query("select * from users");
	}

	public function getFirstUser() {
		return $this->dlookup("select * from users order by id");
	}

	public function getUserById($id) {
		if(is_numeric($id)) {
			return $this->dlookup("select * from users where id=" . $id);
		}
	}


}

?>