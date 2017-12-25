<?php require('supp.php');
class User {
  private $id_user;
  private $username;
  private $password;
  private $supp;
  function __construct(){

  }
  function __construct($id_user,$username,$password,$supp){
      $this->$id_user = $id_user;
      $this->$username = $username;
      $this->$password = $password;
      $this->$supp = $supp;
  }
  function getId(){
    return $this->$id_user;
  }
  function getUsername(){
    return $this->$username;
  }
  function getPassword(){
    return $this->$password;
  }
  function getSupp(){
    return $this->$supp;
  }

  function setId($id_user){
    $this->$id_user = $id_user;
  }
  function setUsername($username){
    $this->$username = $username;
  }
  function setPassword($password){
    $this->$password = $password;
  }
  function setSupp($supp){
    $this->$supp = $supp;
  }




}
