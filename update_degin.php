<?php
$mysqli = new mysqli("localhost", "root", "", "astrology");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
$id = $_GET['id'];
$sql = "SELECT * FROM coursebooking WHERE id = '$id'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Form</title>

    <link rel="stylesheet" href="bookcourse.css">
</head>



<body>

    <div class="container">
        <div class="title"><u>COURSE BOOKING FORM</u></div>
        <div class="content">
            <form action="#" method="post" enctype="multipart/form-data">
                <!-- <div class="input-box">
                    <span class="details">Type</span>
                    <select name="type" placeholder="Select Course Name">
                        <option value="Query">Query</option>
                        <option value="Book Course">Book Course</option>
                    </select>
                </div> -->
                <div class="subheading">
                    <span class="userheading"><u>User Details</u></span>
                </div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" value="<?php echo $row['first_name'];  ?>" placeholder="First Name" name="first_name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Middle Name</span>
                        <input type="text" value="<?php echo $row['middle_name'];  ?>" placeholder="Middle Name" name="middle_name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text"  value="<?php echo $row['last_name'];  ?>" placeholder="Last Name" name="last_name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Father's Name</span>
                        <input type="text" placeholder="Father's Name"value="<?php echo $row['fathers_name'];  ?>"  name="fathers_name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="mob_no" value="<?php echo $row['mob_no'];  ?>" placeholder="Enter Your Number" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" value="<?php echo $row['email_id'];  ?>" name="email_id" placeholder="Enter Your Email">
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name="address" value="<?php echo $row['address'];  ?>" placeholder="Address" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Pin Code</span>
                        <input type="text" name="pin_code"value="<?php echo $row['pin_code'];  ?>"  placeholder="Pin Code" required>
                    </div>

                </div>

                <div class="course-details">
                    <div class="subheading">
                        <span class="slotheading"><u>Course Details</u></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Course Name</span>
                        <select value="<?php echo $row['course_name'];?>" name="course_name" id="coursenames"
                            placeholder="Select Course Name">
                            <option value="<?php echo $row['course_name'];?>">
                                                <?php echo $row['course_name'];?>
                                            </option>
              
              <option value="Tarot Cards Course" >Tarot Cards Course
              </option>
              <option value="Chaledean Numerology Course">Chaledean Numerology Course</option>
              <option value="Lal Kitaab Course" >Lal KitaabCourse</option>
              <option value="Vastu Shastra Course">Vastu Shastra Course
              </option>
              <option value="Vedic Astrology Course">Vedic Astrology Course
              </option>
              <option value="Mobile Numerology Course">Mobile Numerology Course</option>
                            </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Course Type</span>
                        <select  value="<?php echo $row['course_type'];?>" name="course_type" id="coursetypes"
                            placeholder="Select Course Name">
                            <option value="<?php echo $row['course_type'];?>">
                <?php echo $row['course_type'];?>
              </option>
              
              <option value="Basic" >Basic</option>
              <option value="Advance">Advance</option>
                            
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Batch</span>
                        <select name="batch" value="<?php echo $row['batch'];?>" id="batches" placeholder="Please Course First">
                        <option value="<?php echo $row['batch'];?>">
                <?php echo $row['batch'];?>
                <option>
              <option value="April" >April</option>
              <option value="2023-04-13">2023-04-13</option>
                    </select>
                    </div>
                <div class="payments-details">
                    <div class="subheading">
                        <span class="paymentheading"><u>Payment Details</u></span>
                    </div>
                    <div class="payments">
                        <div class="input-box">
                            <span class="details">Payment Type</span>
                            <select name="pay_type" valur="<?php echo $row['pay_type'];?>" placeholder="Select Payment Method">
                            <option value="<?php echo $row['pay_type'];?>">
                                                <?php echo $row['pay_type'];?>
                                            </option>
                                
                                <option value="Full Payment">Full Payment</option>
                                <option value="EMI">EMI</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <span class="details">UPI</span>
                            <select name="upi" value="<?php echo $row['upi'];?>" placeholder="Select Payment Method">
                            <option value="<?php echo $row['upi'];?>">
                                                <?php echo $row['upi'];?>
                                            </option>
                               <option value="">select</option>
                                <option value="UPI">UPI</option>
                                <option value="GPay">GPay</option>
                                <option value="PhonePay">PhonePay</option>
                                <option value="Paytm">Paytm</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <span class="details" >UPI Numer</span>
                            <input type="text" name="upi_no" value="<?php echo $row['upi_no'];?>" placeholder="Enter UPI Number" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Amount Paid</span>
                            <input type="text" value="<?php echo $row['amount_paid'];?>" name="amount_paid" placeholder="Enter Amount Paid" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Transction Date</span>
                            <input type="date" value="<?php echo $row['trans_date'];?>" name="trans_date" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Transction Time</span>
                            <input type="time" value="<?php echo $row['trans_time'];?>" name="trans_time" required>
                        </div>
                        <div class="input-box">
                            <!-- class name is changed from input-box to input-boxt  -->
                            <span class="details">Transction</span>
                            <input class="choose" value="<?php echo $row['trans_slip'];?>" name="trans_slip" type="file"
                                accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                        </div>

                    </div>
                </div>

                <div class="remark">
                    <div class="subheading">
                        <span class="slotheading" value="<?php echo $row['remark'];?>"><u>Remarks</u></span>
                    </div>

                    <div class="remark">
                        <textarea name="remark" value="<?php echo $row['remark'];?>" id="" cols="172" rows="4"
                            placeholder="Your Message in 50 words..."></textarea>
                    </div>

                </div>

                <div class="button1">
                    <div class="btn">
                        <input class="button" type="submit" name="register" value="Register">
                        
                    </div>
                </div>


            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    

</body>

</html>
<?php
error_reporting(0);
$mysqli = new mysqli("localhost", "root", "", "astrology");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
if ($_POST['register']) {

  $first_name = $_POST['first_name'];
  $middle_name = $_POST['middle_name'];
  $last_name = $_POST['last_name'];
  $father_name = $_POST['fathers_name'];
  $mob_no = $_POST['mob_no'];
  $email_id = $_POST['email_id'];
  $address = $_POST['address'];
  $pincode = $_POST['pin_code'];
  $course_name = $_POST['course_name'];
  $course_type = $_POST['course_type'];
  $batch = $_POST['batch'];
  
  $pay_type = $_POST['pay_type'];
  $upi = $_POST['upi'];
  $upi_no = $_POST['upi_no'];
  $amount_paid = $_POST['amount_paid'];
  $trans_date = $_POST['trans_date'];
  $trans_time = $_POST['trans_time'];
  $trans_slip = $_POST['trans_slip'];
  $remark = $_POST['remark'];
  $cer = "Not issued";
 
  $query = "UPDATE coursebooking set  first_name = '$first_name',middle_name ='$middle_name',last_name='$last_name',
fathers_name='$father_name',mob_no = '$mob_no',email_id='$email_id', address='$address',pin_code='$pincode',course_name='$course_name',
course_type='$course_type',batch = '$batch',pay_type='$pay_type', upi='$upi', upi_no='$upi_no' ,amount_paid='$amount_paid',
trans_date='$trans_date' ,trans_time='$trans_time',trans_slip='$trans_slip',certificate='$cer',remark='$remark' WHERE id = '$id'";
  $data = mysqli_query($mysqli, $query);
  if($data){
    echo "<script>alert('Update recorde Succefully');</script>";
  }
else{
  echo "<script>alert('connection failed');</script>";
}

}
?>