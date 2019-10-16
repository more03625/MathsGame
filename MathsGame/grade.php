<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
 </head>
<body class="container">
	<?php
  include ("nav.php")
	?>
	<h1 class="text-center text-gray mb-5"style="font-family: 'Abril Fatface', cursive;"> </h1>
	<div class="row">

	<?PHP

	 $con = mysqli_connect("localhost","krutika","kruti123");
	 mysqli_select_db($con,"mathgame");


	 //if($con){
		//echo "connection succussful";
	 //}else{
	 	//echo "no connection";
	// }


	$query = " SELECT `grade_id`,`grade_name`,`image` FROM `Grade` where grade_id";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($grade = mysqli_fetch_array($queryfire)){
			?>



		<div class="col-lg-3 col-md-3 col-sm-12">
      <form>
				<div class="card">
					<h6 class="card-title bg-info text-white p-2 text-uppercase">
						<?php echo $grade['name'];?></h6>
           <div class="card-body">
						 <img src="<?php echo $grade['image'];  ?>" alt="menu" class="img-fluid mb-2" style= style= height:"200px;" width:"300px;">
						  <span><div class="pb-3"><?php echo $grade['des'];?></div></span><br><br>
						 <span>  &#8377; <?php echo $grade['price'];  ?></span>
					 <span> <?php echo $grade['discount'];  ?> </span></h6>
					</div>
				</div>
			</form>

		</div>


	<?php
		}
	}
	?>


</div>
</body>
</html>
