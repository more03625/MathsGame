<?php
$servername ="localhost";
$username = "numan";
$password = "numan1998";
$dbname = "MathsGame";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
  die("Connection failed:". mysqli_connect_error());
}

$fname=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pwd'];
$dob=$_POST['bday'];
$sql = "insert into Register(Name,Email,Password,DOB) values('$fname','$email','$pass','$dob')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Successfully Register For Website!!!');
  </script>";
}else{
  echo "Error:".$sql. "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
