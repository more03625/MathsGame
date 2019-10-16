<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
</head>
<body>
  <?php include("nav.php");
  ?>
<div class="container-fluid text-center p-1" style="margin-top:100px;">
<div class="col-lg-12">
<div class="row">
  <div class="col-md-4 col-lg-4 col-sm-4 col-sm-12"></div>
  <div class="col-md-4 col-lg-4 col-sm-4 col-sm-12">
  <div class="card bg-info text-white" style="width:400px; height:480px">
    <h2><b>LOGIN</b></h2>
    <img class="card-img-top mt-2 mx-auto d-block" src="images/log.png" alt="Card image" style="width:40%">
    <div class="card-body">
    <form class="form-group" action="index.php">
    <label for="email"><b>Email:</b></label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    <label for="pwd"><b>Password:</b></label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    <br>
    <button type="submit" class="btn btn-primary text-center">Submit</button>
  </form>
</div>
   </div>
  </div>
  <br>
<div class="col-md-4 col-lg-4 col-sm-4 col-sm-12"></div>

</div>
</div>


</body>
</html>
