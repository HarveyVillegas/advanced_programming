<?php
  class User
  {
      public $name;
      public $username;
      public $email;

     function addFriend($name)
     {
       echo $name . " added a friend <br/>";
     }

     function postStatus($name)
     {
       echo $name . " posted a status <br/>";
     }
  }
  $user1 = new User();
  $user1->addFriend('John Harvey Villegas');
  $user1-> postStatus('John Harvey Villegas');
?>
