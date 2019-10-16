<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
</head>
<title>Score</title>
<style>
body{
  background-image: url('images/bg7.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
table{
  font-family: 'Baloo Bhai', cursive;
  font-size: 20px;
}
</style>
<body>
  <?php include("nav.php"); ?>
  <div class="container-fluid">
    <div>
      <center><h1>>Score Board</h1></center>
    </div>
    <div class="row mt-5">
      <div class="col-lg-6 ">
        <div class="">
          <center><canvas id="doughnutChart" style="max-width: 400px;"></canvas></center>
        </div>
      </div>
      <div class="col-lg-6">
        <center>
          <h1>Test Result</h1>
          <table class="table">
            <thead>
              <tr>
                <th>Title</th>
                <th>Result</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-">Unanswer:</td>
                <td>2</td>
              </tr>
              <tr>
                <td>Correct Answer:</td>
                <td>5</td>
              </tr>
              <tr>
                <td>Wrong Answer:</td>
                <td>3</td>
              </tr>
            </tbody>
          </table>
          <a class="btn btn-danger" role="button" href="opration1.php">Try Again</a>
        </center>
      </div>
      </div>
    </div>
    <script>
    var mypie= document.getElementById("doughnutChart").getContext('2d');
    var myPieChart = new Chart(mypie,{
      type: 'doughnut',
      data: {
        labels: ["Correct Answer", "Wrong Answer", "Unanswer"],
        datasets: [{
          data: [5, 3, 2],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870"]
        }]
      },
      options: {
        responsive: true
      }
    });
  </script>
  </div>
</body>
</html>
