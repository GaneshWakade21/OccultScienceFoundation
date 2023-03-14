<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- component -->
    <link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
      <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
    
      <link rel="stylesheet"
          href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- component -->
        <link rel="stylesheet"
          href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet"
          href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    
    </head>
<body>

  <!-- <header id="header" class="">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="assets/img/logo.jpg" type="image/gif/jpg" alt="icon" width="110" height="220"></a> 
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Our Services</a></li>
          <li><a class="nav-link scrollto text-black" href="internform.html">INTERNSIP/WORKSHOP</a></li>
  
          <link rel="link rel"="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/css/bootstrap-utilities.rtl.min.css" integrity="sha512-gZkxis3omp82ModtP2XWqVg8X6BEsAFd7r+i0v6iYAl9gKXKQ03BSOEVWQizgW6Gvo+rkJJGdbjocGvitsAxMg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
          <link rel="link rel"="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js">
          <li><a class="nav-link scrollto" href="faq.html">FAQ</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="Editor.html">Dev Team</a></li>
          <li><a class="nav-link scrollto" href="adminlogin.php">Admin Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="appointment.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header> -->

 <section class=" py-12 my-12 bg-blueGray-50 ">
    <div class="w-full lg:w-11/12 px-4 mx-auto mt-6">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6
         rounded-lg  border-0">
        <div class="text-center rounded-t bg-white mb-0 px-6 py-6">
          <div class=" flex justify-center text-2xl">
            <h6 class="text-red-700 text-uppercase fw-bolder underline underline-offset-4">
              COURSE FORM
            </h6>
            
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
          <form action="courses_receipt.php" method="POST" enctype="multipart/form-data">
            <h6 class="text-pink-400 text-sm mt-3 mb-6 font-bold
              uppercase">
              Course Details
            </h6>
            <div class="flex flex-wrap">
              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Course Name
                  </label>
                    <select class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" id="grid-state" name="course_name" required>
                        <option value = "TAROT_CARD_COURSE">TAROT CARD COURSE</option>
                        <option value = "CHALEDEAN_NUMEROLOGY_COURSE">CHALEDEAN NUMEROLOGY COURSE</option>
                        <option value = "LAL_KITAAB_COURSE">LAL KITAAB COURSE</option>
                        <option value = "VASTU_SHASTRA_COURSE">VASTU SHASTRA COURSE</option>
                        <option value = "VEDIC_ASTROLOGY_COURSE">VEDIC ASTROLOGY COURSE</option>
                      </select>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Course Type
                  </label>
                  <div class="relative">
                    <select class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" id="grid-state" name="course_type" required>
                        <option value = "basic">Basic</option>
                        <option value = "advanced">Advanced</option>
                    </select>
                </div>
                  
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Course Duration
                  </label>
                  <div class="relative">
                    <select class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" id="grid-state" name="course_duration" required>
                        <option value = "1month">1month</option>
                        <option value = "2month">2month</option>
                        <option value = "6month">6month</option>
                    </select>
                </div>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Start Date
                  </label>
                  <input type="date" class="w-full h-8 px-2 text-sm
                    text-gray-700 placeholder-gray-600 border rounded-lg
                    focus:shadow-outline"
                    placeholder="Enrollement Date" name="enrollement_date" value="" required>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    End Date
                  </label>
                  <input type="date" class="w-full h-8 px-2 text-sm
                    text-gray-700 placeholder-gray-600 border rounded-lg
                    focus:shadow-outline"
                    placeholder="End Date" name="end_date" value="" required>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                <label class="block uppercase tracking-wide text-blueGray-600
                  text-xs font-bold mb-2" for="grid-state">
                  Course Fee
                </label>
                <input type="text" class="w-full h-8 px-2 text-sm
                    text-gray-700 placeholder-gray-600 border rounded-lg
                    focus:shadow-outline"
                    placeholder="Course Fee" name="course_fee" value="" >
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Date of Payment
                  </label>
                  <input type="date" class="w-full h-8 px-2 text-sm
                    text-gray-700 placeholder-gray-600 border rounded-lg
                    focus:shadow-outline"
                    placeholder="Date of Payment" name="date_of_payment" required>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Payment mode
                  </label>
                  <div class="relative">
                    <select class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" id="grid-state" name="payment_mode" required>
                        <option value = "Offiline">Offiline</option>
                        <option value = "Online">Online</option>
                        <option value = "Both">Both</option>
                    </select>
                </div>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Payment Type
                  </label>
                  <div class="relative">
                    <select class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" id="grid-state" name="payment_type" required>
                        <option value = "UPI">UPI</option>
                        <option value = "CHECK">CHECK</option>
                        <option value = "DD">DD</option>
                        <option value = "CASH">CASH</option>
                    </select>
                </div>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Total Fees
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                    text-gray-700 placeholder-gray-600 border rounded-lg
                    focus:shadow-outline"
                    placeholder="Total Fees" name="total_fees" required>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Monthly EMI
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                    text-gray-700 placeholder-gray-600 border rounded-lg
                    focus:shadow-outline"
                    placeholder="Monthly EMI" name="monthly_emi" required>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Remaining Fee
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                    text-gray-700 placeholder-gray-600 border rounded-lg
                    focus:shadow-outline"
                    placeholder="Remaining Fee" name="remaining_fee" required>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    No of Classes per week
                  </label>
                  <div class="relative">
                    <select class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" id="grid-state" name="no_of_classes" required>
                        <option value = "one">1</option>
                        <option value = "two">2</option>
                        <option value = "three">3</option>
                        <option value = "four">4</option>
                        <option value = "five">5</option>
                        <option value = "six">6</option>
                        <option value = "seven">7</option>
                    </select>
                </div>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Status
                  </label>
                  <div class="relative">
                    <select class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" id="grid-state" name="status" required>
                        <option value = "Active">Active</option>
                        <option value = "Complete">Complete</option>
                        <option value = "Suspended">Susupended</option>
                        <option value = "Dropout">Dropout</option>
                    </select>
                </div>
                </div>
              </div>
              
              
              <!-- <div class="w-full lg:w-3/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Aadhar Card <strong class="text-red-700">(Masked Aadhar Only)</strong>
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                    text-gray-700 placeholder-gray-600 border rounded-lg
                    focus:shadow-outline"
                    placeholder="Masked Aadhar Card (Last Four Digit)" name="aadhar_card" required>
                </div>
              </div> -->
              <!-- <div class="w-full lg:w-3/12 px-4  justify-content py-3">
                <div class="relative w-full mb-3">
                  <label for="formFileSm" class="block uppercase
                    text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">Masked Aadhar Card</label>
                  <input class="form-control
                    w-full 
                    h-9
                    text-gray-700
                    bg-white 
                    rounded-lg
                    transition
                    ease-in-out" id="formFileSm" type="file" name="adhar" required>
                </div>
              </div> -->
              
              <!-- <div class="w-full lg:w-3/12 px-4 justify-content py-3">
                <div class="relative w-full mb-3">
                  <label for="formFileSm" class="block uppercase
                    text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">Your Passport Size
                    Photo</label>
                  <input class="form-control
                    w-full
                    h-9
                    text-gray-700
                    bg-white
                    rounded-lg
                    transition
                    ease-in-out" id="formFileSm" type="file" name="photo" required>
                </div>
              </div> -->
            </div>
            <!-- <hr class="mt-6 border-b-1 border-blueGray-300">

            <h6 class="text-pink-400 text-sm mt-3 mb-6 font-bold
              uppercase">
              Educational Details
            </h6>
            <div class="flex flex-wrap">

              <div class="w-full lg:w-3/12 px-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Degree Name
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                    text-gray-700 placeholder-gray-600 border rounded-lg
                    focus:shadow-outline"
                    placeholder="Name of Your Degree" name="degree_name" required>
                </div>
              </div>
              <div class="w-full lg:w-3/12 px-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Year of College
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                    text-gray-700 placeholder-gray-600 border rounded-lg
                    focus:shadow-outline"
                    placeholder="Enter Year of College" name="year_of_clg" required>
                </div>
              </div>
              <div class="w-full lg:w-4/12 px-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Unverstiy Name
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                    text-gray-700 placeholder-gray-600 border rounded-lg
                    focus:shadow-outline"
                    placeholder="Enter Your Universtiy Name" name="universtiy_name" required>
                </div>
              </div>
              <div class="w-full lg:w-4/12 px-3">
              <div class="relative w-4/6 mb-3">
                  <label for="formFileSm" class="block uppercase
                    text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">Upload CV</label>
                  <input class="form-control
                    w-full 
                    h-9
                    text-gray-700
                    bg-white 
                    rounded-lg
                    transition
                    ease-in-out" id="formFileSm" type="file" name="cv" required>
                </div>
              </div>
    
                
             
              
            </div>
            <hr class="mt-6 border-b-1 border-blueGray-300">

            <h6 class="text-pink-400 text-sm mt-3 mb-6 font-bold
              uppercase">
              Internship  Details
            </h6>
            <div class="flex flex-wrap">
              <div class="w-full lg:w-2/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Intership/Workshop
                  </label>
                  <div class="relative">
                  <select name="inter_workshop" class="w-full h-8 px-2 text-sm text-gray-700
                    placeholder-gray-600 border rounded-lg
                    focus:shadow-outline" id="grid-state" required>
                    <option value="Internsip">Internship</option>
                    <option value="Worksop">Workshop</option>
                  </select>
                </div>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                    font-bold mb-2" htmlfor="grid-password">
                    Duration
                  </label>
                  <div class="relative">
                  <select name="duration" class="w-full h-8 px-2 text-sm text-gray-700
                    placeholder-gray-600 border rounded-lg
                    focus:shadow-outline" id="grid-state" required>
                    <option value="15 Days">15 Days</option>
                    <option value="30 Days">30 Days</option>
                    <option value="60 Days">60 Days</option>
                  </select>
                </div>
                </div>
              </div>
              
            </div> -->

            <hr class="mt-6 border-b-1 border-blueGray-300">

            
            </div>


            <h6 class="text-pink-400 mx-8 text-sm mt-1 mb-6 font-bold
                  uppercase">
                  Remarks
                </h6>
                  <textarea id="message" rows="4" class="mx-8 block p-2.5 w-full
                    text-sm text-gray-900 bg-gray-50 rounded-lg border
                    border-gray-300 focus:ring-blue-500 focus:border-blue-500
                    light:bg-gray-700 light:border-gray-600
                    light:placeholder-gray-400 light:text-white
                    dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Your message..." name="remarks" required></textarea>
               <div class="w-full justify-center flex items-center my-8">
               <button type="SUBMIT" class="btn btn-primary text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 font-bold">APPLY</button>
               </div>   
            </form>
          </div>
        </div>
    </section>

    <script src="assets/js/main.js"></script>
</body>
</html>
