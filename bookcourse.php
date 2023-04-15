<?php
$con = mysqli_connect("localhost", "root", "", "astrology");
if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}
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
        <div class="title"><u>COURSE BOOKING AND QUERY FORM</u></div>
        <div class="content">
            <form action="bookingcourse.php" method="post">
                <div class="input-box">
                    <span class="details">Type</span>
                    <select name="type" placeholder="Select Course Name">
                        <option value="Query">Query</option>
                        <option value="Book Course">Book Course</option>
                    </select>
                </div>
                <div class="subheading">
                    <span class="userheading"><u>User Details</u></span>
                </div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" placeholder="First Name" name="first_name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Middle Name</span>
                        <input type="text" placeholder="Middle Name" name="middle_name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" placeholder="Last Name" name="last_name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Father's Name</span>
                        <input type="text" placeholder="Father's Name" name="fathers_name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="mob_no" placeholder="Enter Your Number" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email_id" placeholder="Enter Your Email">
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name="address" placeholder="Address" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Pin Code</span>
                        <input type="text" name="pin_code" placeholder="Pin Code" required>
                    </div>





                </div>

                <div class="course-details">
                    <div class="subheading">
                        <span class="slotheading"><u>Course Details</u></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Course Name</span>
                        <select name="course_name" placeholder="Select Course Name">
                        <?php
                        $sql = "SELECT DISTINCT course_name FROM coursemaster;";
                        $result = mysqli_query($con, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '
                                    <option value="' . $row["course_name"] . '">' . $row["course_name"] . '</option>';
                            }
                        }
                        ?>

                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Course Type</span>
                        <select name="course_type" placeholder="Select Course Name">
                        <script>
                            function selectedCourse() {
                                selCourses = document.querySelector("#coursenames").value;
                                document.cookie = "name = " + selCourses;
                            }
                            
                        </script>

                        <?php

                            $name = $_COOKIE['name'];
                            // echo $name;
                            $sql = "SELECT course_type FROM coursemaster WHERE `course_name`= '$name';";
                            $result = mysqli_query($con, $sql);
                            $num = mysqli_num_rows($result);
                            echo var_dump($result);
                            if($num > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo '
                                <option value="'. $row["course_type"] .'">'. $row["course_type"] .'</option>';
                            }
                            }
                        ?>

                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Batch</span>
                        <select name="batch" placeholder="Please Course First">
                        <script>
                            function selectedCourse() {
                                selCourses = document.querySelector("#coursenames").value;
                                document.cookie = "name = " + selCourses;
                                
                            }
                            
                        </script>

                        <?php

                        // batch_start_date
                        // batch_end_dste
                            $name = $_COOKIE['name'];
                            // echo $name;
                            $sql = "SELECT batch_start_date FROM batchmaster WHERE `course_name`= '$name';";
                            $result = mysqli_query($con, $sql);
                            $num = mysqli_num_rows($result);
                            echo var_dump($result);
                            if($num > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo '
                                <option value="'. $row["batch_start_date"] .'">'. $row["batch_start_date"] .'</option>';
                            }
                            }
                        ?>

                        </select>
                    </div>

                    <div class="input-box">
                            <span class="details">Total Fee</span>
                            <?php
                                $name = $_COOKIE['name'];
                                // echo $name;
                                $sql = "SELECT course_fee FROM coursemaster WHERE `course_name`= '$name';";
                                $result = mysqli_query($con, $sql);
                                $row = mysqli_fetch_assoc($result);
                                // echo $result;
                            ?>
                            <input type="text" name="upi_no" value="<?php echo $row['course_fee']; ?>" placeholder="Enter UPI Number" required>
                        </div>

                </div>

                <div class="input-box">
                            <span class="details">Course Duration</span>
                            <input type="text" name="upi_no" placeholder="Enter UPI Number" required>
                        </div>


                <div class="payments-details">
                    <div class="subheading">
                        <span class="paymentheading"><u>Payment Details</u></span>
                    </div>
                    <div class="payments">
                        <div class="input-box">
                            <span class="details">Payment Type</span>
                            <select name="pay_type" placeholder="Select Payment Method">
                                <option value="Full Payment">Full Payment</option>
                                <option value="EMI">EMI</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <span class="details">UPI</span>
                            <select name="upi" placeholder="Select Payment Method">
                                <option value="UPI">UPI</option>
                                <option value="GPay">GPay</option>
                                <option value="PhonePay">PhonePay</option>
                                <option value="Paytm">Paytm</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <span class="details">UPI Numer</span>
                            <input type="text" name="upi_no" placeholder="Enter UPI Number" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Amount Paid</span>
                            <input type="text" name="amount_paid" placeholder="Enter Amount Paid" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Transction Date</span>
                            <input type="date" name="trans_date" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Transction Time</span>
                            <input type="time" name="trans_time" required>
                        </div>
                        <div class="input-box">
                            <!-- class name is changed from input-box to input-boxt  -->
                            <span class="details">Transction</span>
                            <input class="choose" name="trans_slip" type="file"
                                accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                        </div>

                    </div>
                </div>

                <div class="remark">
                    <div class="subheading">
                        <span class="slotheading"><u>Remarks</u></span>
                    </div>

                    <div class="remark">
                        <textarea name="remark" id="" cols="172" rows="4"
                            placeholder="Your Message in 50 words..."></textarea>
                    </div>

                </div>

                <div class="button1">
                    <div class="btn">
                        <input class="button" type="submit" value="Register">
                    </div>
                </div>


            </form>




        </div>
    </div>
</body>

</html>