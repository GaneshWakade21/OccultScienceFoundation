<?php

require('db.php');




// $conn = new mysqli($servername, $username, $password,$database);
$sql = "SELECT * FROM `appointment` ORDER BY `appointment`.`date_of_appointement` DESC";

$result  = mysqli_query($conn, $sql);


if(!$_COOKIE['aminloggedin']){
    header("Location: index.php");
  }
  
  ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Student Data</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <!-- <link href="css/responsive.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- component -->
    <link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        integrity=
"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous" rel="stylesheet">
  
    <!-- Html2Pdf  -->
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js" 
        integrity=
"sha512vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A==" 
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- component -->
    <link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body class="sub_page">

<nav class="bg-light px-2 sm:px-4 py-2 light:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 light:border-gray-600">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
  <a href="logout.php" class="flex items-center">
      <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"> -->
      <span class="self-center text-xl font-semibold whitespace-nowrap light:text-black">Occult Science Foundation</span>
  </a>
  <div class="flex md:order-2">
      <!-- <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button> -->
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 light:bg-gray-800 md:light:bg-gray-900 light:border-gray-700">
      <li>
        <a href="adminpage.php" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700" aria-current="page" style="font-size:20px">Home</a>
      </li>
      <li>
        <a href="studentdata.php" class="block py-2 pr-4 pl-3 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 light:text-black" style="font-size:20px"> Student Data</a>
      </li>
      <li>
        <a href="todayappointment.php" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700" style="font-size:20px">Todays Appointment</a>
      </li>
      <li>
        <a href="interns.php" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700" style="font-size:20px">Courses Data</a>
      </li>
      <li>
        <a href="logout.php" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700" style="font-size:20px">LOGOUT</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
  <!-- customers section -->
 
 <div  class="w-full flex mt-44 justify-center items-center my-13 text-2xl font-semibold">ALL STUDENT</div>
  <div class="overflow-x-auto relative ">
    <table  class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                Applicant id
                </th>
                <th scope="col" class="py-3 px-6">
                    First Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Middle Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Last Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Father's name
                </th>
                <th scope="col" class="py-3 px-6">
                    Date Of Birth
                </th>
                <th scope="col" class="py-3 px-6">
                    Age
                </th>
                <th scope="col" class="py-3 px-6">
                    Profession
                </th>
                <th scope="col" class="py-3 px-6">
                    Gender
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Phone Number
                </th>
                <th scope="col" class="py-3 px-6">
                     Hrs
                </th>
                <th scope="col" class="py-3 px-6">
                     Min
                </th>
                <th scope="col" class="py-3 px-6">
                    AM/PM
                </th>
                <th scope="col" class="py-3 px-6">
                     City
                </th>
                <th scope="col" class="py-3 px-6">
                    State
                </th>
                
                <th scope="col" class="py-3 px-6">
                Booking Time
                </th>
                <th scope="col" class="py-3 px-6">
                Booking Slots
                </th>
                <th scope="col" class="py-3 px-6">
                Fee Charged
                </th>
                <th scope="col" class="py-3 px-6">
                UPI
                </th>
                
               
                <th scope="col" class="py-3 px-6">
                UPI Phone
                </th>
                <th scope="col" class="py-3 px-6">
                Amount
                </th>
                
                <th scope="col" class="py-3 px-6">
                Transction
                </th>
                
                <th scope="col" class="py-3 px-6">
                   Remarks
                </th>
                <th scope="col" class="py-3 px-6">
                Query Type
                </th>
                <th scope="col" class="py-3 px-6">
                    Date Of Appointment
                </th>
               
            </tr>
        </thead>
       <script> function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}</script>
        <tbody>
           <?php
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "
      
      
      <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>";
      foreach($row as $key => $element )
      if($key == 'id'){
        echo "<th scope='row' class='py-4 flex px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black'>
        <form action='receipt.php'> <input value='$element' class='hidden' name='pid' id='myInput'> 
          
        <span class=''>$element<span>
          <input type='SUBMIT' class='text-blue-600' value='Report'> 
          </form>
        <form action='adminpage_search_user.php'> <input value='$element' class='hidden' name='pid' id='myInput'> 
         <input type='SUBMIT' class='text-blue-600' value='Edit'> 
          </form>
          </th>";
      }elseif($key == 'transaction_details'){
        echo "<th scope='row' class='py-4 px-6 font-medium  text-blue-900 whitespace-nowrap dark:text-black'>
        <a href='assets/docs/$element'>View Document</a>
    </th>";}
      else{
        echo "<th scope='row' class='py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black'>
          $element
      </th>";
      }
      
//       echo "<form action='receipt.php'><th scope='row' class='py-4 px-6 font-medium text-blue-900 whitespace-nowrap dark:text-black'>
//      
//   </th>";
      
   echo "</tr>
      ";
    }
   } else {
    echo "Add YOUR FIRST CUSTOMER";
   }
  




      ?>
            
        </tbody>
    </table>
</div>




  <!-- end contact section -->

  <!-- info section -->



  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>