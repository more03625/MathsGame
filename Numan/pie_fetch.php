<?php
    $servername ="localhost";
    $username = "numan";
    $password = "numan1998";
    $dbname = "chart";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
      die("Connection failed:". mysqli_connect_error());
    }
    $result = '';
    $sql = "SELECT * FROM piechart";
    $res = mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_array($res)){
      $result = $result.'"'. $row['result'].'",';
    }

    $result = trim($result,",");
    ?>

    <script>
    var mypie= document.getElementById("doughnutChart").getContext('2d');
    var myPieChart = new Chart(mypie,{
      type: 'doughnut',
      data: {
        labels: ["Correct Answer", "Wrong Answer", "Unanswer"],
        datasets: [{
          data: [<?php echo $result;?>],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870"]
        }]
      },
      options: {
        responsive: true
      }
    });
  </script>
