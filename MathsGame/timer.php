<!DOCTYPE HTML>
<html>
<head>
  </head>
<style>
#timer{
  background-color: black;
  color: white;
  font-size: 50px;
  border: 5px solid red;
  border-radius: 10px;
}
</style>
<body>
 <div class="container-fluid">
   <div class="col-lg-12">
   <div class="row">
     <div class="col-lg-10">
     </div>
     <div class="col-lg-2">
       <div><span id="timer" class=""></span></div>
       <script>
       document.getElementById('timer').innerHTML =
       001 + ":" + 30;
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
 </div>
</body>
</html>
