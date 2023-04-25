<?php
$conn = mysqli_connect("localhost", "root", "", "astrology");
if (!$conn) {
  echo "Connection faile" . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      padding-top: 4.5rem;
    }

    .main-page-container {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 55px;
    }

    .heading {
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-size: 10px;
      font-weight: bold;
      text-align: center;
    }

    .orange-container {
      z-index: -10;
      left: 50px;
      position: absolute;
      background-color: peru;
      height: 800px;
      width: 15%;
      border-radius: 20px;
    }

    .floating-cushion {
      height: 110%;
      background-color: #f2f2f2;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      padding: 20px;
      position: relative;
      width: 70%;
    }

    .incoushin {
      padding-left: 150px;
      padding-right: 100px;
    }

    .heading {
      font-size: 2.5rem;
      padding-bottom: 1.5rem;
    }

    form {
      display: grid;
      grid-template-rows: repeat(3, 3fr);
      gap: 10px;
    }

    .form-row {
      display: grid;
      grid-template-columns: repeat(3, 3fr);
      gap: 15px;
    }

    input,
    select {
      border: none;
      border-radius: 5px;
      padding: 10px;
      font-size: 16px;
      outline: none;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    button {
      border: none;
      border-radius: 5px;
      padding: 10px;
      font-size: 24px;
      outline: none;
      background-color: peru;
      color: white;
      cursor: pointer;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      transform: translate(290%, 100%);
      margin: 0 auto;
      display: block;
      width: 240px;
      height: 60px;
    }

    .dropdown-container {
      display: flex;
      justify-content: center;
      align-items: center;

    }

    #myDropdown option[value="0"] {
      color: green;
    }

    #myDropdown option[value="visitor"] {
      color: red;
    }

    /* Style for the "Courier" option */
    #myDropdown option[value="courier"] {
      color: blue;
    }

    button:hover {
      background-color: peru;
    }

    /* Media queries for responsiveness */

    @media screen and (max-width: 768px) {
      .floating-cushion {
        width: 90%;
      }

      .form-row {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media screen and (max-width: 480px) {
      .floating-cushion {
        width: 100%;
        padding: 10px;
      }

      .form-row {
        grid-template-columns: 1fr;
      }

      input,
      select {
        font-size: 14px;
        padding: 8px;
      }

      button {
        font-size: 14px;
        padding: 8px;
      }
    }
  </style>
</head>

<body>
  <div class="main-page-container">
    <div class="orange-container">

    </div>
    <div class="floating-cushion">
      <div class="incoushin">
        <div class="heading">COURSE BOOKING FORM</div>

        <form action="bookingcourse.php" method="post">
          <div class="dropdown-container">
            <select name="type" placeholder="Type" id="myDropdown">
              <option value="0">Type</option>
              <option value="visitor" id="visitor">Query</option>
              <option value="courier" id="courier">Book Course</option>
            </select>
          </div>
          <div>
            <input type="text" name="first-name" placeholder="First Name" class="courier">
            <input type="text" name="middle-name" placeholder="Middle Name" class="courier">
            <input type="text" name="last-name" placeholder="Last Name" class="courier">
            <input type="text" name="fathers-name" placeholder="Fathers Name" class="courier">
          </div>
          <div>
            <input type="text" name="phone-number" placeholder="Phone-number" class="courier">
            <input type="text" name="email" placeholder="Email" class="courier">
            <input type="text" name="address" placeholder="Address" class="courier">
            <input type="text" name="Pin Code" placeholder="Pin Code" class="courier">
          </div>
          <div class="form-row">
            <select class="visitor" name="Select Course Name" placeholder="Select Course Name">
              <option value="0">Select Course Name</option>
              <option value="tarot">Tarot Cards Course</option>
              <option value="chaledean">Chaledean Numerology Course</option>
              <option value="lalkitaab">Lal Kitaab Course</option>
              <option value="vastu">Vastu Shastra Course</option>
              <option value="vedic">Vedic Astrology Course</option>
              <option value="mobilecourse">Mobile Numerology Course</option>
            </select>
            <select name="Course Type" placeholder="Select Course Name" class="details">
              <option value="Course Type">Course Type</option>
              <option value="envelope">Basic</option>
              <option value="box">Advance</option>
            </select>
            <select name="Batch" placeholder="Please Course First" class="details">
              <option value="Courier">Batch</option>
              <option value="april">April</option>
              <option value="may">May</option>
            </select>
          </div>
          <div class="form-row">
            <select name="pay_type" placeholder="Select Payment Method">
              <option value="Payment Type">Payment Type</option>
              <option value="fullpayment">Full Payment</option>
              <option value="emi">EMI</option>
            </select>
            <select name="upi" placeholder="Select Payment Method">
              <option value="Select Payment Method">Select Payment Method</option>
              <option value="upi">UPI</option>
              <option value="gpay">GPay</option>
              <option value="phonepay">PhonePay</option>
              <option value="paytm">Paytm</option>
            </select>
          </div>
          <div>
            <input type="text" name="UPI Number" placeholder="UPI Number" class="courier">
            <input type="text" name="Amount Paid" placeholder="Amount Paid" class="courier">
          </div>
          <div class="form-row">
            <span class="details">Transction Date</span>
            <input type="date" name="trans_date" required>
          </div>
          <div class="form-row">
            <span class="details">Transction Time</span>
            <input type="time" name="trans_time" required>
          </div>
          <div class="form-row">
            <!-- class name is changed from input-box to input-boxt  -->
            <span class="details">Transaction</span>
            <input class="choose" name="trans_slip" type="file"
              accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
          </div>

          <div class="form-row">
            <div class="subheading">
              <span class="slotheading"><u>Remarks</u></span>
            </div>

            <div class="form-row">
              <textarea name="remark" id="" cols="172" rows="4" placeholder="Your Message in 50 words..."></textarea>
            </div>

          </div>

        </form>
      </div>
    </div>
  </div>
  <div class="form-row">
    <button type="submit">Submit</button>
  </div>

  <script>

    // const dropdown = document.getElementById("myDropdown");
    const courierFields = document.querySelectorAll(".courier");
    const visitorFields = document.querySelectorAll(".visitor");

    // Listen for changes in the dropdown
    dropdown.addEventListener("change", () => {
      if (dropdown.value === "visitor") {
        // Disable courier fields if visitor is selected
        courierFields.forEach(field => {
          field.disabled = true;
        });
        // Enable visitor fields if visitor is selected
        visitorFields.forEach(field => {
          field.disabled = false;
        });
      } else if (dropdown.value === "courier") {
        // Disable visitor fields if courier is selected
        visitorFields.forEach(field => {
          field.disabled = true;
        });
        // Enable courier fields if courier is selected
        courierFields.forEach(field => {
          field.disabled = false;
        });
      }
    });
  </script>
</body>

</html>