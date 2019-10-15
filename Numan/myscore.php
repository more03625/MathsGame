<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<style>
body{
  background-image: url('bg7.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>
  <div class="container-fluid">
    <div>
      <center><h1>Test Result</h1></center>
    </div>
    <div class="row mt-5">
      <div class="col-lg-6 ">
        <div>
          <center><h3>Doughnut Chart</h3></center>
          <center><canvas id="doughnutChart" style="max-width: 300px;"></canvas></center>
        </div>
      </div>
      <div class="col-lg-6">
        <center>
          <h3>Result</h3>
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
          <a href="score.php" class="btn btn-outline-warning" role="button">Try Again</a>
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
          data: [6, 3, 2],
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
