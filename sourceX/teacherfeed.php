<?php
  session_start();
  $id = $_SESSION['id'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $dept = $_SESSION['dept'];

  //ignored details are dob, email, mobi, password

  echo "welcome to the teacher feed, " .$fname. "!";
  echo "<br>here's what we know about you...<br><br>";
  echo "Your name is " .$fname. " " .$lname. ". You're working in the " .$dept. " department!";
  echo ".<br><br>Isn't it correct?!";
?>
