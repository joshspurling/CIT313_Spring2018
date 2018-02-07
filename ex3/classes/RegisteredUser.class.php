<?php
class RegisteredUser extends users {

  public function __construct($user_level, $user_id){
    parent::__construct($user_level);
    $this->user_type = 1;
    $this->user_id = $user_id;
    return;
  }
  public function __set($name, $value){
    $this->$name = $value;
    return;
  }
  public function __get($name){
      return $this->$name;
  }

}



 ?>
