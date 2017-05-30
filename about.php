<?php

if ($_POST['lastname'] == "" OR $_POST['firstname'] == "" OR $_POST['age'] == "" OR empty($_POST['animal'])) {
    echo "Files empty";
} else {
$lastname = $_POST['lastname'];
  echo $lastname." ";
  $firstname = $_POST['firstname'];
  echo $firstname."</br>";
  $age = $_POST['age'];
  echo "Is ".$age."</br>";
  $country = $_POST['country'];
  echo "Live in ".$country."</br>";
  $animal = $_POST['animal'];
  echo "Pref : ".$animal."</br>";
}

?>