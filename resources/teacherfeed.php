<!DOCTYPE html>
  <head>
    <title>Teacher Registration | sourceX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="register.css">

  </head>

  <body>
    <button id="myBtn">GO TO TO DO LIST</button>

    <script type="text/javascript">
    var btn = document.getElementById('myBtn');
      btn.addEventListener('click', function() {
        document.location.href = 'todoui.php';
    });
    </script>


    <?php
      session_start();
      $id = $_SESSION['id'];
      $fname = $_SESSION['fname'];
      $lname = $_SESSION['lname'];
      $dept = $_SESSION['dept'];

      //ignored details are dob, email, mobi, password

      echo "<br><br>welcome to the teacher feed, "  .$fname. "!";
      echo "<br>here's what we know about you...<br><br>";
      echo "Your name is " .$fname. " " .$lname. ". You're working in the " .$dept. " department";
      echo ".<br><br>Isn't it correct?!";
    ?>

  </body>
</html>
