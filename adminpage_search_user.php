<?php
require('db.php');
// $msg = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $pid = $_COOKIE["pidcookie"];
// $firstname = ucwords($_POST['first_name']);
// $middlename = ucwords($_POST['middle_name']);
// $lastname = ucwords($_POST['last_name']);
// $father_name = ucwords($_POST['father_name']);
// $date_of_birth = $_POST['date_of_birth'];
// $age = $_POST['age'];
// $time_of_birth = $_POST['time_of_birth'];
// $gender = $_POST['gender'];
// $city = $_POST['city'];
// $state = $_POST['state'];
// $email_id = $_POST['email_id'];
// $phone_number = $_POST['phone_number'];
// $date_of_appointment = $_POST['date_of_appointment'];
// $timefrom = $_POST['timefrom'];
// $timeto = $_POST['timeto'];
// $duration = $_POST['duration'];
// $fee = $_POST['fee'];
// $query = $_POST['query_type'];
// $upi = $_POST['upi'];
// $upi_phone = $_POST['upi_phone_number'];
// $amount = $_POST['amount'];
// $trans_date = $_POST['trans_date'];
// $trans_time = $_POST['trans_time'];
// $trans_slip = $_POST['trans_slip'];
// $remark = $_POST['remarks'];

// $conn = new mysqli($servername, $username, $password,$database);

// function id($fn,$lastname,$gendera,$doa){
//     // echo $fn;
//     $fnf =  substr($fn,0,1);
//     $snf =  substr($lastname,0,1);
//     $gen =  substr($gendera,0,1);
//     $date = date('d-m-y h:i:s');
//     $datea = preg_replace('/[^\p{L}\p{N}\s]/u', '', $date);
//     $string = str_replace(' ', '', $datea);
//     $doad = preg_replace('/[^\p{L}\p{N}\s]/u', '', $doa);
//     // echo "<br>".$fnf."<br>";
//     $id = $fnf.$snf.$gen.$doad.$string;
//     // echo $id;
//     return $id;
//   }

//   $pid = id($first_name,$last_name,$gender,$date_of_appointment);
//   $id = strtoupper($pid);  

//   $sql = "UPDATE `appointment` SET `firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname',`fathername`='$father_name',`dob`='$date_of_birth',`age`='$age',`tob`='$time_of_birth',`gender`='$gender',`birthplace`='$city',`birthstate`='$state',`email`='$email_id',`phone`='$phone_number',`doappoint`='$date_of_appointment',`timefrom`='$timefrom',`timeto`='$timeto',`totaldur`='$duration',`fee`='$fee',`query`='$query',`upi`='$upi',`upino`='$upi_phone',`amount`='$amount',`transdate`='$trans_date',`transtime`='$trans_time',`translip`='$trans_slip',`remark`='$remark' WHERE `id`='$id'";

//   $result  = mysqli_query($conn, $sql);

// $transaction_details = $_FILES['transaction_details'];

// $transaction_details_filename = "$id".$_FILES["transaction_details"]["name"];
// $transaction_details_tempname = $_FILES["transaction_details"]["tmp_name"];
// $transaction_details_folder = "./assets/docs/" . $transaction_details_filename;

// move_uploaded_file($transaction_details_tempname, $transaction_details_folder);
// //   move_uploaded_file($passport_size_photo_tempname, $passport_size_photo_folder);
// //   move_uploaded_file($medical_document_tempname, $medical_document_folder);
// }

?>



<?php
require('db.php');
// $conn = new mysqli($servername, $username, $password,$database);
$pid = $_GET['pid'];

$user = array();
$sql = "SELECT * FROM `appointment`";
$result = mysqli_query($conn, $sql);
if(!$_COOKIE['aminloggedin']){
  header("Location: index.php");
}

$avail = false;
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo $pid;
   
    if($row['phone'] == $pid || $row['id'] == $pid){
      $user = $row;
      $avail = true;
      break;
    }
  }
} else {
  header("Location: adminpage.php");
}
if(!$avail){
  header("Location: adminpage.php");
}


// echo var_dump($user);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- component -->
    <link href="assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"
        rel="stylesheet">

    <!-- Html2Pdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"
        integrity="sha512vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A=="
        crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <style>
    .heading {
        text-align: center;
        color: #2F8D46;
    }
    </style>
    <title>Searched Candidate</title>
</head>

<body>

    <!-- <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
  <a href="https://flowbite.com/" class="flex items-center">
      <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Medicio</span>
  </a>
  <div class="flex md:order-2">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="adminpage.php" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
      </li>
      <li>
        <a href="patientdata.php" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"> Patient Data</a>
      </li>
      <li>
        <a href="todaysappointment.php" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Todays Appointment</a>
      </li>
      <li>
        <a href="index.php" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold">LOGOUT</a>
      </li>
    </ul>
  </div>
  </div>
