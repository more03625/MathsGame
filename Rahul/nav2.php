<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Navbar</title>
    <style>
   nav{
     box-shadow: 0.5px 0.5px 0.5px 0.5px #ffffff;
     background: linear-gradient(to left, #99ffcc -4%, #ffffff 99%);
     font-family: 'Baloo Bhai', cursive;
   }

  </style>
  </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="Homepage.php">
    <img src="images/pratham.png" style="width:250px"></img>
   </a>
   <button id="nav-btn"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
     <h1 style="margin-left:25%; font-size:300%;"><span style="color:red;"></span>M</span><span style="color:blue;">A</span><span style="color:green;">T</span><span style="color:red;">H </span>
       <span style="color:blue;">G </span><span style="color:red;">A</span><span style="color:pink;">M</span><span style="color:blue;">E</span></h1>
       <ul class="navbar-nav ">
         <li class="nav-item active" >
           <a class="nav-link text-dark" style="font-size:20px;" href="Register.php"><i class="fa fa-sign-out"></i>Create New Account<span class="sr-only">(current)</span></a>
         </li>
       </ul>
     </div>
   </nav>
</body>
</html>
