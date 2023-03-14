<!-- component -->


<?php


if(!$_COOKIE['aminloggedin']){
    header("Location: index.php");
  }

?>

<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- Favicon -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <div class="flex h-screen bg-gray-800 " :class="{ 'overflow-hidden': isSideMenuOpen }">

      
    <?php include('sidenavbar.php'); ?>

        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            <header class="z-40 py-4  bg-gray-800  ">
                <div class="flex items-center justify-between h-8 px-6 mx-auto">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                        @click="toggleSideMenu" aria-label="Menu">
                        <x-heroicon-o-menu class="w-6 h-6 text-white" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </button>

                    <!-- Search Input -->
                    <div class="flex justify-center  mt-2 mr-4">
                        <div class="relative flex w-full flex-wrap items-stretch mb-3">
                            <input type="search" placeholder="Search" {{ $attributes }}
                                class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" />
                            <span
                                class="z-10 h-full leading-snug font-normal  text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 right-0 pr-3 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 -mt-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <ul class="flex items-center flex-shrink-0 space-x-6">

                        <!-- Notifications menu -->
                        <li class="relative">
                            <button
                                class="p-2 bg-white text-green-400 align-middle rounded-full hover:text-white hover:bg-green-400 focus:outline-none "
                                @click="toggleNotificationsMenu" @keydown.escape="closeNotificationsMenu"
                                aria-label="Notifications" aria-haspopup="true">
                                <div class="flex items-cemter">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                </div>
                                <!-- Notification badge -->
                                <span aria-hidden="true"
                                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                            </button>
                            <template x-if="isNotificationsMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    @click.away="closeNotificationsMenu" @keydown.escape="closeNotificationsMenu"
                                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-green-400 border border-green-500 rounded-md shadow-md">
                                    <li class="flex">
                                        <a class="text-white inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                            href="#">
                                            <span>Messages</span>
                                            <span
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                                13
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>

                        <!-- Profile menu -->
                        <li class="relative">
                            <button
                                class="p-2 bg-white text-green-400 align-middle rounded-full hover:text-white hover:bg-green-400 focus:outline-none "
                                @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
                                aria-haspopup="true">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </button>
                            <template x-if="isProfileMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu"
                                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-green-400 border border-green-500 rounded-md shadow-md"
                                    aria-label="submenu">
                                    <!-- <li class="flex">
                                        <a class=" text-white inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                            href="product_add.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>Add NEW PRODUCT</span>
                                        </a>
                                    </li> -->
                                    <li class="flex">
                                        <a class="text-white inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-green-100 hover:text-gray-800"
                                            href="logout.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            <span>Log out</span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                    </ul>

                </div>
            </header>
            <main class="">
                <div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4 border-green-400">

                    <div class="grid grid-cols-12 gap-6">
                        <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                            <div class="col-span-12 mt-8">
                                <div class="flex items-center h-10 intro-y">
                                    <h2 class="mr-5 text-lg font-medium truncate">Dashboard</h2>
                                </div>
                                <div class="grid grid-cols-12 gap-6 mt-5">
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                </svg>
                                               
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                            <?php
                                                                require('db.php');
$todyasdate = date("Y-m-d");
$conn = new mysqli($servername, $username, $password,$database);
$casql = "SELECT SUM(amount) FROM saledata;";

$caresult  = mysqli_query($conn, $casql);

