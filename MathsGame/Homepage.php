<!DOCTYPE html>
<html>
<head>
<style>
.button {
  width: 200px;
  height: :300px;
}

body {
  height: auto;
  width: auto;
}


.button1 {
  background-color: white;
  color: black;
  border: 2px solid  #f44336;
}

.button1:hover {
  background-color:  #f44336;
  color: white;
}
.button2 {
  background-color: white;
  color: black;
  border: 2px solid  #008CBA;
}

.button2:hover {
  background-color:  #008CBA;
  color: white;
}
.button3 {
  background-color: white;
  color: black;
  border: 2px solid  #4CAF50;;
}

.button3:hover {
  background-color:  #4CAF50;;
  color: white;
}
.button4 {
  background-color: white;
  color: black;
  border: 2px solid  #555555;
}

.button4:hover {
  background-color:  #555555;
  color: white;
}


a:hover {
 box-shadow: 3px 2px 4px rgba(.5, .5, .5, .5);
}

.container1-fluid{

}

.f1-image {
    position: absolute;
    width: 100;
    height: 398px;

    /* top: 50%;
    left: 50%; */



}
</style>
<title>HomePage | MATHS GAME</title>
</head>
<body>
  <?php include("nav.php");
  ?>

<div class="container mx-auto" style="margin-top:110px;">
  <div class="col-lg-12 mx-auto">
  <div class="row">
    <div class="col-lg-3 col-sm-6 col-md-4 mt-2 col-6">
      <a href="opration1.php"><button type="button" class="button button1 p-5 mt-5 rounded"><h4><b>1<sup>st</sup> standard</b></h4></button></a>
    </div>

    <div class="col-lg-3 col-sm-6 col-md-4 mt-2 col-6">
      <a href="opration1.php"><button type="button" class="button button2 p-5 mt-5 rounded"><h4><b>2<sup>nd</sup> standard</b></h4></button></a>
    </div>

    <div class="col-lg-3 col-sm-6 col-md-4 mt-2 col-6">
      <a href="opration1.php"><button type="button" class="button button3 p-5 mt-5 rounded"><h4><b>3<sup>rd</sup> standard</b></h4></button></a>
    </div>

    <div class="col-lg-3 col-sm-6 col-md-4 mt-2 col-6">
      <a href="opration1.php"><button type="button" class="button button4 p-5 mt-5 rounded"><h4><b>4<sup>th</sup> standard</b></h4></button></a>
    </div>
  </div>
  </div>
</div>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="">
      <img class="img-fluid f1-image" src="images/Homepageback.jpg" style="height:300px;">
    </div>
  </div>
</div>


</body>
</html>
