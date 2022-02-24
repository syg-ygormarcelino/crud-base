<?php

require '../model/Class/User.php';

use Class\User;

$user = new User();

if(isset($_POST['newUser'])){

    if(isset($_POST['username'],$_POST['email'],$_POST['password'])){

        $user->username  = $_POST['username'];
        $user->email     = $_POST['email'];
        $user->password  = $_POST['password'];
        $user->datetime  = date('Y-m-d H:i:s');
        $user->store();
      
        exit;
    }

}


