<?php

     $source = file_get_contents("auth.json");
     $data = json_decode($source);

     $user = htmlspecialchars($_POST['user']);
     $user = strtolower(str_replace(" ", "", $user));
     $pass = htmlspecialchars($_POST['pass']);
     $wrong = false;

     foreach ($data as $key => $value) {
        $ver_user = htmlspecialchars($data[$key]->user);
        if (strtolower($user) === $ver_user) {
            echo "This username is already taken";
            $wrong = true;
        }
     }
     if ($wrong === false) {
        if ($pass === "") {
           echo "Enter a password";
        } else {
           $pass = md5($pass);
           $obj = new class {};
           $obj->user = $user;
           $obj->password = $pass; 
           array_push($data, $obj);
           $encode = json_encode($data);
           unlink("auth.json");
           $open = fopen("auth.json", "w") or die();
           fwrite($open, $encode);
           fclose($open);
           echo "Account Created";
        } 
     }
?>