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
    $userID = 'SPU001';
    $firstname = 'Josh';
    $lastname = 'Spurling';
    $email = 'jjspurli@iupui.edu';
    $role = 'user';
    $data = $this->user->getName();
    $this->load->view('view.php', $data);
  }
}
 ?>
