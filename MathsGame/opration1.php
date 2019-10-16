<!DOCTYPE html>
<html lang="en">
<head>
  <title>Select Options</title>
  <meta charset="utf-8">
</head>

<style>

.zoom{
  transition: transform 0.4s;
}
.zoom:hover{
  transform:scale(1.2);
}
.card{
  width: 220px;
  height: :300px;
    border-radius: 30px;
    box-shadow: 2px 2px 1.5px 1.5px;
    font-family: 'Baloo Bhai', cursive;
}
.card:hover{
     box-shadow: 1px 1px 1px 1px #336599;
}
</style>

<body>
  <?php
include("nav.php");
  ?>


<div class="container-fluid" style="margin-top:180px;">
  <div class="col-lg-12 mx-auto">
  <div class="row">
    <div class="col-lg-3 col-sm-6 col-md-4 mt-2 col-6">
      <a href="rule.php">
        <div class="card zoom ml-5">
          <img class="card-img-top" src="images/1.png">
          <div class="card-body">
            <p class="card-text text-center text-danger" style="font-size:24px;">ADDITION</p>
          </div>
        </div>
      </a>
    </div>


    <div class="col-lg-3 col-sm-6 col-md-4 mt-2 col-6">
      <a href="rule.php">
      <div class="card zoom ml-5">
        <img class="card-img-top" src="images/2.png">
        <div class="card-body">
          <p class="card-text text-center text-basic" style="font-size:24px;">SUBSTRACT</p>
        </div>
      </div>
    </a>
    </div>


    <div class="col-lg-3 col-sm-6 col-md-4 mt-2 col-6">
      <a href="rule.php">
      <div class="card zoom ml-5">
        <img class="card-img-top" src="images/mul.png">
        <div class="card-body">
          <p class="card-text text-center text-info" style="font-size:24px;">MULTIPLE</p>
        </div>
      </div></a></div>


      <div class="col-lg-3 col-sm-6 col-md-4 mt-2 col-6">
      <a href="rule.php">
      <div class="card zoom ml-5">
        <img class="card-img-top" src="images/4.png">
        <div class="card-body">
          <p class="card-text text-center text-success" style="font-size:24px;">DIVISION</p>
        </div>
      </div></a></div>
</div>
  </div>
</div>
<div class="container-fluid" style="margin-top:60px;">
  <a href="Homepage.php"><button type="Go Back" style="margin-left:1090px;" class="btn btn-primary btn-lg"><b>GO Back</b></button></a>

</div>
</body>
</html>
