<?php
require 'db.php';
/**
 *
 */
class UserController
{
  function userGetAll(){

    $query="select * from user";
   $sockets = db::getInstance()->get_result($query);
   return $sockets;
  }
}

 ?>
