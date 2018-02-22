<?php
class controller {
  public $load;
  public $model;
  public $user;

  function __construct() {
    $this->load = new load();
    //$this->model = new model();
    $this->user = new user();
    $this->home();
  }

  function home() {
    $this->user->userID = 'SPU001';
    $this->user->firstname = 'Josh';
    $this->user->lastname = 'Spurling';
    $this->user->email = 'jjspurli@iupui.edu';
    $this->user->role = 'user';
    $data = $this->user->getName();
    $this->load->view('view.php', $data);
  }
}
 ?>
