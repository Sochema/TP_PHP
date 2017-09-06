<?php

$validpassword = $_POST['password'];
$passwordlength = strlen($validpassword);

if(isset($validpassword) AND $passwordlength > 0 AND $validpassword == "kangourou")
{
    echo "Bonjour " . $_POST['name']. " Voici les codes d'accès au serveur central de la nasa... </br>";
    echo "Nan je dékonne!! BIG TROLL BAAAAAAH TROU DUC";

} else {
  echo "/!\ Password invalid - Try again /!\ ";
}

 ?>
