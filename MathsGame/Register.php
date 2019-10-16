<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>

</style>
<body>
  <?php include "nav.php";
  ?>
<div class="container-fluid mt-5">
  <center><h3>Register</h3></center>
  <div class="row">
    <div class="col-md-4"></div>

  <div class="col-md-4 card bg-info text-white m-3" style="width:350px"><br>
    <h2 class="text-center"><b>REGISTRATION</b></h2>

    <img class="img-fluid card-img-top mx-auto d-block" src="images/log.png" alt="Card image" style="width:40%">



    <div class="card-body">
  <form class="form" action="/action_page.php">
    <div class="form-group">
     <label for="name"><b>Name:</b></label>
  <input type="email" class="form-control" name="name">

  <label for="email"><b>Email address:</b></label>
  <input type="email" class="form-control" name="email">


  <label for="pwd"><b>Password:</b></label>
  <input type="password" class="form-control" name="pwd">

 <div class="form-group">
  <label><b>Birthdate:</b</label>
  <br><input type="date" name="bday" class="form-control">
</div>
  <button type="submit" class="btn btn-primary mx-auto d-inline center">Submit</button>
</form>
</div>
      </div>
  </div></div>
</div>

</div>
  <br>
  <div class="col-md-4">

  </div>



</body>
</html>
