<?php
$mysqli = mysqli_connect("localhost", "root", "", "astrology");
if(mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}
$id = $_GET['id'];
$sql = "SELECT * FROM batchmaster WHERE batch_id = '$id'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$week = $row['batch_weekdays'];
$week1 = explode(",", $week);


?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>


    <div class="container"><br>
        <div class="col-lg-6 m-auto d-block">
            <form action="#" method="post" class="bg-light">
                <div class="form-group">
                    <label for="coursenames" class="font-weight-bold"> Course Name: </label>
                    <select onchange="autoCourseType()" name="coursenames" id="coursenames">
                    <option value="<?php echo $row['course_name'];?>">
                <?php echo $row['course_name'];?>
                 </option>
              
                        <option value="Tarot Cards Course">Tarot Cards Course</option>
                        <option value="Chaledean Numerology Course">Chaledean Numerology Course</option>
                        <option value="Lal Kitaab Course">Lal Kitaab Course</option>
                        <option value="Vastu Shastra Course">Vastu Shastra Course</option>
                        <option value="Vedic Astrology Course">Vedic Astrology Course</option>
                    
    
                    </select>
                    <span id="coursename" class="text-danger font-weight-bold"> </span>
                </div>
            

            

            <div class="form-group">
                <label class="font-weight-bold"> Start Date </label>
                <input hidden type="text" id="hiddenGetMonth">
                <input onchange="autoEndDate()" value="<?php echo $row['batch_start_date'];?>" required type="date" name="start_date" id="startdate"
                    autocomplete="off">
                <span id="mobileno" class="text-danger font-weight-bold"> </span>
            </div>
            <?php

            //   echo ' <script>
            //     function selectedCourseType() {
            //         selCoursesType = document.querySelector("#coursetypes").value;
            //         document.cookie = "type = " + selCoursesType;
            //         console.log(document.cookie)
            //     }
            //     </script>';
            //    $selc = selCoursesType;
            //    console.log($selc);
            //       $type = $_COOKIE['type'];
            //     //   echo $type;
            //                     $sql = "SELECT course_duration FROM coursemaster WHERE `course_name`= '$name' AND `course_type` = '$type';";
            //                     $result = mysqli_query($con, $sql);
            //                     $num = mysqli_num_rows($result);
            //                     if($num > 0){
            //                         $row = mysqli_fetch_assoc($result);
            //                         // echo $row["course_duration"];
            //                         setcookie("course_duration", $row["course_duration"]);
            //                     }
                              
                            ?>

            <div class="form-group">
                <label class="font-weight-bold"> End Date </label>
                <input required type="date" value="<?php echo $row['batch_end_date'];?>" name="end_date" id="enddate" autocomplete="off">
                <span id="emailids" class="text-danger font-weight-bold"> </span>
            </div>

            <!-- <div class="form-group">
                    <label for="modes" class="font-weight-bold">No of sessions per week </label>
               
                    <select name="mode" id="modes">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    <span id="text" class="text-danger font-weight-bold"> </span>
                </div> -->

            <div class="form-group" style="display: inline-flex;">
                <label class="font-weight-bold"> Batch Timings </label>
                <div class="input-box">
                    <span class="details"></span>

                    <!-- <input type="time" id="timefrom" name="timefrom" min="09:00" max="23:30" step="1800"> -->

                    <select id="timefrom" name="timefrom" placeholder="9:00 PM">
                    <option value="<?php echo $row['batch_timefrom'];?>">
                <?php echo $row['batch_timefrom'];?>
                 </option>
              
                        
                        <option value="09:00">9:00 AM</option>
                        <option value="09:30">9:30 AM</option>
                        <option value="10:00">10:00 AM</option>
                        <option value="10:30">10:30 AM</option>
                        <option value="11:00">11:00 AM</option>
                        <option value="11:30">11:30 AM</option>
                        <option value="12:00">12:00 PM</option>
                        <option value="12:30">12:30 PM</option>
                        <option value="13:00">1:00 PM</option>
                        <option value="13:30">1:30 PM</option>
                        <option value="14:00">2:00 PM</option>
                        <option value="14:30">2:30 PM</option>
                        <option value="15:00">3:00 PM</option>
                        <option value="15:30">3:30 PM</option>
                        <option value="16:00">4:00 PM</option>
                        <option value="16:30">4:30 PM</option>
                        <option value="17:00">5:00 PM</option>
                        <option value="17:30">5:30 PM</option>
                        <option value="18:00">6:00 PM</option>
                        <option value="18:30">6:30 PM</option>
                        <option value="19:00">7:00 PM</option>
                        <option value="19:30">7:30 PM</option>
                        <option value="20:00">8:00 PM</option>
                        <option value="20:30">8:30 PM</option>
                        <option value="21:00">9:00 PM</option>
                        <option value="21:30">9:30 PM</option>
                        <option value="22:00">10:00 PM</option>
                        <option value="22:30">10:30 PM</option>
                        <option value="23:00">11:00 PM</option>
                        <option value="23:30">11:30 PM</option>
                        <option value="24:00">12:00 PM</option>
                    </select>
                </div>

                <div class="input-box">
                    <span class="details"> To</span>

                    <!-- <input type='time' id='timeto' name='timeto' value="09:30" step='600' min="09:30"
                                        max="24:00" onchange="displayalert()"> -->

                    <select onchange="durationCal()" id="timeto" name="timeto">
                    <option value="<?php echo $row['batch_timeto'];?>">
                <?php echo $row['batch_timeto'];?>
                 </option>
              
                        
                        <option value="09:00">9:00 AM</option>
                        <option value="09:30">9:30 AM</option>
                        <option value="10:00">10:00 AM</option>
                        <option value="10:30">10:30 AM</option>
                        <option value="11:00">11:00 AM</option>
                        <option value="11:30">11:30 AM</option>
                        <option value="12:00">12:00 PM</option>
                        <option value="12:30">12:30 PM</option>
                        <option value="13:00">1:00 PM</option>
                        <option value="13:30">1:30 PM</option>
                        <option value="14:00">2:00 PM</option>
                        <option value="14:30">2:30 PM</option>
                        <option value="15:00">3:00 PM</option>
                        <option value="15:30">3:30 PM</option>
                        <option value="16:00">4:00 PM</option>
                        <option value="16:30">4:30 PM</option>
                        <option value="17:00">5:00 PM</option>
                        <option value="17:30">5:30 PM</option>
                        <option value="18:00">6:00 PM</option>
                        <option value="18:30">6:30 PM</option>
                        <option value="19:00">7:00 PM</option>
                        <option value="19:30">7:30 PM</option>
                        <option value="20:00">8:00 PM</option>
                        <option value="20:30">8:30 PM</option>
                        <option value="21:00">9:00 PM</option>
                        <option value="21:30">9:30 PM</option>
                        <option value="22:00">10:00 PM</option>
                        <option value="22:30">10:30 PM</option>
                        <option value="23:00">11:00 PM</option>
                        <option value="23:30">11:30 PM</option>
                        <option value="24:00">12:00 PM</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="modes" class="font-weight-bold">Batch Mode </label>
                <select name="mode" id="modes">
                <option value="<?php echo $row['batch_mode'];?>">
                <?php echo $row['batch_mode'];?>
                 </option>
              
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                    <option value="Both">Both</option>
                </select>
                <span id="text" class="text-danger font-weight-bold"> </span>
            </div>

            <!-- 
                <div class="form-group">
                    <label for="modes" class="font-weight-bold">Batch Mode </label>
                    <input type="radio" id="age1" name="mode" value="Online">
                    <label for="age1">Online</label><br>
                    <input type="radio" id="age2" name="mode" value="Offline">
                    <label for="age2">Offline</label><br>
                    <input type="radio" id="age3" name="mode" value="Both">
                    <label for="age3">Both</label><br><br>
                    <span id="text" class="text-danger font-weight-bold"> </span>
                </div> -->


            <!-- <div class="form-group">
                    <label for="sessions" class="font-weight-bold">No of sessions per week </label>
                    <input type="text" name="text" class="form-control" id="text" autocomplete="off">
                    <select onclick="selectedSession()" name="sessions" id="sessions">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    <span id="text" class="text-danger font-weight-bold"> </span>
                </div> -->

            
                <span id="text" class="text-danger font-weight-bold"> </span>
            </div>

            <label class="font-weight-bold"> Weekdays </label>
            <div class="query row col-md-4"  name="query">
                <div class="subheading">
                </div>
                <div class="check">
                    <div class="option">
                        <label for="dot-1">Sunday</label>
                        <input class="weekCheckBox"  type="checkbox"  name="querytype[]" value="Sunday"
                          <?php
                        if(in_array('Sunday', $week1)){
                            echo "checked";
                        }
                        ?>
                          id="dot-1"
                        >
                    </div>

                    <div class="option">
                        <label for="dot-2">Monday</label>
                        <input class="weekCheckBox"  type="checkbox" name="querytype[]" value="Monday" id="dot-2"
                        <?php
                        if(in_array('Monday', $week1)){
                            echo "checked";
                        }
                        ?>
                        >
                    </div>
                    <div class="option">
                        <label for="dot-3">Tuesday</label>
                        <input class="weekCheckBox"  type="checkbox" name="querytype[]" value="Tuesday" id="dot-3"
                        <?php
                        if(in_array('Tuesday', $week1)){
                            echo "checked";
                        }
                        ?>
                        >
                    </div>
                    <div class="option">
                        <label for="dot-4">Wednesday</label>
                        <input class="weekCheckBox" type="checkbox"  name="querytype[]" value="Wednesday" id="dot-4"
                        <?php
                        if(in_array('Wednesday', $week1)){
                            echo "checked";
                        }
                        ?>
                        >
                    </div>
                    <div class="option">
                        <label for="dot-5">Thursday</label>
                        <input class="weekCheckBox" type="checkbox" name="querytype[]" value="Thursday" id="dot-5"
                        <?php
                        if(in_array('Thursday', $week1)){
                            echo "checked";
                        }
                        ?>
                        >
                    </div>
                    <div class="option">
                        <label for="dot-7">Friday</label>
                        <input class="weekCheckBox" type="checkbox" name="querytype[]"  value="Friday" id="dot-7"
                        <?php
                        if(in_array('Friday', $week1)){
                            echo "checked";
                        }
                        ?>
                        >
                    </div>
                    <div class="option">
                        <label for="dot-6">Saturday</label>
                        <input class="weekCheckBox" type="checkbox" value="<?php echo $row['batch_weekdays'];?>" name="querytype[]" value="Saturday" id="dot-6"
                        <?php
                        if(in_array('Saturday', $week1)){
                            echo "checked";
                        }
                        ?>
                        >
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label for="remarks" class="font-weight-bold"> Remark </label>
                <input type="text" value="<?php echo $row['batch_remark'];?>" name="remark" class="form-control" id="remarks" autocomplete="off">
                <span id="remarksspan" class="text-danger font-weight-bold"> </span>
            </div>

            <input type="submit" name="register" value="submit" class="btn btn-success" autocomplete="off">
            </form><br><br>


        </div>
    </div>

    <script>


  function autoWeekLimit() {
                    classPerWeek = parseInt(document.getElementById("cpw").value);
                    $('.weekCheckBox').click(function() {
                        if ($('.weekCheckBox:checked').length >= classPerWeek) {
                            $(".weekCheckBox").not(":checked").attr("disabled", true);
                        } else
                            $(".weekCheckBox").not(":checked").removeAttr('disabled');
                    });
                }

    function autoCourseType() {
        coursetypes = document.querySelector("#coursetypes");
        coursetypes.innerHTML = '';
        cnames = document.querySelector("#coursenames").value;
        ctypes = document.querySelector("#coursetypes").value;
        dataString = {
            "cname": cnames,
            "ctype": ctypes
        };
        $.ajax({
            type: 'POST',
            url: 'batch_auto_ctype.php',
            data: {
                data: dataString,
            },
            success: function(response) {
                ctypeArr = JSON.parse(response)
                for (let i = 0; i < ctypeArr.length; i++) {
                    option = document.createElement("option");
                    option.innerText = ctypeArr[i];
                    option.setAttribute("value", ctypeArr[i]);
                    coursetypes.appendChild(option);
                }
                autoGetMonth();
               
            }
        });
    }

    function autoGetMonth(){
        cnames = document.querySelector("#coursenames").value;
        ctypes = document.querySelector("#coursetypes").value;
        dataString = {
            "cname": cnames,
            "ctype": ctypes
        };
        // console.log("ctypes is",ctypes);

                $.ajax({
            type: 'POST',
            url: 'batch_auto_getDate.php',
            data: {
                data: dataString,
            },
            success: function(response) {
                // console.log("datastring is ", dataString)
                // console.log("Response",response)
                hiddenGetMonth.value = response;
            }
        });
    }

    function autoEndDate() {
        dura = document.getElementById("hiddenGetMonth").value;
        sdate = document.getElementById("startdate").value;
        edate = document.getElementById("enddate");
        if(sdate == ""){
            return;
        }
        increamentMonth = dura.slice(dura.indexOf("Month")-2,dura.indexOf("Month")-1);
        let sdateYear = sdate.slice(0, 4)
        let sdateMonth = sdate.slice(5, 7)
        let sdateDay = sdate.slice(8, 10)
        let sdateNewMonth = parseInt(sdateMonth) + parseInt(increamentMonth);

        var d = new Date(),
            month = '' + sdateNewMonth;
        day = '' + sdateDay,
            year = sdateYear;

        if (month.length < 2)
            month = '0' + month;
        if (day.length < 2)
            day = '0' + day;

        edate.value = [year, month, day].join('-');
    }

    $(document).ready(function () {
            $("#coursenames").trigger('change');
            // $("#coursetypes").trigger('change');
        });
    </script>
    <!-- <script src="jquery-3.6.4.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/d3js/7.8.4/d3.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>


</body>

</html>
<?php
error_reporting(0);
$mysqli = new mysqli("localhost", "root", "", "astrology");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
if($_POST['register']) {
  $course_name = $_POST['coursenames'];
  
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $time_from = $_POST['timefrom'];
  $time_to = $_POST['timeto'];
  $no_classes_per_week = $_POST['mode'];
  //$weekdays = $_POST['querytype[]'];
  $week = $_POST['querytype'];
  $d = implode("," , $week);
  $remark = $_POST['remark'];
  
 
  $query = "UPDATE batchmaster set  course_name = '$course_name',batch_start_date = '$start_date',
batch_end_date='$end_date',batch_timefrom = '$time_from',batch_timeto = '$time_to' , batch_weekdays ='$d',
batch_remark='$remark' WHERE batch_id = '$id'";
  $data = mysqli_query($mysqli, $query);
  if($data){
    echo "<script>alert('Update recorde Succefully');</script>";
}
else{
  echo "<script>alert('connection failed');</script>";
}

 
}
?>