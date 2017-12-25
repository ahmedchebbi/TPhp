<?php
/**
 *
 */
class Supp {
  private int $id_supp;
  private String $name;
  private String $value;

  function __construct()
    {

    }
  function __construct($name,$value)
  {
    $this->$name = $name;
    $this->$value = $value;

  }
  function __construct($id_supp,$name,$value)
  {
    $this->$name = $name;
    $this->$value = $value;
    $this->$id_supp = $id_supp;

  }

  function getId(){
    return $this->$id_supp;
  }
  function getName(){
    return $this->$name;
  }
  function getValue(){
    return $this->$value;

  }
  function setId($id){
    $this->$id_supp = $id;
  }
  function setName($name){
    $this->$name = $name;
  }
  function setValue($value){
    $this->$value = $value;
  }
  


}
