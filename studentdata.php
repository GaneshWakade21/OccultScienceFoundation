<?php
$mysqli = new mysqli("localhost", "root", "", "astrology");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM coursebooking";
$result = mysqli_query($mysqli, $sql);


?>
<!DOCTYPE html>
<html>

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

  <style>
    table {
      border-collapse: collapse;
    }

    td,
    th {
      border: 2px solid black;
    }
  </style>
<style>
/* The modal window */
.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.9);
}

/* The image inside the modal */
.modal img {
  display: block;
  margin: auto;
  max-width: 50%;
  max-height: 50%;
}
</style>
</head>

<body class="sub_page">
  <!-- Navbar -->


  <nav
    class="bg-light px-2 sm:px-4 py-2 light:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 light:border-gray-600">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="logout.php" class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap light:text-black">Occult Science
          Foundation</span>
      </a>
      <div class="flex md:order-2">
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
              class="block py-2 pr-4 pl-3 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 light:text-black"
              aria-current="page" style="font-size:20px">Student Data</a>
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
          <li>
            <a href="courseform.php"
              class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Add Course</a>
          </li>
          <li>
            <a href="batchmaster.php"
              class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Batch Master</a>
          </li>
          <li>
            <a href="addbatches.php"
              class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Add Batches</a>
          </li>
          <li>
            <a href="product_add.php"
              class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Add Image</a>
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
  <!-- customers section -->

  <div class="container bg-white shadow">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="py-4 mt-5">
      <div class='text-center pb-2'>
        <h4>Students Master Table</h4>
      </div>

      <?php
      $sql = "SELECT * FROM coursebooking";
      $result = mysqli_query($mysqli, $sql);
      $num = mysqli_num_rows($result);
      $no = 1;
      echo '            <table style="width:100%" class="table-hover text-center ">
            <table style="width:100%" class="table-hover text-center ">
                <tr class="bg-dark">
                    <th>id</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Father Name</th>
                    <th>Mobile No.</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    <th>Pincode</th>
                    <th>Course Name</th>
                    <th>Course Type</th>
                    <th>Batch</th>
                    <th>Payment Type</th>
                    <th>UPI</th>
                    <th>UPI No.</th>
                    <th>Amount Paid</th>
                    <th>Transction Date</th>
                    <th>Transction Time</th>
                    <th>Transction Slip</th>
                    <th>Remark</th>
                    <th>Action</th>
                </tr>
                <tr>';


                // (id, first_name, middle_name, last_name, fathers_name, mob_no , email_id , address , pin_code , course_name , course_type , batch ,pay_type ,  upi, upi_no, amount_paid ,trans_date, trans_time, trans_slip, remark)

      if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '
                     
                    <td>' . $row["id"] . '</td>
                    <td>' . $row["first_name"] . '</td>
                    <td>' . $row["middle_name"] . '</td>
                    <td>' . $row["last_name"] . '</td>
                    <td>' . $row["fathers_name"] . '</td>
                    <td>' . $row["mob_no"] . '</td>
                    <td>' . $row["email_id"] . '</td>
                    <td>' . $row["address"] . '</td>
                    <td>' . $row["pin_code"] . '</td>
                    <td>' . $row["course_name"] . '</td>
                    <td>' . $row["course_type"] . '</td>
                    <td>' . $row["batch"] . '</td>
                    <td>' . $row["pay_type"] . '</td>
                    <td>' . $row["upi"] . '</td>
                    <td>' . $row["upi_no"] . '</td>
                    <td>' . $row["amount_paid"] . '</td>
                    <td>' . $row["trans_date"] . '</td>
                    <td>' . $row["trans_time"] . '</td>
                    <td><img class="uploadedImage" src="course_translip/'. $row["trans_slip"] .'" width="30" height="30"> '. $row["trans_slip"] .'</td>  
                    <td>' . $row["remark"] . '</td>
                    <td><button>Edit</button></td>
                    </tr>';
          $no++;
        }
      }

      ?>


      </table>
    </div>
  </div>

  <script>


  // Get the uploaded image element
  var img = document.getElementsByClassName("uploadedImage");
   Array.from(img).forEach((e) => {
    e.addEventListener("click",()=>{


    console.log(e)
    console.log(e.getAttribute("src"));
  var modal = document.createElement("div");
  modal.style.display = "block";
  modal.style.position = "fixed";
  modal.style.zIndex = "1";
  modal.style.paddingTop = "100px";
  modal.style.left = "0";
  modal.style.top = "0";
  modal.style.width = "100%";
  modal.style.height = "100%";
  modal.style.overflow = "auto";
  modal.style.backgroundColor = "rgba(0,0,0,0.9)";
  
  // Create a new image element inside the modal window
  var modalImg = document.createElement("img");
//   console.log(img[i])
//   modalImg.src = (img[i].src).slice(0, 5);;
  modalImg.src = e.getAttribute("src");
  modalImg.style.display = "block";
  modalImg.style.margin = "auto";
  modalImg.style.width = "80%";
  modalImg.style.maxWidth = "1200px";
  
  // Add the image element to the modal window
  modal.appendChild(modalImg);
  
  // Add the modal window to the page
  document.body.appendChild(modal);
  
  // Center the modal window
  var modalWidth = modal.offsetWidth;
  var modalHeight = modal.offsetHeight;
  modal.style.left = "50%";
  modal.style.top = "50%";
  modal.style.transform = "translate(-50%, -50%)";
  
  // Add a click event listener to close the modal window
  modal.addEventListener("click", function() {
    modal.style.display = "none";
  });
})
})
</script>
</body>

</html>