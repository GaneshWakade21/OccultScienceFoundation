<?php
$mysqli = new mysqli("localhost", "root", "", "astrology");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM coursemaster";
$result = mysqli_query($mysqli , $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- 
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> -->

    <!-- Bootstrap CSS-->
    <!-- <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script> -->

    <!-- Vendor CSS-->
    <!-- <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all"> -->

    <!-- Main CSS-->
    <!-- <link href="css/theme.css" rel="stylesheet" media="all"> -->
    <style>
        /* table,
        th,
        td {
            border: 1px solid black;
            padding: 15px;
        }

        table {
            border-spacing: 10px;
        }

        table th {
            font-size: 13px;
        }

        table {
            width: 50%;
        } */

        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 2px solid black;
        }
    </style>
</head>

<body>

    <div class="container bg-white shadow">
        <div class="py-4 mt-5">
            <div class='text-center pb-2'>
                <h4>Course Master Table</h4>
            </div>

            <?php 
                $sql = "SELECT * FROM coursemaster";
                $result = mysqli_query($mysqli , $sql);
                $num = mysqli_num_rows($result);
                $no = 1;
                echo '            <table style="width:100%" class="table-hover text-center ">

            <table style="width:100%" class="table-hover text-center ">

                <tr class="bg-dark">
                    <th>id</th>
                    <th>Course Name</th>
                    <th>Course Type</th>
                    <th>Course Duration</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Actual Start Date</th>
                    <th>Actual End Date</th>
                    <th>Course Fee</th>
                    <th>Mode</th>
                    <th>No_of_classes_per_week</th>
                    <th>Remark</th>
                    <th>Action</th>
                </tr>

                <tr>';

                if($num > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo '
                     
                    <td>'. $no .'</td>
                    <td>'. $row["course_name"] .'</td>
                    <td>'. $row["course_type"] .'</td>
                    <td>'. $row["course_duration"] .'</td>
                    <td>'. $row["status"] .'</td>
                    <td>'. $row["start_date"] .'</td>
                    <td>'. $row["end_date"] .'</td>
                    <td>'. $row["actual_start_date"] .'</td>
                    <td>'. $row["actual_end_date"] .'</td>
                    <td>'. $row["course_fee"] .'</td>
                    <td>'. $row["mode"] .'</td>
                    <td>'. $row["no_classes_per_week"] .'</td>
                    <td>'. $row["remark"] .'</td>
                    <td><button>Edit</button></td>
                    </tr>';
                $no++;
                      }
                }

            ?>


                <!-- <tr>
                    <td>1</td>
                    <td>Tarot Cards Course</td>
                    <td>Basic</td>
                    <td>1 Months</td>
                    <td>01/04/2023</td>
                    <td>31/04/2023</td>
                    <td>05/04/2023</td>
                    <td>05/05/2023</td>
                    <td>Rs.2000</td>
                    <td>Offline</td>
                    <td>3</td>
                    <td></td>
                    <td><button>Edit</button></td> -->
                    <!-- <?php
                    // echo "<td>
                    //     <form action=\"editForm.php\" method=\"get\"><input type=\"hidden\" name=\"id\"
                    //             value=\"$data['id']\" style=\"text-decoration: none\" /><input type=\"submit\"
                    //             value=\"Edit\" /></form>
                    // </td>";
                    ?> -->


            
                <!-- <tr>

                </tr>
                <tr>

                    <td>1</td>
                    <td>Tarot Cards Course</td>
                    <td>Advance</td>
                    <td>2 Months</td>
                    <td>01/04/2023</td>
                    <td>31/05/2023</td>
                    <td>05/04/2023</td>
                    <td>05/06/2023</td>
                    <td>Rs.6000</td>
                    <td>Offline</td>
                    <td>3</td>
                    <td></td>
                    <td><button>Edit</button></td>

                </tr> -->
                </tr>

            </table>
        </div>
    </div>


    <script>
        const editButtons = document.querySelectorAll('button');

        editButtons.forEach((button) => {
            button.addEventListener('click', () => {
                // Handle the edit action here
                console.log('Edit button clicked');



                const row = button.parentNode.parentNode;
                // Get the cells in the row
                const cells = row.querySelectorAll('td');

                // Get the data from the cells
                const name = cells[0].textContent;
                const email = cells[1].textContent;

                // Display a form or modal with the data
                // and allow the user to edit it

                // When the user submits the edited data,
                // update the table cells with the new data
                cells[0].textContent = editedName;
                cells[1].textContent = editedEmail;
            });
        });
    </script>

</body>





<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->


<!-- Jquery JS-->
<!-- <script src="vendor/jquery-3.2.1.min.js"></script> -->

<!-- Bootstrap JS-->
<!-- <script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script> -->

<!-- Vendor JS       -->
<!-- <script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>
<script src="https://kit.fontawesome.com/deb4d1b812.js" crossorigin="anonymous"></script> -->

<!-- Main JS-->
<!-- <script src="js/main.js"></script> -->



</html>