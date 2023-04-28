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
  <title>Admin Home page</title>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- component -->
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  <link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

        .btn{
          text-align: center;
          background-color: #75ecf9;
          width: 100px;
          margin: 30px auto;
          border-radius: 20px;
          border: 2px solid red;
        }
    </style>
</head>

<body>

<!-- Navbar -->


<nav
    class="bg-light px-2 sm:px-4 py-2 light:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 light:border-gray-600">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="logout.php" class="flex items-center">
        <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"> -->
        <span class="self-center text-xl font-semibold whitespace-nowrap light:text-black">Occult Science
          Foundation</span>
      </a>
      <div class="flex md:order-2">
        <!-- <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button> -->
        <button data-collapse-toggle="navbar-sticky" type="button"
          class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul
          class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 light:bg-gray-800 md:light:bg-gray-900 light:border-gray-700">
          <li>
            <a href="adminpage.php"
            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Home</a>
          </li>
          <li>
            <a href="studentdata.php"
              class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px"> Student Data</a>
          </li>
          <li>
            <a href="todayappointment.php"
            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Todays Appointment</a>
          </li>
          <li>
            <a href="coursemaster.php"
            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Course Master</a>
          </li>
          <!-- <li>
            <a href="courseform.php"
              class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Add Course</a>
          </li> -->
          <li>
            <a href="batchmaster.php"
            class="block py-2 pr-4 pl-3 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 light:text-black"
              style="font-size:20px">Batch Master</a>
          </li>
          <!-- <li>
            <a href="addbatches.php"
              class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Add Batches</a>
          </li> -->
          <li>
            <a href="product_add.php"
              class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Upload Image</a>
          </li>
          <li>
            <a href="reportgeneration.html"
              class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Report Generation</a>
          </li>
          <li>
            <a href="logout.php"
              class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container bg-white shadow">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="py-4 mt-5">
            <div class='text-center pb-2'>
                <h4>Batch Master Table</h4>
            </div>

            <?php 
                $sql = "SELECT * FROM batchmaster";
                $result = mysqli_query($mysqli , $sql);
                $num = mysqli_num_rows($result);
                $no = 1;
                echo ' <table style="width:100%" class="table-hover text-center ">

            <table style="width:100%" class="table-hover text-center ">

                <tr class="bg-dark">
                    <th>id</th>
                    <th>Course Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Batch Timing</th>
                    <th>Mode</th>
                    <th>Weekdays</th>
                    <th>Remark</th>
                    <th>Action</th>
                </tr>

                <tr>';

                if($num > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      echo '
                     
                    <td>'. $no .'</td>
                    <td>'. $row["course_name"] .'</td>
                    <td>'. $row["batch_start_date"] .'</td>
                    <td>'. $row["batch_end_date"] .'</td>
                    <td>'. $row["batch_timefrom"] .' to '. $row["batch_timeto"] .'</td>
                    <td>'. $row["batch_mode"] .'</td>
                    <td>'. $row["batch_weekdays"] .'</td>
                    <td>'. $row["batch_remark"] .'</td>
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

    <div class="btn">
        <button><a href="addbatches.php">Add Batch</a></button>
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