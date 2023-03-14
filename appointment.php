<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appointment Form</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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

  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- component -->
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  <link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


</head>

<body>
  <section class=" py-1 bg-blueGray-50 ">
    <div class="w-full lg:w-11/12 px-4 mx-auto mt-6">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6
           rounded-lg  border-0">
        <div class="text-center rounded-t  mb-0 px-6 py-6">
          <div class=" flex justify-center text-2xl">
            <h6 class="text-red-700 text-uppercase fw-bolder underline underline-offset-4">
              Book Your Appointment
            </h6>

          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
          <form action="appointment_reciept.php" method="post" enctype="multipart/form-data" id="appointment_form">
            <h6 class="text-pink-400 text-sm mt-3 mb-6 font-bold
                uppercase">
              Personal Details
            </h6>
            <div class="flex flex-wrap">
              <!-- <div class="w-full lg:w-1/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase tracking-wide text-blueGray-600
                    text-xs font-bold mb-2" for="grid-state">
                    Title
                  </label>
                  <div class="relative">
                    <select class="w-full h-8 px-2 text-sm text-gray-700
                      placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" id="grid-state" name="gender" required>
                      <option>Mr.</option>
                      <option>Ms.</option>
                    </select>
                  </div>
                </div>
              </div> -->
              <div class="w-full lg:w-2/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    First Name
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="First Name" name="first_name" value="" required>
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
                      focus:shadow-outline" placeholder="Middle Name" name="middle_name" value="">
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
                      focus:shadow-outline" placeholder="Last Name" name="last_name" value="" required>
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
                      focus:shadow-outline" placeholder="Father's Name" name="father_name" value="" required>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    Date of Birth
                  </label>
                  <!-- <input type="date" name="dob" required /> -->
                  <input onchange="ageCalculator()" type="date" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Date of Birth" id="dob" max='<?php echo date("Y-m-d"); ?>'
                    name="date_of_birth" required>
                </div>
              </div>


              <div class="w-full lg:w-1/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    Age
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Age" id="age" name="age" required>
                </div>
              </div>

              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    Place of Birth
                  </label>
                  <input type="text" class="w-full h-8 px-4 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Place of Birth" name="" required>
                </div>
              </div>



              <div class="w-full lg:w-1/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    Hrs
                  </label>

                  <div class="relative">
                    <select id="mySelect" required class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" name="time_of_birth_hours">
                      <option value="0:00">00</option>
                      <option value="1:00">01</option>
                      <option value="2:00">02</option>
                      <option value="3:00">03</option>
                      <option value="4:00">04</option>
                      <option value="5:00">05</option>
                      <option value="6:00">06</option>
                      <option value="7:00">07</option>
                      <option value="8:00">08</option>
                      <option value="9:00">09</option>
                      <option value="10:00">10</option>
                      <option value="11:00">11</option>
                      <option value="12:00">12</option>
                    </select>
                  </div>



                  <div class="relative">
                    <select id="mySelect" onchange="appochecker()" required class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" name="time_of_birth_min">
                      <option value="00">00</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="12">13</option>
                      <option value="12">14</option>
                      <option value="12">15</option>
                      <option value="12">16</option>
                      <option value="12">17</option>

                      <option value="12">18</option>
                      <option value="12">19</option>
                      <option value="12">20</option>
                      <option value="12">21</option>
                      <option value="12">22</option>
                      <option value="12">23</option>
                      <option value="12">24</option>
                      <option value="12">25</option>
                      <option value="12">26</option>
                      <option value="12">27</option>
                      <option value="12">28</option>
                      <option value="12">29</option>
                      <option value="12">30</option>
                      <option value="12">31</option>
                      <option value="12">32</option>
                      <option value="12">33</option>
                      <option value="12">34</option>
                      <option value="12">35</option>
                      <option value="12">36</option>
                      <option value="12">37</option>
                      <option value="12">38</option>
                      <option value="12">39</option>
                      <option value="12">40</option>
                      <option value="12">41</option>
                      <option value="12">42</option>
                      <option value="12">43</option>
                      <option value="12">44</option>
                      <option value="12">45</option>
                      <option value="12">46</option>
                      <option value="12">47</option>
                      <option value="12">48</option>
                      <option value="12">49</option>
                      <option value="12">50</option>
                      <option value="12">51</option>
                      <option value="12">52</option>
                      <option value="12">53</option>
                      <option value="12">54</option>
                      <option value="12">55</option>
                      <option value="12">56</option>
                      <option value="12">57</option>
                      <option value="12">58</option>
                      <option value="12">59</option>
                    </select>
                  </div>



                </div>
              </div>
              <div class="w-full lg:w-1/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    Min
                  </label>

                  <div class="relative">
                    <select id="mySelect" onchange="appochecker()" required class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" name="time_of_birth_min">
                      <option value="00">00</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="12">13</option>
                      <option value="12">14</option>
                      <option value="12">15</option>
                      <option value="12">16</option>
                      <option value="12">17</option>

                      <option value="12">18</option>
                      <option value="12">19</option>
                      <option value="12">20</option>
                      <option value="12">21</option>
                      <option value="12">22</option>
                      <option value="12">23</option>
                      <option value="12">24</option>
                      <option value="12">25</option>
                      <option value="12">26</option>
                      <option value="12">27</option>
                      <option value="12">28</option>
                      <option value="12">29</option>
                      <option value="12">30</option>
                      <option value="12">31</option>
                      <option value="12">32</option>
                      <option value="12">33</option>
                      <option value="12">34</option>
                      <option value="12">35</option>
                      <option value="12">36</option>
                      <option value="12">37</option>
                      <option value="12">38</option>
                      <option value="12">39</option>
                      <option value="12">40</option>
                      <option value="12">41</option>
                      <option value="12">42</option>
                      <option value="12">43</option>
                      <option value="12">44</option>
                      <option value="12">45</option>
                      <option value="12">46</option>
                      <option value="12">47</option>
                      <option value="12">48</option>
                      <option value="12">49</option>
                      <option value="12">50</option>
                      <option value="12">51</option>
                      <option value="12">52</option>
                      <option value="12">53</option>
                      <option value="12">54</option>
                      <option value="12">55</option>
                      <option value="12">56</option>
                      <option value="12">57</option>
                      <option value="12">58</option>
                      <option value="12">59</option>
                    </select>
                  </div>


                </div>
              </div>
              <div class="w-full lg:w-1/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    AM/PM
                  </label>

                  <div class="relative">
                    <select id="mySelect" onchange="appochecker()" required class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" name="time_of_birth_shift">
                      <option value="AM">AM</option>
                      <option value="PM">PM</option>
                    </select>
                  </div>
                </div>
              </div>





              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase tracking-wide text-blueGray-600
                    text-xs font-bold mb-2" for="grid-state">
                    Profession
                  </label>
                  <div class="relative">
                    <select class="w-full h-8 px-2 text-sm text-gray-700
                      placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" id="grid-state" name="profession" required>
                      <option value="Doctor">Doctor</option>
                      <option value="Engineer">Engineer</option>
                      <option value="CA">CA</option>
                      <option value="CS">CS</option>
                      <option value="Lawyer">Lawyer</option>
                      <option value="GovtEmployee">Govt Employee</option>
                      <option value="Pvt.Employee">Pvt Employee</option>
                      <option value="Businessman">Businessman</option>
                      <option value="Shop">Shop</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase tracking-wide text-blueGray-600
                    text-xs font-bold mb-2" for="grid-state">
                    Gender
                  </label>
                  <div class="relative">
                    <select class="w-full h-8 px-2 text-sm text-gray-700
                      placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" id="grid-state" name="gender" required>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    Email id
                  </label>
                  <input type="email" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Email id" name="email_id" required>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    Phone Number
                  </label>
                  <input type="number" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Phone Number" value="" name="phone_number" required>
                </div>
              </div>







              <!-- <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    City
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="City" name="city" required>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    State
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="State" name="state" required>
                </div>
              </div> -->


              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    Date of Appointment
                  </label>
                  <input type="date" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" min='<?php echo date("Y-m-d"); ?>' onchange="myFunction(this.value)"
                    value="" name="date_of_appointment" required>
                </div>
              </div>
              <script>

                const weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                let date_of_appointment = null;
                function myFunction(val) {
                  date_of_appointment = val;
                  const d = new Date(val);
                  let day = weekday[d.getDay()];
                  if (day == "Sunday") {
                    confirm("Sunday Is not Allowed to do Appointment in case You do Appointment this may cancel ");
                  }
                }


              </script>
              <?php
              require('db.php');
              $conn = new mysqli($servername, $username, $password, $database);

              $sql = "SELECT date_of_appointement,time_of_booking FROM `appointment`;";

              $result = mysqli_query($conn, $sql);
              $data = [];
              // if (mysqli_num_rows($result) > 0) {
              //   // output data of each row                                This is comment
              //   $count = 0;
              //   while ($row = mysqli_fetch_assoc($result)) {
              //     $data[$count] = $row;
              //     $count = $count + 1;
              
              //   }
              // }
              ?>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    Booking Time
                  </label>
                  <div class="relative">
                    <select id="mySelect" onchange="appochecker()" required class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" name="time_of_booking">
                      <option value="None">NONE</option>
                      <option value="8:00AM - 8:30AM">8:00AM - 8:30AM</option>
                      <option value="8:30AM - 9:00AM">8:30AM - 9:00AM</option>
                      <option value="9:00AM - 9:30AM">9:00AM - 9:30AM</option>
                      <option value="9:30AM - 10:00AM">9:30AM - 10:00AM</option>
                      <option value="10:00AM - 10:30AM">10:00AM - 10:30AM</option>
                      <option value="10:30AM - 11:00AM">10:30AM - 11:00AM</option>
                      <option value="11:00AM - 11:30AM">11:00AM - 11:30AM</option>
                      <option value="11:30AM - 12:00PM">11:30AM - 12:00PM</option>

                      <option value="12:00PM - 12:30PM">12:00PM - 12:30PM</option>
                      <option value="12:30PM - 1:00PM">12:30PM - 1:00PM</option>
                      <option value="1:00PM - 1:30PM">1:00PM - 1:30PM</option>
                      <option value="1:30PM - 2:00PM">1:30PM - 2:00PM</option>
                      <option value="2:00PM - 2:30PM">2:00PM - 2:30PM</option>
                      <option value="2:30PM - 3:00PM">2:30PM - 3:00PM</option>
                      <option value="3:00PM - 3:30PM">3:00PM - 3:30PM</option>
                      <option value="3:30PM - 4:00PM">3:30PM - 4:00PM</option>
                      <option value="4:00PM - 4:30PM">4:00PM - 4:30PM</option>
                      <option value="4:30PM - 5:00PM">4:30PM - 5:00PM</option>
                      <option value="5:00PM - 5:30PM">5:00PM - 5:30PM</option>
                      <option value="5:30PM - 6:00PM">5:30PM - 6:00PM</option>
                      <option value="6:00PM - 6:30PM">6:00PM - 6:30PM</option>
                      <option value="6:30PM - 7:00PM">6:30PM - 7:00PM</option>
                      <option value="7:00PM - 7:30PM">7:00PM - 7:30PM</option>
                      <option value="7:30PM - 8:00PM">7:30PM - 8:00PM</option>
                      <option value="8:00PM - 8:30PM">8:00PM - 8:30PM</option>
                      <option value="8:30PM - 9:00PM">8:30PM - 9:00PM</option>

                    </select>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    Booking Slots
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Slots" name="booking_slot" required>
                </div>
              </div>
              <div class="w-full lg:w-2/12 px-4 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    Fee Charged
                  </label>
                  <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Rs 500 per Slot" name="fee" required>
                </div>
              </div>
              <div class="w-full lg:w-9/12 px-2 py-3">
                <div class="relative w-full mb-3">
                  <label class="block uppercase tracking-wide text-blueGray-600
                    text-xs font-bold mb-2" for="grid-state">
                    Query Type
                  </label>
                  <div class="relative">
                    <label class="checkbox-inline">
                      <input type="checkbox" value="Business" name="query" style="margin: 3px">Business
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="Investment" name="query" style="margin: 3px">Investment
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="Relationships" name="query" style="margin: 3px">Relationships
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="Health" name="query" style="margin: 3px">Health
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="Career" name="query" style="margin: 3px">Career
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="Job" name="query" style="margin: 3px">Job
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="Marriage" name="query" style="margin: 3px">Pre Marriage
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="Marriage" name="query" style="margin: 3px">Post Marriage
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="Pregnancy" name="query" style="margin: 3px">Pregnancy
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="Litigation" name="query" style="margin: 3px">Litigation
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="ForeignTravel" name="query" style="margin: 3px">Foreign Travel
                    </label>
                  </div>
                </div>
              </div>

            </div>

            <!-- Birth Details -->

            <!-- <h6 class="text-pink-400 text-sm mt-3 mb-6 font-bold
            uppercase">
              Birth Details
            </h6>
            <div class="text-center rounded-t  mb-0 px-6 py-6">
              <div class=" flex justify-center text-2xl">

                <div class="w-full lg:w-2/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                      Father's Name
                    </label>
                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Father's Name" name="father_name" value="" required>
                  </div>
                </div>
                <div class="w-full lg:w-2/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                      Date of Birth
                    </label>
                    <input type="date" name="dob" required />     //This is comment
                    <input onchange="ageCalculator()" type="date" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Date of Birth" id="dob" max='<?php echo date("Y-m-d"); ?>'
                      name="date_of_birth" required>
                  </div>
                </div>


                <div class="w-full lg:w-1/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                      Age
                    </label>
                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Age" id="age" name="age" required>
                  </div>
                </div>



                <div class="w-full lg:w-2/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                      Place of Birth
                    </label>
                    <input type="text" class="w-full h-8 px-4 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Place of Birth" name="" required>
                  </div>
                </div> -->





            <!-- <div class="w-full lg:w-2/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                      Birth City
                    </label>
                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="City" name="city" required>
                  </div>
                </div>
                <div class="w-full lg:w-2/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                      Birth State
                    </label>
                    <input type="text" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="State" name="state" required>
                  </div>
                </div> -->










            <!-- </div> -->







            <!-- <div class=" flex justify-center text-2xl">
                <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                  Time of Birth
                </label>

                <div class="w-full lg:w-1/12 px-4 py-3">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                      Hrs
                    </label>

                    <div class="relative">
                      <select id="mySelect" required class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" name="time_of_birth_hours">
                        <option value="0:00">00</option>
                        <option value="1:00">01</option>
                        <option value="2:00">02</option>
                        <option value="3:00">03</option>
                        <option value="4:00">04</option>
                        <option value="5:00">05</option>
                        <option value="6:00">06</option>
                        <option value="7:00">07</option>
                        <option value="8:00">08</option>
                        <option value="9:00">09</option>
                        <option value="10:00">10</option>
                        <option value="11:00">11</option>
                        <option value="12:00">12</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="w-full lg:w-1/12 px-4 py-3">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                      Min
                    </label>

                    <div class="relative">
                      <select id="mySelect" onchange="appochecker()" required class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" name="time_of_birth_min">
                        <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="12">13</option>
                        <option value="12">14</option>
                        <option value="12">15</option>
                        <option value="12">16</option>
                        <option value="12">17</option>

                        <option value="12">18</option>
                        <option value="12">19</option>
                        <option value="12">20</option>
                        <option value="12">21</option>
                        <option value="12">22</option>
                        <option value="12">23</option>
                        <option value="12">24</option>
                        <option value="12">25</option>
                        <option value="12">26</option>
                        <option value="12">27</option>
                        <option value="12">28</option>
                        <option value="12">29</option>
                        <option value="12">30</option>
                        <option value="12">31</option>
                        <option value="12">32</option>
                        <option value="12">33</option>
                        <option value="12">34</option>
                        <option value="12">35</option>
                        <option value="12">36</option>
                        <option value="12">37</option>
                        <option value="12">38</option>
                        <option value="12">39</option>
                        <option value="12">40</option>
                        <option value="12">41</option>
                        <option value="12">42</option>
                        <option value="12">43</option>
                        <option value="12">44</option>
                        <option value="12">45</option>
                        <option value="12">46</option>
                        <option value="12">47</option>
                        <option value="12">48</option>
                        <option value="12">49</option>
                        <option value="12">50</option>
                        <option value="12">51</option>
                        <option value="12">52</option>
                        <option value="12">53</option>
                        <option value="12">54</option>
                        <option value="12">55</option>
                        <option value="12">56</option>
                        <option value="12">57</option>
                        <option value="12">58</option>
                        <option value="12">59</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="w-full lg:w-1/12 px-4 py-3">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                      AM/PM
                    </label>

                    <div class="relative">
                      <select id="mySelect" onchange="appochecker()" required class="w-full h-8 px-2 text-sm text-gray-700
                        placeholder-gray-600 border rounded-lg
                        focus:shadow-outline" name="time_of_birth_shift">
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->










            <hr class="mt-6 border-b-3 border-blue-300">

            <h6 class="text-pink-400 text-sm mt-3 mb-6 font-bold
                uppercase">
              Payment History
            </h6>
            <div class="flex flex-wrap">
              <div class="w-full lg:w-2/12 px-4 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-blueGray-600
                    text-xs font-bold mb-2" for="grid-state">
                  UPI
                </label>
                <div class="relative">
                  <select class="w-full h-8 px-2 text-sm text-gray-700
                      placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" id="grid-state" name="upi" required>
                    <option value="GPay">GPay</option>
                    <option value="Paytm">Paytm</option>
                    <option value="PhonePay">PhonePay</option>
                    <option value="BharatPay">BharatPay</option>
                  </select>
                </div>
              </div>

              <div class="w-full lg:w-2/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs
                      font-bold mb-2" htmlfor="grid-password">
                    UPI Phone
                  </label>
                  <input type="number" class="w-full h-8 px-2 text-sm
                      text-gray-700 placeholder-gray-600 border rounded-lg
                      focus:shadow-outline" placeholder="Phone Number" name="upi_phone_number">
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
                      focus:shadow-outline" placeholder="Amount" name="amount">
                </div>
              </div>

              <div class="w-full lg:w-6/12 px-4 py-3 justify-content">
                <div class="relative w-full mb-3">
                  <label for="formFileSm" class="block uppercase
                      text-blueGray-600 text-xs
                      font-bold mb-1" htmlfor="grid-password">Transction</label>
                  <input class="form-control
                      w-50
                      h-9
                      text-gray-700
                      bg-white
                      rounded-lg
                      transition
                      ease-in-out" id="formFileSm" type="file" name="transaction_details">
                </div>
              </div>

              <div class="w-full lg:w-3/12 px-4 py-3 justify-content">

              </div>
            </div>


        </div>

        <div class="flex flex-wrap">



        </div>
        <!-- <button type="button"  class="py-1 px-3 mr-2 ml-6 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Check Slot Availability</button> -->
        <h4 id="slotavilability" class="bg-red-500 ml-6 text-white w-auto "></h4>
      </div>
      <hr class="mt-6 border-b-1 border-blueGray-300">

      <h6 class="text-pink-400 mx-6 text-sm mt-3 mb-6 font-bold
                  uppercase">
        Remarks
      </h6>
      <textarea id="message" rows="4" class=" mx-6 block p-2.5 w-full
                    text-sm text-gray-900 bg-gray-50 rounded-lg border
                    border-gray-300 focus:ring-blue-500 focus:border-blue-500
                    light:bg-gray-700 light:border-gray-600
                    light:placeholder-gray-400 light:text-white
                    dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..." name="remarks"
        required></textarea>
      <div class="w-full justify-center flex items-center my-8">
        <!-- <script>
               var words = <?php echo json_encode($data) ?>;
               let time = false;
               let time_appoinment;
               function appochecker(){
               time_appoinment= document.getElementById("mySelect").value;
              
                time = true;  
              }
              function appointementcheck(){
                let available = true;
                <?php $abc = "<script>document.write(true)</script>" ?>
                console.log(time_appoinment)
                if(time){
                 for(const keys in words){
                  let datachecker = words[keys];
                  for(const k in  datachecker){
                    if(words[keys][k] == date_of_appointment){
                      if(words[keys]['time_of_booking'] == time_appoinment){
                        // console.log("already booked");
                        available = false;
                        
                      }else{
                        // console.log("choose another slot");
                      }
                    }else{
                      document.getElementById("slotavilability").innerHTML = "";
                     
                      document.getElementById("a").type = "submit";
                      // var element = document.getElementById("a");
                      // element.classList.remove("invisible");
                      
                    }
                  }
                  }

                  }
                if(!available){ 
                  document.getElementById("a").type = "button";
                  document.getElementById("slotavilability").innerHTML = "Slot is not Available";
                  
                  
                }
              }
              
        </script> -->

        <button type="submit" id="submit"
          class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 font-bold">MAKE
          AN APPOINTMENT</button>
      </div>
      </form>
    </div>
    </div>
    <footer class="relative pt-8 pb-6 mt-2">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center md:justify-between
                justify-center">
          <div class="w-full md:w-6/12 px-4 mx-auto text-center">
            <div class="text-sm text-blueGray-500 font-semibold py-1">
              <p>OSF@2023</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </div>
  </section>


  <script>
    function ageCalculator() {
      var userinput = document.getElementById("dob").value;
      var dob = new Date(userinput);
      console.log(dob);
      const now = new Date();
      const diff = Math.abs(now - dob);
      const age = Math.floor(diff / (1000 * 60 * 60 * 24 * 365));
      document.getElementById("age").value = age;
    }
  </script>

  <script>

    var times = {}, re = /^\d+(?=:)/;

    for (var i = 13, n = 1; i < 24; i++, n++) {
      times[i] = n < 10 ? "0" + n : n
    }

    document.getElementById("end-time")
      .onchange = function () {
        var time = this
          , value = time.value
          , match = value.match(re)[0];
        this.nextElementSibling.innerHTML =
          (match && match >= 13 ? value.replace(re, times[match]) : value)
          + (time.valueAsDate.getTime() < 43200000 ? " AM" : " PM")
      }
  </script>
</body>

</html>