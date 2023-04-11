<!-- Repost Graphs -->
<?php

// Gender Pie Chart

$conn = mysqli_connect("localhost", "root", "", "astrology");
$query1 = "SELECT gender, count(*) as number FROM appointment GROUP BY gender";
$result1 = mysqli_query($conn, $query1);
// print_r($result1);


// Business count updation done 

$businesscount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('business', query) > 0 ";
$b = mysqli_query($conn, $businesscount);
// print_r($b);

$rows = mysqli_fetch_all($b, MYSQLI_ASSOC);

// Loop through the rows and concatenate the values into a string
$bcnt = "";
foreach ($rows as $row) {
  $bcnt .= implode(",", $row) . "\n";
}

// Output the string
// echo $bcnt;
// echo $b;

$updatebusicnt = "UPDATE reports SET count=$bcnt WHERE id = 1 ";

// if (mysqli_query($conn, $updatebusicnt)) {
//     echo "Record updated successfully";
//   } else {
//     echo "Error updating record: " . mysqli_error($conn);
//   }

//   Investment Update 

$invcount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('investment', query) > 0 ";
$inv = mysqli_query($conn, $invcount);
$irows = mysqli_fetch_all($inv, MYSQLI_ASSOC);
$icnt = "";
foreach ($irows as $row) {
  $icnt .= implode(",", $row) . "\n";
}
$updateicnt = "UPDATE reports SET count=$icnt WHERE id = 2 ";


// Relationship Updation 

$relcount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('relationship', query) > 0 ";
$rel = mysqli_query($conn, $relcount);
$relrows = mysqli_fetch_all($rel, MYSQLI_ASSOC);
$relcnt = "";
foreach ($relrows as $row) {
  $relcnt .= implode(",", $row) . "\n";
}
$updaterelcnt = "UPDATE reports SET count=$relcnt WHERE id = 3 ";


// Health Updation 

$hltcount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('health', query) > 0 ";
$hlt = mysqli_query($conn, $hltcount);
$hltrows = mysqli_fetch_all($hlt, MYSQLI_ASSOC);
$hltcnt = "";
foreach ($hltrows as $row) {
  $hltcnt .= implode(",", $row) . "\n";
}
$updatehltcnt = "UPDATE reports SET count=$hltcnt WHERE id = 4 ";


// Property Updation 

$prtcount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('property', query) > 0 ";
$prt = mysqli_query($conn, $prtcount);
$prtrows = mysqli_fetch_all($prt, MYSQLI_ASSOC);
$prtcnt = "";
foreach ($prtrows as $row) {
  $prtcnt .= implode(",", $row) . "\n";
}
$updateprtcnt = "UPDATE reports SET count=$prtcnt WHERE id = 5 ";


// Marriage Updation 

$mricount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('marriage', query) > 0 ";
$mri = mysqli_query($conn, $mricount);
$mrirows = mysqli_fetch_all($mri, MYSQLI_ASSOC);
$mricnt = "";
foreach ($mrirows as $row) {
  $mricnt .= implode(",", $row) . "\n";
}
$updatemricnt = "UPDATE reports SET count=$mricnt WHERE id = 6 ";


// Job Updation 

$jobcount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('job', query) > 0 ";
$job = mysqli_query($conn, $jobcount);
$jobrows = mysqli_fetch_all($job, MYSQLI_ASSOC);
$jobcnt = "";
foreach ($jobrows as $row) {
  $jobcnt .= implode(",", $row) . "\n";
}
$updatejobcnt = "UPDATE reports SET count=$jobcnt WHERE id = 7 ";


// Transfer Updation 

$transcount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('transfer', query) > 0 ";
$trans = mysqli_query($conn, $transcount);
$transrows = mysqli_fetch_all($trans, MYSQLI_ASSOC);
$transcnt = "";
foreach ($transrows as $row) {
  $transcnt .= implode(",", $row) . "\n";
}
$updatetranscnt = "UPDATE reports SET count=$transcnt WHERE id = 8 ";


// Promotion Updation 

$procount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('promotion', query) > 0 ";
$pro = mysqli_query($conn, $procount);
$prorows = mysqli_fetch_all($pro, MYSQLI_ASSOC);
$procnt = "";
foreach ($prorows as $row) {
  $procnt .= implode(",", $row) . "\n";
}
$updateprocnt = "UPDATE reports SET count=$procnt WHERE id = 9 ";


// Pregnancy Updation 

$precount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('pregnancy', query) > 0 ";
$pre = mysqli_query($conn, $precount);
$prerows = mysqli_fetch_all($pre, MYSQLI_ASSOC);
$precnt = "";
foreach ($prerows as $row) {
  $precnt .= implode(",", $row) . "\n";
}
$updateprecnt = "UPDATE reports SET count=$precnt WHERE id = 10 ";


// Litigation Updation 

$precount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('litigation', query) > 0 ";
$pre = mysqli_query($conn, $precount);
$prerows = mysqli_fetch_all($pre, MYSQLI_ASSOC);
$precnt = "";
foreach ($prerows as $row) {
  $precnt .= implode(",", $row) . "\n";
}
$updateprecnt = "UPDATE reports SET count=$precnt WHERE id = 11 ";



