<?php
$link = mysqli_connect("localhost","numan","numan1998","MathsGame");

$user = $_POST['email'];
$pass = $_POST['pswd'];

  $query = "SELECT * FROM Register WHERE Email='$user' AND Password ='$pass'";
  $result = mysqli_query($link,$query);
  if (mysqli_num_rows($result) == 1)
  {
     session_start();
     $_SESSION['User']=$user;
      echo "<script>alert('Login Successful');
      window.location.href='index.php';
      </script>";
  }
  else {

     // echo "<script>alert('Invalid Username and Password!!!');
     // window.location.href='#';
     // </script>";
  }
?>
