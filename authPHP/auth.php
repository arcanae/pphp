<?php
     $source = file_get_contents("auth.json");
     $data = json_decode($source);
     $user = $_POST['user'];
     $user = str_replace(" ", "", $user);
     $pass = $_POST['pass'];

     foreach ($data as $key => $value) {
     $ver_user = htmlspecialchars($data[$key]->user);
     $ver_pass = htmlspecialchars($data[$key]->password);
        if (strtolower($user) === $ver_user) {

         if ($pass !== $ver_pass) {
             echo "wrong password";
         }

         if ($pass === $ver_pass) {
         echo "ok";
         }
         
         if (strtolower($user) !== $ver_user) {
          echo "User doesn't exist";
         }
        }
        

     }

?>