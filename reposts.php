<!-- Repost Graphs -->
<?php

// Gender Pie Chart

$conn = mysqli_connect("localhost", "root", "", "astrology");
$query1 = "SELECT gender, count(*) as number FROM appointment GROUP BY gender";
$result1 = mysqli_query($conn, $query1);
// print_r($result1);

$businesscount = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('business', query) > 0 ";
$q = mysqli_query($conn, $businesscount);
// echo $result1;



// Queries Bar Chart

$query2 = "SELECT * FROM reports";
$result2 = mysqli_query($conn, $query2);
$data2 = array();


if (mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
        $data2[] = $row;
    }
}

// print_r($data2);

$result2 = [];
foreach ($data2 as $d) {
  $result2[] = array($d['query'], (int)$d['count']);
}
// print_r($result2);
$header = array("query", "count");
$result2 = array_merge(array($header), $result2);

$querytable = json_encode($result2);




?>
<!DOCTYPE HTML>
<html>

<head>


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

    <!-- <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Copper", 8.94, "#b87333"],
        ["Silver", 10.49, "silver"],
        ["Gold", 19.30, "gold"],
        ["Platinum", 21.45, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script> -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
    </script>







</head>

<body>

    <h1>Appointment Reports</h1>


    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div id="columnchart_values" style="width: 900px; height: 500px;"></div>


</body>

</html>