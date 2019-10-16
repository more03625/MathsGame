<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Righteous&display=swap" rel="stylesheet">  <title>Select Options</title>

<style>
.card {
  align-items: center;
  width: 630px;
  height: 420px;
  background: #ffffff;
  position: relative;
  -webkit-animation-name: example;  /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 0.50s;  /* Safari 4.0 - 8.0 */
  -webkit-animation-fill-mode: forwards; /* Safari 4.0 - 8.0 */
  animation-duration: 0.50s;
  animation-fill-mode: forwards;
  font-family: 'Baloo Bhai', cursive;

}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
  from {top: 0px;}
  to {top: 100px; background-color:#9999ff;}
}

@keyframes example {
  from {top: 0px;}
  to {top: 100px; background-color: #9999ff;}
}
</style>
</head>

<body>

  <?php include("nav.php");
  ?>

<div class="container-fluid" style="margin-top:20px;">
  <div class="col-lg-12">
<div class="row">

  <div class="col-sm-2"></div>

  <div class="col-sm-8">
    <div class="card" style="margin-left:100px;">
       <h1 class=""><span style="color:yellow;">RULES</span></h1>
       <ul class="text-white" style="font-size:200%;">
       <li>Total number Of Questions are 10.</li><br>
       <li>Each Questions have 1 Mark. </li><br>
       <li>There are 5 minutes compelete quiz.</li><br>
        <p> <a href="login.php"><button type="Next" class="btn btn-warning btn-lg" style="margin-left:170px;">Start Quiz</button></a></p><br>

     </ul>

    </div>
    </div>

  <div class="col-sm-2"></div>

</div>
</div>
</div>


</body>
</html>
