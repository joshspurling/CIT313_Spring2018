<?php

class MembersController extends Controller{
  public $userObject;

    public function view($uID){

    $this->userObject = new Users();
    $user = $this->postObject->getUser($uID);
      $this->set('user',$user);

    }

  public function defaultTask(){

    $this->userObject = new Users();
    $users = $this->userObject->getAllUsers();
    $this->set('email', 'Members View');
    $this->set('users',$users);

  }


  }
