<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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
  width: 20%;
}
    </style>

  </head>
  <body>
    <?php include("navone.php"); ?><br>
    <div class="container">

      <div class="row ">
        <div class="col-lg-10">
          <h3 class="mt-3 mb-4" style="font-family: 'Bitter', serif;"><b>Addtion</b></h3>
            <div class="d-flex justify-content-center mb-5">
              <img class="img-fluid" style="width:25%;margin-top:10px" src="images/birdall.png" alt="bird-Image">
              <img class="img-fluid" style="width:9%; height:2%;margin-top:50px" src="images/plusicon.png" alt="plusicon">
              <img class="img-fluid" style="width:25%;margin-top:10px" src="images/birdall.png" alt="bird-Image">
              <img class="img-fluid" style="width:25%;margin-top:10px" src="images/birdall.png" alt="bird-Image"><br>
            </div>

            <div class="container btnoptions d-inline mx-auto center " style="font">
              <button type="button" class="btnoptions mx-auto btn btn-info" id="djbtn">4</button>
              <button type="button" class="btnoptions mx-auto btn btn-info" id="djbtn">4</button><br>
              <button type="button" class="btnoptions mx-auto btn btn-info" style="margin-top:2px" id="djbtn">4</button>
              <button type="button" class="btnoptions mx-auto btn btn-info" id="djbtn">4</button>
            </div>

            <div class="mt-5 center">
              <button id="djbtn2" type="button" style="margin-left:150px" class="btn btn-info"><b>Prev</b></button>
              <a href="sec.php"><button id="djbtn2" type="button" style="margin-right:150px" class="btn btn-info float-right"><b>Next</b></button></a><br>
            </div>
        </div>

          <div class="col-lg-2" style="margin-top: 50px;" >
            <?php include("countdown.php"); ?>
          </div>
      </div>
    </div>
  </body>
</html>