// ForeignTravel Updation 

$forgcount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('foreigntravel', query) > 0 ";
$forg = mysqli_query($conn, $forgcount);
$forgrows = mysqli_fetch_all($forg, MYSQLI_ASSOC);
$forgcnt = "";
foreach ($forgrows as $row) {
  $forgcnt .= implode(",", $row) . "\n";
}
$updateforgcnt = "UPDATE reports SET count=$forgcnt WHERE id = 12 ";



// if (mysqli_query($conn, $updateforgcnt)) {
//     echo "Record updateforgcnt updated successfully";
//   } else {
//     echo "Error updating record: " . mysqli_error($conn);
//   }







// Queries Bar Chart


// Google Query Bar Chart

// $query2 = "SELECT * FROM reports";
// $result2 = mysqli_query($conn, $query2);
// $data2 = array();


// if (mysqli_num_rows($result2) > 0) {
//   while ($row = mysqli_fetch_assoc($result2)) {
//     $data2[] = $row;
//   }
// }

// // print_r($data2);

// $result2 = [];
// foreach ($data2 as $d) {
//   $result2[] = array($d['query'], (int) $d['count']);
// }
// // print_r($result2);
// $header = array("query", "count");
// $result2 = array_merge(array($header), $result2);

// $querytable = json_encode($result2);


// Canvas Query Bar Chart 

$test = array();
$count = 0;
$res = mysqli_query($conn, "SELECT * FROM reports");
while ($row = mysqli_fetch_array($res)) {
  $test[$count]['label'] = $row['query'];
  $test[$count]['y'] = $row['count'];
  $count = $count + 1;
}


?>
<!DOCTYPE HTML>
<html>

<head>

  <link rel="stylesheet" href="report.css">


  <!-- Gender Pie Chart  -->

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['gender', 'Number'],
        <?php
        while ($row = mysqli_fetch_array($result1)) {
          echo "['" . $row["gender"] . "', " . $row["number"] . "],";
        }
        ?>
      ]);

      var options = {
        title: 'Gender Ratio'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>



  <!-- Queries Bar Chart   -->


  <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", { packages: ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

      var data = google.visualization.arrayToDataTable(<?php echo $querytable; ?>);

      var view = new google.visualization.DataView(data);

      // view.setColumns([0, 1,
      //     {
      //         calc: "stringify",
      //         sourceColumn: 1,
      //         type: "string",
      //         role: "annotation"
      //     },
      //     2]);

      var options = {
        title: "Query Types",
        width: 1500,
        height: 400,
        bar: { groupWidth: "55%" },
        legend: { position: "none" },
        // colors: ['#3366CC', '#DC3912', '#FF9900', '#109618', '#990099','#3366CC', '#DC3912', '#FF9900', '#109618', '#990099','#109618', '#990099'],

        colors: ['#66008d', '#bd21f9', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6', '#f7d9c4', '#fae5d3', '#fbebe4', '#fcf2f0', '#fcf8f7', '#fcfbfb'],
        // colors: colorPalate,
        // colors: ['green'],
        // colorPalate : 
        // is3D: true,
        // colorByPoint: true
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
    }
  </script> -->


  <script>
    window.onload = function () {

      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light1",
        title: {
          text: "Query Reports",
          fontFamily: "Arial"
        },
        axisY: {
          title: "Number of Queries"
        },
        data: [{
          type: "column",
          yValueFormatString: "#,##0.##",
          dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
        }]
      });
      chart.render();

    }
  </script>


  <!-- Number of courses  -->

  <script>
    window.onload = function () {

      var chart = new CanvasJS.Chart("NumberofCourses", {
        animationEnabled: true,
        theme: "light2",
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          datasets: [{
            label: 'Dataset 1',
            data: [12, 19, 3, 5, 2, 3, 9],
            fill: false,
            borderColor: 'red'
          }]
        },
        title: {
          text: "Gold Reserves"
        },
        axisY: {
          title: "Gold Reserves (in tonnes)"
        },
        data: [{
          type: "column",
          yValueFormatString: "#,##0.## tonnes",
          dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
      });
      chart.render();

    }
  </script>


  <style>
    .title {
      display: flex;
      justify-content: center;

      /* border: 2px solid red; */

    }

    .subheading {
      display: flex;
      justify-content: center;

      /* border: 2px solid red; */

    }

    .timerange {
      display: flex;
      flex-direction: row;
      /* border: 2px solid red; */
      gap: 2rem;
    }
  </style>

</head>

<body>
  <div class="title">
    <h1><u>OCCULT SCIENCE FOUNDATION</u></h1>
  </div>

  <div class="subheading">
    <h1>Appointment Reports</h1>

  </div>



  <div id="piechart" style="width: 900px; height: 500px;"></div>

  <div id="chartContainer" style="height: 370px; width: 90%;"></div>
  <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->


  <div id="NumberofCourses" style="height: 370px; width: 100%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



</body>

</html>