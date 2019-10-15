<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Addtion Quiz</title>

    <style>

    body {
      /* background-image: linear-gradient(to right, rgb(94, 190, 191), rgb(155, 203, 204)); */

    }


    .d-inline.mx-auto.center {
      text-align:center!important;
      display:block!important;
      }

#djbtn{
  font-size: 30px;
  width:12%;

}
#djbtn2{
  font-size: 15px;
  width:12%;

}
.btnoptions {
  width: 10%;
}
    </style>

  </head>
  <body>
    <?php include("navone.php"); ?>
    <div class="container-fluid">
      <div class="col-lg-12">

      <div class="row">
        <div class="col-lg-10">
          <h3 class="mt-3 mb-4" style="font-family: 'Bitter', serif;"><b>Addtion</b></h3>
            <div class="container-fluid d-flex justify-content-center mb-5 mt-5">
              <img class="img-fluid" style="width:20%;" src="images/birdall.png" alt="bird-Image">
              <img class="img-fluid mt-3" style="width:9%; height:2%;" src="images/plusicon.png" alt="plusicon">
              <img class="img-fluid" style="width:20%;" src="images/birdall.png" alt="bird-Image">
              <img class="img-fluid" style="width:20%;" src="images/birdall.png" alt="bird-Image"><br>
            </div>

            <div class="btnoptions container-fluid d-inline mx-auto center mt-5" style="font">
              <button type="button" style="width:%;" id="djbtn" class="btnoptions mx-auto btn btn-info mb-2 "><b>4</b></button>
              <button type="button" style="width:%;" id="djbtn" class="btnoptions mx-auto btn btn-info mb-2 "><b>6</b></button><br>
              <button type="button" style="width:%;" id="djbtn" class="btnoptions mx-auto btn btn-info "><b>3</b></button>
              <button type="button" style="width:%;" id="djbtn" class="btnoptions mx-auto btn btn-info "><b>1</b></button>
            </div>
        </div>


          <div class="col-lg-2 mt-5" style="margin-top: 105px;" >
            <?php include("timer.php"); ?>
          </div>



      </div>
    </div>
    </div>

    <div class="container-fluid mt-5">
      <button id="djbtn2" type="button" class="btn btn-info mb-5"><b>Prev</b></button>

      <a href="sec.php"><button id="djbtn2" type="button" class="btn btn-info float-right mb-5"><b>Next</b></button></a><br>
    </div>




  </body>
</html>
k
