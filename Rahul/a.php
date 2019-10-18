<?php
session_start();

// if(!isset($_SESSION['user_id'])){
//   header('Location: index.php');
// }
?>
<?php
//$con=mysqli_connect("localhost","root","","quiz");
include('config.php');
$category='';
$category=$_GET['cid'];
$aid=$_GET['Grade_id'];
 if(!empty($_POST['name'])){
     $name=$_POST['name'];
      $category=$_POST['category'];
    // mysqli_query( $con, "INSERT INTO users (id,user_name,user_score,cid)VALUES (null,'$name',0,'$category')") or die(mysqli_error());
    $_SESSION['name']= $name;
    $_SESSION['id'] = mysqli_insert_id();
//  echo "New record has id: " . mysqli_insert_id($con);
  }

if(!empty($_SESSION['name'])){
  include('config.php');
  $name=$_SESSION['name'];
  $cat=$_GET['cid'];
  $score=0;
  $sql1="INSERT INTO users value(null,'$name',$score,'$cat')";
  $result1=mysqli_query($con,$sql1);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Metal+Mania&display=swap" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="../../assets/js/html5shiv.js"></script>
<script src="../../assets/js/respond.min.js"></script>
<![endif]-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
<script src="js/countdown.js"></script>
<style>
.container {
/* margin-top: 110px; */
}
      html{
        overflow-x:hidden;
      }
.error {
color: #B94A48;
}
.form-horizontal {
margin-bottom: 0px;
}
.hide{display: none;}
      .question{
       font-family: 'Metal Maria';
       font-size:30px;
       font-weight: bold;
      }
      input[type=radio] {
    border: 2px;
    width: 7%;
    height: 3vh;
}
.collapsible {
  background-color: yellowgreen;
  color: black;
  cursor: pointer;
  padding:1vh;
  width: 18%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 3vh;

  float:right;
}

.active, .collapsible:hover {
  background-color:yellowgreen;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
  color:blue;
}

</style>
</head>
<body>
    <nav class="navbar navbar-light container-fluid sticky-top" style=" background: linear-gradient(to right, #ffffff 17%, #ffccff 100%);">
      <div class="col-lg-3 col-4">
        <a class="navbar-brand" href="#">
          <img src="Images/1520320708piflogo.png" class="img-fluid mb-1" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-5">
          <h1 class="align-bottom pl-2" style="font-size:5vw;font-family: 'Metal Mania', cursive;color:yellowgreen">Quiz<span style="font-family: 'Metal Mania', cursive;color:blue;font-size:3vw;">Time</span></h1>
      </div>

      <div class="col-lg-1 col-3" >
        <form class="form-colntrol" action="logout.php" method="post">
                <?php
                                  error_reporting(0);
                                  if (strlen($_SESSION['user_id'])>0) {?>
                                    <input type="submit" class="btn btn-lg" style="background-color:yellowgreen; color:black; font-size: 1.2vw;font-family:'Metal Mania'" name="logout" value="Logout">

                                  <?php } else {
                                      echo "<input type='submit' class='btn' style='margin-left:13vw;background-color:yellowgreen;color:black;font-family: 'Metal Mania';' name='logout' value='Logout'>";
                                  }
                                   ?>
                                 </form>
        <!-- <a href="logout.php" class="btn" style="background-color:yellowgreen;font-family: 'Metal Mania';">Logout</a> -->
      </div>


    </nav>
<div class="container">

  <div class="row">
    <div class="col-lg-5">

    </div>
    <div class="col-lg-5">

    </div>
    <div class="col-lg-2">
      <div class="container" id='timer'>
          <script type="application/javascript">
          var myCountdownTest = new Countdown({
                                  time: 120,
                                  width:200,
                                  height:80,
                                  rangeHi:"minute"
                                  });
         </script>

      </div>
    </div>

  </div>
</div><br>


<div class="container question">
      <div class="row">


<div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-3 col-md-offset-3 col-12">

<form class="form-horizontal" role="form" id='login' method="post" action="result.php">
<?php
$number_question = 1;
$row = mysqli_query( $con, "SELECT * FROM question WHERE cid=$category ");
$rowcount = mysqli_num_rows( $row );
$remainder = $rowcount/$number_question;
$i = 0;
$j = 1; $k = 1;
?>





<?php while ( $result = mysqli_fetch_assoc($row) ) {

            $id=$result['id'];
              $op1=$result['opt1'];
                $op2=$result['opt2'];
                $op3=$result['opt3'];
                $op4=$result['opt4'];
                echo "<div class='container col-lg-12 col-12'>";
if ( $i == 0) echo "<div class='cont' id='question_splitter_$j'>";?>

<div class="container" id='question<?php echo $k;?>' >

            <p class='questions' style="margin-left:-20px; margin-top:-17px;"  id="qname<?php echo $j;?>"> <?php echo $k?>.&nbsp;&nbsp;&nbsp;<?php echo $result['Questions'];?></p>

            <?php

if($aid==1){

  ?>

  <input type="radio" value="1" name='<?php echo $result['id'];?>' id='radio1_<?php echo $result['id'];?>' /> <img src="images/<?php echo $id; ?>/<?php echo $result['opt1'];?>"width="29%"style="height:140px; border:2px solid ;" alt="">
    <input type="radio" value="2"  name='<?php echo $result['id'];?>' id='radio1_<?php echo $result['id'];?>' /> <img src="images/<?php echo $id; ?>/<?php echo $result['opt2'];?>"width="29%"style="height:140px;border:2px solid;" alt=""><br><br>
      <input type="radio" value="3"  name='<?php echo $result['id'];?>' id='radio1_<?php echo $result['id'];?>'/> <img src="images/<?php echo $id; ?>/<?php echo $result['opt3'];?>"width="29%"style="height:140px;border:2px solid;" alt="">
        <input type="radio" value="4"  name='<?php echo $result['id'];?>' id='radio1_<?php echo $result['id'];?>'/> <img src="images/<?php echo $id; ?>/<?php echo $result['opt4'];?>"width="29%"style="height:140px;border:2px solid;" alt="">

  <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>


<?php
}
if($aid>=2){ ?>
<div class="container" style="font-size:27px; margin-top:30px;">


  <input type="radio" value="1"   id='radio1_<?php echo $result['id'];?>'style="vertical-align:center;" name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;&nbsp;<?php echo $result['opt1'];?>

  <input type="radio" value="2"  id='radio1_<?php echo $result['id'];?>'style="vertical-align:center;" name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;&nbsp;<?php echo $result['opt2'];?><br><br>

  <input type="radio" value="3"  id='radio1_<?php echo $result['id'];?>'style="vertical-align:center;" name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;&nbsp;<?php echo $result['opt3'];?>

  <input type="radio" value="4"  id='radio1_<?php echo $result['id'];?>'style="vertical-align:center;" name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;&nbsp;<?php echo $result['opt4'];?>

  <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>


</div>
<?php }  ?>
          <!--<input type="radio" value="1" id='radio1_<?php// echo $result['id'];?>' name='<?php //echo $result['id'];?>'/>&nbsp;<?php //echo $result['op1'];?>
            <br/>
<input type="radio" value="2" id='radio1_<?php //echo $result['id'];?>' name='<?php //echo $result['id'];?>'/>&nbsp;<?php //echo $result['op2'];?>
<br/>
<input type="radio" value="3" id='radio1_<?php //echo $result['id'];?>' name='<?php //echo $result['id'];?>'/>&nbsp;<?php //echo $result['op3'];?>
<br/>
<input type="radio" value="4" id='radio1_<?php //echo $result['id'];?>' name='<?php //echo $result['id'];?>'/>&nbsp;<?php //echo $result['op4'];?>
<br/>
<input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php //echo $result['id'];?>' name='<?php //echo $result['id'];?>'/>
<br/>-->

</div>
<br>

<?php
$i++;
if ( ( $remainder < 1 ) || ( $i == $number_question && $remainder == 1 ) ) {
echo "<button  id='".$j."' class='next btn btn-success btn-lg' style='font-size:20px; background-color:yellowgreen; color:black; font-size: 1.5vw; font-family:'Metal Mania';' type='submit'>Finish</button>";
echo "</div>";

                }  elseif ( $rowcount > $number_question  ) {
if ( $j == 1 && $i == $number_question ) {
echo "<button id='".$j."' class='next btn btn-success btn-lg' style='font-size:20px;background-color:yellowgreen; color:black; font-size: 1.5vw; font-family:'Metal Mania';' type='button'>Next</button>";

echo "</div>";
$i = 0;
$j++;
} elseif ( $k == $rowcount ) {
echo " <button id='".$j."' class='previous btn btn-success btn-lg'style='font-size:20px;background-color:yellowgreen; color:black; font-size: 1.5vw; font-family:'Metal Mania';' type='button'>Previous</button>
<button id='".$j."' class='next btn btn-success btn-lg' style='font-size:20px;background-color:yellowgreen; color:black; font-size: 1.5vw; font-family:'Metal Mania';' type='submit'>Finish</button>";
echo "</div>";
$i = 0;
$j++;
} elseif ( $j > 1 && $i == $number_question ) {
echo "<button id='".$j."' class='previous btn btn-success btn-lg' style='font-size:20px;background-color:yellowgreen; color:black; font-size: 1.5vw; font-family:'Metal Mania';' type='button'>Previous</button>
                   <button id='".$j."' class='next btn btn-success btn-lg'style='font-size:20px;background-color:yellowgreen; color:black; font-size: 1.5vw; font-family:'Metal Mania';' type='button' >Next</button>";
echo "</div>";
                  echo "</div>";
$i = 0;
$j++;
}

}
 $k++;
    }
             echo"</div>"?>
</form>

<?php

if(isset($_POST[1])){
   $keys=array_keys($_POST);
   $order=join(",",$keys);

   //$query="select * from questions id IN($order) ORDER BY FIELD(id,$order)";
  // echo $query;exit;

   $response=mysql_query("SELECT id,user_ans FROM question WHERE id IN($order) ORDER BY FIELD(id,$order)")   or die(mysql_error());
   $right_answer=0;
   $wrong_answer=0;
   $unanswered=0;
   while($result=mysql_fetch_array($response)){
       if($result['correct_ans']==$_POST[$result['id']]){
               $right_answer++;
           }else if($_POST[$result['id']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
   }
   echo "right_answer : ". $right_answer."<br>";
   echo "wrong_answer : ". $wrong_answer."<br>";
   echo "unanswered : ". $unanswered."<br>";
}
?>


<script>
$('.cont').addClass('hide');

$('#question_splitter_1').removeClass('hide');

$(document).on('click','.next',function(){
   last=parseInt($(this).attr('id'));  console.log( last );
   nex=last+1;
   $('#question_splitter_'+last).addClass('hide');

   $('#question_splitter_'+nex).removeClass('hide');
});

$(document).on('click','.previous',function(){
   last=parseInt($(this).attr('id'));
   pre=last-1;
   $('#question_splitter_'+last).addClass('hide');

   $('#question_splitter_'+pre).removeClass('hide');
});

         setTimeout(function() {
             $("form").submit();
          }, 120000);
</script>



    <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</body>
</html>
<?php }else{

 //header( 'Location:index.php' ) ;

}
?>
