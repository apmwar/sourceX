<?php
  session_start();
  $id = $_SESSION['id'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $dept = $_SESSION['dept'];
  $year = $_SESSION['year'];
  $section = $_SESSION['section'];

  //ignored details are dob, cgpa, email, mobi, password

  echo "welcome to the student feed, "  .$fname. "!";
  echo "<br>here's what we know about you...<br><br>";
  echo "Your name is " .$fname. " " .$lname. ". You're studying in the " .$dept. " department and your class is " .$year. "" .$section;
  echo ".<br><br>Isn't it correct?!";
?>