if (mysqli_num_rows($caresult) > 0) {
    $row = mysqli_fetch_assoc($caresult);
    $amountaselldata = $row['SUM(amount)'];
    // echo print_r($row);
}else{
    $amountaselldata = 0;
               }
                                                                 ?>
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8">₹ <?php echo $amountaselldata; ?>   </div>

                                                    <div class="mt-1 text-base text-gray-600">OVERALL SALES</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                </svg>
                                           
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                            <?php
                                                                require('db.php');

                                                                $conn = new mysqli($servername, $username, $password,$database);
                                                                $todyasdate = date("Y-m-d");
                                                                $casql = "SELECT SUM(amount) FROM saledata WHERE sell_date BETWEEN '$todyasdate 00:00:00' AND '$todyasdate 23:59:59';";
                                                              
                                                                $caresult  = mysqli_query($conn, $casql);
                                                             
                                                                if (mysqli_num_rows($caresult) > 0) {
                                                                    $row = mysqli_fetch_assoc($caresult);
                                                                    $amountselldata = $row['SUM(amount)'];
                                                                    // echo print_r($row);
                                                                }else{
                                                                    $amountselldata = 0;
                                                                               }
                                                                                 ?>
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8">₹<?php echo $amountselldata;  ?></div>

                                                    <div class="mt-1 text-base text-gray-600">TODAY'S SALES</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                                </svg>
                                               
                                            </div>
                                            <?php
                                                                require('db.php');

                                                                $conn = new mysqli($servername, $username, $password,$database);
                                                                $customersql = "SELECT COUNT(`aadhar card`) as c
                                                                FROM product_sell_data;";
                                                              
                                                                $cresult  = mysqli_query($conn, $customersql);
                                                             
                                                                if (mysqli_num_rows($cresult) > 0) {
                                                                    $row = mysqli_fetch_assoc($cresult);
                                                                    $cdata = $row['c'];
                                                                    // echo print_r($row);
                                                                }else{
                                                                    $cdata = 0;
                                                                               }
                                                                                 ?>
                                            <div class="ml-2 w-full flex-1">
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8"><?php echo $cdata ?>++</div>

                                                    <div class="mt-1 text-base text-gray-600">CUSTOMER COUNTS</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                                </svg>
                                             
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                            <?php
                                                                require('db.php');

                                                                $conn = new mysqli($servername, $username, $password,$database);
                                                                $kcustomersql = "SELECT COUNT(`kitty_id`) as c
                                                                FROM kitty_form;";
                                                              
                                                                $kresult  = mysqli_query($conn, $kcustomersql);
                                                             
                                                                if (mysqli_num_rows($cresult) > 0) {
                                                                    $row = mysqli_fetch_assoc($kresult);
                                                                    $kdata = $row['c'];
                                                                    // echo print_r($row);
                                                                }else{
                                                                    $kdata = 0;
                                                                               }
                                                                                 ?>
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8"><?php echo $kdata; ?></div>

                                                    <div class="mt-1 text-base text-gray-600">RUNNING COURSES</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                        href="#">
                                        <div class="p-5">
                                            hi
                                        </div>
                                    </a> -->
                                </div>
                            </div>
                            <div class="col-span-12 mt-5">
                                <div class="grid gap-2 grid-cols-1 lg:grid-cols-2">
                                    <div class="bg-white shadow-lg p-4" id="chartline"></div>
                                    <div class="bg-white shadow-lg" id="chartpie"></div>
                                </div>
                            </div>
                            <div class="col-span-12 mt-5">
                                <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                    <div class="bg-white p-4 shadow-lg rounded-lg">
                                        <h1 class="font-bold text-base">TODAYS SALE</h1>
                                        <div class="mt-4">
                                            <div class="flex flex-col">
                                                <div class="-my-2 overflow-x-auto">
                                                    <div class="py-2 align-middle inline-block min-w-full">
                                                        <div
                                                            class=" overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                            <table class="min-w-full divide-y divide-gray-200">
                                                                <thead>
                                                                    <tr>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Transaction Id</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Adhar Card</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Product Name</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Product Image</span>
                                                                            </div>
                                                                        </th>
                                                                      
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Sell Date</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Weight</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Type</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Amount</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Mode Of Payment</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Card Number</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">UPI</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Sale Time</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-blue-900 font-bold uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Remark</span>
                                                                            </div>
                                                                        </th>
                                                                        
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="bg-white divide-y divide-gray-200">
                                                                <?php
                                                                require('db.php');

                                                                $conn = new mysqli($servername, $username, $password,$database);
                                                                $sql = "SELECT * FROM `saledata` WHERE `sell_date` BETWEEN '$todyasdate 00:00:00' AND '$todyasdate 23:59:59';";
                                                                
                                                                $result  = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "
      
      
      <tr>";
      foreach($row as $key => $element ){
      if($key == 'product_image'){
        echo "  
        <td
            class='px-6 py-4 whitespace-no-wrap text-sm leading-5'>
            <p><a href='assets/sellproduct/$element' class='font-bold text-blue-500'>View Image</a></p>
        </td>
    ";
      }elseif($key == 'transaction_id'){
        echo "  
      <td
          class='px-6 py-4 whitespace-no-wrap text-sm leading-5'>
          <form action='salereciept.php'>
          <input type='text' class='hidden' name='tid' value='$element'> <input type='submit' class='bg-none text-blue-900 font-bold' value='$element'> </form>
      </td>
  ";
      }
      else{
        echo "  
      <td
          class='px-6 py-4 whitespace-no-wrap text-sm leading-5'>
          <p>$element</p>
      </td>
  ";
      }
}
      
      
   echo "</tr>
      ";
    }
   } else {
    echo "";
   }
  
   mysqli_close($conn);



      ?>
                                                                  
                                                                </tbody>
                                                               
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        function data() {
          
            return {
               
                isSideMenuOpen: false,
                toggleSideMenu() {
                    this.isSideMenuOpen = !this.isSideMenuOpen
                },
                closeSideMenu() {
                    this.isSideMenuOpen = false
                },
                isNotificationsMenuOpen: false,
                toggleNotificationsMenu() {
                    this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
                },
                closeNotificationsMenu() {
                    this.isNotificationsMenuOpen = false
                },
                isProfileMenuOpen: false,
                toggleProfileMenu() {
                    this.isProfileMenuOpen = !this.isProfileMenuOpen
                },
                closeProfileMenu() {
                    this.isProfileMenuOpen = false
                },
                isPagesMenuOpen: false,
                togglePagesMenu() {
                    this.isPagesMenuOpen = !this.isPagesMenuOpen
                },
               
            }
        }
    </script>
    <script>
        var chart = document.querySelector('#chartline')
        var options = {
            series: [{
                name: 'TEAM A',
                type: 'area',
                data: [44, 25, 31, 47, 31, 43, 26, 41, 31, 47, 33]
            }, {
                name: 'TEAM B',
                type: 'line',
                data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43]
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            stroke: {
                curve: 'smooth'
            },
            fill: {
                type: 'solid',
                opacity: [0.35, 1],
            },
            labels: ['Dec 01', 'Dec 02', 'Dec 03', 'Dec 04', 'Dec 05', 'Dec 06', 'Dec 07', 'Dec 08', 'Dec 09 ',
                'Dec 10', 'Dec 11'
            ],
            markers: {
                size: 0
            },
            yaxis: [{
                    title: {
                        text: 'Series A',
                    },
                },
                {
                    opposite: true,
                    title: {
                        text: 'Series B',
                    },
                },
            ],
            tooltip: {
                shared: true,
                intersect: false,
                y: {
                    formatter: function(y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0) + " points";
                        }
                        return y;
                    }
                }
            }
        };
        var chart = new ApexCharts(chart, options);
        chart.render();
    </script>
    <script>
        var chart = document.querySelector('#chartpie')
        var options = {
            series: [44, 55, 67, 83],
            chart: {
                height: 350,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        name: {
                            fontSize: '22px',
                        },
                        value: {
                            fontSize: '16px',
                        },
                        total: {
                            show: true,
                            label: 'Total',
                            formatter: function(w) {
                                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                return 249
                            }
                        }
                    }
                }
            },
            labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
        };
        var chart = new ApexCharts(chart, options);
        chart.render();
    </script>
</body>

</html>