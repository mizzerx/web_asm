<?php
// Connect database

//Session
session_start();

//Post account and password
$usr = $_POST['usr'];
$pwd = $_POST['pwd'];

// Check session
$_SESSION['usr'] = $usr;
$_SESSION['pwd'] = $pwd;

if ($usr == "admin" && $pwd == "admin") { ?>
  <script>
    alert("Login success");
    window.location.href = "../index_student.php";
  </script>
<?php } else { ?>
  <script>
    alert("Login failed");
    window.location.href = "../index.php";
  </script>
<?php } ?>