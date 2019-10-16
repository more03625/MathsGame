<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>

<style>
.top-right {
  position: absolute;
  top: 55px;
  right: 80px;

}
.box{

  background-image: url("images/bg14.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  padding: 10%;
  align-self: center;
  width: 100%;
  background-attachment: fixed;

}

.sun{
  margin-left: 40%;
  margin-top: 15%;
  width: 20%;
}

.bird{
  margin-left: 80%;
  margin-top: %;
  width: 10%;
}

a:hover {
 box-shadow: 3px 2px 4px rgba(.5, .5, .5, .5);
}
</style>
</head>
<body>
  <?php include("nav.php"); ?>


  <div class="container-fluid">
    <div class="row">

    <div class="box">

     <div><img class="img-fluid sun" src="images/sun.gif" alt="Chania"></div>
     <img class="img-fluid bird" src="images/bird2 gif.gif" alt="Chania">
  <div class="row">
      <div class="col-md-6">

        <a href="opration1.php" class="btn btn-danger mb-4 p-3" style="margin-left:40%;">1<sup>st</sup> standard</a>
      </div>

      <div class="col-md-6">

        <a href="#" class="btn btn-danger mb-4 p-3" style="margin-left:40%;">2<sup>nd</sup> standard</a>
      </div>

      <div class="col-md-6">

        <a href="#" class="btn btn-danger mb-4 p-3" style="margin-left:40%;">3<sup>rd</sup> standard</a>
      </div>

      <div class="col-md-6">

        <a href="#" class="btn btn-danger mb-4 p-3" style="margin-left:40%;">4<sup>th</sup> standard</a>
      </div>

  </div>
</div>
</div>
</div>


</body>
</html>
