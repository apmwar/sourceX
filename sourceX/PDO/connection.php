<?php
  $user = 'aruna';
  $pass = '2048';
  $db = new PDO( 'mysql:host=localhost;dbname=users', $user, $pass );
  $sql = "SELECT * FROM users";
  $result = $db->query( $sql );

  foreach( $result as $row ){
    echo "Registration ID: " .$row['id']. "<br>Password: " .$row[ 'password' ] . "<br><br>";
  }
?>
