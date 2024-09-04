<?php
 class trial{
  var $fname;
  public $username;
  var $yob;
  protected $email_password;
  private $password;

  public function details($fname){
    return $fname;
  }
  public function user_age($fname,$yob){
     $age= date('Y') - $yob;
     return $fname. ' is ' . $yob;
  }
 }
 $Obj = new trial();

 print $Obj -> user_age("Cindy",2004);
?>