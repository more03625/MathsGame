<!DOCTYPE html>
<html lang="en">
<head>
  <title>opration2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
</head>

<style>
.zoom{
  transition: transform 0.4s;
}
.zoom:hover{
  transform:scale(1.2);
}
.card{
  border-radius: 30px;
  box-shadow: 2px 5px 2px 3px;
  font-family: 'Baloo Bhai', cursive;
}
body{
  background-image: url('img/bg.jpg');
}
</style>

<body>
  <?php
include("nav.php");
  ?>

<div class="container-fluid" style="margin-top:50px;">
  <div class="row">
    <div class="col-sm-3 responsive">
</div>


    <div class="col-sm-3 responsive">
      <div class="card shadow 5px 5px zoom" style="width:270px; height:320px;">
        <img class="card-img-top" src="images/addition.jpeg" style="height:230px; width:240px;">
        <div class="card-body">
          <p class="card-text text-center text-danger" style="font-size:20px;">ADDITION</p>
        </div>
      </div>
    </div>


    <div class="col-sm-3 responsive">
      <div class="card shadow 5px 5px zoom" style="width:270px; height:320px;">
        <img class="card-img-top" src="images/sub.png" style="height:230px; width:240px;">
        <div class="card-body">
          <p class="card-text text-center text-info" style="font-size:20px;">SUBSTRACTION</p>
        </div>
      </div></div>


    <div class="col-sm-3 responsive">
    </div>

  </div>
</div>

</body>
</html>
