<?php

class RegisterController extends Controller{

	public $userObject;

	public function defaultTask(){

		$this->userObject = new Users();
		$this->set('task', 'add');


	}

	public function add(){

			$this->userObject = new Users();

			$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],
			'email'=>$_POST['email'], 'password'=>$_POST['password']);


			$result = $this->userObject->addUser($data);

			$this->set('message', $result);


	}

	public function edit($uID){

			$this->userObject = new Users();

			$post = $this->userObject->getUser($uID);

			$this->set('uID', $post['uID']);
			$this->set('first_name', $post['first_name']);
			$this->set('last_name', $post['last_name']);
			$this->set('email', $date['email']);
			$this->set('password', $date['password']);
			$this->set('task', 'update');


	}
}
