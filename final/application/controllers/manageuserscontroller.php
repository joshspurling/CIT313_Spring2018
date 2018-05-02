<?php

class ManageUsersController extends Controller{

	public $userObject;

	public function index(){
    $this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'Manage Users');
		$this->set('users',$users);
		$this->set('first_name',$first_name);
		$this->set('last_name',$last_name);
		$this->set('email',$email);
		$this->set('active',$active);
		}

	public function approve(){
		$data = array('uID'=>$_POST['uID']);

		$this->userObject = new Users();

		$result = $this->userObject->updateActive($data);
		$this->set('message', $result);
		$outcome = $this->userObject->getAllUsers();
		$this->set('users',$outcome);
		$this->set('task', 'update');
	}

	public function delete(){
		$data = array('uID'=>$_POST['uID']);

		$this->userObject = new Users();

		$result = $this->userObject->deleteUser($data);
		$this->set('message', $result);
		$outcome = $this->userObject->getAllUsers();
		$this->set('users',$outcome);
		$this->set('task', 'update');
	}

}

?>