</nav> -->
    <!-- Form section -->
    <form action="print.php" method="post" enctype="multipart/form-data">
        <input type="text" class="hidden" value="<?php echo $pid;  ?>" name="cid">
        <section class=" py-1 bg-blueGray-50">
            <div class="w-full lg:w-11/12 px-4 mx-auto mt-6">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6
          shadow-lg rounded-lg bg-light-50 border-0 h-auto" id="form-print" enctype="text/plain">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class=" flex justify-between">
                            <h6 class="text-center text-blueGray-700 text-xl font-bold ">
                                <strong class="text-red-700 ">APPOINTMENT DETAILS</strong>
                            </h6>
                            <h4 id="slotavilability" class="text-2xl ml-6 font-bold text-red-500 w-auto "></h4>

                            <input id="submit" type="submit" class="font-bold bg-pink-500 text-white active:bg-pink-600 font-bold
                uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md
                outline-none focus:outline-none mr-1 ease-linear transition-all
                duration-150" value="submit">

                        </div>
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                        <h6 class="text-pink-400 text-sm mt-3 mb-6 font-bold
                uppercase">
                            Personal Details
                        </h6>
                        <div class="flex flex-wrap">

                        <input name="id" type="text" hidden value="<?php echo $user['id'];?>">

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        First Name
                                    </label>
                                    <div class="flex justify-center items-center ">
                                        <?php echo ($user['gender'] == 'male' || 'Male') ?"Mr. ":"Mrs. "; ?>
                                        <input type="text" class="w-full h-8 mx-2 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="First Name" name="first_name"
                                            value="<?php echo $user['firstname'];?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Middle Name
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Middle Name" name="middle_name"
                                        value="<?php echo $user['middlename'];?>" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Last Name
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Last Name" name="last_name"
                                        value="<?php echo $user['lastname'];?>" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Father's Name
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" min='<?php echo date("Y-m-d"); ?>' placeholder="Father's Name"
                                        name="father_name" value="<?php echo $user['fathername'];?>" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Date of Birth
                                    </label>
                                    <input type="date" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Date of Birth" name="date_of_birth"
                                        value="<?php echo $user['dob'];?>" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-1/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Age
                                    </label>
                                    <input type="number" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Age" name="age" value="<?php echo $user['age'];?>" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        TIme Of Birth
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" min='<?php echo date("Y-m-d"); ?>' placeholder="Father's Name"
                                        name="time_of_birth" value="<?php echo $user['tob'];?>" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase tracking-wide text-blueGray-600
                    text-xs font-bold mb-2" for="grid-state">
                                        Gender
                                    </label>
                                    <div class="relative">
                                        <select class="w-full h-8 px-2 text-sm text-gray-700
                      placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" id="grid-state" name="gender" value="<?php echo $user['gender'];?>"
                                            required>
                                            <option value="<?php echo $user['gender'];?>">
                                                <?php echo $user['gender'];?>
                                            </option>
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                            <option value="Other">Other</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        City
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="City" value="<?php echo $user['birthplace'];?>" name="city"
                                        required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        State
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="State" value="<?php echo $user['birthstate'];?>" name="state"
                                        required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Email id
                                    </label>
                                    <input type="email" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Email id" name="email_id" value="<?php echo $user['email'];?>"
                                        required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Phone Number
                                    </label>
                                    <input type="number" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Phone Number" value="<?php echo $user['phone'];?>"
                                        name="phone_number" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Date of Appointment
                                    </label>
                                    <input type="date" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" value="<?php echo $user['doappoint'];?>" name="date_of_appointment"
                                        required>
                                </div>
                            </div>

                            <script>
                            const weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
                                "Saturday"
                            ];
                            let date_of_appointment = null;

                            function myFunction(val) {
                                date_of_appointment = val;
                                const d = new Date(val);
                                let day = weekday[d.getDay()];
                                if (day == "Sunday") {
                                    confirm(
                                        "Sunday Is not Allowed to do Appointment in case You do Appointment this may cancel "
                                    );
                                }
                            }
                            </script>

                            <?php
               require('db.php');
            //   //  $conn = new mysqli($servername, $username, $password,$database);

            //    $sql = "SELECT date_of_appointement,time_of_booking FROM `appointment`;";
               
            //    $result  = mysqli_query($conn, $sql);
            //    $data = [];
            //    if (mysqli_num_rows($result) > 0) {
            //     // output data of each row
            //     $count = 0 ;
            //     while($row = mysqli_fetch_assoc($result)) {
            //       $data[$count]= $row;
            //       $count = $count+1;
                 
            //     }
            //    }
              ?>


                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
      font-bold mb-2" htmlfor="grid-password">
                                        Time From
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
      text-gray-700 placeholder-gray-600 border rounded-lg
      focus:shadow-outline" min='<?php echo date("Y-m-d"); ?>' placeholder="Father's Name" name="timefrom"
                                        value="<?php echo $user['timefrom'];?>" required>
                                </div>
                            </div>


                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
      font-bold mb-2" htmlfor="grid-password">
                                        Time To
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
      text-gray-700 placeholder-gray-600 border rounded-lg
      focus:shadow-outline" min='<?php echo date("Y-m-d"); ?>' placeholder="Father's Name" name="timeto"
                                        value="<?php echo $user['timeto'];?>" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-1/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
      font-bold mb-2" htmlfor="grid-password">
                                        Total Duration
                                    </label>
                                    <input type="number" class="w-full h-8 px-2 text-sm
      text-gray-700 placeholder-gray-600 border rounded-lg
      focus:shadow-outline" name="duration" value="<?php echo $user['totaldur'];?>" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-1/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Fee
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" value="<?php echo $user['fee'];?>" name="fee" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Query Type
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" value="<?php echo ucfirst(str_replace(","," , ",$user['query']));?>"
                                        name="query_type" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        UPI
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" value="<?php echo $user['upi'];?>" name="upi" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        UPI Phone
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" value="<?php echo $user['upino'];?>" name="upi_phone_number" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Amount
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" value="<?php echo $user['amount'];?>" name="amount" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Transaction Date
                                    </label>
                                    <input type="date" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="" name="trans_date" value="<?php echo $user['transdate'];?>"
                                        required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Transaction Time
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" min='<?php echo date("Y-m-d"); ?>' placeholder="" name="trans_time"
                                        value="<?php echo $user['transtime'];?>" required>
                                </div>
                            </div>

                            <div class="w-full lg:w-2/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                                        Transaction Slip
                                    </label>
                                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" min='<?php echo date("Y-m-d"); ?>' placeholder="" name="trans_slip"
                                        value="<?php echo $user['translip'];?>" required>
                                </div>
                            </div>

                        </div>
                        <h6 class="text-pink-400 text-sm mt-3 mb-6 font-bold
                  uppercase mx-4 my-4">
                            Remarks
                        </h6>
                        <textarea id="message" rows="4" class="mx-2 block p-2.5 w-full
                    text-sm text-gray-900 bg-gray-50 rounded-lg border
                    border-gray-300 focus:ring-blue-500 focus:border-blue-500
                    light:bg-gray-700 light:border-gray-600
                    light:placeholder-gray-400 light:text-white
                    dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your message..."><?php echo $user['remark'];?></textarea>
                        <input name="remarks" value="<?php echo $user['remark'];?>" class="hidden">



                    </div>

                    <footer class="relative pt-3 pb-6 ">
                        <div class="container mx-auto px-4">
                            <div class="flex flex-wrap items-center md:justify-between
                justify-center">

                                <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                                    <a href="" type="submit">
                                        <button class="bg-pink-500 text-white active:bg-pink-600 font-bold
                uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md
                outline-none focus:outline-none mr-1 ease-linear transition-all
                duration-150" type="button">
                                            SUBMIT FORM
                                        </button>
                                    </a>
                                    <div class="text-sm text-blueGray-500 font-semibold py-1 my-12">
                                        <p>OSF@2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
        </section>
    </form>

    <script>
    // Function to GeneratePdf
    function GeneratePdf() {
        var element = document.getElementById('form-print');
        html2pdf(element);
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <script>
    var words =<?php echo json_encode($data);?>;
    let time = false;
    let time_appoinment;

    function appochecker() {
        time_appoinment = document.getElementById("mySelect").value;

        time = true;
    }

    // function appointementcheck() {
    //     let available = true;
    //     <?php $abc = "<script>document.write(true)
    // </script>"?>
    // console.log(time_appoinment)
    // if(time){
    // for(const keys in words){
    // let datachecker = words[keys];
    // for(const k in datachecker){
    // if(words[keys][k] == date_of_appointment){
    // if(words[keys]['time_of_booking'] == time_appoinment){
    // // console.log("already booked");
    // available = false;

    // }else{
    // // console.log("choose another slot");
    // }
    // }else{
    // document.getElementById("slotavilability").innerHTML = "";

    // document.getElementById("a").type = "submit";
    // var element = document.getElementById("a");
    // element.classList.remove("invisible");

    // }
    // }
    // }

    // }
    // if(!available){
    // document.getElementById("a").type = "button";
    // document.getElementById("slotavilability").innerHTML = "Slot is not Available";


    // }
    // }

    </script>
    <script>
        document.getElementById("submit").addEventListener("submit", function(event){
  event.preventDefault();
});
    </script>
</body>

</html>