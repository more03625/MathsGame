<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php include nav.php?>

  <div class="container p-5">


  <div class="row">
   <div class='col-md-4 ' style='margin:0;padding:0'>
     <div class="card bg-info p-5 style="width:300px" "height:200px">
      <center><img class="card-img-top mt-5" src="images/man-icon.png" alt="Card image" style="width:50%"></center>

      <div class="card-body">
     <center>
    <a href='Admin.php?option=insert' class="btn btn-dark p-1 mt-5">1<Sup>st</Sup>&nbsp And 2<Sup>st </Sup>standard</a><br></br>


    <a href='Admin.php?option=question' class="btn btn-dark p-1 mt-5">3<Sup>rd</Sup>&nbsp And 4<Sup>th </Sup>standard</a>
    </div></center>
  </div>
</div>

<div class="col-md-8 bg-dark text-white style='height:600px;'>





  <?php
     $opt=$_GET['option'];
     if($opt!=''){
       if($opt=='question'){
         include('question.php');
       }

         elseif($opt=='insert'){
           include('insert-img.php');
         }
       }
       else {
         echo"<h1>Admin Dashboard</h1>";
       }
  ?>

</div>

</div>
</div>

</body>
</html>
