<?php
if (!$_COOKIE['aminloggedin']) {
  header("Location: index.php");
}
// $date = date('m/d/Y h:i:s ');
// $datea = preg_replace('/[^\p{L}\p{N}\s]/u', '', $date);


// $string = str_replace(' ', '', $datea);
// echo $string;

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
              class="block py-2 pr-4 pl-3 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 light:text-black"
              aria-current="page" style="font-size:20px">Home</a>
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
          <li>
            <a href="courseform.php"
              class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:light:hover:text-black light:text-gray-400 light:hover:bg-gray-700 light:hover:text-black md:light:hover:bg-transparent light:border-gray-700"
              style="font-size:20px">Add Course</a>
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

  <!-- Form section -->
  <div class="w-full h-screen bg-gray-100 flex justify-center items-center">
    <!-- <div class="p-12 rounded w-full md:w-3/6 flex justify-center items-center shadow-black shadow-xl">
<form class="w-full max-w-md " action="adminpage_search_user.php">
  <div class="flex flex-col space-y-4 md:space-y-4 md:flex-row items-center border-b border-teal-500 py-2">
    <input name="pid" class="appearance-none outline-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Enter Patient Unquie Id" aria-label="Full name">
    
    <input value="Search" type="submit" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
     
   
    <input value="reset" type="reset" class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
    
    
  </div>
</form>
</div> -->

    <section class="text-gray-600 body-font">

      <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
          <h1 class="title-font font-medium text-3xl text-gray-900">Welcom to Admin Page
            <!-- <?php echo " " . $_COOKIE['admin']; ?> -->
          </h1>
          <p class="leading-relaxed mt-4">“We need 4 hugs a day for survival. We need 8 hugs a day for maintenance. We
            need 12 hugs a day for growth.” –Virginia Satir</p>
        </div>
        <form class=" lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0"
          action="adminpage_search_user.php">

          <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Search Candidate</h2>
          <div class="relative mb-4">
            <label for="full-name" class="leading-7 text-sm text-gray-600">Candidate ID</label>
            <input type="text" id="full-name" placeholde="Candidate ID / Mobile Number" name="pid"
              class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>

          <button type="submit"
            class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Search
            Candidate</button>
          <p class="text-xs text-gray-500 mt-3">Please Confirm Candidate ID from <a class="font-bold"
              href="studentdata.php"> here </a>Before submitting </p>

        </form>
      </div>
      

    </section>

  </div>
</body>

</html>