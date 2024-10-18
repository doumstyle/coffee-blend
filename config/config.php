<?php

try {
    // Host
    define('HOST', 'localhost');
    
    // Dbname
    define('DB_NAME', 'coffee-blend');

    // User
    define('DB_USER', 'root');

    // Password
    define('DB_PASSWORD', '');

    $connexion = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch( PDOException $Exception ) {
    echo $Exception->getMessage();
  }
  
  // if($connexion == true) {
  //   echo 'Connexion established';
  // } else {
  //   echo 'Connexion failed';
  // }




?>