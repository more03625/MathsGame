<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
<style>
#timer{
  background-color: black;
  color: white;
  font-size: 50px;
  border: 5px solid red;
  border-radius: 10px;
  margin-right: 50px;
}

</style>
<body>

 <div class="container-fluid">
   <div class="row">
     <div class="col-lg-10">

     </div>
     <div class="col-lg-2 mt-5">
       <div><span id="timer"></span></div>

       <script>
       document.getElementById('timer').innerHTML =
       01 + ":" + 10;
       startTimer();

       function startTimer() {
         var presentTime = document.getElementById('timer').innerHTML;
         var timeArray = presentTime.split(/[:]+/);
         var m = timeArray[0];
         var s = checkSecond((timeArray[1] - 1));
         if(s==59){m=m-1}
         if(m<0){alert('timer completed');window.location.href = 'myscore.php';}


         document.getElementById('timer').innerHTML =
           m + ":" + s;
         console.log(m)
         setTimeout(startTimer, 1000);
       }

       function checkSecond(sec) {
         if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
         if (sec < 0) {sec = "59"};
         return sec;
       }
       </script>
     </div>
   </div>
 </div>
</body>
</html>
