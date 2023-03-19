<!-- Repost Graphs -->
<?php



$conn = mysqli_connect("localhost", "root", "", "astrology");
$query1 = "SELECT gender, count(*) as number FROM appointment GROUP BY gender";
$result1 = mysqli_query($conn, $query1);

$businesscount  = "SELECT COUNT(query) FROM appointment WHERE FIND_IN_SET('business', query) > 0 "; 
$q= mysqli_query($conn, $businesscount);
// echo $result1;

$dataPoints = array( 
	array("y" => $q, "label" => "Germany" ),
	array("y" => $q, "label" => "France" ),
	array("y" => $q, "label" => "China" ),
);

// $sql = "CREATE TABLE AllQueries (
// 	Business VARCHAR(255) NOT NULL,
// 	Job VARCHAR(255) NOT NULL,
// 	Marriage VARCHAR(255) NOT NULL,
// 	)";
	
// 	if (mysqli_query($conn, $sql)) {
// 	  echo "Table AllQueries created successfully";
// 	} else {
// 	  echo "Error creating table: " . mysqli_error($conn);
// 	}

	// Insert data
// $sql = "INSERT INTO AllQueries (Business, Job, Marriage)
// VALUES ('$businesscount', '$businesscount', '$businesscount')";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

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

	<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load("current", { packages: ['corechart'] });
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				["Element", "Density", { role: "style" }],
				["Silver", 10.49, "silver"],
				["Gold", 19.30, "gold"],
				["Platinum", 21.45, "color: #e5e4e2"]
			]);

			var view = new google.visualization.DataView(data);
			view.setColumns([0, 1,
				{
					calc: "stringify",
					sourceColumn: 1,
					type: "string",
					role: "annotation"
				},
				2]);

			var options = {
				title: "Query Types",
				width: 600,
				height: 400,
				bar: { groupWidth: "55%" },
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

			var data = google.visualization.arrayToDataTable([
				['Query', 'Count'],
				<?php
				while ($row = mysqli_fetch_array($dataPoints)) {
					echo "['" . $row["y"] . "', " . $row["label"] . "],";
				}
				?>
			]);


			// var data = google.visualization.arrayToDataTable([
			// 	["Element", "Density", { role: "style" }],
			// 	["Silver", 10.49, "silver"],
			// 	["Gold", 19.30, "gold"],
			// 	["Platinum", 21.45, "color: #e5e4e2"]
			// ]);

			var view = new google.visualization.DataView(data);
			view.setColumns([0, 1,
				{
					calc: "stringify",
					sourceColumn: 1,
					type: "string",
					role: "annotation"
				},
				2]);

			var options = {
				title: "Query Types",
				width: 600,
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
	<div id="columnchart_values" style="width: 900px; height: 300px;"></div>


</body>

</html>