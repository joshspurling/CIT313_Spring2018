<?php

class ProfileController extends Controller{

	protected $userObject;

	public function index(){
		$this->userObject = new Users();
		$post = $this->userObject->getUserFromID($uID);

		$this->set('uID', $user['uID']);
		$this->set('first_name', $user['first_name']);
		$this->set('last_name', $user['last_name']);
		$this->set('email', $user['email']);
		$this->set('user_type', $user['user_type']);
		$this->set('task', 'update');
	}

	public function update(){
		$this->userObject = new Users();

        $password = $_POST['password'];
        $passhash = password_hash($password,PASSWORD_DEFAULT);

		$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$passhash);

		$this->userObject->addUser($data);
		$this->set('message', 'Profile updated');
	}

}

?>
